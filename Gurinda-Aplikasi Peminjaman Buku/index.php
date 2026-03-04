<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

include "koneksi.php";

// hitung anggota
$qAnggota = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM anggota");
$dAnggota = mysqli_fetch_assoc($qAnggota);
$totalAnggota = $dAnggota['total'];

// hitung buku
$qBuku = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM buku");
$dBuku = mysqli_fetch_assoc($qBuku);
$totalBuku = $dBuku['total'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Dashboard Perpustakaan</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>
body{
    background:#f4f6f9;
    font-family:'Segoe UI', sans-serif;
}
.sidebar{
    width:230px;
    height:100vh;
    position:fixed;
    background: linear-gradient(180deg,#0d6efd,#0b5ed7);
    color:white;
    padding:20px 15px;
}
.sidebar h4{ font-weight:600; }
.sidebar a{
    color:white;
    display:block;
    padding:10px 12px;
    text-decoration:none;
    border-radius:8px;
    margin-bottom:5px;
    transition:.2s;
}
.sidebar a:hover{
    background:rgba(255,255,255,0.18);
    padding-left:16px;
}
.content{
    margin-left:250px;
    padding:25px;
}
.topbar{
    background:white;
    padding:15px 20px;
    border-radius:12px;
    box-shadow:0 5px 15px rgba(0,0,0,0.06);
    margin-bottom:20px;
}
.stat-box{
    border-radius:16px;
    color:white;
    padding:20px;
    transition:.25s;
    position:relative;
    overflow:hidden;
}
.stat-box i{
    font-size:32px;
    opacity:.85;
}
.stat-box:hover{
    transform:translateY(-5px);
    box-shadow:0 15px 30px rgba(0,0,0,0.18);
}
.box-link{ text-decoration:none; }
</style>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h4 class="mb-4">📚 PERPUSTAKAAN</h4>
    <a href="index.php"><i class="bi bi-speedometer2"></i> Dashboard</a>
    <a href="anggota.php"><i class="bi bi-people"></i> Data Anggota</a>
    <a href="buku.php"><i class="bi bi-book"></i> Data Buku</a>
    <a href="pengunjung.php"><i class="bi bi-person"></i> Pengunjung</a>
    <a href="pinjaman.php"><i class="bi bi-journal-arrow-up"></i> Pinjam Buku</a>
    <a href="data.php"><i class="bi bi-bar-chart"></i> Data Peminjaman</a>
    <hr>
    <a href="logout.php"><i class="bi bi-box-arrow-right"></i> Logout</a>
</div>

<!-- CONTENT -->
<div class="content">

    <!-- TOPBAR -->
    <div class="topbar d-flex justify-content-between align-items-center">
        <div>
            <h4 class="mb-0">Dashboard</h4>
            <small class="text-muted">
                Selamat datang, <b><?php echo $_SESSION['user']; ?></b>
            </small>
        </div>
        <div class="text-muted">
            <i class="bi bi-calendar3"></i>
            <?php echo date('d M Y'); ?>
        </div>
    </div>

    <!-- STAT BOX -->
    <div class="row g-4">

        <!-- Anggota -->
        <div class="col-md-3">
            <a href="anggota.php" class="box-link">
                <div class="stat-box bg-primary">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6>Anggota</h6>
                            <h2><?= $totalAnggota; ?></h2>
                        </div>
                        <i class="bi bi-people-fill"></i>
                    </div>
                </div>
            </a>
        </div>

        <!-- Buku -->
        <div class="col-md-3">
            <a href="buku.php" class="box-link">
                <div class="stat-box bg-danger">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6>Buku</h6>
                            <h2><?= $totalBuku; ?></h2>
                        </div>
                        <i class="bi bi-book-fill"></i>
                    </div>
                </div>
            </a>
        </div>

        <!-- Pengunjung -->
        <div class="col-md-3">
            <a href="pengunjung.php" class="box-link">
                <div class="stat-box bg-success">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6>Pengunjung</h6>
                            <h2>0</h2>
                        </div>
                        <i class="bi bi-person-check-fill"></i>
                    </div>
                </div>
            </a>
        </div>

        <!-- Peminjaman -->
        <div class="col-md-3">
            <a href="data.php" class="box-link">
                <div class="stat-box bg-warning">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6>Peminjaman</h6>
                            <h2>0</h2>
                        </div>
                        <i class="bi bi-journal-text"></i>
                    </div>
                </div>
            </a>
        </div>

    </div>

</div>
</body>
</html>