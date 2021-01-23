<?php
include 'keamanan.php';

if (isset($_POST['updatebtn'])) {
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
        
    $query = "UPDATE admin_register SET username='$username', email='$email', password='$password' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Berhasil ditambah";
        header('Location: ../profile.php');
    } else {
        $_SESSION['status'] = "Gagal ditambah";
        header('Location: ../profile.php');
    }

}
