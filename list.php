<?php
session_start();
include "./classes/contact.class.php";
class ContactList extends Connection {
    public function getAllContacts($user_id) {
        $json = array();
        $sql = "SELECT * FROM contacts WHERE user_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            $json[] = $row;
        }
        echo json_encode($json);
        $stmt->close();
        $this->conn->close();
    }
}
$contactList = new ContactList();
$user_id = $_SESSION['user_id']; 
$contactList->getAllContacts($user_id);

?>