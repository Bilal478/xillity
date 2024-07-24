<?require("./global.php");?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Xillity</title>

    

    <link rel="shortcut icon" href="logo-big.png">

    <link rel="stylesheet" href="assets/vendor/css/all.min.css">

    <link rel="stylesheet" href="assets/vendor/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="assets/vendor/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" id="primaryColor" href="assets/css/blue-color.css">

    <link rel="stylesheet" id="rtlStyle" href="#">
    <?include("./includes/views/head2.php");?>

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

    <div class="main-content login-panel login-panel-3">

        <div class="container">

            <div class="d-flex justify-content-end">

                <div class="login-body">

                    <div class="top d-flex justify-content-between align-items-center">

                        <div class="logo">

                            <img src="assets/images/logo-big.png" alt="Logo">

                        </div>

                        <a href="crm-dashboard.php"><i class="fa-duotone fa-house-chimney"></i></a>

                    </div>

                    <div class="bottom">

                        <h3 class="panel-title">Login</h3>

                        <form>

                            <div class="input-group mb-25">

                                <span class="input-group-text"><i class="fa-regular fa-user"></i></span>

                                <input type="text" class="form-control" placeholder="Company Name">

                            </div>

                            <div class="input-group mb-25">

                                <span class="input-group-text"><i class="fa-regular fa-user"></i></span>

                                <input type="text" class="form-control" placeholder="Email address">

                            </div>

                            <div class="input-group mb-20">

                                <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>

                                <input type="password" class="form-control rounded-end" placeholder="Password">

                                <a role="button" class="password-show"><i class="fa-duotone fa-eye"></i></a>

                            </div>

                            <div class="d-flex justify-content-between mb-25">

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" value="" id="loginCheckbox">

                                    <label class="form-check-label text-white" for="loginCheckbox">

                                        Remember Me

                                    </label>

                                </div>

                                <a href="reset-password.php" class="text-white fs-14">Forgot Password?</a>

                            </div>

                            <button class="btn btn-primary w-100 login-btn">Sign in</button>

                        </form>

             

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <!-- footer start -->

        <div class="footer">

            <p>Copyright© <script>document.write(new Date().getFullYear())</script> All Rights Reserved By <span class="text-primary">Xillity</span></p>

        </div>

        <!-- footer end -->

    </div>

    <!-- main content end -->

    

    <script src="assets/vendor/js/jquery-3.6.0.min.js"></script>

    <script src="assets/vendor/js/jquery.overlayScrollbars.min.js"></script>

    <script src="assets/vendor/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/main.js"></script>

</body>

</html>