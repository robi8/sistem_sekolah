<?php
	include "../config/connection.php";

	function sequence($table, $key)
	{
		include "../config/connection.php";

		$query = mysqli_query($link,"SELECT MAX(".$key.") + 1 AS number FROM ".$table);
		$fetch_array = mysqli_fetch_array($query);
		
		if ($fetch_array['number'] == null)
		{
			$new_id = 1;
		} 
		else
		{
			$new_id = $fetch_array['number'];
		}
		return $new_id;
	}	

?>