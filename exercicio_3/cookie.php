

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

	<h2>Criando Cookie</h2>
	<form>
	<?php

	    $cookie_nome = $_POST["usuario"];
	    $cookie_value = $_POST["senha"];

		
		setcookie($Cookie_nome,$cookie_value,time() + (86400 * 3),"/");
		
		if(!isset($_COOKIE[$Cookie_nome])){
			
			echo "cookie named '", . $cookie_nome."' is not set";
			
		}else{
			
			echo "O cookie '" . $Cookie_nome . "'is set!<br> ";
			echo "Seu valor é:" . $_COOKIE[$Cookie_nome];
		}
		
	?>
	</form>
</body>
</html>