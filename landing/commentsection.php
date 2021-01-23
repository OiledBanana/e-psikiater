<?php
include 'fungsi/keamanan.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>  

<?php 

	$rowArtikel = detailArtikel($_GET['id']);
	$rowKomentar = tampilKomentar($_GET['id']);
	$row = $_GET['id'];

	
?>



<header class="masthead ">
<section class="" >
	<div class="container">
		<h2><?php echo $rowArtikel['title']?></h2><br>
		<p><?php echo $rowArtikel['description']?></p>
		<hr>
		<form method="post" >
			<div class="form-group">
				
				<label>Nama</label>
				<input type="text" name="nama" class="form-control">
			</div>
			<div class="form-group">
				<label>Isi Komentar</label>
				<textarea name="isi" class="form-control" rows="5"></textarea>
			</div>
			<button class="btn btn-primary" type="submit" name="btnkomen">Masukkan Komentar
			</button>
			 
		</form>
		

		<hr>
		
		<?php
			if (isset($_POST['btnkomen'])) {
				postKomentar($_GET['id'],$_POST);

				echo "<meta http-equiv='refresh' content='1.5;url=commentsection.php?id=".$rowArtikel['id']."'>";
			}
		?>
		
		<?php foreach ($rowKomentar as $data) {?>
			
  				<div class="card card-body py-3">
    			
			<b><?php echo $data['nama']?></b><br>
			<?php echo $data['isi']?>
			<div class="text-right"><?php echo $data['tanggal']?></div>

		</div>
		<?php
		} 
		?>
		

		
</div>
</section>
</header>

<?php
include 'includes/script.php';
include 'includes/footer.php';
?>


