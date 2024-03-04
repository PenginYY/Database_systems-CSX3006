<?php

    $conn = mysqli_connect("localhost","root","","hoteltest");

    if(!$conn){
        die("Connection Error");
    }

    function display_data() {
        global $conn;
        $query = "SELECT * FROM reservation";
        $result = mysqli_query($conn, $query);
        return $result;
    }

    function getNextReservationID() {
        global $conn;
        $query = "SELECT reservation_id FROM reservation ORDER BY reservation_id DESC LIMIT 1";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $next_id = $row["reservation_id"] + 1;
        } else {
            return "000001";
        }
        return sprintf('%06d', $next_id);
    }
?>