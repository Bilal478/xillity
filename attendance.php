<? require("./global.php");

if (isset($_POST['create_package'])) {
    $timeAdded = time();
    $attendance = 'p';
    $actionId = mb_htmlentities(($_POST['actionId']));
    if ($actionId == "") {
        $id = generateRandomString();
        $actionId = $id;
        $query = "insert into " . $g_projectSlug . "_attendance set id='$id' , timeAdded='$timeAdded', attendance='$attendance'  , userId='$session_userId' ";
    } else {
        $query = "update " . $g_projectSlug . "_attendance set id='$actionId'  where id='$actionId'";
    }
    $stmt = $con->prepare($query);
    if (!$stmt) {
        echo "err: <code>$query</code>";
    }
    if (!$stmt->execute()) {
        echo "err: <code>$query</code>";
    }


    $rStr = "";
    if (isset($_GET['id'])) {
        $rStr .=  "&id=" . $_GET['id'];
    }
    header("Location: ?m=Data was saved successfully!" . $rStr);
}


$getCustomersFromDB = getAll($con, "SELECT * FROM " . $g_projectSlug . "_users");
$g_allUsersInfo = [];
foreach ($getCustomersFromDB as $k => $v) {
    $g_allUsersInfo[$v['id']] = $v;
}


?>
<!DOCTYPE html>

<html lang="en" data-menu="vertical" data-nav-size="nav-default">

<head>


    <? include("./includes/views/head2.php"); ?>
<style>
    .badge-red{
        background: red !important;
    }

    .badge-green{
        background: lightseagreen !important;
    }
</style>
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

    <? include("./includes/views/leftmenu.php"); ?>

    <!-- main sidebar end -->

    <!-- main content start -->

    <div class="main-content">

        <div class="row g-4">

            <div class="col-12">

                <div class="panel">

                    <div class="panel-header">

                        <h5>Attendance</h5>

                        <div class="btn-box d-flex gap-2">

                            <div id="tableSearch"></div>

                            <button class="btn btn-sm btn-icon btn-outline-primary"><i class="fa-light fa-arrows-rotate"></i></button>

                            <div class="digi-dropdown dropdown">

                                <button class="btn btn-sm btn-icon btn-outline-primary" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"><i class="fa-regular fa-ellipsis-vertical"></i></button>

                                <ul class="digi-dropdown-menu dropdown-menu">

                                    <li class="dropdown-title">Show Table Title</li>

                                    <li>

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox" id="showOrderId" checked>

                                            <label class="form-check-label" for="showOrderId">

                                                Order ID

                                            </label>

                                        </div>

                                    </li>

                                    <li>

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox" id="showCustomer" checked>

                                            <label class="form-check-label" for="showCustomer">

                                                Customer

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

                                    <li>

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox" id="showProduct" checked>

                                            <label class="form-check-label" for="showProduct">

                                                Product

                                            </label>

                                        </div>

                                    </li>

                                    <li>

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox" id="showPrice" checked>

                                            <label class="form-check-label" for="showPrice">

                                                Price

                                            </label>

                                        </div>

                                    </li>

                                    <li>

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox" id="showPaymentMethod" checked>

                                            <label class="form-check-label" for="showPaymentMethod">

                                                Payment Method

                                            </label>

                                        </div>

                                    </li>

                                    <li>

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox" id="showDeliveryStatus" checked>

                                            <label class="form-check-label" for="showDeliveryStatus">

                                                Delivery Status

                                            </label>

                                        </div>

                                    </li>

                                    <li>

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox" id="showOrderDate" checked>

                                            <label class="form-check-label" for="showOrderDate">

                                                Order Date

                                            </label>

                                        </div>

                                    </li>

                                    <li>

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox" id="showAction" checked>

                                            <label class="form-check-label" for="showAction">

                                                Action

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

                        <div class="product-table-quantity d-flex justify-content-between align-items-center mb-20">

                            <!-- <ul class="mb-0">

                                <li class="text-white">All (23)</li>

                                <li>Pending (19)</li>

                                <li>Draft (05)</li>

                                <li>Trush (05)</li>

                            </ul> -->

                            <div class="btn-box d-lg-flex d-none gap-2">

                                <button class="btn btn-sm btn-icon btn-outline-primary" title="Download Excel" id="downloadExcel"><i class="fa-light fa-file-spreadsheet"></i></button>

                                <button class="btn btn-sm btn-icon btn-outline-primary" title="Download PDF" id="downloadPdf"><i class="fa-light fa-file-pdf"></i></button>

                            </div>

                        </div>

                        <div class="table-filter-option">

                            <div class="row g-3">

                                <div class="col-xl-10 col-9 col-xs-12">

                                    <div class="row g-3">

                                        <div class="col">

                                            <!-- <form class="row g-2">

                                                <div class="col">

                                                    <select class="form-control form-control-sm">

                                                        <option value="0">Bulk action</option>

                                                        <option value="1">Move to trash</option>

                                                        <option value="2">Change Status to processing</option>

                                                        <option value="3">Change Status to on-hold</option>

                                                        <option value="4">Change Status to completed</option>

                                                        <option value="5">Change Status to cancelled</option>

                                                    </select>

                                                </div>

                                                <div class="col">

                                                    <button class="btn btn-sm btn-primary w-100">Apply</button>

                                                </div>

                                            </form> -->

                                        </div>

                                        <!-- <div class="col">

                                            <select class="form-control form-control-sm">

                                                <option value="0">All Orders</option>

                                                <option value="1">Pending</option>

                                                <option value="2">Delivered</option>

                                                <option value="3">Cancel</option>

                                                <option value="4">Return</option>

                                            </select>

                                        </div> -->

                                        <!-- <div class="col">

                                            <input type="text" class="form-control form-control-sm" name="basic" id="orderTableFilter" readonly>

                                        </div> -->

                                        <!-- <div class="col">

                                            <button class="btn btn-sm btn-primary"><i class="fa-light fa-filter"></i> Filter</button>

                                        </div> -->

                                        <!-- <div class="col">

                                            <div class="digi-dropdown dropdown">

                                                <button class="btn btn-sm btn-icon btn-primary" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"><i class="fa-regular fa-plus"></i></button>

                                                <ul class="digi-dropdown-menu dropdown-menu">

                                                    <li class="dropdown-title">Filter Options</li>

                                                    <li>

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox" id="filterDeliveryStatus" checked>

                                                            <label class="form-check-label" for="filterDeliveryStatus">

                                                                Delivery Status

                                                            </label>

                                                        </div>

                                                    </li>

                                                    <li>

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox" id="filterDateRange" checked>

                                                            <label class="form-check-label" for="filterDateRange">

                                                                Date Range

                                                            </label>

                                                        </div>

                                                    </li>

                                                </ul>

                                            </div>

                                        </div> -->


                                        <div class="col">
                                            <?php
                                            $date = date("Y-m-d");
                                            $query = "SELECT * FROM " . $g_projectSlug . "_attendance WHERE userId = '$session_userId' AND DATE(FROM_UNIXTIME(timeAdded)) = '$date' ORDER BY timeAdded DESC";
                                            $results = getAll($con, $query);
                                            if (count($results) == 0) { ?>

                                                <button class="btn btn-sm btn-primary w-100" data-toggle="modal" data-target="#create_record_modal">
                                                    MARK ME PRESENT FOR TODAY
                                                </button>
                                            <? } else { ?>
                                                <button class="btn btn-sm btn-primary w-100">PRESENT MARKED</button>
                                            <? } ?>


                                        </div>

                                    </div>

                                </div>

                                <div class="col-xl-2 col-3 col-xs-12 d-flex justify-content-end">

                                    <div id="productTableLength"></div>

                                </div>

                            </div>

                        </div>

                        <table class="table table-dashed table-hover digi-dataTable all-product-table table-striped" id="allProductTable">

                            <thead>
                                <tr>
                                    <th>Employees</th>

                                    <?php
                                    // Set the timezone
                                    date_default_timezone_set('UTC');

                                    // Get the current month and year
                                    $currentMonth = date('m');
                                    $currentYear = date('Y');

                                    // Get the number of days in the current month
                                    $numDays = cal_days_in_month(CAL_GREGORIAN, $currentMonth, $currentYear);

                                    // Open the table
                                    // echo '<table>';

                                    // Loop through each day of the current month and display the date in a table cell
                                    for ($day = 1; $day <= $numDays; $day++) {
                                        // If this is the first day of a row, open a new row
                                        if (($day - 1) % 30 == 0) {
                                            // echo '<tr>';
                                        }

                                        // Output the date in a table cell
                                        $date = sprintf('%02d-%02d-%d', $currentYear, $currentMonth, $day);
                                        echo '<th>' . $date . '</th>';

                                        // If this is the last day of a row, close the row
                                        if ($day % 30 == 0) {
                                            // echo '</tr>';
                                        }
                                    }

                                    // Close the table
                                    // echo '</table>';
                                    ?>



                                    </th>



                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                // Loop through each user and retrieve their attendance data for each day of the current month".$g_projectSlug."_attendance
                                if($session_userId == 'admin'){
                                $query = "SELECT * FROM " . $g_projectSlug . "_users ";

                                }else{
                                    $query = "SELECT * FROM " . $g_projectSlug . "_users where id LIKE '%$session_userId_filter%' and role='employee'";

                                }
                                $users = getAll($con, $query);
                                foreach ($users as $user) {
                                    echo '<tr>';
                                    echo '<td>' . $g_allUsersInfo[$user['id']]['name'] . '</td>';

                                    for ($day = 1; $day <= $numDays; $day++) {
                                        $attendance_found = "none";
                                        // Output the date in a table cell
                                        $date = sprintf('%02d-%02d-%d', $currentYear, $currentMonth, $day);
                                        $query = "SELECT * FROM " . $g_projectSlug . "_attendance WHERE userId = '{$user['id']}' AND DATE(FROM_UNIXTIME(timeAdded)) = '$date' ORDER BY timeAdded DESC";
                                        $results = getAll($con, $query);
                                        echo '<td>';
                                        foreach ($results as $row) {
                                            $attendance_found = $row['attendance'];
                                        }
                                        if (count($results) == 0) {
                                            $attendance_found = '';
                                        }

                                        if ($attendance_found == '') {
                                ?><div class="badge badge-red">Absent</div> <?
                                                                            } else if ($attendance_found == "p") {
                                                                                ?><div class="badge badge-green">Present</div> <?
                                                                                                                                                            } else {
                                                                                                                                                            }


                                                                                                                                                            echo '</td>';
                                                                                                                                                        }
                                                                                                                                                        echo '</tr>';
                                                                                                                                                    }
                                                                                                                                                                ?>
                            </tbody>

                        </table>

                        <div class="table-bottom-control"></div>

                    </div>

                </div>

            </div>

        </div>



        <!-- footer start -->

        <div class="footer">

            <p>Copyright© <script>
                    document.write(new Date().getFullYear())
                </script> All Rights Reserved By <span class="text-primary">Digiboard</span></p>

        </div>

        <!-- footer end -->

    </div>

    <!-- main content end -->

    <!-- Add Task Modal Start -->

    <div class="modal fade" id="addTaskModal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">

                    <h1 class="modal-title" id="addTaskModalLabel">Add New Task</h1>

                    <button type="button" class="btn btn-sm btn-icon btn-outline-primary" data-bs-dismiss="modal" aria-label="Close"><i class="fa-light fa-xmark"></i></button>

                </div>

                <div class="modal-body">

                    <div class="row g-3">

                        <div class="col-12">

                            <label class="form-label">Subject</label>

                            <input type="text" class="form-control form-control-sm">

                        </div>

                        <div class="col-sm-6">

                            <label class="form-label">Start Date</label>

                            <input type="text" class="form-control form-control-sm date-picker" readonly>

                        </div>

                        <div class="col-sm-6">

                            <label class="form-label">Priority</label>

                            <select class="form-control form-control-sm">

                                <option value="0">Low</option>

                                <option value="1">Medium</option>

                                <option value="2">High</option>

                                <option value="3">Urgent</option>

                            </select>

                        </div>

                        <div class="col-12">

                            <label class="form-label">Description</label>

                            <textarea class="form-control form-control-sm" rows="5"></textarea>

                        </div>

                    </div>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>

                    <button type="button" class="btn btn-sm btn-primary">Save</button>

                </div>

            </div>

        </div>

    </div>

    <!-- Add Task Modal End -->


    <? include("./includes/views/footerjs.php"); ?>


</body>
<div class="modal fade" id="create_record_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modelTitle">Insert</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">

                <form class="kt-form" action="" method="Post" enctype="multipart/form-data">
                    <div class="kt-portlet__body">

                        If you are present, then click submit button.

                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <input type="submit" name="create_package" value="I'm Present." class="btn btn-primary">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


</html>