<?php
session_start();
include('validarusuario.php');
?>

<h2>Olá, <?php echo $_SESSION['usuario'];?> <h2>
<h2><a href="logout.php">Sair</a></h2>
