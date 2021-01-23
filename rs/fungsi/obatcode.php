<?php
include 'keamanan.php';

if (isset($_POST['obatbtn'])) {

    $id_diagnosa = $_POST['id_diagnosa'];
    $id_obat = $_POST['id_obat'];
    $jumlah = $_POST['jumlah'];

    $query = "INSERT INTO beli_obat (id_diagnosa,id_obat,jumlah) VALUES ('$id_diagnosa','$id_obat','$jumlah')";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Berhasil ditambah";
        header('Location: ../obat.php');
    } else {
        $_SESSION['status'] = "Gagal ditambah";
        header('Location: ../obat.php');
    }

}

if (isset($_POST['updatebtn'])) {

    $id = $_POST['edit_id'];
    $id_diagnosa = $_POST['edit_id_diagnosa'];
    $id_obat = $_POST['edit_id_obat'];
    $jumlah = $_POST['edit_jumlah'];

    $query = "UPDATE beli_obat SET id_diagnosa='$id_diagnosa', id_obat='$id_obat', jumlah='$jumlah' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Data berhasil diupdate";
        header('Location: ../obat.php');
    } else {
        $_SESSION['status'] = "Gagal diupdate";
        header('Location: ../obat.php');
    }

}

if (isset($_POST['delete_btn'])) {

    $id = $_POST['delete_id'];

    $query = "DELETE FROM beli_obat WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Data berhasil dihapus";
        header('Location: ../obat.php');
    } else {
        $_SESSION['status'] = "Gagal dihapus";
        header('Location: ../obat.php');
    }

}
