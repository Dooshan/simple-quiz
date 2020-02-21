<?php require_once 'database.php';

  // Get total questions
 $sql = "SELECT * FROM questions";
 $result = $conn->query($sql);
 $num_questions = $result->num_rows;
 
?>
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
        <li><strong>Number of question: </strong><?= $num_questions ?></li>
        <li><strong>Type: </strong>Multiple Choice </li>
        <li><strong>Estimated Time: </strong><?= $num_questions * 0.5 ?> minutes</li>
      </ul>
      <a href="question.php?n=1" class="start">Start Quiz</a>
    </div>
  </main>

  <footer>
    <div class="container">
      Copyright  &copy; 2018- <?= date("Y"); ?>, Quiz
      

    </div>
  </footer>
  
</body>
</html>