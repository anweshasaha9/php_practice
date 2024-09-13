<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>if-else</title>
</head>
<body>
  <?php
    $x = 10;

    if ($x < 20) {
      echo "10 is less than 20";
    } else {
      echo "10 is not gretaer than 20";
    }

    if (10 == 10 && 10 > 9) {
      echo "correct";
    } else {
      echo "false";
    }

    // Nested
    $a = 10;

    if ($a > 5) {
      echo "Lower than 10";
      if ($a < 20) {
        echo "10 is less than 20";
      } else {
        echo "10 is not greater than 20";
      }
    }
  ?>
</body>
</html>
