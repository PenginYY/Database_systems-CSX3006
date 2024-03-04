<?php
session_start();
require_once('./DB_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $agent = $_POST['agent'];
    $room_no = $_POST['room_no'];
    $total_room = $_POST['total_room'];
    $arrive_date = $_POST['arrive_date'];
    $depart_date = $_POST['depart_date'];

    // Check if the email exists in the customer table
    $stmt_check_customer = $conn->prepare("SELECT email FROM customer WHERE email = ?");
    $stmt_check_customer->bind_param("s", $email);
    $stmt_check_customer->execute();
    $result_check_customer = $stmt_check_customer->get_result();

    if ($result_check_customer->num_rows > 0) {
        // Email exists in the customer table, proceed with inserting the reservation
        $stmt_insert_reservation = $conn->prepare("INSERT INTO reservation (email, agent, total_room, arrive_date, depart_date) VALUES (?, ?, ?, ?, ?)");
        $stmt_insert_reservation->bind_param("ssiss", $email, $agent, $total_room, $arrive_date, $depart_date);

        if ($stmt_insert_reservation->execute()) {
            // Get the last inserted reservation number
            $reservation_id = $stmt_insert_reservation->insert_id;

            // Insert reserved room data
            $stmt_insert_reserved_room = $conn->prepare("INSERT INTO reserved_room (reservation_no, room_no) VALUES (?, ?)");
            $stmt_insert_reserved_room->bind_param("ii", $reservation_id, $room_no);

            if ($stmt_insert_reserved_room->execute()) {
                echo "Record inserted successfully";
                header("Location: mg_account_manager.php");
                exit();
            } else {
                echo "Error inserting reserved room data: " . $conn->error;
            }
        } else {
            echo "Error inserting reservation: " . $conn->error;
        }

        // Close prepared statements
        $stmt_insert_reservation->close();
        $stmt_insert_reserved_room->close();
    } else {
        // Email does not exist in the customer table, add it
        $emergency_name = isset($_POST['emergency_name']) ? $_POST['emergency_name'] : '';
        $emergency_phone = isset($_POST['emergency_phone']) ? $_POST['emergency_phone'] : '';
        $emergency_relationship = isset($_POST['emergency_relationship']) ? $_POST['emergency_relationship'] : '';

        // Insert the email into the customer table
        $stmt_insert_customer = $conn->prepare("INSERT INTO customer (email, emergency_name, emergency_phone, emergency_relationship) VALUES (?, ?, ?, ?)");
        $stmt_insert_customer->bind_param("ssss", $email, $emergency_name, $emergency_phone, $emergency_relationship);

        if ($stmt_insert_customer->execute()) {
            // Proceed with inserting the reservation after adding the email to the customer table
            $stmt_insert_reservation = $conn->prepare("INSERT INTO reservation (email, agent, total_room, arrive_date, depart_date) VALUES (?, ?, ?, ?, ?)");
            $stmt_insert_reservation->bind_param("ssiss", $email, $agent, $total_room, $arrive_date, $depart_date);

            if ($stmt_insert_reservation->execute()) {
                // Get the last inserted reservation number
                $reservation_id = $stmt_insert_reservation->insert_id;

                // Insert reserved room data
                $stmt_insert_reserved_room = $conn->prepare("INSERT INTO reserved_room (reservation_no, room_no) VALUES (?, ?)");
                $stmt_insert_reserved_room->bind_param("ii", $reservation_id, $room_no);

                if ($stmt_insert_reserved_room->execute()) {
                    echo "Record inserted successfully";
                    header("Location: r_reservation.php");
                    exit();
                } else {
                    echo "Error inserting reserved room data: " . $conn->error;
                }
            } else {
                echo "Error inserting reservation: " . $conn->error;
            }

            // Close prepared statements
            $stmt_insert_reservation->close();
            $stmt_insert_reserved_room->close();
        } else {
            echo "Error adding email to the customer table: " . $conn->error;
        }

        // Close the prepared statement
        $stmt_insert_customer->close();
    }

    // Close the prepared statement
    $stmt_check_customer->close();
} else {
    echo "Email is not provided.";
}
?>
