<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Exercicio 1 Php</title>
 	<style type="text/css">
 	h2{
 		color: #80a2ff;																						
 		text-shadow: 1px 1px 1px black;

 	  }
 	</style>
   						
</head>
<body>
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	<h2>Método post</h2>
	</br></br><form action="index.php" method="post">
	Usuário: <input type="text" name="post_Usuario"></br></br>
	Senha:   <input type="password" name="post_Senha"></br></br>
	<input type="submit" value="post"></input>
	</form><br><br>

	Usuário: <?php echo $_POST["post_Usuario"]; ?><br>
	Senha: <?php echo $_POST["post_Senha"]; ?></br></br>

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	<h2>Método get</h2>
	</br></br><form action="index.php" method="get">
	Usuário: <input type="text" name="get_Usuario"></br></br>
	Senha:   <input type="password" name="get_Senha"></br></br>
	<input type="submit" value="GET "></input>
	</form><br><br>

	Usuário: <?php echo $_GET["get_Usuario"]; ?><br>
	Senha: <?php echo $_GET["get_Senha"]; ?>
	
</body>
</html>