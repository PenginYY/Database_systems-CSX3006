<?php
require('./DB_connect.php');

if (isset($_POST['submit'])) {
    // account table
    $email = $_POST['email'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $birthdate = $_POST['birthdate'];
    $phone = $_POST['phone'];
    // employee table
    $role = $_POST['role'];

    if (!isset($_SESSION['email'])) {
        echo "Error: Session email not found.";
        exit;
    }

    $sql_account = "UPDATE account SET password=?, firstname=?, lastname=?, address=?, birthdate=?, phone=? WHERE email= ?";

    $stmt1 = $conn->prepare($sql_account);
    $stmt1->bind_param("ssssss", $password, $firstname, $lastname, $address, $birthdate, $phone, $_SESSION['email']);

    if (!$stmt1->execute()) {
        $error = "Error updating account: " . $stmt1->error;
    } else {
        // updating the employee role table
        $sql_employee = "UPDATE employee SET role=? WHERE email= ?";

        $stmt2 = $conn->prepare($sql_employee);
        $stmt2->bind_param("ss", $role, $_SESSION['email']);

        if (!$stmt2->execute()) {
            $error = "Error updating account: " . $stmt2->error;
        }
    }

    if (isset($error)) {
        echo $error;
        exit;
    }
    
    // Both updates successful, redirect to success page
    header("Location: http://localhost:3000/mg_account_manager.php");
    exit;
}
?>