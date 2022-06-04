<?php
/* Smarty version 4.1.0, created on 2022-06-04 13:27:51
  from 'C:\xampp\htdocs\amelia\app\views\AdminSamochodyView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629b41b7225cc0_08033362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8caf414c29c75daf523ff2e17a39298a80c4a04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\AdminSamochodyView.tpl',
      1 => 1654341944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629b41b7225cc0_08033362 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1740763394629b41b72209f9_13317356', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1013663444629b41b7221329_42777013', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1989529077629b41b7225762_68495854', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_admin.tpl");
}
/* {block 'end'} */
class Block_1740763394629b41b72209f9_13317356 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_1740763394629b41b72209f9_13317356',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_1013663444629b41b7221329_42777013 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_1013663444629b41b7221329_42777013',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
adminUzytkownicyPage">Użytkownicy</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
adminWypozyczeniaPage">Wypożyczenia</a></li>
    <li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
adminSamochodyPage">Samochody</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
adminPracownicyPage">Pracownicy</a></li>
     
<?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_1989529077629b41b7225762_68495854 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1989529077629b41b7225762_68495854',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<?php
}
}
/* {/block 'content'} */
}
