<?php
    include 'servicos/servicoMensagemSessao.php';
?>
<!DOCTYPE HTML>

<html lang="pt-br">
    <head>
        <meta charset="UTF--8">
        <title>Formulário de Inscrição</title>
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="viewport" content="width-device-width, initial-scale=1">
    </head>
    <body>
        <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

        <form action="script.php" method="post">
            <?php
                $mensagemDeSucesso = obterMensagemSucesso();
                if(!empty($mensagemDeSucesso)){
                    echo "<p style='color: green'>$mensagemDeSucesso</p>";
                }

                $mensagemDeErro = obterMensagemErro();
                if(!empty($mensagemDeErro)){
                    echo "<p style='color: red'>$mensagemDeErro</p>";
                }
            ?>
            <p>Seu nome: <input type="text" name="nome"/></p>
            <p>Sua idade: <input type="text" name="idade"/></p>
            <p><input type="submit" value="Enviar Dados"/></p>
        </form>
    </body>
</html>

