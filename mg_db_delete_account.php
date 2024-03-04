<?php
require './DB_connect.php';

if(isset($_POST['delete'])) {
    $sql = "DELETE FROM `account` WHERE email= ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $_SESSION['email']);
    $stmt->execute();

    if (!$stmt->execute()) {
        $error = "Error delete employee: " . $stmt->error;
    }

    header("Location: http://localhost:3000/mg_account_manager.php");
    exit;
    session_destroy();
}
?>