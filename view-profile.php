<? include_once("global.php");

include("./includes/models/users.php");

// $role = 'user';

if (!checkGlobalPermission('signupEnabled')) {
    // header("Location: ./");
}



if (isset($_GET['customer_id'])) {
    $customer_id = $_GET['customer_id'];
} else {
    $customer_id = $session_userId;
}

$getCustomer = getRow($con, "select * from jeoXillityCrm_users where id='$customer_id' ");


if (isset($_FILES['profile_pic'])) {

    $customer_id = $_GET['customer_id'];


    $profile_pic = storeFile($_FILES['profile_pic']);

    if ($profile_pic != "") {
        $query = "UPDATE jeoXillityCrm_users SET profile_pic='$profile_pic' WHERE id='$customer_id'";

        if (mysqli_query($con, $query)) {
            $session_profile_pic = $profile_pic;
            echo 'Profile picture updated successfully!';
        } else {

            echo 'Error updating profile picture: ' . mysqli_error($con);
        }
    } else {
        echo 'File upload failed!';
    }
}

?>

<!DOCTYPE html>
<html lang="en" data-menu="vertical" data-nav-size="nav-default">

<head>
    <? include("./includes/views/head2.php"); ?>
</head>

<body class="body-padding body-p-top">
    <!-- header start -->
    <? include("./includes/views/navbar.php"); ?>
    <!-- header end -->

    <!-- profile right sidebar start -->

    <!-- profile right sidebar end -->


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
            <h2>View Profile</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="panel">
                    <div class="panel-body">
                        <div class="profile-sidebar">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="profile-sidebar-title">User Information</h5>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-icon btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-sm-end">
                                        <li><a class="dropdown-item" href="edit-profile.php?customer_id=<?php echo $customer_id; ?>"><i class="fa-regular fa-pen-to-square"></i> Edit Information</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="top">
                                <div class="image-wrap">
                                    <div class="part-img rounded-circle overflow-hidden">
                                        <?php
                                        if ($getCustomer['profile_pic'] != "") { ?>
                                            <img id="profilePicPreview" src="./uploads/<?php echo $getCustomer['profile_pic'] ?>" alt="admin">
                                            <!-- <img id="profilePicPreview" style="width: 200px; height: 100px;" src="/uploads/<?php echo ($myIndexedArray[$session_userId]['profile_pic']); ?>" alt=""> -->

                                        <?
                                        } else { ?>
                                            <img id="profilePicPreview" src="assets/images/admin.png" alt="admin">

                                        <?php
                                        }
                                        ?>
                                        <input type="file" id="profile_pic" name="profile_pic" class="form-control d-none">
                                    </div>
                                    <button type="button" class="image-change"><i class="fa-light fa-camera"></i></button>
                                </div>
                                <div class="part-txt">
                                    <h4 class="admin-name"><?php echo $getCustomer['name']; ?></h4>
                                    <span class="admin-role"><?php echo $getCustomer['designation']; ?></span>
                                    <div class="admin-social">
                                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-brands fa-google"></i></a>
                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="bottom">
                                <h6 class="profile-sidebar-subtitle">Communication Info</h6>
                                <ul>
                                    <li><span>Full Name:</span><?php echo $getCustomer['name'] . " " . $getCustomer['last_name']; ?></li>

                                    <li><span>Mobile:</span><?php echo $getCustomer['phone']; ?></li>

                                    <li><span>Mail:</span><?php echo $getCustomer['email']; ?></li>

                                    <li><span>Address:</span><?php echo $getCustomer['address']; ?></li>

                                    <li><span>Joining Date:</span><?php echo $getCustomer['joining_date']; ?></li>

                                </ul>
                                <h6 class="profile-sidebar-subtitle">About Me</h6>
                                <p><?php echo $getCustomer['description']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="row mb-25">
                    <div class="col-lg-4">
                        <div class="dashboard-top-box rounded-bottom panel-bg">
                            <div class="left">
                                <h3>$34,152</h3>
                                <p>Shipping fees are not</p>
                                <a href="#">View net earnings</a>
                            </div>
                            <div class="right">
                                <span class="text-primary">+16.24%</span>
                                <div class="part-icon rounded">
                                    <span><i class="fa-light fa-dollar-sign"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6 col-xs-12">
                        <div class="dashboard-top-box rounded-bottom panel-bg">
                            <div class="left">
                                <h3>36,894</h3>
                                <p>Orders</p>
                                <a href="#">Excluding orders in transit</a>
                            </div>
                            <div class="right">
                                <span class="text-primary">+16.24%</span>
                                <div class="part-icon rounded">
                                    <span><i class="fa-light fa-bag-shopping"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6 col-xs-12">
                        <div class="dashboard-top-box rounded-bottom panel-bg">
                            <div class="left">
                                <h3>$34,152</h3>
                                <p>Customers</p>
                                <a href="#">See details</a>
                            </div>
                            <div class="right">
                                <span class="text-primary">+16.24%</span>
                                <div class="part-icon rounded">
                                    <span><i class="fa-light fa-user"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- User Activity -->
                <div class="panel">
                    <div class="panel-header">
                        <h5>User Activities</h5>
                        <div class="dropdown">
                            
                            <a href="view-all-activities.php?customer_id=<?php echo $customer_id; ?>" class="btn btn-sm btn-primary">View All</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="user-activity">
                            <ul>
                                <?php

                                $query = "SELECT * FROM jeoXillityCrm_user_activites where user_id='$session_userId' ORDER BY id DESC LIMIT 5";
                                $results = mysqli_query($con, $query);

                                while ($row = mysqli_fetch_assoc($results)) { ?>
                                    <li>
                                        <div class="left">
                                            <span class="user-activity-title"><?php echo $row['action']; ?></span>
                                            <span class="user-activity-date"><?php echo date('l d M Y', strtotime($row['created_at'])); ?></span>

                                        </div>

                                        <div class="right">

                                            <?php

                                            // Convert the string to DateTime object
                                            $givenDate = new DateTime($row['created_at']);
                                            $currentDate = new DateTime(); // Current date and time

                                            // Calculate the difference
                                            $interval = $currentDate->diff($givenDate);

                                            // Initialize the result variable
                                            $timeAgo = '';

                                            if ($interval->y > 0) {
                                                $timeAgo = $interval->y . ' year' . ($interval->y > 1 ? 's' : '') . ' ago';
                                            } elseif ($interval->m > 0) {
                                                $timeAgo = $interval->m . ' month' . ($interval->m > 1 ? 's' : '') . ' ago';
                                            } elseif ($interval->d > 0) {
                                                $timeAgo = $interval->d . ' day' . ($interval->d > 1 ? 's' : '') . ' ago';
                                            } elseif ($interval->h > 0) {
                                                $timeAgo = $interval->h . ' hour' . ($interval->h > 1 ? 's' : '') . ' ago';
                                            } elseif ($interval->i > 0) {
                                                $timeAgo = $interval->i . ' minute' . ($interval->i > 1 ? 's' : '') . ' ago';
                                            } else {
                                                $timeAgo = 'just now';
                                            }


                                            ?>
                                            <span class="user-activity-time"><?php echo $timeAgo; ?></span>

                                        </div>

                                    </li>
                                <?php } ?>
                            </ul>

                        </div>

                    </div>

                </div>

            </div>
            <?php

            $query = "SELECT * FROM jeoXillityCrm_tickets WHERE CONCAT(',', assign, ',') LIKE '%," . $getCustomer['id'] . ",%'";
            $results = mysqli_query($con, $query);

            $openTickets = [];
            $overdueTickets = [];
            $closedTickets = [];

            while ($row = mysqli_fetch_assoc($results)) {
                // Categorize tickets based on their status
                $endDateTime = DateTime::createFromFormat('d M, y', $row['end_date']);
                $currentDateTime = new DateTime();

                if ($row['status'] == 'Pending') {
                    $openTickets[] = $row;
                } elseif (($endDateTime < $currentDateTime) && ($row['status'] != 'Complete')) {
                    $overdueTickets[] = $row;
                } elseif ($row['status'] == 'Complete') {
                    $closedTickets[] = $row;
                }
            }
            ?>

            <div class="col-lg-4 col-6 col-xs-12">
                <div class="panel">
                    <div class="panel-header">
                        <h5>Open Tickets</h5>
                    </div>
                    <div class="panel-body">
                        <div class="">
                            <?php if (!empty($openTickets)) { ?>
                                <ul>
                                    <?php foreach ($openTickets as $ticket) { ?>
                                        <a class="link-light" href="./tickets_view.php?id=<?php echo $ticket['id']; ?>">
                                            <li>
                                                <div class="left">
                                                    <span class="user-activity-title"><b>Ticket ID:</b> <?php echo $ticket['id'] ?></span>
                                                    <span class="user-activity-title"><b>Title: </b> <?php echo $ticket['name'] ?></span>
                                                </div>
                                            </li>
                                        </a>
                                        <hr>
                                    <?php } ?>
                                </ul>
                            <?php } else { ?>
                                <p>No open tickets found.</p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-6 col-xs-12">
                <div class="panel">
                    <div class="panel-header">
                        <h5>Overdue Tickets</h5>
                    </div>
                    <div class="panel-body">
                        <div class="">
                            <?php if (!empty($overdueTickets)) { ?>
                                <ul>
                                    <?php foreach ($overdueTickets as $ticket) { ?>
                                        <a class="link-light" href="./tickets_view.php?id=<?php echo $ticket['id']; ?>">
                                            <li>
                                                <div class="left">
                                                    <span class="user-activity-title"><b>Ticket ID:</b> <?php echo $ticket['id'] ?></span>
                                                    <span class="user-activity-title"><b>Title: </b> <?php echo $ticket['name'] ?></span>
                                                </div>
                                            </li>
                                        </a>
                                        <hr>
                                    <?php } ?>
                                </ul>
                            <?php } else { ?>
                                <p>No overdue tickets found.</p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-6 col-xs-12">
                <div class="panel">
                    <div class="panel-header">
                        <h5>Closed Tickets</h5>
                    </div>
                    <div class="panel-body">
                        <div class="">
                            <?php if (!empty($closedTickets)) { ?>
                                <ul>
                                    <?php foreach ($closedTickets as $ticket) { ?>
                                        <a class="link-light" href="./tickets_view.php?id=<?php echo $ticket['id']; ?>">
                                            <li>
                                                <div class="left">
                                                    <span class="user-activity-title"><b>Ticket ID:</b> <?php echo $ticket['id'] ?></span>
                                                    <span class="user-activity-title"><b>Title: </b> <?php echo $ticket['name'] ?></span>
                                                </div>
                                            </li>
                                        </a>
                                        <hr>
                                    <?php } ?>
                                </ul>
                            <?php } else { ?>
                                <p>No closed tickets found.</p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

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

    <script>
        const profilePicInput = document.getElementById('profile_pic');
        const profilePicPreview = document.getElementById('profilePicPreview');
        const chooseImageBtns = document.querySelectorAll('.image-change');
        chooseImageBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                profilePicInput.click();
            });
        });

        profilePicInput.addEventListener('change', function() {
            if (profilePicInput.files && profilePicInput.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    profilePicPreview.src = e.target.result;
                };

                console.log('aaaaaa:', profilePicInput, profilePicPreview)
                reader.readAsDataURL(profilePicInput.files[0]);

                // Create FormData and append the file
                const formData = new FormData();
                formData.append('profile_pic', profilePicInput.files[0]);

                // Send AJAX request to PHP script
                fetch('view-profile.php?customer_id=<?php echo $customer_id; ?>', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.text())
                    .then(data => {
                        console.log(data); // You can handle the response from the server here
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            }
        });
    </script>
</body>

</html>