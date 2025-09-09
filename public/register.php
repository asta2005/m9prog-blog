<?php
require __DIR__ . '/../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    try {
        $stmt->execute([$username, $email, $password]);
        header("Location: login.php");
        exit;
    } catch (Exception $e) {
        $error = "Gebruiker bestaat al of database fout.";
    }
}
?>
<!doctype html>
<html lang="nl">
<head>
  <meta charset="utf-8">
  <title>Registreren</title>
  <link rel="stylesheet" href="css/auth.css">
</head>
<body>
  <div class="auth-container">
    <h1>Registreren</h1>

    <?php if (!empty($error)): ?>
      <p class="error"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <form method="POST">
      <label for="username">Gebruikersnaam</label>
      <input type="text" id="username" name="username" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Wachtwoord</label>
      <input type="password" id="password" name="password" required>

      <button type="submit">Registreren</button>
    </form>

    <div class="auth-footer">
      Heb je al een account? <a href="login.php">Login</a>
    </div>
  </div>
</body>
</html>
