<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?
    $a = "blue";

    switch($a) {
      case "red" :
        echo "This is red.";
        break;
      case "blue":
        echo "This is blue";
        break;
      default:
        echo "This is default with no matching test case.";
    }
  ?>
</body>
</html>
