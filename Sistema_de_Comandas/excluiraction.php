<?php require_once('verificarAcesso.php'); ?>
<?php require_once('cabecalho.php'); ?>
<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle" id="eProfissional">
    <?php
    require_once 'conexaoBD.php';
    if ($conexao->connect_error) {
        die("Connection failed: " . $conexao->connect_error);
    }
    $sql = "UPDATE usuario SET excluido = '1' WHERE id_usuario =" . $_POST['txtID'] . ";";
    if ($conexao->query($sql) === TRUE) {
        echo ' <a href="listar.php"> <h1 class="w3-button w3-black">Usuário Excluido com sucesso! </h1> </a> ';
    } else {
        echo ' <a href="listar.php"> <h1 class="w3-button w3-red">ERRO! </h1> </a> ';
    }
    $conexao->close(); ?>
</div>
<?php require_once('rodape.php'); ?>