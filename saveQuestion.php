<?php
session_start();
include('connection.php');

if (!empty($_POST['question']) && !empty($_POST['option1']) && !empty($_POST['option2']) && !empty($_POST['option3']) && !empty($_POST['option4']) && !empty($_POST['answer']) && !empty($_POST['category']) && !empty($_POST['points'])) {

  $question =  $_POST['question'];
  $option1 = $_POST['option1'];
  $option2 = $_POST['option2'];
  $option3 = $_POST['option3'];
  $option4 = $_POST['option4'];
  $answer = $_POST['answer'];
  $category = $_POST['category'];
  $points = $_POST['points'];

  $sql = "INSERT INTO questions (`id`, `question`, `option1`, `option2`, `option3`, `option4`,`answer`, `category`, `points`) VALUES (NULL,'$question','$option1', '$option2','$option3','$option4','$answer','$category','$points')";

  $query = mysqli_query($db,$sql);

  header('Location: addQuestion.php');

}else {
  echo "<h3 class='well'>ALL FIELDS ARE REQUIRED!!!</h3>";
}

mysqli_close($db);
