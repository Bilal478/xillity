<?
require("./global.php");
$primaryTableName = "sites";
$cust_id = isset($_GET['id']) ? escape($_GET['id']) : '';
array(
    // field_name [type, isrequired, array_select, inner_type] <= "template"
    "site_name" => ["input", "", "", "text"],
    "phone_number" => ["input", "", "", "text"],
    "address" => ["input", "", "", "address"],
    "email" => ["input", "", "", "email"],
    "contact_name" => ["input", "", "", "text"],
    "account_status" => ["input", "", "", "text"],
    "internal_notes" => ["input", "", "", "text"],
    "file" => ["input", "", "", "file"],
    "historic_tickets" => ["input", "", "", "text"],
    "security_pin" => ["input", "", "", "text"],
);

// if (isset($_GET['id'])) {
//     $cust_id = escape($_GET['id']);
//     $query = "SELECT * FROM jeoXillityCrm_sites WHERE company_id='$cust_id'";
//     $results = getAll($con, $query);
//     $fet = mysqli_fetch_assoc($results);
// }

if (isset($_POST['create_package'])) {
    $actionId = escape($_POST['actionId']);
    $company_id = escape($_POST['company_id']);
    $site_name = escape($_POST['site_name']);
    $phone_number = escape($_POST['phone_number']);
    $address = escape($_POST['address']);
    $email = escape($_POST['email']);
    $contact_name = isset($_POST['contact_name']) ? implode(',', array_map('escape', $_POST['contact_name'])) : '';
    $account_status = escape($_POST['account_status']);
    $internal_notes = escape($_POST['internal_notes']);
    $historic_tickets = escape($_POST['historic_tickets']);
    $security_pin = escape($_POST['security_pin']);
    $timeAdded = date('Y-m-d H:i:s'); // assuming this format for timeAdded
    $session_userId = escape($_SESSION['userId']); // assuming you have session management for userId

    if ($actionId == "") {
        $id = generateRandomString();
        $actionId = $id;
        $query = "INSERT INTO jeoXillityCrm_sites 
        (id, company_id, site_name, phone_number, address, email, contact_name, account_status, internal_notes, historic_tickets, security_pin, timeAdded, userId)
        VALUES 
        ('$id', '$company_id', '$site_name', '$phone_number', '$address', '$email', '$contact_name', '$account_status', '$internal_notes', '$historic_tickets', '$security_pin', '$timeAdded', '$session_userId')";
        echo $query;
    } else {
        $query = "UPDATE jeoXillityCrm_sites 
        SET company_id='$company_id', site_name='$site_name', phone_number='$phone_number', address='$address', email='$email', contact_name='$contact_name', account_status='$account_status', internal_notes='$internal_notes', historic_tickets='$historic_tickets', security_pin='$security_pin'
        WHERE id='$actionId'";
    }

    runQuery($query);

    if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
        $file = storeFile($_FILES['file']);
        if ($file != "") {
            $query = "UPDATE jeoXillityCrm_sites SET file='$file' WHERE id='$actionId'";
            runQuery($query);
        }
    }

    header("Location: ?" . generateUrlParams_return(["m" => "Data was saved successfully!", "type" => "success"]));
    exit();
}

if (isset($_GET['delete-record'])) {
    $id = escape($_GET['delete-record']);
    $query = "delete from jeoXillityCrm_sites where id='$id'";
    runQuery($query);
}

?>

<!DOCTYPE html>
<html lang="en" data-menu="vertical" data-nav-size="nav-default">

<head><? include("./includes/views/head2.php"); ?></head>

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
            <div class="panel">
                <div class="panel-header">
                    <h5>Sites</h5>
                    <div class="btn-box d-flex flex-wrap gap-2">
                        <div id="tableSearch"></div>
                        <button class="btn btn-sm btn-icon btn-outline-primary"><i class="fa-light fa-arrows-rotate"></i></button>
                        <div class="digi-dropdown dropdown">
                            <button class="btn btn-sm btn-icon btn-outline-primary" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"><i class="fa-regular fa-ellipsis-vertical"></i></button>
                            <ul class="dropdown-menu">
                                <li class="dropdown-title">Show Table Title</li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="showName" checked>
                                        <label class="form-check-label" for="showName">Name</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="showStatus" checked>
                                        <label class="form-check-label" for="showStatus">Status</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="showStartDate" checked>
                                        <label class="form-check-label" for="showStartDate">Start Date</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="showDueDate" checked>
                                        <label class="form-check-label" for="showDueDate">Due Date</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="showAssignedTo" checked>
                                        <label class="form-check-label" for="showAssignedTo">Assigned To</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="showPriority" checked>
                                        <label class="form-check-label" for="showPriority">Priority</label>
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
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#create_record_modal"><i class="fa-light fa-plus"></i> Create Sites</button>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="table-filter-option">
                        <div class="row g-3">
                            <div class="col-xl-10 col-md-10 col-9 col-xs-12">
                                <div class="row g-3">
                                    <div class="col">
                                        <form class="row g-2">
                                            <div class="col">
                                                <select class="form-control form-control-sm" data-placeholder="Bulk action">
                                                    <option value="">Bulk action</option>
                                                    <option value="0">Move to trash</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <button class="btn btn-sm btn-primary w-100">Apply</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col">
                                        <select class="form-control form-control-sm" data-placeholder="Select Status">
                                            <option value="">Select Status</option>
                                            <option value="0">Not Started</option>
                                            <option value="1">Pending</option>
                                            <option value="2">On Hold</option>
                                            <option value="3">In Progress</option>
                                            <option value="4">Completed</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control form-control-sm table-date-range-filter" readonly>
                                    </div>
                                    <div class="col">
                                        <select class="form-control form-control-sm" data-placeholder="Select Priority">
                                            <option value="">Select Priority</option>
                                            <option value="0">Low</option>
                                            <option value="1">Medium</option>
                                            <option value="2">High</option>
                                            <option value="3">Urgent</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-sm btn-primary"><i class="fa-light fa-filter"></i> Filter</button>
                                    </div>
                                    <div class="col">
                                        <div class="digi-dropdown dropdown">
                                            <button class="btn btn-sm btn-icon btn-primary" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"><i class="fa-regular fa-plus"></i></button>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-title">Filter Options</li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="filterTaskStatus" checked>
                                                        <label class="form-check-label" for="filterTaskStatus">Task Status</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="filterDateRange" checked>
                                                        <label class="form-check-label" for="filterDateRange">Date Range</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="filterTaskPriority" checked>
                                                        <label class="form-check-label" for="filterTaskPriority">Task Priority</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-2 col-3 col-xs-12 d-flex justify-content-end">
                                <div id="employeeTableLength"></div>
                            </div>
                        </div>
                    </div>
                    <div style="overflow-x:auto; background-color: #071739; color: #112143;">
                        <table class="table table-striped table-bordered table-hover table-checkable add-search">
                            <thead>
                                <tr>
                                    <th>Sites name</th>
                                    <th>Phone number</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Contact name</th>
                                    <th>Account status</th>
                                    <th>Internal notes</th>
                                    <th>File</th>
                                    <th>Historic tickets</th>
                                    <th>Security pin</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (isset($_GET['id'])) {
                                    $id = htmlspecialchars($_GET['id']);
                                    $query = "SELECT * FROM jeoXillityCrm_sites t WHERE company_id='$id' ORDER BY t.timeAdded DESC";
                                } else {
                                    $query = "SELECT * FROM jeoXillityCrm_sites t ORDER BY t.timeAdded DESC";
                                }
                                $results = getAll($con, $query);
                                foreach ($results as $row) { ?>
                                    <tr>
                                        <td><?php echo $row['site_name'] ?></td>
                                        <td><?php echo $row['phone_number'] ?></td>
                                        <td><?php echo $row['address'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td><?php echo $row['contact_name'] ?></td>
                                        <!-- <td>
                                            <?php $assignedUsers = explode(',', $row['contact_name']);
                                            $isSingleUser = count($assignedUsers) === 1; ?>
                                            <div class="avatar-box">
                                                <?php foreach ($assignedUsers as $user) : ?>
                                                    <?php
                                                    $user = trim($user);
                                                    if ($isSingleUser) {
                                                        // $displayText = strtoupper(substr($user, 0, 4));
                                                    } else {
                                                        $displayText = strtoupper(substr($user, 0, 1));
                                                    } ?>
                                                    <div class="avatar avatar-sm bg-primary rounded-circle d-flex justify-content-center align-items-center text-white">
                                                        <span><?php echo $displayText; ?></span>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </td> -->
                                        <td><?php echo $row['account_status'] ?></td>
                                        <td><?php echo $row['internal_notes'] ?></td>
                                        <td><?php if ($row['file'] != "") { ?><a target="_blank" href="./uploads/<?php echo $row['file'] ?>" class="badge badge-primary">View</a><?php } ?></td>
                                        <td><?php echo $row['historic_tickets'] ?></td>
                                        <td><?php echo $row['security_pin'] ?></td>
                                        <td>
                                            <!-- <div class="btn-group">
                                                <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#create_record_modal" data-mydata='<?php echo htmlspecialchars(json_encode($row, JSON_UNESCAPED_UNICODE)); ?>'>Edit</a>
                                                <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete_record" data-url="?<?php echo generateUrlParams(); ?>delete-record=<?php echo $row['id'] ?>">Delete</a>
                                            </div> -->
                                            <div class="btn-box">
                                                <!-- <a href="./company_view.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-icon btn-primary">
                                                    <i class="fa-light fa-eye"></i>
                                                </a> -->
                                                <button data-mydata='<?php echo htmlspecialchars(json_encode($row, JSON_UNESCAPED_UNICODE)); ?>' class="btn btn-sm btn-icon btn-primary" data-bs-toggle="modal" data-bs-target="#create_record_modal">
                                                    <i class="fa-light fa-edit"></i>
                                                </button>
                                                <button data-toggle="modal" data-target="#delete_record" data-url="?<? echo generateUrlParams() ?>delete-record=<?php echo $row['id'] ?>" class="btn btn-sm btn-icon btn-danger"><i class="fa-light fa-trash-can"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="table-bottom-control"></div>
                </div>
            </div>
        </div>
        <!-- footer start -->
        <? include("./includes/views/footer.php"); ?>
        <!-- footer end -->
    </div>
    <!-- main content end -->

    
    <!-- add new task modal -->
    <div class="modal fade" id="create_record_modal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="addTaskModalLabel">Creat New Site</h2>
                    <button type="button" class="btn btn-sm btn-icon btn-outline-primary" data-bs-dismiss="modal" aria-label="Close"><i class="fa-light fa-times"></i></button>
                </div>
                <form method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-group d-none">
                                    <label>Company ID</label>
                                    <select name="company_id" class="form-control" placeholder="Select Company">
                                        <?php
                                        $sql = "SELECT * FROM `jeoXillityCrm_parent_company`";
                                        $run = mysqli_query($con, $sql);
                                        while ($fet = mysqli_fetch_array($run)) {
                                            $selected = ($fet['id'] == $cust_id) ? 'selected' : '';
                                            if ($fet['id'] == $_GET['id']) { ?>
                                                <option selected value="<?php echo $fet['id']; ?>" <?php echo $selected; ?>>
                                                    <?php echo $fet['id']; ?>
                                                </option>
                                        <?php
                                            }
                                        } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="addTaskName" class="form-label">Site Name</label>
                                <input type="text" name="site_name" id="addTaskName" class="form-control form-control-sm" placeholder="Site Name">
                            </div>
                            <div class="col-sm-6">
                                <label for="addTaskName" class="form-label">Phone Number</label>
                                <input type="text" name="phone_number" id="addTaskName" class="form-control form-control-sm" placeholder="Phone Number">
                            </div>
                            <div class="col-sm-6">
                                <label for="addTaskEmail" class="form-label">Email</label>
                                <input type="email" name="email" id="addTaskEmail" class="form-control form-control-sm" placeholder="Email">
                            </div>
                            <!-- <div class="col-sm-6">
                                <label class="form-label">Priority</label>
                                <select class="form-control form-control-sm" name="priority" data-placeholder="Select Priority">
                                    <option value="">Select Priority</option>
                                    <option value="low">Low</option>
                                    <option value="medium">Medium</option>
                                    <option value="high">High</option>
                                    <option value="urgent">Urgent</option>
                                </select>
                            </div> -->
                            <div class="col-sm-6">
                                <label class="form-label">Contact Name</label>
                                <select class="form-control form-control-sm select-multiple" name="contact_name[]" data-placeholder="Contact Name" multiple>
                                    <?
                                    $sql = "SELECT * FROM jeoXillityCrm_users";
                                    $run = mysqli_query($con, $sql);
                                    while ($fet = mysqli_fetch_assoc($run)) { ?>
                                        <option value="<?= $fet['name'] ?>"><?= $fet['name'] ?></option>
                                    <? } ?>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Account Status</label>
                                <select name="account_status" class="form-control form-control-sm" data-placeholder="Select Account Status">
                                    <option value="">Select Account Status</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Complete">Complete</option>
                                    <option value="In_progress">In Progress</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="addTaskAttachment" class="form-label">Attach File</label>
                                <input type="file" name="file" id="addTaskAttachment" class="form-control form-control-sm">
                            </div>
                            <div class="col-6">
                                <label class="form-label">Historic Tickets</label>
                                <select class="form-control form-control-sm select-multiple" name="historic_tickets" data-placeholder="Historic Tickets" multiple>
                                    <?
                                    $sql = "SELECT * FROM jeoXillityCrm_tickets";
                                    $run = mysqli_query($con, $sql);
                                    while ($fet = mysqli_fetch_assoc($run)) { ?>
                                        <option value="<?= $fet['name'] ?>"><?= $fet['name'] ?></option>
                                    <? } ?>
                                </select>
                            </div>
                            <!-- <div class="col-6">
                                <label class="form-label">Historic Tickets</label>
                                <select class="form-control form-control-sm select-multiple" name="historic_tickets" data-placeholder="Historic Tickets" multiple>
                                    <?
                                    $sql = "SELECT * FROM jeoXillityCrm_tickets";
                                    $run = mysqli_query($con, $sql);
                                    while ($fet = mysqli_fetch_assoc($run)) { ?>
                                        <option value="<?= $fet['start_date'] ?>"><?= $fet['start_date'] ?></option>
                                    <? } ?>
                                </select>
                            </div> -->

                            <div class="col-sm-6">
                                <label for="addTaskNumber" class="form-label">Security Pin</label>
                                <input type="number" name="security_pin" id="addTaskNumber" class="form-control form-control-sm" placeholder="Security Pin">
                            </div>
                            <div class="col-12">
                                <label for="addTaskName" class="form-label">Company Address</label>
                                <input type="text" name="address" id="addTaskName" class="form-control form-control-sm" placeholder="Company Address">
                            </div>
                            <input name="actionId" type="text" hidden>
                            <div class="col-12">
                                <label class="form-label">Internal Notes</label>
                                <textarea name="internal_notes" class="form-control editor form-control-sm"></textarea>
                                <!-- <div class="editor" name="description"></div> -->
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-sm btn-primary" name="create_package" value="Save Task">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- add new task modal -->
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
                $("input[name='company_id']").val(mydata['company_id']);
                $("input[name='site_name']").val(mydata['site_name']);
                $("input[name='phone_number']").val(mydata['phone_number']);
                $("input[name='address']").val(mydata['address']);
                $("input[name='email']").val(mydata['email']);
                $("input[name='contact_name']").val(mydata['contact_name']);
                $("input[name='account_status']").val(mydata['account_status']);
                $("input[name='internal_notes']").val(mydata['internal_notes']);
                $("input[name='historic_tickets']").val(mydata['historic_tickets']);
                $("input[name='security_pin']").val(mydata['security_pin']);
                $("input[name='actionId']").val(mydata['id']);
            } else {
                $("#modelTitle").html("Insert");
                $("input[name='company_id']").val("");
                $("input[name='site_name']").val("");
                $("input[name='phone_number']").val("");
                $("input[name='address']").val("");
                $("input[name='email']").val("");
                $("input[name='contact_name']").val("");
                $("input[name='account_status']").val("");
                $("input[name='internal_notes']").val("");
                $("input[name='historic_tickets']").val("");
                $("input[name='security_pin']").val("");
                $("input[name='actionId']").val("");
            }
        });
    });
</script>

</html>