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
    if(file_exists("mytestfile.txt")) {
      $file = fopen("mytestfile.txt", "r");
    } else {
      die("Error: The file does not exist.");
    }





  
  ?>
</body>
</html>
