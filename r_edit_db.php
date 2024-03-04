<?php
session_start();

require('./r_db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_GET['reservation_id'])) {
        $customer_name = $_POST['customer_name'];
        $agent = $_POST['agent'];
        $total_room = $_POST['total_room'];
        $arrive_date = $_POST['arrive_date'];
        $depart_date = $_POST['depart_date'];
        $sta_room_no = $_POST['sta_room_no'];
        $end_room_no = $_POST['end_room_no'];

        $stmt = $conn->prepare("UPDATE reservation SET customer_name=?, agent=?, total_room=?, arrive_date=?, depart_date=?, sta_room_no=?, end_room_no=? WHERE reservation_id=?");

        $stmt->bind_param("ssisssii", $customer_name, $agent, $total_room, $arrive_date, $depart_date, $sta_room_no, $end_room_no, $_GET['reservation_id']);

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
