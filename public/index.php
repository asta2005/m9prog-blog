<!doctype html>
<html lang="nl">
<head>
  <meta charset="utf-8">
  <title>Omar Kahouach — Portfolio</title>
  <link rel="stylesheet" href="/css/home.css">
  <link rel="stylesheet" href="/css/skills.css">
  <link rel="stylesheet" href="/css/projects.css">
  
</head>
<body>
  <!-- Navigatie -->
  <header>
    <nav>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#cv">CV</a></li>
        <li><a href="#about">About Me</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- Hero Section -->
  <section id="home" class="hero">
    <div class="hero-text">
      <h1>Hello,</h1>
      <h2>Dit is  <span class="highlight">Omar kahopuach</span>,</h2>
      <h2>Professional <span class="highlight2">Software Developer</span>.</h2>
      <div class="hero-buttons">
        <a href="#contact" class="btn">Contact Me</a>
        <a href="cv.pdf" target="_blank" class="btn alt">Get Resume</a>
      </div>
    </div>
    <div class="hero-code">
      <pre><code>
const coder = {
  name: 'Omar Kahouach',
 skills: ['PHP', 'JavaScript', 'MySQL', 'Docker', 'HTML', 'CSS', 
 'flutter', 'Dart', 'nodejs', 'wordpress', 'laravel', 'unity' , 'Arduino',
  'React', 'Git','  Bootstrap'],
  hardWorker: true,
  quickLearner: true,
  problemSolver: true,
  hireable: function() {
    return this.hardWorker && this.problemSolver && this.skills.length >= 5;
  }
};
      </code></pre>
    </div>
  </section>

  <!-- Skills Section via include -->
  <section id="skills" class="skills-section">
    <?php include 'skills.php'; ?>
  </section>

</body>
</html>



<?php include 'projects.php'; ?>
