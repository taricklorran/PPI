<?php
    $produtos = ["televisão", "som", "cama", "sofá", "fogão", "óculos", "jogos", "lâmpadas", "cafeteira", "cadeira"];
    $descricao = ["Aparelho para entretenimento.", "Aparelho para curtir músicas.", "Utilizar no momento de descanso.", "Para reunir a família na sala.", "Para cozinhar diversos alimentos.", "Enxergar o mundo.", "Se distrair no momento de lazer.", "Lâmpada usada para clarear o ambiente.", "Fazer café de uma forma mais rápido.", "Cadeira para jantar."];
    
    $qde = $_GET["qde"];

    for($i = 1; $i <= $qde; $i++){
        $rand = rand(0, 9);
    }
?>

<html>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
    <body>
    <?php
        echo <<<HTML
        <div class="container">
            <main>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Produto</th>
                            <th scope="col">Descrição</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">$i</th>
                            <td>$produtos[$rand]</td>
                            <td>$descricao[$rand]</td>
                        </tr>
                    </tbody>
                </table>
            </main>
        </div>
        HTML;

    ?>

</html>