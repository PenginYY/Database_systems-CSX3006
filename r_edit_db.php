<?php
session_start();
require_once('./DB_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_GET['reservation_no'])) {
        $reservation_no = $_GET['reservation_no']; // Corrected to use 'reservation_no' from the URL parameter
        $agent = $_POST['agent'];
        $total_room = $_POST['total_room'];
        $arrive_date = $_POST['arrive_date'];
        $depart_date = $_POST['depart_date'];

        $stmt = $conn->prepare("UPDATE reservation SET agent = ?, total_room = ?, arrive_date = ?, depart_date = ? WHERE reservation_no = ?");
        $stmt->bind_param("ssssi", $agent, $total_room, $arrive_date, $depart_date, $reservation_no);

        if ($stmt->execute()) {
            echo "Record updated successfully";
            header("Location: r_reservation.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Reservation ID is not provided.";
    }
}

$conn->close();
?>