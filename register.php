 <?php 
 include "./includes/register.inc.php";
 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
 </head>
 <style>
         body {
             font-family: Arial, sans-serif;
             background-color: #f4f4f4;
             margin: 0;
             padding: 0;
         }
         form {
             display: flex;
             flex-direction: column;
             justify-content: center;
             align-items: center;
             text-align: center;
             width: 50%;
             margin: 50px auto;
             background-color: #fff;
             border-radius: 5px;
             padding: 20px;
             box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
         }
         /* form{
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          text-align: center;

         } */
         h1 {
             text-align: center;
             margin-bottom: 20px;
         }
         input[type="text"],
         input[type="password"],
         button[type="submit"] {
             width: 40%;
             padding: 10px;
             margin-bottom: 15px;
             border: 1px solid #ccc;
             border-radius: 5px;
             box-sizing: border-box;
         }
         input[type="text"]:focus,
         input[type="password"]:focus {
             outline: none;
             border-color: #007bff;
         }
         button[type="submit"] {
             background-color: #007bff;
             color: #fff;
             cursor: pointer;
             transition: background-color 0.3s;
         }
         button[type="submit"]:hover {
             background-color: #0056b3;
         }.form-result{
          color: red;
         }
         .form-success{
          color: greenyellow;
         }
           .btn {
            text-align: center;
            margin-top: 20px;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        button[type="button"] {
            background-color: #28a745;
            color: #fff;
            margin-left: 10px;
        }

        button[type="button"]:hover {
            background-color: #218838;
        }
     </style>
 <body>
  <form action="register.php" method="post">
   <h1>Registration</h1>
   <input type="text" name="name" id="name" placeholder="fullname">
   <input type="text" name="username"  id="username" placeholder="Username">
   <input type="text" name="email"  id="email" placeholder="Email Address">
   <input type="password" name="password"  id="password" placeholder="Password">
   <input type="password" name="confirmPassword"  id="confirmPassword" placeholder="confirmPassword"><br><br>
   <div class="btn">
    <button type="submit" name="submit" id="submit">Register</button>
    <a href="login.php">
     <button type="button">Sign-in</button>
    </a>
   </div>
  

    <?php if(isset($message)): ?>
            <p class="form-result"><?php echo $message; ?></p>
        <?php endif; ?>
  </form>
 
 </body>
 </html>