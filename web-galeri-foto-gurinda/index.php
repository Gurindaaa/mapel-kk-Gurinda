<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <style>
    /* Style dasar */
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #f7eff2ff, #e268acff);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    /* Container */
    .login-box {
      background: #fff;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
      width: 350px;
      text-align: center;
      animation: fadeIn 1s ease;
    }

    /* Animasi */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* Judul */
    .login-box h2 {
      margin-bottom: 25px;
      color: #333;
    }

    /* Input */
    .login-box input {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
      outline: none;
      transition: 0.3s;
    }

    .login-box input:focus {
      border-color: #667eea;
      box-shadow: 0 0 8px rgba(102,126,234,0.5);
    }

    /* Tombol */
    .login-box button {
      width: 100%;
      padding: 12px;
      margin-top: 15px;
      border: none;
      background: linear-gradient(135deg, #667eea, #764ba2);
      color: #fff;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s;
    }

    .login-box button:hover {
      background: linear-gradient(135deg, #5a67d8, #6b46c1);
    }

    /* Link kecil */
    .login-box p {
      margin-top: 15px;
      font-size: 14px;
      color: #555;
    }

    .login-box a {
      color: #667eea;
      text-decoration: none;
    }

    .login-box a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Login Form</h2>
    <form action="proses_login.php" method="post">

 <label for="username">Username:</label> 

 <input type="text" id="username" name="username" required><br> 

 <label for="password">Password:</label> 

 <input type="password" id="password" name="password" required><br> 

 <input type="submit" value="Login"> 

 </form> 

  </div>
</body>
</html>