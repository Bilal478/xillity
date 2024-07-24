<?php

require("./global.php");

// Check if the request method is POST and if event_id is set
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['event_id'])) {
    $event_id = $_POST['event_id'];
    // Sanitize and validate the input (optional but recommended)
    $event_id = mysqli_real_escape_string($con, $event_id);

    // Use prepared statements to avoid SQL injection
    $query = "SELECT title, apptTime, endTime, color FROM jeoXillityCrm_calendar_reminders WHERE id='$event_id'";
    $result = mysqli_query($con, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        // Prepare the data to be sent as JSON
        $response = [
            'title' => $row['title'],
            'start_time' => $row['apptTime'], // Assuming apptTime corresponds to start_time
            'endTime' => $row['endTime'],
            'color' => $row['color']
        ];

        // Send the JSON response
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    } else {
        // Handle database query error
        $error = mysqli_error($con);
        $response = ['error' => $error];
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }
} else {
    // Invalid request method or event_id not set
    $response = ['error' => 'Invalid request'];
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}
