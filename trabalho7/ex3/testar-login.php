<?php

    function checkLogin($pdo, $email, $senha){
        $sql = <<<SQL
            SELECT hash_senha
            FROM login
            WHERE email = ?
            SQL;
    

        try{
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$email]);
            $row = $stmt->fetch();
            if(!$row){
                return false; //email não encontrado
            }
            else{
                return password_verify($senha, $row['hash_senha']);
            }
        }
        catch (Exception $e){
            exit('Falha inesperada: ' .$e->getMessage());
        }
    }

    $errorMsg = "";

    require "../ex1/conexaoMysql.php";
    $pdo = mysqlConnect();

    $email = $_POST["email"] ?? "";
    $senha = $_POST["senha"] ?? "";

    if (checkLogin($pdo, $email, $senha)) {
        header("location: sucesso.html");
        exit();
      } 
      else
        $errorMsg = "Dados incorretos";
        header("location: testar-login.html");
        exit();
?>