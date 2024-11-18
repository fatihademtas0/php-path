<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php
  // STRING FUNCTIONS
  $name = "Fatih Adem Tas";

  echo strlen($name); // output : 5
  echo "<br>";

  echo strpos($name , "t"); // output : 2
  echo "<br>";

  echo str_replace("Tas", "Hello" , $name); // output : Fatih Adem Hello
  echo "<br>";

  echo strtolower($name); // output : fatih adem tas
  echo "<br>";

  echo strtoupper($name); // output : FATİH ADEM TAS
  echo "<br>";

  echo substr($name , 1 , 4); // output : atih 
  echo "<br>";

  echo substr($name , 1 , -2); // output : atih Adem T 
  echo "<br>";

  print_r(explode(" ", $name)); // output : Array ( [0] => Fatih [1] => Adem [2] => Tas )
  echo "<br>";

  // INT FUNCTIONS
  $number = -5.5;

  echo abs($number); // output : 5.5
  echo "<br>";

  echo round($number); // output : -6
  echo "<br>";

  echo pow(2,4); // output : 16
  echo "<br>";

  echo sqrt(16); // output : 4
  echo "<br>";

  echo rand(1,5); // output : random number between 1 and 5
  echo "<br>";

  // ARRAY FUNCTIONS

  $array = ["apple" , "banana" , "orange"];

  echo count($array); // output : 3
  echo "<br>";

  echo is_array($array); // output : 1 which means "true"
  echo "<br>";

  array_push($array , "kiwi"); 
  print_r($array); // output : Array ( [0] => apple [1] => banana [2] => orange [3] => kiwi )
  echo "<br>";

  array_pop($array); // deletes the last element of array

  print_r(array_reverse($array)); // Array ( [0] => orange [1] => banana [2] => apple )
  echo "<br>";

  $array2 = ["pineapple"];
  print_r(array_merge($array , $array2)); // Array ( [0] => apple [1] => banana [2] => orange [3] => kiwi )
  echo "<br>";

  echo date("Y-m-d H:i:s"); // output : 2024-11-18 20:12:01
  echo "<br>";

  echo time(); // output : 1731957650
  echo "<br>";

  $date = "2024-11-18 22:21:00";
  echo strtotime($date); // output : 1731964860 
  echo "<br>";



  ?>
  
</body>
</html>