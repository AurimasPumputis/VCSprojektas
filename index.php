<?php
    include_once 'header.php';
?>

<div class="content"> <!-- content pradžia -->
	<h2 class="top_movies_h2">Top Movies</h2>
	<div id="top_movies">
		<?php
			include_once 'includes/db.inc.php';
			$sql = "SELECT * FROM movies ORDER BY movies.movie_rating DESC LIMIT 5";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
            	echo "<div><img src='" . $row['movie_poster'] . "'><h3>" . $row['movie_title'] . "</h3><p>IMDb rating: " . $row['movie_rating'] . "</p></div>";
            }
		?>
	</div>
	<h2 class="top_tv_h2">Top TV Shows</h2>
	<div id="top_tv">
		<?php
			$sql = "SELECT * FROM tvshows ORDER BY tvshows.tv_rating DESC LIMIT 5";
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
