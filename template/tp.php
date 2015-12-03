<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 0,
  "next" => "",
  "title" => "",
  "passwd" => ""
));

if($p->check())
{
  $p->next();
}

$p->header();
?>
    <section>
      <div class="puzzle">
        <p class="tip"></p>
      </div>
      <div class="passwd">
        <input type="text" name="passwd" id="passwd"/>
        <input type="submit" name="Submit" value="确认密码">
        <!-- 密码提示：<?=encrypt($p->passwd)?> -->
      </div>
    </section>
<?php
$p->footer();

function encrypt($szSrc)
{
	for($i = 0; $i < strlen($szSrc); $i++)
	{
		if(ord($szSrc[$i]) >= ord('a') && ord($szSrc[$i]) <= ord('z')) $szSrc[$i] = chr((ord($szSrc[$i]) - ord('a') + 3) % 26 + ord('a'));
	}
	return $szSrc;
}

?>
