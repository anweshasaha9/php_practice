<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task 2</title>
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
    function calculateAverageGrade($students) {
      if (empty($students)) {
        return 0;
      }

      $totalGrades = 0;
      $numberOfStudents = count($students);

      foreach ($students as $grade) {
        $totalGrades += $grade;
      }
      $averageGrade = $totalGrades / $numberOfStudents;
      return $averageGrade;
    }

    $average = calculateAverageGrade($students);
    echo "The average grade is: " . number_format($average, 2);

    // OOP Implementation
    class studentGrade {
      public $students = array(
        "Anwesha" => 90,
          "Ishita" => 80,
          "Kiko" => 100,
          "Simba" => 100,
          "Nimo" => 80,
          "Poco" => 80,
      );

      public function calculateAverageGrade() {
        if (empty($this->students)) {
          return 0;
        }

        $totalGrades = 0;
        $numberOfStudents = count($this->students);

        foreach ($this->students as $grade) {
          $totalGrades += $grade;
        }
        $averageGrade = $totalGrades / $numberOfStudents;
        return $averageGrade;
      }
    }

    $studentGradeManager = new StudentGrade();
    $average = $studentGradeManager->calculateAverageGrade();
    echo "The average grade is: " . number_format($average, 2);
    ?>
</body>
</html>
