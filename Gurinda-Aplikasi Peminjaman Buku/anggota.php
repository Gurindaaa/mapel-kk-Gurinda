<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Data Anggota</title>

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
background:linear-gradient(180deg,#7c3aed,#4f46e5);
color:white;
padding:25px 18px;
}

.sidebar h4{
text-align:center;
margin-bottom:30px;
font-weight:700;
}

.sidebar a{
color:white;
display:block;
padding:12px;
text-decoration:none;
border-radius:10px;
margin-bottom:6px;
transition:0.25s;
}

.sidebar a:hover{
background:rgba(255,255,255,0.2);
padding-left:18px;
}

/* CONTENT */

.content{
margin-left:260px;
padding:30px;
}

/* CARD */

.card{
border:none;
border-radius:15px;
}

/* SEARCH */

.search-box{
max-width:300px;
}

/* TABLE */

table{
border-radius:10px;
overflow:hidden;
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
<a href="pinjaman.php"><i class="bi bi-journal-arrow-up"></i> Pinjam Buku</a>
<a href="data.php"><i class="bi bi-bar-chart"></i> Data Peminjaman</a>

<hr>

<a href="logout.php"><i class="bi bi-box-arrow-right"></i> Logout</a>

</div>


<!-- CONTENT -->

<div class="content">

<div class="d-flex justify-content-between align-items-center mb-3">

<div>
<h3><i class="bi bi-people-fill"></i> Data Anggota</h3>
<p class="text-muted mb-0">Daftar siswa XI RPL 2</p>
</div>

<input type="text" class="form-control search-box" placeholder="🔍 Cari anggota...">

</div>


<div class="card shadow">

<div class="card-body">

<table class="table table-hover align-middle">

<thead class="table-primary">

<tr>
<th width="60">No</th>
<th>Nama</th>
<th>Kelas</th>
<th width="150">Aksi</th>
</tr>

</thead>

<tbody>

<?php

$anggota = [
"ALDI WAHRIYANTO",
"ANDI RIZKI FARAWANSYA",
"ANNISA HUMAIRA AZZAHRA",
"BERTHA ELLYA TAMARA",
"ESTER APRILLITA",
"GURINDA FEBRI",
"KADEK STEPANI PUTRI",
"MARSELLA NGANG",
"MARSYA ADELIA FRISCA",
"MELANI AWALIAH",
"MOH VILDAN WAHYUDA SHOKHIBULLA",
"MUHAMAD HASAN",
"MUHAMMAD HARIB FEBRIAN",
"MUHAMMAD IRSYAD",
"MUHAMMAD MAULANA",
"PUTRI BAREK",
"RENDI HARTONO",
"REZKY ANANDA",
"RIAN DIKA RANGGA RADITIA",
"RIANTO",
"SELJUBIMA KALTIM",
"SITI MAULIDAH",
"VERY FERNANDO"
];

$no = 1;

foreach($anggota as $nama){

echo "
<tr>
<td>$no</td>
<td><b>$nama</b></td>
<td><span class='badge bg-primary'>XI RPL 2</span></td>

<td>

<button class='btn btn-sm btn-warning'>
<i class='bi bi-pencil'></i>
</button>

<button class='btn btn-sm btn-danger'>
<i class='bi bi-trash'></i>
</button>

</td>

</tr>
";

$no++;

}

?>

</tbody>

</table>

</div>
</div>

</div>

</body>
</html>