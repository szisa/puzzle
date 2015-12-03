<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 1,
  "next" => "/stage2.php"
));

$p->header();
?>
    <section>
      <div class="puzzle">
        <span class="tip">好啦~赶紧~我们到下一关去吧~</span>
      </div>
    </section>
<?php
$p->footer();
?>
