<?php 
session_start();

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

?>