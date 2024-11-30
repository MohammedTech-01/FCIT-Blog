<?php
include('db.php'); // Ensure the correct path to your db.php file

// Fetch events from the database
$sql = "SELECT * FROM events ORDER BY event_date, event_time";
$result = $conn->query($sql);

// Initialize an array to store events
$events = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $events[] = $row;
    }
}

// Return events as JSON for easy usage in other files
echo json_encode($events);
?>
