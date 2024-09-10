<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Control Structures</title>
</head>
<body>
  <?php
  // Task-1
    $x = 15;

    if ($x > 10) {
        echo "$x is greater than 10. <br>";
    } elseif ($x < 10) {
        echo "$x is less than 10. <br>";
    } else {
        echo "$x is equal to 10. <br>";
    }

  // Task-2
    for ($y = 1; $y <= 100; $y++) {
      echo" $y <br> ";
    }

  // Task-3
    $day = date('l');

    switch($day) {
      case 'Monday':
        echo "Today is Monday";
        break;
      case 'Tuesday':
        echo "Today is Tuesday";
        break;
      case 'Wednesday':
        echo "Today is Wednesday";
        break;
      case 'Thursday':
        echo "Today is Thursday";
        break;
      case 'Friday':
        echo "Today is Friday";
        break;
      case 'Saturday':
        echo "Today is Saturday";
        break;
      case 'Sunday':
        echo "Today is Sunday";
        break;
      default:
        echo "Not any day.";
        break;
    }
  ?>
</body>
</html>
