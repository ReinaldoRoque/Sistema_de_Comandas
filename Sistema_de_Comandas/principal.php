<?php require_once('verificarAcesso.php'); ?>
<?php require_once('cabecalho.php'); ?>
<div class="w3-padding w3-text-grey w3-half w3-display-middle w3-center">
    <h1 class="w3-center w3-black w3-round-large w3-margin">Projeto Comandas</h1>
    <div class="w3-row">
        <div class="w3-col w3-button w3-black w3-cell w3-round-large" style="width:49%;"> <a href="cadastro.php"
                style="text-decoration: none;"> <i class=" fa fa-user-plus" style="font-size: 10.5em"></i>
                <p style="font-size: 1.5em">Cadastro de Usuário </p>
            </a> </div>
        <div class="w3-col w3-button w3-black w3-cell w3-round-large w3-right" style="width:49%;"> <a href="listar.php"
                style="text-decoration: none;"> <i class="fa fa-vcard-o" style="font-size: 10.5em"></i>
                <p style="font-size: 1.5em">Listar Usuário</p>
            </a>
            <div> </div>
        </div>
        <?php require_once('rodape.php'); ?>