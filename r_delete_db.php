<?php
session_start();
require_once('./DB_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_GET['reservation_no'])) {
        $reservation_no = $_GET['reservation_no'];

        $stmt = $conn->prepare("DELETE FROM reservation WHERE reservation_no=?");
        $stmt->bind_param("i", $reservation_no);

        if ($stmt->execute()) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Reservation number is not provided.";
    }
} else {
    echo "Invalid request method.";
}

$conn->close();
?>
