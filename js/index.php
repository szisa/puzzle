<?php
  session_start();
  $stage = -1;
  if(isset($_SESSION["stage"])) $stage = $_SESSION["stage"];
  switch ($stage) {
    default:
      break;
  }

  if(isset($_SESSION["jsCode"]))
  {
    echo "window.onload=function(){\r\n\t{$_SESSION['jsCode']}\r\n}";
  }
 ?>
