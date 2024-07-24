<? include_once("global.php");

include("./includes/models/users.php");

if (!$g_modules_global['forgetPasswordEnabled']) {
    header("Location: ./");
}




?>
<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Xillity</title>



    <link rel="shortcut icon" href="favicon.png">

    <link rel="stylesheet" href="assets/vendor/css/all.min.css">

    <link rel="stylesheet" href="assets/vendor/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="assets/vendor/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" id="primaryColor" href="assets/css/blue-color.css">

    <link rel="stylesheet" id="rtlStyle" href="#">
    <? include("./includes/views/head2.php"); ?>
</head>

<!-- end::Head -->

<!-- begin::Body -->

<body class="kt-page--loading-enabled kt-page--loading kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-menu kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--left kt-aside--fixed kt-page--loading">

    <!-- begin::Page loader -->

    <!-- end::Page Loader -->

    <!-- begin:: Page -->
    <div class="kt-grid kt-grid--ver kt-grid--root kt-page">
        <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v1" id="kt_login">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">

                <!--begin::Aside-->
                <? // require("./includes/views/signupsidebar.php") 
                ?>

                <!--begin::Aside-->

                <!--begin::Content-->
                <div class="kt-grid__item kt-grid__item--fluid  kt-grid__item--order-tablet-and-mobile-1  kt-login__wrapper">

                  
                    <div class="kt-login__body">



                        <!--begin::Signin-->
                        <div class="kt-login__form">
                            <div class="kt-login__title">
                                <h3>Forget Password?</h3>
                            </div>

                            <? if (isset($_GET['success'])) { ?>
                                <div class="alert alert-info">
                                    Email Sent. Kindly check spambox as well.
                                </div>
                            <? } ?>
                            <!--begin::Form-->
                            <form method="post" action="forget_password.php">

                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Email" name="email">
                                </div>


                              
                                <div class="kt-login__actions">

                                    <input type="submit" class="btn btn-primary btn-elevate kt-login__btn-primary" value="Send Email" name="send_verification_email" />
                                </div>

                              
                            </form>

                            
                        </div>

                        <!--end::Signin-->
                    </div>

                    <!--end::Body-->
                </div>

                <!--end::Content-->
            </div>
        </div>

    </div>
    <? //include("./includes/views/footer.php"); 
    ?>
    <!-- end:: Page -->

    <!-- begin::Global Config(global config for global JS sciprts) -->
    <script>
        var KTAppOptions = {
            "colors": {
                "state": {
                    "brand": "#591df1",
                    "light": "#ffffff",
                    "dark": "#282a3c",
                    "primary": "#5867dd",
                    "success": "#34bfa3",
                    "info": "#36a3f7",
                    "warning": "#ffb822",
                    "danger": "#fd3995"
                },
                "base": {
                    "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                    "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
                }
            }
        };
    </script>

    <!-- end::Global Config -->

    <!--begin::Global Theme Bundle(used by all pages) -->
    <script src="assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
    <script src="assets/js/scripts.bundle.js" type="text/javascript"></script>

    <!--end::Global Theme Bundle -->

    <!--begin::Page Scripts(used by this page) -->

    <!--end::Page Scripts -->
</body>

<!-- end::Body -->

</html>