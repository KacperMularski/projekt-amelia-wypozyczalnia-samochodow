<?php
/* Smarty version 4.1.0, created on 2022-06-02 11:50:30
  from 'C:\xampp\htdocs\amelia\app\views\PasswordChangeView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629887e6c70823_54722324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88c5dc386ae6d1a8a2e54169f1418e6141d7859c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\PasswordChangeView.tpl',
      1 => 1654100730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629887e6c70823_54722324 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_677990908629887e6c61bf6_05849475', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_361404677629887e6c62ad5_54782831', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_525518301629887e6c69285_89213042', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_677990908629887e6c61bf6_05849475 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_677990908629887e6c61bf6_05849475',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_361404677629887e6c62ad5_54782831 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_361404677629887e6c62ad5_54782831',
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
class Block_525518301629887e6c69285_89213042 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_525518301629887e6c69285_89213042',
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
										<h2>Edytuj hasło</h2> </br>
										
									</header>

                                    

                                    <section class="col-6 col-12-narrower">
										
										<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
savePasswordChange" method="post">
											<div class="row gtr-50">
												<div class="col-6 col-12-mobilep">
													<input id="id_old_pass" type="password"  name="old_pass" placeholder="Wprowadź obecne hasło" />	
												</div>
                                            </div> </br>
                                            <div class="row gtr-50">

                                                <div class="col-6 col-12-mobilep">
													<input id="id_new_pass" type="password"  name="new_pass" placeholder="Wprowadź nowe hasło" />	
												</div>
                                            </div> </br>
                                            <div class="row gtr-50">

                                                <div class="col-6 col-12-mobilep">
													<input id="id_new_pass_repeat" type="password"  name="new_pass_repeat" placeholder="Wprowadź ponownie nowe hasło" />	
												</div>
                                            </div></br>
												
												<div class="col-12">
													<ul class="actions">
														<li><input type="submit" class="button" value="Zmień hasło" /></li>
                                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personEdit" class="button alt">Powrót</a> </li>
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
