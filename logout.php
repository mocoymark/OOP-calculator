<?php
session_start();

// Set the logout message
$message = "You have been successfully logged out.";

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page with the message
header("Location: login.php?message=" . urlencode($message));
exit; // Ensure script execution stops after redirection
?>

?>