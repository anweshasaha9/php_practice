<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>task-1</title>
</head>
<body>
  <?php
    function addStudent(&$students, $name, $grade ) {
      if ( empty($name) || !is_numeric($grade) || $grade < 0 || $grade > 100 ) {
        echo "Please provide correct details.";
        return;
      }
      $students[$name] = $grade;
    }

    // Sample Students
    addStudent( $students, "Anwesha", 90);
    print_r($students);
  ?>
</body>
</html>
