<?php
$g_currentUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$g_website = dirname($g_currentUrl);;
$g_filename = basename($_SERVER['PHP_SELF']);

date_default_timezone_set("Asia/Karachi");


// if anomoz server
if (strpos($g_website, 'projects.anomoz.com') !== false) {
    ini_set('session.cookie_lifetime', 60 * 60 * 24 * 100);
    ini_set('session.gc_maxlifetime', 60 * 60 * 24 * 100);
    ini_set('session.save_path', '/tmp');
}

// Report simple running errors . Change to 1 or 0 to show/hide all errors
if (0) {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
} else {
    error_reporting(E_ERROR);
    ini_set('display_errors', '1');
}

session_start();
include_once("database.php");
include_once("./includes/email_css.php");

//some variables in database.php
$g_tagline = "The Best CRM in town. A CRM that contains all the features that you need to run a successfull business, and which takes care of all your business needs.";
$projectUrl = $g_website;

// $g_modules_global defined in database.php
$g_modules_global['signupEnabled'] = true;
$g_modules_global['accountSettingsEnabled'] = false;
$g_modules_global['forgetPasswordEnabled'] = true;
$g_modules_global['enable2fa'] = false;
$g_modules_global['enableMessages'] = false;
$g_modules_global['enableMessages_fileSending'] = false;
$g_modules_global['enableImport'] = false;
$g_modules_global['enableExport'] = false;
$g_modules_global['enableDatatableExport'] = false;
$g_modules_global['enableShowNotifications'] = true;
$g_modules_global['enableDeleteNotifications'] = false;
$g_modules_global['enableEmployeeManagement'] = true;
$g_modules_global['enableEmployeeAccessAccount'] = false;
$g_modules_global['enableEmployeeTimeTracking'] = false;
$g_modules_global['enableleaveManager'] = false;
$g_modules_global['enableEmployeeScheduling'] = false;
// $g_modules_global['enableVideoLibrary'] = false; //to add
$g_modules_global['enableTasksModule'] = false;
$g_modules_global['enableCustomerManagement'] = false;
$g_modules_global['enableCustomerToLogin'] = false;
$g_modules_global['enableCustomerProfile'] = false;
$g_modules_global['enableCustomerSecondaryFields'] = true;
$g_modules_global['enableCustomerSecondaryFields_crud'] = false;
$g_modules_global['enableCustomerDocuments'] = true;
$g_modules_global['enableCustomerNotes'] = true;
$g_modules_global['enablePipelineManagement'] = true;
$g_modules_global['enablePipelineColorManagement'] = true;
$g_modules_global['enableProductsManagement'] = false;
$g_modules_global['enableInventoryManagement'] = false;
$g_modules_global['enableInvoices'] = false;
$g_modules_global['enableInvoicesProductsItems'] = true;
$g_modules_global['enableInvoicesCustom'] = false;
$g_modules_global['enableInvoicesPayments'] = false;
$g_modules_global['enablePaymentGateway'] = true;
$g_modules_global['enableStripe'] = true;
$g_modules_global['enablePaypal'] = false;
$g_modules_global['paymentType'] = "onetime"; // [onetime, subscription]
$g_modules_global['enableAuthorizeNet'] = false;
$g_modules_global['enableEwallet'] = false;
$g_modules_global['enableDepositeEwallet'] = false;
$g_modules_global['enableCoupons'] = false;
$g_modules_global['enablePaymentHistory'] = false;
$g_modules_global['enableCalendarReminder'] = false;
$g_modules_global['enableCalendarEdit'] = true;
$g_modules_global['enableCalendarAssignToOthers'] = false;
$g_modules_global['enableAddToGoogleCalendar'] = true;
// $g_modules_global['enableNewsletters'] = false;
$g_modules_global['enableTicketManagement'] = true;
$g_modules_global['enableSitesManagement'] = true;
$g_modules_global['enableTicketCustomTags'] = false;
$g_modules_global['enableQuestionnaireManagement'] = false;
$g_modules_global['enableCampaignsManagement'] = false;
$g_modules_global['enableBulkDelete'] = false;
$g_modules_global['showPasswordStrength'] = false;
$g_modules_global['enableAnalytics'] = false;
$g_modules_global['enableEmailManager'] = false; //to add
$g_modules_global['enableAssets'] = false;
$g_modules_global['enableFileStorage'] = false;

//styling
$g_modules_global['enableLeftMenu'] = false;
$g_modules_global['enableColoredLeftMenu'] = false;
$g_modules_global['enableColoredNavigationBar'] = false;
$g_modules_global['enableDarkTheme'] = false;
$g_modules_global['enablePWA'] = false;
$g_modules_global['enableUserDataLogging'] = false;


$g_modules_global['enableEdit'] = true;
$g_modules_global['enableDelete'] = true;
$g_modules_global['enableViewAllAvailableModules'] = false;
$g_modules_global['enableViewOtherProjects'] = false;


if ($_SESSION['isdemo'] == "yes") {
    foreach ($g_modules_global as $itemI => $item) {
        if (is_bool($g_modules_global[$itemI])) {
            $g_modules_global[$itemI] = true;
        }
    }
}

function checkGlobalPermission($moduleName)
{
    //search for users permission table as well
    global $g_modules_global;
    if ($g_modules_global[$moduleName]) {
        return true;
    } else {
        return false;
    }
}

//primary
require_once("./includes/core/session.php");
require_once("./includes/core/dbmodel.php");

//secondary
include_once('./includes/imports/php-excel-reader/excel_reader2.php');
include_once('./includes/imports/SpreadsheetReader.php');
include_once("./includes/models/importExport.php");

// defined in /includes/core/session.php
setLoginUserSessionVariables();

$session_userId_filter = $session_userId;
if ($session_role == "admin") {
    $session_userId_filter = "";
}


// sendEmailNotification_mailjet($subject, $message, $email, $containsAttachment=0, $attachments = array(), $ccInfo = [], $bccInfo = []){ //defined in ./includes/core/session.php
// function sendTemplateEmail($subject,$message,$email){

$g_main_admin_id = "admin";
$g_body_class = "kt-page--loading-enabled kt-page--loading kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-menu kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--left kt-aside--fixed kt-page--loading";
$g_body_class = "";


//check if logged in . whitelisting array
$allowedUrls = array(
    "", "index.php", "forget_password.php", "signup.php", "update-password.php", "login.php", "reset-password.php", "password_reset.php", "cronjob_email.php", "cronjob_campaign.php", "book_packages.php", "load_services.php", "cruds.php", "all_functions.php",
    "process.php", "callback.php", "maincss.php", "invoices.php", "payment_webook.php", "api.php", "test.php", "cronjob.php", "chatGPT.php", "embed_lead_form.php"
);
$filenameLink = basename($_SERVER['PHP_SELF']);
// || !$_SESSION['loginAuthCorrect']
if (($logged == 0) && !isset($_GET['print']) && (!in_array($filenameLink, $allowedUrls))) {
    header("Location: ./");
    exit();
}

$getCustomersFromDB = getAll($con, "SELECT * FROM " . $g_projectSlug . "_users");
$g_allUsersInfo = [];
foreach ($getCustomersFromDB as $k => $v) {
    $g_allUsersInfo[$v['id']] = $v;
}


// if($g_modules_global['paymentType'] == "onetime"){ $productCode = 'prod_IfkGNQQX9TKWK9'; } // product
// else if($g_modules_global['paymentType'] == "subscription"){ $productCode = 'prod_HY6uiVaFL6t7rg'; }; // subscription

if ($g_modules_global['paymentType'] == "onetime") {
    $productCode = 'prod_OHP5kBVWLcHtk7';
} // product
else if ($g_modules_global['paymentType'] == "subscription") {
    $productCode = 'prod_HY6uiVaFL6t7rg';
}; // subscription

$g_stripeCred = array(
    // "private_test_key" => "sk_test_51Gz0OOHQjkfG1DwOmJD0AsqrZDQ6vG6oMb28V0WEjlTsuZQSFS5kqb5rr60BIeOgeqobp7XAK7IsOh4gVsrEyKl700IoFt2lJZ",
    // "public_test_key"  => "pk_test_51Gz0OOHQjkfG1DwO9latQvA69lF4SGM6jl1DiHgWI5gkzHvI4XqlMDHDw3kQxHPZEJIZlGxxOBufbdfAPAOjVM1500HcxE0VZ2",
    "private_test_key" => "sk_test_mHrULMPKBf3tksd5BH6F40iZ00eVL1PdEa",
    "public_test_key"  => "pk_test_sdFgZctlpNxecLEyh2olufL60069lDve4C",
    "productCode" => $productCode
);


$file_extension_icons = array(
    'pdf' => 'fa-file-pdf',
    'doc' => 'fa-file-word',
    'docx' => 'fa-file-word',
    'xls' => 'fa-file-excel',
    'xlsx' => 'fa-file-excel',
    'txt' => 'fa-file-alt',
    'jpg' => 'fa-file-image',
    'jpeg' => 'fa-file-image',
    'png' => 'fa-file-image',
    'gif' => 'fa-file-image',
    'mp3' => 'fa-file-audio',
    'wav' => 'fa-file-audio',
    'mp4' => 'fa-file-video',
    'avi' => 'fa-file-video',
    'mov' => 'fa-file-video',
    'zip' => 'fa-file-archive',
    'rar' => 'fa-file-archive',
    '7z' => 'fa-file-archive',
    'tar' => 'fa-file-archive',
    'html' => 'fa-file-code',
    'css' => 'fa-file-code',
    'js' => 'fa-file-code',
    'php' => 'fa-file-code',
    'sql' => 'fa-file-code',
    'java' => 'fa-file-code',
    'py' => 'fa-file-code',
    'cpp' => 'fa-file-code',
    'c' => 'fa-file-code',
    'exe' => 'fa-file-executable',
    'bat' => 'fa-file-executable',
    'sh' => 'fa-file-executable',
    'ppt' => 'fa-file-powerpoint',
    'pptx' => 'fa-file-powerpoint',
    'key' => 'fa-file-powerpoint',
    'odt' => 'fa-file-word',
    'ods' => 'fa-file-excel',
    'odp' => 'fa-file-powerpoint',
    'csv' => 'fa-file-csv',
    // Add more file extensions and corresponding icons as needed
);


function formatBytes($bytes, $precision = 2)
{
    $bytes = floatval($bytes);

    $units = ['B', 'KB', 'MB', 'GB', 'TB'];

    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);

    // Calculate bytes in the appropriate unit
    $bytes /= (1 << (10 * $pow));

    // Format the bytes with precision
    return round($bytes, $precision) . ' ' . $units[$pow];
}


function calculate_percentage($total, $part)
{
    $percentage = ($part / $total) * 100;
    return $percentage;
}

//function to Alert any variable for debugging purposes
function jsAlert($value)
{
    echo "<script>alert('$value')</script>";
}


$directory = __DIR__;

// Use glob to get all PHP files in the directory
$phpFiles = glob($directory . '/*.php');

// Sort the files in ascending order (natural sorting)
$pages_name = [];
// Loop through the sorted files and print their names
foreach ($phpFiles as $file) {
  $pages_name[] = basename($file);
}

