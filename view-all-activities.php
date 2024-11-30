<?
include_once("global.php");

// Get user ID from session or GET parameter
if (isset($_GET['customer_id'])) {
    $customer_id = $_GET['customer_id'];
} else {
    $customer_id = $session_userId;
}

// Fetch user activities
$query = "SELECT * FROM jeoXillityCrm_user_activites WHERE user_id='$customer_id' ORDER BY id DESC";
$results = mysqli_query($con, $query);
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
            <h2>User Activities</h2>
        </div>
        <div class="panel">
            <div class="panel-header">
                <h5>All User Activities</h5>
            </div>
            <div class="panel-body">
                <div class="user-activity">
                    <ul>
                        <?php
                        while ($row = mysqli_fetch_assoc($results)) { ?>
                            <li>
                                <div class="left">
                                    <span class="user-activity-title"><?php echo $row['action']; ?></span>
                                    <span class="user-activity-date"><?php echo date('l d M Y', strtotime($row['created_at'])); ?></span>
                                </div>
                                <div class="right">
                                    <?php
                                    // Convert string to DateTime object for "time ago" logic
                                    $givenDate = new DateTime($row['created_at']);
                                    $currentDate = new DateTime(); // Current date and time
                                    $interval = $currentDate->diff($givenDate);
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

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/js/multi-select-tag.js"></script> -->









</html>