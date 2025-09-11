<?php
require __DIR__ . '/../db.php';

$stmt = $pdo->query("SELECT * FROM skills ORDER BY id ASC");
$skills = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="skills-section" id="skills">
  <h2>Skills</h2>
  <div class="skills-scroll">
    <div class="skills-track">
      <?php foreach ($skills as $skill): ?>
        <div class="skill-card">
          <div class="skill-icon">
            <img src="<?php echo htmlspecialchars($skill['image']); ?>" 
                 alt="<?php echo htmlspecialchars($skill['NAME']); ?>">
          </div>
          <p><?php echo htmlspecialchars($skill['NAME']); ?></p>
        </div>
      <?php endforeach; ?>

      <!-- duplicatie voor infinite scroll -->
      <?php foreach ($skills as $skill): ?>
        <div class="skill-card">
          <div class="skill-icon">
            <img src="<?php echo htmlspecialchars($skill['image']); ?>" 
                 alt="<?php echo htmlspecialchars($skill['NAME']); ?>">
          </div>
          <p><?php echo htmlspecialchars($skill['NAME']); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
