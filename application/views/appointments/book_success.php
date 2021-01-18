<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#35A768">
    <title><?= lang('appointment_registered') . ' - ' . $company_name ?></title>

    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/ext/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/css/frontend.css') ?>">

    <link rel="icon" type="image/x-icon" href="<?= asset_url('assets/img/favicon2.png') ?>">
    <link rel="icon" sizes="192x192" href="<?= asset_url('assets/img/logo.png') ?>">
</head>
<body>
    <div id="main" class="container">
        <div class="wrapper row">
            <div id="success-frame" class="frame-container
                    col-xs-12
                    col-sm-offset-1 col-sm-10
                    col-md-offset-2 col-md-8
                    col-lg-offset-2 col-lg-8" style="border-radius: 20%;">
                <img src="https://i.ibb.co/yh7CyXp/Sky-Cleaner.jpg" style="width: 100%;">
                <div class="col-xs-12 col-sm-2">
                    <!-- <img id="success-icon" class="pull-right" src="<?= base_url('assets/img/success.png') ?>" /> -->
                </div>
                <div class="col-xs-12 col-sm-10" style="text-align: center; width: 100%;">
                    <?php
                        echo '
                            <h3>' . lang('appointment_registered') . '</h3>
                            <p>' . lang('appointment_details_was_sent_to_you') . '</p>
                            <a href="' . site_url() . '>            
                            </a>
                        ';

                        if ($this->config->item('google_sync_feature')) {
                            echo '
                                <button id="add-to-google-calendar" class="btn btn-primary">
                                    <span class="glyphicon glyphicon-plus"></span>
                                    ' . lang('add_to_google_calendar') . '
                                </button>';
                        }

                        // Display exceptions (if any).
                        if (isset($exceptions)) {
                            echo '<div class="col-xs-12" style="margin:10px">';
                            echo '<h4>Unexpected Errors</h4>';
                            foreach($exceptions as $exc) {
                                echo exceptionToHtml($exc);
                            }
                            echo '</div>';
                        }
                    ?>
                <!-- חדש -->
                    <a href="https://api.whatsapp.com/send?phone=972542201042&lang=he" target="_blank">
                    <?php 
                    echo "<img src='https://cdn2.iconfinder.com/data/icons/social-messaging-ui-color-shapes-2-free/128/social-whatsapp-circle-512.png' style='width: 6.5%;'>"; 
                    ?> 
                </a>
                &nbsp;
                    <a id="facebook" href="https://www.facebook.com/SkyCleanerIsrael" target="_blank">
                    <?php 
                    echo "<img src='https://purpleironingservices.com/wp-content/uploads/2017/02/facebook-footer-share.png' style='width: 6.5%;'>"; 
                    ?> 
                </a>
                &nbsp;
                    <a href="https://www.instagram.com/skycleaner1/" target="_blank">
                    <?php 
                    echo "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/1024px-Instagram_icon.png' style='width: 6%;'>"; 
                    ?> 
                </a>
                &nbsp;
                    <a href="https://easy.co.il/page/10080031" target="_blank">
                    <?php 
                    echo "<img src='https://play-lh.googleusercontent.com/LaVRvqc6Hxy2EQj8G6-qsuOUz66Q5GZBOhAOs6n7YjsaopFbQwjDhYqurw_RS5grRQ' style='width: 7%;'>"; 
                        ?> 
                </a>
                &nbsp;
                    <a href="tel:054-220-1042" target="_blank">
                    <?php 
                    echo "<img src='https://i.pinimg.com/originals/b5/d7/19/b5d7198734ee5174b581630628ecfdd6.png' style='width: 6%;'>"; 
                        ?> 
                </a>
                &nbsp;
                    <a href="mailto:skycleanerisrael@gmail.com" target="_blank">
                    <?php 
                    echo "<img src='https://cdn0.iconfinder.com/data/icons/material-circle-apps/512/icon-email-material-design-512.png' style='width: 6%;'>"; 
                        ?> 
                <br> 
                <br>
                <br>
                <br>
                </a>
                
                <p id="credit_matan_yamin" style="width: 100%; margin: auto; font-weight: bold;"> 
                &nbsp;<a href="https://www.linkedin.com/in/matan-yamin-40283b199/"> פיתוח צד שרת ועיצוב: מתן ימין &nbsp; </a> <img src='https://icons-for-free.com/iconfiles/png/512/programming+tags+icon-1320087273222563498.png' style='width: 4.5%;'>
                </p>
                <!-- סוף -->
                </div>
            </div>
        </div>
    </div>
    
    
    
    <script src="<?= base_url('assets/ext/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/ext/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/ext/datejs/date.js') ?>"></script>
    <script src="https://apis.google.com/js/client.js"></script>

    <script>
        var GlobalVariables = {
            'csrfToken'         : <?= json_encode($this->security->get_csrf_hash()) ?>,
            'appointmentData'   : <?= json_encode($appointment_data) ?>,
            'providerData'      : <?= json_encode($provider_data) ?>,
            'serviceData'       : <?= json_encode($service_data) ?>,
            'companyName'       : <?= json_encode($company_name) ?>,
            'googleApiKey'      : <?= json_encode(Config::GOOGLE_API_KEY) ?>,
            'googleClientId'    : <?= json_encode(Config::GOOGLE_CLIENT_ID) ?>,
            'googleApiScope'    : 'https://www.googleapis.com/auth/calendar'
        };

        var EALang = <?= json_encode($this->lang->language) ?>;
    </script>

    <script src="<?= asset_url('assets/js/frontend_book_success.js') ?>"></script>
    <script src="<?= asset_url('assets/js/general_functions.js') ?>"></script>

    <?php google_analytics_script() ?>
</body>
</html>
