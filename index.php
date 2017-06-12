<?php include('header.php') ?>

<div class="well col-lg-6 col-lg-offset-3 text-center jumbotron">
  <h2>Dobro dosli u Quiz!</h2>
</div>
<div class="container col-lg-6 col-lg-offset-3">
  <div class="row">
    <div class="well">
      <form class="form-group" action="quiz.php" method="post">
        <input type="submit" name="Sport" value="Sport" class="btn btn-primary form-control"><br>
        <input type="submit" name="Istorija" value="Istorija" class="btn btn-primary form-control"><br>
        <input type="submit" name="Sve" value="Sve" class="btn btn-primary form-control"><br>
      </form>
    </div>
  </div>
</div>


<?php include('footer.php') ?>
