<?php require_once 'database.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Quiz</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>

  <header>
    <div class="container">
      <h1>Simple Quiz</h1>
    </div>
  </header>

  <main>
    <div class="container">
      <h2>Test</h2>
      <p>This is multiply choice quiz </p>
      <ul>
        <li><strong>Number of question: </strong>5</li>
        <li><strong>Type: </strong>Multiple Choice </li>
        <li><strong>Estimated Time: </strong>4 minutes</li>
      </ul>
      <a href="question.php?n=1" class="start">Start Quiz</a>
    </div>
  </main>

  <footer>
    <div class="container">
      Copyright  &copy; 2020, Quiz
    </div>
  </footer>
  
</body>
</html>