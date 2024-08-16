<?php
    declare(strict_types= 1);
    
    include 'includes/header.php';


    function sumar1() {
        echo 2 + 2;
    }

    function sumar(int $num1 =  0, int $num2 = 0) {
        echo "{$num1} + {$num2}";
        $suma = $num1 + $num2;
        echo "<br>";
        echo $suma;
    }

    sumar1();
    echo"<br>";

    sumar(1,2);
    echo "<br>";

    sumar(2,3);
    echo "<br>";

    sumar(3,4);
    echo "<br>";

    include 'includes/footer.php';