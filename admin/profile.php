<?php
include 'fungsi/keamanan.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="container-fluid">

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Profile
    </h6>
  </div>

<div class="card-body">
<?php
$query = mysqli_query($connection, "SELECT * FROM admin_register WHERE username = '".$_SESSION['username']."' ");
while ($data = mysqli_fetch_array($query)) {
?>
    <div class="main main-raised">
		<div class="profile-content">
            <div class="container">
                <div class="row">
	                <div class="col-md-6 ml-auto mr-auto">
        	           <div class="profile">
	                        <div class="avatar text-center">
								            <?php echo '<img src="../admin/upload/user2.png" alt="Circle Image" height="30%" width="30%"  class="img-raised rounded-circle img-fluid img-thumbnail"> ' ?>
	                        </div>
</div>
<div class="card-body">
	                        <div class="name text-center">
	                            <h3 class="title"><?php echo $data['username']; ?></h3>
								<h6><?php echo $data['email']; ?></h6>
	                        </div>
</div>
    	            </div>
                </div>
				<div class="row">
					<div class="col-md-6 ml-auto mr-auto">
                        <div class="profile-tabs">
                          <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                            <li class="nav-item">
                              <form action="profileedit.php" method="post">
                                <input type="hidden" name="edit_id" value="<?php echo $data['id']; ?>">
                                <button type="submit" name="edit_btn" class="nav-link active"><i class="fas fa-fw fa-user"></i>
                                  Edit Profile</button>
                              </form>
                            </li>
                          </ul>
                        </div>
    	    	</div>
            </div>
        </div>
	</div>

  </div>

<?php
}
?>

</div>
</div>
</div>
<!-- /.container-fluid -->

<?php
include 'includes/scripts.php';
include 'includes/footer.php';
?>