<?php require_once('verificarAcesso.php'); ?>
<?php require_once('cabecalho.php'); ?>
<a href="principal.php" class="w3-display-topleft">
    <i class="fa fa-arrow-circle-left w3-large w3-black w3-button w3-xxlarge"></i> </a>
<div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-middle">
    <h1 class="w3-center w3-black w3-round-large w3-margin">Cadastro de Usuário</h1>
    <form action="cadastroAction.php" class="w3-container" method='post'>
        <!-- <label class="w3-text-black" style="font-weight: bold;">Código</label> 
        <input name="txtID" class="w3-input w3-ligth-grey w3-border" disabled><br> -->
        <label class="w3-text-black" style="font-weight: bold;">Nome</label>
        <input name="txtNome" class="w3-input w3-light-grey w3-border"><br>
        <label class="w3-text-black" style="font-weight: bold;">Senha</label>
        <input name="txtSenha" class="w3-input w3-light-grey w3-border"><br>
        <label class="w3-text-black" style="font-weight: bold;">Tipo de Usuário</label>
        <select name="txtTipoUsuario" value="" class="w3-input w3-light-grey w3-border">
            <option value="" disabled selected>Qual o tipo de usuário?</option>
            <?php
            require_once 'conexaoBD.php';
            if ($conexao->connect_error) {
                die("Connection failed: " . $conexao->connect_error);
            }
            $sql = "SELECT * FROM tipo_usuario";
            $resultado = $conexao->query($sql);
            if ($resultado != null)
                foreach ($resultado as $linha)
                    echo "<option value = $linha[id_tipo_usuario]>" . $linha['tipo'] . "</option>"
                        ?>
                </select>
                <br>
                <button name="btnAdicionar" class="w3-button w3-black w3-cell w3-round-large w3-right w3-margin-right">
                    <i class="w3-xxlarge fa fa-user-plus"></i> Adicionar </button>
            </form>

        </div>
<?php require_once('rodape.php'); ?>