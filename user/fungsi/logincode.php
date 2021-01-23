<?php
include 'keamanan.php';
if (isset($_POST['login_btn'])) {
    $username_login = $_POST['username'];
    $password_login = $_POST['password'];

    $query = "SELECT * FROM anggota WHERE username='$username_login' AND password='$password_login'";
    $query_run = mysqli_query($connection, $query);

    if (mysqli_fetch_array($query_run)) {
        $_SESSION['username'] = $username_login;
        header("Location: ../index.php");
    } else {
        $_SESSION['status'] = "Gagal";
        header("Location: ../login.php");
    }
}
?>