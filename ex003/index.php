<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Teste de Tipos Primitivos</h1>
    <?php
        $num = 0b1011;
        echo "O valor da variável é $num <br>";
        $v = 300;
        var_dump($v);
        $casado = true;
        print "<br> O casal é casado $casado <br>";

        $vet = [6,2,9,3,5];
        var_dump($vet);
        print "<br>";

        class Pessoa {
            private String $nome;
        }
        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>