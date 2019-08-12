<?php
	require_once('db_connect.php');
	require_once('event.php');
	?>
		<ul>
		<?php
			foreach (mysqli_query($link, "SELECT skater_num, name as skater_name FROM `registration` join skater on skater.num = skater_num where event_num='".$event."'") as $row) {
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
