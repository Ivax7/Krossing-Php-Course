<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <p>This is a <?php echo "awesome" ?> paragraph!</p>

  <?php

    // USER-DEFINE VARIABLE

    // Scaler types
    $name = "Krossing";
    $test = $name . " Pepe";
    echo $name;

    $int = 1234567;
    $float = 2.5678;
    $boolean = true;

    // Array type

    $array = array("Car", "Boat", "Fly");
    $array2 = ["Car", "Boat", "Fly"];


    // BUILT-IN VARIABLE (inside php language, superglobal variables)

    // Superglobal variables in PHP are predefined variables that are available in all scopes throughout a script. They are accessible from any function, class, or file without requiring any special treatment.


    //     Examples of Superglobal Variables

    // $_SERVER: Contains information about the server and the request, such as HTTP headers, script filenames, and document roots.
    
    // $_GET, $_POST, $_COOKIE, $_REQUEST, $_FILES, and $_ENV: These variables contain data sent with the request, including query string parameters, form data, cookies, and environment variables.
    
    // $GLOBALS: A superglobal array that contains all global variables, including those defined in the script and those inherited from the parent scope.

    // echo $_SERVER["DOCUMENT_ROOT"];
    // echo "<br>";
    // echo $_SERVER["PHP_SELF"];
    // echo "<br>";
    // echo $_SERVER["SERVER_NAME"];
    // echo "<br>";
    // echo $_SERVER["REQUEST_METHOD"];

    // echo "<br>";
    // echo $_GET["name"];
    // echo "<br>";
    // echo $_GET["eyecolor"];
    // echo "<br>";
    // echo $_REQUEST["eyecolor"];
    // echo "<br>";
    // // echo $_FILES[];
    // // echo $_COOKIE[];

    // $_SESSION["username"] = "Krossing";
    // echo $_SESSION["username"];

    // // echo $_ENV[];
    // echo "<br>";
  ?>

  <p>Hi! My name is <?php echo $test; ?>, and I'm learning PHP! </p>


  <main>
  <form action="/KROSSING-PHP/includes/formhandler.php" method="post">
  <label for="firstname">Firstname?</label>
      <input id="firstname" type="text" name="firstname" placeholder="Firstname...">

      <label for="lastname">Lastname?</label>
      <input id="lastname" type="text" name="lastname" placeholder="Lastname...">


      <label for="favouritepet">Favourite Pet?</label>
      <select name="favouritepet" id="favouritepet">
        <option value="none">None</option>
        <option value="dog">Dog</option>
        <option value="cat">Cat</option>
        <option value="bird">Bird</option>
      </select>

      <button type="submit">Submit</button>
    </form>
  </main>
  
  <?php
  // OPERATORS

  // String Operator
  
  $a = "Hello";
  $b = "World!";
  
  $c = $a . " " . $b;
  echo $c;
  
  
  // Arithmetic Operator
  echo "<br>";
  echo 10 % 3;

  echo "<br>";
  $a = 2;
  echo $a;
  
  echo "<br>";
  $a += 2;
  echo $a;
  
  // Comparison operator

  echo "<br>";
  $a = 4;
  $b = 4;

  $c = 2;
  $d = 6;

  // OR AND operators
  if ($a===$b || $a===$d && $c===$d) {
    echo "The condition is true.";
  } else {
    echo "The condition is false.";
  }

  // Incrementing/Decreasing operators
  echo "<br>";
  echo ++$a; // increase value and then echo it out
  
  echo "<br>";
  echo $a++; // echo the variable out and increase his value
  
  echo "<br>";
  echo $a; 
  ?>
  
</body>
</html>