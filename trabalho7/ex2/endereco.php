<?php
    require "../ex1/conexaoMysql.php";
    $pdo = mysqlConnect();

    try {

    $sql = <<<SQL
    SELECT id, cep, logradouro, bairro, cidade, estado
    FROM endereco
    SQL;

    // Neste exemplo não é necessário utilizar prepared statements
    // porque não há possibilidade de injeção de SQL, 
    // pois nenhum parâmetro do usuário é utilizado na query SQL. 
    // Além disso, como há resultados a serem processados, 
    // utilizamos o método query (e não o exec).
    $stmt = $pdo->query($sql);
    } 
    catch (Exception $e) {
        exit('Ocorreu uma falha: ' . $e->getMessage());
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tabela Endereço</title>
</head>
<body>
    <div class="container">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">CEP</th>
                    <th scope="col">Logradouro</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                </tr>
            </thead>
            <?php
            while($row = $stmt->fetch()){
                $id = htmlspecialchars($row['id']);
                $cep = htmlspecialchars($row['cep']);
                $logradouro = htmlspecialchars($row['logradouro']);
                $bairro = htmlspecialchars($row['bairro']);
                $cidade = htmlspecialchars($row['cidade']);
                $estado = htmlspecialchars($row['estado']);

                echo <<<HTML
                    <tr>
                        <th scope="row">$id</th>
                        <th scope="row">$cep</th>
                        <th scope="row">$logradouro</th>
                        <th scope="row">$bairro</th>
                        <th scope="row">$cidade</th>
                        <th scope="row">$estado</th>
                    </tr>
                HTML;
            }
            ?>
        </table>
    </div>
</body>
</html>