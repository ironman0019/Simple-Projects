<?php
include 'includes/auto_loader.inc.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My Simple Calculator!</h1>
    <form action='includes/calculator.inc.php' method='post'>
        <input type="number" name="value1" placeholder="enter your number">
        <select name="operator">
            <option value="add">Addition</option>
            <option value="sub">Subtraction</option>
            <option value="multi">Multiplication</option>
            <option value="div">Division</option>
        </select>
        <input type="number" name="value2" placeholder="enter your number">
        <button name="submit" type="submit">Calculate</button>
    </form>
</body>
</html>