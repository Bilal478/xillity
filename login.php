<?php include_once("global.php");
if (isset($_GET['demo'])) {
	$_SESSION['isdemo'] = "yes";
}

if ($logged == 1 && $_SESSION['loginAuthCorrect']) {
	header("Location: ./crm-dashboard.php");
	exit();
}

if (isset($_COOKIE['remember_me']) && !isset($_SESSION['email'])) {
    
    $token = $_COOKIE['remember_me'];
    $query = "SELECT * FROM ".$g_projectSlug."_users WHERE remember_token='$token'";
    $result = $con->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['loginAuthCorrect'] = true;
        header("Location: ./crm-dashboard.php");
        exit();
    }
}

include("./includes/models/users.php");

if (isset($_POST['code'])) {
	$code = $_POST['code'];

	if ($session_data['loginAuth'] == $code) {
		$_SESSION['loginAuthCorrect'] = true;
		header("Location: ./crm-dashboard.php");
		exit();
	}
}
?>

<!DOCTYPE html>

<html lang="en">

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

    <div class="main-content login-panel">

        <div class="login-body">

            <div class="top d-flex justify-content-between align-items-center">

                <div class="logo">

                    <img src="./assets/Xillity-transparent-png.png" alt="Logo">
                    <!-- <h2>Xillity</h2> -->
                </div>

                <a href="index.php"><i class="fa-duotone fa-house-chimney"></i></a>

            </div>

            <div class="bottom">

                <h3 class="panel-title">Login</h3>

                <form method="POST" enctype="multipart/form-data" id="kt_login_form">

                    <div class="input-group mb-25">

                        <span class="input-group-text"><i class="fa-regular fa-user"></i></span>

                        <input type="email" name="email" class="form-control" required placeholder="email address">

                    </div>

                    <div class="input-group mb-20">

                        <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>

                        <input type="password" name="password" class="form-control rounded-end" required placeholder="Password" autocomplete="off">

                        <a role="button" class="password-show"><i class="fa-duotone fa-eye"></i></a>

                    </div>

                    <div class="d-flex justify-content-between mb-25">

                        <div class="form-check">

                            <input class="form-check-input" type="checkbox" name="remember_me"  id="loginCheckbox">

                            <label class="form-check-label text-white" for="loginCheckbox">

                                Remember Me

                            </label>

                        </div>

                        <a href="reset-password.php" class="text-white fs-14">Forgot Password?</a>

                    </div>

                    <!-- <button class="btn btn-primary w-100 login-btn">Sign in</button> -->
                    <input type="submit" value="Sign in" name="login" id="kt_login_signin_submit" class="btn btn-primary w-100 login-btn">

                </form>

                <!--<div class="other-option">

                    <p>Or continue with</p>

                    <div class="social-box d-flex justify-content-center gap-20">

                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>

                        <a href="#"><i class="fa-brands fa-twitter"></i></a>

                        <a href="#"><i class="fa-brands fa-google"></i></a>

                        <a href="#"><i class="fa-brands fa-instagram"></i></a>

                    </div>

                </div>-->

            </div>

        </div>



        <!-- footer start -->

        <? include("./includes/views/footer.php");?>

        <!-- footer end -->

    </div>

    <!-- main content end -->

    

    <script src="assets/vendor/js/jquery-3.6.0.min.js"></script>

    <script src="assets/vendor/js/jquery.overlayScrollbars.min.js"></script>

    <script src="assets/vendor/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/main.js"></script>

</body>

</html>