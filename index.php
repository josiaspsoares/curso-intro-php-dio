<!DOCTYPE HTML>

<html lang="pt-br">
    <head>
        <meta charset="UTF--8">
        <title>Introdução ao PHP - DIO</title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Nadador.php';
                $n1 = new Nadador("Maria", 10);
                $n1->exibirResumo();
                $n2 = new Nadador("Pedro", 15);
                $n2->exibirResumo();
                $n3 = new Nadador("Carla", 20);
                $n3->exibirResumo();
            ?>
        </pre>
    </body>
</html>

