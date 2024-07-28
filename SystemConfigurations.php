<? require("./global.php");
// $u_id = $_GET['id'];
$getData = getAll($con, "SELECT * FROM jeoXillityCrm_systemConfigurations WHERE id='$session_userId'");
$myIndexedArray = [];
// Check if data is fetched successfully
if ($getData) {
    foreach ($getData as $v) {
        $myIndexedArray[$v['id']] = [
            'name' => ucfirst($v['name']), // Ensure the 'name' column contains full names
            'role' => $v['role'],
            'profile_pic' => $v['profile_pic'],
            'company' => $v['company'],
            'email' => $v['email'],
            'about' => $v['about'],
            'number' => $v['number'],
            'enable_disable' => $v['enable_disable'],
            'gmail' => $v['gmail'],
            'phone_number' => $v['phone_number'],
            'company_mail' => $v['company_mail'],
            'address' => $v['address'],
            'company_address' => $v['company_address'],
            'city' => $v['city'],
            'zip' => $v['zip'],
            'facebook_link' => $v['facebook_link'],
            'twitter_link' => $v['twitter_link'],
            'linkedin_link' => $v['linkedin_link'],
            'instagram_link' => $v['instagram_link'],
            'youtube_link' => $v['youtube_link'],
            'pinterest_link' => $v['pinterest_link'],
            'current_password' => $v['current_password'],
            'new_password' => $v['new_password'],
            'confirm_password' => $v['confirm_password'],
            'timeAdded' => $v['timeAdded'],
            'userId' => $v['userId']
        ];
    }
}

array(
    "profile_pic" => ["input", "", "", "file"],
    "company" => ["input", "", "", "text"],
    "email" => ["input", "", "", "email"],
    "about" => ["input", "", "", "text"],
    "number" => ["input", "", "", "number"],
    "role" => ["input", "", "", "text"],
    "enable_disable" => ["input", "", "", "text"],
    "gmail" => ["input", "", "", "text"],
    "phone_number" => ["input", "", "", "number"],
    "company_mail" => ["input", "", "", "text"],
    "address" => ["input", "", "", "text"],
    "company_address" => ["input", "", "", "text"],
    "city" => ["input", "", "", "text"],
    "zip" => ["input", "", "", "number"],
    "facebook_link" => ["input", "", "", "text"],
    "twitter_link" => ["input", "", "", "text"],
    "linkedin_link" => ["input", "", "", "text"],
    "instagram_link" => ["input", "", "", "text"],
    "youtube_link" => ["input", "", "", "text"],
    "pinterest_link" => ["input", "", "", "text"],
    "current_password" => ["input", "", "", "password"],
    "new_password" => ["input", "", "", "password"],
    "confirm_password" => ["input", "", "", "password"],
);

if (isset($_POST['create_record_package'])) {
    
    // Sanitize inputs and retrieve form data
    $actionId = mysqli_real_escape_string($con, $_POST['actionId']);
    $company = mysqli_real_escape_string($con, $_POST['company']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $about = mysqli_real_escape_string($con, $_POST['about']);
    $number = mysqli_real_escape_string($con, $_POST['number']);
    $role = mysqli_real_escape_string($con, $_POST['role']);
    $enable_disable = mysqli_real_escape_string($con, $_POST['enable_disable']);
    $gmail = mysqli_real_escape_string($con, $_POST['gmail']);
    $phone_number = mysqli_real_escape_string($con, $_POST['phone_number']);
    $company_mail = mysqli_real_escape_string($con, $_POST['company_mail']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $company_address = mysqli_real_escape_string($con, $_POST['company_address']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $zip = mysqli_real_escape_string($con, $_POST['zip']);
    $facebook_link = mysqli_real_escape_string($con, $_POST['facebook_link']);
    $twitter_link = mysqli_real_escape_string($con, $_POST['twitter_link']);
    $linkedin_link = mysqli_real_escape_string($con, $_POST['linkedin_link']);
    $instagram_link = mysqli_real_escape_string($con, $_POST['instagram_link']);
    $youtube_link = mysqli_real_escape_string($con, $_POST['youtube_link']);
    $pinterest_link = mysqli_real_escape_string($con, $_POST['pinterest_link']);
    $current_password = mysqli_real_escape_string($con, $_POST['current_password']);
    $new_password = mysqli_real_escape_string($con, $_POST['new_password']);
    $confirm_password = mysqli_real_escape_string($con, $_POST['confirm_password']);
    $chk = "select * from jeoXillityCrm_systemConfigurations where id='$session_userId'";
    $chk_run = mysqli_query($con, $chk);
    $num = mysqli_num_rows($chk_run);
    if ($num == 0) {
        $query = "INSERT INTO jeoXillityCrm_systemConfigurations (id, company, email, about, number, role, enable_disable, gmail, phone_number, company_mail, address, company_address,city, zip, facebook_link, twitter_link, linkedin_link, instagram_link, youtube_link, pinterest_link, current_password, new_password, confirm_password, timeAdded, userId) VALUES ('$session_userId', '$company', '$email', '$about', '$number', '$role', '$enable_disable', '$gmail', '$phone_number', '$company_mail', '$address', '$company_address', '$city', '$zip', '$facebook_link', '$twitter_link', '$linkedin_link', '$instagram_link', '$youtube_link', '$pinterest_link', '$current_password', '$new_password', '$confirm_password', '$timeAdded', '$session_userId')";
    } else {
        $query = "UPDATE jeoXillityCrm_systemConfigurations SET company='$company', email='$email', about='$about', number='$number', role='$role', enable_disable='$enable_disable', gmail='$gmail', phone_number='$phone_number', company_mail='$company_mail', address='$address', company_address = '$company_address', city='$city', zip='$zip', facebook_link='$facebook_link', twitter_link='$twitter_link', linkedin_link='$linkedin_link', instagram_link='$instagram_link', youtube_link='$youtube_link', pinterest_link='$pinterest_link', current_password='$current_password', new_password='$new_password', confirm_password='$confirm_password' WHERE id='$session_userId'";
    }
    mysqli_query($con, $query);
    $profile_pic = storeFile($_FILES['profile_pic']);
    if ($profile_pic != "") {
        $query = "UPDATE jeoXillityCrm_systemConfigurations SET profile_pic='$profile_pic' WHERE id='$session_userId'";
        mysqli_query($con, $query);
    }
    header("Location: ?" . generateUrlParams_return(["m" => "Data was saved successfully!", "type" => "success"]));
    exit();
}

if (isset($_POST['save_preference_securoty'])) {
   
    // Sanitize inputs and retrieve form data
    $timezone = mysqli_real_escape_string($con, $_POST['timezone']);
    $currency = mysqli_real_escape_string($con, $_POST['currency']);
    $auto_logout = mysqli_real_escape_string($con, $_POST['auto_logout']);
    $login_attemp = mysqli_real_escape_string($con, $_POST['login_attemp']);
    $password_expirey_day = mysqli_real_escape_string($con, $_POST['password_expirey_day']);
    $password_lenght = mysqli_real_escape_string($con, $_POST['password_lenght']);
    $number_in_password = mysqli_real_escape_string($con, $_POST['number_in_password']);
    $symbol_in_password = mysqli_real_escape_string($con, $_POST['symbol_in_password']);
    $track_ip_address = mysqli_real_escape_string($con, $_POST['track_ip_address']);
    $twofa = mysqli_real_escape_string($con, $_POST['twofa']);
    $compnay_id = $session_userId;
   
    $chk = "select * from jeoXillityCrm_preference_and_security where compnay_id='$session_userId'";
    $chk_run = mysqli_query($con, $chk);

    $num = mysqli_num_rows($chk_run);
    if ($num == 0) {
        $query = "INSERT INTO jeoXillityCrm_preference_and_security 
        (compnay_id,timezone, currency, auto_logout, login_attemp, password_expirey_day, password_lenght, number_in_password,symbol_in_password, track_ip_address, twofa) 
       VALUES ('$compnay_id', '$timezone', '$currency', '$auto_logout', '$login_attemp', '$password_expirey_day', '$password_lenght', '$number_in_password','$symbol_in_password', '$track_ip_address', '$twofa')";
    } else {
        $query = "UPDATE jeoXillityCrm_preference_and_security SET timezone='$timezone', currency='$currency', auto_logout='$auto_logout', login_attemp='$login_attemp', password_expirey_day='$password_expirey_day', password_lenght='$password_lenght', number_in_password='$number_in_password', symbol_in_password ='$symbol_in_password', track_ip_address='$track_ip_address', twofa='$twofa' WHERE compnay_id = '$session_userId'";
    }
    mysqli_query($con, $query);
    header("Location: ?" . generateUrlParams_return(["m" => "Data was saved successfully!", "type" => "success"]));
    exit();
}

if (isset($_POST['alert_permissions_setting'])) {
   
    // Sanitize inputs and retrieve form data
    $ticket_created = mysqli_real_escape_string($con, $_POST['ticket_created']);
    $ticket_deleted = mysqli_real_escape_string($con, $_POST['ticket_deleted']);
    $ticket_assigned = mysqli_real_escape_string($con, $_POST['ticket_assigned']);
    $event_created = mysqli_real_escape_string($con, $_POST['event_created']);
    $ticket_overdue = mysqli_real_escape_string($con, $_POST['ticket_overdue']);
    $account_locked = mysqli_real_escape_string($con, $_POST['account_locked']);
    
    $compnay_id = $session_userId;
   
    $chk = "select * from jeoXillityCrm_alert_permissions_setting WHERE compnay_id='$session_userId'";
    $chk_run = mysqli_query($con, $chk);

    $num = mysqli_num_rows($chk_run);
    if ($num == 0) {
        $query = "INSERT INTO jeoXillityCrm_alert_permissions_setting 
        (ticket_created,ticket_deleted, ticket_assigned, event_created, ticket_overdue, account_locked, $compnay_id) 
       VALUES ('$ticket_created', '$ticket_deleted', '$ticket_assigned', '$event_created', '$ticket_overdue', '$account_locked', '$$compnay_id')";
    } else {
        $query = "UPDATE jeoXillityCrm_alert_permissions_setting SET ticket_created='$ticket_created', ticket_deleted='$ticket_deleted', ticket_assigned='$ticket_assigned', event_created='$event_created', ticket_overdue='$ticket_overdue', account_locked='$account_locked' WHERE compnay_id = '$session_userId'";
    }
    mysqli_query($con, $query);
    header("Location: ?" . generateUrlParams_return(["m" => "Data was saved successfully!", "type" => "success"]));
    exit();
}

if (isset($_GET['delete-record'])) {
    $id = escape($_GET['delete-record']);
    $query = "delete from jeoXillityCrm_systemConfigurations where id='$id'";
    runQuery($query);
}

if (isset($_GET['delete-template'])) {
    $id = escape($_GET['delete-template']);
    $query = "delete from jeoXillityCrm_email_templates where id='$id'";
    runQuery($query);
}


if (isset($_POST['create_template'])) {

    $name = $_POST['template_name'];

    $subject = $_POST['subject'];
    $body = $_POST['body'];

    if($_POST['template_id']){
        $id = $_POST['template_id'];
        $query = "UPDATE jeoXillityCrm_email_templates SET name='$name' ,  subject='$subject',  body='$body' WHERE id='$id'";
    }
    else{
        $query = "INSERT INTO jeoXillityCrm_email_templates (name, subject, body) VALUES ('$name','$subject','$body')";
    }
   
    
    mysqli_query($con, $query);
    header("Location: ?" . generateUrlParams_return(["m" => "Data was saved successfully!", "type" => "success"]));
    exit();
}

if (isset($_POST['create_server'])) {
    $email = mb_htmlentities($_POST['email']);
    $password = mb_htmlentities($_POST['password']);
    $port_no = mb_htmlentities($_POST['port_no']);
    $ip_address = mb_htmlentities($_POST['ip_address']);
    $department = mb_htmlentities($_POST['department']);
    $priority = mb_htmlentities($_POST['priority']);
    $status = mb_htmlentities($_POST['status']);
    $actionId = mb_htmlentities($_POST['actionId']);
    $id = generateRandomString();
    $session_userId = $_SESSION['userId']; // Assuming session user ID is stored in the session

    if ($actionId == "") {
        $stmt = $con->prepare("INSERT INTO " . $g_projectSlug . "_email_servers (id, email, password, port_no, ip_address, department, priority, status, userId) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssss", $id, $email, $password, $port_no, $ip_address, $department, $priority, $status, $session_userId);
        if (!$stmt->execute()) {
            echo "err";
        }
    } else {
        $stmt = $con->prepare("UPDATE " . $g_projectSlug . "_email_servers SET email=?, password=?, port_no=?, ip_address=?, department=?, priority=?, status=? WHERE id=?");
        $stmt->bind_param("ssssssss", $email, $password, $port_no, $ip_address, $department, $priority, $status, $actionId);
        if (!$stmt->execute()) {
            echo "err";
        }
    }
?>
    <script>
        location = "SystemConfigurations.php";
    </script>
<?php
}


if (isset($_GET['delete-record'])) {
    $id = mb_htmlentities($_GET['delete-record']);
    $stmt = $con->prepare("delete from " . $g_projectSlug . "_email_servers where id=?");
    $stmt->bind_param("s", $id);
    if (!$stmt->execute()) {
        echo "err";
    }
}

if (isset($_GET['delete-template'])) {
    $id = mb_htmlentities($_GET['delete-template']);
    $stmt = $con->prepare("delete from " . $g_projectSlug . "_email_templates where id=?");
    $stmt->bind_param("s", $id);
    if (!$stmt->execute()) {
        echo "err";
    }
}


?>

<!DOCTYPE html>
<html lang="en" data-menu="vertical" data-nav-size="nav-default">

<head><? include("./includes/views/head2.php"); ?>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<style>
        .cke_notifications_area {
            display: none;
        }
    </style>
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
        <div class="dashboard-breadcrumb mb-25">
            <h2>System Configurations</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="panel">
                    <div class="panel-header">
                        <nav>
                            <div class="btn-box d-flex flex-wrap gap-1" id="nav-tab" role="tablist">
                                <button class="btn btn-sm btn-outline-primary active" id="nav-edit-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-edit-profile" type="button" role="tab" aria-controls="nav-edit-profile" aria-selected="true">Company Details</button>
                                <button class="btn btn-sm btn-outline-primary" id="nav-change-password-tab" data-bs-toggle="tab" data-bs-target="#nav-change-password" type="button" role="tab" aria-controls="nav-change-password" aria-selected="false">Gateway</button>
                                <button class="btn btn-sm btn-outline-primary" id="nav-email-template-settings-tab" data-bs-toggle="tab" data-bs-target="#nav-email-template-settings" type="button" role="tab" aria-controls="nav-email-template-settings" aria-selected="false">Email Templates</button>
                                <button class="btn btn-sm btn-outline-primary" id="nav-email-template-settings-tab" data-bs-toggle="tab" data-bs-target="#nav-preference-security-settings" type="button" role="tab" aria-controls="nav-preference-security-settings" aria-selected="false">Preference & Security</button>
                                <button class="btn btn-sm btn-outline-primary" id="nav-email-template-settings-tab" data-bs-toggle="tab" data-bs-target="#nav-alert-triggers-settings" type="button" role="tab" aria-controls="nav-alert-triggers-settings" aria-selected="false">Alert Triggers</button>
                            </div>
                        </nav>
                    </div>

                    <div class="panel-body">
                        <div class="tab-content profile-edit-tab" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-edit-profile" role="tabpanel" aria-labelledby="nav-edit-profile-tab" tabindex="0">
                                <form method="Post" enctype="multipart/form-data">
                                    <div class="profile-edit-tab-title">
                                        <h6>Company Information</h6>
                                    </div>
                                    <!--/////////////////////// Tittle= Company Information-->
                                    <div class="public-information mb-25">
                                        <div class="row g-4">
                                            <div class="col-md-3">
                                                <div class="admin-profile">
                                                    <div class="image-wrap">
                                                        <div class="part-img rounded-circle overflow-hidden">
                                                            <img id="profilePicPreview" style="width: 200px; height: 100px;" src="/uploads/<?php echo ($myIndexedArray[$session_userId]['profile_pic']); ?>" alt="">
                                                            <input type="file" id="profile_pic" name="profile_pic" class="form-control d-none">
                                                        </div>
                                                        <span id="selectedFileName"></span> <!-- Span to display the selected file name -->
                                                        <button type="button" class="image-change"><i class="fa-light fa-camera"></i></button>
                                                    </div>
                                                    <!--////////////////////////////**Tittle**= USER PROFILE AND DEPARTMENT-->
                                                    <span class="admin-name"><?php echo isset($myIndexedArray[$session_userId]['name']) ? htmlspecialchars($myIndexedArray[$session_userId]['name'], ENT_QUOTES, 'UTF-8') : ''; ?></span>
                                                    <span class="admin-role"><?php echo isset($myIndexedArray[$session_userId]['role']) ? htmlspecialchars($myIndexedArray[$session_userId]['role'], ENT_QUOTES, 'UTF-8') : ''; ?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="row g-3">
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="fa-light fa-user"></i></span>
                                                            <input type="text" class="form-control" name="company" placeholder="Company Name" value="<?php echo htmlspecialchars($myIndexedArray[$session_userId]['company'], ENT_QUOTES, 'UTF-8'); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="fa-light fa-at"></i></span>
                                                            <input type="text" class="form-control" name="email" placeholder="Username" value="<?php echo htmlspecialchars($myIndexedArray[$session_userId]['email'], ENT_QUOTES, 'UTF-8'); ?>">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                                                            <input type="text" class="form-control" name="company_address" placeholder="Address" value="<?php echo htmlspecialchars($myIndexedArray[$session_userId]['company_address'], ENT_QUOTES, 'UTF-8'); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="fa-solid fa-city"></i></span>
                                                            <input type="text" class="form-control" name="city" placeholder="City" value="<?php echo htmlspecialchars($myIndexedArray[$session_userId]['city'], ENT_QUOTES, 'UTF-8'); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="fa fa-map-pin"></i></span>
                                                            <input type="number" class="form-control" name="zip" placeholder="Zipcode" value="<?php echo htmlspecialchars($myIndexedArray[$session_userId]['zip'], ENT_QUOTES, 'UTF-8'); ?>">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-12">
                                                        <textarea class="form-control h-150-p" name="about" placeholder="Description"><?php echo $myIndexedArray[$session_userId]['about']; ?></textarea>
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
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa-light fa-user"></i></span>
                                                    <input type="text" class="form-control" name="number" placeholder="Unique ID" value="<?php echo $myIndexedArray[$session_userId]['number']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="input-group flex-nowrap">
                                                    <span class="input-group-text"><i class="fa-light fa-user-tie"></i></span>
                                                    <select class="form-control select-search" name="role" data-placeholder="Role">
                                                        <option></option>
                                                        <?php
                                                        $selectedRole = $myIndexedArray[$session_userId]['role']; // Get the selected role
                                                        $roles = array("admin", "manager", "project_manager", "managing", "chairman", "graphic_designer");
                                                        foreach ($roles as $role) {
                                                            echo "<option value=\"$role\"";
                                                            if ($selectedRole == $role) {
                                                                echo " selected"; // Add selected attribute if this is the selected role
                                                            }
                                                            echo ">$role</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-6">
                                                <div class="input-group flex-nowrap">
                                                    <span class="input-group-text"><i class="fa-light fa-circle-check"></i></span>
                                                    <select class="form-control" name="enable_disable" data-placeholder="Status">
                                                        <option></option>
                                                        <?php
                                                        $selectedStatus = $myIndexedArray[$session_userId]['enable_disable'];
                                                        $statuses = array("enable", "disable");
                                                        foreach ($statuses as $status) {
                                                            echo "<option value=\"$status\"";
                                                            if ($selectedStatus == $status) {
                                                                echo " selected"; // Add selected attribute if this is the selected status
                                                            }
                                                            echo ">$status</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa-light fa-envelope"></i></span>
                                                    <input type="email" class="form-control" name="gmail" placeholder="Email" value="<?php echo $myIndexedArray[$session_userId]['gmail']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa-light fa-phone"></i></span>
                                                    <input type="tel" class="form-control" name="phone_number" placeholder="Phone" value="<?php echo $myIndexedArray[$session_userId]['phone_number']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa-light fa-globe"></i></span>
                                                    <input type="url" class="form-control" name="company_mail" placeholder="Website" value="<?php echo $myIndexedArray[$session_userId]['company_mail']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <textarea class="form-control h-100-p" name="address" placeholder="Address"><?php echo $myIndexedArray[$session_userId]['address']; ?></textarea>
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
                                                    <input type="url" class="form-control" name="facebook_link" placeholder="Facebook" value="<?php echo $myIndexedArray[$session_userId]['facebook_link']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa-brands fa-twitter"></i></span>
                                                    <input type="url" class="form-control" name="twitter_link" placeholder="Twitter" value="<?php echo $myIndexedArray[$session_userId]['twitter_link']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa-brands fa-linkedin-in"></i></span>
                                                    <input type="url" class="form-control" name="linkedin_link" placeholder="Linkedin" value="<?php echo $myIndexedArray[$session_userId]['linkedin_link']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa-brands fa-instagram"></i></span>
                                                    <input type="url" class="form-control" name="instagram_link" placeholder="Instagram" value="<?php echo $myIndexedArray[$session_userId]['instagram_link']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa-brands fa-youtube"></i></span>
                                                    <input type="url" class="form-control" name="youtube_link" placeholder="Youtube" value="<?php echo $myIndexedArray[$session_userId]['youtube_link']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa-brands fa-pinterest-p"></i></span>
                                                    <input type="url" class="form-control" name="pinterest_link" placeholder="Pinterest" value="<?php echo $myIndexedArray[$session_userId]['pinterest_link']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" name="create_record_package" value="Confirm" class="btn btn-primary">Save Changes</button>
                                                <!-- <button type="submit" class="btn btn-primary">Save Changes</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="nav-change-password" role="tabpanel" aria-labelledby="nav-change-password-tab" tabindex="0">
                                <form method="Post" enctype="multipart/form-data">
                                    <!-- <div class="profile-edit-tab-title">
                                        <h6>Change Password</h6>
                                    </div> -->
                                    <a href="#" class="btn btn-primary btn-elevate btn-icon-sm mb-3" data-toggle="modal" data-target="#create_record_modal">
                                        <i class="la la-plus"></i>
                                        New Record
                                    </a>
                                    <table class="table table-striped- table-bordered table-hover table-checkable add-search" id="kt_table_1">
                                        <thead>
                                            <tr>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Port No.</th>
                                                <th>Smtp</th>
                                                <th>Department</th>
                                                <th>Priority</th>
                                                <th>Ticket Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- <?php
                                                    $query = "SELECT es.*, t.department, t.priority, t.status FROM jeoXillityCrm_email_servers es LEFT JOIN jeoXillityCrm_tickets t ON es.email = t.email";
                                                    $result = $con->query($query);
                                                    if (!$result) {
                                                        die('Error in the query: ' . $con->error);
                                                    }
                                                    while ($row = $result->fetch_assoc()) { ?>
                                                <tr>
                                                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                                                    <td><?php echo htmlspecialchars($row['password']); ?></td>
                                                    <td><?php echo htmlspecialchars($row['port_no']); ?></td>
                                                    <td><?php echo htmlspecialchars($row['ip_address']); ?></td>
                                                    <td><?php echo htmlspecialchars($row['department']); ?></td>
                                                    <td><?php echo htmlspecialchars($row['priority']); ?></td>
                                                    <td><?php echo htmlspecialchars($row['status']); ?></td>
                                                    <td>
                                                        <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#create_record_modal" data-mydata='<?php echo htmlspecialchars(json_encode($row), ENT_QUOTES, 'UTF-8'); ?>' style="text-decoration:none;">Edit</a>
                                                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete_record" data-url="?delete-record=<?php echo htmlspecialchars($row['id']); ?>" style="text-decoration:none;">Delete</a>
                                                    </td>
                                                </tr>
                                            <?php } ?> -->
                                            <?
                                            $query = "select * from jeoXillityCrm_email_servers ";
                                            $result = $con->query($query);
                                            if (!$result) {
                                                die('Error in the query: ' . $con->error);
                                            }
                                            while ($row = $result->fetch_assoc()) {
                                                if (true) { ?>
                                                    <tr>
                                                        <td><? echo $row['email']; ?></td>
                                                        <td><? echo $row['password']; ?></td>
                                                        <td><? echo $row['port_no']; ?></td>
                                                        <td><? echo $row['ip_address']; ?></td>
                                                        <td><? echo $row['department']; ?></td>
                                                        <td><? echo $row['priority']; ?></td>
                                                        <td><? echo $row['status']; ?></td>
                                                        <td>
                                                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#create_record_modal" data-mydata='<? echo (json_encode($row, true)); ?>' style="text-decoration:none;">Edit</a>
                                                            <a href="#" data-bs-target="#delete_record" class="btn btn-danger" data-toggle="modal" data-target="#delete_record" data-url="?delete-record=<? echo $row['id'] ?>" style="text-decoration:none;">Delete</a>
                                                        </td>
                                                    </tr>
                                            <? }
                                            } ?>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="nav-email-template-settings" role="tabpanel" aria-labelledby="nav-email-template-settings-tab" tabindex="0">
                            <form method="Post" enctype="multipart/form-data">
                                    <!-- <div class="profile-edit-tab-title">
                                        <h6>Change Password</h6>
                                    </div> -->
                                    <a href="#" class="btn btn-primary btn-elevate btn-icon-sm mb-3" data-toggle="modal" data-target="#create_email_template_modal">
                                        <i class="la la-plus"></i>
                                        New Template
                                    </a>
                                    <table class="table table-striped- table-bordered table-hover table-checkable add-search" id="kt_table_1">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Subject</th>
                                                <th>Body</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?
                                            $query = "select * from jeoXillityCrm_email_templates ";
                                            $result = $con->query($query);
                                            if (!$result) {
                                                die('Error in the query: ' . $con->error);
                                            }
                                            while ($row = $result->fetch_assoc()) {
                                                if (true) { ?>
                                                    <tr>
                                                        <td><? echo $row['id']; ?></td>
                                                        <td><? echo $row['name']; ?></td>
                                                        <td><? echo $row['subject']; ?></td>
                                                        <td>
                                                        <? 
                                                            $truncated_body = strlen($row['body']) > 50 ? substr($row['body'], 0, 50) . '...': $row['body'];
                                                            echo $truncated_body; 
                                                            ?>
                                                        </td>
                                                        <td>
                                                        <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#create_email_template_modal" data-mydata='<? echo (json_encode($row, true)); ?>' style="text-decoration:none;">Edit</a>
                                                        <a href="#" data-bs-target="#delete_record" class="btn btn-danger" data-toggle="modal" data-target="#delete_record" data-url="?delete-template=<? echo $row['id'] ?>" style="text-decoration:none;">Delete</a>
                                                        </td>
                                                    </tr>
                                            <? }
                                            } ?>
                                        </tbody>
                                    </table>
                                    
                                </form>
                            </div>
                            <div class="tab-pane fade" id="nav-preference-security-settings" role="tabpanel" aria-labelledby="nav-preference-security-settings-tab" tabindex="0">
                                <form method="Post">
                                    <?php
                                    $chk = "select * from jeoXillityCrm_preference_and_security where compnay_id='$session_userId'";
                                    $chk_run = mysqli_query($con, $chk);
                                    $preference_and_security = mysqli_fetch_assoc($chk_run);
                                    
                                    ?>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="profile-edit-tab-title">
                                                <h6>Preference & Security Settings</h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <div class="col-6">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        TimeZone 
                                                    </label>
                                                </div>
                                                <div class="col-3">
                                                <select class="form-control select-search" name="timezone" data-placeholder="Timezone">
                                                        <option>Select Time Zone</option>
                                                        <option value="EST" <?php if($preference_and_security['timezone'] == 'EST') echo 'selected'; ?> >Eastern Standard Time</option>
                                                        <option value="CT" <?php if($preference_and_security['timezone'] == 'CT') echo 'selected'; ?> >Central Time</option>
                                                        <option value="PT" <?php if($preference_and_security['timezone'] == 'PT') echo 'selected'; ?>>Pacific Time</option>
                                
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <div class="col-6">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Currency
                                                    </label>
                                                </div>
                                                <div class="col-3">
                                                <select class="form-control select-search" name="currency" data-placeholder="Currency">
                                                        <option>Select Currency</option>
                                                        <option value="USD" <?php if($preference_and_security['currency'] == 'USD') echo 'selected'; ?>>USD</option>
                                                        <option value="mxn" <?php if($preference_and_security['currency'] == 'mxn') echo 'selected'; ?>>Euro</option>
                                                        <option value="Peso" <?php if($preference_and_security['currency'] == 'Peso') echo 'selected'; ?>>Peso</option>
                                
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <div class="col-6">
                                                    <label class="form-check-label" for="auto_logout">
                                                        Auto logout if idle <small>(minutes)</small>: 
                                                    </label>
                                                </div>
                                                <div class="col-2">
                                                    <input name="auto_logout" value="<?php echo $preference_and_security['auto_logout']; ?>" class="form-control" type="number">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <div class="col-6">
                                                    <label class="form-check-label" for="login_attemp">
                                                        Lock account if login attempts fail exceed by <small>(count)</small>:
                                                    </label>
                                                </div>
                                                <div class="col-2">
                                                    <input name="login_attemp" value="<?php echo $preference_and_security['login_attemp']; ?>" class="form-control" type="number">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <div class="col-6">
                                                    <label class="form-check-label" for="password_expirey_day">
                                                        Password Expire every <small>(days)</small>:
                                                    </label>
                                                </div>
                                                <div class="col-2">
                                                    <input name="password_expirey_day" value="<?php echo $preference_and_security['password_expirey_day']; ?>" class="form-control" type="number">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <div class="col-6">
                                                    <label class="form-check-label" for="password_lenght">
                                                        Password length requirement <small>(days)</small>
                                                    </label>
                                                </div>
                                                <div class="col-2">
                                                    <input name="password_lenght" value="<?php echo $preference_and_security['password_lenght']; ?>" class="form-input" type="number">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <div class="col-6">
                                                    <label class="form-check-label" for="number_in_password">
                                                        Password Require a number
                                                    </label>
                                                </div>
                                                <div class="col-2">
                                                    <input name="number_in_password" <?php if($preference_and_security['number_in_password']) echo 'checked'; ?> class="form-check-input" type="checkbox">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <div class="col-6">
                                                    <label class="form-check-label" for="symbol_in_password">
                                                        Password Require a Symbol
                                                    </label>
                                                </div>
                                                <div class="col-2">
                                                    <input name="symbol_in_password" <?php if($preference_and_security['symbol_in_password']) echo 'checked'; ?> class="form-check-input" type="checkbox">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <div class="col-6">
                                                    <label class="form-check-label" for="track_ip_address">
                                                        Track IP address base on account login
                                                    </label>
                                                </div>
                                                <div class="col-2">
                                                    <input name="track_ip_address" <?php if($preference_and_security['track_ip_address']) echo 'checked'; ?> class="form-check-input" type="checkbox">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <div class="col-6">
                                                    <label class="form-check-label" for="twofa">
                                                        Enable 2FA for account login. Google Auth or email message.
                                                    </label>
                                                </div>
                                                <div class="col-2">
                                                    <input name="twofa" <?php if($preference_and_security['twofa']) echo 'checked'; ?> class="form-check-input" type="checkbox">
                                                </div>
                                            </div>
                                        </div>
                                       <div class="class">
                                            <div class="col-12">
                                                <button type="submit" name="save_preference_securoty" value="save_preference_securoty" class="btn btn-primary">Save Changes</button>
                                            </div>
                                       </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="nav-alert-triggers-settings" role="tabpanel" aria-labelledby="nav-alert-triggers-settings-tab" tabindex="0">
                                <form method="Post">

                                <?php
                                    $chk = "select * from jeoXillityCrm_alert_permissions_setting where compnay_id='$session_userId'";
                                    $chk_run = mysqli_query($con, $chk);
                                    $alert_permissions_setting = mysqli_fetch_assoc($chk_run);
                                    ?>

                                    <div class="row">

                                        <div class="profile-edit-tab-title">
                                            <h6>Alert Triggers Settings</h6>
                                        </div>

                                        <div class="row">
                                            <div class="form-check">
                                                <div class="col-6">
                                                    <label class="form-check-label" for="ticket_created">
                                                        Alert me when a new ticket has been created.
                                                    </label>
                                                </div>
                                                <div class="col-2">
                                                    <input name="ticket_created"  <?php if($alert_permissions_setting['ticket_created']) echo 'checked'; ?> class="form-check-input" type="checkbox" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-check">
                                                <div class="col-6">
                                                    <label class="form-check-label" for="ticket_deleted">
                                                        Alert me when a ticket has been deleted.
                                                    </label>
                                                </div>
                                                <div class="col-2">
                                                    <input name="ticket_deleted" <?php if($alert_permissions_setting['ticket_deleted']) echo 'checked'; ?> class="form-check-input" type="checkbox" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-check">
                                                <div class="col-6">
                                                    <label class="form-check-label" for="ticket_assigned">
                                                        Alert me when a ticket has been assigned to me
                                                    </label>
                                                </div>
                                                <div class="col-2">
                                                    <input name="ticket_assigned" <?php if($alert_permissions_setting['ticket_assigned']) echo 'checked'; ?> class="form-check-input" type="checkbox" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-check">
                                                <div class="col-6">
                                                    <label class="form-check-label" for="event_created">
                                                        Alert me when a new calendar event has been created
                                                    </label>
                                                </div>
                                                <div class="col-2">
                                                    <input name="event_created" <?php if($alert_permissions_setting['event_created']) echo 'checked'; ?> class="form-check-input" type="checkbox" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-check">
                                                <div class="col-6">
                                                    <label class="form-check-label" for="ticket_overdue">
                                                        Alert Me when a ticket is overdue 
                                                    </label>
                                                </div>
                                                <div class="col-2">
                                                    <input name="ticket_overdue" <?php if($alert_permissions_setting['ticket_overdue']) echo 'checked'; ?> class="form-check-input" type="checkbox" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-check">
                                                <div class="col-6">
                                                    <label class="form-check-label" for="account_locked">
                                                        Notify user when account has been locked due to exceeded login attempts
                                                    </label>
                                                </div>
                                                <div class="col-2">
                                                    <input name="account_locked" <?php if($alert_permissions_setting['account_locked']) echo 'checked'; ?> class="form-check-input" type="checkbox" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="class">
                                            <div class="col-12">
                                                <button type="submit" name="alert_permissions_setting" value="alert_permissions_setting" class="btn btn-primary">Save Changes</button>
                                            </div>
                                       </div>
                                    </div>
                                </form>
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

<!-- Model to create gateway -->
<div class="modal fade" id="create_record_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modelTitle">Add Email Servers</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form class="kt-form" action="" method="Post" enctype="multipart/form-data">
                    <div class="kt-portlet__body">
                        <div class="form-group ">
                            <div class="row w-100 my-1">
                                <div class="col-md-4">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-8 ">
                                    <input type="text" name="email" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row w-100 my-1">
                                <div class="col-md-4">
                                    <label>Password</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="password" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row w-100 my-1">
                                <div class="col-md-4">
                                    <label>Port No.</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" min="1" name="port_no" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row w-100 my-1">
                                <div class="col-md-4">
                                    <label>IP Address</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="ip_address" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row w-100 my-1">
                                <div class="col-md-4">
                                    <label>Department</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="department" class="form-select" data-placeholder="Select Department">
                                        <option value="">Select Department</option>
                                        <?php $result = getAll($con, "select * from jeoxillitycrm_departments");
                                        foreach ($result as $index => $department) { ?>
                                        <option value="<?php echo $department['name']; ?>"><?php echo $department['name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row w-100 my-1">
                                <div class="col-md-4">
                                    <label>Priority</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="priority" class="form-select" data-placeholder="Select Priority">
                                        <option value="">Select Priority</option>
                                        <?php $result = getAll($con, "select * from jeoxillitycrm_task_priorities");
                                         foreach ($result as $index => $priority) { ?>
                                        <option value="<?php echo $priority['name']; ?>"><?php echo $priority['name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row w-100 my-1">
                                <div class="col-md-4">
                                    <label>Ticket Status</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="status" class="form-select" data-placeholder="Select Ticket Status">
                                        <option value="">Select Ticket Status</option>
                                        <?php $result = getAll($con, "select * from jeoxillitycrm_task_priorities");
                                         foreach ($result as $index => $status) { ?>
                                        <option value="<?php echo $status['name']; ?>"><?php echo $status['name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <input type="text" name="actionId" value="" hidden>
                    </div>
                    <div class="kt-portlet__foot mt-3">
                        <div class="kt-form__actions ">
                            <input type="submit" name="create_server" value="Submit" class="btn btn-primary">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Model to create email template -->
<div class="modal" id="create_email_template_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="emailTemplateModelTitle">Create New Email Template</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form class="kt-form" action="" method="Post" enctype="multipart/form-data">
                <input type="hidden" name="template_id" class="form-control" >
                    <div class="kt-portlet__body">
                        <div class="form-group ">
                            <div class="row w-100 my-1">
                                <div class="col-md-4">
                                    <label>Template Name:</label>
                                </div>
                                <div class="col-md-8 ">
                                    <input type="text" name="template_name" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row w-100 my-1">
                                <div class="col-md-4">
                                    <label>Subject:</label>
                                </div>
                                <div class="col-md-8 ">
                                    <input type="text" name="subject" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row w-100 my-1">
                                <div class="col-md-4">
                                    <label>Body:</label>
                                </div>
                                <div class="col-md-8">
                                    <textarea class="form-control h-100-p" id="body"  name="body" placeholder="Create Email Template"></textarea>
                                    <script> CKEDITOR.replace('body');</script>
                                </div>
                            </div>
                        </div>
                       
                        <input type="text" name="actionId" value="" hidden>
                    </div>
                    <div class="kt-portlet__foot mt-3">
                        <div class="kt-form__actions ">
                            <button type="submit" name="create_template" id="template_model_button" class="btn btn-primary">Create Template </button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    
    $(document).ready(function() {
        $("#create_email_template_modal").on('show.bs.modal', function(e) {
            var mydata = $(e.relatedTarget).data('mydata');
            console.log(mydata);
            if (mydata != null) {
                $("#emailTemplateModelTitle").html("Update Email Template");
                $("#template_model_button").html("Update Template");
                $("input[name='template_id']").val(mydata['id']);
                $("input[name='template_name']").val(mydata['name']);
                $("input[name='subject']").val(mydata['subject']);
                CKEDITOR.instances['body'].setData(mydata['body']);
                mydata = null;
            } else {
                $("#emailTemplateModelTitle").html("Create New Email Template");
                $("#template_model_button").html("Create Template");
                $("input[name='template_name']").val('');
                $("input[name='subject']").val('');
                $("input[name='template_id']").val('');
                CKEDITOR.instances['body'].setData('');
            }
        });
    })
</script>


<script>
    
    $(document).ready(function() {
        $("#create_record_modal").on('show.bs.modal', function(e) {
            var mydata = $(e.relatedTarget).data('mydata');
            console.log(mydata);
            if (mydata != null) {
                $("#modelTitle").html("Update");
                $("input[name='email']").val(mydata['email']);
                $("input[name='password']").val(mydata['password']);
                $("input[name='port_no']").val(mydata['port_no']);
                $("input[name='ip_address']").val(mydata['ip_address']);
                $("select[name='department']").val(mydata['department']);
                $("select[name='priority']").val(mydata['priority']);
                $("select[name='status']").val(mydata['status']);
                $("input[name='actionId']").val(mydata['id'])
            } else {
                $("#modelTitle").html("Insert");
                $("input[name='email']").val("")
                $("input[name='port_no']").val("")
                $("input[name='ip_address']").val("")
                $("select[name='department']").val("")
                $("select[name='priority']").val("")
                $("select[name='status']").val("")
                $("input[name='password']").val("")
                $("input[name='actionId']").val("")
            }
        });
    })
</script>

<!-- <script>
    $(document).ready(function() {
        $("#create_record_modal").on('show.bs.modal', function(e) {
            var mydata = $(e.relatedTarget).data('mydata');
            console.log("mydata->", mydata);
            $("input[type='checkbox']").prop('checked', false);
            if (mydata != null) {
                $("#modelTitle").html("Update");
                $("input[name='company_name']").val(mydata['company_name'])
                $("input[name='email']").val(mydata['email'])
                $("input[name='about']").val(mydata['about'])
                $("input[name='number']").val(mydata['number'])
                $("input[name='role']").val(mydata['role'])
                $("input[name='enable_disable']").val(mydata['enable_disable'])
                $("input[name='gmail']").val(mydata['gmail'])
                $("input[name='phone_number']").val(mydata['phone_number'])
                $("input[name='company_mail']").val(mydata['company_mail'])
                $("input[name='address']").val(mydata['address'])
                $("input[name='facebook_link']").val(mydata['facebook_link'])
                $("input[name='twitter_link']").val(mydata['twitter_link'])
                $("input[name='linkedin_link']").val(mydata['linkedin_link'])
                $("input[name='instagram_link']").val(mydata['instagram_link'])
                $("input[name='youtube_link']").val(mydata['youtube_link'])
                $("input[name='pinterest_link']").val(mydata['pinterest_link'])
                $("input[name='current_password']").val(mydata['current_password'])
                $("input[name='new_password']").val(mydata['new_password'])
                $("input[name='confirm_password']").val(mydata['confirm_password'])
                $("input[name='actionId']").val(mydata['id'])
            } else {
                $("#modelTitle").html("Insert");
                $("input[name='company_name']").val("")
                $("input[name='email']").val("")
                $("input[name='about']").val("")
                $("input[name='number']").val("")
                $("input[name='role']").val("")
                $("input[name='enable_disable']").val("")
                $("input[name='gmail']").val("")
                $("input[name='phone_number']").val("")
                $("input[name='company_mail']").val("")
                $("input[name='address']").val("")
                $("input[name='facebook_link']").val("")
                $("input[name='twitter_link']").val("")
                $("input[name='linkedin_link']").val("")
                $("input[name='instagram_link']").val("")
                $("input[name='youtube_link']").val("")
                $("input[name='pinterest_link']").val("")
                $("input[name='current_password']").val("")
                $("input[name='new_password']").val("")
                $("input[name='confirm_password']").val("")
                $("input[name='actionId']").val("")
            }
        });
    })
</script> -->

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
            reader.readAsDataURL(profilePicInput.files[0]);
        }
    });
</script>

</html>