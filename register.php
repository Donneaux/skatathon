<?php
	require_once('db_connect.php');
	require_once('event.php');
	?>
		<ul>
		<?php
			print("SELECT skater_name FROM `registration` where event_name='".$event."'");
			print("ben");
			foreach (mysqli_query($link, "SELECT skater_name FROM `registration` where event_name='".$event."'") as $row) {
				?>
					<li>
						<?= $row['skater_name'] ?>
					</li>
				<?php
			}

		?>
		</ul>
	<?php
?>
