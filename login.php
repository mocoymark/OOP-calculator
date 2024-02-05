<?php 
session_start();
include "./includes/login.inc.php";

if(isset($_GET['message'])) {
    $message = $_GET['message'];
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Sign-In</title>
 <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    form {
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
        text-align: center;
        margin-bottom: 20px;
    }
    input[type="text"],
    input[type="password"],
    button[type="submit"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }
    button[type="submit"] {
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    button[type="submit"]:hover {
        background-color: #0056b3;
    }
    .form-message {
        color: #ff0000;
        text-align: center;
        margin-top: 10px;
    }
    a.register {
    text-decoration: none;
}

a.register button {
    width: 100%;
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}

a.register button:hover {
    background-color: #45a049;
}
 </style>
</head>
<body>
 <form action="login.php" method="post">
  <h2>Sign in</h2>
  <input type="text" name="username" id="username" placeholder="Email" > 
  <input type="password" name="password" id="password" placeholder="Password">
  <button type="submit" name="submit">Sign-in</button>
    <a class="register" href="register.php">
        <button type="button">Register</button>
        </a>
  <?php if(isset($message)): ?> 
     <p class="form-message"><?php echo $message ?></p>
  <?php endif; ?>
 </form>
</body>
</html>
