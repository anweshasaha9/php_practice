<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>loops</title>
</head>
<body>
  <?php
    $i = 1;
    while ($i < 6) {
      echo $i;
      $i++;
    }

    $i = 1;
    do {
      echo $i;
      $i++;
    } while ($i < 6);

    for ($x = 0; $x <= 10; $x++) {
      if ($x == 3) break;
      echo "The number is: $x <br>";
    }

    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $x) {
      echo "$x <br>";
    }
  ?>
</body>
</html>
