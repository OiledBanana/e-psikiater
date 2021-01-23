<?php
session_start();

$connection = mysqli_connect('localhost', 'root', '', 'epsikolog');

if ($connection) {

} else {
    header('Location: ../config/koneksi.php');
}

if (!$_SESSION['username']) {
    header('Location: login.php');
}
