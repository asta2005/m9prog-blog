<?php
session_start();
require __DIR__ . '/../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $stmt = $pdo->prepare("SELECT id, username, password FROM users WHERE email=?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user["password"])) {
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["username"] = $user["username"];
        header("Location: index.php");
        exit;
    } else {
        $error = "Ongeldige inloggegevens!";
    }
}
?>
<!doctype html>
<html lang="nl">
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="css/auth.css">
</head>
<body>
  <div class="auth-container">
    <h1>Login</h1>

    <?php if (!empty($error)): ?>
      <p class="error"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <form method="POST">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Wachtwoord</label>
      <input type="password" id="password" name="password" required>

      <button type="submit">Login</button>
    </form>

    <div class="auth-footer">
      Nog geen account? <a href="register.php">Registreren</a>
    </div>
  </div>
</body>
</html>
