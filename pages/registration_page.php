<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta https-equiv="X-UA-Compatible" wrapper="ie=edge">
    <title>Registration</title>
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
        <div class="common-main-heading">Registration</div>
    </div>

    <div class="registration_page-list">
        <img class="registration_page-photo-box" src="../images/demo-girls/demo-girl1.jfif" />
    </div>
    <div class="registration_page-list2">
        <div class="registration_page-eurogirlsescort-requests-access">
        <span>
            <span class="registration_page-eurogirlsescort-title">
                Eurogirlsescort.com
            </span>
            <span class="registration_page-eurogirlsescort-details">
                requests access via Sample Bot
                <br />
                The website will receive your profile picture.
                <br />
                You are logged in as ID:17753558
            </span>
        </span>
        </div>
    </div>
    <div class="registration_page-list">
        <div class="registration_page-content-button">
            <img class="registration_page-group-icon" src="../images/icons/arrow.svg" />
            <div class="registration_page-button-text">Decline</div>
        </div>
        <div class="registration_page-content-button2">
            <div class="registration_page-button-text2">Accept</div>
            <img class="registration_page-group-icon2" src="../images/icons/arrow.svg" />
        </div>
    </div>
</div>

<?php  include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php'; ?>

</body>
</html>
