<? include_once("global.php");



if (!checkGlobalPermission('signupEnabled')) {
    // header("Location: ./");
}


$order_id = $_GET['order_id'];
$getorderinfo = getRow($con, "select * from jeoXillityCrm_orders where id='$order_id' ");

$customer_id = $getorderinfo['customer'];

$getCustomer = getRow($con, "select * from jeoXillityCrm_users where id='$customer_id' ");





if (isset($_POST['addInvoice'])) {



    $client_id = mb_htmlentities(($_POST['client_id']));
    $query = "update jeoXillityCrm_orders set customer = '$client_id' where id = '$order_id'";
    runQuery($query);
    $custom_description = mb_htmlentities(($_POST['notes']));
    $title = mb_htmlentities(($_POST['title']));
    $attachment = storeFile($_FILES['attachment']);
    $total = 0;
    $timeAdded = time();

    $order_id = $_GET['order_id'];
    $invoice_info = getRow($con, "select * from jeoXillityCrm_invoices where order_id='$order_id' ");
    $invoive_id = $invoice_info['id'];

    if (!isset($invoive_id)) {
        $invoiceId = generateRandomString();
        $query = "Insert into `jeoXillityCrm_invoices` set id = '$invoiceId' , user_id = '$session_userId' , client_id = '$client_id' , total = '500' , timeAdded = '$timeAdded' , order_id = '$order_id'";
        runQuery($query);
    } else {
        $invoiceId = $invoive_id;
    }

    $query = "delete from " . $g_projectSlug . "_invoices_products where invoice_id='$order_id'";
    $stmt = $con->prepare($query);
    $stmt->execute();

    if ($actionId == "") {
        $actionId = $id;

        $i = 0;
        // 		var_dump($_POST);
        foreach ($_POST['category'] as $i => $val) {
            $invoice_product_id = generateRandomString();
            $subtotal = $_POST['total'][$i];


            $product_id = $_POST['product_id'][$i];
            $category = $_POST['category'][$i];
            $cost = $_POST['cost'][$i];
            $quantity = $_POST['qty'][$i];
            $unit_cost = $_POST['unit_cost'][$i];
            // 			$items = $_POST['qty'][$i];
            if ($product_id != '') {
                $query = "insert into " . $g_projectSlug . "_invoices_products set id='$invoice_product_id', invoice_id='$invoiceId', order_id='$order_id',
    			product_id='$product_id', items='$items', category='$category', cost='$unit_cost', quantity='$quantity', subtotal='$subtotal'";

                echo $query;


                $stmt = $con->prepare($query);
                $stmt->execute();
                // 			$i++;
                // 			echo $query . "<Br>";
                $total += $subtotal;
            }
        }

        // 		exit();

        if ($title == "") {
            $title = "Invoice #$order_id";
        }
       
        // exit;
        if (!isset($invoiceId)) {
            $query = "insert into " . $g_projectSlug . "_invoices set id='$invoiceId', user_id='$session_userId', client_id='$client_id', custom_description='$custom_description', total='$total',
    		attachment='$attachment', timeAdded='$timeAdded', title='$title',order_id='$order_id';";
        } else {
            $query = "update " . $g_projectSlug . "_invoices set user_id='$session_userId', client_id='$client_id', custom_description='$custom_description', total='$total',
    		attachment='$attachment', timeAdded='$timeAdded', title='$title',order_id='$order_id' where id='$order_id'";
        }
        // echo $query;
        // exit;
        $stmt = $con->prepare($query);
        if (!$stmt) {
            echo "err: <code>$query</code>";
        }
        if ($stmt->execute()) {
        }
//        header("Location: ?m=Data was saved successfully!" . $rStr);
        header("Location: view_orders.php?order_id=$order_id&m=Data%20was%20saved%20successfully!" . $rStr);

    }
}

?>

<!DOCTYPE html>
<html lang="en" data-menu="vertical" data-nav-size="nav-default">

<head>
    <? include("./includes/views/head2.php"); ?>
</head>

<body class="body-padding body-p-top">
    <!-- header start -->
    <? include("./includes/views/navbar.php"); ?>
    <!-- header end -->

    <!-- profile right sidebar start -->

    <!-- profile right sidebar end -->


    <!-- right sidebar start -->
    <div class="right-sidebar-btn d-lg-block d-none">
        <button class="header-btn theme-settings-btn"><i class="fa-light fa-gear"></i></button>
    </div>
    <? include("./includes/views/rightsidebar.php"); ?>
    <!-- right sidebar end -->

    <!-- main sidebar start -->
    <? include("./includes/views/leftmenu2.php"); ?>
    <!-- main sidebar end -->

    <!-- main content start -->
    <div class="main-content">
        <div class="dashboard-breadcrumb mb-25">
            <h2>View Order</h2>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="panel">
                    <div class="panel-body">
                        <div class="profile-sidebar">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="profile-sidebar-title">Customer Information</h5>
                                <!-- <div class="dropdown">
                                    <button class="btn btn-sm btn-icon btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-sm-end">
                                        <li><a class="dropdown-item" href="edit-profile.php?customer_id=<?php echo $customer_id; ?>"><i class="fa-regular fa-pen-to-square"></i> Edit Information</a></li>
                                    </ul>
                                </div> -->
                            </div>
                            <div class="top">
                                <div class="image-wrap">
                                    <div class="part-img rounded-circle overflow-hidden">
                                        <?php
                                        if ($getCustomer['profile_pic'] != "") { ?>
                                            <img src="./uploads/<?php echo $getCustomer['profile_pic'] ?>" alt="admin">
                                        <?
                                        } else { ?>
                                            <img src="assets/images/admin.png" alt="admin">
                                        <?php
                                        }
                                        ?>
                                    </div>
<!--                                    <button class="image-change"><i class="fa-light fa-camera"></i></button>-->
                                </div>
                                <div class="part-txt">
                                    <h4 class="admin-name"><?php echo $getCustomer['name']; ?></h4>
                                    <span class="admin-role"><?php echo $getCustomer['designation']; ?></span>
                                    <div class="admin-social">
                                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-brands fa-google"></i></a>
                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="bottom">
                                <h6 class="profile-sidebar-subtitle">Communication Info</h6>
                                <ul>
                                    <li><span>Full Name:</span><?php echo $getCustomer['name'] . " " . $getCustomer['last_name']; ?></li>

                                    <li><span>Mobile:</span><?php echo $getCustomer['phone']; ?></li>

                                    <li><span>Mail:</span><?php echo $getCustomer['email']; ?></li>

                                    <li><span>Address:</span><?php echo $getCustomer['address']; ?></li>

                                    <li><span>Joining Date:</span><?php echo $getCustomer['joining_date']; ?></li>

                                </ul>
                                <h6 class="profile-sidebar-subtitle">About Me</h6>
                                <p><?php echo $getCustomer['description']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">


                <div class="kt-portlet kt-portlet--mobile panel">
                    <div class="panel-header kt-portlet__head kt-portlet__head--lg">
                        <div class="kt-portlet__head-label">
                            <span class="kt-portlet__head-icon">
                            </span>
                            <h3 class="profile-sidebar-title">
                                <?=ucfirst("Order Info");?>
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-wrapper">
                                <div class="kt-portlet__head-actions">

                                    <!-- <a href="./invoices.php?action=add&order_id=<? echo $order_id ?>" class="btn btn-primary  float-right">
                                        <i class="fa fa-plus"></i>
                                        New Invoice
                                    </a> -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body panel-body" style="margin-top: 21px;">
                        <form action="" method="post">
                            <? if (checkGlobalPermission('g_enableBulkDelete')) { ?>
                                <button type="button" class="btn btn-info btn-sm text-white " onclick="selectAll();">Select All</button>
                                <button type="submit" class="btn btn-danger btn-sm text-white ">Delete Bulk</button>
                            <? } ?>
                            <!--begin: Datatable -->
                            <table class="table table-striped- table-bordered table-hover table-checkable add-search" id="kt_table_1">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Total</th>
<!--                                        <th>Actions</th>-->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?
                                    if (isset($_GET["start_date"])) {
                                        $start_date = strtotime($_POST["start_date"]);
                                        $end_date = strtotime($_POST["end_date"]);
                                        $order_id = $_GET['order_id'];
                                        $query = "SELECT * FROM " . $g_projectSlug . "_invoices_products WHERE order_id='$order_id' AND timeAdded BETWEEN '$start_date' AND '$end_date'";
                                    } else {
                                        $order_id = $_GET['order_id'];
                                        $query = "SELECT * FROM " . $g_projectSlug . "_invoices_products WHERE order_id='$order_id'";
                                    }

                                    // echo $query;
                                    // exit;

                                    $results = getAll($con, $query);
                                    foreach ($results as $row) {
                                        $productId = $row['product_id'];
                                        $product = getRow($con , "SELECT * FROM " . $g_projectSlug . "_products WHERE id='$productId'");

                                        ?>
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
                                            <td><? echo $product['title'] ?></td>
<!--                                            <td>--><?// echo $g_allUsersInfo[$row['client_id']]['name'] ?><!--<br><small>--><?// echo $g_allUsersInfo[$row['client_id']]['email'] ?><!--</small></td>-->
                                            <td>
                                                <?=$product['description']?>
                                            </td>
                                            <td>

                                                <strong>$ <? echo number_format($row['subtotal']) ?></strong>

                                                <? if ($row['status'] == "unpaid") {
                                                    $statusColor = "warning";
                                                } else {
                                                    $statusColor = "primary";
                                                } ?>
                                                <? if ($g_modules_global['enableInvoicesPayments']) { ?>
                                                    <div class="badge badge-<? echo $statusColor ?>"><?php echo ucfirst($row['status']) ?></div>
                                                <? } ?>
                                            </td>
<!--                                            <td>-->
<!--                                                <div class="btn-group">-->
                                                    <!--<a href="?paid" class="btn btn-success">PAID?</a>-->
                                                    <? if (true) { ?>
<!--                                                        <a href="./invoices.php?action=add&invoiceId=--><?// echo $row['id'] ?><!--&order_id=--><?// echo $order_id ?><!--" class="btn btn-warning"><i class="fa-light fa-pen"></i></a>-->
                                                    <? } ?>
                                                    <? if (true) { ?>
                                                        <!-- <a href="#" data-toggle="modal" data-target="#delete_record" data-url="?invoiceIdDuplicate=<? echo $row['id']; ?>" class="btn btn-secondary">Duplicate</a> -->
<!--                                                        <a href="#" class="btn" data-toggle="modal" data-target="#delete_record" data-url="?--><?// echo generateUrlParams() ?><!--delete-record=--><?php //echo $row['id'] ?><!--"><i class="fa-light fa-trash"></i></a>-->

                                                    <? } ?>

<!--                                                    <a href="./invoices.php?view=--><?// echo $row['id']; ?><!--&order_id=--><?// echo $order_id ?><!--" class="btn btn-primary"><i class="fa-light fa-eye"></i></a>-->
                                                    <!-- <a data-toggle="modal" data-target="#delete_record" data-url="?delete-record=<? echo $row['id'] ?>" href="#" class="btn btn-danger"><i class="fa-light fa-trash"></i></a> -->

                                                    <!--<a href="?update=<? echo $row['id']; ?>" class="btn btn-primary">Update</a>-->
<!--                                                </div>-->
<!--                                            </td>-->
                                        </tr>
                                    <? } ?>

                                </tbody>
                            </table>
                        </form>
                        <!--end: Datatable -->
                    </div>
                </div>


            </div>

            <div class="kt-portlet kt-portlet--mobile kt-portlet__body panel" <? if ((isset($_GET['action']))) { ?>style="max-width: 1000px;margin: 1px auto;" <? } ?>>
                <div class=" formRepeater-<? echo '$mc'; ?>" id="formRepeater-<? echo '$mc'; ?>">
                    <div class="panel-header kt-portlet__head kt-portlet__head--lg">
                        <div class="kt-portlet__head-label">

                            <h5 class="profile-sidebar-title">Add Product</h5>

                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-wrapper">
                                <div class="kt-portlet__head-actions">
                                    <!--<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#bulk_import_modal" >Import File</a>-->
                                    <? if (checkGlobalPermission('enableInvoicesProductsItems')) { ?>
                                        <button type="button" class="addRequirement btn btn-primary" onclick="addOneRow('formRepeaterBox_products','add')"><i class="fa fa-plus"></i>Add Product</button>
                                    <? } ?>
                                    <? if (checkGlobalPermission('enableInvoicesCustom')) { ?>
                                        <button type="button" class="addRequirement btn btn-primary" onclick="addOneRow('formRepeaterBox_items','add')"><i class="fa fa-plus"></i>Add Item</button>
                                    <? } ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body panel-body">
                        <form class="kt-form" action="" method="Post" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label>For Client</label>
                                    <select class="form-control" name="client_id" required>

                                        <option value="">Select Client</option>
                                        <?php
                                        $getcustomer = getAll($con, "SELECT * FROM " . $g_projectSlug . "_users where role = 'customer'");
                                        foreach ($getcustomer as $c) { ?>
                                            <option <? if ($invoiceDeets['client_id'] == $c['id'] || ($_GET['clientId'] == $c['id'])) {
                                                        echo "selected";
                                                    } ?> value="<?php echo $c['id'] ?>"><?php echo  $c['name'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>


                                </div>

                                <div class="col-md-9">
                                    <label>Notes</label>
                                    <textarea class="form-control" name="notes"></textarea>
                                </div>
                            </div>


                            <? if (checkGlobalPermission('enableInvoicesCustom')) { ?>
                                <h5>Services</h5>
                                <hr>

                                <div id="formRepeaterBox_items">
                                    <?
                                    foreach ($invoiceproduct as $invoiceproducts) {
                                        if ($productsJson[$invoiceproducts['product_id']]['title'] == "") {
                                            $pId = $invoiceProducts['id'];
                                            if ($pId == "") {
                                                $pId = generateRandomString();
                                            }

                                    ?>
                                            <div class="form-row align-items-center">

                                                <div class="form-group col-md-8">
                                                    <label>Particular</label>
                                                    <input type="text" class="form-control " name="product_id[3]" value="<?php echo $invoiceproducts['product_id']; ?>">
                                                    <input type="text" class="form-control " name="category[3]" value="item" hidden>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label>Cost</label>
                                                    <input type="number" min='0' class="form-control " name="total[3]" value="<?php echo $invoiceProducts['cost']; ?>">
                                                </div>
                                                <div class="col-md-2 form-group m-0">
                                                    <a href="javascript:void(0);" onclick="addOneRow('formRepeaterBox_items','add')" class="add_button btn btn-primary" title="Add field">+ Item</a>
                                                </div>
                                            </div>
                                    <? }
                                    } ?>

                                </div>
                            <? } ?>



                            <? if (checkGlobalPermission('enableInvoicesProductsItems')) { ?>

                                <h5>Products</h5>
                                <hr>
                                <div id="formRepeaterBox_products">
                                    <?
                                    foreach ($invoiceproduct as $invoiceProducts) {
                                        if ($productsJson[$invoiceProducts['product_id']]['title'] != "") {

                                            $pId = $invoiceProducts['id'];
                                            if ($pId == "") {
                                                $pId = generateRandomString();
                                            }
                                    ?>

                                            <div class="form-row align-items-center">
                                                <div class="col-md-12 row" style="margin-top: 21px;">
                                                    <div class="form-group col-md-2">
                                                        <label>Product</label>
                                                        <select onchange="fillPerUnitCost('<? echo $pId ?>')" class="form-control select_product" name="product_id['<? echo $pId ?>']">
                                                            <option value="">Select Product</option>
                                                            <?php
                                                            $getproduct = getAll($con, "SELECT * FROM " . $g_projectSlug . "_products");
                                                            foreach ($getproduct as $p) { ?>
                                                                <option value="<?php echo $p['id'] ?>" <? if ($invoiceProducts['product_id'] == $p['id']) { ?>selected<? } ?>><?php echo  $p['title'] ?></option>
                                                            <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-2">
                                                        <label>Unit Cost</label>
                                                        <input onchange="fillPerSubtotal('<? echo $pId ?>')" type="text" class="form-control " name="unit_cost['<? echo $pId ?>']" value="<?php echo ($invoiceProducts['cost']) ?>">
                                                        <input type="text" class="form-control " name="category['<? echo $pId ?>']" value="product" hidden>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label>Quantity</label>
                                                        <input onchange="fillPerSubtotal('<? echo $pId ?>')" type="number" min='0' class="form-control " name="qty['<? echo $pId ?>']" value="<?php echo ($invoiceProducts['quantity']) ?>">
                                                    </div>
                                                    <!--<div class="form-group col-md-2">
        															<label>Discount%</label>
        															<input onchange="fillPerSubtotal('<? echo $pId ?>')" type="number" class="form-control" name="discount['<? echo $pId ?>']">
        														</div>-->
                                                    <div class="form-group col-md-2">
                                                        <label>Subtotal</label>
                                                        <input type="number" class="form-control" name="total['<? echo $pId ?>']" value="<?php echo ($invoiceProducts['subtotal']) ?>">
                                                    </div>
                                                    <div class="col-md-2 form-group m-0">
                                                        <a href="javascript:void(0);" onclick="addOneRow('formRepeaterBox_products','add')" class="add_button btn btn-primary" title="Add field">+ Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                    <? }
                                    } ?>


                                </div>
                            <? } ?>





                            <br>
                            <!-- <a href="?" class="btn btn-warning " style="width:100px;">Back</a> -->
                            <button name="addInvoice" value="addSubmit" type="submit" class="btn btn-primary " style="width:200px;">Submit</button>

                        </form>
                    </div>

                </div>
            </div>

        </div>



        <!-- footer start -->

        <? include("./includes/views/footer.php"); ?>

        <!-- footer end -->

    </div>

    <!-- main content end -->



    <script src="assets/vendor/js/jquery-3.6.0.min.js"></script>

    <script src="assets/vendor/js/jquery.overlayScrollbars.min.js"></script>

    <script src="assets/vendor/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/main.js"></script>





    <script>
        function makeid(length) {
            var result = '';
            var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            var charactersLength = characters.length;
            for (var i = 0; i < length; i++) {
                result += characters.charAt(Math.floor(Math.random() *
                    charactersLength));
            }
            return result;
        }

        function addOneRow(div_name, action) {
            var random = makeid(10).toUpperCase();

            if (div_name == "formRepeaterBox_products") {
                string = `
    		    <div class="form-row align-items-center" id="${random}">
                <div class="col-md-12 row" style="margin-top: 21px;">
    				<div class="form-group col-md-2">
    					<label>Product</label>
    					<select onchange="fillPerUnitCost('${random}')" class="form-control" name="product_id[${random}]">
    						<option value="">Select Product</option>
    						<?php
                            $getproduct = getAll($con, "SELECT * FROM " . $g_projectSlug . "_products");
                            foreach ($getproduct as $p) {
                            ?>
    						<option value="<?php echo $p['id'] ?>"><?php echo  $p['title'] ?></option>
    						
    						<?php
                            }
                            ?>
    					</select>
    				</div>
    				<div class="form-group col-md-2">
    					<label>Unit Cost</label>
    					<input type="text" onchange="fillPerSubtotal('${random}')"  class="form-control cBalance" name="unit_cost[${random}]">
    					<input type="text" class="form-control " name="category[${random}]" value="product" hidden>
    				</div>
    				<div class="form-group col-md-2">
    					<label>Quantity</label>
    					<input onchange="fillPerSubtotal('${random}')" type="number" min=0 class="form-control qty" name="qty[${random}]">
    				</div>
    				<!--<div class="form-group col-md-2">
    					<label>Discount%</label>
    					<input onchange="fillPerSubtotal('${random}')" type="number" class="form-control chDiscount" name="discount[${random}]">
    				</div>-->
    				<div class="form-group col-md-2">
    					<label>Subtotal</label>
    					<input type="text" class="form-control result" name="total[${random}]" >
    				</div>
    				<div class="col-md-2 form-group">
                        <a href="javascript:void(0);" class="remove_button btn btn-danger" onclick="hide('${random}')">Remove</a>
    				</div>
                    </div>
    			</div>`;
            } else if (div_name == "formRepeaterBox_items") {
                string = `
            
                <div class="form-row align-items-center">
				
					<div class="form-group col-md-8">
						<label>Particular</label>
						<input type="text" class="form-control " name="product_id[${random}]">
						<input type="text" class="form-control " name="category[${random}]" value="item" hidden>
					</div>
					<div class="form-group col-md-2">
						<label>Cost</label>
						<input type="number" min=0 class="form-control qty" name="total[${random}]">
					</div>
					<div class="col-md-2 form-group m-0">
                        <a href="javascript:void(0);" class="remove_button btn btn-danger" onclick="hide('${random}')">Remove</a>
    				</div>
				</div>
    													
            `;
            }
            $("#" + div_name).append(string);
        }

        function hide(id) {
            $("#" + id).hide();
            $("#" + id + " input").attr("disabled", "disabled")
        }
    </script>

    <script>

    </script>
    <!-- calculating discount -->
    <? if (true) { ?>
        <script>
            productsJson = <? echo json_encode($productsJson, true); ?>;
            console.log("productsJson", productsJson);


            function fillPerUnitCost(divId) {
                var productId = $("select[name='product_id[" + divId + "]']").val()

                var perUnitCost = productsJson[productId]['price'];
                $("input[name='unit_cost[" + divId + "]']").val(perUnitCost)

            }

            function fillPerSubtotal(divId) {
                var quantity = $("input[name='qty[" + divId + "]']").val()
                perUnitCost = $("input[name='unit_cost[" + divId + "]']").val()
                var subtotal = perUnitCost * quantity;
                $("input[name='total[" + divId + "]']").val(subtotal)

                // console.log("productId22 ",perUnitCost, quantity, subtotal)

            }
        </script>
    <? } ?>

</body>

</html>