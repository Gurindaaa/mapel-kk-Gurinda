<?php 
session_start(); 

// Simpan username ke session jika login baru saja dilakukan
if (isset($_POST['username'])) {
  $_SESSION['username'] = $_POST['username'];
}

// Jika belum login, arahkan kembali ke halaman login
if (!isset($_SESSION['username'])) {
  header("Location: index.php"); 
  exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Galeri Pesona Kalimantan Utara</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #d74587ff;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .navbar {
      background-color: #212529;
    }
    .navbar-brand, .nav-link, .navbar-text {
      color: white !important;
    }
    .gallery-item {
      margin-bottom: 30px;
      overflow: hidden;
      border-radius: 10px;
      background: white;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }
    .gallery-item:hover {
      transform: scale(1.03);
    }
    .gallery-item img {
      width: 100%;
      height: 230px;
      object-fit: cover;
    }
    .image-caption {
      padding: 15px;
      text-align: center;
    }
    footer {
      background: #f5f3f4;
      color: black;
      padding: 15px 0;
      margin-top: 40px;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="#">Galeri Foto</a>
    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Tentang</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
      </ul>
      <span class="navbar-text me-3">
        Selamat datang, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>!
      </span>
      <a href="logout.php" class="btn btn-outline-light btn-sm">Logout</a>
    </div>
  </div>
</nav>

<!-- Galeri -->
<div class="container my-4">
  <h1 class="text-center mb-4 fw-bold">Galeri Pesona Kalimantan Utara</h1>
  <div class="row">

    <?php 
    // Data galeri sederhana
    $galeri = [
  ["gambar" => "Pantai.jpeg", "judul" => "Pantai Amal (Tarakan)", "deskripsi" => "Pantai indah dengan sunset menawan"],
  ["gambar" => "GunungPutih.jpeg", "judul" => "Gunung Putih (Tanjung Palas)", "deskripsi" => "Bukit kapur bersejarah nan eksotis."],
  ["gambar" => "sebatik.jpeg", "judul" => "Pulau Sebatik (Nunukan)", "deskripsi" => "Pulau perbatasan dengan panorama laut."],
  ["gambar" => "museum.jpeg", "judul" => "Museum Kesultanan (Bulungan)", "deskripsi" => "Bangunan bersejarah peninggalan Kesultanan Bulungan."],
  ["gambar" => "AirTerjunSemolon.jpeg", "judul" => "Air Terjun Semolon (Malinau)", "deskripsi" => "Air terjun unik dengan kolam berundak yang dialiri air panas alami."],
  ["gambar" => "GunungRian.jpeg", "judul" => "Air Terjun Gunung Rian (Tanah Tidung)", "deskripsi" => "Air terjun bertingkat dengan panorama alami hijau dan udara sejuk."]
];

    foreach ($galeri as $item): ?>
      <div class="col-md-4 col-sm-6 mb-4">
        <div class="gallery-item">
          <img src="<?= $item['gambar'] ?>" alt="<?= $item['judul'] ?>">
          <div class="image-caption">
            <h5><?= $item['judul'] ?></h5>
            <p class="text-muted"><?= $item['deskripsi'] ?></p>
            <div class="d-flex justify-content-center gap-2 flex-wrap">
              <button 
                class="btn btn-sm btn-primary lihat-btn" 
                data-bs-toggle="modal" 
                data-bs-target="#lihatModal"
                data-img="<?= $item['gambar'] ?>"
                data-judul="<?= htmlspecialchars($item['judul']) ?>"
                data-deskripsi="<?= htmlspecialchars($item['deskripsi']) ?>"
              >Lihat</button>
              <button class="btn btn-sm btn-success">Tambah</button>
              <button class="btn btn-sm btn-warning">Edit</button>
              <button class="btn btn-sm btn-danger">Hapus</button>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
</div>

<!-- Modal Lihat -->
<div class="modal fade" id="lihatModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="lihatJudul"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body text-center">
        <img id="lihatGambar" src="" alt="" class="img-fluid rounded mb-3">
        <p id="lihatDeskripsi" class="text-muted"></p>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="text-center">
  <div class="container">
    <p>©️ 2025 Gurinda Febri. All Rights Reserved.</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Script agar tombol 'Lihat' berfungsi
document.querySelectorAll('.lihat-btn').forEach(btn => {
  btn.addEventListener('click', function() {
    document.getElementById('lihatJudul').textContent = this.dataset.judul;
    document.getElementById('lihatGambar').src = this.dataset.img;
    document.getElementById('lihatDeskripsi').textContent = this.dataset.deskripsi;
  });
});
</script>
<