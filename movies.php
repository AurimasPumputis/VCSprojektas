<?php
    include_once 'header.php';
?>

<div class="content"> <!-- content pradžia -->
	<h2 class="movies">Movies</h2>
	<div class="tv_movies">
		<?php
			include_once 'includes/db.inc.php';
			$sql = "SELECT * FROM movies";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
            	echo "<div><img src='" . $row['movie_poster'] . "'><h3>" . $row['movie_title'] . "</h3><p>IMDb rating: " . $row['movie_rating'] . "</p></div>";
            }
		?>
	</div>
</div> <!-- content pabaiga -->

<?php
	include_once 'footer.php';
?>
