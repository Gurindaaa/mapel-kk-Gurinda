<!DOCTYPE html>
<html>
<head>
    <title>Peminjaman Buku</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            height: 100vh;
            background: linear-gradient(120deg, #1e3c72, #2a5298);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 100%;
            height: 100vh;
            display: flex;
        }

        .left {
            flex: 1;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 60px;
        }

        .left h1 {
            font-size: 40px;
            margin-bottom: 20px;
        }

        .left p {
            font-size: 18px;
            opacity: 0.9;
        }

        .right {
            flex: 1;
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-box {
            width: 350px;
        }

        .form-box h2 {
            margin-bottom: 25px;
            color: #333;
        }

        label {
            font-weight: 600;
            display: block;
            margin-top: 15px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        input:focus {
            border-color: #2a5298;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 25px;
            border: none;
            border-radius: 6px;
            background: #2a5298;
            color: white;
            font-size: 15px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #1e3c72;
        }
    </style>
</head>
<body>

<div class="container">
    
    <div class="left">
        <h1>📚 Sistem Perpustakaan</h1>
        <p>Kelola peminjaman buku dengan mudah, cepat, dan modern.</p>
    </div>

    <div class="right">
        <div class="form-box">
            <h2>Form Peminjaman</h2>
            <form method="POST">
                <label>Nama Peminjam</label>
                <input type="text" name="nama" required>

                <label>Judul Buku</label>
                <input type="text" name="judul" required>

                <label>Tanggal Kembali</label>
                <input type="date" name="tanggal" required>

                <button type="submit">Pinjam Buku</button>
            </form>
        </div>
    </div>

</div>

</body>
</html>