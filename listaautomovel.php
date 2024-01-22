<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "programador2";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT a.*,m.montadora AS nome_montadora FROM automoveis AS a LEFT JOIN montadoras AS m ON a.montadora = m.codigo";
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
            Lista
        </title>
        <style>
            body{
                background-color: #D3D3D3;
            }
        </style>
    </head>
    <body class="text-center">
        <div style="display: flex; justify-content: center;">
            <div style="width: 80%" class="table-responsive">
                <table class="table table-striped">
                    <tr>
                        <th>
                            codigo
                        </th>
                        <th>
                            nome
                        </th>

                    
                    </tr>
    <?php
    foreach ($result as $row) {
        echo '<tr>';
        echo "<td>{$row["montadora"]}</td>";
        echo "<td>{$row["nome"]}</td>";
        
        echo '</tr>';
    }

    ?>

                </table>
            </div>
        </div>
    </body>
</html>