<?php
include 'keamanan.php';

if (isset($_POST['anggota_btn'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $profile_picture = $_FILES['profile_picture']['name'];

    if (file_exists("../upload/" . $_FILES['profile_picture']['name'])) {
        $store = $_FILES['profile_picture']['name'];
        $_SESSION['status'] = "Foto sudah ada. '.$store.'";
        header("Location: ../anggota.php");
    } else {

        $query = "INSERT INTO anggota (nama,username,email,password,profile_picture) VALUES ('$nama','$username','$email','$password','$profile_picture')";
        $query_run = mysqli_query($connection, $query);

        if ($query_run) {
            move_uploaded_file($_FILES['profile_picture']['tmp_name'], "../upload/" . $_FILES['profile_picture']['name']);
            $_SESSION['success'] = "Berhasil ditambah";
            header('Location: ../anggota.php');
        } else {
            $_SESSION['status'] = "Gagal ditambah";
            header('Location: ../anggota.php');
        }
    }
}

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
        header('Location: ../anggota.php');
    } else {
        $_SESSION['status'] = "Gagal ditambah";
        header('Location: ../anggota.php');
    }

}

if (isset($_POST['delete_btn'])) {

    $id = $_POST['delete_id'];

    $query = "DELETE FROM anggota WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Data berhasil dihapus";
        header('Location: ../anggota.php');
    } else {
        $_SESSION['status'] = "Gagal dihapus";
        header('Location: ../anggota.php');
    }

}
