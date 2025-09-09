<?php
require __DIR__ . '/../db.php';
$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    if (!empty($name) && !empty($email) && !empty($message)) {
        $stmt = $pdo->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
        if ($stmt->execute([$name, $email, $message])) {
            $success = "Bedankt voor je bericht! We nemen zo snel mogelijk contact met je op.";
        } else {
            $error = "Er ging iets mis bij het verzenden van je bericht.";
        }
    } else {
        $error = "Alle velden zijn verplicht!";
    }
}
?>

<!doctype html>
<html lang="nl">
<head>
  <meta charset="utf-8">
  <title>Contact — LivingShapes</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Contact</h1>

  <?php if ($success): ?>
      <p class="success"><?= htmlspecialchars($success) ?></p>
  <?php elseif ($error): ?>
      <p class="error"><?= htmlspecialchars($error) ?></p>
  <?php endif; ?>

  <form method="POST" action="">
      <label>Naam:</label><br>
      <input type="text" name="name" required><br><br>

      <label>Email:</label><br>
      <input type="email" name="email" required><br><br>

      <label>Bericht:</label><br>
      <textarea name="message" rows="5" required></textarea><br><br>

      <button type="submit">Verstuur</button>
  </form>
</body>
</html>
