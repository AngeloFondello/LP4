<?php

$modelo = $_POST['modelo'] ?? null;
$cor = $_POST['cor'] ?? null;
$erro = null;

if (isset($_COOKIE['busca'])) { 
    if ($busca) { 
        if ($modelo == $_COOKIE['modelo'] 
                && $cor == $_COOKIE['cor']) {
           .
        } else { 
            $erro = true;
        }
    }
} else { 
    header('LOCATION: lista.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php if ($erro): ?>
        <p>Carro não encontrado!</p>
        <?php endif; ?>
        <form method="post">
            <p>Modelo: <br>
                <input type="text" name="modelo"></p>
            <p>Cor: <br>
                <input type="text" name="cor"></p>
            <p><input type="submit" value="Buscar"></p>
        </form>
    </body>
</html>
