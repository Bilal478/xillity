<? require("./global.php");

$primaryTableName = "orders";

array(
    // field_name [type, isrequired, array_select, inner_type] <= "template"
    "customer" => ["input", "", "", "text"],
    "product" => ["input", "", "", "text"],
    "price" => ["input", "", "", "text"],
    "payment_method" => ["input", "", "", "text"],
    "status" => ["input", "", "", "text"],
    "delievery_status" => ["input", "", "", "text"],


);;


if (isset($_POST['create_package'])) {
    $actionId = escape(($_POST['actionId']));
    $customer = escape($_POST['customer']);
    $product = escape($_POST['product']);
    $price = escape($_POST['price']);
    $payment_method = escape($_POST['payment_method']);
    $status = escape($_POST['status']);
    $delievery_status = escape($_POST['delievery_status']);
    if ($actionId == "") {
        $id = generateRandomString();
        $actionId = $id;
        $query = "insert into jeoXillityCrm_orders set id='$id' , customer='$customer', product='$product', price='$price', payment_method='$payment_method', status='$status', delievery_status='$delievery_status', timeAdded='$timeAdded'";
    } else {
        $query = "update jeoXillityCrm_orders set id='$actionId' , customer='$customer', product='$product', price='$price', payment_method='$payment_method', status='$status', delievery_status='$delievery_status' where id='$actionId'";
    }
    // echo $query;
    // exit;
    runQuery($query);

    header("Location: ?" . generateUrlParams_return(["m" => "Data was saved successfully!", "type" => "success"]));
    exit();
}

if (isset($_GET['delete-record'])) {
    $id = escape($_GET['delete-record']);
    $query = "delete from jeoXillityCrm_orders where id='$id'";
    runQuery($query);
}

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

        <div class="row g-4">

            <div class="col-12">

                <div class="panel">

                    <div class="panel-header">

                        <h5>All Order</h5>
                        <div class="btn-box d-flex gap-2">
                            <div class="col mr-3">
                                <buton class="btn btn-sm btn-primary w-100 " data-toggle="modal" data-target="#create_record_modal">
                                    <i class="fas fa-plus"></i>
                                    New Record</button>
                            </div>
                            <div id="tableSearch"></div>

                        </div>



                    </div>

                    <div class="panel-body">



                        <div class="d-none table-filter-option">

                            <div class="row g-3">

                                <div class="col-xl-10 col-9 col-xs-12">

                                    <div class="row g-3">

                                        <div class="col">

                                            <form class="row g-2">

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

                                            </form>

                                        </div>



                                    </div>

                                </div>

                                <div class="col-xl-2 col-3 col-xs-12 d-flex justify-content-end">

                                    <div id="productTableLength"></div>

                                </div>

                            </div>

                        </div>


                        <table class="table table-striped- table-bordered table-hover table-checkable add-search">
                            <thead>
                                <tr>
                                    <th>Customer</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Payment method</th>
                                    <th>Status</th>
                                    <th>Delievery status</th>
                                    <th>Order Date</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $query = "select * from jeoXillityCrm_orders ORDER BY timeAdded DESC";
                                $results = getAll($con, $query);
                                foreach ($results as $row) { ?>
                                    <tr>
                                        <td><?php echo $users[$row['customer']] ?></td>
                                        <td><?php echo $productsName[$row['product']] ?></td>
                                        <td>$<?php echo $row['price'] ?></td>
                                        <td><?php echo ucwords($row['payment_method']) ?></td>
                                        <td><?php if ($row['status'] == 'pending') : ?>
                                                <span class="badge bg-secondary text-white"><?= ucwords($row['status']) ?></span>
                                            <?php elseif ($row['status'] == 'hold') : ?>
                                                <span class="badge bg-primary text-white"><?= ucwords($row['status']) ?></span>
                                            <?php elseif ($row['status'] == 'completed') : ?>
                                                <span class="badge bg-success text-white"><?= ucwords($row['status']) ?></span>
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
                                        <td>
                                            <div class="btn-group">
                                                <a href="#" class="btn" data-toggle="modal" data-target="#create_record_modal" data-mydata='<?php echo  htmlspecialchars(json_encode($row, JSON_UNESCAPED_UNICODE)); ?>'><i class="fa-light fa-pen"></i></a>
                                                <a href="#" class="btn" data-toggle="modal" data-target="#delete_record" data-url="?<? echo generateUrlParams() ?>delete-record=<?php echo $row['id'] ?>"><i class="fa-light fa-trash"></i></a>
                                                <a href="./view_orders.php?order_id=<? echo $row['id']; ?>" class="btn"><i class="fa-light fa-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
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

                        <div class="col-6 mb-3">
                            <label for="customer">Customer</label>
                            <select class="form-control" name="customer" id="customer">
                                <option value="" selected disabled>Select Customer</option>
                                <?php
                                $customers = getAll($con, "SELECT * FROM " . $g_projectSlug . "_users WHERE role='customer'");
                                foreach ($customers as $customer) {
                                ?>
                                    <option value="<?php echo $customer['id'] ?>"><?php echo $customer['name'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="col-6 mb-3">
                            <label for="product">Product</label>
                            <select class="form-control" name="product" id="productSelect">
                                <option value="">Select Product</option>
                                <?php
                                $products = getAll($con, "SELECT * FROM jeoXillityCrm_products");
                                foreach ($products as $product) {
                                ?>
                                    <option value="<?php echo $product['id'] ?>"><?php echo  $product['title'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="col-6 mb-3">
                            <label for="priceInput">Price</label>
                            <input type="text" name="price" id="priceInput" class="form-control">
                        </div>

                        <div class="col-6 mb-3">
                            <label for="payment_method">Payment Method</label>
                            <select name="payment_method" id="payment_method" class="form-control">
                                <option value="">Payment Method</option>
                                <option value="cod">Cash on Delivery</option>
                                <option value="paypal">Paypal</option>
                                <option value="stripe">Stripe</option>
                            </select>
                        </div>

                        <div class="col-6 mb-3">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="">Select Status</option>
                                <option value="pending">Pending</option>
                                <option value="hold">Hold</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div>

                        <div class="col-6 mb-3">
                            <label for="delivery_status">Delivery Status</label>
                            <select name="delievery_status" id="delivery_status" class="form-control">
                                <option value="">Delivery Status</option>
                                <option value="pending">Pending</option>
                                <option value="delivered">Delivered</option>
                                <option value="cancel">Cancel</option>
                                <option value="return">Return</option>
                            </select>
                        </div>

                        <input type="text" name="actionId" value="" hidden>

                        <div class="row">
                            <div class="col-6">
                                <!-- Add any additional buttons or controls here -->
                            </div>
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


    <script src="assets/vendor/js/jquery-3.6.0.min.js"></script>

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
                $("select[name='customer']").val(mydata['customer'])
                $("select[name='product']").val(mydata['product'])
                $("input[name='price']").val(mydata['price'])
                $("select[name='payment_method']").val(mydata['payment_method'])
                $("select[name='status']").val(mydata['status'])
                $("select[name='delievery_status']").val(mydata['delievery_status'])
                $("input[name='actionId']").val(mydata['id'])
            } else {
                $("#modelTitle").html("Insert");
                $("select[name='customer']").val("")
                $("select[name='product']").val("")
                $("input[name='price']").val("")
                $("select[name='payment_method']").val("")
                $("select[name='status']").val("")
                $("select[name='delievery_status']").val("")

                $("input[name='actionId']").val("")
            }
        });
    })
</script>







</html>