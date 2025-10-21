<?php require_once('verificarAcesso.php'); ?>
<?php require_once('cabecalho.php'); ?>


<div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-middle">
    <h1 class="w3-center w3-black w3-round-large w3-margin">EXLUIR - ID: <?php echo " " . $_GET['id'] ?> </h1>
    <form action="excluirAction.php" class="w3-container" method='post'>
        <input name="txtID" class="w3-input w3-grey w3-border" type="hidden" value="<?php echo $_GET['id'] ?>"><br>
        <label class="w3-text-black " style="font-weight: bold;">Usuário:</label>
        <input name="txtNome" class="w3-input  w3-light-grey " disabled value="<?php echo $_GET['nome'] ?>">
        <br>
        <label class="w3-text-black " style="font-weight: bold;">Tipo:</label>
        <input name="txtNome" class="w3-input  w3-light-grey " disabled value="<?php echo $_GET['tipo'] ?>">
        <br>
        <br>
        <a href="listar.php" class="w3-button w3-black w3-cell w3-round-large w3-left w3-xlarge">
            <i class="fa fa-ban w3-xxlarge"></i> Cancelar</a>
        <button class="w3-button w3-black w3-cell w3-round-large w3-right w3-xlarge"><i
                class=" w3-xxlarge fa fa-user-times"></i> Excluir </button>
    </form>
</div>
<?php require_once('rodape.php'); ?>