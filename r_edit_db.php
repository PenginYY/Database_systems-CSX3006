<?php
session_start();

require('./r_db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_GET['email'])) {
        $rev_no = $_POST['reservation_no'];
        $agent = $_POST['agent'];
        $email = $_GET['email'];
        $total_room = $_POST['total_room'];
        $arrive_date = $_POST['arrive_date'];
        $depart_date = $_POST['depart_date'];
        $room_no = $_POST['room_no'];


        $stmt = $conn->prepare("UPDATE reservation SET reservation_no = ?, email = ?, agent = ?, total_room= ?, arrive_date = ?, depart_date = ? WHERE email= ?");

        $stmt->bind_param("ississ", $rev_no, $agent, $total_room, $arrive_date, $depart_date, $email);

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
