<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php Error Handling</title>
</head>
<body>
  <?php
    // Task-2

    function customErrorHandler($errno, $errstr, $errfile, $errline) {
      $errorMessage = "Error [$errno]: $errstr in $errfile on line $errline\n";
      echo "Custom Error Handler: $errorMessage";
      return true;
    }
    set_error_handler("customErrorHandler");

    function divide($dividend, $divisor) {
      if($divisor == 0) {
        throw new Exception("Division by zero");
      }
      return $dividend / $divisor;
    }

    // Trigerring an error
    try {
      include('non_existent_file.php');
      $result = divide(10, 5);
      echo "The result is: $result";
    } catch(Exception $e) {
      echo "Unable to divide. ";
    } finally {
      echo "Process complete.";
    }

    restore_error_handler();
  ?>
</body>
</html>
