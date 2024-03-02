<?php
require('./DB_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

    // Adding employee to the account table
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $address = $_POST['address'];
    $roles = $_POST['role'];

    // Inserting employee account to database
    $sql_account = "INSERT INTO 'Account' ('firstName','lastName', 'dob', 'email', 'telephone','address', 'role') VALUES ('$firstName','$lastName', '$dob', '$email', '$telephone','$address', '$role')";

    $result_acc = $conn->query($sql_account);
    
    // Check for error
    if ($result_acc) {
        header("Location: http://localhost:3000/mg_account_manager.php");
        exit;
       } else {
           echo "Unexpected error during adding employee.";
       }
}
?>