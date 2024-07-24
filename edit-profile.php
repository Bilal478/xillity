<? require("./global.php");


$customer_id = $_GET['customer_id'];
if ($customer_id != '') {
    $getCustomer = getRow($con, "select * from jeoXillityCrm_users where id='$customer_id' ");
} else {
    $getCustomer = getRow($con, "select * from jeoXillityCrm_users where id='$session_userId' ");
}

// echo "select * from jeoXillityCrm_users where id='$session_userId' ";
// exit;



if (isset($_POST['save_changes'])) {

    if (isset($_GET['customer_id'])) {
        $customer_id = $_GET['customer_id'];
    } else {
        $customer_id = $session_userId;
    }
    $zip = escape($_POST['zip']);
    $state = escape($_POST['state']);
    $city = escape($_POST['city']);
    $country = escape($_POST['country']);


    $name = escape($_POST['name']);
    $email = escape($_POST['email']);
    
    $phone = escape($_POST['phone']);
    $role = escape($_POST['role']);
    $status = escape($_POST['status']);
    $website = escape($_POST['website']);
    $description = escape($_POST['description']);
    $address = escape($_POST['address']);
    // $designation = escape($_POST['designation']);

    $facebook_link = escape($_POST['facebook_link']);
    $twitter_link = escape($_POST['twitter_link']);
    $insta_link = escape($_POST['insta_link']);
    $linkedIn_link = escape($_POST['linkedIn_link']);
    $youtube_link = escape($_POST['youtube_link']);
    $pinterest_link = escape($_POST['pinterest_link']);
   

    $query = "update jeoXillityCrm_users set name='$name', email='$email', phone='$phone', role='$role', status='$status',
    zip='$zip', state='$state', city='$city', country='$country',
    website='$website', description='$description', address='$address', facebook_link='$facebook_link', insta_link='$insta_link',
    twitter_link='$twitter_link', linkedIn_link='$linkedIn_link', youtube_link='$youtube_link', pinterest_link='$pinterest_link'
    where id='$customer_id'";
    // echo $query;
    // exit;

    runQuery($query);

    $my_file = storeFile($_FILES['my_file']);
    if ($my_file != "") {
        $query = "update jeoXillityCrm_users set profile_pic='$my_file' where id='$customer_id'";
       
        runQuery($query);
    }

    header("Location: ?" . generateUrlParams_return(["m" => "Data updated successfully!", "type" => "success"]));
    exit();
}

if (isset($_POST['change_password'])) {
    if (isset($_GET['customer_id'])) {
        $customer_id = $_GET['customer_id'];
    } else {
        $customer_id = $session_userId;
    }
    // $current_password = $_POST['current_password'];
    $new_password     = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    $current_password = mb_htmlentities(md5(md5(sha1($_POST['current_password'])) . 'Anomoz'));

    if ($current_password == $getCustomer['password']) {
        $new_password = mb_htmlentities(md5(md5(sha1($_POST['new_password'])) . 'Anomoz'));
        $confirm_password = mb_htmlentities(md5(md5(sha1($_POST['confirm_password'])) . 'Anomoz'));
        if ($new_password === $confirm_password) {
            $query = "update jeoXillityCrm_users set password = '$new_password' where id='$customer_id' ";
            runQuery($query);

            header("Location: ?" . generateUrlParams_return(["m" => "Password changed successfully!", "type" => "success"]));
            exit();
        }
    } else {
        header("Location: ?" . generateUrlParams_return(["m" => "Current password is not matched!"]));
        exit();
    }
}

?>
<!DOCTYPE html>
<html lang="en" data-menu="vertical" data-nav-size="nav-default">

<head>
    <? include("./includes/views/head2.php"); ?>
</head>

<body class="body-padding body-p-top">

    <!-- preloader start -->
    <!-- preloader end -->

    <!-- header start -->
    <? include("./includes/views/navbar.php"); ?>
    <!-- header end -->

    <!-- profile right sidebar start -->

    <!-- profile right sidebar end -->

    <div class="right-sidebar-btn d-lg-block d-none">
        <button class="header-btn theme-settings-btn"><i class="fa-light fa-gear"></i></button>
    </div>

    <!-- right sidebar start -->
    <? include("./includes/views/rightsidebar.php"); ?>
    <!-- right sidebar end -->

    <!-- main sidebar start -->
    <? include("./includes/views/leftmenu2.php"); ?>
    <!-- main sidebar end -->



    <!-- main content start -->
    <div class="main-content">
        <div class="dashboard-breadcrumb mb-25">
            <h2>Edit Profile</h2>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="panel">
                    <div class="panel-header">
                        <nav>
                            <div class="btn-box d-flex flex-wrap gap-1" id="nav-tab" role="tablist">
                                <button class="btn btn-sm btn-outline-primary active" id="nav-edit-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-edit-profile" type="button" role="tab" aria-controls="nav-edit-profile" aria-selected="true">Edit Profile</button>
                                <button class="btn btn-sm btn-outline-primary" id="nav-change-password-tab" data-bs-toggle="tab" data-bs-target="#nav-change-password" type="button" role="tab" aria-controls="nav-change-password" aria-selected="false">Change Password</button>
                                <!-- <button class="btn btn-sm btn-outline-primary" id="nav-other-settings-tab" data-bs-toggle="tab" data-bs-target="#nav-other-settings" type="button" role="tab" aria-controls="nav-other-settings" aria-selected="false">Other Settings</button> -->
                            </div>
                        </nav>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content profile-edit-tab" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-edit-profile" role="tabpanel" aria-labelledby="nav-edit-profile-tab" tabindex="0">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="profile-edit-tab-title">
                                        <h6>Public Information</h6>
                                    </div>
                                    <div class="public-information mb-25">
                                        <div class="row g-4">
                                            <!-- <div class="col-md-3">
                                                <div class="admin-profile">
                                                    <div class="image-wrap">
                                                        <div class="part-img rounded-circle overflow-hidden">
                                                            <img src="assets/images/admin.png" alt="admin">
                                                        </div>
                                                        <button class="image-change"><i class="fa-light fa-camera"></i></button>
                                                    </div>
                                                   
                                                    <span class="admin-name"><?php echo $getCustomer['name']; ?></span>
                                                    <span class="admin-role"><?php echo $getCustomer['designation']; ?></span>
                                                </div>
                                            </div> -->
                                            <div class="col-md-12">
                                                <div class="row g-3">
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="fa-light fa-user"></i></span>
                                                            <input type="text" class="form-control" name="name" value="<?php echo $getCustomer['name']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="fa-light fa-at"></i></span>
                                                            <input type="email" class="form-control" name="email" value="<?php echo $getCustomer['email']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="col-sm-12">
                                                        <textarea class="form-control h-150-p" name="description"><?php echo $getCustomer['description']; ?></textarea>
                                                    </div>

                                                    <div class="col-sm-12">
                                                    <label for="">Employee Photo</label>
                                                        <div class="input-group">
                                                            <input type="file" class="form-control"name="my_file" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-edit-tab-title">
                                        <h6>Private Information</h6>
                                    </div>
                                    <div class="private-information mb-25">
                                        <div class="row g-3">
                                            <div class="col-md-4 col-sm-6">
                                                <label for="">ID</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa-light fa-user"></i></span>
                                                    <input type="text" class="form-control" value="<?php echo $getCustomer['id']; ?>" Disable readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <label for="">Role</label>
                                                <div class="input-group flex-nowrap">
                                                    <span class="input-group-text"><i class="fa-light fa-user-tie"></i></span>
                                                    <select class="form-control select-search" name="role">
                                                        <option value="<?php echo $getCustomer['role']; ?>" selected><?php echo $getCustomer['role']; ?></option>
                                                        <?php if ($session_id == "admin") { ?>
                                                            <option value="0">Admin</option>
                                                            <option value="1">Manager</option>
                                                            <option value="2">Project Manager</option>
                                                            <option value="3">Managing Director</option>
                                                            <option value="4">Chairman</option>
                                                            <option value="5">Graphic Designer</option>
                                                        <?
                                                        } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <label for="">Status</label>
                                                <div class="input-group flex-nowrap">
                                                    <span class="input-group-text"><i class="fa-light fa-circle-check"></i></span>
                                                    <select class="form-control" name="status">
                                                        <option value="<?php echo $getCustomer['status']; ?>" selected><?php echo $getCustomer['status']; ?></option>
                                                        <?php if ($session_id == "admin") {
                                                        ?>
                                                            <option value="Active">Active</option>
                                                            <option value="Inactive">Inactive</option>
                                                        <?
                                                        } ?>
                                                    </select>
                                                </div>
                                            </div>



                                            <div class="col-md-4 col-sm-6">
                                                <label for="">Phone</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa-light fa-phone"></i></span>
                                                    <input type="tel" name="phone" class="form-control" value="<?php echo $getCustomer['phone']; ?>">
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-6">
                                                <label for="">Country</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa-light fa-globe"></i></span>
                                                    <input type="text" name="country" class="form-control" value="<?php echo $getCustomer['country']; ?>">
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-6">
                                                <label for="">City</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa-light fa-globe"></i></span>
                                                    <input type="text" name="city" class="form-control" value="<?php echo $getCustomer['city']; ?>">
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-6">
                                                <label for="">Region</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa-light fa-globe"></i></span>
                                                    <input type="text" name="state" class="form-control" value="<?php echo $getCustomer['state']; ?>">
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-6">
                                                <label for="">Zip Code</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa-light fa-globe"></i></span>
                                                    <input type="number" name="zip" class="form-control" value="<?php echo $getCustomer['zip']; ?>">
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-6">
                                                <label for="">Website</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa-light fa-globe"></i></span>
                                                    <input type="url" name="website" class="form-control" value="<?php echo $getCustomer['website']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <textarea class="form-control h-100-p" name="address"><?php echo $getCustomer['address']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-edit-tab-title">
                                        <h6>Social Information</h6>
                                    </div>
                                    <div class="social-information">
                                        <div class="row g-3">
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa-brands fa-facebook-f"></i></span>
                                                    <input type="url" name="facebook_link" class="form-control" value="<?php echo $getCustomer['facebook_link']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa-brands fa-twitter"></i></span>
                                                    <input type="url" class="form-control" name="twitter_link" value="<?php echo $getCustomer['twitter_link']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa-brands fa-linkedin-in"></i></span>
                                                    <input type="url" class="form-control" name="linkedIn_link" value="<?php echo $getCustomer['linkedIn_link']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa-brands fa-instagram"></i></span>
                                                    <input type="url" class="form-control" name="insta_link" value="<?php echo $getCustomer['insta_link']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa-brands fa-youtube"></i></span>
                                                    <input type="url" class="form-control" name="youtube_link" value="<?php echo $getCustomer['youtube_link']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa-brands fa-pinterest-p"></i></span>
                                                    <input type="url" class="form-control" name="pinterest_link" value="<?php echo $getCustomer['pinterest_link']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <input type="submit" class="btn btn-primary" value="Save Changes" name="save_changes" />
                                                <!-- <button type="submit" class="btn btn-primary">Save Changes</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="nav-change-password" role="tabpanel" aria-labelledby="nav-change-password-tab" tabindex="0">
                                <form method="post" action="">
                                    <div class="profile-edit-tab-title">
                                        <h6>Change Password</h6>
                                    </div>
                                    <div class="social-information">
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa-light fa-lock"></i></span>
                                                    <input type="password" class="form-control" placeholder="Current Password" name="current_password">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa-light fa-lock"></i></span>
                                                    <input type="password" class="form-control" placeholder="New Password" name="new_password">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa-light fa-lock"></i></span>
                                                    <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <input type="submit" name="change_password" class="btn btn-primary" value="Save Changes" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="nav-other-settings" role="tabpanel" aria-labelledby="nav-other-settings-tab" tabindex="0">

                                <div class="row">

                                    <div class="col-sm-6">

                                        <div class="profile-edit-tab-title">

                                            <h6>Activity Email Settings</h6>

                                        </div>

                                        <div class="activity-email-settings">

                                            <form>

                                                <div class="form-check mb-15">

                                                    <input class="form-check-input" type="checkbox" value="" id="activity-email-settings-1">

                                                    <label class="form-check-label" for="activity-email-settings-1">

                                                        Someone adds you as a connection

                                                    </label>

                                                </div>

                                                <div class="form-check mb-15">

                                                    <input class="form-check-input" type="checkbox" value="" id="activity-email-settings-2">

                                                    <label class="form-check-label" for="activity-email-settings-2">

                                                        you're sent a direct message

                                                    </label>

                                                </div>

                                                <div class="form-check mb-15">

                                                    <input class="form-check-input" type="checkbox" value="" id="activity-email-settings-3">

                                                    <label class="form-check-label" for="activity-email-settings-3">

                                                        New membership approval

                                                    </label>

                                                </div>

                                                <div class="form-check mb-15">

                                                    <input class="form-check-input" type="checkbox" value="" id="activity-email-settings-4">

                                                    <label class="form-check-label" for="activity-email-settings-4">

                                                        Send Copy To Personal Email

                                                    </label>

                                                </div>

                                                <div class="form-check mb-15">

                                                    <input class="form-check-input" type="checkbox" value="" id="activity-email-settings-5">

                                                    <label class="form-check-label" for="activity-email-settings-5">

                                                        Tips on getting more out of PCT-themes

                                                    </label>

                                                </div>

                                            </form>

                                        </div>

                                    </div>

                                    <div class="col-sm-6">

                                        <div class="profile-edit-tab-title">

                                            <h6>User Promisions </h6>

                                        </div>

                                        <div class="product-email-settings">

                                            <form>

                                                <div class="form-check mb-15">

                                                    <input class="form-check-input" type="checkbox" value="" id="product-email-settings-1">

                                                    <label class="form-check-label" for="product-email-settings-1">

                                                        User Can edit Ticket timestamp entry

                                                    </label>

                                                </div>

                                                <div class="form-check mb-15">

                                                    <input class="form-check-input" type="checkbox" value="" id="product-email-settings-1">

                                                    <label class="form-check-label" for="product-email-settings-1">

                                                        User can creat New locations

                                                    </label>

                                                </div>

                                                <div class="form-check mb-15">

                                                    <input class="form-check-input" type="checkbox" value="" id="product-email-settings-2">

                                                    <label class="form-check-label" for="product-email-settings-2">

                                                        User can edit Task

                                                    </label>

                                                </div>

                                                <div class="form-check mb-15">

                                                    <input class="form-check-input" type="checkbox" value="" id="product-email-settings-3">

                                                    <label class="form-check-label" for="product-email-settings-3">

                                                        User can edit schedule

                                                    </label>

                                                </div>

                                                <div class="form-check mb-15">

                                                    <input class="form-check-input" type="checkbox" value="" id="product-email-settings-4">

                                                    <label class="form-check-label" for="product-email-settings-4">

                                                        Send Copy To Personal Email

                                                    </label>

                                                </div>

                                                <!--/////////////////////////////////////Sub Title= Page Access-->

                                                <div class="profile-edit-tab-title">

                                                    <h6>User Access </h6>

                                                </div>

                                                <div class="form-check mb-15">

                                                    <input class="form-check-input" type="checkbox" value="" id="product-email-settings-5">

                                                    <label class="form-check-label" for="product-email-settings-5">

                                                        DashBoard Access

                                                    </label>

                                                </div>

                                                <div class="form-check mb-15">

                                                    <input class="form-check-input" type="checkbox" value="" id="product-email-settings-5">

                                                    <label class="form-check-label" for="product-email-settings-5">

                                                        Ticket Access

                                                    </label>

                                                </div>

                                                <div class="form-check mb-15">

                                                    <input class="form-check-input" type="checkbox" value="" id="product-email-settings-5">

                                                    <label class="form-check-label" for="product-email-settings-5">

                                                        Task Access

                                                    </label>

                                                </div>

                                                <div class="form-check mb-15">

                                                    <input class="form-check-input" type="checkbox" value="" id="product-email-settings-5">

                                                    <label class="form-check-label" for="product-email-settings-5">

                                                        Schedule Access

                                                    </label>

                                                </div>



                                        </div>

                                    </div>

                                </div>

                            </div>
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
    <? include("./includes/views/footerjs.php"); ?>
</body>

</html>