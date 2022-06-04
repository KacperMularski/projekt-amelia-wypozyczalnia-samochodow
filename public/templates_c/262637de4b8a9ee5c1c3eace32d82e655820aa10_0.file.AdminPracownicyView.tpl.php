<?php
/* Smarty version 4.1.0, created on 2022-06-04 13:27:51
  from 'C:\xampp\htdocs\amelia\app\views\AdminPracownicyView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629b41b791d514_41839545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '262637de4b8a9ee5c1c3eace32d82e655820aa10' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\AdminPracownicyView.tpl',
      1 => 1654341918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629b41b791d514_41839545 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_751173148629b41b7917891_12019631', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1969003380629b41b7918315_68840262', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_724529724629b41b791cf45_16993509', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_admin.tpl");
}
/* {block 'end'} */
class Block_751173148629b41b7917891_12019631 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_751173148629b41b7917891_12019631',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_1969003380629b41b7918315_68840262 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_1969003380629b41b7918315_68840262',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
adminUzytkownicyPage">Użytkownicy</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
adminWypozyczeniaPage">Wypożyczenia</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
adminSamochodyPage">Samochody</a></li>
    <li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
adminPracownicyPage">Pracownicy</a></li>
     
<?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_724529724629b41b791cf45_16993509 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_724529724629b41b791cf45_16993509',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<?php
}
}
/* {/block 'content'} */
}
