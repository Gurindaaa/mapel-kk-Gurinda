<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Peminjaman Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-4">

    <a href="index.php" class="btn btn-secondary mb-3">⬅ Kembali ke Dashboard</a>

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5>Form Peminjaman Buku</h5>
        </div>

        <div class="card-body">
            <form action="simpan_pinjam.php" method="post">

                <div class="mb-3">
                    <label class="form-label">ID Peminjaman</label>
                    <input type="text" name="kode_pinjam" class="form-control" value="P0001" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Pinjam</label>
                    <input type="date" name="tgl_pinjam" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Kembali</label>
                    <input type="date" name="tgl_kembali" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Anggota</label>
                    <select name="id_anggota" class="form-select" required>
                        <option value="">-- Pilih Anggota --</option>
                        <?php
                        $anggota = mysqli_query($conn, "SELECT * FROM anggota");
                        while ($a = mysqli_fetch_assoc($anggota)) {
                            echo "<option value='{$a['id_anggota']}'>{$a['nama']}</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Buku</label>
                    <select name="id_buku" class="form-select" required>
                        <option value="">-- Pilih Buku --</option>
                        <?php
                        $buku = mysqli_query($conn, "SELECT * FROM buku");
                        while ($b = mysqli_fetch_assoc($buku)) {
                            echo "<option value='{$b['id_buku']}'>{$b['judul']}</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jumlah (Qty)</label>
                    <input type="number" name="qty" class="form-control" value="1" min="1" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Keterangan</label>
                    <textarea name="keterangan" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-success">
                    💾 Proses Transaksi
                </button>

            </form>
        </div>
    </div>

</div>

</body>
</html>