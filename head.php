<?php

$page_tital = isset($page_tital) ? $page_tital : "Kharigo - Nashik";
$page_description = isset($page_description) ? $page_description : "Kharigo Tech is your partner in web development | India";
$currentURL = 'http://';
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $currentURL = 'https://';
}
$currentURL .= $_SERVER['HTTP_HOST'];
$base_url = $currentURL . '/';
$currentURL .= $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_tital ?></title>
    <meta name="description" content="<?= $page_description ?>">

    <meta property="og:title" content="<?= isset($page_og_tital) ? $page_og_tital : $page_tital ?>">
    <meta property="og:description" content="<?= isset($page_og_description) ? $page_og_description : $page_description ?>">
    <meta property="og:image" content="https://e0.pxfuel.com/wallpapers/728/888/desktop-wallpaper-case-study-website-design-for-software-development-company-undo.jpg"> Add the URL of the image you want to use
    <meta property="og:url" content="<?= $currentURL ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Kharigo">

    <link rel="icon" href="https://www.kharigo.com/wholesale/public/web_images/favicon_128px.ico">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "url": "https://www.kharigo.com",
            "logo": "https://www.kharigo.com/wholesale/public/web_images/logo_250px.png"
        }
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9FP61XZDSL"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-9FP61XZDSL');
    </script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- AOS Library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>