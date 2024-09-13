<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    // String
    $x = "Hello world!";
    $y = 'Hello world!';

    var_dump($x);
    var_dump($y);

    // Integer
    $int = 29;
    var_dump($int);

    // Float
    $float = 10.6;
    var_dump($float);

    // Boolean
    $boolean = true;
    var_dump($boolean);

    // Array
    $cars = array("Volvo","BMW","Toyota", "Lamborghini");
    var_dump($cars);

    // Object
    class car_info {
      public $color;
      public $model;
      public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
      }
      public function display_details() {
        return "Car model is" . $this->model . ". " . "Color is " . $this->color;
      }
    }

    $my_car = new car_info("lamborghini", "red");
    var_dump($my_car);

    // Null
    $null = null;
    var_dump($null);

    // Changing data type
    $a = 10;
    $a = (string) $a;
    var_dump($a);

  ?>
</body>
</html>
