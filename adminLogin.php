<?php include('header.php') ?>


<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <form class="form" action="checkAdmin.php" method="post">
        <input type="text" name="username" value="" placeholder="username" class="form-control"><br>
        <input type="password" name="password" value="" placeholder="username" class="form-control"><br>
        <input type="submit" name="login" class="btn btn-primary form-control">
      </form>
    </div>

  </div>

</div>


<?php include('footer.php') ?>
