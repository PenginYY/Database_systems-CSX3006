<?php
session_start();
require('./DB_connect.php');

// Check if the form is submitted via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if the email is provided through POST data
    if (isset($_POST['email'])) {
        // Assign POST data to variables
        $email = $_POST['email'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        $birthdate = $_POST['birthdate'];
        $phone = $_POST['phone'];
        $role = $_POST['role'];

        // Prepare and execute the update statements
        $sql_account = "UPDATE account SET password=?, firstname=?, lastname=?, address=?, birthdate=?, phone=? WHERE email=?";
        $stmt1 = $conn->prepare($sql_account);
        $stmt1->bind_param("sssssss", $password, $firstname, $lastname, $address, $birthdate, $phone, $email);

        $sql_employee = "UPDATE employee SET role=? WHERE email=?";
        $stmt2 = $conn->prepare($sql_employee);
        $stmt2->bind_param("ss", $role, $email);

        // Execute the statements and handle errors
        if ($stmt1->execute() && $stmt2->execute()) {
            echo "Record updated successfully";
            header("Location: mg_account_manager.php");
            exit();
        } else {
            echo "Error updating record: " . $conn->error;
        }

        // Close the prepared statements
        $stmt1->close();
        $stmt2->close();
    } else {
        echo "Email is not provided.";
    }
}
?>
