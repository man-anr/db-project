<?php 

session_start();
	if(!isset($_SESSION['userlogin'])){
		header("Location: ./login/login.php");
	}
	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: ./login/login.php");
	}

?>

<p>Welcome to index</p>


<a href="index.php?logout=true">Logout</a>