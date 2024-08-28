<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2</title>
</head>
<body>
    
<?php
//Write a PHP class called 'Student' with properties like 'name', 'age', and 'grade'. Implement a method to display student information.
class Student {
    public $name;
    public $age;
    public $grade;

    public function displayInfo() {
        echo "Name: " . $this->name . "</br>";
        echo "Age: " . $this->age . "</br>";
        echo "Grade: " . $this->grade . "</br>";
    }
}

$student = new Student();
$student->name = "Mohamed Nasser";
$student->age = 15;
$student->grade = 9;
$student->displayInfo();
?>

</body>
</html>