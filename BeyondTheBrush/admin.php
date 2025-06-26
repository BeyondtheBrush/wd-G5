<?php
$user = "admin";
$pass = "admin123";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"] ?? '');
    $password = trim($_POST["password"] ?? '');

    if ($username == $user && $password == $pass) {
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      background: url('../img/b.jpg') no-repeat center center;
      background-size: cover;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI', sans-serif;
      position: relative;
    }

    .alert-position {
      position: absolute;
      top: 20px;
      z-index: 10;
      width: 100%;
      display: flex;
      justify-content: center;
    }

    .login-box {
      background-color: rgba(255, 255, 255, 0.5);
      border-radius: 8%;
      box-shadow: 0px 5px 20px rgba(0, 0, 0, 1);
      padding: 40px 30px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-width: 300px;
    }

    input.form-control {
      width: 200px;
      margin: 0 auto;
      box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.25);
      border: 1px solid #ccc;
      border-radius: 35px;
      padding: 10px;
    }

    .login-box h3 {
      font-weight: 500;
      margin-bottom: 25px;
      text-align: center;
      color: #333;
    }

    .btn-primary {
      border-radius: 20px;
      width: 100px;
      background-color: #0069d9;
      border-color: #0062cc;
      transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>

  <?php if (!empty($error)): ?>
    <div class="alert-position">
      <div class="alert alert-danger text-center w-auto px-4 py-2 shadow-sm">
        <?= htmlspecialchars($error) ?>
      </div>
    </div>
  <?php endif; ?>

  <div class="login-box">
    <h3><i class="bi bi-person-circle me-2"></i>Login</h3>
    <form method="POST" action="">
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <div class="text-center mt-3">
        <button type="submit" class="btn btn-primary shadow-sm">Login</button>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
