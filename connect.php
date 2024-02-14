<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
  // Create connection
  $conn = mysqli_connect('localhost', 'root', '', 'Hotel') or die('Connection failed: ' . $conn->connect_error);

  if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['surname'])) {
    $email = $_POST['email'];
    $userPassword = $_POST['password'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $address = $_POST['address'];

    $sql = "INSERT INTO `Account` (`Email`, `Password`, `Name`, `Surname`, `Address`) VALUES ('$email', '$userPassword', '$name', '$surname', '$address')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
      header("Location: http://localhost:3000/index.php");
      exit();
    } else {
      echo $result;
    }

  }
}

?>