<?require("./global.php");?>
<!DOCTYPE html>

<html lang="en" data-menu="vertical" data-nav-size="nav-default">



<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Error 504 | Digiboard</title>



    <link rel="shortcut icon" href="favicon.png">

    <link rel="stylesheet" href="assets/vendor/css/all.min.css">

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



    <!-- main content start -->

    <div class="main-content p-0">

        <div class="panel error-panel">

            <div class="panel-body h-100 d-flex flex-column align-items-center justify-content-center">

                <div class="part-img">

                    <img src="assets/images/error-504.png" alt="504">

                </div>

                <div class="part-txt text-center">

                    <h2 class="error-subtitle">Gateway Timeout</h2>

                    <a href="index.html" class="btn btn-primary py-2 px-5 rounded-pill">Go to Home Page</a>

                </div>

            </div>

        </div>

    </div>

    <!-- main content end -->



    <script src="assets/vendor/js/jquery-3.6.0.min.js"></script>

    <script src="assets/vendor/js/jquery.overlayScrollbars.min.js"></script>

    <script src="assets/vendor/js/moment.min.js"></script>

    <script src="assets/vendor/js/daterangepicker.js"></script>

    <script src="assets/js/main.js"></script>

</body>



</html>