<?php
include "./classes/contact.class.php";
$addContact = new Contact();

if (isset($_POST['submit'])) {

    $company = $_POST['company'];
    $username = $_POST['name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phone'];


    $result = $addContact->users_contact($company, $username, $email, $phoneNumber);

    if (empty($company) || empty($username) || empty($email) || empty($phoneNumber)) {
        $message = "Please fill in all fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email";
    } else {
        if ($result == 1) {
            $message = "Contact added successfully!";
        } elseif ($result == 10) {
            $message = "Contact already exists";
        } else {
            $message = "An error occurred. Please try again later.";
        }
    }
}

?>


