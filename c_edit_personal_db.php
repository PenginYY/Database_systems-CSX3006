<?php
session_start();
require('./DB_connect.php');

if(isset($_POST['submit'])){
    //Customer part
    $email = $_POST['email'];
    $userPassword = $_POST['password'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $address = $_POST['address'];
    $dob = $_POST['birthday'];
    $cusPhone = $_POST['cus-phone'];

    //Relative part
    $relName = $_POST['rel-name'];
    $relPhone = $_POST['rel-phone'];
    $relationship = $_POST['relationships'];
    
    //Update account table
    $sql_account = "UPDATE Account SET name=$name, surname=$surname, address=$address, birthdate=$dob, phone=$cusPhone WHERE email= ? ";

    $stmt = $conn->prepare($sql_account);
    $stmt->bind_param("s", $_SESSION['email']);
    $result_acc = $stmt->get_result();

    //Update customer table
    $sql_customer = "UPDATE customer SET email=$email, emergency_name=$relName, emergency_phone=$relPhone, relationship=$relationship WHERE email= ? ";

    $stmt = $conn->prepare($sql_customer);
    $stmt->bind_param("s", $_SESSION['email']);
    $result_cus = $stmt->get_result();

    if($result_acc && $result_cus){
        echo "<script>alert('Update Successful')</script>";
    } else {
        echo "Something went wrong";
    }
}
?>