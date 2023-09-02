<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Optimize images for the web while keeping them SEO-friendly. Compress images with customizable quality settings.">
    <meta name="keywords" content="image compression, SEO-friendly images, image optimization, compression quality, image size">
    <title>Image Compression Tool</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add any additional styles here -->
</head>
<style>
    #raw_img {
        max-width: 100%;
        max-height: 250px;
    }

    /* body,
    .bg-light,
    .card,
    .card-body {
        background-color: #000000;
        color: #FFF;
    } */
</style>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-sm-6">
                <img src="https://www.kharigo.com/public/web_images/name_logo_kharigo_no_BG.svg" height="80px" alt="">

            </div>
            <div class="col-sm-6">
                <div style="display: flex; align-items: center;">

                    <h1 style="margin-top: 19px;">Image Compression Tool</h1>

                </div>
            </div>
        </div>
        <hr>
        <p class="lead">🚀 Supercharge Your Website's Performance with Our Image Compression Tool!</p>
        <p>Slow-loading images can hamper your website's performance and frustrate your visitors. But fret not! Introducing our Image Compression Tool — your secret weapon for achieving lightning-fast loading times without compromising on image quality.</p>

        <!-- Image Compression Section -->
        <div class="row mb-3 ">
            <div class="col-md-3 ">
                <div class="mt-4">
                    <img src="https://icons-for-free.com/iconfiles/png/512/gallery+image+landscape+mobile+museum+open+line+icon-1320183049020185924.png" alt="Your Selected Image" id="raw_img">
                    <div id="bot_response" class="p-2"></div>

                </div>

            </div>
            <div class="col-md-6">
                <div class="card mb-4  bg-light">
                    <div class="card-body">
                        <h2 class="card-title">Image Compression</h2>
                        <form id="compressionForm" action="code.php" method="POST" enctype="multipart/form-data">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend">
                                        Select Image
                                    </span>
                                </div>
                                <input type="file" class="form-control" id="file_select" name="file_select" accept="image/*">
                                <button class="btn btn-danger" id="file_seect_cleat_btn" style="display: none;" type="button">X</button>
                            </div>
                            <div class="p-2 text-center"> --- Or --- </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend">
                                        Image URL
                                    </span>
                                </div>
                                <input type="url" class="form-control" id="file_url" name="file_url" placeholder="Image URL">
                            </div>
                            <hr>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        Percentage %
                                    </span>
                                </div>
                                <input type="number" class="form-control" id="percentageReduction" name="percentageReduction" placeholder="0-100">
                            </div>

                            <div class="p-2 text-center"> --- Or --- </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group ">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                Width
                                            </span>
                                        </div>
                                        <input type="number" class="form-control" id="imageWidth" name="imageWidth" placeholder="Width">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                Height
                                            </span>
                                        </div>
                                        <input type="number" class="form-control" id="imageHeight" name="imageHeight" placeholder="Height">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="compressionQuality">
                                        Compression Quality :
                                    </span>
                                </div>
                                <input type="number" placeholder="0-100" class="form-control" id="compressionQuality" name="compressionQuality" min="0" max="100" step="1" value="70">
                            </div>

                            <br>
                            <!-- v2 -->
                            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                            <div class="g-recaptcha-container">
                                <div class="g-recaptcha" data-sitekey="6LcDcfAlAAAAAOUS1_qvF-FnQFxhEMHOGn3AyJxV">
                                </div>
                            </div>




                            <!-- Progress bar for image upload -->
                            <label for="imageLoaderBar">Uploading Image:</label>
                            <progress id="imageLoaderBar" value="0" max="100" style="display: none;"></progress>
                            <span id="percentageDisplay"></span>

                            <br>
                            <button type="submit" class="btn btn-primary w-100 mt-2 btn-block">Compress</button>





                        </form>
                    </div>
                </div>

            </div>
            <div class="col-sm-3">

                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1005356566649245" crossorigin="anonymous"></script>
                <ins class="adsbygoogle" style="display:block" data-ad-format="fluid" data-ad-layout-key="-j+rj+1i-5l+88" data-ad-client="ca-pub-1005356566649245" data-ad-slot="4237344479"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1005356566649245" crossorigin="anonymous"></script>
                <ins class="adsbygoogle" style="display:block" data-ad-format="fluid" data-ad-layout-key="-j+rj+1i-5l+88" data-ad-client="ca-pub-1005356566649245" data-ad-slot="4237344479"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Add any additional scripts here -->
    <script>
        // Add JavaScript for image compression and animations here
    </script>
</body>
<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Event listener for file input change
        $("#file_select").on("change", function(e) {
            var file = e.target.files[0];
            if (file) {
                var imageUrl = URL.createObjectURL(file);
                $("#raw_img").attr("src", imageUrl);

                // Call the chatbot with image details
                var imageSizeKB = (file.size / 1024).toFixed(2);
                var imageSizeMB = (file.size / (1024 * 1024)).toFixed(2);
                var imageWidth = file.width || "N/A";
                var imageHeight = file.height || "N/A";

                // Simulate chatbot response
                var botResponse = `Image Size: ${imageSizeKB} KB (${imageSizeMB} MB)\n`;
                // botResponse += `<br> Image Dimensions: ${imageWidth} x ${imageHeight} pixels`;

                // Display the chatbot response
                $("#bot_response").text(botResponse);
            }
        });

        // Event listener for URL input change
        $("#file_url").on("input", function() {
            var imageUrl = $("#file_url").val();
            $("#raw_img").attr("src", imageUrl);

            // Simulate chatbot response
            var botResponse = `URL: ${imageUrl}`;
            botResponse += `<br> Please wait for the image dimensions to load...`;

            // Display the chatbot response
            $("#bot_response").text(botResponse);

            // Create an Image object to get dimensions
            var img = new Image();
            img.onload = function() {
                var imageWidth = img.width;
                var imageHeight = img.height;

                // Update the chatbot response with image dimensions
                // botResponse = `URL: ${imageUrl}\n\n`;
                botResponse = `Image Dimensions: ${imageWidth} x ${imageHeight} pixels`;

                // Display the updated chatbot response
                $("#bot_response").text(botResponse);
            };
            img.src = imageUrl;
        });
    });
</script>


<script>
    $(document).ready(function() {
        $("#file_seect_cleat_btn").click(function() {
            $("#file_select").val("");
            $("#file_url").prop("disabled", false);
            $("#file_seect_cleat_btn").hide(300);


        });
        $("#file_select").change(function() {
            // Disable URL input
            $("#file_url").prop("disabled", true);
            $("#file_seect_cleat_btn").show(300);
            // Clear URL input value
            $("#file_url").val("");
        });

        $("#file_url").on("input", function() {
            var percentageInput = $(this);
            if (percentageInput.val() !== "") {
                // Disable file input
                $("#file_select").prop("disabled", true);
                // Clear file input value
                $("#file_select").val("");
            } else {
                // Disable file input
                $("#file_select").prop("disabled", false);
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        // Handle input changes in percentage input
        $("#percentageReduction").on("input", function() {
            var percentageInput = $(this);
            if (percentageInput.val() !== "") {
                // Disable height and width inputs
                $("#imageHeight, #imageWidth").prop("disabled", true);
            } else {
                // Enable height and width inputs
                $("#imageHeight, #imageWidth").prop("disabled", false);
            }
        });

        // Handle input changes in height and width inputs
        $("#imageHeight, #imageWidth").on("input", function() {
            var heightInput = $("#imageHeight");
            var widthInput = $("#imageWidth");

            // Compare values and disable percentage input
            if (heightInput.val() !== "" || widthInput.val() !== "") {
                $("#percentageReduction").prop("disabled", true);
                $("#percentageReduction").val("");
            } else {
                $("#percentageReduction").prop("disabled", false);
            }
        });
    });
</script>
<script>

</script>

</html>