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

<style>
body{
    background:#f4f6f9;
    font-family:'Segoe UI', sans-serif;
}
.content{
    padding:30px;
}
</style>
</head>
<body>

<div class="content">

    <h3>👥 Data Anggota</h3>
    <p class="text-muted">Daftar siswa XI RPL 2</p>

    <a href="index.php" class="btn btn-secondary mb-3">← Kembali</a>

    <div class="card shadow-sm">
        <div class="card-body">

            <table class="table table-bordered table-hover">
                <thead class="table-primary">
                    <tr>
                        <th width="60">No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th width="120">Aksi</th>
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
"GURINDA PEBRI",
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
    echo "<tr>
            <td>$no</td>
            <td>$nama</td>
            <td>XI RPL 2</td>
            <td>
                <button class='btn btn-sm btn-danger'>Hapus</button>
            </td>
          </tr>";
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