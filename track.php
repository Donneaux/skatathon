<?php
	require_once('db_connect.php');
	$result = mysqli_query($link, "select event.name as event_name, skater.name as skater_name from event,skater where (event.num, skater.num) = (".$_GET['event_num'].", ".$_GET['skater_num'].")") -> fetch_assoc();
?>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("button").click(function(){
			$.ajax("record.php?event_num=<?= $_GET['event_num'] ?>&skater_num=<?= $_GET['skater_num'] ?>");
		});
	});
</script>
<?= $_GET['event_num'] ?><br /><?= $_GET['skater_num'] ?>
<?= $result['event_name'] ?><br /><?= $result['skater_name'] ?>
<button>LAP</button>
