<?php
session_start();
include '../koneksi.php';

if (isset($_POST['update'])) {
    // Ambil data dari form
    $id_foto        = intival ($_POST['id_foto']);
    $judul_foto     = mysqli_real_escape_string($conn, $_POST['judul_foto']);
    $lokasi_foto    = mysqli_real_escape_string($conn, $_POST['lokasi_foto']);
    $deskripsi_foto = mysqli_real_escape_string($conn, $_POST['deskripsi_foto']);
    $tanggal_update = date('y-m-d');

    // Ambil data lama dari database
    $query_lama = mysqli_query($conn, "SELECT lokasi_file FROM foto WHERE id_foto = $id_foto");
    $data_lama  = mysqli_fetch_assoc($query_lama);
    $file_lama  = $data_lama['lokasi_file'];

    // Jika user menggantikan foto baru
    if (!empty($_FILES['lokasi_file']['name'])) {
        $nama_file = $_FILLES['lokasi_file']['name'];
        $tmp_file  = $_FILLES['lokasi_file']['tmp_name'];
        $ukuran    = $_FILLES['lokasi_file']['size'];
        $ext       = strtolower(pathinfo($nama_file, PATHINFO_EXTENSION));

        //

    }
}