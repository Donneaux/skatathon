<?php
	require_once('db_connect.php');
	$result = mysqli_query($link, "select event.name as event_name, skater.name as skater_name from event,skater where (event.num, skater.num) = (".$_GET['event_num'].", ".$_GET['skater_num'].")") -> fetch_assoc();
?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("button").click(function(){
			$.ajax({
				url : "record.php?event_num=<?= $_GET['event_num'] ?>&skater_num=<?= $_GET['skater_num'] ?>",
				success : function() {
					$(".output").text("123")
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
<span class="output"></span>
