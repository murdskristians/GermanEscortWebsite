<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta https-equiv="X-UA-Compatible" wrapper="ie=edge">
    <title>Congratulations</title>
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

    <div class="congratulations_page-section">
        <div class="congratulations_page-section-title">
            <h4 class="congratulations_page-heading">Congratulations</h4>
        </div>
        <div class="congratulations_page-list">
            <a class="congratulations_page-terms">
                Please read these terms and conditions carefully before using this
                website. Accepting these conditions signifies that you have read, and
                understand these conditions, without reservation If you do not agree to
                these terms or do not understand what this means, leave now. These terms
                and conditions are applicable to all pages of www.eurogirlsescort.com
            </a>
        </div>
        <div class="congratulations_page-navigation">
            <div class="congratulations_page-button-group">
                <a class="congratulations_page-button congratulations_page-main-button" href="../index.php">
                    <div class="congratulations_page-button-label">Main page</div>
                    <img class="congratulations_page-button-icon" src="../images/icons/arrow.svg" />
                </a>
            </div>
        </div>
    </div>

</div>

<?php  include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php'; ?>

</body>
</html>
