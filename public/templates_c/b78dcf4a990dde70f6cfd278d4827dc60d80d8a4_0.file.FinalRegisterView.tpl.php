<?php
/* Smarty version 4.1.0, created on 2022-05-11 15:59:08
  from 'C:\xampp\htdocs\amelia\app\views\FinalRegisterView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627bc12c3a6a10_10938501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b78dcf4a990dde70f6cfd278d4827dc60d80d8a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\FinalRegisterView.tpl',
      1 => 1652274078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627bc12c3a6a10_10938501 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1973519185627bc12c3a21c0_53446732', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1526786944627bc12c3a2b49_00397737', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1133122955627bc12c3a5e09_98016371', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_1973519185627bc12c3a21c0_53446732 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_1973519185627bc12c3a21c0_53446732',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_1526786944627bc12c3a2b49_00397737 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_1526786944627bc12c3a2b49_00397737',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
">Strona główna</a></li>
    <li><a href="right-sidebar.html">Wypożycz</a></li>
    <li><a href="two-sidebar.html">Galeria</a></li>
    <li class="current"><a href="#">Rejestracja</a></li>
    <li><a href="left-sidebar.html">Kontakt</a></li>
    
    



<?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_1133122955627bc12c3a5e09_98016371 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1133122955627bc12c3a5e09_98016371',
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
										<h1>Utworzono pomyślnie konto!</h1> </br>
                                        <h1><ul><li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login_page">Kliknij tutaj aby przejść na stronę logowania</a></li></ul></h1>
										
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
