<?php
    include_once 'header.php';
?>

<div class="content"> <!-- content pradžia -->
	<h2 class="tv">TV Shows</h2>
	<div class="tv_movies">
		<?php
			include_once 'includes/db.inc.php';
			$sql = "SELECT * FROM tvshows";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
            	echo "<div><img src='" . $row['tv_poster'] . "'><h3>" . $row['tv_title'] . "</h3><p>IMDb rating: " . $row['tv_rating'] . "</p></div>";
            }
		?>
	</div>
</div> <!-- content pabaiga -->

<?php
	include_once 'footer.php';
?>
