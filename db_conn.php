<?php

$servername = "localhost";
$username ="root";
$password = "";
$dbname = "teste";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){

    die("Conexao com banco de dados erro".mysqli_connect_error());
}
// echo "Conexao foi um sucesso";

?>