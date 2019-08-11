<?php
	require_once('db_connect.php');

	?>
		<ul>
		<?php
			foreach (mysqli_query($link, "SELECT name FROM `skater`") as $row) {
				?>
					<li>
						<?= $row['name'] ?>
					</li>
				<?php
			}
		?>
		</ul>
	<?php
?>
<br />
this will evenutally be a page to register a skater
