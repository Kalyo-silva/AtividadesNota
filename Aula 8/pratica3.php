<?php

    $salario1 = 1000;
    $salario2 = 2000;

    $salario2 = $salario1;
    $salario2++;

    $salario1 *= 1.1;

    echo "Valor salario 1: $salario1 | Valor salario 2: $salario2 <br>";
    
    if ($salario1 > $salario2) {
        echo "Salario 1 é MAIOR que Salario 2";
    }
    else if ($salario1 > $salario2) {
        echo "Salario 1 é Menor que Salario 2";
    }
    else{
        echo "Salario 1 é IGUAL a Salario 2";
    }
?>