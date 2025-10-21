<?php require_once('verificarAcesso.php'); ?>
<?php require_once('cabecalho.php'); ?>
<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
    <?php
    require_once 'conexaoBD.php';
    if ($conexao->connect_error) {
        die("Connection failed: " . $conexao->connect_error);
    }
    $sql = "INSERT INTO usuario (nome, senha, fk_tipo_usuario) VALUES ('" . $_POST['txtNome'] . "', '" . $_POST['txtSenha'] . "', '" . $_POST['txtTipoUsuario'] . "')";
    if ($conexao->query($sql) === TRUE) {
        header("Location: principal.php?cadastro=ok");
        exit();
    } else {
        echo ' <a href="principal.php"><h1 class="w3-button w3-red">ERRO NO CADASTRO, TENTE NOVAMENT! </h1> </a> ';
    }
    $conexao->close(); ?>
</div>
<?php require_once('rodape.php'); ?>