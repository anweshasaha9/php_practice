<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variables</title>
</head>
<body>
  <?php
  // Php Variables always starts with $
  $name = "Anwesha";
  $age = 23;
  echo "My name is $name. I am $age years old.";

  $num = 30;
  $NUM = 20;
  echo $num + $NUM;

  var_dump(9);
  var_dump("Anwesha");
  var_dump(2.9);
  var_dump(true);
  var_dump([1, 2, 3, "Hello, World!"]);
  var_dump(NULL);

  $a = $b = $c = "same value";
  echo $a, $b;
  echo $c;

  // Global Scope
  $global = "World";
  function test1() {
    global $global;
    echo "Hello, $global . This is inside function variable from global.";
  }
  test1();

  echo "This is global variable, outside function: $global";

  // Local scope
  function test2() {
    $local = "Anwesha";
    echo "My name is $local.";
  }
  test2();

  echo "This is global using local variable: $local";
  ?>
</body>
</html>
