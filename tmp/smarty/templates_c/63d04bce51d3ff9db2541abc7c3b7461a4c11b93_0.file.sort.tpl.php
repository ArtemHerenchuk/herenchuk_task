<?php
/* Smarty version 3.1.29, created on 2016-11-22 18:42:23
  from "C:\OpenServer\domains\SamsonOS\views\default\sort.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5834675f339756_98496883',
  'file_dependency' => 
  array (
    '63d04bce51d3ff9db2541abc7c3b7461a4c11b93' => 
    array (
      0 => 'C:\\OpenServer\\domains\\SamsonOS\\views\\default\\sort.tpl',
      1 => 1479829160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5834675f339756_98496883 ($_smarty_tpl) {
?>
<div id="sort">
    <div class="menuCaption showHidden" onclick="showSortBox();"><h3>Сортировать</h3></div>
</div>
<div id="sortForm">
    <input type="radio" name="sort" value="0">  <b>Сортировка по дате в порядке возростания</b></br>
    <input type="radio" name="sort" value="1">  <b>Сортировка по дате в порядке спадания</b></br>
    <input type="radio" name="sort" value="2">  <b>Сортировка по размеру в порядке возростания</b></br>
    <input type="radio" name="sort" value="3">  <b>Сортировка по размеру в порядке спадания</b></br></br>
    <input type="submit"  value="Погнали!">
</div>

<div id="CenterColumn"><?php }
}
