<?
require("./global.php");
$primaryTableName = "Invoice";
if (!checkGlobalPermission('enableInvoices')) {
    // 	header("Location: ./home.php?m=Oops! Error occured");
}

if ($g_modules_global['enableInvoicesProductsItems']) {
    $productsJson = [];
    $rows = getAll($con, "SELECT * FROM " . $g_projectSlug . "_products ");
    foreach ($rows as $row) {
        $productsJson[$row['id']] = $row;
    }
}

$invoice_id = mb_htmlentities($_GET['invoiceId']);

$invoiceDeets = getRow($con, "SELECT * FROM " . $g_projectSlug . "_invoices  where id='$invoice_id' ORDER BY timeAdded ASC ");
$invoiceproduct = getAll($con, "SELECT * FROM " . $g_projectSlug . "_invoices_products  where invoice_id='$invoice_id'");

//for insert & update
if (isset($_POST['addInvoice'])) {


    $client_id = mb_htmlentities(($_POST['client_id']));
    $custom_description = mb_htmlentities(($_POST['notes']));
    $title = mb_htmlentities(($_POST['title']));
    $attachment = storeFile($_FILES['attachment']);
    $total = 0;
    $timeAdded = time();
    if (!isset($_GET['invoiceId'])) {
        $invoiceId = generateRandomString();
    } else {
        $invoiceId = $_GET['invoiceId'];
    }

    $query = "delete from " . $g_projectSlug . "_invoices_products where invoice_id='$invoiceId'";
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
                $query = "insert into " . $g_projectSlug . "_invoices_products set id='$invoice_product_id', invoice_id='$invoiceId', 
    			product_id='$product_id', items='$items', category='$category', cost='$unit_cost', quantity='$quantity', subtotal='$subtotal'";

                $stmt = $con->prepare($query);
                $stmt->execute();
                // 			$i++;
                // 			echo $query . "<Br>";
                $total += $subtotal;
            }
        }

        // 		exit();

        if ($title == "") {
            $title = "Invoice #$invoiceId";
        }
        $order_id = $_GET['order_id'];
        if (!isset($_GET['invoiceId'])) {
            $query = "insert into " . $g_projectSlug . "_invoices set id='$invoiceId', user_id='$session_userId', client_id='$client_id', custom_description='$custom_description', total='$total',
    		attachment='$attachment', timeAdded='$timeAdded', title='$title',order_id='$order_id';";
        } else {
            $query = "update " . $g_projectSlug . "_invoices set user_id='$session_userId', client_id='$client_id', custom_description='$custom_description', total='$total',
    		attachment='$attachment', timeAdded='$timeAdded', title='$title',order_id='$order_id' where id='$invoiceId'";
        }
        // echo $query;
        // exit;
        $stmt = $con->prepare($query);
        if (!$stmt) {
            echo "err: <code>$query</code>";
        }
        if ($stmt->execute()) {
        }
    } else {
        //update
        $query = "update " . $g_projectSlug . "_invoices set id='$id' $queryExtra where id='$actionId'";
        $stmt = $con->prepare($query);
        if (!$stmt) {
            echo "err: <code>$query</code>";
        }
        if (!$stmt->execute()) {
            echo "err: <code>$query</code>";
        }
    }
    //update files
    foreach ($files_array as $col => $file) {
        $stmt = $con->prepare("update " . $g_projectSlug . "_invoices" . " set $col='$file' where id='$actionId'");
        if (!$stmt) {
            echo "err: <code>$query</code>";
        }
        if (!$stmt->execute()) {
            echo "err: <code>$query</code>";
        }
    }
    if ($g_redirectHomeOnSave) {
        header("Location: ./home.php?m=Data was saved successfully!");
    } else {
        header("Location: ?view=$invoiceId&m=Data was saved successfully!");
    }
}
if (isset($_GET['delete-record'])) {
    $id = mb_htmlentities($_GET['delete-record']);
    if ($id != "admin") {
        $stmt = $con->prepare("delete from " . $g_projectSlug . "_invoices where id=?");
        $stmt->bind_param("s", $id);
        if (!$stmt->execute()) {
            echo "err";
        }
    }
}
//myupdate
if (isset($_POST['updateInvoice'])) {
    $custom_description = mb_htmlentities(($_POST['custom_description']));
    $old_attachment = mb_htmlentities(($_POST['old_attachment']));
    $attachment = storeFile($_FILES['attachment']);
    $updateid = $_GET['update'];
    if ($attachment == '') {
        $new_attachment = $old_attachment;
    } else {
        $new_attachment = $attachment;
    }
    $order_id = $_GET['order_id'];
    $stmt = $con->prepare("update " . $g_projectSlug . "_invoices set custom_description='$custom_description', order_id='$order_id', attachment='$new_attachment' where id='$updateid'");
    if (!$stmt) {
        echo "err: <code>$query</code>";
    }
    if (!$stmt->execute()) {
        echo "err: <code>$query</code>";
    }
}

if (isset($_GET['invoiceIdDuplicate'])) {
    $invoiceIdDuplicate = $_GET['invoiceIdDuplicate'];
    //  (recurring_type='Monthly' or recurring_type='Annual') or
    $invoices = getAll($con, "select * from " . $g_projectSlug . "_invoices where id='$invoiceIdDuplicate'");
    foreach ($invoices as $invoiceRow) {

        $invoiceId = $invoiceRow['id'];

        $client_id = mb_htmlentities(($invoiceRow['client_id']));

        $custom_description = mb_htmlentities(($invoiceRow['custom_description']));
        $title = mb_htmlentities(($invoiceRow['title'])) . " - New";
        $recurring_type = mb_htmlentities(($invoiceRow['recurring_type']));
        $attachment = mb_htmlentities(($invoiceRow['attachment']));
        $total = $invoiceRow['total'];
        $timeAdded = time();
        $invoiceIdNew = generateRandomString();
        $order_id = $_GET['order_id'];

        $query = "insert into " . $g_projectSlug . "_invoices set id='$invoiceIdNew', user_id='$session_userId', client_id='$client_id',
		custom_description='$custom_description', total='$total',
    	attachment='$attachment', timeAdded='$timeAdded', title='$title',order_id='$order_id' ;";

        $stmt = $con->prepare($query);
        if (!$stmt) {
            echo "err: <code>$query</code>";
        }
        if ($stmt->execute()) {
        }


        $invoiceItems = getAll($con, "SELECT * FROM " . $g_projectSlug . "_invoices_products WHERE invoice_id='$invoiceId'");
        foreach ($invoiceItems as $item) {


            $invoice_product_id = generateRandomString();

            $subtotal = $item['subtotal'];
            $product_id = $item['product_id'];
            $category = $item['category'];
            $cost = $item['cost'];
            $quantity = $item['qty'];
            $unit_cost = $item['cost'];
            $items = $item['items'];


            $query = "insert into " . $g_projectSlug . "_invoices_products set id='$invoice_product_id', invoice_id='$invoiceIdNew', 
    		product_id='$product_id', items='$items', category='$category', cost='$unit_cost', quantity='$quantity', subtotal='$subtotal'";

            $stmt = $con->prepare($query);
            $stmt->execute();
        }
    }
    header("Location: ?m=Invoice was duplicated successfully.");
}











?>
<!DOCTYPE html>

<html lang="en" data-menu="vertical" data-nav-size="nav-default">

<head>
    <? include("./includes/views/head2.php"); ?>
    <? if (isset($_GET['view'])) {
        //require("./includes/views/head.php") 
    ?>
        <link href="assets/css/pages/invoices/invoice-1.css" rel="stylesheet" type="text/css" />
    <? } ?>
    <style>
        .kt-invoice-1 .kt-invoice__footer .kt-invoice__bank .kt-invoice__item {
            margin-top: 4px;
        }

        .search-container {
            position: relative;
            width: 300px;
            margin-right: 10px;
            margin-top: 29px;


        }

        .search-box {
            width: 100%;
            padding: 10px 40px 10px 15px;
            border: 1px solid  #1a3558;
            border-radius: 10px;
            background-color: #1a3558;
            color: #fff;
            height: 38px;
        }

        .search-box:focus {
            outline: none;
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

    <?php include("./includes/views/leftmenu.php"); ?>

    <!-- main sidebar end -->


    <!-- main content start -->

    <div class="main-content">

        <div class="dashboard-breadcrumb mb-25">

            <h2>Invoices</h2>

        </div>

        <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
            <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                <!-- end:: Subheader -->
                <!-- begin:: Content -->
                <div class="kt-container  kt-grid__item kt-grid__item--fluid">

                    <? if (isset($_GET['m'])) { ?>
                        <div class="alert alert-info"><? echo $_GET['m'] ?></div>
                    <? } ?>

                    <? if (isset($_GET['action']) and $_GET['action'] == 'add') { ?>
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css" />
                        <div class="panel kt-portlet kt-portlet--mobile kt-portlet__body" <? if ((isset($_GET['action']))) { ?>style="max-width: 1000px;margin: 1px auto;" <? } ?>>
                            <div class=" formRepeater-<? echo '$mc'; ?>" id="formRepeater-<? echo '$mc'; ?>">
                                <div class="panel-header kt-portlet__head kt-portlet__head--lg">
                                    <div class="kt-portlet__head-label">

                                        <h3 class="profile-sidebar-title">
                                            <? if (!isset($_GET['invoiceId'])) { ?>Create<? } else { ?>Update<? } ?> Invoice
                                        </h3>
                                    </div>
                                    <div class="kt-portlet__head-toolbar">
                                        <div class="kt-portlet__head-wrapper">
                                            <div class="kt-portlet__head-actions">
                                                <!--<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#bulk_import_modal" >Import File</a>-->
                                                <? if (checkGlobalPermission('enableInvoicesProductsItems')) { ?>
                                                    <button type="button" class="addRequirement btn btn-primary" onclick="addOneRow('formRepeaterBox_products','add')"><i class="fa fa-plus"></i>Add Product
                                                    </button>
                                                <? } ?>
                                                <? if (checkGlobalPermission('enableInvoicesCustom')) { ?>
                                                    <button type="button" class="addRequirement btn btn-primary" onclick="addOneRow('formRepeaterBox_items','add')"><i class="fa fa-plus"></i>Add Item
                                                    </button>
                                                <? } ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body kt-portlet__body">
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
                                                                } ?>value="<?php echo $c['id'] ?>"><?php echo $c['name'] ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>


                                            </div>
                                            <div class="col-md-9">
                                                <label>Title</label>
                                                <input class="form-control" name="title" value="<?php echo ($invoiceDeets['title']) ?>">
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
                                                                <a href="javascript:void(0);" onclick="addOneRow('formRepeaterBox_items','add')" class="add_button btn btn-primary" title="Add field">+
                                                                    Item</a>
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
                                                            <div class="form-group col-md-2">
                                                                <label>Product</label>
                                                                <select onchange="fillPerUnitCost('<? echo $pId ?>')" class="form-control select_product" name="product_id['<? echo $pId ?>']">
                                                                    <option value="">Select Product</option>
                                                                    <?php
                                                                    $getproduct = getAll($con, "SELECT * FROM " . $g_projectSlug . "_products");
                                                                    foreach ($getproduct as $p) { ?>
                                                                        <option value="<?php echo $p['id'] ?>" <? if ($invoiceProducts['product_id'] == $p['id']) { ?>selected<? } ?>><?php echo $p['title'] ?></option>
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
                                                                <a href="javascript:void(0);" onclick="addOneRow('formRepeaterBox_products','add')" class="add_button btn btn-primary" title="Add field">+
                                                                    Product</a>
                                                            </div>
                                                        </div>
                                                <? }
                                                } ?>


                                            </div>
                                        <? } ?>


                                        <label>Notes</label>
                                        <textarea class="form-control" name="notes"></textarea>
                                        <br>
                                        <a href="?" class="btn btn-warning " style="width:100px;">Back</a>
                                        <button name="addInvoice" value="addSubmit" type="submit" class="btn btn-primary " style="width:200px;"><? if (!isset($_GET['invoiceId'])) { ?>Create<? } else { ?>Update<? } ?>
                                            Invoice
                                        </button>

                                    </form>
                                </div>

                            </div>
                        </div>
                    <? } elseif (isset($_GET['update'])) {
                    } ?>

                    <? if (isset($_GET['view'])) { ?>

                        <div class="kt-grid kt-grid--hor kt-grid--root">

                            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

                                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

                                    <!-- end:: Aside -->

                                    <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">

                                        <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

                                            <!-- end:: Subheader -->
                                            <?
                                            $view = $_GET['view'];
                                            $invoiceDeets = getRow($con, "SELECT * FROM " . $g_projectSlug . "_invoices  where id='$view'");
                                            ?>

                                            <!-- begin:: Content -->
                                            <a style="width:150px;" href="/invoice_pdf.php?view=<?php echo $view; ?>" class="mb-3 btn btn-primary" style="margin-bottom: 11px;">Download as PDF
                                            </a>
                                            <!--removed maxwidth 1000px-->
                                            <div id="elementID" class="kt-container w-100 kt-grid__item kt-grid__item--fluid" <? if ((isset($_GET['view']))) { ?>style="display: flex;justify-content: center;" <? } ?>>

                                                <div class="">
                                                    <div class="kt-portlet panel" style="border-radius: 35px;">

                                                        <div style="display:flex; justify-content: center" class="kt-portlet__body kt-portlet__body--fit row">
                                                            <div class="kt-invoice-1 col-md-9">

                                                                <div class="kt-invoice__head" style="background-images: url(assets/media/bg/bg-5.jpg);padding:30px 0 !important;">

                                                                    <div class="kt-invoice__container">
                                                                        
                                                                        <div class="row">

                                                                            <div class="col-md-6">
                                                                                <img src="<? echo $g_modules_global['logo']; ?>" style="width:80px;">
                                                                                
                                                                                <p class=" mt-3">
                                                                                    <b>Invoice
                                                                                        Number:</b> <? echo "#" . $invoiceDeets['id']; ?>
                                                                                    <br>
                                                                                    <b>Invoice
                                                                                        Date:</b> <?php echo date("d M Y", $invoiceDeets['timeAdded']) ?>

                                                                            </div>
                                                                            <div class="col-md-4 mt-5 text-md-right">
                                                                                <h1 class="kt-invoice__title ">
                                                                                    <? echo "Total $" . $invoiceDeets['total']; ?>
                                                                                </h1>
                                                                            </div>
                                                                        </div>

                                                                    </div>


                                                                    <div class="kt-invoice__footer" style="margin-top: 31px;">


                                                                        <div class="kt-invoice__container">

                                                                            <div class="kt-invoice__bank">

                                                                                <table class="table">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th style="width: 100px;">Invoice
                                                                                                To
                                                                                            </th>

                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <b>Name:</b><?php echo $g_allUsersInfo[$invoiceDeets['client_id']]['name'] ?>
                                                                                            </td>
                                                                                            <td>
                                                                                                <b>Phone:</b><?php echo $g_allUsersInfo[$invoiceDeets['client_id']]['phone'] ?>
                                                                                            </td>

                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <b>Email:</b><?php echo $g_allUsersInfo[$invoiceDeets['client_id']]['email']; ?>
                                                                                            </td>
                                                                                            <td>
                                                                                                <b>Address:</b><?php echo $g_allUsersInfo[$invoiceDeets['client_id']]['address'] ?>
                                                                                            </td>

                                                                                        </tr>

                                                                                    </tbody>
                                                                                </table>
                                                                            </div>

                                                                        </div>
                                                                    </div>


                                                                    <? if ($type != "invoice") { ?>

                                                                        <div class="kt-invoice__body" style="margin-top: 31px;">

                                                                            <div class="kt-invoice__container">
                                                                                <div class="table-responsive">
                                                                                    <table class="table">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>Item</th>
                                                                                                <th>Description</th>
                                                                                                <th>Price</th>
                                                                                                <th>Qty</th>
                                                                                                <th>Total</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <?
                                                                                            $invoice_id = $_GET['view'];
                                                                                            $new_query = "SELECT * FROM " . $g_projectSlug . "_invoices_products  where invoice_id='$invoice_id'";
                                                                                            $sql = mysqli_query($con, $new_query);
                                                                                            while ($view_invoice = mysqli_fetch_assoc($sql)) {
                                                                                                $productId = $view_invoice['product_id'];
                                                                                                $productResult = getRow($con, "select * from jeoXillityCrm_products where id = '$productId'");
                                                                                            ?>
                                                                                                <tr>
                                                                                                    <td><? echo $productResult['title'] ?></td>
                                                                                                    <!-- <td style="font-weight: 600"><? echo $view_invoice['product_id'] ?></td> -->

                                                                                                    <td><?= $productResult['description'] ?></td>
                                                                                                    <td><?= $view_invoice['cost'] ?></td>
                                                                                                    <td><?= $view_invoice['quantity'] ?></td>
                                                                                                    <td>
                                                                                                        $<? echo $view_invoice['subtotal'] ?></td>

                                                                                                </tr>
                                                                                            <? } ?>

                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                    <? } ?>

                                                                    <hr>
                                                                </div>


                                                                <div class="kt-invoice__footer">
                                                                    <div class="kt-invoice__container row" style="padding-bottom: 130px;">
                                                                        <div class="kt-invoice__bank col-md-8">
                                                                            <div class="kt-invoice__title">Payment Info
                                                                            </div>
                                                                            <? if ($invoiceDeets['title'] != "") { ?>
                                                                                <div class="kt-invoice__item">
                                                                                    <span class="kt-invoice__label">Title:</span>
                                                                                    <span class="kt-invoice__value"><?php echo $invoiceDeets['title'] ?></span>
                                                                                </div>
                                                                            <? } ?>
                                                                            <? if ($invoiceDeets['custom_description'] != "") { ?>
                                                                                <div class="kt-invoice__item">
                                                                                    <span class="kt-invoice__label">Notes:</span>
                                                                                    <span class="kt-invoice__value"><?php echo $invoiceDeets['custom_description'] ?></span>
                                                                                </div>
                                                                            <? } ?>
                                                                            <div class="kt-invoice__item">
                                                                                <span class="kt-invoice__label">Generated on:</span>
                                                                                <span class="kt-invoice__value"><?php echo date("d M Y", $invoiceDeets['timeAdded']) ?></span>
                                                                            </div>
                                                                            <? if ($g_modules_global['enableInvoicesPayments']) { ?>
                                                                                <div class="kt-invoice__item">
                                                                                    <span class="kt-invoice__label">Status:</span>
                                                                                    <span class="kt-invoice__value"><?php echo ucfirst($invoiceDeets['status']) ?></span>

                                                                                    <? if ($invoiceDeets['status'] == "unpaid") { ?>
                                                                                        <a href="./payment.php?pay_amount=<? echo $invoiceDeets['total'] ?>&invoiceId=<? echo $_GET['view'] ?>" class="btn btn-primary btn-sm badge">Pay
                                                                                            Now</a>
                                                                                    <? } ?>
                                                                                </div>
                                                                            <? } ?>

                                                                        </div>
                                                                        <div class="kt-invoice__total col-md-4 row">
                                                                            <div class="col-md-6">
                                                                                <span class="kt-invoice__title">SubTotal</span>
                                                                            </div>

                                                                            <div class="col-md-6">
                                                                                <span class="kt-invoice__price"><b style="visibility: hidden">+</b>$<?= $invoiceDeets['total'] ?></span>
                                                                            </div>

                                                                            <div class="col-md-6">
                                                                                <span class="kt-invoice__title">Discount</span>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <span class="kt-invoice__price">-$0</span>
                                                                            </div>

                                                                            <div class="col-md-6">
                                                                                <span class="kt-invoice__title">Tax</span>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <span class="kt-invoice__price">+$0</span>
                                                                            </div>

                                                                            <div class="col-md-6" style="background-color: cornflowerblue;">
                                                                                <span class="kt-invoice__title">Grand Total</span>
                                                                            </div>
                                                                            <div class="col-md-6" style="background-color: cornflowerblue;">
                                                                                <span class="kt-invoice__price">$<?php echo $invoiceDeets['total'] ?></span>
                                                                            </div>
                                                                            <!--<span class="kt-invoice__notice">Taxes Included</span>-->
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <? }
                    if (!(isset($_GET['view'])) && !isset($_GET['action'])) { ?>
                        <div class="d-flex align-items-center justify-content-sm-end mb-4 mr-sm-5">
                            <div class="d-flex flex-column mr-sm-3 mb-sm-0 mb-3">

                                <div class="search-container">
                                    <input type="text" id="search-box" class="search-box" placeholder="Search by Title...">
                                    
                                    </button>
                                </div>

                            </div>




                            <form action="" method="get" class="d-flex align-items-center flex-column flex-sm-row">
                                <div class="d-flex flex-column mr-sm-3 mb-sm-0 mb-3">
                                    <label for="" class="mb-1">Start Date</label>
                                    <input type="date" name="start_date" class="form-control" value="<? echo $_GET['start_date'] ?>">
                                </div>
                                <div class="d-flex flex-column mr-sm-3 mb-sm-0 mb-3">
                                    <label for="" class="mb-1">End Date</label>
                                    <input type="date" name="end_date" class="form-control" value="<? echo $_GET['end_date'] ?>">
                                </div>
                                <input type="submit" name="filter_data" value="Filter" class="btn btn-primary form-control text-center mr-sm-2 mb-sm-0 mb-2 d-flex align-self-end justify-content-center" style="font-weight: 500;">
                                <?php if (isset($_GET["start_date"])) { ?>
                                    <a href="?" class="btn btn-primary form-control text-center d-flex align-self-end justify-content-center" style="font-weight: 500;">Clear</a>
                                <?php } ?>
                            </form>
                        </div>
                        <div class="kt-portlet kt-portlet--mobile panel">
                            <div class="panel-header kt-portlet__head kt-portlet__head--lg">
                                <div class="kt-portlet__head-label">
                                    <span class="kt-portlet__head-icon">
                                    </span>
                                    <h3 class="kt-portlet__head-title">
                                        <? //echo ucfirst("invoices")
                                        ?>
                                    </h3>
                                </div>
                                <div class="kt-portlet__head-toolbar">
                                    <div class="kt-portlet__head-wrapper">
                                        <div class="kt-portlet__head-actions">

                                            <a href="?action=add" class="btn btn-primary  float-right">
                                                <i class="fa fa-plus"></i>
                                                New Invoice
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-portlet__body panel-body" style="margin-top: 21px;">
                                <form action="" method="post">
                                    <? if (checkGlobalPermission('g_enableBulkDelete')) { ?>
                                        <button type="button" class="btn btn-info btn-sm text-white " onclick="selectAll();">Select All
                                        </button>
                                        <button type="submit" class="btn btn-danger btn-sm text-white ">Delete Bulk</button>
                                    <? } ?>
                                    <!--begin: Datatable -->

                                    <table class="table table-striped- table-bordered table-hover table-checkable add-search" id="kt_table_1 results ">
                                        <thead>
                                            <tr>
                                                <th>Invoice Id</th>
                                                <th>Title</th>
                                                <th>Client</th>
                                                <th>Total</th>
                                                <th>Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody id="results-tbody">
                                            <?


                                            if (isset($_GET["start_date"])) {
                                                $start_date = $_GET["start_date"];

                                                $end_date = $_GET["end_date"];
                                                $query = "SELECT * FROM " . $g_projectSlug . "_invoices WHERE date(FROM_UNIXTIME(timeAdded)) BETWEEN '$start_date' AND '$end_date' order by timeAdded desc";
                                            } else {
                                                $query = "SELECT * FROM " . $g_projectSlug . "_invoices order by timeAdded desc";
                                            }

                                            // echo $query;
                                            // exit;

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
                                                    <td><a href="?view=<? echo $row['id']; ?>"><? echo $row['title'] ?></a></td>
                                                    <td><? echo $g_allUsersInfo[$row['client_id']]['name'] ?>
                                                        <br><small><? echo $g_allUsersInfo[$row['client_id']]['email'] ?></small>
                                                    </td>
                                                    <td>

                                                        <strong>$ <? echo $row['total'] ?></strong>

                                                        <? if ($row['status'] == "unpaid") {
                                                            $statusColor = "warning";
                                                        } else {
                                                            $statusColor = "primary";
                                                        } ?>
                                                        <? if ($g_modules_global['enableInvoicesPayments']) { ?>
                                                            <div class="badge badge-<? echo $statusColor ?>"><?php echo ucfirst($row['status']) ?></div>
                                                        <? } ?>
                                                    </td>
                                                    <td><? echo date('Y-m-d', $row['timeAdded']); ?></td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <!--<a href="?paid" class="btn btn-success">PAID?</a>-->
                                                            <? if (true) { ?>
                                                                <a href="?action=add&invoiceId=<? echo $row['id'] ?>" class="btn"><i class="fa-light fa-pen"></i></a>
                                                            <? } ?>
                                                            <? if (true) { ?>
                                                                <!-- <a href="#" data-toggle="modal" data-target="#delete_record" data-url="?invoiceIdDuplicate=<? echo $row['id']; ?>" class="btn btn-secondary">Duplicate</a> -->
                                                            <? } ?>

                                                            <a href="?view=<? echo $row['id']; ?>" class="btn"><i class="fa-light fa-eye"></i></a>
                                                            <a data-toggle="modal" data-target="#delete_record" data-url="?delete-record=<? echo $row['id'] ?>" href="#" class="btn"><i class="fa-light fa-trash"></i></a>

                                                            <!--<a href="?update=<? echo $row['id']; ?>" class="btn btn-primary">Update</a>-->
                                                        </div>
                                                    </td>
                                                </tr>
                                            <? } ?>

                                        </tbody>



                                    </table>

                                </form>
                                <!--end: Datatable -->
                            </div>
                        </div>
                    <? } ?>

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
                        <? foreach ($arrayFields_crud as $col => $info) { ?>
                            <div class="form-group">
                                <? if (strpos($info[1], "hidden") == false) { ?>
                                    <label><? echo ucfirst(str_replace("_", " ", $col)) ?></label>
                                    <? if ($info[4] != "") { ?>
                                        <small><? echo $info[4] ?></small>
                                    <? } ?>
                                <? } ?>
                                <? if ($info[0] == "input" && in_array($info[3], ["text", "email", "password", "number", "file", "color"])) { ?>
                                    <input type="<? echo $info[3] ?>" name="<? echo $col ?>" class="form-control" <? echo $info[1] ?>>
                                <? } else if ($info[0] == "select") { ?>
                                    <select name="<? echo $col ?>" class="form-control" <? echo $info[1] ?>>
                                        <? foreach ($info[2] as $option) { ?>
                                            <option><? echo $option ?></option>
                                        <? } ?>
                                    </select>
                                <? } else if ($info[0] == "input" && in_array($info[3], ["image"])) { ?>
                                    <input type="file" name="<? echo $col ?>" class="form-control" <? echo $info[1] ?>>
                                <? } else if ($info[0] == "textarea") { ?>
                                    <textarea type="text" name="<? echo $col ?>" class="form-control" <? echo $info[1] ?>></textarea>
                                <? } else { ?>
                                    <code><? echo $col ?> Couldn't render</code>
                                <? } ?>
                            </div>
                        <? } ?>
                        <input type="text" name="actionId" value="" hidden>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <input type="submit" name="create_package" value="Submit" class="btn btn-primary">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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
    		    <div class="form-row align-items-center row" id="${random}">
    				<div class="form-group col-md-2">
    					<label>Product</label>
    					<select onchange="fillPerUnitCost('${random}')" class="form-control" name="product_id[${random}]">
    						<option value="">Select Product</option>
    						<?php
                            $getproduct = getAll($con, "SELECT * FROM " . $g_projectSlug . "_products");
                            foreach ($getproduct as $p) {
                            ?>
    						<option value="<?php echo $p['id'] ?>"><?php echo $p['title'] ?></option>
    						
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
    				<div class="col-md-2 form-group m-0">
                        <a href="javascript:void(0);" class="remove_button btn btn-danger" onclick="hide('${random}')">Remove</a>
    				</div>
    			</div>`;
        } else if (div_name == "formRepeaterBox_items") {
            string = `
            
                <div class="form-row align-items-center row">
				
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

<script>
    window.onload = function() {
        document.getElementById("generatePdfButton").addEventListener("click", function() {
            var button = event.target;
            setTimeout(function() {
                button.disabled = true;
                button.innerHTML = "Downloading...";
            }, 10);

            var element = document.getElementById("elementID");
            var options = {
                filename: "invoice.pdf",
                margin: 21,
                html2canvas: {
                    scale: 2,
                },
                jsPDF: {
                    unit: "mm",
                    format: "a4",
                    orientation: "portrait",
                    position: 'center', // Center the content on the page
                },
            };

            html2pdf().from(element).set(options).save().then(function() {
                button.disabled = false;
                button.innerHTML = "Downloaded";
            }).catch(function(error) {
                console.error(error);
                button.disabled = false;
                button.innerHTML = "Download";
            });
        });
    }

    document.getElementById("search-box").addEventListener("input", function() {
        let query = this.value.toLowerCase(); // Get search query
        if (query.length === 0) {
            // If query is empty, fetch all results
            fetchResults('');
        } else if (query.length > 2) {
            // If query has more than 2 characters, trigger search
            fetchResults(query);
        }
    });

    function fetchResults(query) {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', 'search_invoices.php?search=' + query, true);
        xhr.onload = function() {
            if (this.status === 200) {
                document.getElementById('results-tbody').innerHTML = this.responseText;
            }
        };
        xhr.send();
    }
</script>


</html>