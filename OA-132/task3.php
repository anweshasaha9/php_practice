<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task-3</title>
</head>
<body>
  <?php
    $students = array(
      "Anwesha" => 90,
      "Ishita" => 80,
      "Kiko" => 100,
      "Simba" => 100,
      "Nimo" => 80,
      "Poco" => 80,
    );

    function displayStudentsInfo($students) {
      if(empty($students)) {
        echo "Please enter all details.";
        return;
      }
      foreach ($students as $name => $grade ) {
        echo "Student: $name; Grade: $grade <br>";
      }
    }

    displayStudentsInfo($students);
  ?>
</body>
</html>
