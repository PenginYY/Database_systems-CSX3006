<?php

require('./DB_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

  if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['surname'])) {
    $email = $_POST['email'];
    $userPassword = $_POST['password'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $address = $_POST['address'];

    $rel_name = "None";
    $rel_phone = "000-000-0000";
    $rel_relationship = "Parent";

    //Insert new account to Account table
    $sql_account = "INSERT INTO `Account` (`email`,`password`, `name`, `surname`, `address`) VALUES ('$email', '$userPassword', '$name', '$surname', '$address')";

    //Insert new account to Customer table
    $sql_customer = "INSERT INTO `Account` (`email`,`emergency_name`, `emergency_phone`, `relationship`) VALUES ('$email', '$rel_name', '$rel_phone', '$rel_relationship')";

    $result = $conn->query($sql);

    if ($result) {
      header("Location: http://localhost:3000/c_index.php");
      exit;
    } else {
      echo $result;
    }

  }
}

?>