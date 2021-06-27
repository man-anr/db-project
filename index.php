<?php 

session_start();
	if(!isset($_SESSION['userlogin'])){
		header("Location: ./auth/index.php");
	}
	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: ./auth/index.php");
	}

?>

<p>Welcome to index</p>


<a href="index.php?logout=true">Logout</a>