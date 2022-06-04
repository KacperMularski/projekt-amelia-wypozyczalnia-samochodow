<?php
/* Smarty version 4.1.0, created on 2022-06-04 17:13:50
  from 'C:\xampp\htdocs\amelia\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629b76ae5e2f18_04078918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a066eb2dc6a0f776f8fa0b87a6dcce7300025da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\LoginView.tpl',
      1 => 1654342022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629b76ae5e2f18_04078918 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_971329536629b76ae5d2641_72677638', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_276737060629b76ae5d2f60_76106686', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_811265596629b76ae5d9f81_83125274', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_971329536629b76ae5d2641_72677638 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_971329536629b76ae5d2641_72677638',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_276737060629b76ae5d2f60_76106686 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_276737060629b76ae5d2f60_76106686',
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

	<?php if (\core\RoleUtils::inRole("admin")) {?>
		<li><b><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
adminUzytkownicyPage">Panel Administratora</a></b>
		</li>	
	<?php }?>

<?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_811265596629b76ae5d9f81_83125274 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_811265596629b76ae5d9f81_83125274',
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
