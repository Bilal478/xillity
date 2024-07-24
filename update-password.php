<? require("./global.php");
include("./includes/models/users.php");

?>
<!DOCTYPE html>

<html lang="en" data-menu="vertical" data-nav-size="nav-default">

<head>


    <? include("./includes/views/head2.php"); ?>

</head>

<body>

    <!-- preloader start -->

    <div class="preloader d-none">

        <div class="loader">

            <span></span>

            <span></span>

            <span></span>

        </div>

    </div>

    <!-- preloader end -->



    <!-- theme color hidden button -->

    <button class="header-btn theme-color-btn d-none"><i class="fa-light fa-sun-bright"></i></button>

    <!-- theme color hidden button -->



    <!-- main content start -->

    <div class="main-content login-panel">

        <div class="login-body">

            <div class="top d-flex justify-content-between align-items-center">

                <div class="logo">

                    <img src="assets/images/logo-big.png" alt="Logo">

                </div>

                <a href="index.html"><i class="fa-duotone fa-house-chimney"></i></a>

            </div>

            <div class="bottom">

                <h3 class="panel-title">Update Password</h3>

                <form class="kt-form" action="" method="post" novalidate="novalidate" id="kt_login_form">

                    <div class="form-group" style="margin-top: 19px;">
                        <input class="form-control" id="pass" type="password" placeholder="Password" name="password" autocomplete="off">
                    </div>
                    <div class="form-group" style="margin-top: 19px;">
                        <input class="form-control" id="pass1" type="password" placeholder="Re-type Password" name="password1" autocomplete="off">
                    </div>

                    <div class="kt-login__actions" style="margin-top: 19px;">


                        <input type="submit" name="password_reset" value="Paasword Reset" id="kt_login_signin_submit" class="btn btn-primary w-100 login-btn">
                    </div>

                </form>

            </div>

        </div>



        <!-- footer start -->

        <div class="footer">

            <p>Copyright© <script>
                    document.write(new Date().getFullYear())
                </script> All Rights Reserved By <span class="text-primary">xillity</span></p>

        </div>

        <!-- footer end -->

    </div>

    <!-- main content end -->



    <? include("./includes/views/footerjs.php"); ?>

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
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js'></script>


    <script src="https://www.jqueryscript.net/demo/inform-password-strength/jquery.passwordstrength.js"></script>
    <script>
        $(function() {
            $("#pass").passwordStrength();
            $("#pass1").passwordStrength();
        });
    </script>


    <!--begin::Global Theme Bundle(used by all pages) -->
    <script src="assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
    <script src="assets/js/scripts.bundle.js" type="text/javascript"></script>

</body>

</html>