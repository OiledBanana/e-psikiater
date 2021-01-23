<?php
function detailArtikel($idArtikel)
{
	global $connection;
	$query = "SELECT * FROM posting WHERE id='$idArtikel'";
	$query_run = mysqli_query($connection,$query);

	$result = mysqli_fetch_assoc($query_run);

	return $result;
}
?>