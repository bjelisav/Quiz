<?php
session_start();
if (empty($_SESSION)) {
  header('index.php');
}
include('connection.php');
include('adminHeader.php');

 ?>
<div class="col-lg-4 col-lg-offset-4">
  <div class="row">
    <form class="form" action="addAdminMethod.php" method="post" >
      <input type="text" name="username" value="" placeholder="username" class="form-control"><br>
      <input type="password" name="password" value="" placeholder="username" class="form-control"><br>
      <input type="submit" name="saveadmin" value="Add Admin" class="btn btn-success form-control">
    </form>
  </div>
</div>


<?php
include('footer.php');
mysqli_close($db);
 ?>
