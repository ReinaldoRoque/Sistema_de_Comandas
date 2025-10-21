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
    </div>
</div>
<div id="meuModal" class="w3-modal w3-center" style="background-color: transparent;  pointer-events: none;">
    <div class="w3-modal-content w3-animate-bottom" style=" pointer-events: all;
        margin: 0; position: fixed; bottom: 20px; right: 20px; width: 250px; min-width: auto;">
        <header class="w3-container w3-black">
            <spam class="">
                <h3>Cadastro de Usuário</h3>
            </spam>
        </header>
        <Div class="w3-container">
            <h4>Cadastro realizado com sucesso!</h4>
            <button class="w3-button w3-black w3-cell w3-round-large w3-midlle" onclick="fecharModal()">OK</button>
        </Div>

        <br>
    </div>
</div>
<script>
    function abrirModal() {
        const modal = document.getElementById('meuModal');
        modal.style.display = 'block';
    }
    function fecharModal() {
        document.getElementById('meuModal').style.display = 'none';
        // Remove o parâmetro "cadastro" da URL sem recarregar a página
        if (window.history.replaceState) {
            const url = new URL(window.location);
            url.searchParams.delete('cadastro');
            window.history.replaceState({}, document.title, url.pathname);
        }
    }
</script>

<?php
// Se o cadastro foi bem-sucedido, abre o modal
if (isset($_GET['cadastro']) && $_GET['cadastro'] === 'ok') {
    echo "<script>abrirModal();</script>";
}
?>
<?php require_once('rodape.php'); ?>