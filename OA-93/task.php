<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Functions and Arrays</title>
</head>
<body>
  <?php
    // Task-1
    function factorial($n) {
        if ($n == 0) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }

    echo factorial(5);

    // Task-2
    function isPrime($n) {
        if ($n <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }

    echo isPrime(7) ? 'Prime' : 'Not Prime';

    // Task-3
    $students = array(
        "Anwesha" => 80,
        "ishita" => 90,
        "Kiko" => 100
    );

    foreach ($students as $name => $grade) {
        echo "$name: $grade\n";
    }

    // Task-4
    $numbers = array(5, 3, 8, 1, 2);
    sort($numbers);
    echo implode(" ", $numbers);

    // using push() and pop()
    array_push($numbers, 7);
    array_pop($numbers);
    echo implode(" ", $numbers);
  ?>
</body>
</html>
