<?php
$conn = mysqli_connect("localhost", "root", "", "parkir_db_gurinda");

if (!$conn) {
    die("koneksi gagal: " . mysqli_connect_error());
}
?>