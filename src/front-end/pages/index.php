<?php

    $valor1 = 0;
    $valor2 = 0;
    $result = 0;

    function soma($a, $b) {
        $resultado = $a + $b;
        return $resultado;
    }

    if ($_POST['REQUEST_METHOD'] == 'POST') {
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $result = soma($valor1, $valor2);
        return $result;
    }
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Página de teste</title>
</head>
<body>
    <h1>Apenas teste</h1>
    <p>Esse arquivo, junto dos outros, foram feitos pelo terminal, só estou usando alguns comandos pra aprende-los.</p>
    <br><br>
    <form action="index.php" method="POST">
        <input type="number" name="valor1" id="valor1">
        <br>
        <input type="number" name="valor2" id="valor2">
        <br>
        <input type="number" name="resultado" id="resultado" value="<?=$result;?>" readonly>
        <br>
        <button type="submit">Ver Soma</button>
    </form>
</body>
</html>