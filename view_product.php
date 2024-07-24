<?include_once("global.php");

include("./includes/models/users.php");

// $role = 'user';

if(!checkGlobalPermission('signupEnabled')){
   // header("Location: ./");
}


if(isset($_GET['id'])){
    $url_id = $_GET['id'];
    $getProduct = getRow($con, "SELECT * FROM `jeoXillityCrm_products` WHERE id='$url_id'" );

    // echo "<pre>";
    // print_r($getProduct); die();
}

?>

<!DOCTYPE html>
<html lang="en" data-menu="vertical" data-nav-size="nav-default">
<head>
    <?include("./includes/views/head2.php");?>
</head>

<body class="body-padding body-p-top">
    <!-- header start -->
    <?include("./includes/views/navbar.php"); ?>
    <!-- header end -->

    <!-- profile right sidebar start -->

    <!-- profile right sidebar end -->


    <!-- right sidebar start -->
    <div class="right-sidebar-btn d-lg-block d-none">
        <button class="header-btn theme-settings-btn"><i class="fa-light fa-gear"></i></button>
    </div>
    <?include("./includes/views/rightsidebar.php"); ?>
    <!-- right sidebar end -->

    <!-- main sidebar start -->
    <?include("./includes/views/leftmenu2.php"); ?>
    <!-- main sidebar end -->

    <!-- main content start -->
    <div class="main-content">
        <div class="dashboard-breadcrumb mb-25">
            <h2>View Product</h2>
        </div>

        <div class="row g-2 mb-25">

            <div class="col-md-4">
                <div class="panel">
                    <div class="panel-body">
                        <div class="profile-sidebar">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="profile-sidebar-title">Product Information</h5>
                                <!-- <div class="dropdown">
                                    <button class="btn btn-sm btn-icon btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-sm-end">
                                        <li><a class="dropdown-item" href="add-product.php?id=<?php echo $getProduct['id']; ?>"><i class="fa-regular fa-pen-to-square"></i> Edit Information</a></li>
                                    </ul>
                                </div> -->
                            </div>
                            <div class="top row">
                                <div class="col-12 image-wrap">
                                    <div class="part-img overflow-hidden w-100">
                                        <?php
                                        if($getProduct['thumbnail'] != ""){?>
                                            <img src="./uploads/<?php echo $getProduct['thumbnail']?>" alt="admin">
                                            <?
                                        }else{?>
                                            <img src="assets/images/admin.png" alt="admin">
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <!-- <button class="image-change"><i class="fa-light fa-camera"></i></button> -->
                                </div>
                                <div class="col-12 part-txt">
                                    <h4 class="admin-name"><?php echo $getProduct['title']; ?></h4>
                                    <!-- <span class="admin-role"><?php echo $getProduct['designation']; ?></span> -->
                                    <div class="d-flex mb-3">
                                        <div class="text-primary mr-2">
                                            <small class="fas fa-star"></small>
                                            <small class="fas fa-star"></small>
                                            <small class="fas fa-star"></small>
                                            <small class="fas fa-star-half-alt"></small>
                                            <small class="far fa-star"></small>
                                        </div>
                                        <small class="pt-1">(99 Reviews)</small>
                                    </div>
                                    <h3 class="font-weight-semi-bold mb-4">$<?php echo $getProduct['regularPrice']?></h3>
                                    <div class="admin-social">
                                        <h6 class="mb-4">Share On</h6>
                                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-brands fa-google"></i></a>
                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="bottom">
                                <!-- <h6 class="profile-sidebar-subtitle">Product Info</h6>
                                <ul>
                                    <li><span>Title:</span><?php echo $getProduct['title']; ?></li>
                                    <li><span>Mobile:</span><?php echo $getProduct['phone']; ?></li>
                                    <li><span>Mail:</span><?php echo $getProduct['email']; ?></li>
                                    <li><span>Address:</span><?php echo $getProduct['address']; ?></li>
                                    <li><span>published Date:</span><?php echo $getProduct['joining_date']; ?></li>
                                </ul> -->
                                <h6 class="profile-sidebar-subtitle">Description</h6>
                                <p><?php echo $getProduct['description']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Other Details -->
            <div class="col-md-8">
                <div class="panel">
                    <div class="panel-header">
                        <h5>Product Details</h5>
                        <div class="dropdown">
                            <!-- <a href="#" class="btn btn-sm btn-primary">View All</a> -->
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="user-activity">
                            <ul>
                                <!-- Shipping Info -->
                                <li>
                                    <div class="left">
                                        <span class="user-activity-title">Shipping Info</span>
                                        <span class="user-activity-details">
                                            Weight:  <?php echo $getProduct['weight']."kg"?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            Height:  <?php echo $getProduct['height']?>
                                        </span>
                                        <span class="user-activity-details">
                                            Length:  <?php echo $getProduct['dimension']?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            Width:  <?php echo $getProduct['width']?>
                                    
                                        </span>
                                        <span class="user-activity-details">Shipping: <?php echo $getProduct['shipping']?></span>
                                    </div>

                                    <!-- <div class="right">
                                        <span class="user-activity-time">6 min ago</span>
                                    </div> -->
                                </li>
                                <!-- Shipping Configuration -->
                                <li>
                                    <div class="left">
                                        <span class="user-activity-title">Shipping Configuration</span>
                                        <span class="user-activity-details">
                                            Estimate Shipping Time: &nbsp;&nbsp;&nbsp;&nbsp;
                                             <strong><?php echo $getProduct['estimateShippingTime']." Days" ?></strong>
                                        </span>
                                        <span class="user-activity-details">
                                            Free Shipping: &nbsp;&nbsp;&nbsp;&nbsp;
                                            <span>
                                                <strong><?php echo ucfirst($getProduct['freeShipping']); ?></strong>
                                            </span>
                                        </span>
                                        <span class="user-activity-details">
                                            Flat Rate: &nbsp;&nbsp;&nbsp;&nbsp;
                                            <strong > <?php echo ucfirst($getProduct['flatrate']) ?></strong>
                                        </span>
                                        <span class="user-activity-details">
                                            Qauntity Multiply: &nbsp;&nbsp;&nbsp;&nbsp;
                                            <strong><?php echo ucfirst($getProduct['quantitymulitiply']); ?></strong>
                                        </span>
                                        <span class="user-activity-details">Cash On Delivery:
                                            <strong><?php echo ucfirst($getProduct['cashOnDelivery']) ?></strong>
                                        </span>
                                        <!-- <span class="user-activity-date">Monday 12 Jan 2020.</span> -->
                                    </div>
                                    <!-- <div class="right">
                                        <span class="user-activity-time">16 min ago</span>
                                    </div> -->
                                </li>
                                <!-- Offers -->
                                <li>
                                    <div class="left">
                                        <span class="user-activity-title">Offers</span>
                                        <span class="user-activity-details">
                                            Flash Deal: &nbsp;&nbsp;&nbsp;&nbsp;
                                            <strong><?php echo ucfirst($getProduct['flashDeal']) ?></strong>
                                        </span>
                                        <span class="user-activity-details">
                                            Todays Deal: &nbsp;&nbsp;&nbsp;&nbsp;
                                            <strong><?php echo ucfirst($getProduct['todaysDeal']) ?></strong>
                                        </span>
                                        <span class="user-activity-details">
                                            Featured: &nbsp;&nbsp;&nbsp;&nbsp;
                                            <strong><?php echo ucfirst($getProduct['featured']) ?></strong>
                                        </span>
                                        <!-- <span class="user-activity-date">Monday 12 Jan 2020.</span> -->
                                    </div>
                                    <!-- <div class="right">
                                        <span class="user-activity-time">6 min ago</span>
                                    </div> -->
                                </li>
                                <!-- Videos -->
                                <li>
                                    <div class="left">
                                        <span class="user-activity-title">Videos</span>
                                        <span class="user-activity-details">
                                            Video Provider:
                                            <strong><?php echo ucfirst($getProduct['video_provider'])?></strong>
                                        </span>
                                        <span class="user-activity-details">
                                            Video Link:
                                            <a href="<?php echo $getProduct['video_link'] ?>"><?php echo $getProduct['video_link'] ?></a>
                                        </span>
                                        <!-- <span class="user-activity-date">Monday 12 Jan 2020.</span> -->
                                    </div>
                                    <!-- <div class="right">
                                        <span class="user-activity-time">16 min ago</span>
                                    </div> -->
                                </li>
                                <!-- Inventory -->
                                <li>
                                    <div class="left">
                                        <span class="user-activity-title">Inventory</span>
                                        <span class="user-activity-details">
                                            <table>
                                                <tr>
                                                    <td>SKU</td>
                                                    <td><?php echo $getProduct['sku']?></td>
                                                </tr>
                                                <tr>
                                                    <td>Stock Status</td>
                                                    <td><?php echo $getProduct['stock_status']?></td>
                                                </tr>
                                                <tr>
                                                    <td>Product Code</td>
                                                    <td><?php echo $getProduct['product_code']?></td>
                                                </tr>
                                                <tr>
                                                    <td>Low Stock Warning</td>
                                                    <td><?php echo $getProduct['lowStockWarning']?></td>
                                                </tr>
                                                <tr>
                                                    <td>Manage Stock</td>
                                                    <th><?php echo ucfirst($getProduct['manageStock']) ?></th>
                                                </tr>
                                                <tr>
                                                    <td>Sold Individually</td>
                                                    <th><?php echo ucfirst($getProduct['soldIndividually']) ?></th>
                                                </tr>
                                                <tr>
                                                    <td>Show Stock Quantity</td>
                                                    <th><?php echo ucfirst($getProduct['showStockQuantity']) ?></th>
                                                </tr>
                                                <tr>
                                                    <td>Show Stock with Text</td>
                                                    <th><?php echo ucfirst($getProduct['showStockWithText']) ?></th>
                                                </tr>
                                                <tr>
                                                    <td>Hide Stock</td>
                                                    <th><?php echo ucfirst($getProduct['hideStock']) ?></th>
                                                </tr>

                                            </table>    
                                            
                                        </span>
                                        
                                        <!-- <span class="user-activity-date">Monday 12 Jan 2020.</span> -->
                                    </div>
                                    <!-- <div class="right">
                                        <span class="user-activity-time">16 min ago</span>
                                    </div> -->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Images -->
        <div class="row mb-25">
            <div class="panel">
                <div class="panel-body">
                    <div class="dashboard-breadcrumb mb-25">
                        <h2>Related Images</h2>
                    </div>
                    <?php 
                    $imageGallery = json_decode($getProduct['gallery'], true);
                    $imageCount   = count($imageGallery);    
                    for ($i = 0; $i < $imageCount; $i++) {
                        if ($i % 3 === 0) {
                            // Start a new row for every three images
                            echo '<div class="row">';
                        } ?>
                        <div class="col-lg-4">
                            <div class="dashboard-top-box  panel-bg">
                                <div class="part-img overflow-hidden w-100 h-auto">
                                    <?php 
                                    $image = $imageGallery[$i];
                                    if ($image != "") { ?>
                                        <img src="./uploads/<?php echo $image ?>" alt="..." class="w-100 rounded" height="250px">
                                        <?php
                                    } else { ?>
                                        <img src="assets/images/admin.png" alt="admin" class="w-100 h-100">
                                        <?php
                                    } ?>
                                </div>
                            </div>
                        </div>
                        <?php
                        if (($i + 1) % 3 === 0 || $i === $imageCount - 1) {
                            // Close the row after every three images or for the last image
                            echo '</div>';
                        }
                    }?>
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
    <script src="assets/vendor/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>