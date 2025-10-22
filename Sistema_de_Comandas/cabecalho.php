<!-- PAGINA DE CABEÇALHO DO SISTEMA -->

<?php $pagina_atual = basename($_SERVER['PHP_SELF']); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sistema de Comandas</title>
</head>

<body class="w3-grey">
    <?php
    if ($pagina_atual != "index.php") {
        echo ' 
        <div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-topright">
            <form action="logoutAction.php" class="w3-container" method="post">
                <button name="btnLogout" class="w3-button w3-brown w3-hover-red w3-cell w3-round-large w3-right w3-margin-right">
                    <i class="w3-large fa fa-times-rectangle"> </i> Logout
                </button>
            </form>
         </div>';
    }
    ?>