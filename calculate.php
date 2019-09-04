<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numberOne = $_POST["first"];
        $numberTwo = $_POST["second"];
        $select = $_POST["select"];
        $result = $numberOne . $select . $numberTwo;
        switch ($select) {
            case "+":
                echo $numberOne + $numberTwo;
                break;
            case "-":
                echo $numberOne - $numberTwo;
                break;
            case "*":
                echo $numberOne * $numberTwo;
                break;
            case "/":
                echo $numberOne / $numberTwo;
                break;
        }
    }
?>
</body>
</html>