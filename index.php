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

    
  ?>

  <p>Hi! My name is <?php echo $test; ?>, and I'm learning PHP! </p>
</body>
</html>