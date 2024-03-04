<?php
session_start();

require('./r_db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email=$_POST['email'];
    $agent=$_POST['agent'];
    $room_no=$_POST['room_no'];
    $rev_no = $_POST['rev_no'];
    $total_room=$_POST['total_room'];
    $arrive_date=$_POST['arrive_date'];
    $depart_date=$_POST['depart_date'];


    $stmt = $conn->prepare("INSERT INTO reservation (email,agent,total_room,arrive_date,depart_date) VALUES (?, ?, ?, ?, ?)");

    $stmt->bind_param("ssisssii", $email, $agent, $total_room, $arrive_date, $depart_date);


    if ($stmt->execute()) {
        $stmt2 = $conn->prepare("INSERT INTO reserved_room (reservation_no,room_no) VALUES (?, ?)");
        $stmt2->bind_param("ii", $rev_no, $room_no);
        $stmt2->execute();
        header("Location: r_reservation.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
