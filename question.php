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
     <div class="current">Question 1 of 5</div>
     <p class="question">
            What does the initials of PHP stand for?  
     </p>
     <form action="process.php" method="POST">
       <ul class="choices">
         <li><input type="radio" name="choice" value="1">Personal Home Page</li>
         <li><input type="radio" name="choice" value="1">Private Home Page</li>
         <li><input type="radio" name="choice" value="1">Public Home Page</li>
         <li><input type="radio" name="choice" value="1">PHP: Hypertext Preprocessor</li>
       </ul>
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