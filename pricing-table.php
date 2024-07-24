<?require("./global.php");?>
<!DOCTYPE html>

<html lang="en" data-menu="vertical" data-nav-size="nav-default">



<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pricing Table | Digiboard</title>



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

        <div class="panel pricing-panel">

            <div class="panel-body d-flex flex-column align-items-center justify-content-center">

                <div class="pricing">

                    <div class="container">

                        <div class="row">

                            <div class="col-12">

                                <div class="plan-type d-flex justify-content-center gap-2 mb-20">

                                    <button id="Monthly" class="btn btn-primary" disabled>Monthly</button>

                                    <button id="Yearly" class="btn btn-primary">Yearly</button>

                                </div>

                                <div class="discount mb-10">

                                    <div class="form-check form-switch">

                                        <input class="form-check-input border-primary" type="checkbox" role="switch" id="getDiscount">

                                        <label class="form-check-label" for="getDiscount">Save 10% with Digiboard Payments</label>

                                    </div>

                                </div>

                                <div class="table-responsive">

                                    <div class="table-wrap">

                                        <table class="table table-light table-bordered">

                                            <thead>

                                                <tr>

                                                    <th>

                                                        <div class="table-title">

                                                            <h2>Choose Your Plan</h2>

                                                        </div>

                                                    </th>

                                                    <th>

                                                        <div class="table-top">

                                                            <h3>Lean</h3>

                                                            <h2 class="price">$<span class="amount">120 </span> <span class="type">Monthly</span>

                                                            </h2>

                                                            <p>For your essential business needs.</p>

                                                            <a href="#" class="btn btn-primary">Select</a>

                                                        </div>

                                                    </th>

                                                    <th>

                                                        <div class="table-top">

                                                            <h3>Standard</h3>

                                                            <h2 class="price">$<span class="amount">450</span> <span class="type">Monthly</span>

                                                            </h2>

                                                            <p>For your essential business needs.</p>

                                                            <a href="#" class="btn btn-primary">Select</a>

                                                        </div>

                                                    </th>

                                                    <th>

                                                        <div class="table-top">

                                                            <h3>Advanced</h3>

                                                            <h2 class="price">$<span class="amount">780</span> <span class="type">Monthly</span>

                                                            </h2>

                                                            <p>For your essential business needs.</p>

                                                            <a href="#" class="btn btn-primary">Select</a>

                                                        </div>

                                                    </th>

                                                    <th>

                                                        <div class="table-top">

                                                            <h3>Enterprise</h3>

                                                            <h2 class="price">$<span class="amount">150</span> <span class="type">Monthly</span>

                                                            </h2>

                                                            <p>For your essential business needs.</p>

                                                            <a href="#" class="btn btn-primary">Select</a>

                                                        </div>

                                                    </th>

                                                </tr>

                                            </thead>

                                            <tbody>

                                                <tr class="table-secondary">

                                                    <td colspan="3"><span>Products</span></td>

                                                    <td></td>

                                                    <td></td>

                                                </tr>

                                                <tr>

                                                    <td>Retail POS</td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                </tr>

                                                <tr>

                                                    <td>Registers</td>

                                                    <td>1 Included</td>

                                                    <td>1 Included</td>

                                                    <td>1 Included</td>

                                                    <td>1 Included</td>

                                                </tr>

                                                <tr>

                                                    <td>Integrated Payments</td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                </tr>

                                                <tr>

                                                    <td>Accounting</td>

                                                    <td><span class="icon minus"><i class="fas fa-minus"></i></span></td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                </tr>

                                                <tr>

                                                    <td>eCommerce</td>

                                                    <td><span class="icon minus"><i class="fas fa-minus"></i></span></td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                </tr>

                                                <tr>

                                                    <td>Omnichannel Loyalty</td>

                                                    <td><span class="icon minus"><i class="fas fa-minus"></i></span></td>

                                                    <td><span class="icon minus"><i class="fas fa-minus"></i></span></td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                </tr>

                                                <tr>

                                                    <td>Advanced Reporting</td>

                                                    <td><span class="icon minus"><i class="fas fa-minus"></i></span></td>

                                                    <td><span class="icon minus"><i class="fas fa-minus"></i></span></td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                </tr>

                                                <tr class="table-secondary">

                                                    <td colspan="3"><span>Services</span></td>

                                                    <td></td>

                                                    <td></td>

                                                </tr>

                                                <tr>

                                                    <td>Digiboard Payments Card-present rate</td>

                                                    <td>2.6%+ 10c</td>

                                                    <td>2.6%+ 10c</td>

                                                    <td>2.6%+ 10c</td>

                                                    <td>2.6%+ 10c</td>

                                                </tr>

                                                <tr>

                                                    <td>24/7 customer support</td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                </tr>

                                                <tr>

                                                    <td>One on one onboarding</td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                </tr>

                                                <tr>

                                                    <td>Additional free training</td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                </tr>

                                                <tr>

                                                    <td>Dedicated account manager</td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                    <td><span class="icon check"><i class="far fa-check-circle"></i></span></td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- main content end -->



    <script src="assets/vendor/js/jquery-3.6.0.min.js"></script>

    <script src="assets/vendor/js/jquery.overlayScrollbars.min.js"></script>

    <script src="assets/vendor/js/moment.min.js"></script>

    <script src="assets/vendor/js/daterangepicker.js"></script>

    <script src="assets/vendor/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/main.js"></script>

    <script src="assets/js/pricing.js"></script>

</body>



</html>