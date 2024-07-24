<? require("./global.php");

if (isset($_GET['delete-product'])) {
    $id = escape($_GET['delete-product']);
    mysqli_query($con, "delete from jeoXillityCrm_products where id='$id'");

    header("Location:all-product.php?m=Data Deleted");
    // exit();
}

$getData = getAll($con, "SELECT * FROM " . $g_projectSlug . "_category");
$myIndexedArray = [];
foreach ($getData as $k => $v) {
    $myIndexedArray[$v['id']] = ucfirst($v['category_name']);
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
                        <h5>All Products</h5>
                        <div class="btn-box d-flex flex-wrap gap-2">
                            <div id="tableSearch"></div>
                            <div class="btn-box">
                                <a href="add-product.php" class="btn btn-sm btn-primary"><i class="fa-light fa-plus"></i> Add New</a>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="table-filter-option">
                            <div class="row g-3">
                                <div class="col-xl-10 col-9 col-xs-12">
                                    <div class="row d-none g-3">

                                        <div class="col">
                                            <form class="row g-2">
                                                <div class="col">
                                                    <select class="form-control form-control-sm" data-placeholder="Bulk action">
                                                        <option value="">Bulk action</option>
                                                        <option value="0">Edit</option>
                                                        <option value="1">Move To Trash</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <button class="btn btn-sm btn-primary w-100">Apply</button>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="col">
                                            <select class="form-control form-control-sm">
                                                <option value="0">All Category</option>
                                                <option value="1">Cloth</option>
                                                <option value="2">Fashion</option>
                                                <option value="3">Bag</option>
                                                <option value="4">Food</option>
                                                <option value="5">Medicine</option>
                                                <option value="6">Watch</option>
                                                <option value="7">Smart Phone</option>
                                            </select>
                                        </div>

                                        <div class="col">
                                            <select class="form-control form-control-sm">
                                                <option value="0">All Product Type</option>
                                                <option value="1">Downloadable</option>
                                                <option value="2">Virtual</option>
                                            </select>
                                        </div>

                                        <div class="col">
                                            <select class="form-control form-control-sm">
                                                <option value="0">All Product Stock</option>
                                                <option value="1">In stock</option>
                                                <option value="2">Out of stock</option>
                                                <option value="3">On backorder</option>
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
                                                            <input class="form-check-input" type="checkbox" id="filterCategory" checked>
                                                            <label class="form-check-label" for="filterCategory">
                                                                Category
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="filterProductType" checked>
                                                            <label class="form-check-label" for="filterProductType">
                                                                Product Type
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="filterStock" checked>
                                                            <label class="form-check-label" for="filterStock">
                                                                Stock
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
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
                                    <th class="no-sort">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="markAllProduct" />
                                        </div>
                                    </th>
                                    <th>Title</th>
                                    <th>Sku</th>
                                    <th>Stock</th>
                                    <th>Price</th>
                                    <th>Sales</th>
                                    <th>Rating</th>
                                    <th>Published</th>
                                    <th>Action</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = getAll($con, "select * from jeoXillityCrm_products order by timeAdded desc");
                                foreach ($query as $row) { ?>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-product-card">
                                                <div class="part-img">
                                                    <img src="uploads/<?php echo trim($row['thumbnail']); ?>" alt="Image" width="65px" Height="65px">
                                                </div>
                                                <div class="part-txt">
                                                    <span class="product-name"><?php echo $row['title'] ?></span>
                                                    <span class="product-category">
                                                        <?php
                                                        $categoryIds = str_replace(array('[', ']', '"'), '', $row['category']);
                                                        $categoryIds = explode(',', $categoryIds);
                                                        $categories = [];
                                                        foreach ($categoryIds as $categoryId) {
                                                            $categoryQuery = getAll($con, "select * from jeoXillityCrm_category where id='$categoryId'");
                                                            foreach ($categoryQuery as $category_row) {
                                                                $categories[] = $category_row['main_category'];
                                                            }
                                                        }
                                                        echo implode(', ', $categories);
                                                        ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td> <?php echo $row['sku'] ?> </td>
                                        <td> <?php echo $row['stock_status'] ?> </td>
                                        <td> <?php echo $row['regularPrice'] ?> </td>
                                        <td> <?php echo $row['discount'] ?> </td>

                                        <td>
                                            <div class="rating">
                                                <div class="star">
                                                    <i class="fas fa-solid fa-star starred"></i>
                                                    <i class="fas fa-solid fa-star starred"></i>
                                                    <i class="fas  fa-solid fa-star starred"></i>
                                                    <i class="fas fa-solid fa-star starred"></i>
                                                    <i class="fas fa-solid fa-star"></i>
                                                </div>
                                                <div class="rating-amount">(380)</div>
                                            </div>
                                        </td>
                                        <td>
                                            <?php $timeAdded = $row['timeAdded'];
                                            echo $newDate = date('d/m/Y h:i:s A', $timeAdded); ?>
                                        </td>

                                        <td>
                                            <div class="btn-box">
                                                <a href="view_product.php?id=<?php echo $row['id'] ?>">
                                                    <button><i class="fa-light fa-eye"></i></button>
                                                </a>

                                                <a href="add-product.php?id=<?php echo $row['id'] ?>">
                                                    <button><i class="fa-light fa-pen"></i></button>
                                                </a>
                                                <!-- <button><i class="fa-light fa-trash"></i></button> -->
                                                <!-- <a href="#" class="fa-light fa-trash" data-toggle="modal" data-target="#delete_record" data-url="?<? echo generateUrlParams() ?>delete-product=<?php echo $row['id'] ?>"></a> -->
                                            </div>
                                        </td>

                                        <td>
                                            <div class="btn-box">

                                                <a href="#" class="fa-light fa-trash" data-toggle="modal" data-target="#delete_record" data-url="?<? echo generateUrlParams() ?>delete-product=<?php echo $row['id'] ?>"></a>
                                            </div>
                                        </td>
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