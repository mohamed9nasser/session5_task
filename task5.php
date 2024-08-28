<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 5</title>
</head>
<body>
<?php
/* Write a class called 'Logger' with a static property called 'logCount' that keeps track of the number of log messages. 
Implement a static method to log a message.*/
class Logger {
    public static $logCount = 0;

    public static function log($message) {
        echo $message . "</br>";
        self::$logCount++;
    }
}
Logger::log("Log message 1");
Logger::log("Log message 2");
Logger::log("Log message 3");

echo "Total log count: " . Logger::$logCount . "</br>";

?>

</body>
</html>