<?php
$currentURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

?>
<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_tital = $page_tital ?? 'Welcome to Kharigo | Create Your Space In The Digital World' ?></title>
    <meta name="description" content="<?= $page_description = $page_description ?? 'Kharigo: Elevate online presence with dynamic websites and digital marketing. Your trusted partner for web development. Bring your digital vision to life.' ?>">
    
    <link rel="icon" href="<?= $page_og_icon ?? base_url() . 'public/web_images/favicon_128px.ico' ?>" type="image/x-icon">
<link rel="shortcut icon" href="<?= $page_og_icon ?? base_url() . 'public/web_images/favicon_128px.ico' ?>" type="image/x-icon">


<meta name="keywords" content="<?= $page_keywords ?? 'website developer, website development company, digital marketing services, digital marketing, SEO services, Nashik, Bangalore, Pune, Mumbai, Delhi, Bangalore, Chennai, Hyderabad, Kolkata, Ahmedabad,  Surat' ?>">

<meta http-equiv='content-language' content='en-IN'>


    <meta property="og:title" content="<?= $page_og_tital ?? $page_tital ?>">
    <meta property="og:description" content="<?= $page_og_description = $page_og_description ?? $page_description ?>">
    <meta property="og:image" content="<?= $page_og_image = $page_og_image ?? 'https://e0.pxfuel.com/wallpapers/728/888/desktop-wallpaper-case-study-website-design-for-software-development-company-undo.jpg' ?>">
    <meta property="og:url" content="<?= esc($currentURL) ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Kharigo">
    
    <meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@kharigotech">
<meta name="twitter:title" content="<?= $page_tital ?>">
<meta name="twitter:description" content="<?= $page_og_description ?>">
<meta name="twitter:image" content="<?= $page_og_image ?>">
<meta property="fb:app_id" content="936794513184202">


    <?php if ($currentURL == base_url()) { ?>
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Organization",
                "url": "<?= base_url() ?>",
                "logo": "<?= base_url() ?>public/web_images/logo_250px.png",
                "potentialAction": {
                    "@type": "SearchAction",
                    "target": {
                        "@type": "EntryPoint",
                        "urlTemplate": "https://query.example.com/search?q={search_term_string}"
                    },
                    "query-input": "required name=search_term_string"
                },
                "contactPoint": [{
                    "@type": "ContactPoint",
                    "telephone": "+91-8796965393",
                    "email": "info@kharigo.com",
                    "contactType": "customer support"
                }],
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "kharigo, Tushar Novelty, Somwar peth,",
                    "addressLocality": "Nashik",
                    "addressRegion": "Maharasstra",
                    "postalCode": "422001",
                    "addressCountry": "India"
                },
                "sameAs": [
                    "https://api.whatsapp.com/message/YPO3F6D6RPLUJ1",
                    "https://twitter.com/kharigotech",
                    "https://www.facebook.com/kharigotech/",
                    "https://www.linkedin.com/company/kharigo",
                    "https://www.instagram.com/kharigotech/"
                ],
                "founder": {
                    "@type": "Person",
                    "name": "Vishal H Patel",
                    "url": "<?= base_url() ?>",
                    "sameAs": [
                        "https://twitter.com/vishal007918",
                        "https://www.facebook.com/vishal007918/",
                        "https://www.instagram.com/vishal_h_patel_/",
                    ]
                },

            }
        </script>
    <?php } ?>
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
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- AOS Library -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <!-- <link rel="stylesheet" href="public/css/dark.css"> -->
    <link rel="stylesheet" type="text/css" href="public/css/light.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="public/css/styles.css">
</head>

<body>
    <?php include_once('header.php') ?>
    <main>
        <?php $this->renderSection('content') ?>
    </main>
    <?php include_once('footer.php') ?>
</body>

<?php include_once('common_script.php') ?>
<?php $this->renderSection('script') ?>

</html>