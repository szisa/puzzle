<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 2,
  "next" => "/next.php"
));

$p->header();
?>
    <section>
      <div class="puzzle">
        <span class="tip">嗯啊~那么下一关又在哪儿呢？</span>
      </div>
      <a href="<?=$p->next?>" style="color:white;text-align:right;display:block;">下一关>> </a>
    </section>
<?php
$p->footer();
?>
