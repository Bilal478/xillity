<?php
require_once '../../database.php';
// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if both taskId and priority are set in the POST data
    if (isset($_POST['taskId']) && isset($_POST['priority'])) {
        // Sanitize and validate the input values
        $taskId = $_POST['taskId'];
        $priority = $_POST['priority'];
        // You may want to perform additional validation here
        // Update the task priority in the database
        $query = "UPDATE jeoXillityCrm_tasks SET priority = '$priority' WHERE id = '$taskId'";
        if ($con->query($query) === TRUE) {
            // Send a success response
            echo "Priority updated successfully.";
        } else {
            // Send a response indicating database error
            http_response_code(500); // Internal Server Error
            echo "Error updating priority: " . $con->error;
        }

        // Close database connection
    } else {
        // Send a response indicating missing parameters
        http_response_code(400); // Bad Request
        echo "Task ID and/or priority value missing in the request.";
    }
} else {
    // Send a response indicating unsupported request method
    http_response_code(405); // Method Not Allowed
    echo "Only POST requests are allowed.";
}
?>
