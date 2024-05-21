<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta https-equiv="X-UA-Compatible" wrapper="ie=edge">
    <title>Newest Models</title>
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
    <div class="common-main-section-title">
        <div class="common-main-heading">Newest Models</div>
    </div>

    <?php  include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/small-models-grid.php'; ?>

    <div class="models_grid-paging">
        <div class="models_grid-arrows">
            <div class="models_grid-main-menu-button">
                <img class="models_grid-group-small" src="../images/icons/arrow.svg" />
            </div>
            <div class="one_city-main-menu-button2">
                <img class="models_grid-group-small" src="../images/icons/arrow.svg" />
            </div>
        </div>
        <div class="models_grid-paging2">
            <div class="models_grid-showing">Showing</div>
            <div class="models_grid-small">
                <div class="models_grid-page-number">01</div>
            </div>
            <div class="models_grid-of-total">of 3</div>
        </div>
    </div>

</div>

<?php  include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php'; ?>

</body>
</html>
