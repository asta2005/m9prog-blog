const questions = [
  {
    question: "Is zonnepanelen gebruiken goed voor het klimaat?",
    correct: "L"
  },
  {
    question: "Is plastic wegwerpbestek duurzaam?",
    correct: "R"
  },
  {
    question: "Helpt bomen planten tegen klimaatverandering?",
    correct: "L"
  },
  {
    question: "Is autorijden op benzine milieuvriendelijk?",
    correct: "R"
  },
  {
    question: "Is minder vlees eten beter voor het klimaat?",
    correct: "L"
  },
  {
    question: "Is LED-verlichting energiezuiniger dan gloeilampen?",
    correct: "L"
  },
  {
    question: "Verhoogt recycling de hoeveelheid afval?",
    correct: "R"
  },
  {
    question: "Is windenergie een hernieuwbare energiebron?",
    correct: "L"
  },
  {
    question: "Levert zonnepanelen energie op uit regen?",
    correct: "R"
  },
  {
    question: "Is fietsen beter voor het milieu dan rijden met een auto?",
    correct: "L"
  }
];

let current = 0;
let errors = 0;
const maxErrors = 3;

function goToIntro() {
  document.getElementById("start-screen").style.display = "none";
  document.getElementById("intro-screen").style.display = "block";
}

function startQuiz() {
  document.getElementById("intro-screen").style.display = "none";
  document.getElementById("quiz-container").style.display = "block";
  showQuestion();
}

function showQuestion() {
  const q = questions[current];
  document.getElementById("question").innerText = q.question;
  updateBackground();
}

function answer(choice) {
  const q = questions[current];

  if (choice === q.correct) {
    errors = Math.max(0, errors - 1); // goed: water daalt
  } else {
    if (errors === maxErrors) {
      gameOver(); // op niveau 3 fout = game over
      return;
    }
    errors = Math.min(maxErrors, errors + 1); // fout: water stijgt
  }

  current++;

  if (current < questions.length) {
    showQuestion();
  } else {
    document.getElementById("question").innerText = "Quiz afgerond!";
    document.getElementById("answers").style.display = "none";
    updateBackground();
  }
}

function gameOver() {
  document.getElementById("question").innerText = "Game Over - Je bent overstroomd!";
  document.getElementById("answers").style.display = "none";
  updateBackground();
}

function updateBackground() {
  const bg = document.getElementById("background");
  bg.src = `images/water${Math.min(errors, maxErrors)}.png`;
}
