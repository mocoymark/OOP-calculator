<?php

session_start();

include_once "./classes/contact.class.php"; 

class UpdateContact extends Connection {
    public function updateContact($company, $username, $email, $phone, $contactId) {
        if (!isset($_SESSION['user_id'])) {
            return "User is not logged in."; 
        }
        
        $sql = "UPDATE contacts SET company=?, username=?, email=?, phone=? WHERE contact_id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssssi", $company, $username, $email, $phone, $contactId); 
        if ($stmt->execute()) {
            header( 'Location: contactList.php') ;   //redirect to index page after successful insertion
        } else {
            return "error"; 
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['company'], $_POST['name'], $_POST['email'], $_POST['phone'], $_GET['contact_id'])) {
        $company = $_POST['company'];
        $username = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $contactId = $_GET['contact_id']; // Retrieve contact_id from URL parameters (GET)
        
        $updateContact = new UpdateContact();
        $updateResult = $updateContact->updateContact($company, $username, $email, $phone, $contactId);

        echo $updateResult;
    } else {
        echo "Required fields are missing.";
    }
} else {
    echo "Invalid request method.";
}

?>
