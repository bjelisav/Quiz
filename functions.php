<?php
function pageTop(){
  session_start();
  include('connection.php');
  include('header.php');
}

function pageBottom(){
  include('footer.php');
  mysqli_close($db);
}
