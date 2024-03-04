<?php
session_start();

require('./r_db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $customer_name=$_POST['customer_name'];
    $agent=$_POST['agent'];
    $total_room=$_POST['total_room'];
    $arrive_date=$_POST['arrive_date'];
    $depart_date=$_POST['depart_date'];
    $email=$_POST['email'];
    $sta_room_no=$_POST['sta_room_no'];
    $end_room_no=$_POST['end_room_no'];

    $stmt = $conn->prepare("INSERT INTO reservation (customer_name,agent,total_room,arrive_date,depart_date,email,sta_room_no,end_room_no) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssisssii", $customer_name, $agent, $total_room, $arrive_date, $depart_date, $email, $sta_room_no, $end_room_no);

    if ($stmt->execute()) {
        echo "New record inserted successfully";
        header("Location: r_reservation.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
