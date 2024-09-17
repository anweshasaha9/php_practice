  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Error Handling</title>
  </head>
  <body>
    <?php
      // Task-3
      function customError($errno, $errstr) {
        echo "<b>Error:</b> [$errno] $errstr<br>";
        echo "Admin has been notified";
        error_log("Error: [$errno] $errstr",1,
        "someone@example.com","From: webmaster@example.com");
      }
      set_error_handler("customError",E_USER_WARNING);

      $test=10;
      if ($test<=5) {
        echo"The value is $test";
      } else {
        trigger_error("Value must be 5 or below",E_USER_WARNING);
      }
    ?>
  </body>
  </html>
