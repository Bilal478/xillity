<? require("./global.php");

$getData = getAll($con, "SELECT * FROM " . $g_projectSlug . "_users ");
$users = [];
foreach ($getData as $k => $v) {
    $users[$v['id']] = ucfirst($v['name']);
}

$productsData = getAll($con, "SELECT * FROM " . $g_projectSlug . "_products ");
$productsName = [];
foreach ($productsData as $k => $v) {
    $productsName[$v['id']] = ucfirst($v['title']);
}



$sql = "SELECT DATE(timeAdded) AS date_added, COUNT(*) AS num_users
        FROM jeoXillityCrm_users
        GROUP BY DATE(timeAdded)
        ORDER BY DATE(timeAdded)";

$result = $con->query($sql);

$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

if (isset($_POST['create_task'])) {


    $primaryTableName = "tasks";

    array(
        // field_name [type, isrequired, array_select, inner_type] <= "template"
        "name" => ["input", "", "", "text"],
        "start_date" => ["input", "", "", "date"],
        "priority" => ["select", "", [""], ""],
        "description" => ["input", "", "", "text"],

    );;


    $priority_options = convertArrayToIndexArray([""]);
    $actionId = escape(($_POST['actionId']));
    $name = escape($_POST['name']);
    $start_date = escape($_POST['start_date']);
    $priority = escape($_POST['priority']);
    $description = escape($_POST['description']);
    if ($actionId == "") {
        $id = generateRandomString();
        $actionId = $id;
        $query = "insert into jeoXillityCrm_tasks set id='$id' , name='$name', start_date='$start_date', priority='$priority', description='$description', timeAdded='$timeAdded', userId='$session_userId' ";
    } else {
        $query = "update jeoXillityCrm_tasks set id='$actionId' , name='$name', start_date='$start_date', priority='$priority', description='$description' where id='$actionId'";
    }
    runQuery($query);

    header("Location: ?" . generateUrlParams_return(["m" => "Data was saved successfully!", "type" => "success"]));
    exit();
}
if (isset($_GET['delete-record'])) {
    $id = escape($_GET['delete-record']);
    $query = "delete from jeoXillityCrm_tasks where id='$id'";
    runQuery($query);
}


// echo json_encode($data);
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

    <? include("./includes/views/leftmenu.php"); ?>

    <!-- main sidebar end -->

    <!-- main content start -->

    <!--////////////////////////////////// Main DASHBOARD TITLE /////////////// -->

    <div class="main-content">

        <div class="dashboard-breadcrumb mb-25">

            <h2>Main Dashbaord</h2>

            <div class="input-group dashboard-filter">

                <input type="text" class="form-control" name="basic" id="dashboardFilter" readonly>

                <label for="dashboardFilter" class="input-group-text"><i class="fa-light fa-calendar-days"></i></label>

            </div>

        </div>

        <div class="row mb-25">

            <div class="col-lg-3 col-6 col-xs-12">



                <div class="dashboard-top-box d-block rounded border-0 panel-bg">
                    <div class="d-flex justify-content-between align-items-center mb-20">
                        <div class="right">
                            <div class="part-icon text-light rounded">
                                <span><i class="fa-light fa-user-plus"></i></span>
                            </div>
                        </div>
                        <div class="left">
                            <?php
                            $getotalcustomers = getRow($con, "SELECT COUNT(*) as total FROM jeoXillityCrm_users WHERE role='customer'");
                            $totalCustomers = $getotalcustomers['total'];
                            echo '<h3 class="fw-normal">' . $totalCustomers . '</h3>';
                            ?>
                        </div>
                    </div>
                    <div class="progress-box">
                        <?php
                        $targetPercentage = 100;
                        $currentPercentage = ($totalCustomers / $targetPercentage) * 100;
                        ?>
                        <p class="d-flex justify-content-between mb-1">Total Customers <small><?php echo number_format($currentPercentage, 2); ?>%</small></p>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="<?php echo $currentPercentage; ?>" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-primary" style="width: <?php echo $currentPercentage; ?>%"></div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="col-lg-3 col-6 col-xs-12">



                <div class="dashboard-top-box d-block rounded border-0 panel-bg">
                    <div class="d-flex justify-content-between align-items-center mb-20">
                        <div class="right">
                            <div class="part-icon text-light rounded">
                                <span><i class="fa-light fa-user-plus"></i></span>
                            </div>
                        </div>
                        <div class="left">
                            <?php
                            $getotalcustomers = getRow($con, "SELECT COUNT(*) as total FROM jeoXillityCrm_users WHERE role='customer' AND status='Active'");
                            $totalCustomers = $getotalcustomers['total'];
                            echo '<h3 class="fw-normal">' . $totalCustomers . '</h3>';
                            ?>
                        </div>
                    </div>
                    <div class="progress-box">
                        <?php
                        $targetPercentage = 100;
                        $currentPercentage = ($totalCustomers / $targetPercentage) * 100;
                        ?>
                        <p class="d-flex justify-content-between mb-1">Total Active Customers <small><?php echo number_format($currentPercentage, 2); ?>%</small></p>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="<?php echo $currentPercentage; ?>" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-success" style="width: <?php echo $currentPercentage; ?>%"></div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="col-lg-3 col-6 col-xs-12">



                <div class="dashboard-top-box d-block rounded border-0 panel-bg">
                    <div class="d-flex justify-content-between align-items-center mb-20">
                        <div class="right">
                            <div class="part-icon text-light rounded">
                                <span><i class="fa-light fa-user-plus"></i></span>
                            </div>
                        </div>
                        <div class="left">
                            <?php
                            $getotalcustomers = getRow($con, "SELECT COUNT(*) as total FROM jeoXillityCrm_users WHERE role='customer' AND status='Inactive'");
                            $totalCustomers = $getotalcustomers['total'];
                            echo '<h3 class="fw-normal">' . $totalCustomers . '</h3>';
                            ?>
                        </div>
                    </div>
                    <div class="progress-box">
                        <?php
                        $targetPercentage = 100;
                        $currentPercentage = ($totalCustomers / $targetPercentage) * 100;
                        ?>
                        <p class="d-flex justify-content-between mb-1">Total InActive Customers <small><?php echo number_format($currentPercentage, 2); ?>%</small></p>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="<?php echo $currentPercentage; ?>" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-danger" style="width: <?php echo $currentPercentage; ?>%"></div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="col-lg-3 col-6 col-xs-12">

                <div class="dashboard-top-box d-block rounded border-0 panel-bg">
                    <div class="d-flex justify-content-between align-items-center mb-20">
                        <div class="right">
                            <div class="part-icon text-light rounded">
                                <span><i class="fa-light fa-user-plus"></i></span>
                            </div>
                        </div>
                        <div class="left">
                            <?php
                            $getotalemployee = getRow($con, "SELECT COUNT(*) as total FROM jeoXillityCrm_users WHERE role='employee'");
                            $totalemployee = $getotalemployee['total'];
                            echo '<h3 class="fw-normal">' . $totalemployee . '</h3>';
                            ?>
                        </div>
                    </div>
                    <div class="progress-box">
                        <?php
                        $targetPercentage = 100;
                        $currentPercentage = ($totalemployee / $targetPercentage) * 100;
                        ?>
                        <p class="d-flex justify-content-between mb-1">Total Employees <small><?php echo number_format($currentPercentage, 2); ?>%</small></p>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="<?php echo $currentPercentage; ?>" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-warning" style="width: <?php echo $currentPercentage; ?>%"></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-3 col-6 col-xs-12">

                <div class="dashboard-top-box d-block rounded border-0 panel-bg">
                    <div class="d-flex justify-content-between align-items-center mb-20">
                        <div class="right">
                            <div class="part-icon text-light rounded">
                                <span><i class="fa-light fa-user-secret"></i></span>
                            </div>
                        </div>
                        <div class="left">
                            <?php
                            $getotalproducts = getRow($con, "SELECT COUNT(*) as total FROM jeoXillityCrm_products");
                            $totalProducts = $getotalproducts['total'];
                            echo '<h3 class="fw-normal">' . $totalProducts . '</h3>';
                            ?>
                        </div>
                    </div>
                    <div class="progress-box">
                        <?php
                        $targetPercentage = 100;
                        $currentPercentage = ($totalProducts / $targetPercentage) * 100;
                        ?>
                        <p class="d-flex justify-content-between mb-1">Total Products <small><?php echo number_format($currentPercentage, 2); ?>%</small></p>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="<?php echo $currentPercentage; ?>" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-primary" style="width: <?php echo $currentPercentage; ?>%"></div>
                        </div>
                    </div>
                </div>

            </div>



        </div>

        <div class="row">

            <!-- <div class="col-lg-4">

                <div class="panel chart-panel-1">

                    <div class="panel-header">

                        <h5>Daily Activity</h5>

                    </div>
                    <div class="row row-no-padding row-col-separator-lg">
                        <?
                        $mydata = [
                            // [ title, query, suffix ]
                            ["Total Users", "SELECT count('*') AS cnt FROM " . $g_projectSlug . "_users WHERE id=id " . $condition . "  ", ""],
                            ["Total Customer", "SELECT count('*') AS cnt FROM " . $g_projectSlug . "_users WHERE role='customer'" . $condition . "", ""],
                            ["Total Employee", "SELECT count('*') AS cnt FROM " . $g_projectSlug . "_users WHERE role='employee' " . $condition . "  ", ""],
                            // ["Total Train Drivers", "SELECT count('*') AS cnt FROM " . $g_projectSlug . "_users WHERE role='Train Driver '" . $condition . "", ""],
                        ];
                        $themes = ["brand", "warning", "danger", "success"];
                        foreach ($mydata as $i => $query) { ?>
                            <div class="col-md-6">
                                <div class="kt-widget24">
                                    <div class="kt-widget24__details">
                                        <div class="kt-widget24__info">
                                            <h4 class="kt-widget24__title">
                                                <?php echo $mydata[$i]['0']; ?>
                                            </h4>
                                            <span class="kt-widget24__desc">
                                                <?php echo $mydata[$i]['0']; ?>
                                            </span>
                                        </div>
                                        <span class="kt-widget24__stats kt-font-<? echo $themes[$i] ?>">
                                            <? $value = getRow($con, $mydata[$i][1]);
                                            if ($value['cnt'] == "") {
                                                $value['cnt'] = 0;
                                            }
                                            echo $mydata[$i][2] . " " . number_format(round($value['cnt'], 2)); ?>
                                        </span>
                                    </div>
                                    <div class="progress progress--sm">
                                        <div class="progress-bar kt-bg-<? echo $themes[$i] ?>" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        <? } ?>

                    </div>







                </div>

            </div> -->
            <div class="col-lg-4">

                <div class="panel">

                    <div class="panel-header">

                        <h5>Recent Orders Status</h5>

                        <div class="btn-box">

                            <a href="orders.php" class="btn btn-sm btn-outline-primary">View All</a>

                        </div>

                    </div>

                    <div class="panel-body">

                        <div class="table-responsive">

                            <table class="table table-striped mb-0 recent-project-table">
                                <thead>
                                    <tr>
                                        <th>Customer</th>
                                        <th>Product</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Fetch recent orders with customer, product, and status
                                    $query = "SELECT customer, product, status FROM jeoXillityCrm_orders ORDER BY timeAdded DESC LIMIT 5";
                                    $result = mysqli_query($con, $query);

                                    // Check if any rows are returned
                                    if (mysqli_num_rows($result) > 0) {
                                        // Loop through each row
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            // Extract data from the row
                                            $customer = $users[$row['customer']];
                                            $product = $row['product'];
                                            $query = getRow($con, "SELECT * FROM jeoXillityCrm_products where id='$product'");
                                            $status = $row['status'];
                                    ?>
                                            <tr>
                                                <td><?php echo $customer; ?></td>
                                                <td><?php echo $query['title']; ?></td>
                                                <td>
                                                    <div class="btn-box d-flex justify-content-end gap-3">
                                                        <?php
                                                        // Determine badge color based on status
                                                        $badge_color = ($status == 'completed') ? 'bg-success' : 'bg-danger';
                                                        ?>
                                                        <span class="badge <?php echo $badge_color; ?> px-2"><?php echo $status; ?></span>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                    } else {
                                        // If no orders found
                                        ?>
                                        <tr>
                                            <td colspan="3">No orders found.</td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>

                        </div>

                    </div>

                </div>

            </div>
            <div class="col-lg-4">

                <div class="panel">

                    <div class="panel-header">

                        <h5>Recent Products Status</h5>

                        <div class="btn-box">

                            <a href="all-product.php" class="btn btn-sm btn-outline-primary">View All</a>

                        </div>

                    </div>

                    <div class="panel-body">

                        <div class="table-responsive">

                            <table class="table table-striped mb-0 recent-project-table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Connect to your database ($con assumed to be your database connection)
                                    // Include any necessary functions or configuration files

                                    // Fetch recent products with their name, description, and status
                                    $query = "SELECT title, description, status FROM jeoXillityCrm_products ORDER BY timeAdded DESC LIMIT 10";
                                    $result = mysqli_query($con, $query);

                                    // Check if any rows are returned
                                    if (mysqli_num_rows($result) > 0) {
                                        // Loop through each row
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            // Extract data from the row
                                            $name = $row['title'];
                                            // Limit title length to 7 characters
                                            $name = strlen($name) > 7 ? substr($name, 0, 7) . "..." : $name;
                                            $description = $row['description'];
                                            $status = $row['status'];
                                    ?>
                                            <tr>
                                                <td><?php echo $name; ?></td>
                                                <td><?php echo $description; ?></td>
                                                <td>
                                                    <div class="btn-box d-flex justify-content-end gap-3">
                                                        <span class="badge bg-success px-2"><?php echo $status; ?></span>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                    } else {
                                        // If no products found
                                        ?>
                                        <tr>
                                            <td colspan="3">No products found.</td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="panel">

                    <div class="panel-header">

                        <h5>Recent Appointments</h5>

                        <div class="btn-box">

                            <a href="./calendar.php" class="btn btn-sm btn-outline-primary">View All</a>

                        </div>

                    </div>

                    <div class="panel-body">

                        <div class="table-responsive">

                            <table class="table table-striped mb-0 recent-project-table">

                                <thead>

                                    <tr>

                                        <th>Title</th>

                                        <th>Start Timing</th>

                                        <th>End Timing</th>
                                        <th>Action</th>

                                    </tr>

                                </thead>

                                <tbody>
                                    <?php
                                    $query = getAll($con, "select * from jeoXillityCrm_calendar_reminders order by timeAdded desc limit 5");
                                    foreach ($query as $row) { ?>

                                        <tr>

                                            <td><? echo $row['title'] ?></td>
                                            <td><? echo $row['apptTime'] ?></td>
                                            <td><? echo $row['endTime'] ?></td>



                                            <td>

                                                <div class="btn-box d-flex justify-content-end gap-3">
                                                    <a href="./calendar.php"><i class="fa-light fa-eye"></i></a>

                                                </div>

                                            </td>

                                        </tr>
                                    <? } ?>










                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="panel">

                    <div class="panel-header">

                        <h5>Pending Works</h5>

                    </div>

                    <div class="panel-body">

                        <div class="table-responsive">

                            <table class="table table-striped mb-0 recent-project-table">
                                <thead>
                                    <tr>
                                        <th>Customer</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Delievery status</th>
                                        <th>Order Date</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $query = "select * from jeoXillityCrm_orders where status='pending' limit 5";
                                    $results = getAll($con, $query);
                                    foreach ($results as $row) { ?>
                                        <tr>
                                            <td><?php echo $users[$row['customer']] ?></td>
                                            <td><?php echo $productsName[$row['product']] ?></td>
                                            <td>$<?php echo $row['price'] ?></td>

                                            <td><?php if ($row['status'] == 'pending') : ?>
                                                    <span class="text-danger"><?= ucwords($row['status']) ?></span>
                                                <?php elseif ($row['status'] == 'hold') : ?>
                                                    <span class="text-warning"><?= ucwords($row['status']) ?></span>
                                                <?php elseif ($row['status'] == 'completed') : ?>
                                                    <span class="text-success"><?= ucwords($row['status']) ?></span>
                                                <?php endif; ?>
                                            </td>
                                            <td><?php if ($row['delievery_status'] == 'delivered') : ?>
                                                    <span class="badge bg-success"><?= ucwords("delivered") ?></span>
                                                <?php elseif ($row['delievery_status'] == 'cancel') : ?>
                                                    <span class="badge bg-warning"><?= ucwords("cancelled") ?></span>
                                                <?php elseif ($row['delievery_status'] == 'pending') : ?>
                                                    <span class="badge bg-secondary"><?= ucwords($row['delievery_status']) ?></span>
                                                <?php elseif ($row['delievery_status'] == 'return') : ?>
                                                    <span class="badge bg-danger"><?= ucwords("returned") ?></span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php
                                                $timestamp = $row['timeAdded'];
                                                $formattedDateTime = date("d-m-Y h:i:s", $timestamp);
                                                echo $formattedDateTime;
                                                ?>
                                            </td>

                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="panel">

                    <div class="panel-header">

                        <h5>Upcoming Activities</h5>



                    </div>

                    <div class="panel-body">

                        <div class="table-responsive">

                            <table class="table table-hover table-activity">

                                <tbody>
                                    <?php
                                    $query = getAll($con, "SELECT *,DATE_FORMAT(apptTime, '%d') as datet,DATE_FORMAT(apptTime, '%M') AS month_name
                                    FROM jeoXillityCrm_calendar_reminders
                                    WHERE DATE_FORMAT(apptTime, '%Y-%m-%d') BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 2 DAY)
                                    ORDER BY timeAdded desc limit 5");
                                    foreach ($query as $row) { ?>

                                        <tr>

                                            <td>

                                                <div class="activity-box">

                                                    <div class="date-box">

                                                        <span><? echo $row['datet'] ?></span>

                                                        <span><? echo $row['month_name'] ?></span>

                                                    </div>

                                                    <div class="part-txt">

                                                        <span><? echo $row['title'] ?></span>

                                                    </div>

                                                </div>

                                            </td>



                                        </tr>

                                    <? } ?>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>



            <div class="col-xl-8 col-lg-7">

                <div class="panel">

                    <div class="panel-header">

                        <h5>Invoices</h5>

                        <a class="btn btn-sm btn-primary" href="invoices.php">View All</a>

                    </div>

                    <div class="panel-body p-0">

                        <div class="table-responsive">

                            <table class="table table-striped- table-bordered table-hover table-checkable add-search" id="kt_table_1">
                                <thead>
                                    <tr>
                                        <th>Invoice Id</th>
                                        <th>Title</th>
                                        <th>Client</th>
                                        <th>Total</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?
                                    if (isset($_GET["start_date"])) {
                                        $start_date = strtotime($_POST["start_date"]);
                                        $end_date = strtotime($_POST["end_date"]);
                                        $query = "SELECT * FROM " . $g_projectSlug . "_invoices WHERE timeAdded BETWEEN '$start_date' AND '$end_date' ORDER BY timeAdded DESC LIMIT 5";
                                    } else {
                                        $query = "SELECT * FROM " . $g_projectSlug . "_invoices ORDER BY timeAdded DESC LIMIT 5";
                                    }



                                    $results = getAll($con, $query);
                                    foreach ($results as $row) { ?>
                                        <tr>
                                            <? if (checkGlobalPermission('g_enableBulkDelete')) { ?>
                                                <th>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="delete_bulk[]" value="<? echo $row['id'] ?>">
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </th>
                                            <? } ?>
                                            <td><? echo $row['id'] ?></td>
                                            <td><? echo $row['title'] ?></td>
                                            <td><? echo $g_allUsersInfo[$row['client_id']]['name'] ?><br><small><? echo $g_allUsersInfo[$row['client_id']]['email'] ?></small></td>
                                            <td>

                                                <strong>$ <? echo $row['total'] ?></strong>



                                            </td>
                                            <td><? echo date('Y-m-d', $row['timeAdded']); ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <? if ($row['status'] == "unpaid") {
                                                        $statusColor = "warning";
                                                    } else {
                                                        $statusColor = "primary";
                                                    } ?>

                                                    <div class="badge bg-<? echo $statusColor ?> px-2"><?php echo ucfirst($row['status']) ?></div>
                                                </div>
                                            </td>
                                        </tr>
                                    <? } ?>

                                </tbody>
                            </table>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-xl-4 col-lg-5">

                <div class="panel">

                    <div class="panel-header">

                        <h5>My Tasks</h5>

                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addTaskModal">Add Task <i class="fa-light fa-plus"></i></button>

                    </div>

                    <div class="panel-body p-0">

                        <div class="table-responsive">

                            <table class="table task-table table-hover">

                                <tbody>
                                    <?php
                                    $result = getAll($con, "SELECT * from jeoXillityCrm_tasks");
                                    foreach ($result as $task) {
                                    ?>
                                        <tr>

                                            <td>

                                                <div class="form-check">

                                                    <label class="form-check-label">

                                                        <input class="form-check-input me-2" type="checkbox">

                                                        <?= $task['name'] ?>

                                                    </label>

                                                </div>

                                            </td>

                                            <td><?= $task['start_date'] ?></td>

                                        </tr>
                                    <? } ?>


                                </tbody>

                            </table>

                        </div>

                        <div class="btn-box px-lg-3 px-2 mx-xl-1 m-lg-0 mx-1 py-2">

                            <a href="task.php" class="view-all-task text-white fs-14 text-decoration-underline">Show More</a>

                        </div>

                    </div>

                </div>

            </div>

            <div class="d-none col-xl-4 col-lg-6">

                <div class="panel">

                    <div class="panel-header">

                        <h5>Notice Board</h5>

                        <a class="btn btn-sm btn-primary" href="#">View All</a>

                    </div>

                    <div class="panel-body p-0">

                        <div class="table-responsive">

                            <table class="table notice-board-table table-hover">

                                <thead>

                                    <tr>

                                        <th>Notice</th>

                                        <th>Published By</th>

                                        <th>Date Added</th>

                                        <th>Action</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <tr>

                                        <td>New Notice</td>

                                        <td>Mr. Alrazy</td>

                                        <td>20th April 2020</td>

                                        <td>

                                            <div class="btn-box d-flex justify-content-end gap-3">

                                                <button class="btn-flush"><i class="fa-light fa-eye"></i></button>

                                                <button class="btn-flush"><i class="fa-light fa-pen"></i></button>

                                                <button class="btn-flush"><i class="fa-light fa-trash-can"></i></button>

                                            </div>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>New Notice</td>

                                        <td>Mr. Alrazy</td>

                                        <td>20th April 2020</td>

                                        <td>

                                            <div class="btn-box d-flex justify-content-end gap-3">

                                                <button class="btn-flush"><i class="fa-light fa-eye"></i></button>

                                                <button class="btn-flush"><i class="fa-light fa-pen"></i></button>

                                                <button class="btn-flush"><i class="fa-light fa-trash-can"></i></button>

                                            </div>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>New Notice</td>

                                        <td>Mr. Alrazy</td>

                                        <td>20th April 2020</td>

                                        <td>

                                            <div class="btn-box d-flex justify-content-end gap-3">

                                                <button class="btn-flush"><i class="fa-light fa-eye"></i></button>

                                                <button class="btn-flush"><i class="fa-light fa-pen"></i></button>

                                                <button class="btn-flush"><i class="fa-light fa-trash-can"></i></button>

                                            </div>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>New Notice</td>

                                        <td>Mr. Alrazy</td>

                                        <td>20th April 2020</td>

                                        <td>

                                            <div class="btn-box d-flex justify-content-end gap-3">

                                                <button class="btn-flush"><i class="fa-light fa-eye"></i></button>

                                                <button class="btn-flush"><i class="fa-light fa-pen"></i></button>

                                                <button class="btn-flush"><i class="fa-light fa-trash-can"></i></button>

                                            </div>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>New Notice</td>

                                        <td>Mr. Alrazy</td>

                                        <td>20th April 2020</td>

                                        <td>

                                            <div class="btn-box d-flex justify-content-end gap-3">

                                                <button class="btn-flush"><i class="fa-light fa-eye"></i></button>

                                                <button class="btn-flush"><i class="fa-light fa-pen"></i></button>

                                                <button class="btn-flush"><i class="fa-light fa-trash-can"></i></button>

                                            </div>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>New Notice</td>

                                        <td>Mr. Alrazy</td>

                                        <td>20th April 2020</td>

                                        <td>

                                            <div class="btn-box d-flex justify-content-end gap-3">

                                                <button class="btn-flush"><i class="fa-light fa-eye"></i></button>

                                                <button class="btn-flush"><i class="fa-light fa-pen"></i></button>

                                                <button class="btn-flush"><i class="fa-light fa-trash-can"></i></button>

                                            </div>

                                        </td>

                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

            <div class="d-none col-xl-8 col-lg-6">

                <div class="panel">

                    <div class="panel-header">

                        <h5>Works Deadlines</h5>

                        <a class="btn btn-sm btn-primary" href="#">View All</a>

                    </div>

                    <div class="panel-body p-0">

                        <div class="table-responsive">

                            <table class="table deadline-table table-hover">

                                <thead>

                                    <tr>

                                        <th>Name</th>

                                        <th>Last Contacted</th>

                                        <th>Sales Representative</th>

                                        <th>Status</th>

                                        <th>Deal Value</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <tr>

                                        <td>Absternet LLC</td>

                                        <td>Sep 20, 2021</td>

                                        <td>Donald Risher</td>

                                        <td><span class="badge bg-primary-subtle px-2 rounded">Deal Won</span></td>

                                        <td>125K</td>

                                    </tr>

                                    <tr>

                                        <td>Absternet LLC</td>

                                        <td>Sep 20, 2021</td>

                                        <td>Donald Risher</td>

                                        <td><span class="badge bg-primary-subtle px-2 rounded">Deal Won</span></td>

                                        <td>125K</td>

                                    </tr>

                                    <tr>

                                        <td>Absternet LLC</td>

                                        <td>Sep 20, 2021</td>

                                        <td>Donald Risher</td>

                                        <td><span class="badge bg-primary-subtle px-2 rounded">Deal Won</span></td>

                                        <td>125K</td>

                                    </tr>

                                    <tr>

                                        <td>Absternet LLC</td>

                                        <td>Sep 20, 2021</td>

                                        <td>Donald Risher</td>

                                        <td><span class="badge bg-primary-subtle px-2 rounded">Deal Won</span></td>

                                        <td>125K</td>

                                    </tr>

                                    <tr>

                                        <td>Absternet LLC</td>

                                        <td>Sep 20, 2021</td>

                                        <td>Donald Risher</td>

                                        <td><span class="badge bg-primary-subtle px-2 rounded">Deal Won</span></td>

                                        <td>125K</td>

                                    </tr>

                                    <tr>

                                        <td>Absternet LLC</td>

                                        <td>Sep 20, 2021</td>

                                        <td>Donald Risher</td>

                                        <td><span class="badge bg-primary-subtle px-2 rounded">Deal Won</span></td>

                                        <td>125K</td>

                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <!-- footer start -->

        <? include("./includes/views/footer.php"); ?>

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

                <div class="modal-body" name="your_form_name"> <!-- Added name attribute -->
                    <form method="post">

                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label">Subject</label>
                                <input type="text" class="form-control form-control-sm" name="name"> <!-- Added name attribute -->
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Start Date</label>
                                <input name="start_date" type="text" class="form-control form-control-sm date-picker" readonly>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Priority</label>
                                <select class="form-control form-control-sm select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="priority"> <!-- Added name attribute -->
                                    <option value="Low">Low</option>
                                    <option value="Medium">Medium</option>
                                    <option value="High">High</option>
                                    <option value="Urgent">Urgent</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <textarea class="form-control form-control-sm" rows="5" name="description"></textarea> <!-- Added name attribute -->
                            </div>
                        </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>

                    <input type="submit" value="Save" name="create_task" class="btn btn-sm btn-primary">
                    </form>

                </div>

            </div>

        </div>

    </div>

    <!-- Add Task Modal End -->


    <? include("./includes/views/footerjs.php"); ?>



    <script>
        // Function to generate random colors
        function generateRandomColors(count) {
            var colors = [];
            for (var i = 0; i < count; i++) {
                colors.push(getRandomColor());
            }
            return colors;
        }

        // Function to get a random color
        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }
    </script>


    <!--graph 1-->
    <script>
        <?
        $users_graph_array = [];
        $year = date("Y");
        $query = " SELECT (DATE_FORMAT(FROM_UNIXTIME(timeAdded), '%m')) month, count(id) cnt from " . $g_projectSlug .
            "_users where (DATE_FORMAT(FROM_UNIXTIME(timeAdded), '%Y')) = '" . $year . "'
    $condition GROUP by(DATE_FORMAT(FROM_UNIXTIME(timeAdded), '%m'));";
        // echo $query;
        $results = getAll($con, $query);
        for ($j = 1; $j <= 12; $j++) {
            $sales = 0;
            foreach ($results as $row) {
                if ($j == $row['month']) {
                    $sales = round($row['cnt'], 2);
                }
            }
            $users_graph_array[] = $sales;
        } ?>
        var xValues = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
        var backgroundColors = generateRandomColors(xValues.length);
        new Chart("graph_users", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    fill: false,
                    backgroundColor: backgroundColors,
                    borderColor: backgroundColors,
                    data: <? echo json_encode($users_graph_array, true); ?>,
                    label: 'Value'
                }]
            }
        });
    </script>

    <!--graph 2-->
    <script>
        <?
        $data = [];
        $query = "SELECT role, count(role) cnt from " . $g_projectSlug . "_users WHERE 1=1 $condition group by role";
        $results = getAll($con, $query);
        foreach ($results as $row) {
            $data[$row['role']] = $row['cnt'];
        } ?>
        var data = <? echo json_encode($data, true) ?>;

        var labels = Object.keys(data);
        var values = Object.values(data);
        var backgroundColors = generateRandomColors(values.length);
        var chartData = {
            labels: labels,
            datasets: [{
                data: values,
                backgroundColor: backgroundColors,
                hoverBackgroundColor: backgroundColors,
            }]
        };
        var ctx = document.getElementById('group_users').getContext('2d');
        var myDoughnutChart = new Chart(ctx, {
            type: 'doughnut',
            data: chartData,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutoutPercentage: 60, // Adjust as needed
            }
        });
    </script>


</body>


</html>