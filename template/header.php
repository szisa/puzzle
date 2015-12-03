<!DOCTYPE HTML>
<html>
<head>
  <meta charset="<?=$this->unicode?>" />
  <meta name="robots" content="noindex, nofollow, nosnippet, noarchive">
  <title>Online Puzzle! - <?=($this->stage == 0) ? "Game Rule" : "Stage ".$this->stage?><?=("" == $this->title ? "" : " - ")?><?=$this->title?></title>
  <link type="text/css" rel="stylesheet" href="/css/common.css" />
  <script type="text/javascript" src="/js/common.js"></script>
</head>
<body>
  <form action="" method="post">
    <header>
      <h1 class="title">Online Puzzle! <br/> <?=($this->stage == 0) ? "Game Rule" : "Stage ".$this->stage?></h1>
    </header>
