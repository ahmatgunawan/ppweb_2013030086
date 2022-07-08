<?php
	session_start();
	session_destroy();
	header("Location : indekss.php");
	exit();

?>