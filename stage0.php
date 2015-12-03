<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 0,
  "next" => "/stage1.php"
));

$p->header();
?>
    <section>
      <div class="puzzle">
        <div class="rule">
          <ol>
            <li>这个游戏的目标就只有一个：进入下一关。在大部份关卡中，你需要利用网页上的提示来找到密码并进入下一关。找到密码后，把密码放到网址中即可过关：http://puzzle.sxisa.com/folder/answer.php</li>
            <li>部分关卡的密码是填入密码框中，如果密码正确，提交网页后就会直接进入下一关。</li>
            <li>在不少的关卡中，你需要利用 <a href="http://www.google.com/">Google</a> 来搜寻数据以破关。<a href="https://www.wikipedia.org/">Wikipedia</a>(即维基百科)里也许也有较直接的信息。</li>
          </ol>
          <p>那么，<a href="<?=$p->next?>" title="Let's make fun~">就开始吧~</a>Let's make fun~</p>
        </div>
      </div>
    </section>
<?php
$p->footer($p);
?>
