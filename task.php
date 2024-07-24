<?php 
require("./global.php");
if(isset($_POST['create_package'])){
    $id = generateRandomString();
    $users = implode(',', $_POST['assignTo']);
    $name = $_POST['name'];
    $description = $_POST['description'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $priority = $_POST['priority'];
    $repeatedTime = $_POST['repeatedTime'];
    $timeAdded = time();
    $actionId = $_POST['actionId'];
    if(isset($actionId)){
        $query = "delete from jeoXillityCrm_tasks where id = '$actionId'";
        runQuery($query);
        $query = "INSERT INTO jeoXillityCrm_tasks (id, assignedTo, name, description, start_date, end_date, priority, repeatedTime, timeAdded) 
              VALUES ('$id', '$users', '$name', '$description', '$start_date', '$end_date', '$priority', '$repeatedTime', '$timeAdded')";
    }else{
        $query = "INSERT INTO jeoXillityCrm_tasks (id, assignedTo, name, description, start_date, end_date, priority, repeatedTime, timeAdded) 
              VALUES ('$id', '$users', '$name', '$description', '$start_date', '$end_date', '$priority', '$repeatedTime', '$timeAdded')";
    }
    runQuery($query);
    header("Location: ?" . generateUrlParams_return(["m" => "Data was saved successfully!", "type" => "success"]));
}

if(isset($_GET['delete-record'])){
    $id = escape($_GET['delete-record']);
    $query = "delete from jeoXillityCrm_tasks where id='$id'";
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
        <div class="col-12">
            <div class="panel">
                <div class="panel-header">
                    <h5>Task Summary</h5>
                    <div class="btn-box d-flex flex-wrap gap-2">
                        <div id="tableSearch"></div>
                        <button class="btn btn-sm btn-icon btn-outline-primary"><i
                                class="fa-light fa-arrows-rotate"></i></button>
                        <div class="digi-dropdown dropdown">
                            <button class="btn btn-sm btn-icon btn-outline-primary" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside" aria-expanded="false"><i
                                    class="fa-regular fa-ellipsis-vertical"></i></button>
                            <ul class="dropdown-menu">
                                <li class="dropdown-title">Show Table Title</li>
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

                                        <input class="form-check-input" type="checkbox" id="showStatus" checked>

                                        <label class="form-check-label" for="showStatus">

                                            Status

                                        </label>

                                    </div>

                                </li>

                                <li>

                                    <div class="form-check">

                                        <input class="form-check-input" type="checkbox" id="showStartDate" checked>

                                        <label class="form-check-label" for="showStartDate">

                                            Start Date

                                        </label>

                                    </div>

                                </li>

                                <li>

                                    <div class="form-check">

                                        <input class="form-check-input" type="checkbox" id="showDueDate" checked>

                                        <label class="form-check-label" for="showDueDate">

                                            Due Date

                                        </label>

                                    </div>

                                </li>

                                <li>

                                    <div class="form-check">

                                        <input class="form-check-input" type="checkbox" id="showAssignedTo" checked>

                                        <label class="form-check-label" for="showAssignedTo">

                                            Assigned To

                                        </label>

                                    </div>

                                </li>

                                <li>

                                    <div class="form-check">

                                        <input class="form-check-input" type="checkbox" id="showPriority" checked>

                                        <label class="form-check-label" for="showPriority">

                                            Priority

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

                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addTaskModal"><i
                                class="fa-light fa-plus"></i> Add New
                        </button>

                    </div>

                </div>

                <div class="panel-body">

                    <div class="d-none table-filter-option">

                        <div class="row g-3">

                            <div class="col-xl-10 col-md-10 col-9 col-xs-12">

                                <div class="row g-3">

                                    <div class="col">

                                        <form class="row g-2">

                                            <div class="col">

                                                <select class="form-control form-control-sm"
                                                        data-placeholder="Bulk action">

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

                                        <input type="text" class="form-control form-control-sm table-date-range-filter"
                                               readonly>

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

                                        <button class="btn btn-sm btn-primary"><i class="fa-light fa-filter"></i> Filter
                                        </button>

                                    </div>

                                    <div class="col">

                                        <div class="digi-dropdown dropdown">

                                            <button class="btn btn-sm btn-icon btn-primary" data-bs-toggle="dropdown"
                                                    data-bs-auto-close="outside" aria-expanded="false"><i
                                                    class="fa-regular fa-plus"></i></button>

                                            <ul class="dropdown-menu">

                                                <li class="dropdown-title">Filter Options</li>

                                                <li>

                                                    <div class="form-check">

                                                        <input class="form-check-input" type="checkbox"
                                                               id="filterTaskStatus" checked>

                                                        <label class="form-check-label" for="filterTaskStatus">

                                                            Task Status

                                                        </label>

                                                    </div>

                                                </li>

                                                <li>

                                                    <div class="form-check">

                                                        <input class="form-check-input" type="checkbox"
                                                               id="filterDateRange" checked>

                                                        <label class="form-check-label" for="filterDateRange">

                                                            Date Range

                                                        </label>

                                                    </div>

                                                </li>

                                                <li>

                                                    <div class="form-check">

                                                        <input class="form-check-input" type="checkbox"
                                                               id="filterTaskPriority" checked>

                                                        <label class="form-check-label" for="filterTaskPriority">

                                                            Task Priority

                                                        </label>

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

                    <table class="table table-dashed table-hover digi-dataTable task-table table-striped"
                           id="taskTable">

                        <thead>

                        <tr>

                            <th class="no-sort d-none">

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" id="markAllLeads">

                                </div>

                            </th>

                            <th>Name</th>

                            <th>Description</th>

                            <th>Start Date</th>

                            <th>Due Date</th>

                            <th>Assigned To</th>

                            <th>Priority</th>

                            <th>Action</th>

                        </tr>

                        </thead>

                        <tbody>


                        <?php
                        $result = getAll($con, "select * from jeoXillityCrm_tasks");
                        foreach ($result as $task) {
                            ?>
                            <tr>

                                <td class="d-none">

                                    <div class="form-check">

                                        <input class="form-check-input" type="checkbox">

                                    </div>

                                </td>

                                <td><a role="button" class="text-decoration-underline" data-bs-toggle="modal"
                                       data-bs-target="#viewTaskModal"><?= $task['name'] ?></a></td>

                                <td>

                                    <!--                                        <select class="form-control form-control-sm">-->
                                    <!---->
                                    <!--                                            <option value="not-started">Not Started</option>-->
                                    <!---->
                                    <!--                                            <option value="pending">Pending</option>-->
                                    <!---->
                                    <!--                                            <option value="on-hold">On Hold</option>-->
                                    <!---->
                                    <!--                                            <option value="in-progress">In Progress</option>-->
                                    <!---->
                                    <!--                                            <option value="completed">Completed</option>-->
                                    <?= substr($task['description'], 0, 7) ?>


                                </td>

                                <td><?= $task['start_date'] ?></td>
                                <td><?= isset($task['end_date']) ? $task['end_date'] : "No Due Date" ?></td>
                                <?php
                                // Check if assignedTo is not empty before proceeding
                                if (!empty($task['assignedTo'])) {
                                    // Explode comma-separated user IDs into an array and enclose each ID in single quotes
                                    $userIDs = array_map(function($id) {
                                        return "'" . $id . "'";
                                    }, explode(',', $task['assignedTo']));

                                    // Query the database to get user details
                                    $query = "SELECT COUNT(id) as userCount, profile_pic FROM jeoXillityCrm_users WHERE id IN (" . implode(',', $userIDs) . ")";
                                    // Run the query and fetch results
                                    // You need to adjust this part based on your database connection method
                                    $result = runQuery($query);

                                    // Fetch the user count and profile pic
                                    if ($result) {
                                        $userData = $result->fetch_assoc();
                                        $userCount = $userData['userCount'];
                                        $profilePic = $userData['profile_pic'];
                                        $profile = "./uploads/".$profilePic;
                                        $profilePic = $profile;
                                    } else {
                                        // Default values if no users found
                                        $userCount = 0;
                                        $profilePic = "assets/images/avatar-2.png"; // Assuming this is the default avatar image
                                    }
                                } else {
                                    // Default values if assignedTo is empty
                                    $userCount = 0;
                                    $profilePic = "assets/images/avatar-2.png"; // Assuming this is the default avatar image
                                }
                                ?>
                                <!-- Display the user avatars and count -->
                                <td>
                                    <div class="avatar-box">
                                        <?php
                                        // Display avatars based on the count of users
                                        for ($i = 0; $i < min(3, count($userIDs)); $i++) {
                                            echo '<div class="avatar avatar-sm">';
                                            echo '<img src="' . $profilePic . '" alt="User Avatar">';
                                            echo '</div>';
                                        }

                                        // Display count if there are more users
                                        if (!empty($userIDs) && count($userIDs) > 3) {
                                            echo '<div class="avatar avatar-sm bg-primary rounded-circle d-flex justify-content-center align-items-center text-white">';
                                            echo $userCount - 3; // Display remaining count
                                            echo '</div>';
                                        }
                                        ?>
                                    </div>
                                </td>

                                <td>

                                    <select id="prioritySelect" data-taskId="<?=$task['id']?>" class="form-control form-control-sm">

                                        <?php
                                        $options = array(
                                            "Low" => "Low",
                                            "Medium" => "Medium",
                                            "High" => "High",
                                            "Urgent" => "Urgent"
                                        );
                                        $task_priority = $task['priority']; // Assuming $task['priority'] contains the priority value of the task

                                        foreach ($options as $value => $label) {
                                            $selected = ($value == $task_priority) ? 'selected' : '';

                                            echo '<option value="' . $value . '" ' . $selected . '>' . $label . '</option>';
                                        }
                                        ?>


                                    </select>

                                </td>

                                <td>

                                    <div class="btn-box">

                                        <!-- Button to trigger the modal -->
                                        <button data-mydata='<? echo(json_encode($task, true)); ?>' class="btn btn-sm btn-icon btn-primary" data-bs-toggle="modal" data-bs-target="#addTaskModal">
                                            <i class="fa-light fa-edit"></i>
                                        </button>
                                        <button data-toggle="modal" data-target="#delete_record" data-url="?<?if(isset($_GET['id'])){echo "id=".$_GET['id']."&";}?>delete-record=<?echo $task['id']?>" class="btn btn-sm btn-icon btn-danger"><i
                                                class="fa-light fa-trash-can"></i></button>

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


<!-- add new task modal -->

<div class="modal fade" id="addTaskModal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-lg">

        <div class="modal-content">

            <div class="modal-header">

                <h2 class="modal-title" id="addTaskModalLabel">Add New Task</h2>

                <button type="button" class="btn btn-sm btn-icon btn-outline-primary" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fa-light fa-times"></i></button>

            </div>

            <div class="modal-body">

                <form method="post">

                    <div class="row g-3">

                        <div class="col-12">

                            <label for="addTaskName" class="form-label">Name</label>

                            <input name="name" type="text" id="addTaskName" class="form-control form-control-sm"
                                   placeholder="Task Name">

                        </div>

                        <!--                        <div class="col-12">-->
                        <!---->
                        <!--                            <label for="addTaskAttchment" class="form-label">Attach File</label>-->
                        <!---->
                        <!--                            <input type="file" id="addTaskAttchment" class="form-control form-control-sm" multiple>-->
                        <!---->
                        <!--                        </div>-->

                        <div class="col-sm-6">

                            <label for="addTaskStartDate" class="form-label">Start Date</label>

                            <input type="text" name="start_date" id="addTaskStartDate"
                                   class="form-control form-control-sm date-picker" placeholder="Eg: 12 Feb, 20"
                                   readonly>

                        </div>

                        <div class="col-sm-6">

                            <label for="addTaskEndDate" class="form-label">End Date</label>

                            <input type="text" name="end_date" id="addTaskEndDate"
                                   class="form-control form-control-sm date-picker" placeholder="Eg: 12 Feb, 20"
                                   readonly>

                        </div>

                        <div class="col-sm-6">

                            <label class="form-label">Priority</label>

                            <select name="priority" class="form-control form-control-sm"
                                    data-placeholder="Select Priority">

                                <option value="">Select Priority</option>

                                <option value="Low">Low</option>

                                <option value="Medium">Medium</option>

                                <option value="High">High</option>

                                <option value="Urgent">Urgent</option>

                            </select>

                        </div>

                        <div class="col-sm-6">

                            <label class="form-label">Repeat every</label>

                            <select name="repeatedTime" class="form-control form-control-sm"
                                    data-placeholder="Select Time">

                                <option value="">Select Time</option>

                                <option value="week">Week</option>

                                <option value="2week">2 Weeks</option>

                                <option value="month">1 Month</option>

                                <option value="2months">2 Months</option>

                                <option value="3months">3 Months</option>

                                <option value="6months">6 Months</option>

                                <option value="year">1 Year</option>

                            </select>

                        </div>

                        <div class="col-12">

                            <label class="form-label">Assign To</label>
                            <input name="actionId" id="actionId" class="form-control" type="hidden">
                            <select name="assignTo[]" id="assignSelect" class="form-control form-control-sm select-multiple"
                                    data-placeholder="Eg: Natasha Hancock" multiple>

                                <?php
                                $result = getAll($con, "select * from jeoXillityCrm_users");
                                foreach ($result as $user) {

                                    ?>
                                    <option value="<?= $user['id'] ?>"><?= $user['name'] ?></option>
                                <? } ?>
                            </select>

                        </div>

                        <div class="col-12">

                            <label class="form-label">Task Description</label>

                            <textarea name="description" class="editor"></textarea>

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

</div>

<!-- add new task modal -->


<!-- edit task modal -->

<div class="modal fade" id="editTaskModal" tabindex="-1" aria-labelledby="editTaskModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="editTaskModalLabel">Edit Task</h2>
                <button type="button" class="btn btn-sm btn-icon btn-outline-primary" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fa-light fa-times"></i></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-12">
                        <label for="editTaskName" class="form-label">Name</label>
                        <input type="text" id="editTaskName" class="form-control form-control-sm"
                               placeholder="Task Name" value="Web Design & Development">
                    </div>
                    <div class="col-12">
                        <label for="editTaskAttchment" class="form-label">Attach File</label>
                        <input type="file" id="editTaskAttchment" class="form-control form-control-sm" multiple>
                    </div>
                    <div class="col-sm-6">
                        <label for="editTaskStartDate" class="form-label">Start Date</label>
                        <input type="text" id="editTaskStartDate" class="form-control form-control-sm date-picker"
                               placeholder="Eg: 12 Feb, 20" value="12 Feb, 23" readonly>
                    </div>
                    <div class="col-sm-6">
                        <label for="editTaskEndDate" class="form-label">End Date</label>
                        <input type="text" id="editTaskEndDate" class="form-control form-control-sm date-picker"
                               placeholder="Eg: 12 Feb, 20" value="12 Mar, 23" readonly>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label">Priority</label>
                        <select class="form-control form-control-sm" data-placeholder="Select Priority">
                            <option value="">Select Priority</option>
                            <option value="low">Low</option>
                            <option value="medium" selected>Medium</option>
                            <option value="high">High</option>
                            <option value="urgent">Urgent</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label">Repeat every</label>
                        <select class="form-control form-control-sm" data-placeholder="Select Time">
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
                        <select class="form-control form-control-sm select-multiple"
                                data-placeholder="Eg: Natasha Hancock" multiple>
                            <option value="">Eg: Natasha Hancock</option>
                            <option value="LewisStone">Lewis Stone</option>
                            <option value="JackHolland">Jack Holland</option>
                            <option value="LilyBurgess">Lily Burgess</option>
                            <option value="HarrisonFrench" selected>Harrison French</option>
                            <option value="IsabelMellor" selected>Isabel Mellor</option>
                            <option value="AdamBates" selected>Adam Bates</option>
                            <option value="MillieLee">Millie Lee</option>
                            <option value="MadeleineHart">Madeleine Hart</option>
                            <option value="LouiseGoddard">Louise Goddard</option>
                            <option value="JosephFrancis">Joseph Francis</option>
                            <option value="KaiBarker" selected>Kai Barker</option>
                            <option value="ErinKnight">Erin Knight</option>
                            <option value="JaydenTaylor">Jayden Taylor</option>
                            <option value="SophieHilton">Sophie Hilton</option>
                            <option value="LeahWright">Leah Wright</option>
                            <option value="LewisHooper">Lewis Hooper</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Task Description</label>
                        <textarea name="description" class="editor">Et quo odio aut aut natus facere consequatur eius. Eos non enim repudiandae voluptatem. Animi libero illo tempora. Id ut autem quis omnis fuga. Enim est reiciendis et. Ipsam autem maxime culpa quos. Velit reiciendis eos saepe. Nemo ut officiis dolores sequi error cum eum facilis. Praesentium porro porro ipsa nihil ipsum rerum sint. Sit omnis consequatur consequatur voluptates ipsa. Quam in occaecati alias sapiente voluptas eveniet. Consequuntur non deserunt exercitationem amet.</textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-sm btn-primary">Save Changes</button>
            </div>
        </div>
    </div>
</div>
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

                    <button type="button" class="btn btn-sm btn-icon btn-outline-primary" data-bs-dismiss="modal"
                            aria-label="Close"><i class="fa-light fa-times"></i></button>

                </div>

            </div>

            <div class="modal-body view-task">

                <div class="row g-3">

                    <div class="col-lg-8 col-md-7">

                        <span class="task-created"><i
                                class="fa-light fa-clock"></i> Created at 16/02/2023 03:20:50 by <a
                                href="view-profile.php">Admin</a></span>

                        <div class="task-dscr">

                            <h6 class="dscr-title">Description</h6>

                            <p>Et quo odio aut aut natus facere consequatur eius. Eos non enim repudiandae voluptatem.
                                Animi libero illo tempora. Id ut autem quis omnis fuga. Enim est reiciendis et. Ipsam
                                autem maxime culpa quos. Velit reiciendis eos saepe. Nemo ut officiis dolores sequi
                                error cum eum facilis. Praesentium porro porro ipsa nihil ipsum rerum sint. Sit omnis
                                consequatur consequatur voluptates ipsa. Quam in occaecati alias sapiente voluptas
                                eveniet. Consequuntur non deserunt exercitationem amet.</p>

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

                                <textarea class="form-control form-control-sm mb-15" rows="3"
                                          placeholder="Add a comment here..."></textarea>

                                <div class="btn-box d-flex justify-content-end">

                                    <button class="btn btn-sm btn-primary">Submit</button>

                                </div>

                            </div>

                            <div class="single-comment">

                                <button class="btn-flush text-danger comment-delete"><i
                                        class="fa-light fa-trash-can"></i></button>

                                <div class="avatar">

                                    <img src="assets/images/admin.png" alt="Image">

                                </div>

                                <div class="part-txt">

                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat laborum, minus
                                        iste nam deleniti enim eveniet illum tempore hic non quam id voluptates veniam
                                        ullam inventore autem odit, recusandae earum.</p>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4 col-md-5">

                        <div class="task-info-box">

                            <h6>Task Info:</h6>

                            <ul>

                                <li><span class="part-icon"><i class="fa-light fa-calendar"></i></span> Start Date: 12
                                    Feb, 2023
                                </li>

                                <li><span class="part-icon"><i class="fa-light fa-calendar-check"></i></span> End Date:
                                    12 Mar, 2023
                                </li>

                                <li><span class="part-icon"><i class="fa-light fa-star"></i></span> Status: <span
                                        class="badge bg-primary p-1 rounded">Not Started</span></li>

                                <li><span class="part-icon"><i class="fa-light fa-bolt"></i></span> Priority: <span
                                        class="badge bg-success p-1 rounded">Low</span></li>

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
<script>
    $(document).ready(function() {
        $('#prioritySelect').change(function() {
            var taskId = $(this).data('taskid');
            var priority = $(this).val();
            $.ajax({
                url: 'includes/ajax/assign_priority.php',
                method: 'POST',
                data: { taskId: taskId, priority: priority },
                success: function(response) {
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
        $('#addTaskModal').on('show.bs.modal', function(e) {
            var modal = $(this);
            var mydata = $(e.relatedTarget).data('mydata');
            console.log(mydata);

            // Check if mydata is not null and not undefined
            if (mydata !== null && mydata !== undefined) {
                modal.find('.modal-title').text('Update Task');
                $('#addTaskModal').modal().show();

                // Set values if mydata properties are not null or undefined
                if (mydata.id !== null && mydata.id !== undefined) {
                    $('#actionId').val(mydata.id);
                }
                if (mydata.name !== null && mydata.name !== undefined) {
                    $('input[name="name"]').val(mydata.name);
                }
                if (mydata.start_date !== null && mydata.start_date !== undefined) {
                    $('input[name="start_date"]').val(mydata.start_date);
                }
                if (mydata.end_date !== null && mydata.end_date !== undefined) {
                    $('input[name="end_date"]').val(mydata.end_date);
                }
                if (mydata.description !== null && mydata.description !== undefined) {
                    $('textarea[name="description"]').val(mydata.description);
                }
                if (mydata.priority !== null && mydata.priority !== undefined) {
                    $('select[name="priority"]').val(mydata.priority);
                }
                if (mydata.repeatedTime !== null && mydata.repeatedTime !== undefined) {
                    $('select[name="repeatedTime"]').val(mydata.repeatedTime);
                }

                // Split and trim assignedTo values safely
                if (mydata.assignedTo !== null && mydata.assignedTo !== undefined) {
                    var assignedToValues = mydata.assignedTo.split(',').map(function(value) {
                        return value.trim();
                    });
                    $('#assignSelect').val(assignedToValues);
                }

                // Access specific properties of the task data
                console.log('Task ID:', mydata.id);
                console.log('Task Name:', mydata.name);
            }
        });

    });
</script>
</body>
</html>