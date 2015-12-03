<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 3,
  "next" => "/lang/cpp.php"
));

$p->header();
?>
    <section>
      <div class="puzzle">
        <span class="tip">不错哟~再接再厉！现在下一关又在哪儿？</span>
      </div>
      <a href="<?=$p->next?>" style="display:none;">下一关>> </a>
    </section>
<?php
$p->footer();
?>
