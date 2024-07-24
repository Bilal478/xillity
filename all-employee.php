<? require("./global.php");

if (isset($_GET['delete-record'])) {
    $id = escape($_GET['delete-record']);
    $query = "delete from jeoXillityCrm_users where id='$id'";
    runQuery($query);
}
?>
<!DOCTYPE html>

<html lang="en" data-menu="vertical" data-nav-size="nav-default">

<head>
    <? include("./includes/views/head2.php"); ?>

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

    <? include("./includes/views/navbar.php"); ?>

    <!-- header end -->



    <!-- profile right sidebar start -->

    <? include("./includes/views/rightsidebar.php"); ?>

    <!-- right sidebar end -->



    <!-- main sidebar start -->

    <? include("./includes/views/leftmenu2.php"); ?>

    <!-- main sidebar end -->



    <!-- main content start -->

    <div class="main-content">

        <div class="row">

            <div class="col-12">

                <div class="panel">

                    <div class="panel-header">

                        <h5>All Employee</h5>

                        <div class="btn-box d-flex flex-wrap gap-2">

                            <div id="tableSearch"></div>

                            <button class="btn btn-sm btn-icon btn-outline-primary"><i class="fa-light fa-arrows-rotate"></i></button>

                            <div class="digi-dropdown dropdown">

                                <button class="btn btn-sm btn-icon btn-outline-primary" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"><i class="fa-regular fa-ellipsis-vertical"></i></button>

                                <ul class="digi-dropdown-menu dropdown-menu">

                                    <li class="dropdown-title">Show Table Title</li>

                                    <li>

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox" id="showEmployeeId" checked>

                                            <label class="form-check-label" for="showEmployeeId">

                                                Employee ID

                                            </label>

                                        </div>

                                    </li>

                                    <li>

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox" id="showPhoto" checked>

                                            <label class="form-check-label" for="showPhoto">

                                                Photo

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

                                            <input class="form-check-input" type="checkbox" id="showSection" checked>

                                            <label class="form-check-label" for="showSection">

                                                Section

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

                                            <input class="form-check-input" type="checkbox" id="showPresentAddress" checked>

                                            <label class="form-check-label" for="showPresentAddress">

                                                Present Address

                                            </label>

                                        </div>

                                    </li>

                                    <li>

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox" id="showStatus" checked>

                                            <label class="form-check-label" for="showStatus">

                                                Status

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

                            <a href="add-employee.php" class="btn btn-sm btn-primary"><i class="fa-light fa-plus"></i> Add New</a>

                        </div>

                    </div>

                    <div class="panel-body">

                        <div class="table-filter-option">

                            <div class="row g-3">

                                <div class="col-xl-10 col-9 col-xs-12">

                                    <div class="row g-3">

                                        <div class="col">

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

                                        <div class="col">

                                            <select class="form-control form-control-sm">

                                                <option value="0">Active</option>

                                                <option value="1">Pending</option>

                                                <option value="2">Inactive</option>

                                                <option value="3">Hold</option>

                                            </select>

                                        </div>

                                        <div class="col">

                                            <button class="btn btn-sm btn-primary"><i class="fa-light fa-filter"></i> Filter</button>

                                        </div>

                                        <div class="col">

                                            <div class="digi-dropdown dropdown">

                                                <button class="btn btn-sm btn-icon btn-primary" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"><i class="fa-regular fa-plus"></i></button>

                                                <ul class="digi-dropdown-menu dropdown-menu">

                                                    <li class="dropdown-title">Filter Options</li>

                                                    <li>

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox" id="filterActiveStatus" checked>

                                                            <label class="form-check-label" for="filterActiveStatus">

                                                                Active Status

                                                            </label>

                                                        </div>

                                                    </li>

                                                </ul>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-xl-2 col-3 col-xs-12 d-flex justify-content-end">

                                    <div id="employeeTableLength"></div>

                                </div>

                            </div>

                        </div>

                        <table class="table table-dashed table-hover digi-dataTable all-employee-table table-striped" id="allEmployeeTable">

                            <thead>

                                <tr>

                                    <th class="no-sort">

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox" id="markAllEmployee">

                                        </div>

                                    </th>

                                    <th>Action</th>

                                    <th>Employee ID</th>

                                    <th>Photo</th>

                                    <th>Name</th>

                                    <th>Section</th>

                                    <th>Phone</th>

                                    <th>Present Address</th>

                                    <th>Status</th>

                                </tr>

                            </thead>


                            <tbody>
                                <?php $query = "SELECT * FROM jeoXillityCrm_users WHERE role='employee' ORDER BY timeAdded DESC";
                                $results = getAll($con, $query); ?>

                                <? foreach ($results as $row) { ?>
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

                                                    <li><a href="./view-profile.php?customer_id=<? echo $row['id'] ?>" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-eye"></i></span> View</a></li>
                                                    <li><a href="./edit-profile.php?customer_id=<? echo $row['id'] ?>" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-pen-to-square"></i></span> Edit</a></li>
                                                    <!-- <? if ($session_id == $row['id']) { ?>
                                                        <li><a href="./add-employee.php?id=<? echo $row['id'] ?>" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-pen-to-square"></i></span> Edit</a></li>
                                                    <? } ?> -->

                                                    <li><a href="#" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-id-card"></i></span> ID Card</a></li>

                                                    <li><a href="#" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-pen-nib"></i></span> Resign</a></li>

                                                    <li><a href="#" class="dropdown-item"><span class="dropdown-icon"><i class="fa-light fa-arrow-right-from-bracket"></i></span> Left</a></li>

                                                    <li><a href="#" class="dropdown-item" data-toggle="modal" data-target="#delete_record" data-url="?<? if (isset($_GET['id'])) {
                                                            echo "id=" . $_GET['id'] . "&";
                                                        } ?>delete-record=<? echo $row['id'] ?>"><span class="dropdown-icon"><i class="fa-light fa-trash-can"></i></span> Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>

                                        <td><? echo $row['id'] ?></td>

                                        <td>

                                            <div class="avatar">

                                                <img src="./uploads/<? echo $row['profile_pic'] ?>" alt="User">

                                            </div>

                                        </td>

                                        <td><? echo $row['name'] ?></td>

                                        <td><? echo $row['section'] ?></td>

                                        <td><? echo $row['phone'] ?></td>

                                        <td>

                                            <span class="address-txt"><? echo $row['present_division'] . " " . $row['present_district'] . " " . $row['present_subdistrict'] . " " . $row['present_post_office'] . " " . $row['present_village_house_road'] ?></span>

                                        </td>

                                        <td><span class="active-mark"><i class="fa-regular fa-check"></i></span> Active</td>

                                    </tr>
                                <? } ?>


                            </tbody>

                        </table>

                        <div class="table-bottom-control"></div>

                    </div>

                </div>

            </div>

        </div>



        <!-- footer start -->

        <? include("./includes/views/footer.php"); ?>

        <!-- footer end -->
    </div>

    <!-- main content end -->






    <? include("./includes/views/footerjs.php"); ?>




</body>

</html>