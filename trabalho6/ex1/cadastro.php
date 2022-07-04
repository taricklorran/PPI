<?php
    $cep = $_POST["cep"] ?? "";
    $logradouro = $_POST["logradouro"] ?? "";
    $bairro = $_POST["bairro"] ?? "";
    $cidade = $_POST["cidade"] ?? "";
    $estado = $_POST["estado"] ?? "";

    if (trim($cep) == "" || trim($logradouro) == "" || trim($bairro) == "" || trim($cidade) == "" || trim($estado) == ""){
        $errorMsg = 'É necessário preencher os campos';
    }
?>

<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
    </script>
    <body>
        <?php
            echo <<<HTML
            <div class="container">
                <main class="row gy-2">
                    <div class="col-md">
                        <label class="form-label" for="cep">CEP</label>
                        <input type="text" class="form-control" name="cep" id="cep" value="$cep">
                    </div>
                    <div class="col-md">
                        <label class="form-label" for="logradouro">Logradouro</label>
                        <input type="text" class="form-control" name="logradouro" id="logradouro" value="$logradouro">
                    </div>
                    <div class="col-md">
                        <label class="form-label" for="bairro">Bairro</label>
                        <input type="text" class="form-control" name="bairro" id="bairro" value="$bairro">
                    </div>
                    <div class="col-md">
                        <label class="form-label" for="cidade">Cidade</label>
                        <input type="text" class="form-control" name="cidade" id="cidade" value="$cidade">
                    </div>
                    <div class="col-md">
                        <label class="form-label" for="estado">Estado</label>
                        <select class="form-select" name="estado" id="estado">
                            <option selected>$estado</option>
                        </select>
                    </div>
                </main>
            </div>
            HTML;
        ?>
    </body>
</html>
