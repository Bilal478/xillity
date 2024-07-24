<?php

$host='localhost';
$username='root';
$user_pass='';
$database_in_use='u109807606_jeoXillityCrm';

$g_projectTitle = "Xillity";
$g_projectSlug = "jeoXillityCrm";
$g_primaryColor = "#007ed3";
$g_secondaryColor = "#007ed3";

$g_modules_global = [];
// $g_modules_global['logo'] = "./assets/images/logo-small.png";
$g_modules_global['logo'] = "./assets/Xillity-transparent-png.png";
$g_modules_global['faviconlogo'] = "./assets/Xillity-transparent-png(1).png";

$con = mysqli_connect($host,$username,$user_pass,$database_in_use);

if (!$con){
    echo"not connected";
}if (!mysqli_select_db($con,$database_in_use)){
    echo"database not selected";
}
$con->set_charset("utf8");
?>