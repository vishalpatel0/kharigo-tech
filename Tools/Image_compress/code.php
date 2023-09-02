<?php
// echo "<pre>";
// print_r($_POST);
// print_r($_FILES);
// echo "<pre>";
$percentage = isset($_POST['percentageReduction']) && !empty($_POST['percentageReduction']) ? $_POST['percentageReduction'] : null;
$new_width = isset($_POST['imageWidth']) && !empty($_POST['imageWidth']) ? $_POST['imageWidth'] : null;
$new_height = isset($_POST['imageHeight']) && !empty($_POST['imageHeight']) ? $_POST['imageHeight'] : null;
$quality = isset($_POST['compressionQuality']) && !empty($_POST['compressionQuality']) ? $_POST['compressionQuality'] : null;
$g_recaptcha_response = isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : null;


if (isset($_POST['file_url']) && !empty($_POST['file_url'])) {
    $file_path = $_POST['file_url'];
} else if (isset($_FILES['file_select']) && !empty($_FILES['file_select'])) {
    $file_path =  $_FILES['file_select']['tmp_name'];
}
$check = v2_google_recaptcha($g_recaptcha_response);
if ($check) {
    show_img($file_path, $new_width = 200, $new_height = 200, $percentage, $quality);
    header("Location: index.php");
    exit;
} else {
    echo "Sorry unsecure activity detected.";
}
function show_img($file_path, $new_width = null, $new_height = null, $percentage = null, $quality = 70)
{

    if (filter_var($file_path, FILTER_VALIDATE_URL)) {
        // If the file path is a URL, download the image and save it to a temporary file
        $temp_file_path = tempnam(sys_get_temp_dir(), 'img');
        file_put_contents($temp_file_path, file_get_contents($file_path));
        $file_path = $temp_file_path;
    }

    // Get the image type and create an image resource based on the file path
    list($originalWidth, $originalHeight, $image_type, $attr) = getimagesize($file_path);

    switch ($image_type) {
        case IMAGETYPE_JPEG:
            $originalImage = imagecreatefromjpeg($file_path);
            break;
        case IMAGETYPE_PNG:
            $originalImage = imagecreatefrompng($file_path);
            break;
        case IMAGETYPE_GIF:
            $originalImage = imagecreatefromgif($file_path);
            break;
        case IMAGETYPE_JPEG2000:
            $originalImage = imagecreatefromjpeg($file_path);
            break;
        default:
            throw new Exception("Invalid image type");
    }


    // Calculate the aspect ratio if only one dimension is specified
    if (!empty($percentage)) {
        $percentage = $percentage / 100;
        $new_height = $originalHeight - ($originalHeight * $percentage);
        $new_width = $originalWidth - ($originalWidth * $percentage);
    } else
    if ($new_width && !$new_height) {
        $new_height = floor($originalHeight * ($new_width / $originalWidth));
    } elseif (!$new_width && $new_height) {
        $new_width = floor($originalWidth * ($new_height / $originalHeight));
    }

    // Create a new image with the desired dimensions
    $resized_image = imagecreatetruecolor($new_width, $new_height);
    // Scale the original image to the new dimensions
    imagecopyresampled($resized_image, $originalImage, 0, 0, 0, 0, $new_width, $new_height, $originalWidth, $originalHeight);

    // Set the Content-Disposition header to specify that the response should be downloaded as an attachment


    // Free up memory by destroying the image resources
    imagedestroy($originalImage);
    imagedestroy($resized_image);
    // Remove the temporary file
    if (!empty($temp_file_path)) {
        unlink($temp_file_path);
    }

    // Output the image with the appropriate Content-Type header
    switch ($image_type) {
        case IMAGETYPE_JPEG:
        case IMAGETYPE_JPEG2000:
            $extension = 'jpg';
            header('Content-Type: image/jpeg');
            break;
        case IMAGETYPE_PNG:
            $extension = 'png';
            header('Content-Type: image/png');
            break;
        case IMAGETYPE_GIF:
            $extension = 'gif';
            header('Content-Type: image/gif');
            break;
        default:
            throw new Exception("Invalid image type");
    }
    // Combine static filename with extension
    $download_filename_with_extension =   date('d_m_Y') . '_Kharigo_tech.' . $extension;
    // Set the Content-Disposition header to prompt for download
    header('Content-Disposition: attachment; filename="' . $download_filename_with_extension . '"');


    imagejpeg($resized_image, null, $quality);
}


function v2_google_recaptcha($recaptchaResponse)
{
    // Build the request URL to the reCAPTCHA API
    $recaptchaUrl = 'https://www.google.com/recaptcha/api/siteverify';
    $v2_secret_key = "6LcDcfAlAAAAAFlcHdPkad-Bh7qKTBxJsw3WCZTn";
    $recaptchaSecretKey = $v2_secret_key; // Replace with your reCAPTCHA secret key
    $recaptchaVerifyUrl = $recaptchaUrl . '?secret=' . $recaptchaSecretKey . '&response=' . $recaptchaResponse;

    // Send a POST request to the reCAPTCHA API and decode the response
    $recaptchaResponseData = file_get_contents($recaptchaVerifyUrl);
    $recaptchaResult = json_decode($recaptchaResponseData);

    // Check if the reCAPTCHA verification was successful
    if ($recaptchaResult->success) {
        return true;
    } else {
        echo json_encode(array('status' => 'error', 'message' => 'Invalid Google capture.'));
        exit;
    }
}
