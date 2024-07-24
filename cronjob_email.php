<?php
$logFile = 'cronjob_log.txt';
$currentTimestamp = date('Y-m-d H:i:s',time());
$logMessage = "Cron job executed at: $currentTimestamp\n";
file_put_contents($logFile, $logMessage, FILE_APPEND); 
echo "Cron job script test is  executed  successfully.";

?>

<?php
require_once("./global.php");

/* Connect to the email servers database */
$query = "SELECT * FROM ".$g_projectSlug."_email_servers";
$resultServers = $con->query($query);

if (!$resultServers) {
    die('Error fetching email servers: ' . $con->error);
}

while ($row_server = $resultServers->fetch_assoc()) {
    $hostname = '{'.$row_server['ip_address'].':'.$row_server['port_no'].'/imap/ssl/novalidate-cert}INBOX';
    $username = $row_server['email'];
    $password = $row_server['password']; 
    $server_id = $row_server['id'];
    
    /* Try to connect */
    $inbox = imap_open($hostname, $username, $password) or die('Cannot connect to server: ' . imap_last_error());
    /* Grab emails */
    $emails = imap_search($inbox, 'ALL');
     
    if ($emails) {
        rsort($emails); // Sort emails by newest first

        foreach ($emails as $email_number) {
            /* Get information specific to this email */
            $overview = imap_fetch_overview($inbox, $email_number, 0);
            // echo '<pre>'; 
            // var_dump($overview);
            // echo '</pre>';
            $message = imap_fetchbody($inbox, $email_number, 1.2); // Fetch the plain text part of the email
            if (empty($message)) {
                $message = imap_fetchbody($inbox, $email_number, 1); // Fallback to the first part if plain text is not found
            }
            $email_uid = $overview[0]->uid;

            /* Extract name and email from the 'from' field */
            preg_match('/"?(.*?)"?\s*<(.+?)>/', $overview[0]->from, $matches);
            $from_name = isset($matches[1]) ? $matches[1] : '';
            $from_email = isset($matches[2]) ? $matches[2] : $overview[0]->from;

            /* Check if the user already exists in the database */
            $user_check_query = "SELECT * FROM `jeoXillityCrm_users` WHERE `email` = '$from_email'";
            $user_check_result = $con->query($user_check_query);

            if ($user_check_result->num_rows == 0) {
                /* Insert user information into the database */
                $user_id = generateRandomString();
                $insert_user_query = "INSERT INTO `jeoXillityCrm_users`(`id`,`email_uid`,`server_id`,`name`,`email`) VALUES ('$user_id','$email_uid','$server_id','$from_name','$from_email')";
                $insert_user_query_run = mysqli_query($con, $insert_user_query);
                if (!$insert_user_query_run) {
                    die('Error inserting user: ' . $con->error);
                }
            } else {
                /* Get the existing user's ID */
                $user = $user_check_result->fetch_assoc();
                $user_id = $user['id'];
            }

            /* Check if the user already has a ticket */
            $ticket_check_query = "SELECT * FROM `jeoXillityCrm_tickets` WHERE `userId` = '$user_id' and `email_uid` = '$email_uid'";
            $ticket_check_result = $con->query($ticket_check_query);

            if ($ticket_check_result->num_rows == 0) {
                /* Insert a new ticket */
                $ticket_id = generateRandomString();
                $status = 'Pending'; // Set the status to 'Pending'
                $phone_number = ''; // Assuming phone number is not available from email
                $description = mysqli_real_escape_string($con, $message); // Use the email message as the description
                $insert_ticket_query = "INSERT INTO `jeoXillityCrm_tickets`(`id`, `name`, `email`, `status`, `phone_number`, `userId`, `description`,`email_uid`) VALUES ('$ticket_id', '$from_name', '$from_email', '$status', '$phone_number', '$user_id', '$description','$email_uid')";
                $insert_ticket_query_run = mysqli_query($con, $insert_ticket_query);
                if (!$insert_ticket_query_run) {
                    die('Error inserting ticket: ' . $con->error);
                }
            }

            /* Check if email already exists in the database */
            $query_check = "SELECT * FROM ".$g_projectSlug."_emails WHERE server_id='$server_id' AND email_uid='$email_uid'";
            $result_email_check = $con->query($query_check);

            if ($result_email_check->num_rows == 0) {
                $email_id = generateRandomString();
                $subject = $overview[0]->subject;
                $date = $overview[0]->date;

                /* Insert email information into the database */
                $query_insert = "INSERT INTO ".$g_projectSlug."_emails SET id='$email_id',subject='$subject',message='".mysqli_real_escape_string($con, $message)."',email='$username',date='$date',from_email='$from_email',server_id='$server_id', email_uid='$email_uid'";
                $result = $con->query($query_insert);
                if (!$result) {
                    die('Error inserting email: ' . $con->error);
                }
            }
        }
    }

    /* Close the connection */
    imap_close($inbox);
}
?>
<hr>
