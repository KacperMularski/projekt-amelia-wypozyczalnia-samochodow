<?php
/* Smarty version 4.1.0, created on 2022-05-15 15:19:11
  from 'C:\xampp\htdocs\amelia\app\views\ErrorPageView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6280fdcf22aea5_87608813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2c02f3a6529146cf754cde3dac16d6b937d02df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\ErrorPageView.tpl',
      1 => 1652620747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6280fdcf22aea5_87608813 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19250403096280fdcf21deb9_86877511', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6705674566280fdcf21e896_50967530', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14708387706280fdcf222309_71649528', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_19250403096280fdcf21deb9_86877511 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_19250403096280fdcf21deb9_86877511',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_6705674566280fdcf21e896_50967530 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_6705674566280fdcf21e896_50967530',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
">Strona główna</a></li>
    <li><a href="right-sidebar.html">Wypożycz</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
offer_page">Oferta</a></li>
    <li><a href="#">Rejestracja</a></li>
    <li><a href="left-sidebar.html">Kontakt</a></li>
    
    



<?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_14708387706280fdcf222309_71649528 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14708387706280fdcf222309_71649528',
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
										<?php if ($_smarty_tpl->tpl_vars['msgs']->value->getMessages()) {?>
										<h3> Błędy: </h3>
										<ol class="errors">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
										<li>
		
														<?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>
														
														<?php }?>
											<?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>

											</br></li>

										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</ol>
										<?php }?>
										
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
