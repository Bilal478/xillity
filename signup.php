<?include_once("global.php");

include("./includes/models/users.php");

$role = 'user';

if(!checkGlobalPermission('signupEnabled')){
   // header("Location: ./");
}


?>

<!DOCTYPE html>

<html lang="en">

<head>


    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Digiboard</title>

    

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



    <div class="main-content mx-auto" style="background: url(./assets/images/auth-bg.png) center center no-repeat;">

        <div class="login-body mx-auto" style="">

            <div class="top d-flex justify-content-between align-items-center">

                <div class="logo">

                    <img src="./assets/Xillity-transparent-png.png" alt="Logo">

                </div>

                <a href="index.php"><i class="fa-duotone fa-house-chimney"></i></a>

            </div>

            <div class="bottom">

                <h3 class="panel-title">Sign Up</h3>

                <form method="POST" enctype="multipart/form-data" id="kt_login_form">

                    <div class="input-group mb-25">

                        <span class="input-group-text"><i class="fa-regular fa-user"></i></span>

                        <input type="text" name="name" class="form-control" required placeholder="Name">

                    </div>

                    <div class="input-group mb-25">

                        <span class="input-group-text"><i class="fa-regular fa-user"></i></span>

                        <input type="text" name="username" class="form-control" required placeholder="User Name">

                    </div>
                    <div class="input-group mb-25">

                        <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>

                        <input type="email" name="email" class="form-control" required placeholder="email address">

                    </div>
                    <div class="input-group mb-25">

                        <span class="input-group-text"><i class="fa-regular fa-phone"></i></span>

                        <input type="number" name="phone" class="form-control" required placeholder="Phone">

                    </div>

                    <div class="input-group mb-20">

                        <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>

                        <input type="password" name="password" class="form-control rounded-end" required placeholder="Password" autocomplete="off" id="password">

                        <a role="button" class="password-show"><i class="fa-duotone fa-eye"></i></a>

                    </div>

                    <div class="input-group mb-25">

                        <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>

                        <input type="password" name="confirmpassword" class="form-control rounded-end pass" autocomplete="off" id="confirm-password" placeholder="Confirm Password" required>
                        
                        <a role="button" class="password-show"><i class="fa-duotone fa-eye"></i></a>

                    </div>


                    <div class="d-flex justify-content-between mb-25">

                        <div class="form-check">
                        <label class="text-danger" id="validation" style="display:none">Password does not match</label>

                        </div>

                        <a href="login.php" class="fs-14">I Have Already Account!</a>

                    </div>

                    <!-- <button class="btn btn-primary w-100 login-btn">Sign in</button> -->
                    <input type="submit" value="Sign Up" name="create_user" id="kt_login_signin_submit" class="btn btn-primary w-100 login-btn">

                </form>


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

<script>
$(document).ready(function() {
  $('#kt_login_form').submit(function(event) {
    var password = $('#password').val();
    var confirmPassword = $('#confirm-password').val();

    if (password !== confirmPassword) {
      event.preventDefault(); // Prevent form submission
      $('#validation').show(); // Display password validation message
      return false; // Stop further execution
    }
  });
});
</script>

</html>