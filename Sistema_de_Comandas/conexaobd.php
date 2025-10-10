<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tcc_comandas";
$conexao = new mysqli($servername, $username, $password, $dbname);
if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
}
?>