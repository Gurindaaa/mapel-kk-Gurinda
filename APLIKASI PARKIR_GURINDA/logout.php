<?php
session_start();
include 'config/koneksi.php';
include 'config/log.ph';

// SIMPAN LOG SEBELUM SESSION DIHAPUS
if(isset($_SESSION['id_user'])){
    logAktivitas($conn, "Logout dari sistem");
}
/* Hapus semua session */
session_unset();

/* hancurkan session */
session_destroy();

/* Redirect ke login */
header("Location: index.php");
exit;
?>