<?require("./global.php");?>
<!DOCTYPE html>

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

                        <h5>Leads</h5>

                        <div class="btn-box d-flex gap-2">

                            <div id="tableSearch"></div>

                            <button class="btn btn-sm btn-icon btn-outline-primary"><i class="fa-light fa-arrows-rotate"></i></button>

                            <div class="digi-dropdown dropdown">

                                <button class="btn btn-sm btn-icon btn-outline-primary" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"><i class="fa-regular fa-ellipsis-vertical"></i></button>

                                <ul class="digi-dropdown-menu dropdown-menu">

                                    <li class="dropdown-title">Show Table Title</li>

                                    <li>

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox" id="showAction" checked>

                                            <label class="form-check-label" for="showAction">

                                                Action

                                            </label>

                                        </div>

                                    </li>

                                    <li>

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox" id="showName" checked>

                                            <label class="form-check-label" for="showName">

                                                Name

                                            </label>

                                        </div>

                                    </li>

                                    <li>

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox" id="showAddress" checked>

                                            <label class="form-check-label" for="showAddress">

                                                Address

                                            </label>

                                        </div>

                                    </li>

                                    <li>

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox" id="showPhone" checked>

                                            <label class="form-check-label" for="showPhone">

                                                Phone

                                            </label>

                                        </div>

                                    </li>

                                    <li>

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox" id="showEmail" checked>

                                            <label class="form-check-label" for="showEmail">

                                                Email

                                            </label>

                                        </div>

                                    </li>

                                    <li>

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox" id="showCompany" checked>

                                            <label class="form-check-label" for="showCompany">

                                                Company

                                            </label>

                                        </div>

                                    </li>

                                    <li>

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox" id="showDescription" checked>

                                            <label class="form-check-label" for="showDescription">

                                                Description

                                            </label>

                                        </div>

                                    </li>

                                    <li class="dropdown-title pb-1">Showing</li>

                                    <li>

                                        <div class="input-group">

                                            <input type="number" class="form-control form-control-sm w-50" value="10">

                                            <button class="btn btn-sm btn-primary w-50">Apply</button>

                                        </div>

                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                    <div class="panel-body">

                        <div class="table-filter-option">

                            <div class="row g-3">

                                <div class="col-xl-10 col-9 col-xs-12">

                                    <form class="row g-2">

                                        <div class="col">

                                            <select class="form-control form-control-sm">

                                                <option value="0">Bulk action</option>

                                                <option value="1">Move to trash</option>

                                            </select>

                                        </div>

                                        <div class="col">

                                            <button class="btn btn-sm btn-primary w-100">Apply</button>

                                        </div>

                                    </form>

                                </div>

                                <div class="col-xl-2 col-3 col-xs-12 d-flex justify-content-end">

                                    <div id="employeeTableLength"></div>

                                </div>

                            </div>

                        </div>

                        <table class="table table-dashed table-hover digi-dataTable leads-table table-striped" id="leadsTable">

                            <thead>

                                <tr>

                                    <th class="no-sort">

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox" id="markAllLeads">

                                        </div>

                                    </th>

                                    <th>Action</th>

                                    <th>Name</th>

                                    <th>Address</th>

                                    <th>Phone</th>

                                    <th>Email</th>

                                    <th>Company</th>

                                    <th>Description</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox">

                                        </div>

                                    </td>

                                    <td>

                                        <div class="digi-dropdown dropdown d-inline-block">

                                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="dropdown" aria-expanded="false">Action <i class="fa-regular fa-angle-down"></i></button>

                                            <ul class="digi-dropdown-menu dropdown-menu dropdown-slim dropdown-menu-sm">

                                                <li><a href="#" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-pen-to-square"></i></span> Edit</a></li>

                                                <li><a href="#" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-trash-can"></i></span> Delete</a></li>

                                            </ul>

                                        </div>

                                    </td>

                                    <td>Shaikh Abu Dardah</td>

                                    <td>65 Shire Oak Road SCARFF ZE2 7SE</td>

                                    <td>+1 234 567 890</td>

                                    <td>example@info.com</td>

                                    <td>Lawnscape Garden Maintenance</td>

                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>

                                </tr>

                                <tr>

                                    <td>

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox">

                                        </div>

                                    </td>

                                    <td>

                                        <div class="digi-dropdown dropdown d-inline-block">

                                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="dropdown" aria-expanded="false">Action <i class="fa-regular fa-angle-down"></i></button>

                                            <ul class="digi-dropdown-menu dropdown-menu dropdown-slim dropdown-menu-sm">

                                                <li><a href="#" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-pen-to-square"></i></span> Edit</a></li>

                                                <li><a href="#" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-trash-can"></i></span> Delete</a></li>

                                            </ul>

                                        </div>

                                    </td>

                                    <td>Shaikh Abu Dardah</td>

                                    <td>65 Shire Oak Road SCARFF ZE2 7SE</td>

                                    <td>+1 234 567 890</td>

                                    <td>example@info.com</td>

                                    <td>Lawnscape Garden Maintenance</td>

                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>

                                </tr>

                                <tr>

                                    <td>

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox">

                                        </div>

                                    </td>

                                    <td>

                                        <div class="digi-dropdown dropdown d-inline-block">

                                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="dropdown" aria-expanded="false">Action <i class="fa-regular fa-angle-down"></i></button>

                                            <ul class="digi-dropdown-menu dropdown-menu dropdown-slim dropdown-menu-sm">

                                                <li><a href="#" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-pen-to-square"></i></span> Edit</a></li>

                                                <li><a href="#" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-trash-can"></i></span> Delete</a></li>

                                            </ul>

                                        </div>

                                    </td>

                                    <td>Shaikh Abu Dardah</td>

                                    <td>65 Shire Oak Road SCARFF ZE2 7SE</td>

                                    <td>+1 234 567 890</td>

                                    <td>example@info.com</td>

                                    <td>Lawnscape Garden Maintenance</td>

                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>

                                </tr>

                                <tr>

                                    <td>

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox">

                                        </div>

                                    </td>

                                    <td>

                                        <div class="digi-dropdown dropdown d-inline-block">

                                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="dropdown" aria-expanded="false">Action <i class="fa-regular fa-angle-down"></i></button>

                                            <ul class="digi-dropdown-menu dropdown-menu dropdown-slim dropdown-menu-sm">

                                                <li><a href="#" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-pen-to-square"></i></span> Edit</a></li>

                                                <li><a href="#" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-trash-can"></i></span> Delete</a></li>

                                            </ul>

                                        </div>

                                    </td>

                                    <td>Shaikh Abu Dardah</td>

                                    <td>65 Shire Oak Road SCARFF ZE2 7SE</td>

                                    <td>+1 234 567 890</td>

                                    <td>example@info.com</td>

                                    <td>Lawnscape Garden Maintenance</td>

                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>

                                </tr>

                                <tr>

                                    <td>

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox">

                                        </div>

                                    </td>

                                    <td>

                                        <div class="digi-dropdown dropdown d-inline-block">

                                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="dropdown" aria-expanded="false">Action <i class="fa-regular fa-angle-down"></i></button>

                                            <ul class="digi-dropdown-menu dropdown-menu dropdown-slim dropdown-menu-sm">

                                                <li><a href="#" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-pen-to-square"></i></span> Edit</a></li>

                                                <li><a href="#" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-trash-can"></i></span> Delete</a></li>

                                            </ul>

                                        </div>

                                    </td>

                                    <td>Shaikh Abu Dardah</td>

                                    <td>65 Shire Oak Road SCARFF ZE2 7SE</td>

                                    <td>+1 234 567 890</td>

                                    <td>example@info.com</td>

                                    <td>Lawnscape Garden Maintenance</td>

                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>

                                </tr>

                                <tr>

                                    <td>

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox">

                                        </div>

                                    </td>

                                    <td>

                                        <div class="digi-dropdown dropdown d-inline-block">

                                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="dropdown" aria-expanded="false">Action <i class="fa-regular fa-angle-down"></i></button>

                                            <ul class="digi-dropdown-menu dropdown-menu dropdown-slim dropdown-menu-sm">

                                                <li><a href="#" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-pen-to-square"></i></span> Edit</a></li>

                                                <li><a href="#" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-trash-can"></i></span> Delete</a></li>

                                            </ul>

                                        </div>

                                    </td>

                                    <td>Shaikh Abu Dardah</td>

                                    <td>65 Shire Oak Road SCARFF ZE2 7SE</td>

                                    <td>+1 234 567 890</td>

                                    <td>example@info.com</td>

                                    <td>Lawnscape Garden Maintenance</td>

                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>

                                </tr>

                                <tr>

                                    <td>

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox">

                                        </div>

                                    </td>

                                    <td>

                                        <div class="digi-dropdown dropdown d-inline-block">

                                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="dropdown" aria-expanded="false">Action <i class="fa-regular fa-angle-down"></i></button>

                                            <ul class="digi-dropdown-menu dropdown-menu dropdown-slim dropdown-menu-sm">

                                                <li><a href="#" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-pen-to-square"></i></span> Edit</a></li>

                                                <li><a href="#" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-trash-can"></i></span> Delete</a></li>

                                            </ul>

                                        </div>

                                    </td>

                                    <td>Shaikh Abu Dardah</td>

                                    <td>65 Shire Oak Road SCARFF ZE2 7SE</td>

                                    <td>+1 234 567 890</td>

                                    <td>example@info.com</td>

                                    <td>Lawnscape Garden Maintenance</td>

                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>

                                </tr>

                                <tr>

                                    <td>

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox">

                                        </div>

                                    </td>

                                    <td>

                                        <div class="digi-dropdown dropdown d-inline-block">

                                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="dropdown" aria-expanded="false">Action <i class="fa-regular fa-angle-down"></i></button>

                                            <ul class="digi-dropdown-menu dropdown-menu dropdown-slim dropdown-menu-sm">

                                                <li><a href="#" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-pen-to-square"></i></span> Edit</a></li>

                                                <li><a href="#" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-trash-can"></i></span> Delete</a></li>

                                            </ul>

                                        </div>

                                    </td>

                                    <td>Shaikh Abu Dardah</td>

                                    <td>65 Shire Oak Road SCARFF ZE2 7SE</td>

                                    <td>+1 234 567 890</td>

                                    <td>example@info.com</td>

                                    <td>Lawnscape Garden Maintenance</td>

                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>

                                </tr>

                                <tr>

                                    <td>

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox">

                                        </div>

                                    </td>

                                    <td>

                                        <div class="digi-dropdown dropdown d-inline-block">

                                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="dropdown" aria-expanded="false">Action <i class="fa-regular fa-angle-down"></i></button>

                                            <ul class="digi-dropdown-menu dropdown-menu dropdown-slim dropdown-menu-sm">

                                                <li><a href="#" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-pen-to-square"></i></span> Edit</a></li>

                                                <li><a href="#" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-trash-can"></i></span> Delete</a></li>

                                            </ul>

                                        </div>

                                    </td>

                                    <td>Shaikh Abu Dardah</td>

                                    <td>65 Shire Oak Road SCARFF ZE2 7SE</td>

                                    <td>+1 234 567 890</td>

                                    <td>example@info.com</td>

                                    <td>Lawnscape Garden Maintenance</td>

                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>

                                </tr>

                                <tr>

                                    <td>

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox">

                                        </div>

                                    </td>

                                    <td>

                                        <div class="digi-dropdown dropdown d-inline-block">

                                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="dropdown" aria-expanded="false">Action <i class="fa-regular fa-angle-down"></i></button>

                                            <ul class="digi-dropdown-menu dropdown-menu dropdown-slim dropdown-menu-sm">

                                                <li><a href="#" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-pen-to-square"></i></span> Edit</a></li>

                                                <li><a href="#" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-trash-can"></i></span> Delete</a></li>

                                            </ul>

                                        </div>

                                    </td>

                                    <td>Shaikh Abu Dardah</td>

                                    <td>65 Shire Oak Road SCARFF ZE2 7SE</td>

                                    <td>+1 234 567 890</td>

                                    <td>example@info.com</td>

                                    <td>Lawnscape Garden Maintenance</td>

                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>

                                </tr>

                                <tr>

                                    <td>

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox">

                                        </div>

                                    </td>

                                    <td>

                                        <div class="digi-dropdown dropdown d-inline-block">

                                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="dropdown" aria-expanded="false">Action <i class="fa-regular fa-angle-down"></i></button>

                                            <ul class="digi-dropdown-menu dropdown-menu dropdown-slim dropdown-menu-sm">

                                                <li><a href="#" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-pen-to-square"></i></span> Edit</a></li>

                                                <li><a href="#" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-trash-can"></i></span> Delete</a></li>

                                            </ul>

                                        </div>

                                    </td>

                                    <td>Shaikh Abu Dardah</td>

                                    <td>65 Shire Oak Road SCARFF ZE2 7SE</td>

                                    <td>+1 234 567 890</td>

                                    <td>example@info.com</td>

                                    <td>Lawnscape Garden Maintenance</td>

                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>

                                </tr>

                                <tr>

                                    <td>

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox">

                                        </div>

                                    </td>

                                    <td>

                                        <div class="digi-dropdown dropdown d-inline-block">

                                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="dropdown" aria-expanded="false">Action <i class="fa-regular fa-angle-down"></i></button>

                                            <ul class="digi-dropdown-menu dropdown-menu dropdown-slim dropdown-menu-sm">

                                                <li><a href="#" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-pen-to-square"></i></span> Edit</a></li>

                                                <li><a href="#" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-trash-can"></i></span> Delete</a></li>

                                            </ul>

                                        </div>

                                    </td>

                                    <td>Shaikh Abu Dardah</td>

                                    <td>65 Shire Oak Road SCARFF ZE2 7SE</td>

                                    <td>+1 234 567 890</td>

                                    <td>example@info.com</td>

                                    <td>Lawnscape Garden Maintenance</td>

                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>

                                </tr>

                            </tbody>

                        </table>

                        <div class="table-bottom-control"></div>

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