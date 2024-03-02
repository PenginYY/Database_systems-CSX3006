<?php
session_start();
require('./DB_connect.php');

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $userPassword = $_POST['password'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $address = $_POST['address'];

    $sql = "UPDATE Account SET name=$name, surname=$surname, address=$address WHERE email= ? ";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $_SESSION['email']);
    $result = $stmt->get_result();

    if($result){
        echo "<script>alert('Update Successful')</script>";
    } else {
        echo "Something went wrong";
    }
}
?>