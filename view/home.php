<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<?php
	session_start();
	ob_start();
	error_reporting(0);
	include('../model/head.php');
?>

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md page-full-width header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
			<?php
				include('../model/header.php');
			?>
			
			<?php
				include('../model/navbar.php');
			?>
			
		</div>
		<!-- end header -->
		<?php
			include('../model/page-content.php');
		?>
		
		<?php
			include('../model/footer.php');
		?>
	</div>
	
	<?php
		include('../model/javascript.php');
	?>
	
</body>
</html>