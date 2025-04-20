<?php
$filename = "booking_log.txt";

if (file_exists($filename)) {
    $bookings = file($filename);
    echo "<h2>All Bookings:</h2>";
    foreach ($bookings as $line) {
        echo "<p>" . htmlspecialchars($line) . "</p>";
    }
} else {
    echo "No bookings found.";
}
?>