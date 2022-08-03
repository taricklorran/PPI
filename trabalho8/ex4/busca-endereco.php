<?php

  require "conexaoMysql.php";
  $pdo = mysqlConnect();

  $cep = $_GET['cep'] ?? '';

  try{
    $sql = <<<SQL
      SELECT rua, bairro, cidade
      FROM endereco_cep
      WHERE cep = ?
    SQL;

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$cep]);

    while($row = $stmt->fetch()){
      $endereco = new Endereco(htmlspecialchars($row['rua']), htmlspecialchars($row['bairro']), htmlspecialchars($row['cidade']));
    }
    

    header('Content-type: application/json');
    echo json_encode($endereco);
  }
  catch(Exception $e){
    exit('Falha inesperada: ' .$e->getMessage());
  }

  class Endereco
  {
    public $rua;
    public $bairro;
    public $cidade;

    function __construct($rua, $bairro, $cidade)
    {
      $this->rua = $rua;
      $this->bairro = $bairro; 
      $this->cidade = $cidade;
    }
  }

?>


