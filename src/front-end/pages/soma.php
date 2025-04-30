<?php

    function soma($a, $b) {
        $resultado = $a + $b;
        return $resultado;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $result = soma($valor1, $valor2);
        return $result;
    }
    
    echo "A soma dos valores é $result";
    
?>