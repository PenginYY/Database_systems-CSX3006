<?php
session_start();
require('./DB_connect.php');

if (isset($_POST['submit'])) {
    // Customer part
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $address = $_POST['address'];
    $dob = $_POST['birthday'];
    $cusPhone = $_POST['cus-phone'];

    // Relative part
    $relName = $_POST['rel-name'];
    $relPhone = $_POST['rel-phone'];
    $relationship = $_POST['relationships'];

    // Check if session email is set
    if (!isset($_SESSION['email'])) {
        echo "Error: Session email not found.";
        exit;
    }

    // Update account table
    $sql_account = "UPDATE account SET firstname=?, lastname=?, address=?, birthdate=?, phone=? WHERE email= ?";

    $stmt1 = $conn->prepare($sql_account);
    $stmt1->bind_param("ssssss", $name, $surname, $address, $dob, $cusPhone, $_SESSION['email']);

    if (!$stmt1->execute()) {
        $error = "Error updating account: " . $stmt1->error;
    } else {
        // Account updated successfully
        // Update customer table
        $sql_customer = "UPDATE customer SET emergency_name=?, emergency_phone=?, emergency_relationship=? WHERE email= ?";

        $stmt2 = $conn->prepare($sql_customer);
        $stmt2->bind_param("ssss", $relName, $relPhone, $relationship, $_SESSION['email']);

        if (!$stmt2->execute()) {
            $error = "Error updating customer: " . $stmt2->error;
        }
    }

    if (isset($error)) {
        echo $error;
        exit;
    }

    // Both updates successful, redirect to success page
    header("Location: http://localhost:3000/c_personal_info.php");
    exit;
}
?>
