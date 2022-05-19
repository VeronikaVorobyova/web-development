<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/mysite/wp-content/themes/mytheme/utils/connect.php';
?>

<head>
    <!-- <link rel="stylesheet" href="/templates/style/header.css">
    <link rel=" stylesheet" href="/templates/style/footer.css"> -->
    <!-- <link rel="stylesheet" href="../style.css"> -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Новостной сайт</title>

    <link rel="stylesheet" href="/mysite/wp-content/themes/mytheme/templates/style/chief-slider.min.css">

    <script defer src="/mysite/wp-content/themes/mytheme/templates/slider/chief-slider.min.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const slider = new ChiefSlider('.slider', {
            loop: false
        });
    });
    </script>
    <!-- Bootstrap CSS (jsDelivr CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap Bundle JS (jsDelivr CDN) -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    
    <div id="header">Новости спорта</div>