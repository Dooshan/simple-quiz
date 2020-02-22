<?php 
require_once 'database.php';
if(isset($_POST['submit'])) {
  
  //Get posted variables 
  $question_number = $_POST['question_number'];
  $question_text = $_POST['question_text'];
  $correct_choice = $_POST['correct_choice'];

  //Creating choices array 
  $choices = [];
  $choices[1] = $_POST['choice1'];
  $choices[2] = $_POST['choice2'];
  $choices[3] = $_POST['choice3'];
  $choices[4] = $_POST['choice4'];
  $choices[5] = $_POST['choice5'];

  // Inserting Question query
  $query = "INSERT INTO `questions` (question_number, text) VALUES ('$question_number', '$question_text')" ; 
  $insert_row = $conn->query($query) or die($conn->error.__LINE__);

  // Validate insert choices
  if($insert_row) {
    foreach ($choices as $choice => $answer) {
      if($answer != "") {
        if ($correct_choice == $choice) {
          $is_correct = 1;
        } else {
          $is_correct = 0;
        }
        //Choice query 
        $query = "INSERT INTO `choices` (question_number, is_correct, text) VALUES ('$question_number', '$is_correct', '$answer')" ;
        $insert_row = $conn->query($query) or die($conn->error.__LINE__); 
      }
      // Validate insert 
      if($insert_row) {
        continue;
      }else {
        die('Greska'. $conn->error);
      }
    } 
    $msg = "Question has been added ";
  }
}
$sql = "SELECT * FROM questions";
$result = $conn->query($sql);
$total_question = $result->num_rows;
$next = $total_question+1;
echo $next; 


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
      <h2>Add a question</h2>
      <?php 
      if(isset($msg)) {
        echo "<p>$msg</p>";
      }
      ?>
      <form action="add.php" method="post">
        <p>
          <label>Question number: </label>
          <input type="number" name="question_number" value="<?= $next; ?>">
        </p>
        <p>
          <label>Question text: </label>
          <input type="text" name="question_text">
        </p>
        <p>
          <label>Choice #1</label>
          <input type="text" name="choice1">
        </p>
        <p>
          <label>Choice #2</label>
          <input type="text" name="choice2">
        </p>
        <p>
          <label>Choice #3</label>
          <input type="text" name="choice3">
        </p>
        <p>
          <label>Choice #4</label>
          <input type="text" name="choice4">
        </p>
        <p>
          <label>Choice #5</label>
          <input type="text" name="choice5">
        </p>
        <p>
          <label>Correct Choice Number: </label>
          <input type="text" name="correct_choice">
        </p>
        <input type="submit"  name = "submit" value="Submit">
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