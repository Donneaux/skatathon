<?php
	require_once('db_connect.php');

//try and get skater_num
//if exists,
//	get the skater_num
//else
//	add and get the new number


	$result = mysqli_query($link, "SELECT num FROM `skater` WHERE name = '".$_GET['name']."'") -> fetch_assoc();
	if (!$result) {
		mysqli_query($link, "INSERT INTO skater(name) VALUES ('".$_GET['name']."')");
		$str = "Location: register.php?".$_SERVER['QUERY_STRING']; 
		header($str);
		exit();
	}
	foreach ($result as $value) {
		$skater_num = $value;
	}


	$query = "INSERT INTO registration VALUES (".$_GET['event_num'].", ".$skater_num.", '".$_GET['sponsorship']."', ".$_GET['laps'].")";

	mysqli_query($link, "INSERT INTO registration VALUES (".$_GET['event_num'].", ".$skater_num.", '".$_GET['sponsorship']."', ".$_GET['laps'].")");
	$str = "Location: track.php?event_num=".$_GET['event_num']."&skater_num=".$skater_num;

	header($str);

?>

