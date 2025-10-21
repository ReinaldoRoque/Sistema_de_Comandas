<?php require_once('verificarAcesso.php'); ?>
<?php require_once('cabecalho.php'); ?>
<a href="principal.php" class="w3-display-topleft w3-margin">
    <i class="fa fa-arrow-circle-left w3-large w3-grey w3-hover-black w3-button w3-xxlarge "></i> </a>
<?php
require_once 'conexaoBD.php';
if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
}
echo ' <div class="w3-paddingw3-content w3-half w3-display-topmiddle w3-margin"> <h1 class="w3-center w3-black w3-round-large w3-margin">Listagem de Usuário</h1> <table class="w3-table-all w3-centered"> <thead> <tr class="w3-center w3-black"> <th>ID_Usuário</th> <th>Usuário</th> <th>Senha</th> <th>Tipo de Usuário</th> <th>Atualizar</th> <th>Excluir</th> </tr> <thead> ';
$sql = "SELECT u.id_usuario, u.nome, u.senha, u.excluido, u.fk_tipo_usuario, t.tipo AS tipo_usuario FROM usuario AS u INNER JOIN tipo_usuario AS t ON u.fk_tipo_usuario = t.id_tipo_usuario WHERE u.excluido <> 1 ORDER BY u.id_usuario ASC;";
$resultado = $conexao->query($sql);
if ($resultado != null)
    foreach ($resultado as $linha) {
        echo '<tr>';
        echo '<td>' . $linha['id_usuario'] . '</td>';
        echo '<td>' . $linha['nome'] . '</td>';
        $max_bolinhas = 3;
        echo '<td>' . str_repeat('•', min(strlen($linha['senha']), $max_bolinhas)) . '</td>';
        echo '<td >' . $linha['tipo_usuario'] . '</td>';
        echo '<td><a href="atualizar.php?id=' . $linha['id_usuario'] . '&nome=' . $linha['nome'] . '&senha=' . $linha['senha'] . '&tipo=' . $linha['fk_tipo_usuario'] . '"><i class="fa fa-refresh w3-large w3-text-black""></i></a></td></td>';
        echo '<td><a href="excluir.php?id=' . $linha['id_usuario'] . '&nome=' . $linha['nome'] . '&tipo=' . $linha['tipo_usuario'] . '"><i class="fa fa-user-times w3-large w3-text-black"></i> </a></td></td>';

        echo '</tr>';
    }
echo ' </table> </div>';
$conexao->close(); ?>
</div>
<!-- MODAL CONFIRMANDO A ATUALIZAÇÃO DE USUÁRIO -->
<div id="ModalAtualizar" class="w3-modal w3-center" style="background-color: transparent;  pointer-events: none;">
    <div class="w3-modal-content w3-animate-bottom" style="pointer-events: all;
        margin: 0; position: fixed; bottom: 20px; right: 20px; width: 250px;; min-width: auto;">
        <header class="w3-container w3-black">
            <spam class="">
                <h3>Atualização de Usuário</h3>
            </spam>
        </header>
        <Div class="w3-container">
            <h4>Atualização realizada com sucesso!</h4>
            <button class="w3-button w3-black w3-cell w3-round-large w3-midlle"
                onclick="fecharModalAtualizar()">OK</button>
        </Div>

        <br>
    </div>
</div>
<script>
    function ModalAtualizar() {
        const modal = document.getElementById('ModalAtualizar');
        modal.style.display = 'block';
    }
    function fecharModalAtualizar() {
        document.getElementById('ModalAtualizar').style.display = 'none';
        // 🔸 Remove o parâmetro "cadastro" da URL sem recarregar a página
        if (window.history.replaceState) {
            const url = new URL(window.location);
            url.searchParams.delete('alterado');
            window.history.replaceState({}, document.title, url.pathname);
        }
    }
</script>

<?php
// Se o cadastro foi bem-sucedido, abre o modal
if (isset($_GET['atualizado']) && $_GET['atualizado'] === 'ok') {
    echo "<script>ModalAtualizar();</script>";
}
?>


<!-- MODAL CONFIRMANDO A EXCLUSÃO -->
<div id="ModalExcluir" class="w3-modal w3-center" style="background-color: transparent;  pointer-events: none;">
    <div class="w3-modal-content w3-animate-bottom" style="pointer-events: all;
        margin: 0; position: fixed; bottom: 20px; right: 20px; width: 250px;; min-width: auto;">
        <header class="w3-container w3-black">
            <spam class="">
                <h3>Excluiu Usuário</h3>
            </spam>
        </header>
        <Div class="w3-container">
            <h4>Exclusão realizada com sucesso!</h4>
            <button class="w3-button w3-black w3-cell w3-round-large w3-midlle"
                onclick="fecharModalExcluir()">OK</button>
        </Div>

        <br>
    </div>
</div>
<script>
    function ModalExcluir() {
        const modal = document.getElementById('ModalExcluir');
        modal.style.display = 'block';
    }
    function fecharModalExcluir() {
        document.getElementById('ModalExcluir').style.display = 'none';
        // 🔸 Remove o parâmetro "cadastro" da URL sem recarregar a página
        if (window.history.replaceState) {
            const url = new URL(window.location);
            url.searchParams.delete('excluido');
            window.history.replaceState({}, document.title, url.pathname);
        }
    }
</script>

<?php
// Se o cadastro foi bem-sucedido, abre o modal
if (isset($_GET['excluido']) && $_GET['excluido'] === 'ok') {
    echo "<script>ModalExcluir();</script>";
}
?>
<?php require_once('rodape.php'); ?>