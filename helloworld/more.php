<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 6,
  "next" => "/helloworld/more.php",
));

if($p->check())
{
  $p->next();
}

$p->header();
?>
    <section>
      <div class="puzzle">
        <p class="tip">此处已是驿站，更远路途有待开发。</p>
        <p>这是最后一关了（暂时）~</p>
      </div>
    </section>
<?php
$p->footer();
?>
