<? require("./global.php");

$primaryTableName = "permissions";
$employee_id = $_GET['employee_id'] ?? '';
// if (empty($employee_id)) {
//     die("Invalid or missing employee ID.");
// }
$getCustomersFromDB = getAll($con, "SELECT * FROM " . $g_projectSlug . "_users where role='employee'");
$customerArr = [];
foreach ($getCustomersFromDB as $k => $v) {
    $customerArr[$v['id']] = $v;
}

if($customerArr[$employee_id]['id']==""){header("Location: ./employees.php?m=Employee not Found!");}
$arrayFields_crud_customer_employees = array(
    "customerId" => ["select", "required", $customerArr, "text"],
    "role" => ["input", "required", "", "text"],
    "employeeId" => ["input", "required hidden value='$employee_id'", "", "text"],
);

if (isset($_POST['create_package'])) {
    $permissions = $_POST['permissions'];
    $timeAdded = time();
    $query = "DELETE FROM " . $g_projectSlug . "_permissions WHERE authorized_user='$employee_id'";
    $stmt = $con->prepare($query);
    if (!$stmt) {
        echo "err: <code>$query</code>";
    }
    if (!$stmt->execute()) {
        echo "err: <code>$query</code>";
    }
    foreach ($permissions as $permission) {
        $id = generateRandomString();
        $query = "insert into " . $g_projectSlug . "_permissions set id='$id', authorized_user='$employee_id', module='$permission', timeAdded='$timeAdded', userId='$session_id' ";
        $stmt = $con->prepare($query);
        if (!$stmt) {
            echo "err: <code>$query</code>";
        }
        if (!$stmt->execute()) {
            echo "err: <code>$query</code>";
        }
    }
        header("Location: ?employee_id=" . $employee_id . "&m=Data was saved successfully!");
}

if (isset($_GET['delete-record'])) {
    $id = mb_htmlentities($_GET['delete-record']);
    if ($id != "admin") {
        $stmt = $con->prepare("delete from " . $g_projectSlug . "_customer_employee where id=?");
        $stmt->bind_param("s", $id);
        if (!$stmt->execute()) {
            echo "err";
        }
    }
} 

$currentPermissions=[];

$all_permissions = getAll($con, "SELECT * FROM " . $g_projectSlug . "_permissions WHERE authorized_user='$employee_id'");
foreach ($all_permissions as $key => $value) {
    $currentPermissions[] = $value['module'];
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

                        <h5>Permissions</h5>

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

                            <!-- <a href="" class="btn btn-sm btn-primary"><i class="fa-light fa-plus"></i>Update</a> -->

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

                        <form action="" method="post">
                            <button class="btn btn-brand btn-elevate btn-icon-sm" id="mybutton" name="create_package" value="Submit">
                                <i class="la la-plus"></i>Update
                            </button>
                            <div class="kt-portlet__body">
                                <table class="table table-striped- table-bordered table-hover table-checkable add-search" id="kt_table_1">
                                    <thead>
                                        <tr>
                                            <th>Modules</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($employeeMenuItems as $menuItem) {
                                            $module = $menuItem[1]; // Assuming the second item in each array is the module name
                                            $isChecked = in_array($menuItem[0], $currentPermissions) ? "checked" : ""; ?>
                                            <tr>
                                                <td><?php echo $module; ?></td>
                                                <td><input type="checkbox" name="permissions[]" value="<?php echo $menuItem[0]; ?>" <?php echo $isChecked; ?>> Enable</td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </form><!--end: Datatable -->

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