<?php

function tampilKomentar($idArtikel)
{
	global $connection;

	$query = "SELECT * FROM komentar WHERE id_artikel='$idArtikel' ";
	$query_run = mysqli_query($connection,$query);

	$result = [];

	while($data = mysqli_fetch_assoc($query_run)){
		$result[] = $data; 
	}

	return $result;
}

function postKomentar($idArtikel, $row)
{
	global $connection;

	$nama = $row['nama'];
    $isi = $row['isi'];
    $tanggal = date("Y-m-d H:i:s");
    

    $query = "INSERT INTO komentar VALUES ('','$idArtikel','$nama','$isi','$tanggal')";
    
    if (mysqli_query($connection, $query)) {
     	echo "<div class='alert alert-success'><strong>Komentar telah ditambahkan</strong></div>";
     } ;
}

?>