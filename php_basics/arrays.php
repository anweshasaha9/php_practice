<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>arrays</title>
</head>
<body>
  <?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo count($cars);

    // Indexed Arrays
    var_dump($cars);
    echo $cars[2];
    $cars[0] = "Audi";
    var_dump($cars);

    // Associative Array
    $car = array("brand"=>"Lamborghini", "model"=>"Hurracan", "year"=>2008);
    echo $car["brand"];
    $car["year"] = 2020;
    var_dump($car);
    array_splice($cars, 1, 1);

  ?>
</body>
</html>
