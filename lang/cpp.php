<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 4,
  "title" => "Source Code",
  "next" => "program.php"
));

$p->header();
?>
    <section>
      <div class="puzzle">
        <span class="tip">Great! 题目会越来越难哦~有信心找到下一关吗？</span>
        <p><img src="/images/sculpture.jpg" /></p>
      </div>
    </section>
<?php
$p->footer();
?>




























<!-- 不错嘛~ 下一关是 <?=$p->next?> -->
