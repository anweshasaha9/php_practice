<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>functions</title>
</head>
<body>
    <?php
      function familyName($name, $year) {
        echo "$name Refsnes. Born in $year <br>";
      }

      familyName("Anwesha", "2001");
      familyName("Ishita", "2006");
      familyName("Kiko", "2021");

      function sum($x, $y) {
        $z = $x + $y;
        return $z;
      }

      echo "5 + 10 = " . sum(5, 10);
  ?>
</body>
</html>
