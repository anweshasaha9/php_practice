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

    // OOP Implementation
    class studentManage {
      private $students = array();

      public function addStudent($name, $grade) {
        if (empty($name) || !is_numeric($grade) || $grade < 0 || $grade > 100) {
          echo "Please provide correct details.<br>";
          return;
        }
        $this->students[$name] = $grade;
      }

      public function highestGrade() {
        if (empty($this->students)) {
          echo "No student found.<br>";
          return [null, null];
        }

        $highestGrade = -1;
        $topper = null;

        foreach ($this->students as $name => $grade) {
          if ($grade > $highestGrade) {
            $highestGrade = $grade;
            $topper = $name;
          }
        }
        return [$topper, $highestGrade];
      }

      public function displayStudents() {
        if (empty($this->students)) {
          echo "No students to display.<br>";
          return;
        }

        foreach ($this->students as $name => $grade) {
          echo "Student: $name; Grade: $grade <br>";
        }
      }
    }

    $studentManage = new studentManage();
    $studentManage->addStudent("Anwesha", 90);
    $studentManage->addStudent("Ishita", 80);
    $studentManage->addStudent("Kiko", 100);
    $studentManage->addStudent("Poco", 100);
    $studentManage->displayStudents();

    list($name, $grade) = $studentManage->highestGrade();
    if ($name !== null) {
      echo "The highest score is $name, $grade <br>";
    }
  ?>
</body>
</html>
