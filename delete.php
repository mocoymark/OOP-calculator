<?php
session_start();
include "./classes/contact.class.php";

class ContactManager extends Connection {
    public function deleteContact($contactId) {
        $sql = "DELETE FROM contacts WHERE contact_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $contactId);
        
        if ($stmt->execute()) {
            return "success";
        } else {
            return "error";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["contact_id"])) {
    $contactManager = new ContactManager();
    
    $contactId = $_POST["contact_id"];
    
    $result = $contactManager->deleteContact($contactId);
    
    if ($result === "success") {
        $message = "Contact deleted successfully";
    } else {
        $message = "Error deleting contact";
    }
    
    echo $result;
} else {
    echo "error";
}
?>
