<?php
include 'keamanan.php';

if (isset($_POST['registerbtn'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    if ($password === $confirmpassword) {

        $query = "INSERT INTO admin_register (username,email,password) VALUES ('$username','$email','$password')";
        $query_run = mysqli_query($connection, $query);

        if ($query_run) {
            $_SESSION['success'] = "Berhasil ditambah";
            header('Location: ../register.php');
        } else {
            $_SESSION['status'] = "Gagal ditambah";
            header('Location: ../register.php');
        }

    } else {

        $_SESSION['status'] = "Password tidak cocok";
        header('Location: ../register.php');

    }

}

if (isset($_POST['updatebtn'])) {

    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];

    $query = "UPDATE admin_register SET username='$username', email='$email', password='$password' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Data berhasil diupdate";
        header('Location: ../register.php');
    } else {
        $_SESSION['status'] = "Gagal diupdate";
        header('Location: ../register.php');
    }

}

if (isset($_POST['delete_btn'])) {

    $id = $_POST['delete_id'];

    $query = "DELETE FROM admin_register WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Data berhasil dihapus";
        header('Location: ../register.php');
    } else {
        $_SESSION['status'] = "Gagal dihapus";
        header('Location: ../register.php');
    }

}

if (isset($_POST['login_btn'])) {
    $username_login = $_POST['username'];
    $password_login = $_POST['password'];

    $query = "SELECT * FROM admin_register WHERE username='$username_login' AND password='$password_login'";
    $query_run = mysqli_query($connection, $query);

    if (mysqli_fetch_array($query_run)) {
        $_SESSION['username'] = $username_login;
        header("Location: ../index.php");
    } else {
        $_SESSION['status'] = "Gagal";
        header("Location: ../login.php");
    }
}
