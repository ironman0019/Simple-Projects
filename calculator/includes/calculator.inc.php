<?php

include "auto_loader.inc.php";

$operator = $_POST['operator'];
$num1 = $_POST['value1'];
$num2 = $_POST['value2'];

$calculator = new Calculator($operator, (int)$num1, (int)$num2);



if ($num1 == null & $num2 == null) {     // if user doesn't enter any number than show this massage...! 
    echo "please give me some number!";
} else {
    echo $calculator->calculate();
}
