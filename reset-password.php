<? require("./global.php");
include("./includes/models/users.php");

if (!$g_modules_global['forgetPasswordEnabled']) {
    header("Location: ./");
}

?>





<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Reset Password | Digiboard</title>



    <link rel="shortcut icon" href="favicon.png">

    <link rel="stylesheet" href="assets/vendor/css/all.min.css">

    <link rel="stylesheet" href="assets/vendor/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="assets/vendor/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" id="primaryColor" href="assets/css/blue-color.css">

    <link rel="stylesheet" id="rtlStyle" href="#">
    <? include("./includes/views/head2.php"); ?>

</head>

<body>





    <div class="main-content login-panel">

        <div class="login-body">

            <div class="top d-flex justify-content-between align-items-center">

                <div class="logo">

                    <img src="./assets/Xillity-transparent-png.png" alt="Logo">

                </div>

                <a href="index.php"><i class="fa-duotone fa-house-chimney"></i></a>

            </div>

            <div class="bottom">

                <h3 class="panel-title">Forget Password?</h3>



                <div class="kt-login__body">



                    <!--begin::Signin-->
                    <div class="kt-login__form">
                        <!-- <div class="kt-login__title">
                                <h3></h3>
                            </div> -->

                        <? if (isset($_GET['success'])) { ?>
                            <div class="alert alert-info">
                                Email Sent. Kindly check spambox as well.
                            </div>
                        <? } ?>
                        <!--begin::Form-->
                        <form class="kt-form" action="" method="post" novalidate="novalidate" id="kt_login_form">

                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="Email" name="email">
                            </div>


                            <!--begin::Action-->
                            <div class="kt-login__actions">


                                <input type="submit" name="send_verification_email" value="Send Email" id="kt_login_signin_submit" class="btn btn-primary w-100 login-btn" style="margin-top: 11px;">
                            </div>

                            <!--end::Action-->
                        </form>



                        <!--end::Options-->
                    </div>

                    <!--end::Signin-->
                </div>



                <div class="other-option">

                    <p class="mb-0">Remember the password? <a href="./login.php">Login</a></p>

                </div>

            </div>

        </div>



        <!-- footer start -->

        <div class="footer">

            <p>Copyright© <script>
                    document.write(new Date().getFullYear())
                </script> All Rights Reserved By <span class="text-primary">Xillity</span></p>

        </div>

        <!-- footer end -->

    </div>

    <!-- main content end -->



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

</body>

</html>