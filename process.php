<?php include "database.php";
session_start(); 

  $sql = "SELECT * FROM questions";
  $result = $conn->query($sql);
  $total_question = $result->num_rows;
 
  

  //Check to see if score is set
    if(!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
    }

    if (isset($_POST['submit'])) {
      $question_number = $_POST['question_number'];
      $selected_choice = $_POST['choice'];
      $next_question = $question_number+1;

      //Get correct choice 
      $sql = "SELECT * FROM `choices` WHERE  is_correct = 1 AND question_number = $question_number";
      $result = $conn->query($sql);
      $correct_choice = $result->fetch_assoc();
      $answer = $correct_choice['text'];

    
      // Compare 
      if($answer == $selected_choice) {
        $_SESSION['score']++;
      }

      //Check if it is last question
      if($question_number == $total_question) {
        header('Location: final.php');
        die();
      } else {
      header('Location: question.php?n='.$next_question);
      }
    }
  else {
    echo "Please, submit the form!";
  }
  

 