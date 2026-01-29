<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $judul = $_POST['judul'];
    $tanggal = date('Y-m-d');

    mysqli_query($koneksi, "INSERT INTO peminjaman VALUES('', '$nama', '$judul', '$tanggal')");
    echo "Buku berhasil dipinjam!";
}
?>

<h2>Pinjam Buku</h2>
<form method="post">
    Nama Peminjam <br>
    <input type="text" name="nama" required><br><br>

    Judul Buku <br>
    <input type="text" name="judul" required><br><br>

    <button type="submit" name="simpan">Pinjam</button>
</form>