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

   //Insert new account to Account table
   $sql_account = "INSERT INTO `Account` (`email`,`password`, `name`, `surname`, `address`) VALUES ('$email', '$userPassword', '$name', '$surname', '$address')";

  //  //Insert new account to Customer table
  //  $sql_customer = "INSERT INTO `Account` (`email`,`emergency_name`, `emergency_phone`, `relationship`) VALUES ('$email', '$rel_name', '$rel_phone', '$rel_relationship')";

   $result_acc = $conn->query($sql_account);
  //  $result_cus = $conn->query($sql_customer);

   // Check for errors
   if ($result_acc) {
     header("Location: http://localhost:3000/c_index.php");
     exit;
    } else {
        echo "Unexpected error during signup.";
    }
}
?>
