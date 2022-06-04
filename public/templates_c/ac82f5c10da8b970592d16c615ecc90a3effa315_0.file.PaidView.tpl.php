<?php
/* Smarty version 4.1.0, created on 2022-06-02 11:49:43
  from 'C:\xampp\htdocs\amelia\app\views\PaidView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629887b72803c3_81110296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac82f5c10da8b970592d16c615ecc90a3effa315' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\PaidView.tpl',
      1 => 1654100725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629887b72803c3_81110296 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1587459710629887b7278b53_19279094', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154270334629887b72794e1_68419024', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1700892164629887b727fe29_21116561', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_1587459710629887b7278b53_19279094 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_1587459710629887b7278b53_19279094',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_154270334629887b72794e1_68419024 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_154270334629887b72794e1_68419024',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
">Strona główna</a></li>
    <li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
rent_page">Wypożycz</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
offer_page">Oferta</a></li>
    <li><a href="#">Rejestracja</a></li>

	<?php if (\core\RoleUtils::inRole("admin")) {?>
		<li><b><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
adminWypozyczeniaPage">Panel Administratora</a></b>
		</li>	
	<?php }?>

<?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_1700892164629887b727fe29_21116561 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1700892164629887b727fe29_21116561',
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

									<h2> Rezerwacja powiodła się pomyślnie !</h2> <br>
									<p> Samochód jest gotowy od odbioru </p>
                                   
										
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
