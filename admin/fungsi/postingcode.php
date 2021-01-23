<?php
include 'keamanan.php';

if (isset($_POST['posting_btn'])) {
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $description = $_POST['description'];
    $links = $_POST['links'];

    $query = "INSERT INTO posting (title,subtitle,description,links) VALUES ('$title','$subtitle','$description','$links')";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Berhasil ditambah";
        header('Location: ../posting.php');
    } else {
        $_SESSION['status'] = "Gagal ditambah";
        header('Location: ../posting.php');
    }
}

if (isset($_POST['updatebtn'])) {
    $id = $_POST['edit_id'];
    $title = $_POST['edit_title'];
    $subtitle = $_POST['edit_subtitle'];
    $description = $_POST['edit_description'];
    $links = $_POST['edit_links'];

    $query = "UPDATE posting SET title='$title', subtitle='$subtitle', description='$description', links='$links' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Berhasil diupdate";
        header('Location: ../posting.php');
    } else {
        $_SESSION['status'] = "Gagal diupdate";
        header('Location: ../posting.php');
    }
}

if (isset($_POST['delete_btn'])) {

    $id = $_POST['delete_id'];

    $query = "DELETE FROM posting WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Data berhasil dihapus";
        header('Location: ../posting.php');
    } else {
        $_SESSION['status'] = "Gagal dihapus";
        header('Location: ../posting.php');
    }

}
