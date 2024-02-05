<?php 
include "./classes/contact.class.php";

$userLogin = new Login();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
  
    if (empty($username) || empty($password)) {
        $message = "Please enter your username and password";
    } else {
        $result = $userLogin->loginFirst($username, $password);

        if ($result == 1) {
            $_SESSION['user_id'] = $userLogin->getUserID($username); // Assuming you have a method to get user ID
            header("Location: ./contactList.php");
            exit();
        } elseif ($result == 10) {
            $message = "Username and password do not match";
        } else {
            $message = "Invalid username or password";
        }
    }
}
?>