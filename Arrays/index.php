<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php
    $fruits = ["apple" , "banana" , "pineapple"];
    //$fruits2 = array("apple" , "banana" , "pineapple");

    $fruits[] = "orange";

    array_splice($fruits , 0 ,1 ); // removes apple and replace it with the next 
    echo $fruits[0];
    echo "<br>";

    $tasks = [
      "Cooking" => "Fatih",
      "Laundry" => "Esra",
      "Resting" => "Nezuko-chan"
    ];

    echo $tasks["Laundry"]; // output : Esra
    echo "<br>";

    print_r($tasks); // output : Array ( [Cooking] => Fatih [Laundry] => Esra [Resting] => Nezuko-chan )
    echo "<br>";

    echo count($tasks); // output is the length of the array which is : 3
    echo "<br>";

    //sort($tasks);
    //print_r($tasks); // output : Array ( [0] => Esra [1] => Fatih [2] => Nezuko-chan )

    array_push($fruits , "mango"); // add the value to the end of the array
    print_r($fruits); // output : Array ( [0] => banana [1] => pineapple [2] => orange [3] => mango )
    echo "<br>";

    $tasks["Dusting"] = "Esra-chan";
    print_r($tasks); // output : Array ( [Cooking] => Fatih [Laundry] => Esra [Resting] => Nezuko-chan [Dusting] => Esra-chan )
    echo "<br>";

    array_splice($fruits , 1 , 0 , "strawberry"); // place the value to the given index
    print_r($fruits); // output : Array ( [0] => banana [1] => strawberry [2] => pineapple [3] => orange [4] => mango )
    echo "<br>";

    $fruits2 =["melon" , "cherry"];
    array_splice($fruits , 5 , 0 , $fruits2); // after the given index ve put the new array
    print_r($fruits); // output : Array ( [0] => banana [1] => strawberry [2] => pineapple [3]
                              // => orange [4] => mango [5] => melon [6] => cherry )
    echo "<br>";

    $foods = [
      array("bread" , "chicken"),
      "apple",
      "mango",
      "pineapple"
    ];
    echo $foods[0][1]; // output : chicken
    echo "<br>";

    $foods2 = [
      "fruits" => array("apple" , "mango"),
      "meat" => array("chicken" , "beef"),
      "bread" => array("garlic" , "somon")
    ];

    echo $foods2["meat"][1]; // output : beef
    echo "<br>";

  ?>
  
</body>
</html>