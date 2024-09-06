<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>strings</title>
</head>
<body>
  <?php
    // double and single quote
    echo "Hello, World!";
    echo 'Hello, World!';

    $x = "Hello";
    echo "$x World";

    // Length of string
    echo strlen("Hello world!");

    // Count of string
    echo str_word_count("Hello world!");

    // Place of a word in string
    echo strpos("Hello world!", "world");

    // Upper Case
    $x = "Hello World!";
    echo strtoupper($x);

    // Lower Case
    $x = "Hello World!";
    echo strtolower($x);

    // Replace word
    $x = "Hello World!";
    echo str_replace("World", "Anwesha", $x);

    // Reverse string
    $x = "Hello World!";
    echo strrev($x);

    // String to array
    $string = "apple,banana,orange";
    $array = explode(",", $string);
    print_r($array);

    // numbers, operators(+, -, *, /, !=, ==, etc) are used somewhere in previous small examples
  ?>
</body>
</html>
