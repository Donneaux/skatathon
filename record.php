<?php
	require_once('db_connect.php');
	mysqli_query($link, "INSERT INTO lap (event_num, skater_num) VALUES (".$_GET['event_num'].", ".$_GET['skater_num'].")")
?>
