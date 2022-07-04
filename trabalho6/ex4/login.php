<?php
    function carregaString($arquivo) {
        $arq = fopen($arquivo, "r");
        $string = fgets($arq);
        fclose($arq);
        return $string;
    }

    $email = htmlspecialchars(carregaString("../ex3/email.txt"));
    $senhaHash = htmlspecialchars(carregaString("../ex3/senhaHash.txt"));
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Arquivo</title>
</head>
<body>
    <?php
        echo <<<HTML
        <div class="container">
            <h1>Dados Armazenados:</h1>
            <h5>Email: $email</h5>
            <h5>Senha: $senhaHash</h5>
        </div>
        HTML;
    ?>
    
</body>
</html>