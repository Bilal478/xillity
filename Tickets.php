<? require("./global.php");
$primaryTableName = "tickets";
if (isset($_POST['create_package'])) {
    $id = generateRandomString();
    $name = escape($_POST['name']);
    $company_name = escape($_POST['company_name']);
    $department = escape($_POST['department']);
    $site_name = escape($_POST['site_name']);
    $email = escape($_POST['email']);
    $status = escape($_POST['status']);
    $phone_number = escape($_POST['phone_number']);
    $primary_contact = escape($_POST['primary_contact']);
    $home_number = escape($_POST['home_number']);
    // $location_name = escape($_POST['location_name']);
    $start_date = escape($_POST['start_date']);
    $end_date = escape($_POST['end_date']);
    $priority = escape($_POST['priority']);
    // $repeat_every = escape($_POST['repeat_every']);
    // $assign = escape($_POST['assign']);
    $assign = isset($_POST['assign']) ? implode(',', $_POST['assign']) : '';
    // $assign = implode(',', $_POST['assign']);
    $description = escape($_POST['description']);
    $timeAdded = date('Y-m-d H:i:s');
    $session_userId = $_SESSION['userId'];
    $actionId = $_POST['actionId'];
    if ($actionId == "") {
        $id = generateRandomString();
        $actionId = $id;
        $query = "INSERT INTO jeoXillityCrm_tickets (id, name, company_name, department, site_name, email, status, phone_number, primary_contact, home_number, location_name, start_date, end_date, priority, assign, description, timeAdded, userId) VALUES 
                                                    ('$id', '$name', '$company_name', '$department', '$site_name', '$email', '$status', '$phone_number', '$primary_contact', '$home_number', '','$start_date', '$end_date', '$priority', '$assign', '$description', '$timeAdded', '$session_userId')";
    } else {
        $query = "UPDATE jeoXillityCrm_tickets SET name='$name', company_name='$company_name', department='$department', site_name='$site_name', email='$email', status='$status', phone_number='$phone_number', primary_contact='$primary_contact', home_number='$home_number',  start_date='$start_date', end_date='$end_date', priority='$priority', assign='$assign', description='$description' WHERE id='$actionId'";
    }
    runQuery($query);
    $file = storeFile($_FILES['file']);
    if ($file != "") {
        $query = "update jeoXillityCrm_tickets set file='$file' where id='$actionId'";
        runQuery($query);
    }
    header("Location: ?m=Data was saved successfully!&type=success");
    exit();
}

if (isset($_GET['delete-record'])) {
    $id = escape($_GET['delete-record']);
    $query = "delete from jeoXillityCrm_tickets where id='$id'";
    runQuery($query);
}


if (isset($_POST['site_names'])) {
    $siteName = $_POST['site_names'];
    $query = "SELECT * FROM jeoXillityCrm_sites WHERE site_name = '$siteName'";
    $results = getall($con, $query);
    $output = '';
    foreach ($results as $row) {
        $output .= '<option value="' . htmlspecialchars($row['site_name']) . '">' . htmlspecialchars($row['email']) . '</option>';
    }
    echo $output;
}


if (isset($_POST['companyId'])) {
    $companyId = $_POST['companyId'];
    $sql = "SELECT * FROM jeoXillityCrm_sites WHERE company_id = $companyId";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $companyId);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        echo '<option value="">Select Site Name</option>';
        while ($row = $result->fetch_assoc()) {
            echo '<option value="' . htmlspecialchars($row['id']) . '" data-email="' . htmlspecialchars($row['email']) . '" data-phone="' . htmlspecialchars($row['phone_number']) . '">' . htmlspecialchars($row['site_name']) . '</option>';
        }
    } else {
        echo '<option value="">No Sites Available</option>';
    }
    $stmt->close();
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
            <div class="col-12">
                <div class="panel">
                    <div class="panel-header">
                        <h5>Ticket Summary</h5>
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
                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#create_record_modal"><i class="fa-light fa-plus"></i> Create Ticket</button>
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
                        <table class="table table-dashed table-hover digi-dataTable task-table table-striped" id="taskTable">
                            <thead>
                                <tr>
                                    <th>Ticket No</th>
                                    <th>Ticket Title</th>
                                    <!-- <th>File</th> -->
                                    <th>Department</th>
                                    <th>Description</th>
                                    <th>Start date</th>
                                    <th>Due date</th>
                                    <th>Company Name</th>
                                    <th>Assign To</th>
                                    <th>Priority</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $query = "select * from jeoXillityCrm_tickets t order by t.timeAdded desc";
                                $results = getAll($con, $query);
                                foreach ($results as $row) {
                                    $status = strtolower($row['status']);
                                    $statuscolor = ($status == 'pending') ? 'danger' : ($status == 'complete' ? 'success' : ($status == 'in-progress' ? 'primary' : ''));
                                ?>
                                    <tr>
                                        <td><?php echo $row['id'] ?></td>
                                        <td><?php echo $row['name'] ?></td>
                                        <!-- <td><?php if ($row['file'] != "") { ?><a target="_blank" href="./uploads/<?php echo $row['file'] ?>" class="badge badge-primary">View</a><?php } ?></td> -->
                                        <td><?php echo $row['department'] ?></td>
                                        <td><?php echo substr($row['description'], 0, 60) . (strlen($row['description']) > 60 ? '...' : ''); ?></td>
                                        <td><?php echo $row['start_date'] ?></td>
                                        <td><?= isset($row['end_date']) && !empty($row['end_date']) ? $row['end_date'] : "No Due Date" ?></td>
                                        <td><?php $id = $row['company_name'];
                                            $query = "SELECT site_name FROM jeoXillityCrm_parent_company WHERE Id = '$id' ";

                                            // Execute the query and get the result
                                            $result = getOne($con, $query);
                                            echo $result ?></td>
                                        <!-- <td><?php echo $row['assign'] ?></td> -->
                                        <!-- <td>
                                            <?php
                                            $assignedUsers = explode(',', $row['assign']);
                                            foreach ($assignedUsers as $user) {
                                                echo $user . '<br>';
                                            }
                                            ?>
                                        </td> -->
                                        <td>
                                            <?php $assignedUsers = explode(',', $row['assign']);
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
                                        </td>

                                        <!-- <td><?php echo $row['end_date'] ?></td> -->
                                        <td><select id="prioritySelect" data-taskId="<?= $row['id'] ?>" class="form-control form-control-sm">
                                                <?php
                                                $options = array(
                                                    "Low" => "Low",
                                                    "Medium" => "Medium",
                                                    "High" => "High",
                                                    "Urgent" => "Urgent"
                                                );
                                                $task_priority = $row['priority'];
                                                foreach ($options as $value => $label) {
                                                    $selected = ($value == $task_priority) ? 'selected' : '';
                                                    echo '<option value="' . $value . '" ' . $selected . '>' . $label . '</option>';
                                                }
                                                ?>
                                            </select></td>
                                        <!-- <td><?php echo $row['priority'] ?></td> -->
                                        <td><span class="badge badge-<?php echo $statuscolor ?>"><?php echo ucfirst($row['status']) ?></span></td>
                                        <!-- <td><?php echo $row['status'] ?></td> -->
                                        <td>
                                            <!-- <div class="btn-group">
                                                <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#create_record_modal" data-mydata='<?php echo  htmlspecialchars(json_encode($row, JSON_UNESCAPED_UNICODE)); ?>'>Edit</a>
                                                <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete_record" data-url="?<? echo generateUrlParams() ?>delete-record=<?php echo $row['id'] ?>">Delete</a>
                                            </div> -->
                                            <div class="btn-box">
                                                <a href="./tickets_view.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-icon btn-primary">
                                                    <i class="fa-light fa-eye"></i>
                                                </a>
                                                <!-- <button data-mydata='<?php echo htmlspecialchars(json_encode($row, JSON_UNESCAPED_UNICODE)); ?>' class="btn btn-sm btn-icon btn-primary" data-bs-toggle="modal" data-bs-target="#create_record_modal">
                                                    <i class="fa-light fa-edit"></i>
                                                </button> -->
                                                <button data-toggle="modal" data-target="#delete_record" data-url="?<? echo generateUrlParams() ?>delete-record=<?php echo $row['id'] ?>" class="btn btn-sm btn-icon btn-danger"><i class="fa-light fa-trash-can"></i></button>
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

    <!-- add new task modal -->
    <div class="modal fade" id="create_record_modal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="addTaskModalLabel">Creat New Ticket</h2>
                    <button type="button" class="btn btn-sm btn-icon btn-outline-primary" data-bs-dismiss="modal" aria-label="Close"><i class="fa-light fa-times"></i></button>
                </div>
                <form method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="addTaskName" class="form-label">Ticket Title</label>
                                <input type="text" name="name" id="addTaskName" class="form-control form-control-sm" placeholder="Ticket Name">
                            </div>
                            <!-- <div class="col-4 offset-1">
                                <label for="addTaskName" class="form-label">Company Name</label>
                                <select name="site_name" id="site_name" class="form-control form-control-sm" data-placeholder="Select Company Name">
                                    <option value="">Select Company Name</option>
                                    <?
                                    $sql = "SELECT * FROM jeoXillityCrm_parent_company";
                                    $run = mysqli_query($con, $sql);
                                    while ($fet = mysqli_fetch_assoc($run)) { ?>
                                        <option value="<?= $fet['site_name'] ?>"><?= $fet['site_name'] ?></option>
                                    <? } ?>
                                </select>
                            </div> -->
                            <div class="col-4 offset-1">
                                <label for="addTaskName" class="form-label">Company Name</label>
                                <select name="company_name" id="companySelect" class="form-control form-control-sm" data-placeholder="Select Company Name">
                                    <option value="">Select Company Name</option>
                                    <?php
                                    $sql = "SELECT * FROM jeoXillityCrm_parent_company";
                                    $run = mysqli_query($con, $sql);
                                    while ($fet = mysqli_fetch_assoc($run)) { ?>
                                        <option value="<?= htmlspecialchars($fet['id']) ?>"><?= htmlspecialchars($fet['site_name']) ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-sm-6 offset-1">
                                <label class="form-label">Department</label>
                                <select name="department" class="form-control form-control-sm" data-placeholder="Select Department">
                                    <option value="">Select Department</option>
                                    <option value="Bus">Bus</option>
                                    <option value="Airplane">Airplane</option>
                                    <option value="Taxi">Taxi</option>
                                    <option value="Subway">Subway</option>
                                </select>
                            </div>
                            <div class="col-4 offset-1">
                                <label for="sitesSelect" class="form-label">Site Name</label>
                                <select name="site_name" id="sitesSelect" class="form-control form-control-sm" data-placeholder="Select Site Name">
                                    <option value="">Select Site Name</option>
                                    <?php
                                    $sql = "SELECT * FROM jeoXillityCrm_sites";
                                    $run = mysqli_query($con, $sql);
                                    if ($run) {
                                        while ($fet = mysqli_fetch_assoc($run)) { ?>
                                            <option value="<?= htmlspecialchars($fet['id']) ?>" data-email="<?= htmlspecialchars($fet['email']) ?>" data-phone="<?= htmlspecialchars($fet['phone_number']) ?>">
                                                <?= htmlspecialchars($fet['site_name']) ?>
                                            </option>
                                    <?php }
                                    } else {
                                        echo "<option value=''>Error fetching sites</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <!-- <div class="col-4 offset-1">
                                <label for="sitesSelect" class="form-label">Site Name</label>
                                <select name="site_name" id="sitesSelect" class="form-control form-control-sm" data-placeholder="Select Site Name">
                                    <option value="">Select Site Name</option>
                                    <?php
                                    $sql = "SELECT * FROM jeoXillityCrm_sites";
                                    $run = mysqli_query($con, $sql);
                                    if ($run) {
                                        while ($fet = mysqli_fetch_assoc($run)) { ?>
                                            <option value="<?= htmlspecialchars($fet['site_name']) ?>" data-email="<?= htmlspecialchars($fet['email']) ?>" data-phone="<?= htmlspecialchars($fet['phone_number']) ?>">
                                                <?= htmlspecialchars($fet['site_name']) ?>
                                            </option>
                                    <?php }
                                    } else {
                                        echo "<option value=''>Error fetching sites</option>";
                                    }
                                    ?>
                                </select>
                            </div> -->
                            <div class="col-sm-6 offset-1">
                                <label class="form-label">Priority</label>
                                <select name="priority" class="form-control form-control-sm" data-placeholder="Select Priority">
                                    <option value="">Select Priority</option>
                                    <option value="Low">Low</option>
                                    <option value="Medium">Medium</option>
                                    <option value="High">High</option>
                                    <option value="Urgent">Urgent</option>
                                </select>
                            </div>
                            <!-- <div class="col-4 offset-1">
                                <label for="emailSelect" class="form-label">Email</label>
                                <input type="email" name="email" id="emailSelect" class="form-control form-control-sm" placeholder="Email">
                            </div> -->
                            <div class="col-4 offset-1">
                                <label for="emailSelect" class="form-label">Email</label>
                                <input type="email" name="email" id="emailSelect" class="form-control form-control-sm" placeholder="Email" readonly>
                            </div>
                            <div class="col-sm-6 offset-1">
                                <label class="form-label">Ticket Status</label>
                                <select name="status" class="form-control form-control-sm" data-placeholder="Select Ticket Status">
                                    <option value="">Select Ticket Status</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Complete">Complete</option>
                                    <option value="In_progress">In Progress</option>
                                </select>
                            </div>
                            <!-- <div class="col-4 offset-1">
                                <label for="phoneSelect" class="form-label">Phone Number</label>
                                <input type="text" name="phone_number" id="phoneSelect" class="form-control form-control-sm" placeholder="Phone Number">
                            </div> -->
                            <div class="col-4 offset-1">
                                <label for="phoneSelect" class="form-label">Phone Number</label>
                                <input type="text" name="phone_number" id="phoneSelect" class="form-control form-control-sm" placeholder="Phone Number" readonly>
                            </div>
                            <div class="col-sm-3 offset-1">
                                <label for="primary_contact" class="form-label">Primary Contact</label>
                                <input type="text" name="primary_contact" id="primary_contact" class="form-control form-control-sm" placeholder="Primary Contact">
                            </div>
                            <div class="col-sm-3">
                                <label for="home_number" class="form-label">Home Number</label>
                                <input type="text" name="home_number" id="home_number" class="form-control form-control-sm" placeholder="Home Number">
                            </div>
                            <!-- <div class="col-sm-4">
                                <label for="addTaskName" class="form-label">Location Name</label>
                                <input type="text" name="location_name" id="addTaskName" class="form-control form-control-sm" placeholder="Location Name">
                            </div> -->
                            <div class="col-sm-4">
                                <label for="addTaskStartDate" class="form-label">Start Date</label>
                                <input type="text" name="start_date" id="addTaskStartDate" class="form-control form-control-sm date-picker" placeholder="Eg: 12 Feb, 20" readonly>
                            </div>
                            <div class="col-sm-4">
                                <label for="addTaskEndDate" class="form-label">End Date</label>
                                <input type="text" name="end_date" id="addTaskEndDate" class="form-control form-control-sm date-picker" placeholder="Eg: 12 Feb, 20" readonly>
                            </div>
                            <div class="col-12">
                                <label for="addTaskAttachment" class="form-label">Attach File</label>
                                <input type="file" name="file" id="addTaskAttachment" class="form-control form-control-sm">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Assign To</label>
                                <select class="form-control form-control-sm select-multiple" name="assign[]" data-placeholder="Eg: Natasha Hancock" multiple>
                                    <?
                                    $sql = "SELECT * FROM jeoXillityCrm_users";
                                    $run = mysqli_query($con, $sql);
                                    while ($fet = mysqli_fetch_assoc($run)) { ?>
                                        <option value="<?= $fet['name'] ?>"><?= $fet['name'] ?></option>
                                    <? } ?>
                                </select>
                            </div>

                            <input name="actionId" type="text" hidden value="<?php echo $row['id']; ?>">
                            <!-- <div class="col-12">
                                <label class="form-label">Assign To</label>
                                <select class="form-control form-control-sm select-multiple" name="assign" data-placeholder="Eg: Natasha Hancock" multiple>
                                    <?
                                    $result = getAll($con, "select * from jeoXillityCrm_users");
                                    foreach ($result as $assign) { ?>
                                        <option value="<?= $assign['id'] ?>"><?= $assign['name'] ?></option>
                                    <? } ?>
                                </select>
                            </div> -->
                            <div class="col-12">
                                <label class="form-label">Tickets Description</label>
                                <textarea name="description" class="form-control editor form-control-sm"></textarea>
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
    <!-- edit task modal -->
    <!-- <div class="modal fade" id="editTaskModal" tabindex="-1" aria-labelledby="editTaskModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="editTaskModalLabel">Edit Task</h2>
                    <button type="button" class="btn btn-sm btn-icon btn-outline-primary" data-bs-dismiss="modal" aria-label="Close"><i class="fa-light fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="editTaskName" class="form-label">Ticket No.</label>
                                <input type="text" id="editTaskName" name="name" class="form-control form-control-sm" placeholder="Task Name" value="<? echo $row['name'] ?>">
                            </div>
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="editTaskName" class="form-label">Location</label>
                                    <input type="text" id="editTaskName" name="name" class="form-control form-control-sm" placeholder="Task Name" value="<? echo $row['name'] ?>">
                                </div>
                                <div class="col-12">
                                    <label for="editTaskAttchment" class="form-label">Attach File</label>
                                    <input type="file" id="editTaskAttchment" class="form-control form-control-sm" multiple>
                                </div>
                                <div class="col-sm-6">
                                    <label for="editTaskStartDate" class="form-label">Start Date</label>
                                    <input type="text" id="editTaskStartDate" name="start_date" class="form-control form-control-sm date-picker" placeholder="Eg: 12 Feb, 20" value="<? echo $row['name'] ?>" readonly>
                                </div>
                                <div class="col-sm-6">
                                    <label for="editTaskEndDate" class="form-label">End Date</label>
                                    <input type="text" id="editTaskEndDate" name="end_date" class="form-control form-control-sm date-picker" placeholder="Eg: 12 Feb, 20" value="<? echo $row['name'] ?>" readonly>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Priority</label>
                                    <select class="form-control form-control-sm" name="priority" data-placeholder="Select Priority" value="<? echo $row['priority'] ?>">
                                        <option value="">Select Priority</option>
                                        <option value="low">Low</option>
                                        <option value="medium" selected>Medium</option>
                                        <option value="high">High</option>
                                        <option value="urgent">Urgent</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Repeat every</label>
                                    <select class="form-control form-control-sm" name="repeat_every" data-placeholder="Select Time" value="<? echo $row['repeat_every'] ?>">
                                        <option value="">Select Time</option>
                                        <option value="week">Week</option>
                                        <option value="2week" selected>2 Weeks</option>
                                        <option value="month">1 Month</option>
                                        <option value="2months">2 Months</option>
                                        <option value="3months">3 Months</option>
                                        <option value="6months">6 Months</option>
                                        <option value="year">1 Year</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Assign To</label>
                                    <select class="form-control form-control-sm select-multiple" name="assign" data-placeholder="Eg: Natasha Hancock" multiple>
                                        <?
                                        $sql = "SELECT * FROM jeoXillityCrm_users";
                                        $run = mysqli_query($con, $sql);
                                        while ($fet = mysqli_fetch_assoc($run)) { ?>
                                            <option value="<?= $fet['name'] ?>"><?= $fet['name'] ?></option>
                                        <? } ?>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Task Description</label>
                                    <textarea name="description" class="form-control editor form-control-sm" value="<? echo $row['description'] ?>"><? echo $row['description'] ?></textarea>
                                </div>
                            </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-primary">Save Changes</button>
                </div>
            </div>
        </div>
    </div> -->
    <!-- edit task modal -->

    <!-- view task modal -->
    <div class="modal fade" id="viewTaskModal" tabindex="-1" aria-labelledby="viewTaskModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="viewTaskModalLabel">Web Design & Development</h1>
                    <div class="btn-box d-flex gap-3">
                        <button class="btn-flush text-info"><i class="fa-light fa-edit"></i></button>
                        <button class="btn-flush text-danger"><i class="fa-light fa-trash-can"></i></button>
                        <button type="button" class="btn btn-sm btn-icon btn-outline-primary" data-bs-dismiss="modal" aria-label="Close"><i class="fa-light fa-times"></i></button>
                    </div>
                </div>
                <div class="modal-body view-task">
                    <div class="row g-3">
                        <div class="col-lg-8 col-md-7">
                            <span class="task-created"><i class="fa-light fa-clock"></i> Created at 16/02/2023 03:20:50 by <a href="view-profile.php">Admin</a></span>
                            <div class="task-dscr">
                                <h6 class="dscr-title">Description</h6>
                                <p>Et quo odio aut aut natus facere consequatur eius. Eos non enim repudiandae voluptatem. Animi libero illo tempora. Id ut autem quis omnis fuga. Enim est reiciendis et. Ipsam autem maxime culpa quos. Velit reiciendis eos saepe. Nemo ut officiis dolores sequi error cum eum facilis. Praesentium porro porro ipsa nihil ipsum rerum sint. Sit omnis consequatur consequatur voluptates ipsa. Quam in occaecati alias sapiente voluptas eveniet. Consequuntur non deserunt exercitationem amet.</p>
                                <h6 class="dscr-title">Attachment</h6>
                                <div class="task-attachment">
                                    <div class="attched-box">
                                        <img src="assets/images/product-img-1.jpg" alt="Image">
                                    </div>
                                    <button class="btn btn-sm btn-primary w-100">Download All (1)</button>
                                </div>
                            </div>
                            <div class="comments">
                                <h6>Comments</h6>
                                <div class="add-a-comment">
                                    <textarea class="form-control form-control-sm mb-15" rows="3" placeholder="Add a comment here..."></textarea>
                                    <div class="btn-box d-flex justify-content-end">
                                        <button class="btn btn-sm btn-primary">Submit</button>
                                    </div>
                                </div>
                                <div class="single-comment">
                                    <button class="btn-flush text-danger comment-delete"><i class="fa-light fa-trash-can"></i></button>
                                    <div class="avatar">
                                        <img src="assets/images/admin.png" alt="Image">
                                    </div>
                                    <div class="part-txt">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat laborum, minus iste nam deleniti enim eveniet illum tempore hic non quam id voluptates veniam ullam inventore autem odit, recusandae earum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <div class="task-info-box">
                                <h6>Task Info:</h6>
                                <ul>
                                    <li><span class="part-icon"><i class="fa-light fa-calendar"></i></span> Start Date: 12 Feb, 2023</li>
                                    <li><span class="part-icon"><i class="fa-light fa-calendar-check"></i></span> End Date: 12 Mar, 2023</li>
                                    <li><span class="part-icon"><i class="fa-light fa-star"></i></span> Status: <span class="badge bg-primary p-1 rounded">Not Started</span></li>
                                    <li><span class="part-icon"><i class="fa-light fa-bolt"></i></span> Priority: <span class="badge bg-success p-1 rounded">Low</span></li>
                                </ul>
                            </div>
                            <div class="task-info-box">
                                <h6>Assigned To</h6>
                                <ul>
                                    <li>Harrison French</li>
                                    <li>Isabel Mellor</li>
                                    <li>Adam Bates</li>
                                    <li>Kai Barker</li>
                                </ul>
                            </div>
                            <div class="task-info-box">
                                <h6>Reminders</h6>
                                <ul>
                                    <li>2 Weeks</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- view task modal -->
    <? include("./includes/views/footerjs.php"); ?>
</body>

<script>
    $(document).ready(function() {
        $("#companySelect").on("change", function() {
            var companyId = $(this).val();
            if (companyId) {
                $.ajax({
                    url: "fetch_sites.php",
                    method: "POST",
                    data: {
                        companyId: companyId
                    },
                    success: function(data) {
                        $("#sitesSelect").html(data);
                        $('#emailSelect').val('');
                        $('#phoneSelect').val('');
                    }
                });
            } else {
                $("#sitesSelect").html('<option value="">Select Site Name</option>');
                $('#emailSelect').val('');
                $('#phoneSelect').val('');
            }
        });

        $("#sitesSelect").on("change", function() {
            var selectedOption = $(this).find('option:selected');
            var email = selectedOption.data('email');
            var phone = selectedOption.data('phone');
            $('#emailSelect').val(email);
            $('#phoneSelect').val(phone);
        });
    });

    // $(document).ready(function() {
    //     $("#sitesSelect").on("change", function() {
    //         var selectedOption = $(this).find('option:selected');

    //         // Get the data-email and data-phone values
    //         var email = selectedOption.data('email');
    //         var phone = selectedOption.data('phone');
    //         console.log('email: ' + email);
    //         console.log('phone: ' + phone);

    //         // Update the HTML elements with the values
    //         $('#emailSelect').val(email);
    //         $('#phoneSelect').val(phone);
    //     });
    // });
</script>

<script>
    $(document).ready(function() {
        $("#create_record_modal").on('show.bs.modal', function(e) {
            var mydata = $(e.relatedTarget).data('mydata');
            console.log("mydata->", mydata);
            $("input[type='checkbox']").prop('checked', false);
            if (mydata != null) {
                $("#modelTitle").html("Update");
                $("input[name='name']").val(mydata['name'])
                $("input[name='company_name']").val(mydata['company_name'])
                $("input[name='department']").val(mydata['department'])
                $("input[name='site_name']").val(mydata['site_name'])
                $("input[name='email']").val(mydata['email'])
                $("input[name='status']").val(mydata['status'])
                $("input[name='phone_number']").val(mydata['phone_number'])
                $("input[name='primary_contact']").val(mydata['primary_contact'])
                $("input[name='home_number']").val(mydata['home_number'])
                // $("input[name='location_name']").val(mydata['location_name'])
                $("input[name='start_date']").val(mydata['start_date'])
                $("input[name='end_date']").val(mydata['end_date'])
                $("input[name='priority']").val(mydata['priority'])
                $("input[name='repeat_every']").val(mydata['repeat_every'])
                $("input[name='assign']").val(mydata['assign'])
                $("input[name='description']").val(mydata['description'])
                $("input[name='actionId']").val(mydata['id'])
            } else {
                $("#modelTitle").html("Insert");
                $("input[name='name']").val("")
                $("input[name='company_name']").val("")
                $("input[name='department']").val("")
                $("input[name='site_name']").val("")
                $("input[name='email']").val("")
                $("input[name='status']").val("")
                $("input[name='phone_number']").val("")
                $("input[name='primary_contact']").val("")
                $("input[name='home_number']").val("")
                // $("input[name='location_name']").val("")
                $("input[name='start_date']").val("")
                $("input[name='end_date']").val("")
                $("input[name='priority']").val("")
                $("input[name='repeat_every']").val("")
                $("input[name='assign']").val("")
                $("input[name='description']").val("")
                $("input[name='actionId']").val("")
            }
        });
    });
</script>

</html>