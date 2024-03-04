<?php
// require('./DB_connect.php');

// if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

//     // Adding employee to the account table
//     // $(variable) = $_POST['DB']
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $firstname = $_POST['firstname'];
//     $lastname = $_POST['lastname'];
//     $address = $_POST['address'];
//     $birthdate = $_POST['birthdate'];
//     $phone = $_POST['phone'];

//     // Adding employee role to employee table
//     $email = $_POST['email'];
//     $role = $_POST['role'];

//     // Inserting employee account to database
//     $sql_account = "INSERT INTO 'account' ('email','password', 'firstname', 'lastname', 'address','birthdate', 'phone') 
//         VALUES (?,?,?,?,?,?,?)";

//     $stmt1 = $conn->prepare($sql_account);
//     $stmt1->bind_param("sssssss", $email , $password, $firstname, $lastname, $address, $birthdate, $phone);
    
//     if (!$stmt1->execute()) {
//         $error = "Error inserting account: " . $stmt1->error;
//     } else {
//         $sql_employee = "INSERT INTO 'employee' ('email', 'role') VALUES (?,?)";

//         $stmt2 = $conn->prepare($sql_employee);
//         $stmt2->bind_param("ss", $email, $role);
        
//         if (!$stmt2->execute()) {
//             $error = "Error inserting customer: " . $stmt2->error;
//         }
//     }

//     if (isset($error)) {
//         echo $error;
//         exit;
//     }

//     // Both insertions successful, redirect to success page
//     header("Location: http://localhost:3000/mg_account_manager.php");
//     exit;

// }

require('./DB_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

    // Adding employee to the account table
    // $(variable) = $_POST['DB']
    $email = $_POST['email'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $birthdate = $_POST['birthdate'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];

    // Inserting employee account to database
    $sql_account = "INSERT INTO `account` (`email`, `password`, `firstname`, `lastname`, `address`, `birthdate`, `phone`) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt1 = $conn->prepare($sql_account);
    $stmt1->bind_param("sssssss", $email , $password, $firstname, $lastname, $address, $birthdate, $phone);
    
    if (!$stmt1->execute()) {
        $error = "Error inserting account: " . $stmt1->error;
    } else {
        $sql_employee = "INSERT INTO `employee` (`email`, `role`) VALUES (?, ?)";

        $stmt2 = $conn->prepare($sql_employee);
        $stmt2->bind_param("ss", $email, $role);
        
        if (!$stmt2->execute()) {
            $error = "Error inserting employee: " . $stmt2->error;
        }
    }

    if (isset($error)) {
        echo $error;
        exit;
    }

    // Both insertions successful, redirect to success page
    header("Location: http://localhost:3000/mg_account_manager.php");
    exit;

}

?>