<?php
require("./global.php");

$user_id = $_GET['toUser'];
$messages = getAll($con, "SELECT * FROM jeoXillityCrm_messages WHERE toUser = '$user_id' AND fromUser = '$session_id' OR toUser = '$session_id' AND fromUser = '$user_id' ORDER BY timeAdded ASC");
$last_message = getRow($con, "SELECT * FROM jeoXillityCrm_messages WHERE fromUser='$user_id' toUser='$session_id' ORDER BY timeAdded DESC");

$query = "UPDATE jeoXillityCrm_messages set status='read' WHERE fromUser='$user_id' AND toUser='$session_id'";
runQuery($query);

$timestamp = time();


$data = array();

foreach ($messages as $row){

    $message_time = $row['timeAdded'];
    if ($message_time != "") {
        
        $timeDifference = abs($timestamp - $message_time);
    
        // Convert the seconds to days, hours, and minutes
        $days = floor($timeDifference / (24 * 60 * 60));
        $hours = floor(($timeDifference % (24 * 60 * 60)) / (60 * 60));
        $minutes = floor(($timeDifference % (60 * 60)) / 60);
    
        // If the difference is less than one day, represent in terms of minutes
        if ($days >= 1) {
            $timeDifferenceFormatted = $days." day";
        }else{
            if ($hours >= 1) {
                $timeDifferenceFormatted = $hours." hour";
            } else {
                // Format the result
                if ($minutes >= 1) {
                    $timeDifferenceFormatted = $minutes." minute";
                }else{
                    $timeDifferenceFormatted = "0 minute";
                }
            }
        }
    }
    $row['messagestime'] = $timeDifferenceFormatted;
    $data['allmessages'][]=$row;
}

$Allusers = getAll($con, "SELECT * FROM jeoXillityCrm_users WHERE id!='$session_id' ORDER BY timeAdded ASC");


foreach ($Allusers as $user){
    $messages = getRow($con, "SELECT * FROM jeoXillityCrm_messages WHERE fromUser='{$user['id']}' AND toUser='$session_id' ORDER BY timeAdded DESC");
    $unread = getRow($con, "SELECT COUNT(*) as cnt FROM jeoXillityCrm_messages WHERE fromUser='{$user['id']}' AND toUser='$session_id' AND status='new' ORDER BY timeAdded ASC");
    $timeDifferenceFormatted="";
    
    $message_time = $messages['timeAdded'];
    if ($message_time != "") {
        
        $timeDifference = abs($timestamp - $message_time);
    
        // Convert the seconds to days, hours, and minutes
        $days = floor($timeDifference / (24 * 60 * 60));
        $hours = floor(($timeDifference % (24 * 60 * 60)) / (60 * 60));
        $minutes = floor(($timeDifference % (60 * 60)) / 60);
        
    
        // If the difference is less than one day, represent in terms of minutes
        if ($days >= 1) {
            $timeDifferenceFormatted = $days." day";
        }else{
            if ($hours >= 1) {
                $timeDifferenceFormatted = $hours." hour";
            } else {
                // Format the result
                if ($minutes >= 1) {
                    $timeDifferenceFormatted = $minutes." minute";
                }else{
                    $timeDifferenceFormatted = "0 minute";
                }
            }
        }
    }

    $rec['lastmessagetime'] = $timeDifferenceFormatted;
    $rec['unread'] = $unread['cnt'];
    $rec['lastmessage'] = $messages['message'];
    $rec['userId'] = $user['id'];
    $rec['login_status'] = $user['login_status'];
    $data['allUsermessages'][]=$rec;

}


header('Content-Type: application/json');
// var_dump($data);
echo json_encode($data);

?>