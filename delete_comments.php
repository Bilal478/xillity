<?
require("./global.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'db_connect.php'; // Ensure this file connects correctly to your database

    if (isset($_POST['commentIds']) && !empty($_POST['commentIds'])) {
        $commentIds = $_POST['commentIds'];

        // DEBUG: Log the received comment IDs to ensure they are correct
        error_log("Received comment IDs: " . print_r($commentIds, true));

        // Create placeholders for the prepared statement (to handle multiple IDs)
        $placeholders = implode(',', array_fill(0, count($commentIds), '?'));

        // Prepare the SQL statement for deleting multiple records
        $sql = "DELETE FROM jeoXillityCrm_comments WHERE id IN ($placeholders)";
        $stmt = $con->prepare($sql);

        // Check if statement preparation was successful
        if ($stmt === false) {
            error_log("Failed to prepare statement: " . $con->error);
            echo json_encode(['success' => false, 'message' => 'Failed to prepare SQL statement']);
            exit;
        }

        // Bind parameters (assuming IDs are integers)
        $types = str_repeat('i', count($commentIds));
        $stmt->bind_param($types, ...$commentIds);

        // Execute the query
        if ($stmt->execute()) {
            error_log("Successfully deleted comment IDs: " . print_r($commentIds, true));
            echo json_encode(['success' => true]); // Send success response back to AJAX
        } else {
            error_log("Failed to execute statement: " . $stmt->error);
            echo json_encode(['success' => false, 'message' => 'Failed to execute SQL statement']);
        }

        $stmt->close();
    } else {
        // No comment IDs received
        error_log("No comment IDs received");
        echo json_encode(['success' => false, 'message' => 'No comment IDs received']);
    }

    $con->close();
}
?>
