<?php
/* Smarty version 4.1.0, created on 2022-05-23 13:43:42
  from 'C:\xampp\htdocs\amelia\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628b736ecf8915_96163285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a066eb2dc6a0f776f8fa0b87a6dcce7300025da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\LoginView.tpl',
      1 => 1653306145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628b736ecf8915_96163285 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172384584628b736ec77693_33511459', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1188912220628b736ec77ff1_35067236', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_255872901628b736ec7c593_69083766', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_172384584628b736ec77693_33511459 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_172384584628b736ec77693_33511459',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_1188912220628b736ec77ff1_35067236 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_1188912220628b736ec77ff1_35067236',
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
	<li class="current">
        <a href="#">Rejestracja</a>
        <ul>
            
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
register_page">Zarejestruj</a></li>

        </ul>
    </li>

<?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_255872901628b736ec7c593_69083766 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_255872901628b736ec7c593_69083766',
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
										<h2>Logowanie</h2>
										
									</header>

									<section class="col-6 col-12-narrower">
										
										<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
											<div class="row gtr-50">
												<div class="col-6 col-12-mobilep">
													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->login))) {?>
												    	<input id="id_login" type="text" name="login" placeholder="Login"/>
													<?php }?>
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->login))) {?>
														<input id="id_login" type="text" name="login" placeholder="Login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
"/>
													<?php }?>
												</div>

												<div class="col-6 col-12-mobilep">
													<input id="id_pass" type="password"  name="password" placeholder="Hasło" />
												</div>
											
												<div class="col-12">
													<ul class="actions">
														<li><input type="submit" class="button alt" value="Zaloguj" /></li>
													</ul>
												</div>
											</div>
										</form>

										
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

									</section>

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
