<?php

	$login = $_POST['login'];
	$senha = $_POST['senha'];

	if($login == "user") {
		// Entra mas tem que equivaler a senha
		
		if($senha == "9999") {
			// Realmente entrou no sistema
			
			setcookie("autorizacao", "true");
			header('Location:home.php');

		} else {
		
			echo "Senha não confere";
		}
	} else {
		echo "Usuário inválido!";
	}

	echo "<a href='index.php'>Voltar</a>";
?>