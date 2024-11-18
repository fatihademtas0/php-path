<?php

//var_dump($_SERVER["REQUEST_METHOD"]);
/*
if (isset($_POST["submit"])){  // this is another way to do

}*/

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  // to grab the firstname from html input
  $firstname = htmlspecialchars($_POST["firstname"]) ; // takes the cod and invert to html and data is no longer can be a injection
  $lastname = htmlspecialchars($_POST["lastname"]) ; // we can use htmlentities() as well
  $pets = htmlspecialchars($_POST["favouritepet"]) ;
  
  if (empty($firstname) && empty($lastname) && empty($pets)) { // user must input data
		header("Location: ../index.php");
		exit(); 
	}

  echo "These are the data that the user submitted.";
  echo "<br>";
  echo $firstname;
  echo "<br>";
  echo $lastname;
  echo "<br>";
  echo $pets;
  echo "<br>";

  header("Location: ../index.php"); // user submitted the data and returned to the same page
}else{
  header("Location: ../index.php");
}