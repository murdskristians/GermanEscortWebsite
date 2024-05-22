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
    <link rel="stylesheet" href="../css/reset.css?<?php echo microtime(); ?>">
    <link rel="stylesheet" href="../css/vars.css?<?php echo microtime(); ?>">
    <link rel="stylesheet" href="../css/style.css?<?php echo microtime(); ?>">
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
    <div class="model_filter-container">
        <div class="model_filter-box">
            <div class="model_filter-item">
                <div class="model_filter-button">Age</div>
                <img class="model_filter-icon" src="./images/icons/arrow.svg" />
            </div>
            <div class="model_filter-item">
                <div class="model_filter-button">Hair</div>
                <img class="model_filter-icon" src="./images/icons/arrow.svg" />
            </div>
            <div class="model_filter-item">
                <div class="model_filter-button">Rates</div>
                <img class="model_filter-icon" src="./images/icons/arrow.svg" />
            </div>
            <div class="model_filter-item">
                <div class="model_filter-button">Breast</div>
                <img class="model_filter-icon" src="./images/icons/arrow.svg" />
            </div>
            <div class="model_filter-item">
                <div class="model_filter-button">Weight</div>
                <img class="model_filter-icon" src="./images/icons/arrow.svg" />
            </div>
            <div class="model_filter-item">
                <div class="model_filter-button">Height</div>
                <img class="model_filter-icon" src="./images/icons/arrow.svg" />
            </div>
        </div>
        <div class="model_filter-clear">
            <div class="model_filter-clear-text">Clear Filters</div>
            <img class="model_filter-clear-icon" src="./images/icons/icon-cross.svg" />
        </div>
    </div>

<!-- Submenu -->
     <div class="main-submenu_main">
        <div class="main-submenu_buttons">
            <img class="main-submenu_icon" src="./images/icons/arrow.svg" />
        </div>
        <div class="main-submenu_content">
            <div class="main-submenu_item">
                <div class="main-submenu_text">Outcall</div>
            </div>
            <div class="main-submenu_item2">
                <div class="main-submenu_text">Incall</div>
            </div>
            <div class="main-submenu_item3">
                <div class="main-submenu_text">69 position</div>
            </div>
            <div class="main-submenu_item4">
                <div class="main-submenu_text">Anal</div>
            </div>
            <div class="main-submenu_item5">
                <div class="main-submenu_text">BDSM - Femdom</div>
            </div>
            <div class="main-submenu_item6">
                <div class="main-submenu_text">Bondage</div>
            </div>
            <div class="main-submenu_item7">
                <div class="main-submenu_text">Casual photos</div>
            </div>
            <div class="main-submenu_item8">
                <div class="main-submenu_text">Classic vaginal sex</div>
            </div>
            <div class="main-submenu_item9">
                <div class="main-submenu_text">Couples</div>
            </div>
            <div class="main-submenu_item10">
                <div class="main-submenu_text">Cum in face</div>
            </div>
            <div class="main-submenu_item11">
                <div class="main-submenu_text">Cum on body</div>
            </div>
<!--            <div class="main-submenu_rectangle1"></div>-->
<!--            <div class="main-submenu_rectangle2"></div>-->
        </div>
        <div class="main-submenu_buttons2">
            <img class="main-submenu_icon2" src="./images/icons/arrow.svg" />
        </div>
    </div>

<!-- Grid -->
    <?php  include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/big-models-grid.php'; ?>



</div>

<?php  include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php'; ?>

</body>
</html>
