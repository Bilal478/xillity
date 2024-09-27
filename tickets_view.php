<?
include_once("global.php");
// include("./includes/models/users.php");
// $role = 'user';
// if(!checkGlobalPermission('signupEnabled')){
//    // header("Location: ./");
// }

// if(isset($_GET['id'])){
//     $t_id = $_GET['id']; 
//     $getT_id = getRow($con, "select * from jeoXillityCrm_ticket where id='$t_id' ");
// }
// Sanitize input


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['create_package'])) {
    if (isset($_GET['id'])) {
        // Assuming generateRandomString() generates a unique ID
        // $name = escape($_POST['name']);
        $company_name = escape($_POST['company_name']);
        $department = escape($_POST['department']);
        $site_name = escape($_POST['site_name']);
        $email = escape($_POST['email']);
        $status = escape($_POST['status']);
        $phone_number = escape($_POST['phone_number']);
        $primary_contact = escape($_POST['primary_contact']);
        $home_number = escape($_POST['home_number']);
        // $start_date = escape($_POST['start_date']);
        // $end_date = escape($_POST['end_date']);
        $priority = escape($_POST['priority']);
        $assign = isset($_POST['assign']) ? implode(',', $_POST['assign']) : '';
        // $assign = escape($_POST['assign']);
        $description = escape($_POST['description']);
        $timeAdded = date('Y-m-d H:i:s');
        $ticket_id = $_GET['id'];
        $query = "UPDATE jeoXillityCrm_tickets SET company_name='$company_name', site_name='$site_name', email='$email', status='$status', phone_number='$phone_number', department='$department', primary_contact='$primary_contact', home_number='$home_number', priority='$priority', assign='$assign', description='$description' WHERE id='$ticket_id'";
        // $query = "UPDATE jeoXillityCrm_tickets SET name='$name', company_name='$company_name', department='$department', site_name='$site_name', email='$email', status='$status', phone_number='$phone_number', primary_contact='$primary_contact', home_number='$home_number', start_date='$start_date', end_date='$end_date', priority='$priority', assign='$assign', description='$description' WHERE id='$ticket_id'";
        runQuery($query);
        if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
            $file = storeFile($_FILES['file']);
            if ($file != "") {
                $query = "UPDATE jeoXillityCrm_tickets SET file='$file' WHERE id='$ticket_id'";
                runQuery($query);
            }
        }
        header("Location: Tickets.php?m=Data was saved successfully!&type=success");
    } else {
        echo "Invalid action ID.";
    }
}

$primaryTableName = "comments";
$t_id = $_GET['id'];
if (isset($_POST['create_package1'])) {
    $actionId = escape(($_POST['actionId']));
    $comments_name = escape($_POST['comments_name']);
    $Ticket_id = $t_id;
    $timeAdded = date('Y-m-d H:i:s');
    if ($actionId == "") {
        $id = generateRandomString();
        $actionId = $id;
        $query = "INSERT INTO jeoXillityCrm_comments (id, comments_name, Ticket_id, timeAdded, userId) 
              VALUES ('$id', '$comments_name', '$Ticket_id', '$timeAdded', '$session_userId')";
        runQuery($query);
        header("Location: ?" . generateUrlParams_return(["m" => "Data was saved successfully!", "type" => "success"]));
        exit();
    } else {
        // If actionId is not empty, update existing comment (if necessary)
    }
}

if (isset($_GET['delete-record'])) {
    $id = escape($_GET['delete-record']);
    $query = "delete from jeoXillityCrm_comments where id='$id'";
    runQuery($query);
}
?>

<!DOCTYPE html>
<html lang="en" data-menu="vertical" data-nav-size="nav-default">

<head>
    <style>
        .left-side {
            max-height: 100vh;
            overflow-y: auto;
            padding-right: 15px;
        }

        .right-side {
            position: sticky;
            top: 0;
            height: 100vh;
            overflow-y: auto;
            padding-left: 15px;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/css/multi-select-tag.css">
    <? include("./includes/views/head2.php"); ?>
</head>

<body class="body-padding body-p-top">
    <!-- header start -->
    <? include("./includes/views/navbar.php"); ?>
    <!-- header end -->
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
            <h2>Tickets View</h2>
        </div>
        <form action="" method="post">
            <div class="row g-4">
                <?php if (isset($_GET['id'])) {
                    // Assuming $con is your database connection object
                    // Fetch ticket information based on the provided ID
                    $ticket_id = mysqli_real_escape_string($con, $_GET['id']); // Sanitize input
                    $sql = "SELECT * FROM jeoXillityCrm_tickets WHERE id = '$ticket_id'";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $ticket_info = mysqli_fetch_assoc($result); ?>
                        <div class="col-md-8 left-side">
                            <div class="panel">
                                <div class="panel-body">

                                    <div class="mb-3">
                                        <h6 class="mt-4">Tickets Info:</h6>
                                        <ul class="row list-unstyled">
                                            <li class="col-md-4">
                                                <span class="info-label">Ticket No:</span>
                                                <span class="info-value"><?php echo htmlspecialchars($ticket_info['id']); ?></span>
                                            </li>
                                            <li class="col-md-4">
                                                <span class="info-label">Location:</span>
                                                <span class="info-value"><?php echo htmlspecialchars($ticket_info['location_name']); ?></span>
                                            </li>
                                            <li class="col-md-4">
                                                <span class="info-label">Start Date:</span>
                                                <span class="info-value"><?php echo htmlspecialchars($ticket_info['start_date']); ?></span>
                                            </li>
                                            <li class="col-md-4">
                                                <span class="info-label">End Date:</span>
                                                <span class="info-value"><?php echo htmlspecialchars($ticket_info['end_date']); ?></span>
                                            </li>
                                            <li class="col-md-4">
                                                <span class="info-label">Status:</span>
                                                <span class="info-value"><?php echo htmlspecialchars($ticket_info['status']); ?></span>
                                            </li>
                                            <li class="col-md-4">
                                                <span class="info-label">Priority:</span>
                                                <span class="info-value"><?php echo htmlspecialchars($ticket_info['priority']); ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>

                                    <div class="col-12">
                                        <label class="form-label">Tickets Description:</label>
                                        <textarea name="description" class="form-control editor form-control-sm" style="height: 200px;" placeholder="Description"><?php echo $ticket_info['description']; ?></textarea>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="">
                                            <label class="form-label">Department:</label>
                                            <select name="department" class="form-control form-control-sm mr-2" data-placeholder="Select Department">
                                                <option value="">Select Department</option>
                                                <option value="Bus" <?php echo $ticket_info['department'] == 'Bus' ? 'selected' : ''; ?>>Bus</option>
                                                <option value="Airplane" <?php echo $ticket_info['department'] == 'Airplane' ? 'selected' : ''; ?>>Airplane</option>
                                                <option value="Taxi" <?php echo $ticket_info['department'] == 'Taxi' ? 'selected' : ''; ?>>Taxi</option>
                                                <option value="Subway" <?php echo $ticket_info['department'] == 'Subway' ? 'selected' : ''; ?>>Subway</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <label class="form-label">Assign To:</label>
                                        <select class="form-control form-control-sm select-multiple" name="assign[]" id="assign" data-placeholder="Eg: Natasha Hancock" multiple>
                                            <?php
                                            $sql = "SELECT * FROM jeoXillityCrm_users";
                                            $run = mysqli_query($con, $sql);
                                            $assigned_users = explode(',', $ticket_info['assign']); // Assuming $ticket_info contains the current ticket data
                                            while ($fet = mysqli_fetch_assoc($run)) {
                                                $selected = in_array($fet['name'], $assigned_users) ? 'selected' : '';
                                                echo "<option value='{$fet['name']}' $selected>{$fet['name']}</option>";
                                            }
                                            ?>
                                        </select>
                                        <!-- <div id="tagsContainer"></div> -->
                                    </div>

                                    <!-- <div class="col-10 offset-1 text-center">
                                        <button type="button" class="btn btn-primary mt-4 w-100">Follow Ticket</button>
                                    </div> -->
                                    <div class="col-12 mt-4">
                                        <div class="">
                                            <label for="priority_status" class="form-label">Priority Status:</label>
                                            <select name="priority" class="form-control form-control-sm" data-placeholder="Select Priority" required>
                                                <option value="">Select Priority</option>
                                                <option value="Low" <?php echo $ticket_info['priority'] == 'Low' ? 'selected' : ''; ?>>Low</option>
                                                <option value="Medium" <?php echo $ticket_info['priority'] == 'Medium' ? 'selected' : ''; ?>>Medium</option>
                                                <option value="High" <?php echo $ticket_info['priority'] == 'High' ? 'selected' : ''; ?>>High</option>
                                                <option value="Urgent" <?php echo $ticket_info['priority'] == 'Urgent' ? 'selected' : ''; ?>>Urgent</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="">
                                            <label for="tickets_status" class="form-label">Tickets Status:</label>
                                            <select name="status" id="tickets_status" class="form-control form-control-sm" data-placeholder="Select Tickets Status" required>
                                                <option value="">Select Tickets Status</option>
                                                <option value="Pending" <?php echo $ticket_info['status'] == 'Pending' ? 'selected' : ''; ?>>Pending</option>
                                                <option value="Complete" <?php echo $ticket_info['status'] == 'Complete' ? 'selected' : ''; ?>>Complete</option>
                                                <option value="In_progress" <?php echo $ticket_info['status'] == 'In_progress' ? 'selected' : ''; ?>>In Progress</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-5 offset-1">
                                            <a href="Tickets.php" type="button" class="btn btn-light mt-4 w-100">Close</a>
                                        </div>
                                        <div class="col-5" id="create_record_modal">
                                            <button type="submit" class="btn btn-success mt-4 w-100" name="create_package">Submit</button>
                                        </div>

                                        <div class="profile-sidebar">
                                            <div class="top">
                                                <div class="image-wrap">
                                                    <div class="part-img overflow-hidden">
                                                        <label for="">Attachment</label>
                                                        <?php if (!empty($ticket_info['file'])) { ?>
                                                            <img id="ticketImage" src="./uploads/<?php echo htmlspecialchars($ticket_info['file']); ?>" alt="admin">
                                                        <?php } else { ?>
                                                            <img id="ticketImage" src="assets/images/admin.png" alt="admin">
                                                        <?php } ?>
                                                    </div>
                                                    <input type="file" id="imageUpload" name="file" style="display: none;">
                                                    <button class="image-change" id="cameraButton"><i class="fa-light fa-camera"></i></button>
                                                </div>
                                            </div>
                                            <div class="col-10 offset-1 text-center">
                                                <button type="button" class="btn btn-primary btn-md w-100" id="downloadAllButton">Download All</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>





                            </div>


                        </div>

                        <div class="col-md-4 right-side">
                            <div class="row">
                                <div class="col-12 mt-3">
                                    <div class="col-12 mb-3">
                                        <label class="form-label" for="comments_name">Comments</label>
                                        <textarea name="comments_name" id="comments_name" class="form-control" rows="3"></textarea>
                                    </div>
                                    <input type="hidden" name="Ticket_id" value="<?php echo $t_id; ?>">
                                    <div class="col-12 mt-3 mb-3 d-flex justify-content-end gap-2">
                                        <button type="submit" class="btn btn-primary btn-md" name="create_package1">Add Comments</button>
                                        <!-- Add this delete button after the comment list -->
                                        <button type="button" class="btn btn-danger" id="delete-selected">Delete Comments</button>

                                    </div>
                                    <?php

                                    $query = "SELECT jc.*, ju.name 
                                    FROM jeoXillityCrm_comments jc
                                    JOIN jeoXillityCrm_users ju ON jc.userId = ju.id 
                                    WHERE jc.Ticket_id='$t_id'
                                    ORDER BY jc.timeAdded DESC";

                                    $results = getAll($con, $query);
                                    foreach ($results as $row) { ?>
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <!-- Add a checkbox to select comments -->
                                                <input type="checkbox" class="comment-checkbox" data-id="<?= $row['id']; ?>" />

                                                <p class="card-text"><?php echo $row['comments_name'] ?></p>
                                                <p class="card-text text-end"><?php echo $row['name'] ?></p>
                                                <p class="card-text text-end">
                                                    <?php if (!empty($row['timeAdded'])) {
                                                        $dateTime = new DateTime($row['timeAdded']);
                                                        echo $dateTime->format('Y-m-d g:i:s A');
                                                    } else {
                                                        echo 'No date available';
                                                    } ?>
                                                </p>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>

                        </div>
            </div>
        </form>
       <script>

$(document).ready(function() {
    $('#delete-selected').click(function() {
        let selectedComments = [];
        // Collect the IDs of selected comments
        $('.comment-checkbox:checked').each(function() {
            selectedComments.push($(this).data('id'));
        });

        if (selectedComments.length > 0) {
            console.log("Selected comments:", selectedComments); // Log selected IDs

            $.ajax({
                url: 'delete_comments.php', // Your backend script for deleting comments
                type: 'POST',
                data: { commentIds: selectedComments },
                success: function(response) {
                    console.log("AJAX success response:", response); // Log the response from the backend

                    // Ensure the response is parsed correctly
                    if (typeof response === 'string') {
                        response = JSON.parse(response);
                    }

                    if (response.success) {
                        // Successfully deleted, now remove comments from DOM
                        $('.comment-checkbox:checked').closest('.card').remove(); // Remove the selected comments from the DOM
                       // alert('Comments deleted successfully!');
                    } else {
                        console.log("Error deleting comments: ", response.message);
                        alert('Error deleting comments: ' + response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.log('AJAX error:', error); // Log any error from the request
                    alert('There was an error processing your request.');
                }
            });
        } else {
            alert('Please select at least one comment to delete.');
        }
    });
});

       </script>




<?php
                    } else {
                        echo "No ticket found with the provided ID.";
                    }
                }
?>
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
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/js/multi-select-tag.js"></script>
<script>
    new MultiSelectTag('comments') // id
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const select = document.getElementById("assign");
        const tagsContainer = document.getElementById("tagsContainer");

        function createTags() {
            tagsContainer.innerHTML = "";
            const selectedOptions = Array.from(select.selectedOptions);
            selectedOptions.forEach(option => {
                const tag = document.createElement("div");
                tag.className = "tag";
                tag.textContent = option.value;
                tagsContainer.appendChild(tag);
            });
        }

        select.addEventListener("change", createTags);
        createTags(); // Call initially to show any pre-selected options
    });
</script>


<!-- <script>
    document.getElementById("cameraButton").addEventListener("click", function() {
        document.getElementById("imageUpload").click();
    });
</script> -->

<script>
    document.getElementById("cameraButton").addEventListener("click", function() {
        document.getElementById("imageUpload").click();
    });

    document.getElementById("imageUpload").addEventListener("change", function() {
        var formData = new FormData();
        formData.append("file", this.files[0]);
        formData.append("create_package", "1"); // Append any other form data if necessary

        $.ajax({
            url: window.location.href, // The current URL
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                var data = JSON.parse(response);
                if (data.status === "success") {
                    $("#ticketImage").attr("src", "./uploads/" + data.file);
                } else {
                    alert("File upload failed.");
                }
            }
        });
    });
</script>
<script>
    document.getElementById("cameraButton").addEventListener("click", function() {
        document.getElementById("imageUpload").click();
    });

    document.getElementById("downloadAllButton").addEventListener("click", function() {
        var imageSrc = document.getElementById("ticketImage").src;
        if (imageSrc) {
            var link = document.createElement('a');
            link.href = imageSrc;
            link.download = imageSrc.split('/').pop();
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        } else {
            alert("No image available to download.");
        }
    });

    // Optional: handle file upload and display the uploaded image
    document.getElementById("imageUpload").addEventListener("change", function(event) {
        var file = event.target.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById("ticketImage").src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });
</script>

</html>