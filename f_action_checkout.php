<?php
// Retrieve data from POST
$reservation_no = $_POST['reservation_no'];

// Include database connection file
require_once "DB_connect.php";

// SQL query delete the reservation_no from the in_house table
$query = "DELETE FROM in_house
            WHERE reservation_no = $reservation_no;";

// Execute the query
if (mysqli_multi_query($conn, $query)) {
    // Query executed successfully
    echo "Check-out successful!";
    // Add a button to redirect to f_checkout_watiing.php
    echo '<br><br><a href="f_checkout_waiting.php">Confirm</a>';
} else {
    // Error occurred
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
