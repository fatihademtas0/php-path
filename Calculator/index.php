<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <form action="<?php htmlspecialchars( $_SERVER["PHP_SELF"]);?>" method="post">
    <input type="number" name="num01" placeholder="Number 1">
    
    <select name="operator">
      <option value="add">+</option>
      <option value="subtract">-</option>
      <option value="multiply">*</option>
      <option value="division">/</option>
    </select>

    <input type="number" name="num02" placeholder="Number 2">

    <button type="submit">Calculate</button>
  </form>

  <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      
      // grab data from inputs

      $number1 = filter_input(INPUT_POST , "num01", FILTER_SANITIZE_NUMBER_FLOAT);
      $number2 = filter_input(INPUT_POST , "num02", FILTER_SANITIZE_NUMBER_FLOAT);
      $result = 0;
      
      $operator = htmlspecialchars($_POST["operator"]);

      $errors = false;

      // error handling

      if (empty($number1) || empty($number2) || empty($operator)) { // user must input data
        
        echo "<p>Fill in all fields!</p>";
        $errors = true;
      };

      if (!is_numeric($number1) || !is_numeric($number2)) {
        echo "<p>Please only enter numbers!</p>";
        $errors = true;
      };
/*
      if ($errors) {
        header("Location: ../Calculator/index.php");
        exit(); 
      }
        */

      // calculation 
      if(!$errors) {
        if($operator == "add"){
          $result = $number1 + $number2;
        }else if ($operator == "subtract"){
          $result = $number1 - $number2;
        }else if ($operator == "multiply"){
          $result = $number1 * $number2;
        }else if ($operator == "division"){
          $result = $number1 / $number2;
        }else {
          echo "Something went horribly wrong !";
        };
        echo "<p>Result = " . $result . "</p>";
      };
      

     

    };
  ?>
</body>
</html>