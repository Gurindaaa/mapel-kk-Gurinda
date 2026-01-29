<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Perpustakaan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body { background:#f4f6f9; }
        .sidebar {
            width: 220px;
            height: 100vh;
            position: fixed;
            background: #0d6efd;
            color: white;
            padding: 15px;
        }
        .sidebar a {
            color: white;
            display: block;
            padding: 10px;
            text-decoration: none;
            border-radius: 5px;
        }
        .sidebar a:hover {
            background: rgba(255,255,255,0.2);
        }
        .content {
            margin-left: 240px;
            padding: 20px;
        }
        .box {
            border-radius: 10px;
            color: white;
            padding: 20px;
        }
    </style>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h4>📚 PERPUSTAKAAN</h4>
    <hr>
    <a href="index.php">🏠 Dashboard</a>
    <a href="pinjaman.php">📖 Pinjam Buku</a>
    <a href="data.php">📊 Data Peminjaman</a>
</div>

<!-- KONTEN -->
<div class="content">
    <h3>Dashboard</h3>
    <p class="text-muted">Selamat datang di aplikasi perpustakaan</p>

    <div class="row">
        <div class="col-md-3">
            <div class="box bg-primary">
                <h4>Anggota</h4>
                <h2>3</h2>
            </div>
        </div>

        <div class="col-md-3">
            <div class="box bg-danger">
                <h4>Buku</h4>
                <h2>5</h2>
            </div>
        </div>

        <div class="col-md-3">
            <div class="box bg-success">
                <h4>Pengunjung</h4>
                <h2>0</h2>
            </div>
        </div>

        <div class="col-md-3">
            <div class="box bg-warning">
                <h4>Peminjaman</h4>
                <h2>0</h2>
            </div>
        </div>
    </div>
</div>

</body>
</html>