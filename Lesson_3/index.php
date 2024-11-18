<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

    // string operator
    $a = "Hello";
    $b = "World !";
    $c = $a . " " . $b; // concat strings
    echo $c;
    echo "<br>";

    // arithmetic operator
    echo (1 + 2) * 4; // output: 12
    echo "<br>";

    // comparison operator
    if ( $a == $b) {
      echo "Equal";
    } else {
      echo "Not Equal";
    };
    echo "<br>";

    // logical operator
    $c = 55;
    $d = 23;

    if ( $a == $b || /* && */ $c == $d) { // wen can use as well *and* *or*
      echo "Equal";
    } else {
      echo "Not Equal";
    };
    echo "<br>";
  ?>
  
</body>
</html>