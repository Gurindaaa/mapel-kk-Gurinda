<?php
include "koneksi.php";

if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $buku = $_POST['buku'];
    $tgl_pinjam = date("Y-m-d");
    $tgl_kembali = $_POST['tgl_kembali'];

    mysqli_query($koneksi,"INSERT INTO peminjaman 
    (nama_peminjam, judul_buku, tanggal_pinjam, tanggal_kembali, status)
    VALUES ('$nama','$buku','$tgl_pinjam','$tgl_kembali','Dipinjam')");

    header("Location: peminjaman_aktif.php");
}
?>

<h3>Form Peminjaman Buku</h3>

<form method="post">
    Nama Peminjam:<br>
    <input type="text" name="nama" required><br><br>

    Judul Buku:<br>
    <input type="text" name="buku" required><br><br>

    Tanggal Kembali:<br>
    <input type="date" name="tgl_kembali" required><br><br>

    <button name="simpan">Pinjam</button>
</form>