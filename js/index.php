<?php
  session_start();
  header("Content-Type:text/javascript;");
  echo "window.onload=function(){";
  $stage = -1;
  if(isset($_SESSION["stage"])) $stage = $_SESSION["stage"];
  switch ($stage) {
    default:
      break;
  }

  if(isset($_SESSION["jsCode"]))
  {
    echo "\r\n\t{$_SESSION['jsCode']}";
  }

  echo "\r\n}";
