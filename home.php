<? require("./global.php");

$primaryTableName = "notice_board";

array(
    // field_name [type, isrequired, array_select, inner_type] <= "template"
    "notice" => ["input", "", "", "text"],

    "customer_id" => ["input", "", "", "text"],

);;


if (isset($_POST['create_package'])) {
    $actionId = escape($_POST['actionId']);
    $notice = escape($_POST['notice']);
    $customer_id = escape($_POST['customer_id']);
    $message = escape($_POST['message']);
    
    // Assuming $timeAdded should contain the current timestamp
    $timeAdded = time();

    if ($actionId == "") {
        $id = generateRandomString();
        $actionId = $id;
        $query = "INSERT INTO jeoXillityCrm_notice_board SET id='$id', notice='$notice', customer_id='$customer_id', timeAdded='$timeAdded', message='$message', userId='$session_userId'";
    } else {
        $query = "UPDATE jeoXillityCrm_notice_board SET id='$actionId', notice='$notice', customer_id='$customer_id', message='$message' WHERE id='$actionId'";
    }

    runQuery($query);

    header("Location: ?" . generateUrlParams_return(["m" => "Data was saved successfully!", "type" => "success"]));
    exit();
}


if (isset($_GET['delete-record'])) {
    $id = escape($_GET['delete-record']);
    $query = "delete from jeoXillityCrm_notice_board where id='$id'";
    runQuery($query);
}

$getData = getAll($con,"SELECT * FROM ".$g_projectSlug."_users");
$myIndexedArray = [];
foreach($getData as $k => $v){
    $myIndexedArray[$v['id']] = ucfirst($v['name']);
}

$productData = getAll($con,"SELECT * FROM ".$g_projectSlug."_products");
$productIndexedArray = [];
foreach($productData as $k => $v){
    $productIndexedArray[$v['id']] = ucfirst($v['title']);
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



    <?php include("./includes/views/navbar.php"); ?>
    <!-- header end -->

    <!-- profile right sidebar start -->

    <? include("./includes/views/rightsidebar.php"); ?>

    <!-- right sidebar end -->

    <!-- main sidebar start -->

    <?php include("./includes/views/leftmenu.php"); ?>



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
                        <p class="d-flex justify-content-between mb-1">Total Employeees <small><?php echo number_format($currentPercentage, 2); ?>%</small></p>
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

            <div class="col-lg-3 col-6 col-xs-12">

                <div class="dashboard-top-box d-block rounded border-0 panel-bg">
                    <div class="d-flex justify-content-between align-items-center mb-20">
                        <div class="right">
                            <div class="part-icon text-light rounded">
                                <span><i class="fa fa-cart-plus"></i></span>
                            </div>
                        </div>
                        <div class="left">
                            <?php
                            $getotalproductsinstock = getRow($con, "SELECT COUNT(*) as total FROM jeoXillityCrm_products where stock_status = 'In stock'");
                            $totalProductsinstock = $getotalproductsinstock['total'];
                            echo '<h3 class="fw-normal">' . $totalProductsinstock . '</h3>';
                            ?>
                        </div>
                    </div>
                    <div class="progress-box">
                        <?php
                        $targetPercentage = 100;
                        $currentPercentage = ($totalProductsinstock / $targetPercentage) * 100;
                        ?>
                        <p class="d-flex justify-content-between mb-1">Total Products In Stock<small><?php echo number_format($currentPercentage, 2); ?>%</small></p>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="<?php echo $currentPercentage; ?>" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-dark" style="width: <?php echo $currentPercentage; ?>%"></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-3 col-6 col-xs-12">

                <div class="dashboard-top-box d-block rounded border-0 panel-bg">
                    <div class="d-flex justify-content-between align-items-center mb-20">
                        <div class="right">
                            <div class="part-icon text-light rounded">
                                <span><i class="fa fa-cart-arrow-down"></i></span>
                            </div>
                        </div>
                        <div class="left">
                            <?php
                            $getotalproductsoutstock = getRow($con, "SELECT COUNT(*) as total FROM jeoXillityCrm_products where stock_status = 'Out of stock'");
                            $totalProductsoutstock = $getotalproductsoutstock['total'];
                            echo '<h3 class="fw-normal">' . $totalProductsoutstock . '</h3>';
                            ?>
                        </div>
                    </div>
                    <div class="progress-box">
                        <?php
                        $targetPercentage = 100;
                        $currentPercentage = ($totalProductsoutstock / $targetPercentage) * 100;
                        ?>
                        <p class="d-flex justify-content-between mb-1">Total Products Out Of Stock<small><?php echo number_format($currentPercentage, 2); ?>%</small></p>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="<?php echo $currentPercentage; ?>" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-dark" style="width: <?php echo $currentPercentage; ?>%"></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-3 col-6 col-xs-12">

                <div class="dashboard-top-box d-block rounded border-0 panel-bg">
                    <div class="d-flex justify-content-between align-items-center mb-20">
                        <div class="right">
                            <div class="part-icon text-light rounded">
                                <span><i class="fa fa-cart-arrow-down"></i></span>
                            </div>
                        </div>
                        <div class="left">
                            <?php
                            $getotalproductback = getRow($con, "SELECT COUNT(*) as total FROM jeoXillityCrm_products where stock_status = 'On backorder'");
                            $totalProductback = $getotalproductback['total'];
                            echo '<h3 class="fw-normal">' . $totalProductback . '</h3>';
                            ?>
                        </div>
                    </div>
                    <div class="progress-box">
                        <?php
                        $targetPercentage = 100;
                        $currentPercentage = ($totalProductback / $targetPercentage) * 100;
                        ?>
                        <p class="d-flex justify-content-between mb-1">Total Products On Backorder<small><?php echo number_format($currentPercentage, 2); ?>%</small></p>
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
                                <span><i class="fa fa-cart-plus"></i></span>
                            </div>
                        </div>
                        <div class="left">
                            <?php
                            $getotalorders = getRow($con, "SELECT COUNT(*) as total FROM jeoXillityCrm_orders");
                            $totalorders = $getotalorders['total'];
                            echo '<h3 class="fw-normal">' . $totalorders . '</h3>';
                            ?>
                        </div>
                    </div>
                    <div class="progress-box">
                        <?php
                        $targetPercentage = 100;
                        $currentPercentage = ($totalorders / $targetPercentage) * 100;
                        ?>
                        <p class="d-flex justify-content-between mb-1">Total Orders<small><?php echo number_format($currentPercentage, 2); ?>%</small></p>
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
                                <span><i class="fa fa-cubes"></i></span>
                            </div>
                        </div>
                        <div class="left">
                            <?php
                            $getotalinvoices = getRow($con, "SELECT COUNT(*) as total FROM jeoXillityCrm_invoices");
                            $totalinvoices = $getotalinvoices['total'];
                            echo '<h3 class="fw-normal">' . $totalinvoices . '</h3>';
                            ?>
                        </div>
                    </div>
                    <div class="progress-box">
                        <?php
                        $targetPercentage = 100;
                        $currentPercentage = ($totalinvoices / $targetPercentage) * 100;
                        ?>
                        <p class="d-flex justify-content-between mb-1">Total Invoices<small><?php echo number_format($currentPercentage, 2); ?>%</small></p>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="<?php echo $currentPercentage; ?>" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-dark" style="width: <?php echo $currentPercentage; ?>%"></div>
                        </div>
                    </div>
                </div>

            </div>



        </div>

        <div class="row">
            <div class="col-lg-4">

                <div class="panel">

                    <div class="panel-header">

                        <h5>Recent Products</h5>

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

                        <h5>Recent Orders</h5>

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
                                        $customer = $myIndexedArray[$row['customer']];
                                        $product = $row['product'];
                                        $status = $row['status'];
                                        ?>
                                        <tr>
                                            <td><?php echo $customer; ?></td>
                                            <td><?php echo $product; ?></td>
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

                        <h5>Recent Orders Delivery Status</h5>

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
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                // Fetch recent completed orders with customer and status
                                $query = "SELECT customer, status  FROM jeoXillityCrm_orders WHERE status='completed' ORDER BY timeAdded DESC LIMIT 5";
                                $result = mysqli_query($con, $query);

                                // Check if any rows are returned
                                if (mysqli_num_rows($result) > 0) {
                                    // Loop through each row
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        // Extract data from the row
                                        $customer = $myIndexedArray[$row['customer']];
                                        $status = $row['status'];
                                        ?>
                                        <tr>
                                            <td><?php echo $customer; ?></td>
                                            <td>
                                                <div class="btn-box d-flex justify-content-end gap-3">
                                                    <span class="badge bg-success px-2"><?php echo $status; ?></span>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    // If no completed orders found
                                    ?>
                                    <tr>
                                        <td colspan="2">No completed orders found.</td>
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



            <!-- <div class="col-lg-6">

                <div class="panel">

                    <div class="panel-header">

                        <h5>Upcoming Activities</h5>

                        <div class="btn-box">

                            <a href="#" class="btn btn-sm btn-primary">View All</a>

                        </div>

                    </div>

                    <div class="panel-body">

                        <div class="table-responsive">

                            <table class="table table-hover table-activity">

                                <tbody>

                                    <tr>

                                        <td>

                                            <div class="activity-box">

                                                <div class="date-box">

                                                    <span>14</span>

                                                    <span>Feb</span>

                                                </div>

                                                <div class="part-txt">

                                                    <span>Meeting for campaign with sales team</span>

                                                    <span>12:00am - 03:30pm</span>

                                                </div>

                                            </div>

                                        </td>

                                        <td>

                                            <div class="avatar-box justify-content-end">

                                                <div class="avatar">

                                                    <img src="assets/images/avatar-2.png" alt="image">

                                                </div>

                                                <div class="avatar">

                                                    <img src="assets/images/avatar-3.png" alt="image">

                                                </div>

                                                <div class="avatar">

                                                    <img src="assets/images/avatar-4.png" alt="image">

                                                </div>

                                                <div class="avatar bg-primary rounded-circle d-flex justify-content-center align-items-center text-white">6</div>

                                            </div>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>

                                            <div class="activity-box">

                                                <div class="date-box">

                                                    <span>14</span>

                                                    <span>Feb</span>

                                                </div>

                                                <div class="part-txt">

                                                    <span>Meeting for campaign with sales team</span>

                                                    <span>12:00am - 03:30pm</span>

                                                </div>

                                            </div>

                                        </td>

                                        <td>

                                            <div class="avatar-box justify-content-end">

                                                <div class="avatar">

                                                    <img src="assets/images/avatar-2.png" alt="image">

                                                </div>

                                                <div class="avatar">

                                                    <img src="assets/images/avatar-3.png" alt="image">

                                                </div>

                                                <div class="avatar">

                                                    <img src="assets/images/avatar-4.png" alt="image">

                                                </div>

                                                <div class="avatar bg-primary rounded-circle d-flex justify-content-center align-items-center text-white">6</div>

                                            </div>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>

                                            <div class="activity-box">

                                                <div class="date-box">

                                                    <span>14</span>

                                                    <span>Feb</span>

                                                </div>

                                                <div class="part-txt">

                                                    <span>Meeting for campaign with sales team</span>

                                                    <span>12:00am - 03:30pm</span>

                                                </div>

                                            </div>

                                        </td>

                                        <td>

                                            <div class="avatar-box justify-content-end">

                                                <div class="avatar">

                                                    <img src="assets/images/avatar-2.png" alt="image">

                                                </div>

                                                <div class="avatar">

                                                    <img src="assets/images/avatar-3.png" alt="image">

                                                </div>

                                                <div class="avatar">

                                                    <img src="assets/images/avatar-4.png" alt="image">

                                                </div>

                                                <div class="avatar bg-primary rounded-circle d-flex justify-content-center align-items-center text-white">6</div>

                                            </div>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>

                                            <div class="activity-box">

                                                <div class="date-box">

                                                    <span>14</span>

                                                    <span>Feb</span>

                                                </div>

                                                <div class="part-txt">

                                                    <span>Meeting for campaign with sales team</span>

                                                    <span>12:00am - 03:30pm</span>

                                                </div>

                                            </div>

                                        </td>

                                        <td>

                                            <div class="avatar-box justify-content-end">

                                                <div class="avatar">

                                                    <img src="assets/images/avatar-2.png" alt="image">

                                                </div>

                                                <div class="avatar">

                                                    <img src="assets/images/avatar-3.png" alt="image">

                                                </div>

                                                <div class="avatar">

                                                    <img src="assets/images/avatar-4.png" alt="image">

                                                </div>

                                                <div class="avatar bg-primary rounded-circle d-flex justify-content-center align-items-center text-white">6</div>

                                            </div>

                                        </td>

                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div> -->

            <!-- <div class="col-lg-6">

                <div class="panel">

                    <div class="panel-header">

                        <h5>Pending Works</h5>

                    </div>

                    <div class="panel-body p-0">

                        <table class="table table-hover pending-task-table" tabindex="1">

                            <tr>

                                <td>

                                    <div class="task-box">

                                        <span>Database tools</span>

                                        <span>Jul 25, 2017 for Alimul Alrazy</span>

                                    </div>

                                </td>

                                <td>

                                    <span class="d-block text-end">

                                        <span class="badge bg-primary px-2">Processing</span>

                                    </span>

                                </td>

                            </tr>

                            <tr>

                                <td>

                                    <div class="task-box">

                                        <span>Technologycal tools</span>

                                        <span>Jul 25, 2017 for Alimul Alrazy</span>

                                    </div>

                                </td>

                                <td>

                                    <span class="d-block text-end">

                                        <span class="badge bg-success px-2">Completed</span>

                                    </span>

                                </td>

                            </tr>

                            <tr>

                                <td>

                                    <div class="task-box">

                                        <span>Transaction</span>

                                        <span>Jul 25, 2017 for Alimul Alrazy</span>

                                    </div>

                                </td>

                                <td>

                                    <span class="d-block text-end">

                                        <span class="badge bg-danger px-2">On hold</span>

                                    </span>

                                </td>

                            </tr>

                            <tr>

                                <td>

                                    <div class="task-box">

                                        <span>Training tools</span>

                                        <span>Jul 25, 2017 for Alimul Alrazy</span>

                                    </div>

                                </td>

                                <td>

                                    <span class="d-block text-end">

                                        <span class="badge bg-primary px-2">Processing</span>

                                    </span>

                                </td>

                            </tr>

                            <tr>

                                <td>

                                    <div class="task-box">

                                        <span>Private chat module</span>

                                        <span>Jul 25, 2017 for Alimul Alrazy</span>

                                    </div>

                                </td>

                                <td>

                                    <span class="d-block text-end">

                                        <span class="badge bg-success px-2">Completed</span>

                                    </span>

                                </td>

                            </tr>

                            <tr>

                                <td>

                                    <div class="task-box">

                                        <span>Appointment booking with</span>

                                        <span>Jul 25, 2017 for Alimul Alrazy</span>

                                    </div>

                                </td>

                                <td>

                                    <span class="d-block text-end">

                                        <span class="badge bg-primary px-2">Processing</span>

                                    </span>

                                </td>

                            </tr>

                        </table>

                    </div>

                </div>

            </div> -->

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
            <div class="col-xl-4 col-lg-6">

                <div class="panel">

                    <div class="panel-header">

                        <h5>Notice Board</h5>

                        <div class="btn-box d-flex gap-2">
                            <div class="col mr-3">
                                <buton class="btn btn-sm btn-primary w-100 " data-toggle="modal" data-target="#create_record_modal">
                                    <i class="fas fa-plus"></i>
                                    Add New Notics</button>
                            </div>
                            <div id="tableSearch"></div>

                        </div>

                    </div>

                    <div class="panel-body p-0">

                        <div class="table-responsive">


                            <table class="table table-striped- table-bordered table-hover table-checkable add-search">
                                <thead>
                                    <tr>
                                        <th>Notice</th>
                                        <th>Published By</th>
                                        <th>Customer</th>
                                        <th>Published Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $query = "select * from jeoXillityCrm_notice_board t order by t.timeAdded desc";
                                    $results = getAll($con, $query);
                                    foreach ($results as $row) {
                                        $customer_id = $row['customer_id'];
                                        $userId = $row['userId'];
                                        $getuserinfo = getRow($con, "select * from jeoXillityCrm_users where id='$customer_id' ");
                                        $getpublished = getRow($con, "select * from jeoXillityCrm_users where id='$userId' ");
                                    ?>
                                        <tr>
                                            <td><?php echo $row['notice'] ?></td>
                                            <td><?php echo $getpublished['name'] ?></td>
                                            <td><?php echo $getuserinfo['name'] ?></td>
                                            <td><?php echo date('Y-m-d', $row['timeAdded']); ?></td>

                                            <td>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#create_record_modal" data-mydata='<?php echo  htmlspecialchars(json_encode($row, JSON_UNESCAPED_UNICODE)); ?>'>Edit</a>
                                                    <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete_record" data-url="?<? echo generateUrlParams() ?>delete-record=<?php echo $row['id'] ?>">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>


                        </div>

                    </div>

                </div>

            </div>

            <!-- <div class="col-xl-4 col-lg-5">

                <div class="panel">

                    <div class="panel-header">

                        <h5>My Tasks</h5>

                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addTaskModal">Add Task <i class="fa-light fa-plus"></i></button>

                    </div>

                    <div class="panel-body p-0">

                        <div class="table-responsive">

                            <table class="table task-table table-hover">

                                <tbody>

                                    <tr>

                                        <td>

                                            <div class="form-check">

                                                <label class="form-check-label">

                                                    <input class="form-check-input me-2" type="checkbox">

                                                    Web design & development

                                                </label>

                                            </div>

                                        </td>

                                        <td>15 Sep, 2022</td>

                                    </tr>

                                    <tr>

                                        <td>

                                            <div class="form-check">

                                                <label class="form-check-label">

                                                    <input class="form-check-input me-2" type="checkbox">

                                                    Logo design

                                                </label>

                                            </div>

                                        </td>

                                        <td>15 Sep, 2022</td>

                                    </tr>

                                    <tr>

                                        <td>

                                            <div class="form-check">

                                                <label class="form-check-label">

                                                    <input class="form-check-input me-2" type="checkbox">

                                                    Meeting with client

                                                </label>

                                            </div>

                                        </td>

                                        <td>15 Sep, 2022</td>

                                    </tr>

                                    <tr>

                                        <td>

                                            <div class="form-check">

                                                <label class="form-check-label">

                                                    <input class="form-check-input me-2" type="checkbox">

                                                    Laravel devloper interview

                                                </label>

                                            </div>

                                        </td>

                                        <td>15 Sep, 2022</td>

                                    </tr>

                                    <tr>

                                        <td>

                                            <div class="form-check">

                                                <label class="form-check-label">

                                                    <input class="form-check-input me-2" type="checkbox">

                                                    Client support

                                                </label>

                                            </div>

                                        </td>

                                        <td>15 Sep, 2022</td>

                                    </tr>

                                    <tr>

                                        <td>

                                            <div class="form-check">

                                                <label class="form-check-label">

                                                    <input class="form-check-input me-2" type="checkbox">

                                                    Factory visit

                                                </label>

                                            </div>

                                        </td>

                                        <td>15 Sep, 2022</td>

                                    </tr>

                                    <tr>

                                        <td>

                                            <div class="form-check">

                                                <label class="form-check-label">

                                                    <input class="form-check-input me-2" type="checkbox">

                                                    Landing page design

                                                </label>

                                            </div>

                                        </td>

                                        <td>15 Sep, 2022</td>

                                    </tr>

                                    <tr>

                                        <td>

                                            <div class="form-check">

                                                <label class="form-check-label">

                                                    <input class="form-check-input me-2" type="checkbox">

                                                    Important meeting

                                                </label>

                                            </div>

                                        </td>

                                        <td>15 Sep, 2022</td>

                                    </tr>

                                </tbody>

                            </table>

                        </div>

                        <div class="btn-box px-lg-3 px-2 mx-xl-1 m-lg-0 mx-1 py-2">

                            <a href="task.php" class="view-all-task text-white fs-14 text-decoration-underline">Show More</a>

                        </div>

                    </div>

                </div>

            </div> -->



            <!-- <div class="col-xl-8 col-lg-6">

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

            </div> -->

        </div>



        <!-- footer start -->


        <? include("./includes/views/footer.php"); ?>

        <!-- footer end -->

    </div>

    <!-- main content end -->

    <!-- Add Task Modal Start -->

    <!-- <div class="modal fade" id="addTaskModal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">

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

    </div> -->


    <div class="modal fade" id="create_record_modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title">Add/Edit</h5>
                        <button type="button" class="btn btn-sm btn-icon btn-outline-primary" data-dismiss="modal" aria-label="Close">
                            <i class="fa-light fa-xmark"></i>
                        </button>
                    </div>
                    <div class="modal-body row">

                        <!-- modal -->
                        <div class="form-group">
                            <label>Notice</label> &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" name="notice" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Customer</label>
                            <select class="form-control" name="customer_id" id="customer">
                                <option value="">Select Customer</option>
                                <?php
                                $customers = getAll($con, "SELECT * FROM " . $g_projectSlug . "_users");
                                foreach ($customers as $customer) {
                                ?>
                                    <option value="<?php echo $customer['id'] ?>"><?php echo $customer['name'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Message  </label>   <span>  </span>
                            <textarea name="message" id="" cols="10" rows="5" class="form-control"></textarea>
                        </div>

                        <input type="text" name="actionId" value="" hidden>



                        <div class="row">

                            <div class="col-6 text-end">
                                <button type="button" class="btn btn-sm btn-light me-1" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-sm btn-success" name="create_package" value="Submit">
                                <!-- Add any additional buttons or controls here -->
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Task Modal End -->



    <? include("./includes/views/footerjs.php"); ?>

</body>
<script>
    $(document).ready(function() {


        $("#create_record_modal").on('show.bs.modal', function(e) {
            var mydata = $(e.relatedTarget).data('mydata');
            console.log("mydata->", mydata);
            $("input[type='checkbox']").prop('checked', false);
            if (mydata != null) {
                $("#modelTitle").html("Update");
                $("input[name='notice']").val(mydata['notice'])
                $("#customer").val(mydata['customer_id']);

                $("select[name='customer_id']").val(mydata['customer_id'])
                $("textarea[name='message']").val(mydata['message'])
                $("input[name='actionId']").val(mydata['id'])
            } else {
                $("#modelTitle").html("Insert");
                $("input[name='notice']").val("")
                $("select[name='customer_id']").val("")
                $("textarea[name='message']").val("")

                $("input[name='actionId']").val("")
            }
        });
    })
</script>


</html>