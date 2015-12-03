<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 5,
  "next" => "/helloworld/more.php",
  "passwd" => "21fbd4a1acbdaf6f37e3eb01aebcf181ddcae1f8"
));

if($p->check())
{
  $p->next();
}

setcookie("passwd", $p->passwd, time() + 600);

$p->header();
?>
    <section>
      <div class="puzzle">
        <p class="tip">也许你没看到，但我已经告诉你密码了</p>
      </div>
      <div class="passwd">
        <input type="text" name="passwd" id="passwd"/>
        <input type="submit" name="Submit" value="确认密码">
      </div>
    </section>
<?php
$p->footer();
?>
