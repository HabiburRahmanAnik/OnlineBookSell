<?php
	session_start();
	if (isset($_SESSION['status'])) {
		setcookie('status', 'false', time()-5000, '/');
		header('location:../view/home.html');
	}


?>