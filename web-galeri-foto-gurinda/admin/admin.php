<?php
session_start();
include '../koneksi.php';

// Jika belum login, arahkan kembali ke halaman login
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Galeri Pesona Kalimantan Utara</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body {
    background-color: #a9cdf1;
    font-family: 'Poppins', sans-serif;
    overflow-x: hidden;
}

/* Animasi fade-in */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Judul utama */
.gallery-title {
    text-align: center;
    margin: 40px 0;
    color: #1e3a5f;
    font-weight: 700;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
    animation: fadeIn 1s ease-in-out;
}

/* Tombol Tambah */
.btn-tambah {
    display: block;
    margin: 0 auto 30px;
    padding: 10px 25px;
    font-weight: 600;
    box-shadow: 0 3px 6px rgba(0,0,0,0.2);
    transition: 0.3s;
}
.btn-tambah:hover {
    transform: scale(1.05);
    box-shadow: 0 5px 10px rgba(0,0,0,0.3);
}

/* Kartu galeri */
.gallery-item {
    border-radius: 15px;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    transition: transform 0.4s ease, box-shadow 0.4s ease;
    animation: fadeIn 0.8s ease-in-out;
}
.gallery-item:hover {
    transform: scale(1.03);
    box-shadow: 0 8px 20px rgba(0,0,0,0.3);
}
.gallery-item img {
    width: 100%;
    height: 230px;
    object-fit: cover;
    transition: transform 0.5s ease;
}
.gallery-item:hover img {
    transform: scale(1.08);
}

/* Caption */
.image-caption {
    padding: 15px;
    text-align: center;
    background: #ffffff;
}
.image-caption h5 {
    margin: 5px 0;
    font-weight: 600;
    color: #000;
}
.image-caption p {
    color: #6c757d;
    font-size: 14px;
    margin-bottom: 10px;
}

/* Tombol warna */
.btn-warna a,
.btn-warna button {
    margin: 0 3px;
    border: none;
    color: white;
    border-radius: 5px;
    padding: 5px 10px;
    font-size: 13px;
    text-decoration: none;
    display: inline-block;
    transition: background-color 0.3s, transform 0.3s;
}
.lihat { background-color: #0d6efd; }
.lihat:hover { background-color: #0056b3; transform: scale(1.1); }
.edit { background-color: #f0ad4e; }
.edit:hover { background-color: #ec971f; transform: scale(1.1); }
.hapus { background-color: #dc3545; }
.hapus:hover { background-color: #a71d2a; transform: scale(1.1); }

/* Footer */
footer {
    background: #343a40;
    color: #fff;
    text-align: center;
    padding: 15px 0;
    margin-top: 60px;
    font-size: 14px;
}
img { transition: opacity 0.3s ease-in-out; }
</style>
</head>

<body>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Galeri Foto</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
            </ul>
            <span class="navbar-text text-white me-3">
                Selamat datang, <?= htmlspecialchars($_SESSION['nama_lengkap'] ?? $_SESSION['username'] ?? 'Tamu') ?>!
            </span>
            <a href="../logout.php" class="btn btn-outline-light">Logout</a>
        </div>
    </div>
</nav>

<!-- KONTEN -->
<div class="container my-4">
    <h1 class="gallery-title">GALERI PESONA KALIMANTAN UTARA</h1>

    <!-- Tombol Tambah -->
    <button type="button" class="btn btn-success btn-tambah" data-bs-toggle="modal" data-bs-target="#modalTambah">
        + Tambah Foto
    </button>

    <!-- LIST FOTO -->
    <div class="row justify-content-center">
        <?php
        $result = mysqli_query($conn, "SELECT * FROM foto ORDER BY id_foto DESC");
        if (mysqli_num_rows($result) == 0) {
            echo '<div class="text-center text-muted mt-3">Belum ada foto yang ditambahkan.</div>';
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id_foto'];
        ?>
        <div class="col-md-3 col-sm-6 mb-4">
            <div class="gallery-item">
                <img src="../img/<?= htmlspecialchars($row['lokasi_file']) ?>" 
                     alt="<?= htmlspecialchars($row['judul_foto']) ?>">
                <div class="image-caption">
                    <h5><?= htmlspecialchars($row['judul_foto']) ?></h5>
                    <p><?= htmlspecialchars($row['lokasi_foto']) ?></p>
                </div>
                <div class="btn-warna text-center mb-3">
                    <a href="../img/<?= htmlspecialchars($row['lokasi_file']) ?>" target="_blank" class="lihat">Lihat</a>
                    <button class="edit" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $id ?>">Edit</button>
                    <a href="../proses/hapus_foto.php?id=<?= $id ?>" class="hapus"
                       onclick="return confirm('Yakin ingin menghapus foto ini?')">Hapus</a>
                </div>
            </div>
        </div>

        <!-- MODAL EDIT -->
        <div class="modal fade" id="modalEdit<?= $id ?>" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form action="../proses/edit_foto.php" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Foto</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="id_foto" value="<?= $id ?>">

                            <div class="text-center mb-3">
                                <label class="form-label fw-bold d-block">Foto Saat Ini:</label>
                                <img src="../img/<?= htmlspecialchars($row['lokasi_file']) ?>" 
                                     alt="<?= htmlspecialchars($row['judul_foto']) ?>" 
                                     class="img-thumbnail rounded shadow-sm" 
                                     id="preview_old_<?= $id ?>" 
                                     style="max-height:180px; object-fit:cover;">
                            </div>

                            <div class="text-center mb-3" id="preview_new_container_<?= $id ?>" style="display:none;">
                                <label class="form-label fw-bold d-block">Preview Foto Baru:</label>
                                <img src="" id="preview_new_<?= $id ?>" 
                                     class="img-thumbnail rounded shadow-sm" 
                                     style="max-height:180px; object-fit:cover;">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Judul Foto</label>
                                <input type="text" name="judul_foto" class="form-control" 
                                       value="<?= htmlspecialchars($row['judul_foto']) ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Lokasi Foto</label>
                                <input type="text" name="lokasi_foto" class="form-control" 
                                       value="<?= htmlspecialchars($row['lokasi_foto']) ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Deskripsi Foto</label>
                                <textarea name="deskripsi_foto" class="form-control" rows="2" required><?= htmlspecialchars($row['deskripsi_foto']) ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Ganti Foto (opsional)</label>
                                <input type="file" name="lokasi_file" class="form-control" accept=".png,.jpg,.jpeg" onchange="previewImage(this, <?= $id ?>)">
                                <small class="text-muted">Biarkan kosong jika tidak ingin mengganti foto.</small>
                            </div>

                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" required>
                                <label class="form-check-label">Saya yakin ingin melakukan perubahan.</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" name="update" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
            } // end while
        } // end else
        ?>
    </div> <!-- end row -->
</div>

<!-- MODAL TAMBAH FOTO -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="../proses/tambah_foto.php" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahLabel">Tambahkan Foto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Judul Foto</label>
                        <input type="text" name="judul_foto" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Lokasi Foto</label>
                        <input type="text" name="lokasi_foto" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi Foto</label>
                        <textarea name="deskripsi_foto" class="form-control" rows="2" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Upload Foto</label>
                        <input type="file" name="lokasi_file" class="form-control" accept=".png,.jpg,.jpeg" required>
                        <small class="text-muted">Ukuran gambar maksimal 10MB (.png, .jpg, .jpeg)</small>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" required>
                        <label class="form-check-label">Saya yakin ingin menambahkan foto.</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- FOOTER -->
<footer>
    <p>©️ 2025 Gurinda Febri. All Rights Reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Preview Foto Baru -->
<script>
function previewImage(input, id) {
    const file = input.files[0];
    const previewOld = document.getElementById('preview_old_' + id);
    const previewNewContainer = document.getElementById('preview_new_container_' + id);
    const previewNew = document.getElementById('preview_new_' + id);

    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            previewNew.src = e.target.result;
            previewNewContainer.style.display = 'block';
            previewOld.style.opacity = '0.3';
        }
        reader.readAsDataURL(file);
    } else {
        previewNewContainer.style.display = 'none';
        previewOld.style.opacity = '1';
    }
}
</script>
</body>
</html>