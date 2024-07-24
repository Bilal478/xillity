<? require("./global.php");

$id = $_GET['id'];

$employee_info = getRow($con, "SELECT * FROM jeoXillityCrm_users WHERE id = '$id'");



$primaryTableName = "users";

array(
    // field_name [type, isrequired, array_select, inner_type] <= "template"
    "name" => ["input", "", "", "text"],
    "email" => ["input", "", "", "text"],
    "phone" => ["input", "", "", "text"],
    "alternative_phone" => ["input", "", "", "text"],
    "shift" => ["input", "", "", "text"],
    "country" => ["input", "", "", "text"],
    "department" => ["input", "", "", "text"],
    "section" => ["input", "", "", "text"],
    "sub_section" => ["input", "", "", "text"],
    "designation" => ["input", "", "", "text"],
    "employee_type" => ["input", "", "", "text"],
    "duty_type" => ["input", "", "", "text"],
    "joining_date" => ["input", "", "", "text"],
    "leave_expire_date" => ["input", "", "", "text"],
    "grade" => ["input", "", "", "text"],
    "starting_gross_salary" => ["input", "", "", "text"],
    "salary_system" => ["input", "", "", "text"],
    "mobile_banking_provider_name" => ["input", "", "", "text"],
    "mobile_banking_account_number" => ["input", "", "", "text"],
    "bank_name" => ["input", "", "", "text"],
    "bank_branch_name" => ["input", "", "", "text"],
    "bank_account_name" => ["input", "", "", "text"],
    "bank_account_number" => ["input", "", "", "text"],
    "division" => ["input", "", "", "text"],
    "district" => ["input", "", "", "text"],
    "subdistrict" => ["input", "", "", "text"],
    "post_office" => ["input", "", "", "text"],
    "post_office" => ["input", "", "", "text"],
    "present_division" => ["input", "", "", "text"],
    "present_district" => ["input", "", "", "text"],
    "present_subdistrict" => ["input", "", "", "text"],
    "present_post_office" => ["input", "", "", "text"],
    "present_village_house_road" => ["input", "", "", "text"],
    "father_husband_name" => ["input", "", "", "text"],
    "mother_name" => ["input", "", "", "text"],
    "dob" => ["input", "", "", "text"],
    "nid_no_birth_certificate" => ["input", "", "", "text"],
    "profile_pic" => ["input", "", "", "text"],
    "gender" => ["input", "", "", "text"],
    "marital_status" => ["input", "", "", "text"],
    "blood_group" => ["input", "", "", "text"],
    "religion" => ["input", "", "", "text"],
    "contact_person_name" => ["input", "", "", "text"],
    "contact_person_phone" => ["input", "", "", "text"],
    "relation" => ["input", "", "", "text"],
    "login_access" => ["input", "", "", "text"],

);

$shift_options = convertArrayToIndexArray(["Shift 1", "Shift 2", "Shift 3"]);
$country_options = convertArrayToIndexArray(["Afghanistan", "India", "Pakistan", "USA"]);
$department_options = convertArrayToIndexArray(["Department 1", "Department 2", "Department 3"]);
$section_options = convertArrayToIndexArray(["Section 1", "Section 2", "Section 3"]);
$sub_section_options = convertArrayToIndexArray(["Subsection 1", "Subsection 2", "Subsection 3"]);
$designation_options = convertArrayToIndexArray(["Designation 1", "Designation 2", "Designation 3"]);
$employee_type_options = convertArrayToIndexArray(["Employee Type 1", "Employee Type 2", "Employee Type 3"]);
$duty_type_options = convertArrayToIndexArray(["Duty Type 1", "Duty Type 2", "Duty Type 3"]);
$grade_options = convertArrayToIndexArray(["Grade 1", "Grade 2", "Grade 3"]);
$salary_system_options = convertArrayToIndexArray(["Salary System 1", "Salary System 2", "Salary System 3"]);
$division_options = convertArrayToIndexArray(["Division 1", "Division 2", "Division 3"]);
$district_options = convertArrayToIndexArray(["District 1", "District 2", "District 3"]);
$subdistrict_options = convertArrayToIndexArray(["Subdistrict 1", "Subdistrict 2", "Subdistrict 3"]);
$post_office_options = convertArrayToIndexArray(["Post Office 1", "Post Office 2", "Post Office 3"]);
$gender_options = convertArrayToIndexArray(["Male", "Female", "Other"]);
$marital_status_options = convertArrayToIndexArray(["Married", "Unmarried", "Divorced"]);
$blood_group_options = convertArrayToIndexArray(["A+", "A-", "B+", "B-", "O+", "O-", "AB+", "AB-"]);
$religion_options = convertArrayToIndexArray(["Christianity", "Islam", "Hinduism", "Buddhism", "Sikhism", "Judaism"]);


if (isset($_POST['create_package'])) {
    $actionId = $id;
    $name = escape($_POST['name']);
    $email = escape($_POST['email']);
    $phone = escape($_POST['phone']);
    $alternative_phone = escape($_POST['alternative_phone']);
    $shift = escape($_POST['shift']);
    $country = escape($_POST['country']);
    $department = escape($_POST['department']);
    $section = escape($_POST['section']);
    $sub_section = escape($_POST['sub_section']);
    $designation = escape($_POST['designation']);
    $employee_type = escape($_POST['employee_type']);
    $duty_type = escape($_POST['duty_type']);
    $joining_date = escape($_POST['joining_date']);
    $leave_expire_date = escape($_POST['leave_expire_date']);
    $grade = escape($_POST['grade']);
    $starting_gross_salary = escape($_POST['starting_gross_salary']);
    $salary_system = escape($_POST['salary_system']);
    $mobile_banking_provider_name = escape($_POST['mobile_banking_provider_name']);
    $mobile_banking_account_number = escape($_POST['mobile_banking_account_number']);
    $bank_name = escape($_POST['bank_name']);
    $bank_branch_name = escape($_POST['bank_branch_name']);
    $bank_account_name = escape($_POST['bank_account_name']);
    $bank_account_number = escape($_POST['bank_account_number']);
    $division = escape($_POST['division']);
    $district = escape($_POST['district']);
    $subdistrict = escape($_POST['subdistrict']);
    $post_office = escape($_POST['post_office']);
    $present_division = escape($_POST['present_division']);
    $present_district = escape($_POST['present_district']);
    $present_subdistrict = escape($_POST['present_subdistrict']);
    $present_post_office = escape($_POST['present_post_office']);
    $present_village_house_road = escape($_POST['present_village_house_road']);
    if ($_POST['present_address_check'] == "Yes") {
        $present_division = $division;
        $present_district = $district;
        $present_subdistrict = $subdistrict;
        $present_post_office = $post_office;
    }
    $father_husband_name = escape($_POST['father_husband_name']);
    $mother_name = escape($_POST['mother_name']);
    $dob = escape($_POST['dob']);
    $nid_no_birth_certificate = escape($_POST['nid_no_birth_certificate']);
    $profile_pic = escape($_POST['profile_pic']);
    $gender = escape($_POST['gender']);
    $marital_status = escape($_POST['marital_status']);
    $blood_group = escape($_POST['blood_group']);
    $religion = escape($_POST['religion']);
    $contact_person_name = escape($_POST['contact_person_name']);
    $contact_person_phone = escape($_POST['contact_person_phone']);
    $relation = escape($_POST['relation']);
    $login_access = escape($_POST['login_access']);

    if (isset($_POST['password'])) {
        $password = $_POST['password'];
        $_POST['password'] = mb_htmlentities(md5(md5(sha1($_POST['password'])) . 'Anomoz'));
        $passwords = $_POST['password'];
    }
    // $password = escape($_POST['password']);

    if ($actionId == "") {
        $id = generateRandomString();
        $actionId = $id;
        $query = "insert into jeoXillityCrm_users set id='$id' , name='$name', email='$email', password='$passwords', role='employee', phone='$phone', alternative_phone='$alternative_phone', shift='$shift', country='$country', department='$department', section='$section', sub_section='$sub_section', designation='$designation', employee_type='$employee_type', duty_type='$duty_type', joining_date='$joining_date', leave_expire_date='$leave_expire_date', grade='$grade', starting_gross_salary='$starting_gross_salary', salary_system='$salary_system', mobile_banking_provider_name='$mobile_banking_provider_name', mobile_banking_account_number='$mobile_banking_account_number', bank_name='$bank_name', bank_branch_name='$bank_branch_name', bank_account_name='$bank_account_name', bank_account_number='$bank_account_number', division='$division', district='$district', subdistrict='$subdistrict', post_office='$post_office', present_division='$present_division', present_district='$present_district', present_subdistrict='$present_subdistrict', present_post_office='$present_post_office', present_village_house_road='$present_village_house_road', father_husband_name='$father_husband_name', mother_name='$mother_name', dob='$dob', nid_no_birth_certificate='$nid_no_birth_certificate', gender='$gender', marital_status='$marital_status', blood_group='$blood_group', religion='$religion', contact_person_name='$contact_person_name', contact_person_phone='$contact_person_phone', relation='$relation', login_access='$login_access', timeAdded='$timeAdded', userId='$session_userId' ";
    } else {
        $query = "update jeoXillityCrm_users set id='$actionId' , name='$name', email='$email', password='$passwords', role='employee', phone='$phone', alternative_phone='$alternative_phone', shift='$shift', country='$country', department='$department', section='$section', sub_section='$sub_section', designation='$designation', employee_type='$employee_type', duty_type='$duty_type', joining_date='$joining_date', leave_expire_date='$leave_expire_date', grade='$grade', starting_gross_salary='$starting_gross_salary', salary_system='$salary_system', mobile_banking_provider_name='$mobile_banking_provider_name', mobile_banking_account_number='$mobile_banking_account_number', bank_name='$bank_name', bank_branch_name='$bank_branch_name', bank_account_name='$bank_account_name', bank_account_number='$bank_account_number', division='$division', district='$district', subdistrict='$subdistrict', post_office='$post_office', present_division='$present_division', present_district='$present_district', present_subdistrict='$present_subdistrict', present_post_office='$present_post_office', present_village_house_road='$present_village_house_road', father_husband_name='$father_husband_name', mother_name='$mother_name', dob='$dob', nid_no_birth_certificate='$nid_no_birth_certificate', gender='$gender', marital_status='$marital_status', blood_group='$blood_group', religion='$religion', contact_person_name='$contact_person_name', contact_person_phone='$contact_person_phone', relation='$relation', login_access='$login_access' where id='$actionId'";
    }
    // echo $query;
    // exit;
    runQuery($query);

    $profile_pic = storeFile($_FILES['profile_pic']);
    if ($profile_pic != "") {
        $query = "update jeoXillityCrm_users set profile_pic='$profile_pic' where id='$actionId'";
        runQuery($query);
    }


    header("Location: ./all-employee.php?" . generateUrlParams_return(["m" => "Data was saved successfully!", "type" => "success"]));
    exit();
}

if (isset($_GET['delete-record'])) {
    $id = escape($_GET['delete-record']);
    $query = "delete from jeoXillityCrm_users where id='$id'";
    runQuery($query);
}


?>

<!DOCTYPE html>

<html lang="en" data-menu="vertical" data-nav-size="nav-default">

<head>


    <? include("./includes/views/head2.php"); ?>

</head>

<body class="body-padding body-p-top">
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

            <h2>Add Employee</h2>

            <div class="btn-box">

                <!-- <a href="error-404.php" class="btn btn-sm btn-primary">Save User.</a> -->

            </div>

        </div>

        <form method="POST" enctype="multipart/form-data">
            <div class="row">

                <div class="col-12">

                    <div class="panel">

                        <div class="panel-header">

                            <h5>Basic Information</h5>

                        </div>

                        <div class="panel-body">

                            <div class="row g-3">


                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Full Name</label>

                                    <input type="text" name="name" value="<? echo $employee_info['name'] ?>" class="form-control form-control-sm">

                                </div>




                                <? if ($session_id == $_GET['id']) { ?>
                                    <div class="col-xxl-3 col-lg-4 col-sm-6">

                                        <label class="form-label">Email</label>

                                        <input type="email" name="email" value="<? echo $employee_info['email'] ?>" class="form-control form-control-sm" required readonly>

                                    </div>

                                <?  } else { ?>
                                    <div class="col-xxl-3 col-lg-4 col-sm-6">

                                        <label class="form-label">Email</label>

                                        <input type="email" name="email" value="<? echo $employee_info['email'] ?>" class="form-control form-control-sm" required>

                                    </div>
                                <? } ?>



                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Phone</label>

                                    <input type="tel" name="phone" value="<? echo $employee_info['phone'] ?>" class="form-control form-control-sm">

                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Shift</label>

                                    <select name="shift" class="form-control form-control-sm" data-placeholder="Select Shift">

                                        <option value="" selected disabled>Select Shift</option>

                                        <? foreach ($shift_options as $i => $option) { ?>
                                            <option value="<? echo $i ?>" <? if ($employee_info['shift'] == $i) {
                                                                                echo "selected";
                                                                            } ?>><? echo $option ?></option>
                                        <? } ?>

                                    </select>

                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Alternative Phone</label>

                                    <input type="tel" name="alternative_phone" value="<? echo $employee_info['alternative_phone'] ?>" class="form-control form-control-sm">

                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Country</label>

                                    <select name="country" value="<? echo $employee_info['name'] ?>" class="form-control form-control-sm" data-placeholder="Select Country">

                                        <option value="" selected disabled>Select Country</option>

                                        <? foreach ($country_options as $i => $option) { ?>
                                            <option value="<? echo $i ?>" <? if ($employee_info['country'] == $i) {
                                                                                echo "selected";
                                                                            } ?>><? echo $option ?></option>
                                        <? } ?>

                                    </select>

                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Employee Photo</label>

                                    <input type="file" name="profile_pic" class="form-control form-control-sm">

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-12">

                    <div class="panel">

                        <div class="panel-header">

                            <h5>Personal Information</h5>

                        </div>

                        <div class="panel-body">

                            <div class="row g-3">

                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Department</label>

                                    <select name="department" value="<? echo $employee_info['name'] ?>" class="form-control form-control-sm" data-placeholder="Choose Department">

                                        <option value="" selected disabled>Choose Department</option>

                                        <? foreach ($country_options as $i => $option) { ?>
                                            <option value="<? echo $i ?>" <? if ($employee_info['department'] == $i) {
                                                                                echo "selected";
                                                                            } ?>><? echo $option ?></option>
                                        <? } ?>

                                    </select>

                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Section</label>

                                    <select name="section" value="<? echo $employee_info['name'] ?>" class="form-control form-control-sm" data-placeholder="Choose Section">

                                        <option value="" selected disabled>Choose Section</option>

                                        <? foreach ($section_options as $i => $option) { ?>
                                            <option value="<? echo $i ?>" <? if ($employee_info['section'] == $i) {
                                                                                echo "selected";
                                                                            } ?>><? echo $option ?></option>
                                        <? } ?>
                                    </select>

                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Sub Section</label>

                                    <select name="sub_section" value="<? echo $employee_info['name'] ?>" class="form-control form-control-sm" data-placeholder="Choose Subsection">

                                        <option value="" selected disabled>Choose Subsection</option>

                                        <? foreach ($sub_section_options as $i => $option) { ?>
                                            <option value="<? echo $i ?>" <? if ($employee_info['sub_section'] == $i) {
                                                                                echo "selected";
                                                                            } ?>><? echo $option ?></option>
                                        <? } ?>
                                    </select>

                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Designation</label>

                                    <select name="designation" value="<? echo $employee_info['name'] ?>" class="form-control form-control-sm" data-placeholder="Choose Designation">

                                        <option value="" selected disabled>Choose Designation</option>

                                        <? foreach ($designation_options as $i => $option) { ?>
                                            <option value="<? echo $i ?>" <? if ($employee_info['designation'] == $i) {
                                                                                echo "selected";
                                                                            } ?>><? echo $option ?></option>
                                        <? } ?>

                                    </select>

                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Employee Type</label>

                                    <select name="employee_type" value="<? echo $employee_info['name'] ?>" class="form-control form-control-sm" data-placeholder="Choose Employee Type">

                                        <option value="" selected disabled>Choose Employee Type</option>

                                        <? foreach ($employee_type_options as $i => $option) { ?>
                                            <option value="<? echo $i ?>" <? if ($employee_info['employee_type'] == $i) {
                                                                                echo "selected";
                                                                            } ?>><? echo $option ?></option>
                                        <? } ?>

                                    </select>

                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Duty Type</label>

                                    <select name="duty_type" value="<? echo $employee_info['name'] ?>" class="form-control form-control-sm" data-placeholder="Choose Duty Type">

                                        <option value="" selected disabled>Choose Duty Type</option>

                                        <? foreach ($duty_type_options as $i => $option) { ?>
                                            <option value="<? echo $i ?>" <? if ($employee_info['duty_type'] == $i) {
                                                                                echo "selected";
                                                                            } ?>><? echo $option ?></option>
                                        <? } ?>

                                    </select>

                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Joining Date</label>

                                    <input type="text" name="joining_date" value="<? echo $employee_info['joining_date'] ?>" class="form-control form-control-sm date-picker" readonly placeholder="dd mmm, yy">

                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Leave / Expire Date</label>

                                    <input type="text" name="leave_expire_date" value="<? echo $employee_info['leave_expire_date'] ?>" class="form-control form-control-sm date-picker" readonly placeholder="dd mmm, yy">

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-12">

                    <div class="panel">

                        <div class="panel-header">

                            <h5>Salary</h5>

                        </div>

                        <div class="panel-body">

                            <div class="row g-3">

                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Grade</label>

                                    <select name="grade" value="<? echo $employee_info['name'] ?>" class="form-control form-control-sm" data-placeholder="Choose Grade">

                                        <option value="" selected disabled>Choose Grade</option>

                                        <? foreach ($grade_options as $i => $option) { ?>
                                            <option value="<? echo $i ?>" <? if ($employee_info['grade'] == $i) {
                                                                                echo "selected";
                                                                            } ?>><? echo $option ?></option>
                                        <? } ?>

                                    </select>

                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Starting Gross Salary</label>

                                    <input type="number" name="starting_gross_salary" value="<? echo $employee_info['starting_gross_salary'] ?>" class="form-control form-control-sm">

                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Salary System</label>

                                    <select name="salary_system" value="<? echo $employee_info['name'] ?>" class="form-control form-control-sm" data-placeholder="Choose Salary System">

                                        <option value="" selected disabled>Choose Salary System</option>

                                        <? foreach ($salary_system_options as $i => $option) { ?>
                                            <option value="<? echo $i ?>" <? if ($employee_info['salary_system'] == $i) {
                                                                                echo "selected";
                                                                            } ?>><? echo $option ?></option>
                                        <? } ?>

                                    </select>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <!--
                <div class="col-12">

                    <div class="panel">

                        <div class="panel-header">

                            <h5>Banking Account Details</h5>

                        </div>

                        <div class="panel-body">

                            <div class="row g-3">

                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Mobile Banking Provider Name</label>

                                    <input type="text" name="mobile_banking_provider_name" value="<? echo $employee_info['mobile_banking_provider_name'] ?>" class="form-control form-control-sm">

                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Mobile Banking Account Number</label>

                                    <input type="tel" name="mobile_banking_account_number" value="<? echo $employee_info['mobile_banking_account_number'] ?>" class="form-control form-control-sm">

                                </div>

                                <div class="col-xxl-6 col-lg-4"></div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Bank Name</label>

                                    <input type="text" name="bank_name" value="<? echo $employee_info['bank_name'] ?>" class="form-control form-control-sm">

                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Bank Branch Name</label>

                                    <input type="text" name="bank_branch_name" value="<? echo $employee_info['bank_branch_name'] ?>" class="form-control form-control-sm">

                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Bank Account Name</label>

                                    <input type="text" name="bank_account_name" value="<? echo $employee_info['bank_account_name'] ?>" class="form-control form-control-sm">

                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Bank Account Number</label>

                                    <input type="number" name="bank_account_number" value="<? echo $employee_info['bank_account_number'] ?>" class="form-control form-control-sm">

                                </div>

                            </div>

                        </div>

                    </div>

                </div> -->

                <div class="col-12">

                    <div class="panel">

                        <div class="panel-header">

                            <h5>Permanent & Present Address</h5>

                        </div>

                        <div class="panel-body">

                            <div class="card mb-20">

                                <div class="card-header">

                                    Permanent Address

                                </div>

                                <div class="card-body">

                                    <div class="row g-3">

                                        <div class="col-xxl-3 col-lg-4 col-sm-6">

                                            <label class="form-label">Division</label>

                                            <select name="division" value="<? echo $employee_info['name'] ?>" class="form-control form-control-sm" data-placeholder="Choose Division">

                                                <option value="" selected disabled>Choose Division</option>

                                                <? foreach ($division_options as $i => $option) { ?>
                                                    <option value="<? echo $i ?>" <? if ($employee_info['division'] == $i) {
                                                                                        echo "selected";
                                                                                    } ?>><? echo $option ?></option>
                                                <? } ?>

                                            </select>

                                        </div>

                                        <div class="col-xxl-3 col-lg-4 col-sm-6">

                                            <label class="form-label">District</label>

                                            <select name="district" value="<? echo $employee_info['name'] ?>" class="form-control form-control-sm" data-placeholder="Choose District">

                                                <option value="" selected disabled>Choose District</option>

                                                <? foreach ($district_options as $i => $option) { ?>
                                                    <option value="<? echo $i ?>" <? if ($employee_info['district'] == $i) {
                                                                                        echo "selected";
                                                                                    } ?>><? echo $option ?></option>
                                                <? } ?>
                                            </select>

                                        </div>

                                        <div class="col-xxl-3 col-lg-4 col-sm-6">

                                            <label class="form-label">Subdistrict</label>

                                            <select name="subdistrict" value="<? echo $employee_info['name'] ?>" class="form-control form-control-sm" data-placeholder="Choose Subdistrict">

                                                <option value="" selected disabled>Choose Subdistrict</option>

                                                <? foreach ($subdistrict_options as $i => $option) { ?>
                                                    <option value="<? echo $i ?>" <? if ($employee_info['subdistrict'] == $i) {
                                                                                        echo "selected";
                                                                                    } ?>><? echo $option ?></option>
                                                <? } ?>


                                            </select>

                                        </div>

                                        <div class="col-xxl-3 col-lg-4 col-sm-6">

                                            <label class="form-label">Post Office</label>

                                            <select name="post_office" value="<? echo $employee_info['name'] ?>" class="form-control form-control-sm" data-placeholder="Choose Post Office">

                                                <option value="" selected disabled>Choose Post Office</option>

                                                <? foreach ($post_office_options as $i => $option) { ?>
                                                    <option value="<? echo $i ?>" <? if ($employee_info['post_office'] == $i) {
                                                                                        echo "selected";
                                                                                    } ?>><? echo $option ?></option>
                                                <? } ?>

                                            </select>

                                        </div>

                                        <div class="col-xxl-6 col-lg-8">

                                            <label class="form-label">Village / House / Road</label>

                                            <input type="text" name="village_house_road" value="<? echo $employee_info['village_house_road'] ?>" class="form-control form-control-sm">

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="card">

                                <div class="card-header d-flex gap-4">

                                    Present Address

                                    <div class="form-check d-inline-flex">

                                        <input name="present_address_check" value="Yes" class="form-check-input" type="checkbox" id="presentSameAsPermanent">

                                        <label class="form-check-label" for="presentSameAsPermanent">

                                            Present Address Same As Permanent Address

                                        </label>

                                    </div>

                                </div>

                                <div class="card-body">

                                    <div class="row g-3">

                                        <div class="col-xxl-3 col-lg-4 col-sm-6">

                                            <label class="form-label">Division</label>

                                            <select name="present_division" value="<? echo $employee_info['name'] ?>" class="form-control form-control-sm" data-placeholder="Choose Division">

                                                <option value="" selected disabled>Choose Division</option>

                                                <? foreach ($division_options as $i => $option) { ?>
                                                    <option value="<? echo $i ?>" <? if ($employee_info['present_division'] == $i) {
                                                                                        echo "selected";
                                                                                    } ?>><? echo $option ?></option>
                                                <? } ?>
                                            </select>

                                        </div>

                                        <div class="col-xxl-3 col-lg-4 col-sm-6">

                                            <label class="form-label">District</label>

                                            <select name="present_district" value="<? echo $employee_info['name'] ?>" class="form-control form-control-sm" data-placeholder="Choose District">

                                                <option value="" selected disabled>Choose District</option>

                                                <? foreach ($district_options as $i => $option) { ?>
                                                    <option value="<? echo $i ?>" <? if ($employee_info['present_district'] == $i) {
                                                                                        echo "selected";
                                                                                    } ?>><? echo $option ?></option>
                                                <? } ?>

                                            </select>

                                        </div>

                                        <div class="col-xxl-3 col-lg-4 col-sm-6">

                                            <label class="form-label">Subdistrict</label>

                                            <select name="present_subdistrict" value="<? echo $employee_info['name'] ?>" class="form-control form-control-sm" data-placeholder="Choose Subdistrict">

                                                <option value="" selected disabled>Choose Subdistrict</option>

                                                <? foreach ($subdistrict_options as $i => $option) { ?>
                                                    <option value="<? echo $i ?>" <? if ($employee_info['present_subdistrict'] == $i) {
                                                                                        echo "selected";
                                                                                    } ?>><? echo $option ?></option>
                                                <? } ?>

                                            </select>

                                        </div>

                                        <div class="col-xxl-3 col-lg-4 col-sm-6">

                                            <label class="form-label">Post Office</label>

                                            <select name="present_post_office" value="<? echo $employee_info['name'] ?>" class="form-control form-control-sm" data-placeholder="Choose Post Office">

                                                <option value="" selected disabled>Choose Post Office</option>

                                                <? foreach ($post_office_options as $i => $option) { ?>
                                                    <option value="<? echo $i ?>" <? if ($employee_info['present_post_office'] == $i) {
                                                                                        echo "selected";
                                                                                    } ?>><? echo $option ?></option>
                                                <? } ?>

                                            </select>

                                        </div>

                                        <div class="col-xxl-6 col-lg-8">

                                            <label class="form-label">Village / House / Road</label>

                                            <input type="text" name="present_village_house_road" value="<? echo $employee_info['present_village_house_road'] ?>" class="form-control form-control-sm">

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- <div class="col-12">

                    <div class="panel">

                        <div class="panel-header">

                            <h5>Biographical Information</h5>

                        </div>

                        <div class="panel-body">

                            <div class="row g-3">

                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Father / Husband Name</label>

                                    <input type="text" name="father_husband_name" value="<? echo $employee_info['father_husband_name'] ?>" class="form-control form-control-sm">

                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Mother's Name</label>

                                    <input type="tel" name="mother_name" value="<? echo $employee_info['mother_name'] ?>" class="form-control form-control-sm">

                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Date of Birth</label>

                                    <input type="text" name="dob" value="<? echo $employee_info['dob'] ?>" class="form-control form-control-sm date-picker" placeholder="dd mmm, yy" readonly>

                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">NID No / Birth Certificate</label>

                                    <input type="number" name="nid_no_birth_certificate" value="<? echo $employee_info['nid_no_birth_certificate'] ?>" class="form-control form-control-sm">

                                </div>



                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Gender</label>

                                    <select name="gender" value="<? echo $employee_info['name'] ?>" class="form-control form-control-sm" data-placeholder="Gender">

                                        <option value="" selected disabled>Select Gender</option>

                                        <? foreach ($gender_options as $i => $option) { ?>
                                            <option value="<? echo $i ?>" <? if ($employee_info['gender'] == $i) {
                                                                                echo "selected";
                                                                            } ?>><? echo $option ?></option>
                                        <? } ?>

                                    </select>

                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Marital Status</label>

                                    <select name="marital_status" value="<? echo $employee_info['name'] ?>" class="form-control form-control-sm" data-placeholder="Marital Status">

                                        <option value="" selected disabled>Marital Status</option>

                                        <? foreach ($marital_status_options as $i => $option) { ?>
                                            <option value="<? echo $i ?>" <? if ($employee_info['marital_status'] == $i) {
                                                                                echo "selected";
                                                                            } ?>><? echo $option ?></option>
                                        <? } ?>

                                    </select>

                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Blood Group</label>

                                    <select name="blood_group" value="<? echo $employee_info['name'] ?>" class="form-control form-control-sm" data-placeholder="Blood Group">

                                        <option value="">Select Blood Group</option>

                                        <? foreach ($blood_group_options as $i => $option) { ?>
                                            <option value="<? echo $i ?>" <? if ($employee_info['blood_group'] == $i) {
                                                                                echo "selected";
                                                                            } ?>><? echo $option ?></option>
                                        <? } ?>

                                    </select>

                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Religion</label>

                                    <select name="religion" value="<? echo $employee_info['name'] ?>" class="form-control form-control-sm" data-placeholder="Choose Religion">

                                        <option value="" selected disabled>Choose Religion</option>

                                        <? foreach ($religion_options as $i => $option) { ?>
                                            <option value="<? echo $i ?>" <? if ($employee_info['religion'] == $i) {
                                                                                echo "selected";
                                                                            } ?>><? echo $option ?></option>
                                        <? } ?>

                                    </select>

                                </div>

                            </div>

                        </div>

                    </div>

                </div> -->

                <div class="col-12">

                    <div class="panel">

                        <div class="panel-header">

                            <h5>Emergency Contact Information</h5>

                        </div>

                        <div class="panel-body">

                            <div class="row g-3">

                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Contact Person Name</label>

                                    <input type="text" name="contact_person_name" value="<? echo $employee_info['contact_person_name'] ?>" class="form-control form-control-sm" placeholder="Name">

                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Contact Person Phone</label>

                                    <input type="text" name="contact_person_phone" value="<? echo $employee_info['contact_person_phone'] ?>" class="form-control form-control-sm" placeholder="Phone">

                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">

                                    <label class="form-label">Relation</label>

                                    <input type="text" name="relation" value="<? echo $employee_info['relation'] ?>" class="form-control form-control-sm" placeholder="Relation">

                                </div>


                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-12">

                    <div class="panel">

                        <div class="panel-header">

                            <h5>Login Information</h5>

                        </div>

                        <div class="panel-body">

                            <div class="row g-3">

                                <div class="col-12">

                                    <div class="form-check">

                                        <input name="login_access" class="form-check-input" <?php if ($employee_info['login_access'] == "Yes") {
                                                                                                echo "checked";
                                                                                            } ?> type="checkbox" value="Yes" id="flexCheckDefault" onchange="togglePasswordField()">


                                        <label class="form-check-label" for="flexCheckDefault">

                                            Login access

                                        </label>


                                    </div>
                                    <br>

                                    <div class="col-xxl-3 col-lg-4 col-sm-6" id="passwordFieldContainer" style="display: none;">
                                        <label class="form-label">Password</label>
                                        <input type="password" name="password" value="" class="form-control form-control-sm" id="additionalTextField">
                                    </div>


                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-12 d-flex justify-content-end">

                    <input type="submit" name="create_package" class="btn btn-sm btn btn-success" value="Save Employee">

                </div>

            </div>
        </form>


        <!-- footer start -->

        <? include("./includes/views/footer.php"); ?>

        <!-- footer end -->

    </div>

    <!-- main content end -->


    <? include("./includes/views/footerjs.php"); ?>


</body>
<script>
    function togglePasswordField() {
        var checkbox = document.getElementById("flexCheckDefault");
        var passwordFieldContainer = document.getElementById("passwordFieldContainer");

        if (checkbox.checked) {
            passwordFieldContainer.style.display = "block";
        } else {
            passwordFieldContainer.style.display = "none";
        }
    }
</script>

</html>