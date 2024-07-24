<?php
require("./global.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = generateRandomString();
    $fromUser = $session_id;
    $toUser = $_POST['toUser'];
    $message = $_POST['message'];
    $status = "new";
    $timeAdded = time();

    $attachment = "";
    $file = storeFile($_FILES['attachment']);
    if($file!=""){
        $attachment = $file;
    }


    $query = "insert into jeoXillityCrm_messages set id='$id' , fromUser='$fromUser', toUser='$toUser', message='$message', status='$status', attachment='$attachment', timeAdded='$timeAdded', userId='$session_id' ";
    runQuery($query);

}
?>

