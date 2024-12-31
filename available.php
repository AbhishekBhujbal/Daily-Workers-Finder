<?php
// available.php

include 'db_connect.php';

// Get only today's available workers
$sql = "SELECT name, phone, location, work_area FROM workers WHERE available_today = 1 AND date_available = CURDATE()";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Name</th><th>Phone</th><th>Location</th><th>Work Area</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['name'] . "</td><td>" . $row['phone'] . "</td><td>" . $row['location'] . "</td><td>" . $row['work_area'] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No workers available today.";
}

$conn->close();
?>











