<?php
session_start();

require('./r_db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_GET['reservation_id'])) {
        $reservation_id = $_GET['reservation_id'];

        $stmt = $conn->prepare("DELETE FROM reservation WHERE reservation_id=?");
        $stmt->bind_param("i", $reservation_id);

        if ($stmt->execute()) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Reservation ID is not provided.";
    }
} else {
    echo "Invalid request method.";
}

$conn->close();
?>
