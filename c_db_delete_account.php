<?php
session_start();
require './DB_connect.php';

if(isset($_POST['delete'])) {
    $sql = "DELETE FROM `account` WHERE email= ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $_SESSION['email']);
    $stmt->execute();

    if (!$stmt->execute()) {
        $error = "Error delete customer: " . $stmt->error;
    }

    header("Location: http://localhost:3000/c_index.php");
    exit;
    session_destroy();
} else {
    header("Location: http://localhost:3000/c_personal_info.php");
    exit;
}
?>