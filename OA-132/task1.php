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

  //  OOP Implementation
  class studentManage {
    public $students = array();

    public function addStudent($name, $grade) {
      if (empty($name) || !is_numeric($grade) || $grade < 0 || $grade > 100) {
        echo "Please provide correct details.";
        return;
      }
      $this->students[$name] = $grade;
    }

    public function getStudents() {
      return $this->students;
    }
  }

  // Create an instance of StudentManage
  $studentManager = new StudentManage();

  // Sample Students
  $studentManager->addStudent("Anwesha", 90);

  // Print students
  print_r($studentManager->getStudents());
  ?>
</body>
</html>
