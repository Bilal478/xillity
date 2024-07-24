<? require("./global.php");

$productId = $_GET['productId'];

$primaryTableName = "products";

array(
	// field_name [type, isrequired, array_select, inner_type] <= "template"
	"price_status" => ["input", "", "", "text"],
	"visibility" => ["input", "", "", "text"],
	"publish_on" => ["input", "", "", "text"],
	"manage_stock" => ["input", "", ["Yes", "No"], "checkbox"],
	"price_status" => ["select", "", ["Flat", "Discount"], ""],
	"soldIndividually" => ["input", "", ["Yes", "No"], "checkbox"],
	"video_provider" => ["input", "", "", "text"],
	"flashDeal" => ["input", "", "", "text"],
	"todaysDeal" => ["input", "", "", "text"],
	"featured" => ["input", "", "", "text"],
	"manageStock" => ["input", "", "", "text"],

	"focusKeyphrase" => ["input", "", "", "text"],
	"metaTitle" => ["input", "", "", "text"],
	"slugText" => ["input", "", "", "text"],
	"metaDescription" => ["input", "", "", "text"],
);;

if (isset($_POST['add_product'])) {

	// echo "<pre>";
	// var_dump($_POST);
	// die();

	$actionId = escape(($_POST['actionId']));

	$title                = escape($_POST['title']);
	$sku                  = escape($_POST['sku']);
	$description          = escape($_POST['description']);;
	$stock_status         = escape($_POST['stock_status']);
	$product_code         = escape($_POST['product_code']);
	$regularPrice         = escape($_POST['regularPrice']);
	$discount             = escape($_POST['discount']);
	$price_status         = escape($_POST['price_status']);
	$PriceDateStart       = escape($_POST['PriceDateStart']);
	$PriceDateEnd         = escape($_POST['PriceDateEnd']);
	$weight               = escape($_POST['weight']);
	$dimension            = escape($_POST['dimension']);
	$width                = escape($_POST['width']);
	$height               = escape($_POST['height']);
	$shipping             = escape($_POST['shipping ']);
	$video_provider       = escape($_POST['video_provider']);
	$video_link           = escape($_POST['video_link']);
	$estimateShippingTime = escape($_POST['estimateShippingTime']);
	$low_stock_warning    = escape($_POST['low_stock_warning']);
	$manage_stock         = escape($_POST['manage_stock']);
	$sold_individually    = escape($_POST['sold_individually']);
	$show_stock_quantity  = escape($_POST['show_stock_quantity']);
	$show_stock_with_text = escape($_POST['show_stock_with_text']);
	$hide_stock           = escape($_POST['hide_stock']);
	$free_shipping        = escape($_POST['free_shipping']);
	$flat_rate            = escape($_POST['flat_rate']);
	$quantity_multiply    = escape($_POST['quantity_multiply']);
	$cash_on_delivery     = escape($_POST['cash_on_delivery']);
	$flash_deal           = escape($_POST['flash_deal']);
	$todays_deal          = escape($_POST['todays_deal']);
	$featured             = escape($_POST['featured']);
	$focusKeyphrase       = escape($_POST['focusKeyphrase']);
	$metaTitle            = escape($_POST['metaTitle']);
	$slugText             = escape($_POST['slugText']);
	$metaDescription      = escape($_POST['metaDescription']);
	$visibility           = escape($_POST['visibility']);
	$publish_on           = escape($_POST['publish_on']);
	$status               = escape($_POST['status']);
	$category           = json_encode($_POST['categories'], true);

	if ($manage_stock == "yes") {
		$manage_stock = "yes";
	} else {
		$manage_stock = "no";
	}
	if ($sold_individually == "yes") {
		$sold_individually = "yes";
	} else {
		$sold_individually = "no";
	}
	if ($show_stock_quantity == "yes") {
		$show_stock_quantity = "yes";
	} else {
		$show_stock_quantity = "no";
	}
	if ($show_stock_with_text == "yes") {
		$show_stock_with_text = "yes";
	} else {
		$show_stock_with_text = "no";
	}
	if ($hide_stock == "yes") {
		$hide_stock = "yes";
	} else {
		$hide_stock = "no";
	}
	if ($free_shipping == "yes") {
		$free_shipping = "yes";
	} else {
		$free_shipping = "no";
	}
	if ($flat_rate == "yes") {
		$flat_rate = "yes";
	} else {
		$flat_rate = "no";
	}
	if ($quantity_multiply == "yes") {
		$quantity_multiply = "yes";
	} else {
		$quantity_multiply = "no";
	}
	if ($cash_on_delivery == "yes") {
		$cash_on_delivery = "yes";
	} else {
		$cash_on_delivery = "no";
	}
	if ($flash_deal == "yes") {
		$flash_deal = "yes";
	} else {
		$flash_deal = "no";
	}
	if ($todays_deal == "yes") {
		$todays_deal = "yes";
	} else {
		$todays_deal = "no";
	}
	if ($featured == "yes") {
		$featured = "yes";
	} else {
		$featured = "no";
	}


	if ($actionId == "") {
		$actionId = $id;
		$thumbnail = null;

		if (isset($_FILES["thumbnail"]) && $_FILES["thumbnail"]["error"] == 0 && !empty($_FILES["thumbnail"]["name"])) {
			$targetDir = "uploads/";
			$originalFileName = urlencode(basename($_FILES["thumbnail"]["name"]));
			$targetFile = $targetDir . time() . rand(1000, 100000) . $originalFileName;

			// Move the uploaded thumbnail file to the specified directory
			if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $targetFile)) {
				$thumbnail =  basename($targetFile);
			}
		}

		$id = generateRandomString();
		$query = "insert into jeoXillityCrm_products set id='$id', title='$title', description='$description', sku='$sku', 
        stock_status='$stock_status', product_code='$product_code', regularPrice='$regularPrice', discount='$discount', 
        price_status='$price_status', PriceDateStart='$PriceDateStart', PriceDateEnd='$PriceDateEnd', weight='$weight', 
        dimension='$dimension', width='$width', height='$height', shipping='$shipping', video_provider='$video_provider', 
        video_link='$video_link', estimateShippingTime='$estimateShippingTime', soldIndividually='$sold_individually', 
        showStockQuantity='$show_stock_quantity', showStockWithText='$show_stock_with_text', hideStock='$hide_stock',
        freeShipping='$free_shipping', flatrate='$flat_rate', quantitymulitiply='$quantity_multiply',
        cashOnDelivery='$cash_on_delivery', flashDeal='$flash_deal', todaysDeal='$todays_deal', featured='$featured', 
        manageStock='$manage_stock', focusKeyphrase='$focusKeyphrase', metaTitle='$metaTitle', slugText='$slugText', 
        metaDescription='$metaDescription', status='$status', category='$category', visibility='$visibility',
        lowStockWarning='$low_stock_warning', publish_on='$publish_on', timeAdded='$timeAdded', userId='$session_userId', 
		thumbnail = '$thumbnail' ";
	} else {
		$thumbnail = null;

		if (isset($_FILES["thumbnail"]) && $_FILES["thumbnail"]["error"] == 0 && !empty($_FILES["thumbnail"]["name"])) {
			$targetDir = "uploads/";
			$originalFileName = urlencode(basename($_FILES["thumbnail"]["name"]));
			$targetFile = $targetDir . time() . rand(1000, 100000) . $originalFileName;

			// Move the uploaded thumbnail file to the specified directory
			if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $targetFile)) {
				$thumbnail =  basename($targetFile);
			}
		}


		if ($thumbnail != '') {
			$query = "update jeoXillityCrm_products set title='$title', description='$description', sku='$sku', 
        stock_status='$stock_status', product_code='$product_code', regularPrice='$regularPrice', discount='$discount', 
        price_status='$price_status', PriceDateStart='$PriceDateStart', PriceDateEnd='$PriceDateEnd', weight='$weight', 
        dimension='$dimension', width='$width', height='$height', shipping='$shipping', video_provider='$video_provider', 
        video_link='$video_link', estimateShippingTime='$estimateShippingTime', soldIndividually='$sold_individually', 
        showStockQuantity='$show_stock_quantity', showStockWithText='$show_stock_with_text', hideStock='$hide_stock',
        freeShipping='$free_shipping', flatrate='$flat_rate', quantitymulitiply='$quantity_multiply', 
        cashOnDelivery='$cash_on_delivery', flashDeal='$flash_deal', todaysDeal='$todays_deal', featured='$featured', 
        manageStock='$manage_stock', focusKeyphrase='$focusKeyphrase', metaTitle='$metaTitle', slugText='$slugText', 
        metaDescription='$metaDescription', status='$status', category='$category',publish_on='$publish_on', 
        visibility='$visibility', lowStockWarning='$low_stock_warning',thumbnail = '$thumbnail' where id='$actionId'";
		} else {
			$query = "update jeoXillityCrm_products set title='$title', description='$description', sku='$sku', 
        stock_status='$stock_status', product_code='$product_code', regularPrice='$regularPrice', discount='$discount', 
        price_status='$price_status', PriceDateStart='$PriceDateStart', PriceDateEnd='$PriceDateEnd', weight='$weight', 
        dimension='$dimension', width='$width', height='$height', shipping='$shipping', video_provider='$video_provider', 
        video_link='$video_link', estimateShippingTime='$estimateShippingTime', soldIndividually='$sold_individually', 
        showStockQuantity='$show_stock_quantity', showStockWithText='$show_stock_with_text', hideStock='$hide_stock',
        freeShipping='$free_shipping', flatrate='$flat_rate', quantitymulitiply='$quantity_multiply', 
        cashOnDelivery='$cash_on_delivery', flashDeal='$flash_deal', todaysDeal='$todays_deal', featured='$featured', 
        manageStock='$manage_stock', focusKeyphrase='$focusKeyphrase', metaTitle='$metaTitle', slugText='$slugText', 
        metaDescription='$metaDescription', status='$status', category='$category',publish_on='$publish_on', 
        visibility='$visibility', lowStockWarning='$low_stock_warning' where id='$actionId'";
		}
	}
	// echo $query;
	// exit;
	runQuery($query);



	$uploadedFiles = array();

	foreach ($_FILES['gallery']['name'] as $key => $value) {
		$filename = $_FILES['gallery']['name'][$key];
		$tmpFilePath = $_FILES['gallery']['tmp_name'][$key];

		if ($filename != "") {
			// Move the file to the uploads directory
			$uploadsDirectory = 'uploads/';
			$uploadPath = $uploadsDirectory . basename($filename);

			if (move_uploaded_file($tmpFilePath, $uploadPath)) {
				$uploadedFiles[] = $filename;
				// echo "File {$filename} has been uploaded successfully.<br>";
			} else {
				echo "Error uploading file {$filename}.<br>";
			}
		}
	}
	$jsonFileNames = json_encode($uploadedFiles);
	// $gallery = storeFile($_FILES['gallery']);
	if ($jsonFileNames != "") {
		$query = "update jeoXillityCrm_products set gallery='$jsonFileNames' where id='$id'";
		runQuery($query);
	}

	// Store file names in JSON format in the database
	// $thumbnail = storeFile($_FILES['thumbnail']);

	// if($thumbnail!=""){
	//     $query = "update jeoXillityCrm_products set thumbnail='$thumbnail' where id='$actionId'";
	//     runQuery($query);
	// }


	header("Location: ?id=$id&" . generateUrlParams_return(["m" => "Data was saved successfully!", "type" => "success"]));
	exit();
}

if (isset($_GET['delete-record'])) {
	$id = escape($_GET['delete-record']);
	$query = "delete from jeoXillityCrm_products where id='$id'";
	runQuery($query);
}

// Your SQL query
$url_id = $_GET['id'];
$row = getRow($con, "SELECT * FROM `jeoXillityCrm_products` WHERE id='$url_id'");

?>


<!DOCTYPE html>
<html lang="en" data-menu="vertical" data-nav-size="nav-default">

<head>
	<? include("./includes/views/head2.php"); ?>
</head>

<body class="body-padding body-p-top">
	<!-- preloader start -->
	<div class="preloader d-none">
		<div class="loader"> <span></span> <span></span> <span></span> </div>
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

		<div class="dashboard-breadcrumb mb-25">
			<?php
			if ($productId == '') { ?>
				<h2>Add New Product</h2>
			<?php } else { ?>
				<h2>Update Product</h2>
			<?php } ?>
			<div class="btn-box"> <a href="all-product.php" class="btn btn-sm btn-primary">View All</a> </div>
		</div>

		<form method="POST" action="" enctype="multipart/form-data">

			<div class="row g-4">

				<? if (isset($_GET['m'])) { ?>
					<div class="alert alert-info">
						<? echo $_GET['m'] ?>
					</div>
				<? } ?>

				<div class="col-xxl-9 col-lg-8">
					<!-- Title -->
					<div class="panel mb-25">
						<div class="panel-body product-title-input">
							<label class="form-label">Write Title</label>
							<input type="text" name="actionId" value="<?php echo $row['id']; ?>" hidden>
							<input type="text" name="title" class="form-control" id="productTitle" placeholder="Title for product" required value="<?php echo $row['title']; ?>">
						</div>
					</div>

					<!-- Description -->
					<div class="panel mb-25">
						<div class="panel-header">
							<h5>Product Description</h5>
							<div class="btn-box d-flex gap-2">
								<button class="btn btn-sm btn-icon btn-outline-primary panel-close" type="button"><i class="fa-light fa-angle-up"></i></button>
							</div>
						</div>
						<div class="panel-body">
							<div>
								<label class="form-label"></label>
								<textarea name="description" class="form-control" rows="7"><?php echo $row['description']; ?></textarea>
							</div>
						</div>
					</div>

					<!-- Product Data -->
					<div class="panel mb-25">
						<div class="panel-header">
							<h5>Product Data</h5>
							<div class="btn-box d-flex gap-2">
								<button class="btn btn-sm btn-icon btn-outline-primary panel-close" type="button"><i class="fa-light fa-angle-up"></i></button>
							</div>
						</div>
						<div class="panel-body">
							<nav>
								<div class="btn-box d-flex flex-wrap gap-1 mb-25" id="nav-tab" role="tablist">
									<button class="btn btn-sm btn-outline-primary active" id="nav-media-tab" data-bs-toggle="tab" data-bs-target="#nav-media" type="button" role="tab" aria-controls="nav-media" aria-selected="true">Media</button>
									<button class="btn btn-sm btn-outline-primary" id="nav-inventory-tab" data-bs-toggle="tab" data-bs-target="#nav-inventory" type="button" role="tab" aria-controls="nav-inventory" aria-selected="false">Inventory</button>
									<button class="btn btn-sm btn-outline-primary" id="nav-price-tab" data-bs-toggle="tab" data-bs-target="#nav-price" type="button" role="tab" aria-controls="nav-price" aria-selected="false">Price</button>
									<button class="btn btn-sm btn-outline-primary" id="nav-shipping-info-tab" data-bs-toggle="tab" data-bs-target="#nav-shipping-info" type="button" role="tab" aria-controls="nav-shipping-info" aria-selected="false">Shipping info</button>
									<button class="btn btn-sm btn-outline-primary" id="nav-video-tab" data-bs-toggle="tab" data-bs-target="#nav-video" type="button" role="tab" aria-controls="nav-video" aria-selected="false">Video</button>
									<button class="btn btn-sm btn-outline-primary" id="nav-shipping-configuration-tab" data-bs-toggle="tab" data-bs-target="#nav-shipping-configuration" type="button" role="tab" aria-controls="nav-shipping-configuration" aria-selected="false">Shipping Configuration</button>
									<button class="btn btn-sm btn-outline-primary" id="nav-offer-tab" data-bs-toggle="tab" data-bs-target="#nav-offer" type="button" role="tab" aria-controls="nav-offer" aria-selected="false">Offer</button>
								</div>
							</nav>

							<div class="tab-content product-data-tab" id="nav-tabContent">
								<!-- Media -->
								<div class="tab-pane fade show active mt-3" id="nav-media" role="tabpanel" aria-labelledby="nav-media-tab" tabindex="0">
									<div class="row">
										<div class="col-xxl-3 col-md-4 col-5 col-xs-12">
											<div class="add-thumbnail product-image-upload">
												<div class="part-txt">
													<h5>Add thumbnail <span>(jpeg/png)</span></h5>
												</div>
												<input type="file" name="thumbnail" accept=".jpg, .jpeg, .png" class="form-control" id="thumbUpload">
											</div>
										</div>
										<div class="col-xxl-9 col-md-8 col-7 col-xs-12">
											<div class="add-gallery-img product-image-upload">
												<div class="part-txt">
													<h5>Add gallery <span>(jpeg/png)</span></h5>
												</div>
												<input type="file" name="gallery[]" class="form-control" accept=".jpg, .jpeg, .png" id="galleryUpload" multiple>
											</div>
										</div>
									</div>
								</div>

								<!-- Inventory -->
								<div class="tab-pane fade" id="nav-inventory" role="tabpanel" aria-labelledby="nav-inventory-tab" tabindex="0">

									<div class="row align-items-center g-3 mb-3">
										<label class="col-md-2 col-form-label col-form-label-sm">SKU <span class="btn-flush fs-14" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-title="Lorem Ipsum is simply dummy text of the printing and typesetting industry."><i class="fa-solid fa-circle-question"></i></span></label>
										<div class="col-md-10">
											<input type="text" name="sku" class="form-control form-control-sm" id="SKU" value="<?php echo $row['sku']; ?>">
										</div>
									</div>

									<div class="row align-items-center g-3 mb-3">
										<label class="col-md-2 col-form-label col-form-label-sm">Manage Stock?</label>
										<div class="col-md-10">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" name="manage_stock" value="yes" id="manageStock" <?php echo ($row['manageStock'] == 'yes') ? 'checked' : ''; ?>>
												<label class="form-check-label" for="manageStock">Manage stock level (quantity)</label>
											</div>
										</div>
									</div>

									<div class="row align-items-center g-3 mb-3">
										<label class="col-md-2 col-form-label col-form-label-sm">Stock Status <span class="btn-flush fs-14" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-title="Lorem Ipsum is simply dummy text of the printing and typesetting industry."><i class="fa-solid fa-circle-question"></i></span></label>
										<div class="col-md-10">
											<select name="stock_status" class="form-control form-control-sm">
												<option value="In stock" <?php echo ($row['stock_status'] == 'In stock') ? 'selected' : ''; ?>>In stock</option>
												<option value="Out of stock" <?php echo ($row['stock_status'] == 'Out of stock') ? 'selected' : ''; ?>>Out of stock</option>
												<option value="On backorder" <?php echo ($row['stock_status'] == 'On backorder') ? 'selected' : ''; ?>>On backorder</option>
											</select>
										</div>
									</div>

									<div class="row align-items-center g-3 mb-3">
										<label class="col-md-2 col-form-label col-form-label-sm">Sold individually <span class="btn-flush fs-14" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-title="Lorem Ipsum is simply dummy text of the printing and typesetting industry."><i class="fa-solid fa-circle-question"></i></span></label>
										<div class="col-md-10">
											<div class="form-check">
												<input class="form-check-input" name="sold_individually" type="checkbox" value="yes" id="soldIndividually" <?php echo ($row['soldIndividually'] == 'yes') ? 'checked' : ''; ?>>
												<label class="form-check-label" for="soldIndividually"> Limit purchases to 1 item per order </label>
											</div>
										</div>
									</div>

									<div class="row align-items-center g-3 mb-3">
										<label class="col-md-2 col-form-label col-form-label-sm">Product Code <span class="btn-flush fs-14" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-title="Lorem Ipsum is simply dummy text of the printing and typesetting industry."><i class="fa-solid fa-circle-question"></i></span></label>
										<div class="col-md-10">
											<input type="text" name="product_code" class="form-control form-control-sm" id="productCode" value="<?php echo htmlspecialchars($row['product_code']); ?>">
										</div>
									</div>

									<!-- Low Stock Warning -->
									<div class="row align-items-center g-3 mb-3">
										<label for="lowStockWarning" class="col-md-2 col-form-label col-form-label-sm">Low Stock Warning</label>
										<div class="col-md-10">
											<input type="text" name="low_stock_warning" class="form-control form-control-sm" id="lowStockWarning" value="<?php echo htmlspecialchars($row['lowStockWarning']); ?>">
										</div>
									</div>

									<!-- Show Stock Quantity -->
									<div class="row align-items-center g-3 mb-3">
										<label for="showStockQuantity" class="col-md-2 col-8 col-form-label col-form-label-sm">Show Stock Quantity</label>
										<div class="col-md-10 col-4">
											<div class="form-check form-switch">
												<input class="form-check-input" name="show_stock_quantity" type="checkbox" value="yes" role="switch" id="showStockQuantity" <?php echo ($row['showStockQuantity'] == 'yes') ? 'checked' : ''; ?>>
											</div>
										</div>
									</div>

									<!-- Show Stock With Text -->
									<div class="row align-items-center g-3 mb-3">
										<label for="showStockWithText" class="col-md-2 col-8 col-form-label col-form-label-sm">Show Stock With Text</label>
										<div class="col-md-10 col-4">
											<div class="form-check form-switch">
												<input class="form-check-input" name="show_stock_with_text" type="checkbox" value="yes" role="switch" id="showStockWithText" <?php echo ($row['showStockWithText'] == 'yes') ? 'checked' : ''; ?>>
											</div>
										</div>
									</div>

									<!-- Hide Stock -->
									<div class="row align-items-center g-3">
										<label for="hideStock" class="col-md-2 col-8 col-form-label col-form-label-sm">Hide Stock</label>
										<div class="col-md-10 col-4">
											<div class="form-check form-switch">
												<input class="form-check-input" name="hide_stock" value="yes" type="checkbox" role="switch" id="hideStock" <?php echo ($row['hideStock'] == 'yes') ? 'checked' : ''; ?>>
											</div>
										</div>
									</div>
								</div>

								<!-- Price -->
								<div class="tab-pane fade" id="nav-price" role="tabpanel" aria-labelledby="nav-price-tab" tabindex="0">
									<!-- Regular Price -->
									<div class="row g-3 mb-3">
										<label for="regularPrice" class="col-md-2 col-form-label col-form-label-sm">Regular Price ($)</label>
										<div class="col-md-10">
											<input type="number" name="regularPrice" class="form-control form-control-sm" id="regularPrice" value="<?php echo htmlspecialchars($row['regularPrice']); ?>">
										</div>
									</div>

									<!-- Discount -->
									<div class="row g-3 mb-3">
										<label for="salePrice" class="col-md-2 col-form-label col-form-label-sm">Discount (%)</label>
										<div class="col-md-8">
											<input type="number" name="discount" class="form-control form-control-sm" id="salePrice" value="<?php echo htmlspecialchars($row['discount']); ?>">
										</div>
										<div class="col-md-2">
											<div class="form-control-sm p-0">
												<select name="price_status" class="form-control form-control-sm">
													<option value="Flat" <?php echo ($row['price_status'] == 'Flat') ? 'selected' : ''; ?>>Flat</option>
													<option value="Discount" <?php echo ($row['price_status'] == 'Discount') ? 'selected' : ''; ?>>Discount</option>
												</select>
											</div>
										</div>
									</div>

									<div class="row g-3">
										<label for="PriceDateStart" class="col-md-2 col-form-label col-form-label-sm">Sale price dates</label>
										<div class="col-md-5">
											<label for="">Start Date</label>
											<input type="date" name="PriceDateStart" class="form-control form-control-sm dateRangePicker" id="PriceDateStart" placeholder="DD MMMM YYYY" value="<?php echo htmlspecialchars($row['priceDateStart']); ?>">
										</div>
										<div class="col-md-5">
											<label for="">End Date</label>
											<input type="date" name="PriceDateEnd" class="form-control form-control-sm dateRangePicker" id="PriceDateEnd" placeholder="DD MMMM YYYY" value="<?php echo htmlspecialchars($row['priceDateEnd']); ?>">
										</div>
									</div>
								</div>

								<!-- Shipping Info -->
								<div class="tab-pane fade" id="nav-shipping-info" role="tabpanel" aria-labelledby="nav-shipping-info-tab" tabindex="0">
									<div class="row g-3 mb-3">
										<label class="col-md-2 col-form-label col-form-label-sm">Weight (kg) <span class="btn-flush fs-14" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-title="Lorem Ipsum is simply dummy text of the printing and typesetting industry."><i class="fa-solid fa-circle-question"></i></span></label>
										<div class="col-md-10">
											<input type="number" name="weight" class="form-control form-control-sm" id="weight" placeholder="0" value="<?php echo htmlspecialchars($row['weight']); ?>">
										</div>
									</div>
									<div class="row g-3 mb-3">
										<label class="col-md-2 col-form-label col-form-label-sm">Dimensions (cm)
											<span class="btn-flush fs-14" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-title="Lorem Ipsum is simply dummy text of the printing and typesetting industry.">
												<i class="fa-solid fa-circle-question"></i>
											</span>
										</label>
										<div class="col-md-10">
											<div class="row g-3">
												<div class="col-md-4">
													<input type="number" name="dimension" class="form-control form-control-sm" id="Dimensions" placeholder="Length" value="<?php echo htmlspecialchars($row['dimension']); ?>">
												</div>
												<div class="col-md-4">
													<input type="number" name="width" class="form-control form-control-sm" placeholder="Width" value="<?php echo htmlspecialchars($row['width']); ?>">
												</div>
												<div class="col-md-4">
													<input type="number" name="height" class="form-control form-control-sm" placeholder="Height" value="<?php echo htmlspecialchars($row['height']); ?>">
												</div>
											</div>
										</div>
									</div>
									<div class="row g-3">
										<label class="col-md-2 col-form-label col-form-label-sm">Shipping Class <span class="btn-flush fs-14" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-title="Lorem Ipsum is simply dummy text of the printing and typesetting industry."><i class="fa-solid fa-circle-question"></i></span></label>
										<div class="col-md-10">
											<select name="shipping" class="form-control form-control-sm">
												<option value="No Shipping Class" <?php echo ($row['shippingClass'] == 'No Shipping Class') ? 'selected' : ''; ?>>No Shipping Class</option>
											</select>
										</div>
									</div>
								</div>

								<!-- Video -->
								<div class="tab-pane fade" id="nav-video" role="tabpanel" aria-labelledby="nav-video-tab" tabindex="0">
									<div class="row align-items-center g-3 mb-3">
										<label class="col-md-2 col-form-label col-form-label-sm">Video Provider</label>
										<div name="channel" class="col-md-10">
											<select class="form-control form-control-sm" name="video_provider" data-placeholder="Select Provider">
												<option value="" <?php echo ($row['video_provider'] == '') ? 'selected' : ''; ?>>Select Provider</option>
												<option value="Youtube" <?php echo ($row['video_provider'] == 'Youtube') ? 'selected' : ''; ?>>Youtube</option>
												<option value="Vimeo" <?php echo ($row['video_provider'] == 'Vimeo') ? 'selected' : ''; ?>>Vimeo</option>
											</select>
										</div>
									</div>
									<div class="row g-3">
										<label class="col-md-2 col-form-label col-form-label-sm">Video Link</label>
										<div class="col-md-10">
											<input type="url" class="form-control form-control-sm" name="video_link" placeholder="Video Link" value="<?php echo htmlspecialchars($row['video_link']); ?>"> <span class="input-additional-txt">Use proper link without extra parameter. Don't use short share link/embeded iframe code.</span>
										</div>
									</div>
								</div>

								<!-- Shipping Configuration -->
								<div class="tab-pane fade" id="nav-shipping-configuration" role="tabpanel" aria-labelledby="nav-shipping-configuration-tab" tabindex="0">
									<div class="row align-items-center g-3 mb-3">
										<label for="estimateShippingTime" class="col-md-2 col-form-label col-form-label-sm">Estimate Shipping Time</label>
										<div class="col-md-10">
											<div class="input-group">
												<input type="number" name="estimateShippingTime" class="form-control form-control-sm" id="estimateShippingTime" value="<?php echo htmlspecialchars($row['estimateShippingTime']); ?>"> <span class="input-group-text">Days</span>
											</div>
										</div>
									</div>
									<div class="row align-items-center g-3 mb-3">
										<label for="freeShipping" class="col-md-2 col-8 col-form-label col-form-label-sm">Free Shipping</label>
										<div class="col-md-10 col-4">
											<div class="form-check form-switch">
												<input class="form-check-input" value="yes" name="free_shipping" type="checkbox" role="switch" id="freeShipping" <?php echo ($row['freeShipping'] == 'yes') ? 'checked' : ''; ?>>
											</div>
										</div>
									</div>
									<div class="row align-items-center g-3 mb-3">
										<label for="flatRate" class="col-md-2 col-8 col-form-label col-form-label-sm">Flat Rate</label>
										<div class="col-md-10 col-4">
											<div class="form-check form-switch">
												<input class="form-check-input" value="yes" name="flat_rate" type="checkbox" role="switch" id="flatRate" <?php echo ($row['flatRate'] == 'yes') ? 'checked' : ''; ?>>
											</div>
										</div>
									</div>
									<div class="row align-items-center g-3 mb-3">
										<label for="QuantityMulitiply" class="col-md-2 col-8 col-form-label col-form-label-sm">Quantity Mulitiply</label>
										<div class="col-md-10 col-4">
											<div class="form-check form-switch">
												<input class="form-check-input" name="quantity_multiply" value="yes" type="checkbox" role="switch" id="QuantityMulitiply" <?php echo ($row['quantitymulitiply'] == 'yes') ? 'checked' : ''; ?>>
											</div>
										</div>
									</div>
									<div class="row align-items-center g-3">
										<label for="cashOnDelivery" class="col-md-2 col-8 col-form-label col-form-label-sm">Cash On Delivery</label>
										<div class="col-md-10 col-4">
											<div class="form-check form-switch">
												<input class="form-check-input" value="yes" name="cash_on_delivery" type="checkbox" role="switch" id="cashOnDelivery" <?php echo ($row['cashOnDelivery'] == 'yes') ? 'checked' : ''; ?>>
											</div>
										</div>
									</div>
								</div>

								<!-- Offer -->
								<div class="tab-pane fade" id="nav-offer" role="tabpanel" aria-labelledby="nav-offer-tab" tabindex="0">
									<div class="row align-items-center g-3 mb-3">
										<label for="flashDeal" class="col-md-2 col-8 col-form-label col-form-label-sm">Flash Deal</label>
										<div class="col-md-10 col-4">
											<div class="form-check form-switch">
												<input class="form-check-input" value="yes" name="flash_deal" type="checkbox" role="switch" id="flashDeal" <?php echo ($row['flashDeal'] == 'yes') ? 'checked' : ''; ?>>
											</div>
										</div>
									</div>
									<div class="row align-items-center g-3 mb-3">
										<label for="todaysDeal" class="col-md-2 col-8 col-form-label col-form-label-sm">Today's Deal</label>
										<div class="col-md-10 col-4">
											<div class="form-check form-switch">
												<input class="form-check-input" value="yes" name="todays_deal" type="checkbox" role="switch" id="todaysDeal" <?php echo ($row['todaysDeal'] == 'yes') ? 'checked' : ''; ?>>
											</div>
										</div>
									</div>
									<div class="row align-items-center g-3">
										<label for="featured" class="col-md-2 col-8 col-form-label col-form-label-sm">Featured</label>
										<div class="col-md-10 col-4">
											<div class="form-check form-switch">
												<input class="form-check-input" value="yes" name="featured" type="checkbox" role="switch" id="featured" <?php echo ($row['featured'] == 'yes') ? 'checked' : ''; ?>>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>

					<!-- SEO Data -->
					<div class="panel">
						<div class="panel-header">
							<h5>SEO Data</h5>
							<div class="btn-box d-flex gap-2">
								<button class="btn btn-sm btn-icon btn-outline-primary panel-close" type="button"><i class="fa-light fa-angle-up"></i></button>
							</div>
						</div>
						<div class="panel-body">
							<div class="row g-3 mb-3">
								<label class="col-xxl-2 col-md-3 col-form-label col-form-label-sm pe-0">Focus keyphrase <span class="btn-flush fs-14" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-title="Lorem Ipsum is simply dummy text of the printing and typesetting industry."><i class="fa-solid fa-circle-question"></i></span></label>
								<div class="col-xxl-10 col-md-9">
									<input type="text" name="focusKeyphrase" class="form-control form-control-sm" id="focusKeyphrase" value="<?php echo htmlspecialchars($row['focusKeyphrase']); ?>">
								</div>
							</div>
							<div class="row g-3 mb-3">
								<label for="metaTitle" class="col-xxl-2 col-md-3 col-form-label col-form-label-sm">Meta Title</label>
								<div class="col-xxl-10 col-md-9">
									<input type="text" name="metaTitle" class="form-control form-control-sm" id="metaTitle" value="<?php echo htmlspecialchars($row['metaTitle']); ?>">
								</div>
							</div>
							<div class="row g-3 mb-3">
								<label for="slugText" class="col-xxl-2 col-md-3 col-form-label col-form-label-sm">Slug</label>
								<div class="col-xxl-10 col-md-9">
									<input type="text" name="slugText" class="form-control form-control-sm" id="slugText" value="<?php echo htmlspecialchars($row['slugText']); ?>">
								</div>
							</div>
							<div class="row g-3">
								<label for="metaDescription" class="col-xxl-2 col-md-3 col-form-label col-form-label-sm">Meta Description</label>
								<div class="col-xxl-10 col-md-9">
									<textarea class="form-control" name="metaDescription" rows="5" id="metaDescription"><?php echo htmlspecialchars($row['metaDescription']); ?></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xxl-3 col-lg-4 add-product-sidebar">
					<div class="panel mb-25">
						<div class="panel-header">
							<h5>Published</h5>
							<div class="btn-box d-flex gap-2">
								<button class="btn btn-sm btn-icon btn-outline-primary panel-close" type="button"><i class="fa-light fa-angle-up"></i></button>
							</div>
						</div>
						<div class="panel-body">
							<div class="row g-3">
								<div class="col-6">
									<label class="form-label">Status</label>
									<select class="form-control form-control-sm" name="status">
										<option value="Published" <?php echo ($row['status'] == 'Published') ? 'selected' : ''; ?>>Published</option>
										<option value="Draft" <?php echo ($row['status'] == 'Draft') ? 'selected' : ''; ?>>Draft</option>
									</select>
								</div>
								<div class="col-6">
									<label class="form-label">Visibility</label>
									<select class="form-control form-control-sm" name="visibility">
										<option value="Public" <?php echo ($row['visibility'] == 'Public') ? 'selected' : ''; ?>>Public</option>
										<option value="Protected" <?php echo ($row['visibility'] == 'Protected') ? 'selected' : ''; ?>>Protected</option>
										<option value="Private" <?php echo ($row['visibility'] == 'Private') ? 'selected' : ''; ?>>Private</option>
									</select>
								</div>
								<div class="col-12">
									<div class="publish-date">
										<label>Published on: </label>
										<input class="input-flush" type="text" id="publishDate" value="<?php echo date('M d, Y') ?> at <?php echo date('h:i A') ?>">
										<label for="publishDate" class="cursor-pointer text-primary"><i class="fa-light fa-pen-to-square"></i></label>
									</div>
									<!-- <div class="btn-box d-flex justify-content-end gap-2">
										<button class="btn btn-sm btn-outline-primary" type="submit" name="add_product">Save</button>
										<button class="btn btn-sm btn-primary">Publish</button>
									</div> -->
								</div>
							</div>
						</div>
					</div>
					<div class="panel-body">
						<form class="input-group-with-icon mb-20">
							<!-- <span class="input-icon"><i class="fa-light fa-magnifying-glass"></i></span> -->
							<!-- <input type="search" placeholder="Search category"> -->
						</form>
					</div>

					<!-- Category -->
					<div class="panel mb-25">
						<div class="panel-header">
							<h5>Category</h5>
							<div class="btn-box d-flex gap-2">
								<button class="btn btn-sm btn-icon btn-outline-primary panel-close" type="button"><i class="fa-light fa-angle-up"></i></button>
							</div>
						</div>
						<div class="panel-body">
							<form class="input-group-with-icon mb-20"> <span class="input-icon"><i class="fa-light fa-magnifying-glass"></i></span>
								<input type="search" placeholder="Search category">
							</form>
							<div class="product-categories">
								<?php
								$categories = getAll($con, "SELECT * FROM jeoXillityCrm_category");

								// Decode the JSON string into an array
								$selectedCategoryIds = json_decode($row['category'], true);

								foreach ($categories as $category) {
									$categoryId = $category['id']; ?>
									<div class="cat-group">
										<div class="form-check">
											<input class="form-check-input has-sub" name="categories[]" value="<?php echo $categoryId; ?>" type="checkbox" id="<?php echo $categoryId; ?>" <?php echo in_array($categoryId, $selectedCategoryIds) ? 'checked' : ''; ?>>
											<label class="form-check-label" for="<?php echo ucwords($categoryId); ?>">
												<?php echo $category['category_name']; ?> <span><i class="fa-light fa-plus"></i></span> </label>
										</div>
									</div>
								<?php
								} ?>
							</div>
						</div>
						<div class="border-top"></div>
					</div>

					<!-- Save Button -->
					<div class="panel mb-25">
						<div class="panel-header">
							<!-- <h5></h5>
							<div class="btn-box d-flex gap-2">
								<button class="btn btn-sm btn-icon btn-outline-primary panel-close" type="button"><i class="fa-light fa-angle-up"></i></button>
							</div> -->
						</div>
						<div class="panel-body">
							<div class="btn-box d-flex justify-content-end gap-2">
								<button class="btn btn-sm btn-primary" type="submit" name="add_product">Save</button>
								<button class="btn btn-sm btn-outline-primary" type="reset">Cancel</button>
							</div>
						</div>
						<div class="border-top"></div>
					</div>
				</div>
			</div>
		</form>

		<!-- footer start -->
		<? include("./includes/views/footer.php"); ?>
		<!-- footer end -->
	</div>
	<!-- main content end -->
	<? include("./includes/views/footerjs.php"); ?>

</body>

</html>