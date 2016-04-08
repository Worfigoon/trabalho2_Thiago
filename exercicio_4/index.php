<?php 
		session_start();
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Exe4</title>
 	
 	<style type="text/css">
 	h2{
 		color: #80a2ff;																						
 		text-shadow: 1px 1px 1px black;

 	  }
 	</style>
 
 	</style>
   						
</head>
<body>
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	<h2>Método post</h2>
	</br></br><form action="index.php" method="post">
	Usuário: <input type="text" name="post_Usuario"></br></br>
	Senha:   <input type="password" name="post_Senha"></br></br>
	<input type="submit" value="post"></input><br><br>

	
	<?php
	
		
			echo "Usuário: " . $_SESSION["usuario"] = $_POST["post_Usuario"];
			echo "<br>Senha: " .   $_SESSION["senha"] = $_POST["post_Senha"];
		
			
    ?>
	</form><br><br>

	<a href="pagina_1.php" target="_self">Página 1</a>

</body>
</html>