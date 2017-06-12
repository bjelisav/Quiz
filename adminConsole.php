<?php
session_start();
if (empty($_SESSION)) {
  header('index.php');
}
include('adminHeader.php');
include('connection.php');
 ?>

<div class="well col-md-4 col-md-offset-4 text-center">
  <h2>Welcome Admin</h2>
</div>


<?php
include('footer.php');
 ?>
