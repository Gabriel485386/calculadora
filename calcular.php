<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
<?php

if(isset($_GET["num1"]) && isset($_GET["num2"]) && isset($_GET["ope"])){


$num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $ope = $_GET["ope"];

    if($ope == " "){
        echo "a soma é = ", $num1 + $num2;
    }
    elseif($ope == "-"){
        echo "a subtração é = ", $num1 - $num2;
    }
    elseif($ope == "*"){
        echo "a subtração é = ", $num1 * $num2;
    }
    elseif($ope == "/"){
        echo "a subtração é = ", $num1 / $num2;
    } else{
        echo "nan";
    }

}else{
    echo "parâmetros não foram informados!";
}

    ?>
</body>
</html>