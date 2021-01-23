<?php
include 'keamanan.php';

if (isset($_POST['delete_btn'])) {

    $id = $_POST['delete_id'];

    $query = "DELETE FROM saran WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Data berhasil dihapus";
        header('Location: ../saran.php');
    } else {
        $_SESSION['status'] = "Gagal dihapus";
        header('Location: ../saran.php');
    }

}
