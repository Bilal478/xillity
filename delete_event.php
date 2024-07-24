<?php
require("./global.php");
// Check if the event_id is set and not empty
if (isset($_POST['event_id']) && !empty($_POST['event_id'])) {
    $event_id = $_POST['event_id'];

    // echo $event_id;
    // exit;

    $stmt = $con->prepare("delete from " . $g_projectSlug . "_calendar_reminders where id=?");
    $stmt->bind_param("s", $event_id);
    if (!$stmt->execute()) {
        echo json_encode(array("status" => "error", "message" => "Error deleting event"));
    } else {
        echo json_encode(array("status" => "success", "message" => "Event deleted successfully"));
    }


} else {

    echo json_encode(array("status" => "error", "message" => "Invalid event ID"));
}
