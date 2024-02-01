 <?php 
 include "./includes/autoLoader.inc.php";
 include "./classes/operator.class.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Equation</title>
  <link rel="stylesheet" href="styles.css">
</head>
<style>
 body {
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
}

.container {
  width: 300px;
  margin: 0 auto;
  margin-top: 100px;
  background-color: #fff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  color: navy;
}

input[type="number"],
select,
button {
  width: calc(100% - 22px);
  padding: 8px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
}

select {
  width: 100%;
}

button {
  background-color: #007bff;
  color: white;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}

button:active {
  background-color: #004380;
}

input[type="number"]:focus,
select:focus {
  outline: none;
  border-color: #007bff;
  box-shadow: 0 0 5px #007bff;
}

</style>
<body>

  <div class="container">
    <h1>Equation</h1>
    <form action="index.php" method="post">
      <input type="number" name="num1" placeholder="Enter the first number" required><br><br>
      <select name="operator">
        <option value="add">Addition</option>
        <option value="sub">Subtraction</option>
        <option value="mul">Multiplication</option>
        <option value="div">Division</option>
      </select><br><br>
      <input type="number" name="num2" placeholder="Enter the second number" required><br><br>
      <button type="submit">Calculate</button>
    </form>
     <?php if(isset($result)): ?>
            <p class="form-result">Result: <?php echo $result; ?></p>
        <?php endif; ?>
  </div>
</body>
</html>
