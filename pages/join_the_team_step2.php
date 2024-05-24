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
    <div class="join_step_2-content-block">
        <div class="join_step_2-section">

            <div class="join_step-title">
                <h1 class="join_step-heading">Join the team</h1>
                <div class="join_step-steps">
                    <div class="join_step-one_step">
                        <span>1</span>
                    </div>
                    <img class="join_steps-arrow" src="../images/icons/icon-join_our_team-join.svg" alt="join"/>
                    <div class="join_step-one_step active">
                        <span>2</span>
                    </div>
                    <img class="join_steps-arrow" src="../images/icons/icon-join_our_team-join.svg" alt="join"/>
                    <div class="join_step-one_step">
                        <span>3</span>
                    </div>
                </div>
            </div>

            <div class="join_step_2-form">
                <div class="join_step_2-subheading">Your body</div>
                <div class="join_step_2-fields">
                    <div class="join_step_2-row">
                        <div class="join_step_2-field">
                            <label class="join_step_2-label">Hair color</label>
                            <img class="join_step_2-icon" src="../images/icons/icon-join-our-team-step1-big-arrow.svg" />
                        </div>
                        <div class="join_step_2-field">
                            <label class="join_step_2-label">Hair length</label>
                            <img class="join_step_2-icon" src="../images/icons/icon-join-our-team-step1-big-arrow.svg" />
                        </div>
                    </div>
                    <div class="join_step_2-row">
                        <div class="join_step_2-field">
                            <label class="join_step_2-label">Breast size</label>
                            <img class="join_step_2-icon" src="../images/icons/icon-join-our-team-step1-big-arrow.svg" />
                        </div>
                        <div class="join_step_2-field">
                            <label class="join_step_2-label">Breast type</label>
                            <img class="join_step_2-icon" src="../images/icons/icon-join-our-team-step1-big-arrow.svg" />
                        </div>
                    </div>
                    <div class="join_step_2-row">
                        <div class="join_step_2-field">
                            <label class="join_step_2-label">Weight</label>
                            <img class="join_step_2-icon" src="../images/icons/icon-join-our-team-step1-big-arrow.svg" />
                        </div>
                        <div class="join_step_2-field">
                            <label class="join_step_2-label">Height</label>
                            <img class="join_step_2-icon" src="../images/icons/icon-join-our-team-step1-big-arrow.svg" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="join_step_2-color-options">
                <div class="join_step_2-subheading">Color</div>
                <div class="join_step_2-color-list">
                    <div class="join_step_2-color-item">
                        <div class="join_step_2-color-label">Green</div>
                    </div>
                    <div class="join_step_2-color-item">
                        <div class="join_step_2-color-label">Red</div>
                    </div>
                    <div class="join_step_2-color-item">
                        <div class="join_step_2-color-label">Yellow</div>
                    </div>
                    <div class="join_step_2-color-item">
                        <div class="join_step_2-color-label">Blue</div>
                    </div>
                </div>
            </div>
            <div class="join_step_2-photo-section">
                <div class="join_step_2-subheading">Account photo</div>
                <div class="join_step_2-photo-options">
                    <img class="join_step_2-photo-box" src="../images/demo-girls/demo-girl3.jfif" />
                    <div class="join_step_2-photo-actions">
                        <div class="join_step_2-action">
                            <div class="join_step_2-action-label">Clear</div>
                            <img class="join_step_2-action-icon" src="../images/icons/icon-cross.svg" />
                        </div>
                        <div class="join_step_2-action">
                            <img class="join_step_2-action-icon" src="../images/icons/icon-add-photo.svg" />
                            <div class="join_step_2-action-label">Add photo</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="join_step_2-navigation">
                <div class="join_step_2-button-group">
                    <div class="join_step_2-button join_step_2-back-button">
                        <img class="join_step_2-button-icon" src="../images/icons/arrow.svg" id="join_our_team_step2_back"/>
                        <span class="join_step_2-button-label">Back</span>
                    </div>
                    <div class="join_step_2-button join_step_2-next-button">
                        <span class="join_step_2-button-label">Continue</span>
                        <img class="join_step_2-button-icon" src="../images/icons/arrow.svg" />
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>





<?php  include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php'; ?>

</body>
</html>
