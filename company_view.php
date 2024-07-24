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
        // $site_name = escape($_POST['site_name']);
        // $phone_number = escape($_POST['phone_number']);
        // $address = escape($_POST['address']);
        // $email = escape($_POST['email']);
        // $contact_name = escape($_POST['contact_name']);
        $account_status = escape($_POST['account_status']);
        // $contact_name = isset($_POST['contact_name']);
        $internal_notes = escape($_POST['internal_notes']);
        // $historic_tickets = escape($_POST['historic_tickets']);
        // $security_pin = escape($_POST['security_pin']);
        $timeAdded = date('Y-m-d H:i:s');
        $ticket_id = $_GET['id'];
        $query = "UPDATE jeoXillityCrm_parent_company SET account_status='$account_status', internal_notes='$internal_notes' WHERE id='$ticket_id'";
        // $query = "update jeoXillityCrm_parent_company set id='$actionId' , site_name='$site_name', phone_number='$phone_number', address='$address', email='$email', contact_name='$contact_name', account_status='$account_status', internal_notes='$internal_notes', historic_tickets='$historic_tickets', security_pin='$security_pin' where id='$actionId'";
        runQuery($query);
        // if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
        //     $file = storeFile($_FILES['file']);
        //     if ($file != "") {
        //         $query = "UPDATE jeoXillityCrm_parent_company SET file='$file' WHERE id='$ticket_id'";
        //         runQuery($query);
        //     }
        // }
        // if (!empty($fileNames)) {
        //     // Convert file names array to a JSON string to store in the database
        //     $filesJson = json_encode($fileNames);
        //     $query = "UPDATE jeoXillityCrm_parent_company SET file='$filesJson' WHERE id='$ticket_id'";
        //     runQuery($query);
        // }
        if (isset($_FILES['file']) && count($_FILES['file']['error']) > 0) {
            $uploadedFiles = [];
            foreach ($_FILES['file']['tmp_name'] as $key => $tmp_name) {
                if ($_FILES['file']['error'][$key] == UPLOAD_ERR_OK) {
                    $file = storeFile([
                        'name' => $_FILES['file']['name'][$key],
                        'tmp_name' => $_FILES['file']['tmp_name'][$key]
                    ]);
                    if ($file != "") {
                        $uploadedFiles[] = $file;
                    }
                }
            }
            if (!empty($uploadedFiles)) {
                $filesJson = json_encode($uploadedFiles);
                $query = "UPDATE jeoXillityCrm_parent_company SET file='$filesJson' WHERE id='$ticket_id'";
                runQuery($query);
            }
        }
        header("Location: company.php?m=Data was saved successfully!&type=success");
    } else {
        echo "Invalid action ID.";
    }
}

// $primaryTableName = "comments";
// $t_id = $_GET['id'];
// if (isset($_POST['create_package1'])) {
//     $actionId = escape(($_POST['actionId']));
//     $comments_name = escape($_POST['comments_name']);
//     $Ticket_id = $t_id;
//     $timeAdded = date('Y-m-d H:i:s');
//     if ($actionId == "") {
//         $id = generateRandomString();
//         $actionId = $id;
//         $query = "INSERT INTO jeoXillityCrm_comments (id, comments_name, Ticket_id, timeAdded, userId) 
//               VALUES ('$id', '$comments_name', '$Ticket_id', '$timeAdded', '$session_userId')";
//         runQuery($query);
//         header("Location: ?" . generateUrlParams_return(["m" => "Data was saved successfully!", "type" => "success"]));
//         exit();
//     } else {
//         // If actionId is not empty, update existing comment (if necessary)
//     }
// }

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
            <h2>Company View</h2>
        </div>
        <form action="" method="post">
            <div class="row g-4">
                <?php if (isset($_GET['id'])) {
                    // Assuming $con is your database connection object
                    // Fetch ticket information based on the provided ID
                    $ticket_id = mysqli_real_escape_string($con, $_GET['id']); // Sanitize input
                    $sql = "SELECT * FROM jeoXillityCrm_parent_company WHERE id = '$ticket_id'";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $ticket_info = mysqli_fetch_assoc($result); ?>
                        <div class="col-md-9 left-side">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="col-12">
                                        <label class="form-label">Company Internal Notes</label>
                                        <textarea name="internal_notes" class="form-control editor form-control-sm" style="height: 200px;" placeholder="Description"><?php echo $ticket_info['internal_notes']; ?></textarea>
                                    </div>
                                    <div class="profile-sidebar">
                                        <div class="top">
                                            <div class="image-wrap">
                                                <div class="part-img overflow-hidden">
                                                    <label for="imageUpload">Attachment</label>
                                                    <?php if (!empty($ticket_info['file'])) {
                                                        $files = json_decode($ticket_info['file']);
                                                        foreach ($files as $file) { ?>
                                                            <img class="ticketImage" src="./uploads/<?php echo htmlspecialchars($file); ?>" alt="attachment">
                                                        <?php }
                                                    } else { ?>
                                                        <img class="ticketImage" src="assets/images/admin.png" alt="admin">
                                                    <?php } ?>
                                                </div>
                                                <input type="file" id="imageUpload" name="file[]" multiple style="display: none;">
                                                <button type="button" class="image-change" id="cameraButton"><i class="fa-light fa-camera"></i></button>
                                            </div>
                                        </div>
                                        <div class="col-10 offset-1 text-center">
                                            <button type="button" class="btn btn-primary btn-md w-100" id="downloadAllButton">Download</button>
                                        </div>
                                        <!-- <div class="col-12 mt-3">
                                            <label class="form-label" for="comments_name">Comments</label>
                                            <textarea name="comments_name" id="comments_name" class="form-control" rows="3"></textarea>
                                        </div>
                                        <input type="hidden" name="Ticket_id" value="<?php echo $t_id; ?>">
                                        <div class="col-12 mt-3 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary btn-md" name="create_package1">Add Comments</button>
                                        </div> -->
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="col-12 mt-3">
                                <?php
                                $query = "SELECT * FROM jeoXillityCrm_comments WHERE Ticket_id='$t_id' ORDER BY timeAdded DESC";
                                $results = getAll($con, $query);
                                foreach ($results as $row) { ?>
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <p class="card-text"><?php echo $row['comments_name'] ?></p>
                                            <p class="card-text text-end"><?php echo $row['userId'] ?></p>
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
                            </div> -->
                        </div>

                        <div class="col-md-3 right-side">
                            <div class="row">
                                <h6 class="mt-4">Company Info</h6>
                                <ul>
                                    <li><span>Company No:</span> <?php echo $ticket_info['id']; ?></li>
                                    <li><span>Security No:</span> <?php echo $ticket_info['security_pin']; ?></li>
                                    <li><span>Site Name:</span> <?php echo $ticket_info['site_name']; ?></li>
                                    <li><span>Location:</span> <?php echo $ticket_info['address']; ?></li>
                                    <li><span>Email:</span> <?php echo $ticket_info['email']; ?></li>
                                    <li><span>Start Date:</span> <?php echo $ticket_info['created_at']; ?></li>
                                    <li><span>Historic Ticket:</span> <?php echo $ticket_info['historic_tickets']; ?></li>
                                    <li><span>Account Status:</span> <?php echo $ticket_info['account_status']; ?></li>
                                    <li><span>Contact Name:</span> <?php echo $ticket_info['contact_name']; ?></li>
                                </ul>
                            </div>
                            <!-- <div class="col-12 mt-5">
                                <label class="form-label">Contact Name</label>
                                <select class="form-control form-control-sm select-multiple" name="contact_name[]" id="assign" data-placeholder="Eg: Natasha Hancock" multiple>
                                    <?php
                                    $sql = "SELECT * FROM jeoXillityCrm_users";
                                    $run = mysqli_query($con, $sql);
                                    $assigned_users = explode(',', $ticket_info['contact_name']); // Assuming $ticket_info contains the current ticket data
                                    while ($fet = mysqli_fetch_assoc($run)) {
                                        $selected = in_array($fet['name'], $assigned_users) ? 'selected' : '';
                                        echo "<option value='{$fet['name']}' $selected>{$fet['name']}</option>";
                                    }
                                    ?>
                                </select>
                                <div id="tagsContainer" class="mt-3"></div>
                            </div> -->

                            <!-- <div class="col-12 mt-3">
                                <button type="button" class="btn btn-primary mt-4 w-100">Follow Ticket</button>
                            </div> -->
                            <!-- <div class="col-12 mt-4">
                                <div class="d-flex align-items-center">
                                    <label for="priority_status" class="me-2">Priority Status:</label>
                                    <select name="priority" class="form-control form-control-sm" data-placeholder="Select Priority" required>
                                        <option value="">Select Priority</option>
                                        <option value="Low">Low</option>
                                        <option value="Medium">Medium</option>
                                        <option value="High">High</option>
                                        <option value="Urgent">Urgent</option>
                                    </select>
                                </div>
                            </div> -->
                            <div class="col-12 mt-4">
                                <div class="d-flex align-items-center">
                                    <label for="tickets_status" class="me-2">Account Status:</label>
                                    <select name="account_status" id="tickets_status" class="form-control form-control-sm" data-placeholder="Select Tickets Status" required>
                                        <option value="">Select Account Status</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Complete">Complete</option>
                                        <option value="In_progress">In Progress</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5 offset-1">
                                    <a href="company.php" type="button" class="btn btn-light mt-4 w-100">Close</a>
                                </div>
                                <div class="col-5" id="create_record_modal">
                                    <button type="submit" class="btn btn-success mt-4 w-100" name="create_package">Submit</button>
                                </div>
                            </div>
                        </div>
            </div>
        </form>
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
</script> -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    document.getElementById("cameraButton").addEventListener("click", function() {
        document.getElementById("imageUpload").click();
    });

    document.getElementById("imageUpload").addEventListener("change", function() {
        var formData = new FormData();
        var files = this.files;
        for (var i = 0; i < files.length; i++) {
            formData.append("file[]", files[i]);
        }
        formData.append("create_package", "1");

        $.ajax({
            url: window.location.href, // The current URL
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                var data = JSON.parse(response);
                if (data.status === "success") {
                    var imageContainer = document.getElementById("imageContainer");
                    imageContainer.innerHTML = ""; // Clear existing images
                    data.files.forEach(function(file) {
                        var img = document.createElement('img');
                        img.className = 'ticketImage';
                        img.src = './uploads/' + file;
                        img.alt = 'attachment';
                        imageContainer.appendChild(img);
                    });
                } else {
                    alert("File upload failed.");
                }
            }
        });
    });

    document.getElementById("downloadAllButton").addEventListener("click", function() {
        var images = document.querySelectorAll(".ticketImage");
        if (images.length > 0) {
            images.forEach(function(image) {
                var link = document.createElement('a');
                link.href = image.src;
                link.download = image.src.split('/').pop();
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            });
        } else {
            alert("No images available to download.");
        }
    });
</script>

</html>