<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "programador2";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM montadoras";
$result = $conn->execute_query($sql);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <title>
            Formulário
        </title>
        <style>
            body{
                background-color: #D3D3D3;
            }
        </style>
    </head>
    <body class="text-center">
        <form class="form-horizontal" action="insere_automovel.php" method="post">
            <div style="display: flex; justify-content: center;">
            <div style="width: 300px; max-width:100%;" class="form-group">
                <img style="max-width: 100%; height: auto; display: block;" src="\programador2\carro.png" class="img-responsive" alt="Imagem responsiva">
            </div>
            </div>
            <div class="form-group">
                <strong>Cadastro de Automóveis</strong>
            </div>
            <div class="form-group">
                Nome: <input type=text name=nome><br>
            </div>
            <div class="form-group">
                Placa: <input type=text name=placa><br>
            </div>
            <div class="form-group">
                Chassi: <input type=text name=chassi><br>
            </div>
            <div class="form-group">
            <label for="montadora">Escolha uma Montadora:</label>
                <select name="montadora">
                    <?php
                    foreach ($result as $row) {
                        echo "<option value='{$row["codigo"]}'>{$row["montadora"]}</option>";
                    }
                    ?>
                </select><br>
            </div>
            <input type=submit value="OK">
            <a href="listaautomovel.php" type=submit value="Lista de Automóveis">lista</a>
        </form>
    </body>
</html>