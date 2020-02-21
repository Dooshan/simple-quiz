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
      <form action="add.php" method="post">
        <p>
          <label>Question number: </label>
          <input type="number" name="question_number">
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
        <input type="submit" value="Submit">
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