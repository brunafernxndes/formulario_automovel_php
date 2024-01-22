<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "programador2";

$conn = new mysqli($servername, $username, $password, $dbname);

echo "O nome do automóvel é: " . $_POST["nome"];
echo "<br>A placa do automóvel é: " . $_POST["placa"];
echo "<br>O chassi do automóvel é: " . $_POST["chassi"];
echo "<br>A montadora do automóvel é: " . $_POST["montadora"];


$sql = "INSERT INTO automoveis (nome, placa, chassi, montadora) VALUES ('".$_POST["nome"]."', '{$_POST["placa"]}', '{$_POST["chassi"]}', '{$_POST["montadora"]}')";


if ($conn->query($sql) === TRUE) {
    echo "<br>Cadastrado";
    //header("Location : listaautomovel.php/");
    ?>
    <script> location.href="listaautomovel.php";</script>
    <?php
} else {
    echo "Erro" . $conn->error;
}

$conn->close();

?>
