<?php
session_start();
require __DIR__ . '/../db.php';

// Haal projecten op (optioneel voor homepage preview)
$stmt = $pdo->query("SELECT * FROM projects LIMIT 4");
$projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="nl">
<head>
  <meta charset="utf-8">
  <title>Mijn Portfolio</title>
  <link rel="stylesheet" href="css/home.css">

</head>
<body>
  <header class="navbar">
    <div class="logo">⚡ Omar kahouach </div>
    <nav>
      <ul>
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="skills.php">Skills</a></li>
        <li><a href="projects.php">Projects</a></li>
        <li><a href="cv.php">CV</a></li>
        <li><a href="about.php">About Me</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
    <div class="auth">
      <?php if (isset($_SESSION["username"])): ?>
        <span>👋 <?= htmlspecialchars($_SESSION["username"]); ?></span>
        <a href="logout.php" class="btn">Logout</a>
      <?php else: ?>
        <a href="login.php" class="btn">Login</a>
      <?php endif; ?>
    </div>
  </header>

  <section class="hero">
    <h1>Welkom bij mijn Portfolio</h1>
    <p>Ontdek mijn skills, projecten, CV en meer 🚀</p>
    <a href="projects.php" class="btn-primary">Bekijk mijn projecten</a>
  </section>

  <section class="preview">
    <h2>Laatste Projecten</h2>
    <div class="grid">
      <?php foreach($projects as $p): ?>
        <div class="card">
          <img src="img/<?= htmlspecialchars($p['image_main']) ?>" alt="">
          <h3><?= htmlspecialchars($p['title']) ?></h3>
          <p><?= htmlspecialchars($p['city_location']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <footer>
    <p>&copy; <?= date("Y") ?> Mijn Portfolio | Gemaakt met ❤️ in PHP</p>
  </footer>
</body>
</html>
