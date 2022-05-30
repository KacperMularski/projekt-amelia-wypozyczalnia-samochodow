<?php
/* Smarty version 4.1.0, created on 2022-05-30 13:59:12
  from 'C:\xampp\htdocs\amelia\app\views\PaidView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6294b19027bf43_19228701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac82f5c10da8b970592d16c615ecc90a3effa315' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\PaidView.tpl',
      1 => 1653911950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6294b19027bf43_19228701 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17995210016294b190274608_34824723', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12751550846294b1902750f1_64211137', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19437927736294b190279648_99019249', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_17995210016294b190274608_34824723 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_17995210016294b190274608_34824723',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_12751550846294b1902750f1_64211137 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_12751550846294b1902750f1_64211137',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
">Strona główna</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
rent_page">Wypożycz</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
offer_page">Oferta</a></li>
    <li class="current"><a href="#">Rejestracja</a></li>

<?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_19437927736294b190279648_99019249 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19437927736294b190279648_99019249',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section class="wrapper style1">
					<div class="container">
						<div id="content">

							<!-- Content -->

								<article>
									<header>

									
                                    <?php echo $_smarty_tpl->tpl_vars['form']->value->platnosc;?>
 <br>
                                    <?php echo $_smarty_tpl->tpl_vars['form']->value->id_pojazdu;?>
 <br>
                                    <?php echo $_smarty_tpl->tpl_vars['form']->value->placowka;?>
 <br>
                                    <?php echo $_smarty_tpl->tpl_vars['form']->value->rentValue;?>
 <br>
                                    <?php echo $_smarty_tpl->tpl_vars['form']->value->data_wyp;?>
 <br>
                                    <?php echo $_smarty_tpl->tpl_vars['form']->value->data_zw;?>

										
									</header>

									

									<!--<span class="image featured"><img src="images/banner.jpg" alt="" /></span>-->

									
								</article>

						</div>
					</div>
				</section>

<?php
}
}
/* {/block 'content'} */
}
