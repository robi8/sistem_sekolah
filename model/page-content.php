<?php
	include "../view/dashboard.php";
	include "../view/proses-penerimaan-siswa-baru.php";
	
	if ($_GET['page'] == "dashboard")
	{
		
		include "../controller/dashboard.php";

	}
	else if ($_GET['page'] == "proses-penerimaan-siswa-baru")
	{
		
		include "../controller/proses-penerimaan-siswa-baru.php";

	}
	else
	{
		header("location:../view/home.php");
	}
?>