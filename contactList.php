<?php 
include "session.php";
// include "./includes/contactList.inc.php";
// include "./classes/contact.class.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>Contacts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }
        .btn-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .btn-container button {
            padding: 10px 20px;
            margin: 0 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            transition: background-color 0.3s;
        }
        .btn-container button:hover {
            background-color: #45a049;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            border-spacing: 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
        td button {
            padding: 5px 10px;
            margin-right: 5px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            transition: background-color 0.3s;
        }
        td button:hover {
            background-color: #45a049;
        }
        .delete{
            background-color: red;
            color: #fff;
        }
        .edit{
            background-color: skyblue;
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Contacts</h1>
    <div class="btn-container">
        <button onclick="location.href='addContact.php'" type="button">Add Contact</button>
        <button onclick="location.href='logout.php'" type="button">Log-out</button>
    </div>
    <table>
        <thead>
            <tr>
                <th>Company</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="contacts">
           
        </tbody>
    </table>

    <script>
        $(document).ready(function (){
    $.ajax({
        url: "list.php", // Corrected URL
        method: "GET",
        dataType: "json",
        success: function(data) {
            for(var i in data) {
                $("#contacts").append('<tr>' + 
                    '<td>' + data[i].company + '</td>' + 
                    '<td>' + data[i].username + '</td>' + 
                    '<td>' + data[i].email + '</td>' + 
                    '<td>' + data[i].phone + '</td>' + 
                    '<td><button class="edit">Edit</button><button class="delete">Delete</button></td>' + 
                    '</tr>');
            }
        }
    });
});

    </script>
</body>
</html>
