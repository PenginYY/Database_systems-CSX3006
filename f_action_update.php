<?php
// Retrieve data from POST
$paidamount = $_POST["paidamount"];
$reservation_no = $_POST['reservation_no'];

// Include database connection file
require_once "DB_connect.php";

// SQL query to update the paid amount
$query = "UPDATE paid SET amount = $paidamount
            WHERE reservation_no = $reservation_no;";

// Execute the query
if (mysqli_multi_query($conn, $query)) {
    // Query executed successfully
    echo "Update successful!";
    // Add a button to redirect to f_checkin_inhouse.php
    echo '<br><br><a href="f_checkin_inhouse.php">Confirm</a>';
} else {
    // Error occurred
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
