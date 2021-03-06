<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#35A768">

    <!-- <title><?= lang('page_title') . ' ' .  $company_name ?></title> -->
    
    <title><?= lang('page_title') . ' ' .  $company_name ?></title>

    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/ext/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/ext/jquery-ui/jquery-ui.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/ext/jquery-qtip/jquery.qtip.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/ext/cookieconsent/cookieconsent.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/css/frontend.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/css/general.css') ?>">

    <link rel="icon" type="image/x-icon" href="<?= asset_url('assets/img/favicon.ico') ?>">
    <link rel="icon" sizes="192x192" href="<?= asset_url('assets/img/logo.png') ?>">
</head>

<body>
    <div id="main" class="container">
        <div class="wrapper row">
            <div id="book-appointment-wizard" class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2" style="
    background-color: #32afb5;">

                <!-- FRAME TOP BAR -->

                <div id="header">
                    <span  id="company-name"><a href="http://3.138.43.76/index.php/"><img src="https://i.ibb.co/yh7CyXp/Sky-Cleaner.jpg" width="100%"> </a>
                </span>
                <div id="welcome_page">
                    <div id="steps" style="display: flex; justify-content: center; width: 100%; flex-direction: row-reverse;">
                        <div id="step-1" class="book-step active-step" title="<?= lang('step_one_title') ?>">
                            <strong>1</strong>
                        </div>

                        <div id="step-2" class="book-step" title="<?= lang('step_two_title') ?>">
                            <strong>2</strong>
                        </div>
                        <div id="step-3" class="book-step" title="<?= lang('step_three_title') ?>">
                            <strong>3</strong>
                        </div>
                        <div id="step-4" class="book-step" title="<?= lang('step_four_title') ?>">
                            <strong>4</strong>
                        </div>
                    </div>
                </div>

                <?php if ($manage_mode): ?>
                <div id="cancel-appointment-frame" class="booking-header-bar row">
                    <div class="col-xs-12 col-sm-10">
                        <p><?= lang('cancel_appointment_hint') ?></p>
                    </div>
                    <div class="col-xs-12 col-sm-2">
                        <form id="cancel-appointment-form" method="post"
                              action="<?= site_url('appointments/cancel/' . $appointment_data['hash']) ?>">
                            <input type="hidden" name="csrfToken" value="<?= $this->security->get_csrf_hash() ?>" />
                            <textarea name="cancel_reason" style="display:none"></textarea>
                            <button id="cancel-appointment" class="btn btn-default btn-sm"><?= lang('cancel') ?></button>
                        </form>
                    </div>
                </div>
                <div class="booking-header-bar row">
                    <div class="col-xs-12 col-sm-10">
                        <p><?= lang('delete_personal_information_hint') ?></p>
                    </div>
                    <div class="col-xs-12 col-sm-2">
                        <button id="delete-personal-information" class="btn btn-danger btn-sm"><?= lang('delete') ?></button>
                    </div>
                </div>
                <?php endif; ?>

                <?php
                    if (isset($exceptions)) {
                        echo '<div style="margin: 10px">';
                        echo '<h4>' . lang('unexpected_issues') . '</h4>';
                        foreach($exceptions as $exception) {
                            echo exceptionToHtml($exception);
                        }
                        echo '</div>';
                    }
                ?>
                <!-- CHECK!!!!!!! -->
              ‏
                
                
                <!-- try new moal -->
               
                      
<!-- The Modal -->
                <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p>
                    <script>
                    
                    const { spawn } = require('child_process')
                    app.get('/foo', function(req, res) {
                        // Call your python script here.
                        // I prefer using spawn from the child process module instead of the Python shell
                        const scriptPath = 'C:/Users/matan/Desktop/Backend---Final-Project/website.py'
                        const process = spawn('python', [scriptPath, arg1, arg2])
                        process.stdout.on('data', (myData) => {
                            // Do whatever you want with the returned data.
                            // ...
                            res.send("Done!")
                        })
                        process.stderr.on('data', (myErr) => {
                            // If anything gets written to stderr, it'll be in the myErr variable
                        })
                    })
                            function makeCallToFoo() {
                        fetch('/foo').then(function(response) {
                // Use the response sent here
                        })
                        }
                        button(type="button", onclick="makeCallToFoo()")
                    </script>
                    צריך להוסיף פה פרטי יצירת קשר</p>
                </div>

                </div>

                <!-- </div> check to who this div belong -->
                
                <!-- video section-->
                <p id="text_first_page" style="text-align: center; font-size: 25px; color: white;">
        צריכים אותנו דחוף? לחצו על הכפתור וצרו איתנו קשר עכשיו!
                <br>
                <button type="image" id="myBtn" style="width: 15%; border-radius: 70%;">
                <img style="width: 100%;" src="https://cdn3.iconfinder.com/data/icons/symbol-2-1/36/184-512.png">
                </button>
                <br>‏
                    ברוכים הבאים למערכת קביעת התורים של Sky Cleaner <br>
                    צפו בהגרלה האחרונה שנערכה והשארו מעודכנים עבור הגרלות נוספות בעמוד האינסטגרם והפייסבוק שלנו!
                </p>
                <div class="video_main" style="display:flex;justify-content: center;">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/IPMN-LqzB7Y" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/BHACKCNDMW8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                <!-- SELECT SERVICE AND PROVIDER -->
                <div id="wizard-frame-1" class="wizard-frame">
                    <div class="frame-container">
                        <h3 class="frame-title" style="font-size: 25px; color: white;"><?= lang('step_one_title') ?></h3>

                        <div class="frame-content">
                            <div class="form-group">
                                <label for="select-service">
                                    <p id="text_choose_service" style="color: white;">
                                    <strong><?= lang('select_service') ?></strong>
                                    </p>
                                </label>

                                <select id="select-service" class="col-xs-12 col-sm-4 form-control" style="color: black; font-weight: bold; font-size: 20px;">
                                    <?php
                                        // Group services by category, only if there is at least one service with a parent category.
                                        $has_category = FALSE;
                                        foreach($available_services as $service) {
                                            if ($service['category_id'] != NULL) {
                                                $has_category = TRUE;
                                                break;
                                            }
                                        }

                                        if ($has_category) {
                                            $grouped_services = array();

                                            foreach($available_services as $service) {
                                                if ($service['category_id'] != NULL) {
                                                    if (!isset($grouped_services[$service['category_name']])) {
                                                        $grouped_services[$service['category_name']] = array();
                                                    }

                                                    $grouped_services[$service['category_name']][] = $service;
                                                }
                                            }

                                            // We need the uncategorized services at the end of the list so
                                            // we will use another iteration only for the uncategorized services.
                                            $grouped_services['uncategorized'] = array();
                                            foreach($available_services as $service) {
                                                if ($service['category_id'] == NULL) {
                                                    $grouped_services['uncategorized'][] = $service;
                                                }
                                            }

                                            foreach($grouped_services as $key => $group) {
                                                $group_label = ($key != 'uncategorized')
                                                        ? $group[0]['category_name'] : 'Uncategorized';

                                                if (count($group) > 0) {
                                                    echo '<optgroup label="' . $group_label . '">';
                                                    foreach($group as $service) {
                                                        echo '<option value="' . $service['id'] . '">'
                                                            . $service['name'] . '</option>';
                                                    }
                                                    echo '</optgroup>';
                                                }
                                            }
                                        }  else {
                                            foreach($available_services as $service) {
                                                echo '<option value="' . $service['id'] . '">' . $service['name'] . '</option>';
                                            }
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="select-provider">
                                    <strong style="color: white;"><?= lang('select_provider') ?></strong>
                                </label>

                                <select id="select-provider" class="col-xs-12 col-sm-4 form-control" style="color: black; font-weight: bold; font-size: 20px;"></select>
                            </div>

                            <div id="service-description" style="display:none; font-size: 20px; color: white;"></div>
                        </div>
                    </div>

                    <div class="command-buttons">
                        <button type="button" id="button-next-1" class="btn button-next btn-primary"
                                data-step_index="1" style="margin-top: 25%;">
                            <?= lang('next') ?>
                            <span class="glyphicon glyphicon-forward"></span>
                        </button>
                    </div>
                </div>
                
                <!-- ENDD CHECKKKK -->
                <script>
                var modal = document.getElementById("myModal");

                // Get the button that opens the modal
                var btn = document.getElementById("myBtn");

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

                // When the user clicks on the button, open the modal
                btn.onclick = function() {
                modal.style.display = "block";
                }

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                modal.style.display = "none";
                }

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
                }

                </script>
                <!-- END OF TRY MODAL -->
                <!-- SELECT APPOINTMENT DATE -->

                <div id="wizard-frame-2" class="wizard-frame" style="display:none;">
                    <div class="frame-container">

                        <h3 class="frame-title" style="color: white;"><?= lang('step_two_title') ?></h3>

                        <div class="frame-content row">
                            <div class="col-xs-12 col-sm-6">
                                <div id="select-date"></div>
                            </div>

                            <div class="col-xs-12 col-sm-6" style="color: white;">
                                <div id="available-hours"></div>
                            </div>
                        </div>
                    </div>

                    <div class="command-buttons">
                        <button type="button" id="button-back-2" class="btn button-back btn-default"
                                data-step_index="2">
                            <span class="glyphicon glyphicon-backward"></span>
                            <?= lang('back') ?>
                        </button>
                        <button type="button" id="button-next-2" class="btn button-next btn-primary"
                                data-step_index="2">
                            <?= lang('next') ?>
                            <span class="glyphicon glyphicon-forward"></span>
                        </button>
                    </div>
                </div>

                <!-- ENTER CUSTOMER DATA -->

                <div id="wizard-frame-3" class="wizard-frame" style="display:none;">
                    <div class="frame-container" style="color: white;">

                        <h3 class="frame-title" style="color: white;"><?= lang('step_three_title') ?></h3>

                        <div class="frame-content row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label for="first-name" class="control-label"><?= lang('first_name') ?> *</label>
                                    <input type="text" id="first-name" class="required form-control" maxlength="100" />
                                </div>
                                <div class="form-group">
                                    <label for="last-name" class="control-label"><?= lang('last_name') ?> *</label>
                                    <input type="text" id="last-name" class="required form-control" maxlength="120" />
                                </div>
                                <div class="form-group">
                                    <label for="email" class="control-label"><?= lang('email') ?> *</label>
                                    <input type="text" id="email" class="required form-control" maxlength="120" />
                                </div>
                                <div class="form-group">
                                    <label for="phone-number" class="control-label"><?= lang('phone_number') ?> *</label>
                                    <input type="text" id="phone-number" class="required form-control" maxlength="60" />
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label for="address" class="control-label"><?= lang('address') ?></label>
                                    <input type="text" id="address" class="form-control" maxlength="120" />
                                </div>
                                <div class="form-group">
                                    <label for="city" class="control-label"><?= lang('city') ?></label>
                                    <input type="text" id="city" class="form-control" maxlength="120" />
                                </div>
                                <div class="form-group">
                                    <label for="zip-code" class="control-label"><?= lang('zip_code') ?></label>
                                    <input type="text" id="zip-code" class="form-control" maxlength="120" />
                                </div>
                                <div class="form-group">
                                    <label for="notes" class="control-label"><?= lang('notes') ?></label>
                                    <textarea id="notes" maxlength="500" class="form-control" rows="3"></textarea>
                                </div>
                            </div>

                            <?php if ($display_terms_and_conditions): ?>
                            <label>
                                <input type="checkbox" class="required" id="accept-to-terms-and-conditions">
                                <?= strtr(lang('read_and_agree_to_terms_and_conditions'),
                                    [
                                        '{$link}' => '<a href="#" data-toggle="modal" data-target="#terms-and-conditions-modal">',
                                        '{/$link}' => '</a>'
                                    ])
                                ?>
                            </label>
                            <br>
                            <?php endif ?>

                            <?php if ($display_privacy_policy): ?>
                            <label>
                                <input type="checkbox" class="required" id="accept-to-privacy-policy">
                                <?= strtr(lang('read_and_agree_to_privacy_policy'),
                                    [
                                        '{$link}' => '<a href="#" data-toggle="modal" data-target="#privacy-policy-modal">',
                                        '{/$link}' => '</a>'
                                    ])
                                ?>
                            </label>
                            <br>
                            <?php endif ?>

                            <span id="form-message" class="text-danger"><?= lang('fields_are_required') ?></span>
                        </div>
                    </div>

                    <div class="command-buttons" style="margin-top: 2%;">
                        <button type="button" id="button-back-3" class="btn button-back btn-default"
                                data-step_index="3"><span class="glyphicon glyphicon-backward"></span>
                            <?= lang('back') ?>
                        </button>
                        <button type="button" id="button-next-3" class="btn button-next btn-primary"
                                data-step_index="3">
                            <?= lang('next') ?>
                            <span class="glyphicon glyphicon-forward"></span>
                        </button>
                    </div>
                </div>

                <!-- APPOINTMENT DATA CONFIRMATION -->

                <div id="wizard-frame-4" class="wizard-frame" style="display:none;">
                    <div class="frame-container">
                        <h3 class="frame-title" style="color: white;"><?= lang('step_four_title') ?></h3>
                        <div class="frame-content row">
                            <div id="appointment-details" class="col-xs-12 col-sm-6" style="color: white;"></div>
                            <div id="customer-details" class="col-xs-12 col-sm-6" style="color: white;"></div>
                        </div>
                        <?php if ($this->settings_model->get_setting('require_captcha') === '1'): ?>
                        <div class="frame-content row">
                            <div class="col-xs-12 col-sm-6">
                                <h4 class="captcha-title">
                                    הקלידו את הטקסט
                                    <small class="glyphicon glyphicon-refresh"></small>
                                </h4>
                                <img class="captcha-image" src="<?= site_url('captcha') ?>">
                                <input class="captcha-text" type="text" value="" />
                                <span id="captcha-hint" class="help-block" style="opacity:0">&nbsp;</span>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>

                    <div class="command-buttons">
                        <button type="button" id="button-back-4" class="btn button-back btn-default"
                                data-step_index="4">
                            <span class="glyphicon glyphicon-backward"></span>
                            <?= lang('back') ?>
                        </button>
                        <form id="book-appointment-form" style="display:inline-block" method="post">
                            <button id="book-appointment-submit" type="button" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <?= !$manage_mode ? lang('confirm') : lang('update') ?>
                            </button>
                            <input type="hidden" name="csrfToken" />
                            <input type="hidden" name="post_data" />
                        </form>
                    </div>
                </div>
                <div class="stay_in_touch" style="font-size: 25px; color: white; display: flex; justify-content: center;"> שמרו על קשר! &nbsp; <img src="https://i.ibb.co/7YsNTtb/favicon.png" style="width:6%;">
                </div>                   
                <!-- FRAME FOOTER -->

                <div id="frame-footer">
                    <a href="https://api.whatsapp.com/send?phone=972542201042&lang=he" target="_blank">
                    <?php 
                    echo "<img src='https://cdn2.iconfinder.com/data/icons/social-messaging-ui-color-shapes-2-free/128/social-whatsapp-circle-512.png' style='width: 5%;'>"; 
                    ?> 
                </a>
                &nbsp;
                    <a id="facebook" href="https://www.facebook.com/SkyCleanerIsrael" target="_blank">
                    <?php 
                    echo "<img src='https://purpleironingservices.com/wp-content/uploads/2017/02/facebook-footer-share.png' style='width: 5%;'>"; 
                    ?> 
                </a>
                &nbsp;
                    <a href="https://www.instagram.com/skycleaner1/" target="_blank">
                    <?php 
                    echo "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/1024px-Instagram_icon.png' style='width: 4%;'>"; 
                    ?> 
                </a>
                &nbsp;
                    <a href="https://easy.co.il/page/10080031" target="_blank">
                    <?php 
                    echo "<img src='https://play-lh.googleusercontent.com/LaVRvqc6Hxy2EQj8G6-qsuOUz66Q5GZBOhAOs6n7YjsaopFbQwjDhYqurw_RS5grRQ' style='width: 5%;'>"; 
                        ?> 
                </a>
                &nbsp;
                    <a href="tel:054-220-1042" target="_blank">
                    <?php 
                    echo "<img src='https://i.pinimg.com/originals/b5/d7/19/b5d7198734ee5174b581630628ecfdd6.png' style='width: 4.5%;'>"; 
                        ?> 
                </a>
                &nbsp;
                    <a href="mailto:skycleanerisrael@gmail.com" target="_blank">
                    <?php 
                    echo "<img src='https://cdn0.iconfinder.com/data/icons/material-circle-apps/512/icon-email-material-design-512.png' style='width: 4.8%;'>"; 
                        ?> 
                <br> 
                <br>
                </a>
                
                <p id="credit_matan_yamin" style="width: 100%; margin: auto; font-weight: bold;"> 
                &nbsp;<a href="https://www.linkedin.com/in/matan-yamin-40283b199/"> פיתוח צד שרת ועיצוב: מתן ימין &nbsp; </a> <img src='https://icons-for-free.com/iconfiles/png/512/programming+tags+icon-1320087273222563498.png' style='width: 4.5%;'>
                </p>
                    <!-- <span id="select-language" class="label label-success">
    		        	<?= ucfirst($this->config->item('language')) ?>
    		        </span> -->
                    
                    <!-- <a href="<?= site_url('backend'); ?>">
                        <?= $this->session->user_id ? lang('backend_section') : lang('login') ?>
                    </a> -->
                </div>
            </div>
        </div>
    </div>

    <?php if ($display_cookie_notice === '1'): ?>
        <?php require 'cookie_notice_modal.php' ?>
    <?php endif ?>

    <?php if ($display_terms_and_conditions === '1'): ?>
        <?php require 'terms_and_conditions_modal.php' ?>
    <?php endif ?>

    <?php if ($display_privacy_policy === '1'): ?>
        <?php require 'privacy_policy_modal.php' ?>
    <?php endif ?>

    <script>
        var GlobalVariables = {
            availableServices   : <?= json_encode($available_services) ?>,
            availableProviders  : <?= json_encode($available_providers) ?>,
            baseUrl             : <?= json_encode(config('base_url')) ?>,
            manageMode          : <?= $manage_mode ? 'true' : 'false' ?>,
            customerToken       : <?= json_encode($customer_token) ?>,
            dateFormat          : <?= json_encode($date_format) ?>,
            timeFormat          : <?= json_encode($time_format) ?>,
            displayCookieNotice : <?= json_encode($display_cookie_notice === '1') ?>,
            appointmentData     : <?= json_encode($appointment_data) ?>,
            providerData        : <?= json_encode($provider_data) ?>,
            customerData        : <?= json_encode($customer_data) ?>,
            csrfToken           : <?= json_encode($this->security->get_csrf_hash()) ?>
        };

        var EALang = <?= json_encode($this->lang->language) ?>;
        var availableLanguages = <?= json_encode($this->config->item('available_languages')) ?>;
    </script>

    <script src="<?= asset_url('assets/js/general_functions.js') ?>"></script>
    <script src="<?= asset_url('assets/ext/jquery/jquery.min.js') ?>"></script>
    <script src="<?= asset_url('assets/ext/jquery-ui/jquery-ui.min.js') ?>"></script>
    <script src="<?= asset_url('assets/ext/jquery-qtip/jquery.qtip.min.js') ?>"></script>
    <script src="<?= asset_url('assets/ext/cookieconsent/cookieconsent.min.js') ?>"></script>
    <script src="<?= asset_url('assets/ext/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= asset_url('assets/ext/datejs/date.js') ?>"></script>
    <script src="<?= asset_url('assets/js/frontend_book_api.js') ?>"></script>
    <script src="<?= asset_url('assets/js/frontend_book.js') ?>"></script>

    <script>
        $(document).ready(function() {
            FrontendBook.initialize(true, GlobalVariables.manageMode);
            GeneralFunctions.enableLanguageSelection($('#select-language'));
        });
    </script>

    <?php google_analytics_script(); ?>
</body>
</html>
