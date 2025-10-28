<?php 
session_start(); 
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
      background-color: #e186b8ff; /* pink muda */
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .gallery-item {
      margin-bottom: 30px;
      overflow: hidden;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }
    .gallery-item:hover {
      transform: scale(1.03);
    }
    .gallery-item img {
      width: 100%;
      height: 250px;
      object-fit: cover;
    }
    .image-caption {
      padding: 15px;
      background: white;
      text-align: center;
    }
    footer {
      background: #f5f3f4ff;
      color: black;
      padding: 15px 0;
      margin-top: 40px;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <!-- Brand -->
    <a class="navbar-brand" href="#">Galeri Foto</a>

    <!-- Toggle button (HP mode) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <!-- Menu sebelah kiri -->
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tentang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kontak</a>
        </li>
      </ul>

      <!-- Sebelah kanan (info login) -->
      <span class="navbar-text me-2">
        Selamat datang, <strong>operator!</strong>
      </span>
      <a href="logout.php" class="btn btn-outline-dark btn-sm">Logout</a>
    </div>
  </div>
</nav>
    
<!-- Galeri -->
<div class="container my-4">
  <h1 class="text-center mb-4">Galeri Pesona Kalimantan Utara</h1>
  <div class="row">

   <!-- Foto 1 -->
        <div class="col-md-4 col-sm-6 col-12">
          <div class="gallery-item">
            <img src="AirTerjunSemolon.jpeg" class="img-fluid" alt="Air Terjun Semolon">
            <div class="image-caption">
              <h5>Air Terjun Semolon (Malinau)</h5>
              <p class="text-muted">Air terjun unik dengan kolam berundak yang dialiri air panas alami. Tempat ini cocok untuk relaksasi di tengah suasana hutan tropis.</p>
            <div class="d-flex justify-content-center gap-2 flex-wrap mt-2">
        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#lihatModal" data-img="Pantai.jpeg">Lihat</button>
        <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#tambahModal">Tambah</button>
        <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
        <button class="btn btn-sm btn-danger" onclick="hapusData('Pantai Amal')">Hapus</button>
            </div>
            </div>
          </div>
        </div>

        <!-- Foto 2 -->
        <div class="col-md-4 col-sm-6 col-12">
          <div class="gallery-item">
            <img src="GunungRian.jpeg" class="img-fluid" alt="Gunung Bromo di pagi hari dengan kabut pagi dan sinar matahari keemasan">
            <div class="image-caption">
              <h5>Air Terjun Gunung Rian (Tanah Tidung)</h5>
              <p class="text-muted">Air terjun bertingkat dengan panorama alami hijau dan udara sejuk, Lokasinya masih alami, cocok untuk trekking dan wisata petualang. </p>
              <div class="d-flex justify-content-center gap-2 flex-wrap mt-2">
        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#lihatModal" data-img="Pantai.jpeg">Lihat</button>
        <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#tambahModal">Tambah</button>
        <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
        <button class="btn btn-sm btn-danger" onclick="hapusData('Pantai Amal')">Hapus</button>
            </div>
            </div>
          </div>
        </div>

        <!-- Foto 3 -->
        <div class="col-md-4 col-sm-6 col-12">
          <div class="gallery-item">
            <img src="GunungPutih.jpeg" class="img-fluid" alt="Candi Borobudur di Magelang dengan stupa-stupa bersejarah dan langit cerah">
            <div class="image-caption">
              <h5>Gunung Putih (Tanjung Palas)</h5>
              <p class="text-muted">Bukit kapur menjulang yang dikelilingi hutan. Selain keindahan alam, terdapat gua-gua alami yang sering dikaitkan dengan legenda likal, menjadikannya destinasi wisata alam sekaligus religi.</p>
              <div class="d-flex justify-content-center gap-2 flex-wrap mt-2">
        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#lihatModal" data-img="Pantai.jpeg">Lihat</button>
        <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#tambahModal">Tambah</button>
        <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
        <button class="btn btn-sm btn-danger" onclick="hapusData('Pantai Amal')">Hapus</button>
            </div>
              </div>
          </div>
        </div>

        <!-- Foto 4 -->
        <div class="col-md-4 col-sm-6 col-12">
          <div class="gallery-item">
            <img src="sebatik.jpeg" class="img-fluid" alt="Danau Toba di Sumatera Utara dengan perahu tradisional dan perbukitan hijau">
            <div class="image-caption">
              <h5>Pulau Sebatik (Nunukan)</h5>
              <p class="text-muted">Ikon wisata di Pulau Sebatik yang berbatasan langsung Malaysia. Menawarkan panorama laut, budaya perbatasan, serta suasana unik karena sebagian wilayah pulau berada di Indonesia dan sebagian di Malaysia. </p>
              <!-- Tombol Aksi -->
      <div class="d-flex justify-content-center gap-2 flex-wrap mt-2">
        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#lihatModal" data-img="Pantai.jpeg">Lihat</button>
        <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#tambahModal">Tambah</button>
        <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
        <button class="btn btn-sm btn-danger" onclick="hapusData('Pantai Amal')">Hapus</button>
            </div>
          </div>
        </div>
        </div>

        <!-- Foto 5 -->
        <div class="col-md-4 col-sm-6 col-12">
          <div class="gallery-item">
            <img src="Pantai.jpeg" class="img-fluid" alt="Taman Nasional Komodo dengan hewan komodo berjalan di padang savana">
            <div class="image-caption">
              <h5>Pantai Amal (Tarakan)</h5>
              <p class="text-muted">Pantai andalan Kota Tarakan dengan fasilitas lengkap, tempat bersantai, bermain, dan menikmati sunset. Area ini juga sering jadi lokasi festival budaya dan kuliner khas Tarakan.</p>
            <div class="d-flex justify-content-center gap-2 flex-wrap mt-2">
        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#lihatModal" data-img="Pantai.jpeg">Lihat</button>
        <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#tambahModal">Tambah</button>
        <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
        <button class="btn btn-sm btn-danger" onclick="hapusData('Pantai Amal')">Hapus</button>
            </div>
            </div>
          </div>
        </div>

        <!-- Foto 6 -->
        <div class="col-md-4 col-sm-6 col-12">
          <div class="gallery-item">
            <img src="museum.jpeg" class="img-fluid" alt="Pura Lempuyang di Bali dengan gerbang megah dan latar belakang Gunung Agung">
            <div class="image-caption">
              <h5>Museum Kesultanan (Bulungan)</h5>
              <p class="text-muted">Sisus bersejarah peninggalan Kesultanan Bulungan. Di dalamnya terdapat meriam tua dan bangunan berarsiktetur khas Melayu, menjadi pusat sejarah dan budaya Kalimantan Utara</p>
            <div class="d-flex justify-content-center gap-2 flex-wrap mt-2">
        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#lihatModal" data-img="Pantai.jpeg">Lihat</button>
        <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#tambahModal">Tambah</button>
        <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
        <button class="btn btn-sm btn-danger" onclick="hapusData('Pantai Amal')">Hapus</button>
            </div>
            </div>
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

</body>
</html>