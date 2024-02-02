<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Transaction</title>
</head>
<style>
body {
            font-family: Arial, sans-serif;
            margin: 15%;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        select, input[type="button"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            max-width: 300px;
            box-sizing: border-box;
        }
        input[type="button"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="button"]:hover {
            background-color: #0056b3;
        }
    </style>
<body>
 <h1>Payment Process</h1>
 <form action="" method="Post">
  <select name="paymentProcess" id="payment">
   <option value="paypal">Paypal</option>
   <option value="Gcash">Gcash</option>
   <option value="Visa">Visa</option>
  </select>
  <input type="button" value="Submit"/>
 </form>
</body>
</html>