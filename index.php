<?php include('header.php') ?>

<div class="well col-lg-6 col-lg-offset-3 text-center jumbotron">
  <h2>Dobro dosli u Quiz!</h2>
</div>
<div class="container col-lg-6 col-lg-offset-3">
  <div class="row">
    <div class="well">
      <form class="form-group" action="quiz.php" method="post">
        <input type="submit" name="category" value="Sport" class="btn btn-primary form-control category"><br>
        <input type="submit" name="category" value="Istorija" class="btn btn-primary form-control category"><br>
        <input type="submit" name="category" value="All" class="btn btn-primary form-control category"><br>
      </form>
    </div>
    <a href="index.php" type="button" id="start" class="btn btn-default col-lg-6 col-lg-offset-3 text-center">Start Again</a>
  </div>
</div>


<?php include('footer.php') ?>
