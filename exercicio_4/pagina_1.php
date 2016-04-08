<?php 
		session_start();
		echo "Usuário: " . $_SESSION['usuario'];
	    echo "<br>Senha: " . $_SESSION['senha'];
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Exe4</title>
 	<style type="text/css">
  	</style>
   						
</head>
<body>
	<h2>Sessions</h2>
	<a href="index.php" target="_self">Pagina inicial</a>
</body>
</html>