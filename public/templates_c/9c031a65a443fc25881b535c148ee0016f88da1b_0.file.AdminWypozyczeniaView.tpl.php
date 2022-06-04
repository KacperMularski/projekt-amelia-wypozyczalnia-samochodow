<?php
/* Smarty version 4.1.0, created on 2022-06-04 13:26:22
  from 'C:\xampp\htdocs\amelia\app\views\AdminWypozyczeniaView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629b415e164d16_66088298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c031a65a443fc25881b535c148ee0016f88da1b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\AdminWypozyczeniaView.tpl',
      1 => 1654341965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629b415e164d16_66088298 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_631516706629b415e15fa49_74038685', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2066617444629b415e160363_83271837', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1614049794629b415e1647c4_96726682', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_admin.tpl");
}
/* {block 'end'} */
class Block_631516706629b415e15fa49_74038685 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_631516706629b415e15fa49_74038685',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_2066617444629b415e160363_83271837 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_2066617444629b415e160363_83271837',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
adminUzytkownicyPage">Użytkownicy</a></li>
    <li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
adminWypozyczeniaPage">Wypożyczenia</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
adminSamochodyPage">Samochody</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
adminPracownicyPage">Pracownicy</a></li>
     
<?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_1614049794629b415e1647c4_96726682 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1614049794629b415e1647c4_96726682',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<?php
}
}
/* {/block 'content'} */
}
