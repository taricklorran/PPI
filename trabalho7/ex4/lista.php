<?php

require "../ex1/conexaoMysql.php";
$pdo = mysqlConnect();

try {

  $sql = <<<SQL
  SELECT p.codigo, p.nome, p.sexo, p.email, 
         p.telefone, p.cep, p.logradouro,
         p.cidade, p.estado, pa.peso, pa.altura,
         pa.tipoSanguineo
  FROM pessoa p
  INNER JOIN paciente pa on p.codigo = pa.codigo
  SQL;

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
    <title>Pacientes</title>
</head>
<body>
    <div class="container">
        <h2>Pacientes Cadastrados</h2>
        <table class="table table-striped table-hover">
            <tr>
                <th>Codigo</th>
                <th>Nome</th>
                <th>Sexo</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>CEP</th>
                <th>Logradouro</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Peso</th>
                <th>Altura</th>
                <th>Tipo Sanguíneo</th>
            </tr>

            <?php
            while ($row = $stmt->fetch()){
                $codigo = htmlspecialchars($row['codigo']);
                $nome = htmlspecialchars($row['nome']);
                $sexo = htmlspecialchars($row['sexo']);
                $email = htmlspecialchars($row['email']);
                $telefone = htmlspecialchars($row['telefone']);
                $cep = htmlspecialchars($row['cep']);
                $logradouro = htmlspecialchars($row['logradouro']);
                $cidade = htmlspecialchars($row['cidade']);
                $estado = htmlspecialchars($row['estado']);
                $peso = htmlspecialchars($row['peso']);
                $altura = htmlspecialchars($row['altura']);
                $tipoSang = htmlspecialchars($row['tipoSanguineo']);

                echo <<<HTML
                    <tr>
                        <td>$codigo</td>
                        <td>$nome</td>
                        <td>$sexo</td>
                        <td>$email</td>
                        <td>$telefone</td>
                        <td>$cep</td>
                        <td>$logradouro</td>
                        <td>$cidade</td>
                        <td>$estado</td>
                        <td>$peso</td>
                        <td>$altura</td>
                        <td>$tipoSang</td>
                    </tr>
                HTML;
            }
            ?>
        </table>
        <a href="index.html">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
            </svg> Voltar</a>
    </div>
    
</body>
</html>