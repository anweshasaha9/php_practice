<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task-4</title>
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

    function highestGrade($students) {
      if (empty($students)) {
        echo "No student found.";
      }
      $highestGrade = -1;
      $topper = null;

      foreach ($students as $name => $grade) {
        if ($grade > $highestGrade) {
          $highestGrade = $grade;
          $topper = $name;
        }
      }
      return [$topper, $highestGrade];
    }
    // Sample Students
    addStudent( $students, "Anwesha", 90);
    addStudent( $students, "Ishita", 80);
    addStudent( $students, "Kiko", 100);
    addStudent( $students, "Poco", 100);
    print_r($students);

    list($name, $grade) = highestGrade($students);
    echo "The highest to score is $name, $grade </br>";
  ?>
</body>
</html>
