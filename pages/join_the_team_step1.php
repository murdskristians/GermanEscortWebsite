<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta https-equiv="X-UA-Compatible" wrapper="ie=edge">
    <title>Join the team</title>
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
    <div class="join_step_1-section">

        <div class="join_step_1-title">
            <h1 class="join_step_1-heading">Join the team</h1>
            <div class="join_step_1-steps">
                <div class="join_step_1-step active">
                    <span>1</span>
                </div>
                <img class="join_step_1-arrow" src="../images/icons/icon-join_our_team-join.svg" alt="join"/>
                <div class="join_step_1-step">
                    <span>2</span>
                </div>
                <img class="join_step_1-arrow" src="../images/icons/icon-join_our_team-join.svg" alt="join"/>
                <div class="join_step_1-step">
                    <span>3</span>
                </div>
            </div>
        </div>

        <div class="join_step_1-form">
            <h2 class="join_step_1-subheading">Personal data</h2>
            <div class="join_step_1-fields">
                <div class="join_step_1-row">
                    <div class="join_step_1-field">
                        <label class="join_step_1-label">Name</label>
                    </div>
                    <div class="join_step_1-field">
                        <label class="join_step_1-label">Surname<span class="join_step_1-required">*</span></label>
                    </div>
                </div>
                <div class="join_step_1-row">
                    <div class="join_step_1-field">
                        <label class="join_step_1-label">Email<span class="join_step_1-required">*</span></label>
                    </div>
                    <div class="join_step_1-field">
                        <img class="join_step_1-icon" src="../images/icons/flags/ico-country-c-latvia.svg" />
                        <img class="join_step_1-icon" id="join_step_1-small_arrow" src="../images/icons/icon-join-our-team-step1-small-arrow.svg.svg" />
                        <label class="join_step_1-label">Phone<span class="join_step_1-required">*</span></label>
                    </div>
                </div>
                <div class="join_step_1-row">
                    <div class="join_step_1-field" id="join_step_1-country-input">
                        <label class="join_step_1-label">Country</label>
                        <img class="join_step_1-dropdown-icon" src="../images/icons/icon-join-our-team-step1-big-arrow.svg" />
                    </div>
                    <div class="join_step_1-field">
                        <label class="join_step_1-label">Address</label>
                    </div>
                </div>
                <div class="join_step_1-row">
                    <div class="join_step_1-field">
                        <label class="join_step_1-label">Age</label>
                    </div>
                    <div class="join_step_1-field">
                        <label class="join_step_1-label">Weight</label>
                    </div>
                </div>
                <div class="join_step_1-row">
                    <div class="join_step_1-field">
                        <label class="join_step_1-label">Shoe Size</label>
                    </div>
                    <div class="join_step_1-field">
                        <label class="join_step_1-label">Top Size</label>
                    </div>
                </div>
                <div class="join_step_1-row join_step_1-row-full">
                    <div class="join_step_1-field join_step_1-field-large">
                        <label class="join_step_1-label">Interests</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="join_step_1-terms">
            <div class="join_step_1-terms-check">
                <div class="join_step_1-checkbox"></div>
                <div class="join_step_1-terms-text">
                    <span id="join_our_team_agree">I agree to the</span>
                    <span class="join_step_1-terms-highlight">terms and conditions</span>
                </div>
            </div>
        </div>

        <div class="join_step_1-buttons">
            <div class="join_step_1-button-group">
                <div class="join_step_1-button join_step_1-button-back">
                    <img class="join_step_1-back-icon" src="../images/icons/arrow.svg" id="join_our_team_step1_back"/>
                    <span>Back</span>
                </div>
                <div class="join_step_1-button join_step_1-button-next">
                    <span>Continue</span>
                    <img class="join_step_1-next-icon" src="../images/icons/arrow.svg" />
                </div>
            </div>
        </div>

    </div>



</div>

<?php  include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php'; ?>

</body>
</html>
