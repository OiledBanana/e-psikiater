<?php
include 'fungsi/keamanan.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="container-fluid">

<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Edit Post </h6>
	</div>
	<div class="card-body">

		<?php

if (isset($_POST['edit_btn'])) {
    $id = $_POST['edit_id'];

    $query = "SELECT * FROM posting WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
        echo '<h4> ' . $_SESSION['success'] . ' </h4>';
        unset($_SESSION['success']);
    }

    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
        echo '<h4 class="bg-info"> ' . $_SESSION['status'] . ' </h4>';
        unset($_SESSION['status']);
    }

    foreach ($query_run as $data) {
        ?>

		<form action="fungsi/postingcode.php" method="post">
				<input type="hidden" name="edit_id" value="<?php echo $data['id'] ?>">
				<div class="form-group">
					<label> Title </label>
					<input type="text" name="edit_title" value="<?php echo $data['title'] ?>" class="form-control" placeholder="Enter Title">
				</div>
				<div class="form-group">
					<label>Sub Title</label>
					<input type="text" name="edit_subtitle" value="<?php echo $data['subtitle'] ?>" class="form-control" placeholder="Enter Sub Title">
				</div>
				<div class="form-group">
					<label>Description</label>
					<textarea name="edit_description" class="form-control" rows="10" cols="100">
					<?php echo $data['description'] ?>"
					</textarea>
				</div>
                <div class="form-group">
					<label>Links</label>
					<input type="text" name="edit_links" value="<?php echo $data['links'] ?>" class="form-control" placeholder="Enter Links">
				</div>
				<button type="submit" name="updatebtn" class="btn btn-primary">Update</button>
				<a href="posting.php" class="btn btn-danger">Cancel</a>

		</form>

        <?php
}

}
?>

	</div>
</div>
</div>

<?php
include 'includes/scripts.php';
include 'includes/footer.php';
?>