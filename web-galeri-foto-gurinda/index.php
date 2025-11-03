<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f4b6cb;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .login-box {
      background: white;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.15);
      width: 100%;
      max-width: 350px;
    }
    .login-box h2 {
      text-align: center;
      margin-bottom: 25px;
      font-weight: bold;
    }
    .form-control {
      height: 45px;
      border-radius: 10px;
    }
    .btn-login {
      width: 100%;
      height: 45px;
      border-radius: 10px;
      font-weight: bold;
    }
  </style>
</head>
<body>

  <div class="login-box">
    <h2>Login Form</h2>
    <form action="welcome.php" method="POST">
  <div class="mb-3">
    <label for="username" class="form-label">Username:</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required>
  </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
      </div>

      <button type="submit" class="btn btn-primary btn-login">Login</button>
    </form>
  </div>

</body>
</html>