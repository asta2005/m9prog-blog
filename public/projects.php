<?php
require __DIR__ . '/../db.php'; // laadt PDO connectie via .env

$stmt = $pdo->query("SELECT * FROM projects ORDER BY id DESC");
$projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="projects-section" id="projects">
  <h2>Projects</h2>
  <div class="projects-grid">
    <?php if ($projects): ?>
      <?php foreach ($projects as $project): ?>
        <div class="project-card">
          <img src="<?php echo htmlspecialchars($project['image']); ?>" 
               alt="<?php echo htmlspecialchars($project['title']); ?>">
          <div class="project-info">
            <h3><?php echo htmlspecialchars($project['title']); ?></h3>
            <p><?php echo htmlspecialchars($project['description']); ?></p>
            <a href="<?php echo htmlspecialchars($project['link']); ?>" target="_blank" class="btn">Bekijk project</a>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <p>Geen projecten gevonden...</p>
    <?php endif; ?>
  </div>
</section>
