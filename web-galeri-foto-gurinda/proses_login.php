<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

include("koneksi.php");

// Ambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Disarankan password di-hash, tapi sesuai permintaan, gunakan apa adanya dulu
$stmt = $conn->prepare("SELECT * FROM user WHERE username=? AND password=?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Ambil data user
    $user = $result->fetch_assoc();

    // Set session
    $_SESSION['role'] = $user['level_user'];

    // Cek role dan redirect ke halaman yang sesuai
    if ($user['level_user'] == 'admin') {
        header("Location: admin/admin.php");
        exit;
    } elseif ($user['level_user'] == 'operator') {
        header("Location: operator/opertor.php"); // PERBAIKAN: path benar
        exit;
    } elseif ($user['level_user'] == 'guest') {
        header("Location: guest/guest.php");
        exit;
    } elseif ($user['level_user'] == 'admin') {
        header("Location: admin/a-admin.php");
        exit;
    } else {
        echo "Role tidak dikenal.";
    }

} else {
    echo "Login gagal. <a href='index.php'>Coba lagi</a>";
}

$conn->close();
?>
