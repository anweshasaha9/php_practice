<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php Error Handling & Debugging</title>
</head>
<body>
  <?php
    // Task-1
    echo $undefinedVariable;
    include('non_existent_file.php');
    undefinedFunction();

    // With Try-Catch Block
    try {
        $result = 10 / 0;
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }

    // Task-2
    function myErrorHandler($errno, $errstr, $errfile, $errline) {
        echo "Custom Error [$errno]: $errstr in $errfile on line $errline\n";
        return true;
    }

    set_error_handler("myErrorHandler");

    echo $undefinedVariable;
    include('non_existent_file.php');

    restore_error_handler();

    // Task-3
    define('LOG_FILE', 'error_log.txt');

    function logError($errno, $errstr, $errfile, $errline) {
        $errorMessage = "Error [$errno]: $errstr in $errfile on line $errline\n";
        file_put_contents(LOG_FILE, $errorMessage, FILE_APPEND);
        echo "An error occurred. Please try again later.";
        return true;
    }

    set_error_handler("logError");

    echo $undefinedVariable;
    include('non_existent_file.php');
    undefinedFunction();

    restore_error_handler();
  ?>
</body>
</html>
