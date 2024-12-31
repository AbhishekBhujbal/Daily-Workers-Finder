<?php
// delete_old_workers.php

include 'db_connect.php';

// Delete workers who were available before today
$sql = "DELETE FROM workers WHERE date_available < CURDATE()";

if ($conn->query($sql) === TRUE) {
    echo "Old workers' availability deleted successfully.";
} else {
    echo "Error deleting records: " . $conn->error;
}

$conn->close();
?>
