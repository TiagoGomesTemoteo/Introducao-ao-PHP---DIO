<?php
    include "services/servicoMensagemSessao.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Formulário de inscrição</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width-device-width, initial-scale=1">
</head>

<body>

    <p>Formulário para inscrição de competidores</p>

    <form action="script.php" method="post">
        <?php
            $mensagemDeErro = obterMensagemErro();
            $mensagemDeSucesso = obterMensagemSucesso();

            if(!empty($mensagemDeErro)){
                echo $mensagemDeErro;
            }
            if(!empty($mensagemDeSucesso)){
                echo $mensagemDeSucesso;
            }
        ?>
        <p>Nome: <input type="text" name="nome" /></p>
        <p>Idade: <input type="text" name="idade" /></p>
        <p><input type="submit"/></p>
    </form>

</body>

</html>