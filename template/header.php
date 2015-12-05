<?php
session_start();

include($_SERVER['DOCUMENT_ROOT']."/template/config.php");

$_SESSION["stage"] = $this->stage;
unset($_SESSION["jsCode"]);
if($this->jsCode != "") $_SESSION["jsCode"] = $this->jsCode;

?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="<?=$this->unicode?>" />
  <meta name="robots" content="noindex, nofollow, nosnippet, noarchive">
  <title><?=$_CONFIG["name"]?> - <?=($this->stage == 0) ? "Game Rule" : "Stage ".$this->stage?><?=("" == $this->title ? "" : " - ")?><?=$this->title?></title>
  <link type="text/css" rel="stylesheet" href="/css/common.css" />
  <script type="text/javascript" src="/js/?/common.js"></script>
</head>
<body>
  <form action="" method="post">
    <header>
      <h1 class="title"><?=$_CONFIG["name"]?> <br/> <?=($this->stage == 0) ? "Game Rule" : "Stage ".$this->stage?></h1>
    </header>
