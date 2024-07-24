<?require("./global.php");?>
<!<!DOCTYPE html>

<html lang="en" data-menu="vertical" data-nav-size="nav-default">

<head>


<?include("./includes/views/head2.php");?>

</head>



<body class="body-padding body-p-top">

    <!-- preloader start -->

    <div class="preloader d-none">

        <div class="loader">

            <span></span>

            <span></span>

            <span></span>

        </div>

    </div>

    <!-- preloader end -->



    <!-- header start -->

    <?include("./includes/views/navbar.php"); ?>

    <!-- header end -->



    <!-- profile right sidebar start -->

    <?include("./includes/views/rightsidebar.php"); ?>
    <!-- right sidebar end -->



    <!-- main sidebar start -->

    <?include("./includes/views/leftmenu2.php"); ?>

    <!-- main sidebar end -->



    <!-- main content start -->

    <div class="main-content">

        <div class="row">

            <div class="col-12">

                <div class="panel">

                    <div class="panel-header">

                        <h5>Sweet Alert</h5>

                    </div>

                    <div class="panel-body">

                        <div class="table-responsive">

                            <table class="table">

                                <thead>

                                    <tr>

                                        <th>Alert Type</th>

                                        <th>Alert Example</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <tr>

                                        <td>A Basic Message</td>

                                        <td><button class="btn btn-sm btn-primary" id="saBasic">Click Me</button></td>

                                    </tr>

                                    <tr>

                                        <td>A Title with a Text Under</td>

                                        <td><button class="btn btn-sm btn-primary" id="saTitle">Click Me</button></td>

                                    </tr>

                                    <tr>

                                        <td>A success message!</td>

                                        <td><button class="btn btn-sm btn-primary" id="saSuccess">Click Me</button></td>

                                    </tr>

                                    <tr>

                                        <td>A modal with a title, an error icon, a text, and a footer</td>

                                        <td><button class="btn btn-sm btn-primary" id="saError">Click Me</button></td>

                                    </tr>

                                    <tr>

                                        <td>A modal window with a long content inside</td>

                                        <td><button class="btn btn-sm btn-primary" id="saLongcontent">Click Me</button></td>

                                    </tr>

                                    <tr>

                                        <td>A warning message, with a function attached to the "Confirm"-button</td>

                                        <td><button class="btn btn-sm btn-primary" id="saWarning">Click Me</button></td>

                                    </tr>

                                    <tr>

                                        <td>By passing a parameter, you can execute something else for "Cancel".</td>

                                        <td><button class="btn btn-sm btn-primary" id="saParams">Click Me</button></td>

                                    </tr>

                                    <tr>

                                        <td>A message with custom Image Header</td>

                                        <td><button class="btn btn-sm btn-primary" id="saImage">Click Me</button></td>

                                    </tr>

                                    <tr>

                                        <td>A message with auto close timer</td>

                                        <td><button class="btn btn-sm btn-primary" id="saClose">Click Me</button></td>

                                    </tr>

                                    <tr>

                                        <td>Custom HTML description and buttons</td>

                                        <td><button class="btn btn-sm btn-primary" id="customHtmlAlert">Click Me</button></td>

                                    </tr>

                                    <tr>

                                        <td>A dialog with three buttons</td>

                                        <td><button class="btn btn-sm btn-primary" id="saDialogThreeBtn">Click Me</button></td>

                                    </tr>

                                    <tr>

                                        <td>A custom positioned dialog</td>

                                        <td><button class="btn btn-sm btn-primary" id="saPosition">Click Me</button></td>

                                    </tr>

                                    <tr>

                                        <td>A message with custom width, padding and background</td>

                                        <td><button class="btn btn-sm btn-primary" id="customPaddingWidthAlert">Click Me</button></td>

                                    </tr>

                                    <tr>

                                        <td>Ajax request example</td>

                                        <td><button class="btn btn-sm btn-primary" id="ajaxAlert">Click Me</button></td>

                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <!-- footer start -->

        <?include("./includes/views/footer.php"); ?>

        <!-- footer end -->

    </div>

    <!-- main content end -->


    <?include("./includes/views/footerjs.php"); ?>

</body>



</html>