<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

/* DATA MANUAL TANPA DATABASE */

// data anggota
$anggota = [
"ALDI WAHRIYANTO",
"ANDI RIZKI FARAWANSYA",
"ANNISA HUMAIRA AZZAHRA",
"BERTHA ELLYA TAMARA",
"ESTER APRILLIA",
"FAJAR RAMADHAN",
"INDRA SAPUTRA",
"NADIA PUTRI",
"RIZKY ADITYA",
"SYIFA NURHALIZA"
];

// data buku
$buku = [
"Informatika","Matematika","Penjas","Agama","Bahasa Inggris",
"Mulok","PKK","Jurusan RPL","Sejarah","BK","Seni Budaya"
];

$totalAnggota = count($anggota);
$totalBuku = count($buku);
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
background:linear-gradient(135deg,#eef2ff,#f8fafc);
font-family:'Segoe UI',sans-serif;
}

/* SIDEBAR */

.sidebar{
width:240px;
height:100vh;
position:fixed;
background:linear-gradient(180deg,#2563eb,#1e40af);
color:white;
padding:25px 18px;
box-shadow:4px 0 15px rgba(0,0,0,0.1);
}

.sidebar h4{
font-weight:700;
text-align:center;
margin-bottom:30px;
}

.sidebar a{
color:white;
display:block;
padding:12px 14px;
text-decoration:none;
border-radius:10px;
margin-bottom:6px;
transition:0.3s;
font-size:15px;
}

.sidebar a:hover{
background:rgba(255,255,255,0.2);
padding-left:20px;
}

/* CONTENT */

.content{
margin-left:260px;
padding:30px;
}

/* TOPBAR */

.topbar{
background:white;
padding:20px;
border-radius:15px;
box-shadow:0 5px 20px rgba(0,0,0,0.08);
margin-bottom:25px;
}

/* WELCOME CARD */

.welcome-card{
background:linear-gradient(135deg,#3b82f6,#6366f1);
color:white;
padding:25px;
border-radius:18px;
margin-bottom:25px;
box-shadow:0 10px 25px rgba(0,0,0,0.15);
}

/* STAT BOX */

.stat-box{
border-radius:18px;
color:white;
padding:25px;
transition:.3s;
box-shadow:0 8px 20px rgba(0,0,0,0.15);
}

.stat-box:hover{
transform:translateY(-8px);
}

.stat-box i{
font-size:38px;
opacity:0.9;
}

/* warna box */

.box1{background:linear-gradient(135deg,#3b82f6,#2563eb);}
.box2{background:linear-gradient(135deg,#ef4444,#dc2626);}
.box3{background:linear-gradient(135deg,#22c55e,#16a34a);}
.box4{background:linear-gradient(135deg,#f59e0b,#d97706);}

.box-link{
text-decoration:none;
}

</style>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">

<h4>📚 PERPUSTAKAAN</h4>

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

<!-- WELCOME -->

<div class="welcome-card">

<h4>Selamat Datang di Sistem Perpustakaan 📖</h4>

<p class="mb-0">
Kelola data buku, anggota, dan peminjaman dengan mudah.
</p>

</div>

<!-- STAT BOX -->

<div class="row g-4">

<div class="col-md-3">
<a href="anggota.php" class="box-link">
<div class="stat-box box1">

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


<div class="col-md-3">
<a href="buku.php" class="box-link">
<div class="stat-box box2">

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


<div class="col-md-3">
<a href="pengunjung.php" class="box-link">
<div class="stat-box box3">

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


<div class="col-md-3">
<a href="data.php" class="box-link">
<div class="stat-box box4">

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