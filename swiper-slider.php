<?require("./global.php");?>
<!DOCTYPE html>

<html lang="en" data-menu="vertical" data-nav-size="nav-default">



<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Swiper Slider | Digiboard</title>



    <link rel="shortcut icon" href="favicon.png">

    <link rel="stylesheet" href="assets/vendor/css/all.min.css">

    <link rel="stylesheet" href="assets/vendor/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="assets/vendor/css/swiper-bundle.min.css">

    <link rel="stylesheet" href="assets/vendor/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" id="primaryColor" href="assets/css/blue-color.css">

    <link rel="stylesheet" id="rtlStyle" href="#">
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

    <div class="profile-right-sidebar">

        <button class="right-bar-close"><i class="fa-light fa-angle-right"></i></button>

        <div class="top-panel">

            <div class="profile-content scrollable">

                <ul>

                    <li>

                        <div class="dropdown-txt text-center">

                            <p class="mb-0">Shaikh Abu Dardah</p>

                            <span class="d-block">Web Developer</span>

                            <div class="d-flex justify-content-center">

                                <div class="form-check pt-3">

                                    <input class="form-check-input" type="checkbox" id="seeProfileAsDropdown">

                                    <label class="form-check-label" for="seeProfileAsDropdown">See as dropdown</label>

                                </div>

                            </div>

                        </div>

                    </li>

                    <li>

                        <a class="dropdown-item" href="view-profile.php"><span class="dropdown-icon"><i class="fa-regular fa-circle-user"></i></span> Profile</a>

                    </li>

                    <li>

                        <a class="dropdown-item" href="chat.php"><span class="dropdown-icon"><i class="fa-regular fa-message-lines"></i></span> Message</a>

                    </li>

                    <li>

                        <a class="dropdown-item" href="task.php"><span class="dropdown-icon"><i class="fa-regular fa-calendar-check"></i></span> Taskboard</a>

                    </li>

                    <li>

                        <a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-regular fa-circle-question"></i></span> Help</a>

                    </li>

                </ul>

            </div>

        </div>

        <div class="bottom-panel">

            <div class="button-group">

                <a href="edit-profile.php"><i class="fa-light fa-gear"></i><span>Settings</span></a>

                <a href="login.php"><i class="fa-light fa-power-off"></i><span>Logout</span></a>

            </div>

        </div>

    </div>

    <!-- profile right sidebar end -->



    <div class="right-sidebar-btn d-lg-block d-none">

        <button class="header-btn theme-settings-btn"><i class="fa-light fa-gear"></i></button>

    </div>



    <!-- right sidebar start -->

    <div class="right-sidebar">

        <button class="right-bar-close"><i class="fa-light fa-angle-right"></i></button>

        <div class="sidebar-title">

            <h3>Layout Settings</h3>

        </div>

        <div class="sidebar-body scrollable">

            <div class="right-sidebar-group">

                <span class="sidebar-subtitle">Nav Position <span><i class="fa-light fa-angle-up"></i></span></span>

                <div class="settings-row">

                    <div class="settings-col">

                        <div class="dashboard-icon d-flex gap-1 border rounded active" id="verticalMenu">

                            <div class="pb-2 px-1 pt-1 bg-menu">

                                <div class="px-2 py-1 rounded-pill bg-nav mb-2"></div>

                                <div class="border border-primary mb-1">

                                    <div class="px-2 pt-1 bg-nav mb-1"></div>

                                    <div class="px-2 pt-1 bg-nav mb-1"></div>

                                </div>

                                <div class="border border-primary">

                                    <div class="px-2 pt-1 bg-nav mb-1"></div>

                                    <div class="px-2 pt-1 bg-nav mb-1"></div>

                                </div>

                            </div>

                            <div class="w-100 d-flex flex-column justify-content-between">

                                <div class="px-2 py-1 bg-menu"></div>

                                <div class="px-2 py-1 bg-menu"></div>

                            </div>

                            <span class="part-txt">Vertical</span>

                        </div>

                    </div>

                    <div class="settings-col d-lg-block d-none">

                        <div class="dashboard-icon d-flex h-100 gap-1 border rounded" id="horizontalMenu">

                            <div class="w-100 d-flex flex-column justify-content-between">

                                <div>

                                    <div class="p-1 bg-menu border-bottom">

                                        <div class="rounded-circle p-1 bg-nav w-max-content"></div>

                                    </div>

                                    <div class="p-1 bg-menu d-flex gap-1 mb-1">

                                        <div class="w-max-content px-2 pt-1 rounded bg-nav"></div>

                                        <div class="w-max-content px-2 pt-1 rounded bg-nav"></div>

                                        <div class="w-max-content px-2 pt-1 rounded bg-nav"></div>

                                        <div class="w-max-content px-2 pt-1 rounded bg-nav"></div>

                                    </div>

                                </div>

                                <div class="px-2 py-1 bg-menu"></div>

                            </div>

                            <span class="part-txt">Horizontal</span>

                        </div>

                    </div>

                    <div class="settings-col">

                        <div class="dashboard-icon d-flex gap-1 border rounded" id="twoColumnMenu">

                            <div class="p-1 bg-menu"></div>

                            <div class="pb-4 px-1 pt-1 bg-menu">

                                <div class="px-2 py-1 rounded-pill bg-nav mb-2"></div>

                                <div class="px-2 pt-1 bg-nav mb-1"></div>

                                <div class="px-2 pt-1 bg-nav mb-1"></div>

                                <div class="px-2 pt-1 bg-nav mb-1"></div>

                            </div>

                            <div class="w-100 d-flex flex-column justify-content-between">

                                <div class="px-2 py-1 bg-menu"></div>

                                <div class="px-2 py-1 bg-menu"></div>

                            </div>

                            <span class="part-txt">Two column</span>

                        </div>

                    </div>

                    <div class="settings-col">

                        <div class="dashboard-icon d-flex gap-1 border rounded" id="flushMenu">

                            <div class="pb-4 px-1 pt-1 bg-menu">

                                <div class="px-2 py-1 rounded-pill bg-nav mb-2"></div>

                                <div class="px-2 pt-1 bg-nav mb-1"></div>

                                <div class="px-2 pt-1 bg-nav mb-1"></div>

                                <div class="px-2 pt-1 bg-nav mb-1"></div>

                            </div>

                            <div class="w-100 d-flex flex-column justify-content-between">

                                <div class="px-2 py-1 bg-menu"></div>

                                <div class="px-2 py-1 bg-menu"></div>

                            </div>

                            <span class="part-txt">Flush</span>

                        </div>

                    </div>

                </div>

            </div>

            <div class="right-sidebar-group">

                <span class="sidebar-subtitle">Theme Direction <span><i class="fa-light fa-angle-up"></i></span></span>

                <div>

                    <div class="btn-group d-flex">

                        <button class="btn btn-primary active w-50" id="dirLtr">LTR</button>

                        <button class="btn btn-primary w-50" id="dirRtl">RTL</button>

                    </div>

                </div>

            </div>

            <div class="right-sidebar-group">

                <span class="sidebar-subtitle">Primary Color <span><i class="fa-light fa-angle-up"></i></span></span>

                <div class="settings-row-2">

                    <button class="color-palette color-palette-1 active" data-color="blue-color">

                        <span></span>

                        <span></span>

                        <span></span>

                        <span></span>

                    </button>

                    <button class="color-palette color-palette-2" data-color="orange-color">

                        <span></span>

                        <span></span>

                        <span></span>

                        <span></span>

                    </button>

                    <button class="color-palette color-palette-3" data-color="pink-color">

                        <span></span>

                        <span></span>

                        <span></span>

                        <span></span>

                    </button>

                    <button class="color-palette color-palette-4" data-color="eagle_green-color">

                        <span></span>

                        <span></span>

                        <span></span>

                        <span></span>

                    </button>

                    <button class="color-palette color-palette-5" data-color="purple-color">

                        <span></span>

                        <span></span>

                        <span></span>

                        <span></span>

                    </button>

                    <button class="color-palette color-palette-6" data-color="gold-color">

                        <span></span>

                        <span></span>

                        <span></span>

                        <span></span>

                    </button>

                    <button class="color-palette color-palette-7" data-color="green-color">

                        <span></span>

                        <span></span>

                        <span></span>

                        <span></span>

                    </button>

                    <button class="color-palette color-palette-8" data-color="deep_pink-color">

                        <span></span>

                        <span></span>

                        <span></span>

                        <span></span>

                    </button>

                    <button class="color-palette color-palette-9" data-color="tea_green-color">

                        <span></span>

                        <span></span>

                        <span></span>

                        <span></span>

                    </button>

                    <button class="color-palette color-palette-10" data-color="yellow_green-color">

                        <span></span>

                        <span></span>

                        <span></span>

                        <span></span>

                    </button>

                </div>

            </div>

            <div class="right-sidebar-group">

                <span class="sidebar-subtitle">Theme Color <span><i class="fa-light fa-angle-up"></i></span></span>

                <div class="settings-row">

                    <div class="settings-col">

                        <div class="dashboard-icon d-flex bg-blue-theme gap-1 border rounded active" id="blueTheme">

                            <div class="pb-4 px-1 pt-1 bg-menu">

                                <div class="px-2 py-1 rounded-pill bg-nav mb-2"></div>

                                <div class="px-2 pt-1 bg-nav mb-1"></div>

                                <div class="px-2 pt-1 bg-nav mb-1"></div>

                                <div class="px-2 pt-1 bg-nav mb-1"></div>

                            </div>

                            <div class="w-100 d-flex flex-column justify-content-between">

                                <div class="px-2 py-1 bg-menu"></div>

                                <div class="px-2 py-1 bg-menu"></div>

                            </div>

                            <span class="part-txt">Blue Theme</span>

                        </div>

                    </div>

                    <div class="settings-col">

                        <div class="dashboard-icon d-flex gap-1 border rounded bg-body-secondary light-theme-btn" id="lightTheme">

                            <div class="pb-4 px-1 pt-1 bg-dark-subtle">

                                <div class="px-2 py-1 rounded-pill bg-primary mb-2"></div>

                                <div class="px-2 pt-1 bg-primary mb-1"></div>

                                <div class="px-2 pt-1 bg-primary mb-1"></div>

                                <div class="px-2 pt-1 bg-primary mb-1"></div>

                            </div>

                            <div class="w-100 d-flex flex-column justify-content-between">

                                <div class="px-2 py-1 bg-dark-subtle"></div>

                                <div class="px-2 py-1 bg-dark-subtle"></div>

                            </div>

                            <span class="part-txt">Light Theme</span>

                        </div>

                    </div>

                    <div class="settings-col">

                        <div class="dashboard-icon d-flex gap-1 border rounded bg-dark" id="darkTheme">

                            <div class="pb-4 px-1 pt-1 bg-menu">

                                <div class="px-2 py-1 rounded-pill bg-nav mb-2"></div>

                                <div class="px-2 pt-1 bg-nav mb-1"></div>

                                <div class="px-2 pt-1 bg-nav mb-1"></div>

                                <div class="px-2 pt-1 bg-nav mb-1"></div>

                            </div>

                            <div class="w-100 d-flex flex-column justify-content-between">

                                <div class="px-2 py-1 bg-menu"></div>

                                <div class="px-2 py-1 bg-menu"></div>

                            </div>

                            <span class="part-txt">Dark Theme</span>

                        </div>

                    </div>

                </div>

            </div>

            <div class="right-sidebar-group" id="navBarSizeGroup">

                <span class="sidebar-subtitle">Navbar Size <span><i class="fa-light fa-angle-up"></i></span></span>

                <div class="settings-row">

                    <div class="settings-col">

                        <div class="dashboard-icon d-flex gap-1 border rounded active" id="sidebarDefault">

                            <div class="pb-4 px-1 pt-1 bg-menu">

                                <div class="px-2 py-1 rounded-pill bg-nav mb-2"></div>

                                <div class="px-2 pt-1 bg-nav mb-1"></div>

                                <div class="px-2 pt-1 bg-nav mb-1"></div>

                                <div class="px-2 pt-1 bg-nav mb-1"></div>

                            </div>

                            <div class="w-100 d-flex flex-column justify-content-between">

                                <div class="px-2 py-1 bg-menu"></div>

                                <div class="px-2 py-1 bg-menu"></div>

                            </div>

                            <span class="part-txt">Default</span>

                        </div>

                    </div>

                    <div class="settings-col">

                        <div class="dashboard-icon d-flex gap-1 border rounded" id="sidebarSmall">

                            <div class="pb-4 pt-1 bg-menu">

                                <div class="p-1 rounded-pill bg-nav mb-2"></div>

                                <div class="ps-1 pt-1 bg-nav mb-1"></div>

                                <div class="ps-1 pt-1 bg-nav mb-1"></div>

                                <div class="ps-1 pt-1 bg-nav mb-1"></div>

                            </div>

                            <div class="w-100 d-flex flex-column justify-content-between">

                                <div class="px-2 py-1 bg-menu"></div>

                                <div class="px-2 py-1 bg-menu"></div>

                            </div>

                            <span class="part-txt">Small icon</span>

                        </div>

                    </div>

                    <div class="settings-col">

                        <div class="dashboard-icon d-flex gap-1 border rounded" id="sidebarHover">

                            <div class="pb-4 pt-1 bg-menu">

                                <div class="p-1 rounded-pill bg-nav mb-2"></div>

                                <div class="ps-1 pt-1 bg-nav mb-1"></div>

                                <div class="ps-1 pt-1 bg-nav mb-1"></div>

                                <div class="ps-1 pt-1 bg-nav mb-1"></div>

                            </div>

                            <div class="w-100 d-flex flex-column justify-content-between">

                                <div class="px-2 py-1 bg-menu"></div>

                                <div class="px-2 py-1 bg-menu"></div>

                            </div>

                            <span class="part-txt">Expand on hover</span>

                        </div>

                    </div>

                </div>

            </div>

            <div class="right-sidebar-group">

                <span class="sidebar-subtitle">Sidebar Background <span><i class="fa-light fa-angle-up"></i></span></span>

                <div>

                    <div class="sidebar-bg-btn-box">

                        <button id="noBackground">

                            <span><i class="fa-light fa-xmark"></i></span>

                        </button>

                        <button class="sidebar-bg-btn" data-img="assets/images/nav-bg-1.jpg"></button>

                        <button class="sidebar-bg-btn" data-img="assets/images/nav-bg-2.jpg"></button>

                        <button class="sidebar-bg-btn" data-img="assets/images/nav-bg-3.jpg"></button>

                        <button class="sidebar-bg-btn" data-img="assets/images/nav-bg-4.jpg"></button>

                    </div>

                </div>

            </div>

            <div class="right-sidebar-group">

                <span class="sidebar-subtitle">Main Background <span><i class="fa-light fa-angle-up"></i></span></span>

                <div>

                    <div class="main-content-bg-btn-box">

                        <button id="noBackground2">

                            <span><i class="fa-light fa-xmark"></i></span>

                        </button>

                        <button class="main-content-bg-btn" data-img="assets/images/main-bg-1.jpg"></button>

                        <button class="main-content-bg-btn" data-img="assets/images/main-bg-2.jpg"></button>

                        <button class="main-content-bg-btn" data-img="assets/images/main-bg-3.jpg"></button>

                        <button class="main-content-bg-btn" data-img="assets/images/main-bg-4.jpg"></button>

                    </div>

                </div>

            </div>

            <div class="right-sidebar-group">

                <span class="sidebar-subtitle">Main preloader <span><i class="fa-light fa-angle-up"></i></span></span>

                <div class="settings-row">

                    <div class="settings-col">

                        <div class="dashboard-icon d-flex gap-1 border rounded" id="enableLoader">

                            <div class="pb-4 px-1 pt-1 bg-menu">

                                <div class="px-2 py-1 rounded-pill bg-nav mb-2"></div>

                                <div class="px-2 pt-1 bg-nav mb-1"></div>

                                <div class="px-2 pt-1 bg-nav mb-1"></div>

                                <div class="px-2 pt-1 bg-nav mb-1"></div>

                            </div>

                            <div class="w-100 d-flex flex-column justify-content-between">

                                <div class="px-2 py-1 bg-menu"></div>

                                <div class="px-2 py-1 bg-menu"></div>

                            </div>

                            <div class="preloader-small">

                                <div class="loader">

                                    <span></span>

                                    <span></span>

                                    <span></span>

                                </div>

                            </div>

                            <span class="part-txt">Enable</span>

                        </div>

                    </div>

                    <div class="settings-col">

                        <div class="dashboard-icon d-flex gap-1 border rounded active" id="disableLoader">

                            <div class="pb-4 px-1 pt-1 bg-menu">

                                <div class="px-2 py-1 rounded-pill bg-nav mb-2"></div>

                                <div class="px-2 pt-1 bg-nav mb-1"></div>

                                <div class="px-2 pt-1 bg-nav mb-1"></div>

                                <div class="px-2 pt-1 bg-nav mb-1"></div>

                            </div>

                            <div class="w-100 d-flex flex-column justify-content-between">

                                <div class="px-2 py-1 bg-menu"></div>

                                <div class="px-2 py-1 bg-menu"></div>

                            </div>

                            <span class="part-txt">Disable</span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- right sidebar end -->



    <!-- main sidebar start -->

    <?include("./includes/views/leftmenu2.php"); ?>

    <!-- main sidebar end -->



    <!-- main content start -->

    <div class="main-content">

        <div class="dashboard-breadcrumb mb-25">

            <h2>Swiper Slider</h2>

        </div>

        <div class="row">

            <div class="col-lg-4 col-sm-6">

                <div class="panel">

                    <div class="panel-header">

                        <h5>Default Swiper</h5>

                    </div>

                    <div class="panel-body">

                        <div class="swiper default-swiper">

                            <div class="swiper-wrapper">

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-1.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-2.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-3.jpg" alt="image">

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 col-sm-6">

                <div class="panel">

                    <div class="panel-header">

                        <h5>Navigation Swiper</h5>

                    </div>

                    <div class="panel-body">

                        <div class="swiper navigation-swiper">

                            <div class="swiper-wrapper">

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-4.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-5.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-6.jpg" alt="image">

                                </div>

                            </div>

                            <button class="btn btn-sm btn-icon btn-primary swiper-button-next"><i class="fa-solid fa-chevron-right"></i></button>

                            <button class="btn btn-sm btn-icon btn-primary swiper-button-prev"><i class="fa-solid fa-chevron-left"></i></button>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 col-sm-6">

                <div class="panel">

                    <div class="panel-header">

                        <h5>Pagination Swiper</h5>

                    </div>

                    <div class="panel-body">

                        <div class="swiper pagination-swiper">

                            <div class="swiper-wrapper">

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-7.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-8.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-9.jpg" alt="image">

                                </div>

                            </div>

                            <div class="swiper-pagination"></div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 col-sm-6">

                <div class="panel">

                    <div class="panel-header">

                        <h5>Pagination Fraction Swiper</h5>

                    </div>

                    <div class="panel-body">

                        <div class="swiper pagination-fraction-swiper">

                            <div class="swiper-wrapper">

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-10.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-1.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-2.jpg" alt="image">

                                </div>

                            </div>

                            <div class="swiper-pagination"></div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 col-sm-6">

                <div class="panel">

                    <div class="panel-header">

                        <h5>Pagination Custom Swiper</h5>

                    </div>

                    <div class="panel-body">

                        <div class="swiper pagination-custom-swiper">

                            <div class="swiper-wrapper">

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-3.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-4.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-5.jpg" alt="image">

                                </div>

                            </div>

                            <div class="swiper-pagination"></div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 col-sm-6">

                <div class="panel">

                    <div class="panel-header">

                        <h5>Pagination Progress Swiper</h5>

                    </div>

                    <div class="panel-body">

                        <div class="swiper pagination-progress-swiper">

                            <div class="swiper-wrapper">

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-6.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-7.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-8.jpg" alt="image">

                                </div>

                            </div>

                            <div class="swiper-pagination"></div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 col-sm-6">

                <div class="panel">

                    <div class="panel-header">

                        <h5>Pagination Scrollbar Swiper</h5>

                    </div>

                    <div class="panel-body">

                        <div class="swiper pagination-scrollbar-swiper">

                            <div class="swiper-wrapper">

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-9.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-10.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-1.jpg" alt="image">

                                </div>

                            </div>

                            <div class="swiper-scrollbar"></div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 col-sm-6"> 

                <div class="panel">

                    <div class="panel-header">

                        <h5>Vertical Swiper</h5>

                    </div>

                    <div class="panel-body">

                        <div class="swiper vertical-swiper">

                            <div class="swiper-wrapper">

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-2.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-3.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-4.jpg" alt="image">

                                </div>

                            </div>

                            <div class="swiper-pagination"></div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 col-sm-6"> 

                <div class="panel">

                    <div class="panel-header">

                        <h5>Mousewheel Control Swiper</h5>

                    </div>

                    <div class="panel-body">

                        <div class="swiper mousewheel-control-swiper">

                            <div class="swiper-wrapper">

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-5.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-6.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-7.jpg" alt="image">

                                </div>

                            </div>

                            <div class="swiper-pagination"></div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 col-sm-6"> 

                <div class="panel">

                    <div class="panel-header">

                        <h5>Effect Fade Swiper</h5>

                    </div>

                    <div class="panel-body">

                        <div class="swiper effect-fade-swiper">

                            <div class="swiper-wrapper">

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-8.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-9.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-10.jpg" alt="image">

                                </div>

                            </div>

                            <div class="swiper-pagination"></div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 col-sm-6"> 

                <div class="panel">

                    <div class="panel-header">

                        <h5>Effect Flip Swiper</h5>

                    </div>

                    <div class="panel-body">

                        <div class="swiper effect-flip-swiper">

                            <div class="swiper-wrapper">

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-1.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-2.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-3.jpg" alt="image">

                                </div>

                            </div>

                            <div class="swiper-pagination"></div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 col-sm-6"> 

                <div class="panel">

                    <div class="panel-header">

                        <h5>Effect Creative Swiper</h5>

                    </div>

                    <div class="panel-body">

                        <div class="swiper effect-creative-swiper">

                            <div class="swiper-wrapper">

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-4.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-5.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-6.jpg" alt="image">

                                </div>

                            </div>

                            <div class="swiper-pagination"></div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-12"> 

                <div class="panel">

                    <div class="panel-header">

                        <h5>Effect Coverflow Swiper</h5>

                    </div>

                    <div class="panel-body">

                        <div class="swiper effect-coverflow-swiper">

                            <div class="swiper-wrapper">

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-1.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-2.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-3.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-4.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-5.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-6.jpg" alt="image">

                                </div>

                            </div>

                            <div class="swiper-pagination"></div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-12"> 

                <div class="panel">

                    <div class="panel-header">

                        <h5>Responsive Breakpoints Swiper</h5>

                    </div>

                    <div class="panel-body">

                        <div class="swiper responsive-swiper">

                            <div class="swiper-wrapper">

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-1.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-2.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-3.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-4.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-5.jpg" alt="image">

                                </div>

                                <div class="swiper-slide">

                                    <img src="assets/images/slider-6.jpg" alt="image">

                                </div>

                            </div>

                            <div class="swiper-pagination"></div>

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



    <script src="assets/vendor/js/jquery-3.6.0.min.js"></script>

    <script src="assets/vendor/js/jquery.overlayScrollbars.min.js"></script>

    <script src="assets/vendor/js/swiper-bundle.min.js"></script>

    <script src="assets/vendor/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/main.js"></script>

</body>



</html>