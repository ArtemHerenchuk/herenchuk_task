<?php
/* Smarty version 3.1.29, created on 2016-11-23 06:57:58
  from "C:\OpenServer\domains\Samson\views\default\sort.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_583513c6bca775_85203746',
  'file_dependency' => 
  array (
    'b3087175319fd2785aa3a500d9cef9d881cdea3b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Samson\\views\\default\\sort.tpl',
      1 => 1479870733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583513c6bca775_85203746 ($_smarty_tpl) {
?>
<div id="sort">
    <div class="menuCaption showHidden" onclick="showSortBox();"><h3>Сортировать</h3></div>
</div>
<div id="sortForm">
    <input type="radio" name="sort" value="0">  <b>Сортировка по дате в порядке возростания</b></br>
    <input type="radio" name="sort" value="1">  <b>Сортировка по дате в порядке спадания</b></br>
    <input type="radio" name="sort" value="2">  <b>Сортировка по размеру в порядке возростания</b></br>
    <input type="radio" name="sort" value="3">  <b>Сортировка по размеру в порядке спадания</b></br></br>
    <input type="submit"  id="sortSubmit" value="Вперед!">
</div>

<div id="CenterColumn"><?php }
}
