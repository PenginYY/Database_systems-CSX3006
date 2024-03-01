<?php
session_start();

echo $_SESSION;
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // Create connection
    $conn = mysqli_connect('localhost', 'root', '', 'Hotel') or die('Connection failed: ' . $conn->connect_error);

    if (isset($_POST['submit'])){
        $email = $_POST['email'];
        $userPassword = $_POST['password'];

        $sql = "SELECT email, password FROM Account WHERE email = ? AND password = ?";
        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $userPassword);
        $stmt->execute();
        $result = $stmt->get_result();

        $error = "<script>alert(Incorrect email or password!)</script>";

        if($result->num_rows > 0){
            header("Location: http://localhost:3000/c_personal_info.php");
            exit;
        } else {
            header("Location: http://localhost:3000/c_index.php");
            exit;
        }
    }
}
?>