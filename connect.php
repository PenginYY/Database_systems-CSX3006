<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
  // Create connection
  $conn = mysqli_connect('localhost', 'root', '', 'Hotel') or die('Connection failed: ' . $conn->connect_error);

  $duplicate=mysqli_query($conn,"SELECT Email FROM `Account` WHERE email='$email'");
  if (mysqli_num_rows($duplicate)>0)
  {
  $exist_email = "Email has already exist";
  header("Location: http://localhost:3000/c_signup.php?:");
  echo $exist_email;
  } 
  
  if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['surname'])) {
    $email = $_POST['email'];
    $userPassword = $_POST['password'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $address = $_POST['address'];
    echo "Hello";
   
    $sql = "INSERT INTO `Account` (`Email`, `Password`, `Name`, `Surname`, `Address`) VALUES ('$email', '$userPassword', '$name', '$surname', '$address')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
      header("Location: http://localhost:3000/c_index.php");
      exit();
    } else {
      echo $result;
    }

  }
}

?>