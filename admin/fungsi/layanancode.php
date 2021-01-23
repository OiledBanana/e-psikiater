<?php
include 'keamanan.php';

if (isset($_POST['updatebtn'])) {
    $id = $_POST['edit_id'];
    $title = $_POST['edit_title'];
    $description = $_POST['edit_description'];

    $query = "UPDATE layanan SET nama='$title', deskripsi='$description' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Berhasil diupdate";
        header('Location: ../layanan.php');
    } else {
        $_SESSION['status'] = "Gagal diupdate";
        header('Location: ../layanan.php');
    }
}
