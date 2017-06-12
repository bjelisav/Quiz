<?php
session_start();
if (empty($_SESSION)) {
  header('index.php');
}
include('connection.php');
include('adminHeader.php');
 ?>

<form class="form col-md-6 col-md-offset-3" action="saveQuestion.php" method="post">
  <input type="text" name="question" value="" placeholder="Pitanje" class="form-control"><br>
  <input type="text" name="option1" value="" placeholder="opcija 1" class="form-control"><br>
  <input type="text" name="option2" value="" placeholder="Opcija 2" class="form-control"><br>
  <input type="text" name="option3" value="" placeholder="Opcija 3" class="form-control"><br>
  <input type="text" name="option4" value="" placeholder="Opcija 4" class="form-control"><br>
  <input type="text" name="answer" value="" placeholder="Tacan odgovor" class="form-control"><br>
  <input type="text" name="category" value="" placeholder="kategorija" class="form-control"><br>
  <input type="text" name="points" value="" placeholder="Broj poena" class="form-control"><br>
  <input type="submit" name="savequestion" value="Add Question" class="form-control btn btn-primary">
</form>

<?php
include('footer.php');
mysqli_close($db);
 ?>
