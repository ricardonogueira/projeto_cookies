<?php

	if(!isset($_COOKIE['autorizacao']) || $_COOKIE['autorizacao'] == "false") {
		header("location: index.php");
	}
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	
	<body>
		Bem vindo querido usuário ...
		<br>
		
		Noticia sobre a COVID no Brasil ...
		<br>
		
		
		<a href="logout.php">Sair</a>
	</body>
</html>