<?php
session_start();

require('./DB_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

    if (isset($_POST['submit'])){
        $email = $_POST['email'];
        $userPassword = $_POST['password'];

        $sql = "SELECT email, password, name, surname, address FROM Account WHERE email = ? AND password = ?";
        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $userPassword);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows === 1){
            $_SESSION['email'] = $email;
            header("Location: http://localhost:3000/c_personal_info.php");
            exit;
        } else {
            header("Location: http://localhost:3000/c_index.php");
        }
    }
}
?>