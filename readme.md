# 网页解谜框架
这是一个网页解谜开发框架，可以通过此框架快速开发属于自己的网页解谜游戏。页面结构参考了[Arthur's Online Riddle](http://riddle.arthurluk.net)。目前用此框架开发过的网页解谜游戏有[创软网页解谜](http://puzzle.sxisa.com)。

目前共有两种通关种类：a. URL; b. Password。

## 开辟关卡方法
1. 拷贝`template`目录下的tp.php文件到你自己决定路径，并修改名字;
2. 填写关卡编号`stage`，下一关卡路径`next`(选填)，网页title提示`title`(选填)，通关密码`passwd`(选填)等等。
```php
$p = new puzzle(array(
  "stage" => 15,
  "next" => "/folder/stage.php",
  "title" => "Title Tip",
  "passwd" => "Password",
  "unicode" => "utf-8",
  "jsCode" => "alert('javascript');",
  "cssCode" => "#item{display:none;}",
  "feedback" => array(
      "123456" => "额...密码不会这么简单吧...",
      "super" => "嗯~就差一点了~",
    ),
  "sub" => true,
));
```
3. 编写谜面。

## puzzle参数详解
1. `stage` : 目前关卡编号，用于显示在页面告知解谜者。
2. `next` : 下一页面的地址，这里分为两种：  
 - 通过提交密码通关，这里URL必须填写用根域开始的相对目录，使用根域相对路径表示法，例如：`/lang/ruby.php`；  
 - 通过URL方式通关，则根据需要填写即可。
3. `title` : 当需要在网页的`<title>`标签填写提示语时，则设置该项；
4. `passwd` : 选中第b种解谜方式时，则需要填写该项，并且需配合模板中的密码框提交密码。注意不要删除密码检查代码：
```php
if($p->check())
{
  $p->next();
}
```
你也可以针对每个关卡编写自己的检查处理，当`$p->check()`等于true时，表示验证通过。  
5. `unicode` : 指定页面编码，用于特殊关卡。  
6. `jsCode` :  设置*页面加载完成后*执行的js代码，此部分代码不会直接出现在页面中，而是过`script`标签引用外部文件。
7. `cssCode` : 设置关卡的独立css代码，此部分代码不会直接出现在页面中，而是过`link`标签引用外部文件。
8. `feedback` : 设置指定密码feedback，此参数仅可以用于包含密码检查的关卡。参数类型必须为关联数组。数组`key`为密码，`value`为feedback。
9. `sub` : 该值为ture时，表示当前关卡为前一关的子关卡。子关卡将不会显示`header`。

## **部署须知**  
- 网站需部署在根目录或目录要绑定（子）域
