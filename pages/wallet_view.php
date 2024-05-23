<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta https-equiv="X-UA-Compatible" wrapper="ie=edge">
    <title>My wallet</title>
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
        <div class="common-main-heading">My wallet</div>
    </div>

    <div class="wallet_view-wallet-info">
        <div class="wallet_view-qr-code-container">
            <img class="wallet_view-qr-code" src="../images/qr-code.svg" />
            <div class="wallet_view-qr-code-details">
                <div class="wallet_view-address-info">
                    <div class="wallet_view-address-warning">Send only USDT to this address</div>
                    <div class="wallet_view-network-warning">
            <span>
              <span class="wallet_view-network-warning-text">Ensure The Network is</span>
              <span class="wallet_view-network-name"> Binance Smart Chain (BEP20).</span>
            </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="wallet_view-address-container">
            <div class="wallet_view-address-field">
                <div class="wallet_view-address">12345678456421</div>
            </div>
            <div class="wallet_view-copy-button-container">
                <div class="wallet_view-copy-button-text">Copy Code</div>
                <img class="wallet_view-copy-icon" src="group-11712735400.svg" />
            </div>
        </div>
    </div>
    <div class="wallet_view-balance-container">
        <div class="wallet_view-balance-details">
            <div class="wallet_view-balance-label">Total balance</div>
            <div class="wallet_view-balance-amount">355 USDT</div>
        </div>
        <div class="wallet_view-wallet-id-container">
            <div class="wallet_view-wallet-id-label">My wallet</div>
            <div class="wallet_view-wallet-id">ID: 19475858</div>
        </div>
    </div>
</div>

<?php  include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php'; ?>

</body>
</html>
