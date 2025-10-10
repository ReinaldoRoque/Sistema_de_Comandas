<?php require_once('verificarAcesso.php'); ?>
<?php require_once('cabecalho.php'); ?>
<a href="principal.php" class="w3-display-topleft">
    <i class="fa fa-arrow-circle-left w3-large w3-black w3-button w3-xxlarge"></i> </a>
<?php
require_once 'conexaoBD.php';
if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
}
echo ' <div class="w3-paddingw3-content w3-half w3-display-topmiddle w3-margin"> <h1 class="w3-center w3-black w3-round-large w3-margin">Listagem de Usuário</h1> <table class="w3-table-all w3-centered"> <thead> <tr class="w3-center w3-black"> <th>ID_Usuário</th> <th>Usuário</th> <th>Senha</th> <th>Tipo</th> <th>Alterar</th> <th>Excluir</th> </tr> <thead> ';
$sql = "SELECT u.id_usuario, u.nome, u.senha, u.excluido, u.fk_tipo_usuario, t.tipo AS tipo_usuario FROM usuario AS u INNER JOIN tipo_usuario AS t ON u.fk_tipo_usuario = t.id_tipo_usuario WHERE u.excluido <> 1;";
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
        echo '<td><a href="excluir.php?id=' . $linha['id_usuario'] . '&nome=' . $linha['nome'] . '"><i class="fa fa-user-times w3-large w3-text-black"></i> </a></td></td>';

        echo '</tr>';
    }
echo ' </table> </div>';
$conexao->close(); ?>
</div>
<?php require_once('rodape.php'); ?>