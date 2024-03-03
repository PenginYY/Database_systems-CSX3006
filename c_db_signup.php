<?php

require('./DB_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // Sign up info for Account table
    $email = $_POST['email'];
    $userPassword = $_POST['password']; 
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $address = $_POST['address'];

    // Initial info customer can edit later
    $dob = null;
    $phone = null;
    $rel_name = null;
    $rel_phone = null;
    $rel_relationship = null;

    $sql_account = "INSERT INTO `account`(`email`, `password`, `firstname`, `lastname`, `address`, `birthdate`, `phone`) VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt1 = $conn->prepare($sql_account);
    $stmt1->bind_param("sssssss", $email, $userPassword, $name, $surname, $address, $dob, $phone);

    if (!$stmt1->execute()) {
        $error = "Error inserting account: " . $stmt1->error;
    } else {
        // Account inserted successfully
        $sql_customer = "INSERT INTO `customer`(`email`, `emergency_name`, `emergency_phone`, `emergency_relationship`) VALUES (?, ?, ?, ?)";

        $stmt2 = $conn->prepare($sql_customer);
        $stmt2->bind_param("ssss", $email, $rel_name, $rel_phone, $rel_relationship);

        if (!$stmt2->execute()) {
            $error = "Error inserting customer: " . $stmt2->error;
        }
    }

    if (isset($error)) {
        echo $error;
        exit;
    }

    // Both insertions successful, redirect to success page
    header("Location: http://localhost:3000/c_index.php");
    exit;

}
?>
