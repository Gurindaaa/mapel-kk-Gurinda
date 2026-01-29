<?php
include "../config/koneksi.php";

$kode = $_POST['kode_pinjam'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali = $_POST['tgl_kembali'];
$id_anggota = $_POST['id_anggota'];
$ket = $_POST['keterangan'];
$id_buku = $_POST['id_buku'];
$qty = $_POST['qty'];

mysqli_query($conn, "INSERT INTO peminjaman 
(kode_pinjam, tgl_pinjam, tgl_kembali, id_anggota, keterangan)
VALUES ('$kode','$tgl_pinjam','$tgl_kembali','$id_anggota','$ket')");

$id_pinjam = mysqli_insert_id($conn);

mysqli_query($conn, "INSERT INTO detail_pinjam 
(id_pinjam, id_buku, qty)
VALUES ('$id_pinjam','$id_buku','$qty')");

mysqli_query($conn, "UPDATE buku SET stok = stok - $qty WHERE id_buku='$id_buku'");

echo "<script>alert('Peminjaman berhasil');window.location='pinjam.php';</script>