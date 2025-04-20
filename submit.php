
<?php
// Fixed submit.php script

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get POST values or fallback to "Not provided"
    $name = isset($_POST["name"]) ? $_POST["name"] : "Not provided";
    $phone = isset($_POST["phone"]) ? $_POST["phone"] : "Not provided";
    $email = isset($_POST["email"]) ? $_POST["email"] : "Not provided";
    $date = isset($_POST["date"]) ? $_POST["date"] : "Not provided";
    $time = isset($_POST["time"]) ? $_POST["time"] : "Not provided";
    $location = isset($_POST["location"]) ? $_POST["location"] : "Not provided";
    $details = isset($_POST["massage"]) ? $_POST["massage"] : "Not provided";
    $guests = isset($_POST["number"]) ? $_POST["number"] : "Not provided";
    $service = isset($_POST["service_type"]) ? $_POST["service_type"] : "Not provided";

    // Save to CSV
    $booking_data = array($name, $phone, $email, $date, $time, $service, $guests, $location, $details, date("Y-m-d H:i:s"));
    $file_handle = fopen("bookings.csv", "a");
    fputcsv($file_handle, $booking_data);
    fclose($file_handle);

    // Show confirmation
    echo "<h2>Booking Successful!</h2>";
    echo "<h3>Booking Details:</h3>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Date:</strong> $date</p>";
    echo "<p><strong>Time:</strong> $time</p>";
    echo "<p><strong>Service Type:</strong> $service</p>";
    echo "<p><strong>Guests:</strong> $guests</p>";
    echo "<p><strong>Location:</strong> $location</p>";
    echo "<p><strong>Special Message:</strong> $details</p>";
    echo "<p><a href='view_bookings.php'>View All Bookings</a></p>";

} else {
    // If someone tries to access this script directly without submitting the form
    echo "Please submit the booking form.";
}
?>