<?php
    function carregaString($arquivo) {
        $arq = fopen($arquivo, "r");
        $string = fgets($arq);
        fclose($arq);
        return $string;
    }

    function checkLogin($email, $senha){
        if ($email == htmlspecialchars(carregaString("../ex3/email.txt"))){
            if(password_verify($senha, htmlspecialchars(carregaString("../ex3/senhaHash.txt")))){
                header("Location: sucesso.html");
                exit;
            }
            else{
                $errorMessage = 'Email ou Senha inválido!';
                header("Location: index.html");
                exit;
            }
        }
        else{
            $errorMessage = 'Email ou Senha inválido!';
            header("Location: index.html");
            exit;
        }
    }
   $email = $_POST["email"];
   $senha = $_POST["senha"];

    checkLogin($email, $senha);
?>