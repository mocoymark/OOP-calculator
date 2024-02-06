<?php
session_start();
include_once "./classes/contact.class.php"; // Include the Connection class if not already included

class UpdateContact extends Connection {
    public function updateContact($company, $username, $email, $phone) {
        $sql = "UPDATE contacts SET company=?, username=?, email=?, phone=? WHERE contact_id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssssi", $company, $username, $email, $phone);
        
        if ($stmt->execute()) {
            return true; // Update successful
        } else {
            return false; // Update failed
        }
    }
}

$message = ""; // Initialize message variable

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $company = $_POST['company'];
    $username = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Perform update operation here
    $updateResult = $updateContact->updateContact($company, $username, $email, $phone);

    // Example code to display message
    if ($updateResult) {
        $message = "Contact updated successfully";
    } else {
        $message = "Failed to update contact";
    }
}
?>
