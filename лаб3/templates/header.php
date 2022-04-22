<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/utils/connect.php';
?>

<head>
    <link rel="stylesheet" href="/templates/style/header.css">
    <link rel=" stylesheet" href="/templates/style/footer.css">
    <link rel="stylesheet" href="/templates/style/mainPage.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Новостной сайт</title>

    <link rel="stylesheet" href="/templates/style/chief-slider.min.css">

    <script defer src="/templates/slider/chief-slider.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slider = new ChiefSlider('.slider', {
                loop: false
            });
        });
    </script>
</head>

<body>
    <div id="header">Новости спорта</div>