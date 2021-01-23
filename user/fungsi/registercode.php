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
        header("Location: ../index.php");
    } else {

        $query = "INSERT INTO anggota (nama,username,email,password,profile_picture) VALUES ('$nama','$username','$email','$password','$profile_picture')";
        $query_run = mysqli_query($connection, $query);

        if ($query_run) {
            move_uploaded_file($_FILES['profile_picture']['tmp_name'], "../upload/" . $_FILES['profile_picture']['name']);
            $_SESSION['success'] = "Berhasil ditambah";
            header('Location: ../index.php');
        } else {
            $_SESSION['status'] = "Gagal ditambah";
            header('Location: ../login.php');
        }
    }
}
?>