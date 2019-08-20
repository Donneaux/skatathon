<?php
	require_once('db_connect.php');
?>	
<?= mysqli_query($link, "SELECT name as event_name from event where num=".$_GET['event_num']) -> fetch_assoc()['event_name'] ?>
<ul>
	<?php
		foreach (mysqli_query($link, "SELECT skater_num, name as skater_name FROM `registration` join skater on skater.num = skater_num where event_num='".$_GET['event_num']."'") as $row) {
			?>
				<li>
					<a href="track.php?event_num=<?= $_GET['event_num']?>&skater_num=<?= $row['skater_num'] ?>">
						<?= $row['skater_name'] ?>
					</a>
				</li>
			<?php
		}
	?>
</ul>
<form>
<input type="text" name="name" />
<input type="submit" formaction="register.php" />
<input type="hidden" name="event_num" value=<?=$_GET['event_num']?>/>
</form>

<?php
?>
