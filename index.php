<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta https-equiv="X-UA-Compatible" wrapper="ie=edge">
    <title>All Models</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,700&display=swap"
          rel="stylesheet">
    <!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>-->
    <link rel="stylesheet" href="./css/reset.css?<?php echo microtime(); ?>">
    <link rel="stylesheet" href="./css/vars.css?<?php echo microtime(); ?>">
    <link rel="stylesheet" href="./css/style.css?<?php echo microtime(); ?>">
</head>

<body>
<?php  include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php'; ?>

<div class="common-main-section">

    <div class="video-wrapper">
        <div class="blur-overlay"></div>
        <video class="main-banner-video" src="./videos/main-banner-video.webm" autoplay muted loop></video>
    </div>

    <div class="common-main-section-title">
        <div class="common-main-heading">Featured models</div>
    </div>

<!-- Filter -->
    <?php  include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/filter.php'; ?>

<!-- Submenu -->
    <?php  include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/index-submenu.php'; ?>

<!-- Grid -->
    <?php  include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/big-models-grid.php'; ?>

</div>

<?php  include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php'; ?>

</body>
</html>
