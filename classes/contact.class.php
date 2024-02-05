<?php 

class Connection{
 public $host = "localhost";
 public $user = "root";
 public $password = "";
 public $db_name = "mvc_db";

 public $conn;

 public function __construct()
 {
  $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->db_name);
 }
}

class Register extends Connection{
  public function register($name, $username, $email, $password, $confirmPassword){
         $duplicate = mysqli_query($this->conn, "SELECT * FROM  users WHERE username='$username' OR email='$email'");
         if(mysqli_num_rows($duplicate) > 0 ){
          return 10;
         }
         else{
          if ($password == $confirmPassword) {
           $query = "INSERT INTO users VALUES ('','$name', '$username', '$email', '$password')";
           mysqli_query($this->conn, $query);
           return 1;
          }else{
           return 100;
           
          }
         };
  }
}

class Login extends Connection{
    //get the user id 
         public function getUserID($username) {
          $query = "SELECT user_id FROM users WHERE username = '$username'";
          $result = mysqli_query($this->conn, $query);
          if ($result && mysqli_num_rows($result) > 0) {
              $row = mysqli_fetch_assoc($result);
              return $row['user_id'];
          }
          return null; 
    }

        public function loginFirst($username, $password){
          $notMatch = mysqli_query($this->conn, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");
          if(mysqli_num_rows($notMatch) == 0){
            return 10;
          }else{
            $login = mysqli_query($this->conn, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");
             if(mysqli_num_rows($login) == 1){
              return 1;
             }else{
              return 100;
             }
          }
        }
}
class Contact extends Connection {
    

    public function users_contact($company, $username, $email, $phoneNumber) {
 //user auth to access the contacts
        if (!isset($_SESSION['user_id'])) {
            return 100; 
        }

        $user_id = $_SESSION['user_id'];


        $check_user_query = "SELECT user_id FROM users WHERE user_id = '$user_id'";
        $user_result = mysqli_query($this->conn, $check_user_query);
        if (mysqli_num_rows($user_result) == 0) {
            return 101; 
        }


        $duplicate = mysqli_query($this->conn, "SELECT * FROM contacts WHERE company = '$company' AND username = '$username' AND email = '$email' AND phone = '$phoneNumber'");
        if (mysqli_num_rows($duplicate) > 0) {
            return 10;  
        } else {

            $sql = "INSERT INTO contacts (user_id, company, username, email, phone) VALUES ('$user_id', '$company', '$username', '$email', '$phoneNumber')";
            
            if (mysqli_query($this->conn, $sql)) {
                return 1; 
            } else {
                return 102;  
            }
        }
    }
}


?>