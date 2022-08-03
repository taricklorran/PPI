<?php

    require "../ex1/conexaoMysql.php";
    $pdo = mysqlConnect();

    $email = $_POST["email"] ?? "";
    $senha = $_POST["senha"] ?? "";

    if (trim($email) == "" || trim($senha) == ""){
        $message = 'E-mail ou senha vazio!';
        $alerta = '"alert alert-warning"';
    }
    else{
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        try {
            $sql = <<<SQL
            INSERT INTO login (email, hash_senha)
            VALUES (?, ?)
            SQL;
    
            $stmt = $pdo -> prepare($sql);
            $stmt -> execute([
                $email, $senhaHash
            ]);
    
            header("location: index.html");
            exit();
        }
        catch (Exception $e){
            if($e->errorInfo[1] === 1062){
                exit ('Dados duplicados: ' .$e->getMessage());
            }
            else {
                exit('Falha ao cadastrar dados: ' .$e->getMessage());  
            }
        }
    }   

?>