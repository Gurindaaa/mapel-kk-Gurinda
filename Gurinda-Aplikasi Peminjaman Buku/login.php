<?php
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "555") {
        $_SESSION['login'] = true;
        $_SESSION['user'] = "admin";
        header("Location: index.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Login Perpustakaan</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>
body{
    min-height:100vh;
    background: linear-gradient(135deg, #b874eb, #dcdee5);
    display:flex;
    justify-content:center;
    align-items:center;
    font-family: 'Segoe UI', sans-serif;
}

.login-card{
    width:340px;
    background:white;
    padding:30px;
    border-radius:16px;
    box-shadow:0 20px 40px rgba(0,0,0,0.15);
    animation: fadeIn 0.6s ease;
}

.login-title{
    font-weight:600;
}

.input-group-text{
    background:#f1f3f5;
}

.btn-login{
    border-radius:8px;
    font-weight:500;
    transition:0.2s;
}

.btn-login:hover{
    transform:translateY(-1px);
    box-shadow:0 6px 14px rgba(13,110,253,0.35);
}

@keyframes fadeIn{
    from{opacity:0; transform:translateY(15px);}
    to{opacity:1; transform:translateY(0);}
}
</style>
</head>
<body>

<div class="login-card">

    <div class="text-center mb-3">
        <h4 class="login-title">📚 Perpustakaan</h4>
        <small class="text-muted">Silakan login ke sistem</small>
    </div>

    <?php if(isset($error)): ?>
        <div class="alert alert-danger py-2"><?php echo $error; ?></div>
    <?php endif; ?>

    <form method="post">

        <div class="input-group mb-3">
            <span class="input-group-text"><i class="bi bi-person"></i></span>
            <input type="text" name="username" class="form-control" placeholder="Username" required>
        </div>

        <div class="input-group mb-4">
            <span class="input-group-text"><i class="bi bi-lock"></i></span>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>

        <button type="submit" name="login" class="btn btn-primary w-100 btn-login">
            Login
        </button>

    </form>

    <div class="text-center mt-3">
        <small class="text-muted">© Sistem Perpustakaan</small>
    </div>

</div>

</body>
</html>