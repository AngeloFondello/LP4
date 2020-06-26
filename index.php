<?php

$modelo = $_POST['modelo'] ?? null;
$cor = $_POST['cor'] ?? null;
$erro = null;

if (isset($_COOKIE['login'])) { // verifica se tem cookie gravado
    if ($login) { // SE FOI ENVIADO LOGIN PARA A PÁGINA
        if ($login == $_COOKIE['login'] 
                && $senha == $_COOKIE['senha']) {
            // se login e senha forem iguais aos do cookie...

            session_start(); // HABILITA O VETOR $_SESSION
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;
            header('LOCATION: protegida.php');
        } else { // caso contrário, apresenta erros do acesso
            $erro = true;
        }
    }
} else { // senão houver cookies, redireciona para a lista.
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
            <p>Login: <br>
                <input type="text" name="login"></p>
            <p>Senha: <br>
                <input type="password" name="senha"></p>
            <p><input type="submit" value="Entrar"></p>
        </form>
    </body>
</html>