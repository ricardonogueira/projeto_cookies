<?php

	if(isset($_COOKIE['autorizacao'])) {
		setcookie('autorizacao');
		//unset($_COOKIE['autorizacao']);
	}

	header("Location:index.php");
?>