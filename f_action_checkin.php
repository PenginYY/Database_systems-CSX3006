<?php
// Retrieve data from POST
$paidamount = $_POST["paidamount"];
$reservation_no = $_POST['reservation_no'];

// Include database connection file
require_once "DB_connect.php";

// SQL query with multiple statements
$query = "INSERT INTO paid(reservation_no, amount) VALUES ($reservation_no, $paidamount);
          INSERT INTO in_house(reservation_no) VALUES ($reservation_no);";

// Execute the query
if (mysqli_multi_query($conn, $query)) {
    // Query executed successfully
    echo "Check-in successful!";
    // Add a button to redirect to f_checkin_inhouse.php
    echo '<br><br><a href="f_checkin_inhouse.php">Confirm</a>';
} else {
    // Error occurred
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
