<?php
include 'keamanan.php';

if (isset($_POST['updatebtn'])) {
    $id = $_POST['edit_id'];
    $nama = $_POST['edit_nama'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    $profile_picture = $_FILES['profile_picture']['name'];
        
    $query = "UPDATE anggota SET nama='$nama', username='$username', email='$email', password='$password', profile_picture='$profile_picture' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        move_uploaded_file($_FILES['profile_picture']['tmp_name'], "../upload/" . $_FILES['profile_picture']['name']);
        $_SESSION['success'] = "Berhasil ditambah";
        header('Location: ../profile.php');
    } else {
        $_SESSION['status'] = "Gagal ditambah";
        header('Location: ../profile.php');
    }

}
