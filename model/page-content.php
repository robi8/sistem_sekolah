<?php
	include "../view/dashboard.php";
	
	if ($_GET['page'] == "dashboard")
	{
		
		include "../controller/dashboard.php";

	}
	else
	{
		header("location:../view/home.php");
	}
?>