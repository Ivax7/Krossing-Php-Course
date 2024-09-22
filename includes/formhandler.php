<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $firstname = htmlspecialchars($_POST["firstname"]);
  $lastname = htmlspecialchars($_POST["lastname"]);
  $favouritepet = htmlspecialchars($_POST["favouritepet"]);
  
if (empty($firstname)) {
  exit();
  header("Location: ../index.php");
}

  echo "These are the data, that the user submitted:";
  echo "<br>";
  echo $firstname;
  echo "<br>";
  echo $lastname;
  echo "<br>";
  echo $favouritepet;
  
  header("Location: ../index.php"); // With this the user submit the data but he remains in the main page
} else {
  header("Location: ../index.php");
}
?>
