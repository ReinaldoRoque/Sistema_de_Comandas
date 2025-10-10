<?php require_once('verificarAcesso.php'); ?>
<?php require_once('cabecalho.php'); ?>
<a href="listar.php" class="w3-display-topleft">
    <i class="fa fa-arrow-circle-left w3-large w3-black w3-button w3-xxlarge"></i> </a>
<div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-middle">
    <h1 class="w3-center w3-black w3-round-large w3-margin">Atualizar - ID: <?php echo " " . $_GET['id'] ?> </h1>
    <form action="atualizarAction.php" class="w3-container" method='post'>
        <input name="txtID" class="w3-input w3-grey w3-border" type="hidden" value="<?php echo $_GET['id'] ?>">
        <br>
        <label class="w3-text-black" style="font-weight: bold;">Nome</label>
        <input name="txtNome" class="w3-input w3-light-grey w3-border" value="<?php echo $_GET['nome'] ?>"> <br>
        <label class="w3-text-black" style="font-weight: bold;">Senha</label>
        <input name="txtSenha" type="password" class="w3-input w3-light-grey w3-border"
            value="<?php echo $_GET['senha'] ?>"> <br>
        <label class="w3-text-black" style="font-weight: bold;">Tipo de Usuário</label>
        <select name="txtTipoUsuario" value="" class="w3-input w3-light-grey w3-border">
            <option value="<?php echo $_GET['tipo'] ?>" selected>Mantenha meu tipo de usuario
            </option>
            <option value="" disabled>Quer mudar? Escolha novamente o tipo de usuário?</option>
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
                <button name="btnAtualizar" class="w3-button w3-black w3-cell w3-round-large w3-right">
                    <i class="w3-xxlarge fa fa-refresh"></i> Atualizar </button>
            </form>
        </div>
<?php require_once('rodape.php'); ?>