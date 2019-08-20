<?php
	require_once('db_connect.php');
	mysqli_query($link, "INSERT INTO lap (event_num, skater_num) VALUES (".$_GET['event_num'].", ".$_GET['skater_num'].")");
?>
<?=
	
	mysqli_query($link, "select count(*) as count from lap where event_num=".$_GET['event_num']." and skater_num=".$_GET['skater_num']) -> fetch_assoc()['count'];
?>
