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
<title>Data Buku</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#f4f6f9;
    font-family:'Segoe UI', sans-serif;
}
.content{
    padding:30px;
}
.card{
    border-radius:12px;
}
</style>
</head>
<body>

<div class="content">

    <h3>📚 Data Buku Sekolah</h3>
    <p class="text-muted">Daftar buku pelajaran</p>

    <a href="index.php" class="btn btn-secondary mb-3">← Kembali</a>

    <div class="card shadow-sm">
        <div class="card-body">

            <table class="table table-bordered table-hover">
                <thead class="table-danger">
                    <tr>
                        <th width="60">No</th>
                        <th>Nama Buku</th>
                        <th>Kategori</th>
                        <th width="120">Aksi</th>
                    </tr>
                </thead>
                <tbody>

<?php
$buku = [
"Pancasila",
"Matematika",
"Penjas",
"Agama",
"Bahasa Inggris",
"Mulok",
"PKK",
"Jurusan RPL",
"Bahasa Indonesia",
"Sejarah",
"BK"
];

$no = 1;
foreach($buku as $nama){
    echo "<tr>
            <td>$no</td>
            <td>Buku $nama</td>
            <td>Pelajaran</td>
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