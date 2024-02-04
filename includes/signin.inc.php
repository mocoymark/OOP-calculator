<?php 
include "./classes/register.class.php";

$userLogin = new Login();
$error_message = ""; 

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $error_message = "Please enter your username and password";
    } else {
        $result = $userLogin->loginFirst($username, $password);

        if ($result == 1) {
            $_SESSION['user_id'] = $userLogin->getUserID($username); // Assuming you have a method to get user ID
            header("Location: ./contact.php");
            exit();
        } elseif ($result == 10) {
            $error_message = "Username and password do not match";
        } else {
            $error_message = "Invalid username or password";
        }
    }
}
?>