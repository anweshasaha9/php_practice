<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php Exception</title>
</head>
<body>
  <?php
  // With Try-Catch Block
      function divide($dividend, $divisor) {
        if($divisor == 0) {
          throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
      }

      try {
        $result = divide(10, 5);
        echo "The result is: $result";
      } catch(Exception $e) {
        echo "Unable to divide. ";
      } finally {
        echo "Process complete.";
      }
    ?>
</body>
</html>
