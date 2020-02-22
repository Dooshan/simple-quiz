<?php 
include "database.php";
session_start(); 

$sql = "SELECT * FROM questions";
$result = $conn->query($sql);
$total_question = $result->num_rows;

// Set question number 
$question_number = $_GET['n'];

$get_question = "SELECT * FROM questions WHERE question_number = $question_number" ;
$result = $conn->query($get_question);
$question = $result->fetch_assoc();

//Get choices 
$sql = "SELECT * FROM choices WHERE question_number = $question_number";
$choices = $conn->query($sql);
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
     <div class="current">Question <?= $question['question_number']?> of <?= $total_question?> </div>
     <p class="question">
          <?= $question['text'] ?>
     </p>
     <form action="process.php" method="POST">
       <ul class="choices">
         <?php while($row = $choices->fetch_assoc()) : ?>
          <li><input type="radio" name="choice" value="<?= $row['text'];  ?>" ><?= $row['text']; ?></li>
         <?php endwhile; ?>

       </ul>
       <input type="submit" name="submit" value="Submit">
       <input type="hidden" name="question_number" value="<?= $question_number?>">
     </form>
    </div>
  </main>

  <footer>
    <div class="container">
      Copyright  &copy; 2020, Quiz
    </div>
  </footer>
  
</body>
</html>