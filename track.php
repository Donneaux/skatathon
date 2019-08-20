<?php

	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");

	require_once('db_connect.php');
	$result = mysqli_query($link, "select event.name as event_name, skater.name as skater_name, count(*) as count from lap join event on event_num = event.num join skater on skater_num = skater.num where (event.num, skater.num) = (".$_GET['event_num'].", ".$_GET['skater_num'].")") -> fetch_assoc();
?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("button").click(function(){
			$.ajax({
				url : "record.php?event_num=<?= $_GET['event_num'] ?>&skater_num=<?= $_GET['skater_num'] ?>",
				success : function(value) {
					$(".output").text(value)
				}
			});
		});
	});
</script>
<?= $result['event_name'] ?>
<br />
<?= $result['skater_name'] ?>
<br />
<button class="w3-button w3-jumbo">LAP</button>
<span class="output"><?= $result['count']?></span>
