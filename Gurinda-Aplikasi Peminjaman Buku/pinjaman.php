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

       …
<!DOCTYPE html>
<html>
<head>
<title>Peminjaman Buku</title>

<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI',sans-serif;
}

body{
height:100vh;
background:linear-gradient(120deg,#1e3c72,#2a5298);
display:flex;
justify-content:center;
align-items:center;
}

.container{
width:100%;
height:100vh;
display:flex;
}

.left{
flex:1;
color:white;
display:flex;
flex-direction:column;
justify-content:center;
padding:60px;
}

.left h1{
font-size:40px;
margin-bottom:20px;
}

.left p{
font-size:18px;
opacity:0.9;
}

.right{
flex:1;
background:white;
display:flex;
justify-content:center;
align-items:center;
}

.form-box{
width:350px;
}

.form-box h2{
margin-bottom:25px;
color:#333;
}

label{
font-weight:600;
display:block;
margin-top:15px;
}

input{
width:100%;
padding:10px;
margin-top:5px;
border-radius:6px;
border:1px solid #ccc;
}

input:focus{
border-color:#2a5298;
outline:none;
}

button{
width:100%;
padding:12px;
margin-top:25px;
border:none;
border-radius:6px;
background:#2a5298;
color:white;
font-size:15px;
cursor:pointer;
transition:0.3s;
}

button:hover{
background:#1e3c72;
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
<input type="text" name="nama" list="listNama" required>

<datalist id="listNama">
<option value="Aldi WAHRIYANTO">
<option value="ANDI RIZKI FARAWANSYA">
<option value="ANNISA HUMAIRA AZZAHRA">
<option value="BERTHA ELLYA TAMARA">
<option value="ESTER APRILLITA">
<option value="GURINDA PEBRI">
<option value="KADEK STEPANI PUTRI">
<option value="MARSELLA NGANG">
<option value="MARSYA ADELIA FRISCA">
<option value="MELANI AWALIAH">
<option value="MOH VILDAN WAHYUDA SHOKHIBULLA">
<option value="MUHAMAD HASAN">
<option value="MUHAMMAD HARIB FEBRIAN">
<option value="MUHAMMAD IRSYAD">
<option value="MUHAMMAD MAULANA">
<option value="PUTRI BAREK">
<option value="RENDI HARTONO">
<option value="REZKY ANANDA">
<option value="RIAN DIKA RANGGA RADITIA">
<option value="RIANTO">
<option value="SELJUBIMA KALTIM">
<option value="SITI MAULIDAH">
<option value="VERY FERNANDO">
</datalist>


<label>Judul Buku / Mata Pelajaran</label>
<input type="text" name="judul" list="listBuku" required>

<datalist id="listBuku">
<option value="Pancasila">
<option value="Matematika">
<option value="Penjas">
<option value="Agama">
<option value="Bahasa Inggris">
<option value="Mulok">
<option value="PKK">
<option value="Jurusan RPL">
<option value="Bahasa Indonesia">
<option value="Sejarah">
<option value="BK">
</datalist>

<label>Tanggal Kembali</label>
<input type="date" name="tanggal" required>

<button type="submit">Pinjam Buku</button>

</form>

</div>
</div>

</div>

</body>
</html>