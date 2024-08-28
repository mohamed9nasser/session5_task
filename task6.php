<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 6</title>
</head>
<body>
    

<?php
/* Write a class called 'Math' with static methods like 'add()', 'subtract()', and 'multiply()'. 
Use these methods to perform mathematical calculations. */

class Math {
    public static function add($num1, $num2) {
        return $num1 + $num2;
    }

    public static function subtract($num1, $num2) {
        return $num1 - $num2;
    }

    public static function multiply($num1, $num2) {
        return $num1 * $num2;
    }
}

$result1 = Math::add(6, 3);
$result2 = Math::subtract(12, 4);
$result3 = Math::multiply(9, 2);

echo "Addition: " . $result1 . "</br>";
echo "Subtraction: " . $result2 . "</br>";
echo "Multiplication: " . $result3 . "</br>";

?>
</body>
</html>
