<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd Checker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
    </style>
</head>
<body>
    <h1>Even or Odd Number Checker</h1>
    <p><?php echo checkEvenOrOdd(); ?></p>
</body>
</html>

<?php
// Function to check if a number is even or odd
function checkEvenOrOdd() {
    $number = rand(1, 100); // Generate a random number between 1 and 100

    echo "Generated Number: $number<br>";

    if ($number % 2 == 0) {
        return "The number $number is even.";
    } else {
        return "The number $number is odd.";
    }
}
?>
