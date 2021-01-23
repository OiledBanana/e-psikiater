<?php
session_start();

$connection = mysqli_connect('localhost', 'root', '', 'epsikolog');

include 'fungsi_artikel.php';
include 'fungsi_komentar.php';

?>