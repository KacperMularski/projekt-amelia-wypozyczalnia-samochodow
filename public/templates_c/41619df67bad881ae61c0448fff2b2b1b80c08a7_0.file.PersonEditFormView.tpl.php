<?php
/* Smarty version 4.1.0, created on 2022-06-06 20:12:48
  from 'C:\xampp\htdocs\amelia\app\views\PersonEditFormView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629e43a014e4f0_85250003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41619df67bad881ae61c0448fff2b2b1b80c08a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\PersonEditFormView.tpl',
      1 => 1654426317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629e43a014e4f0_85250003 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1604882750629e43a01328c1_68857434', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1069983635629e43a01332e5_15600214', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1968571612629e43a013a0f5_61998005', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_1604882750629e43a01328c1_68857434 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_1604882750629e43a01328c1_68857434',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_1069983635629e43a01332e5_15600214 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_1069983635629e43a01332e5_15600214',
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
SearchUser">Panel Administratora</a></b>
		</li>	
	<?php }?>

<?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_1968571612629e43a013a0f5_61998005 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1968571612629e43a013a0f5_61998005',
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
										<h2>Edytuj dane konta</h2> </br>
										
									</header>

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

                                    <section class="col-6 col-12-narrower">
										
										<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
savePersonEdit" method="post">
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
													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->email))) {?>
														<input id="id_email" type="email"  name="email" placeholder="Email" />
													<?php }?>
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->email))) {?>
														<input id="id_email" type="email"  name="email" placeholder="Email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
" />
													<?php }?>
												</div>
												
												<div class="col-6 col-12-mobilep">
												<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->imie))) {?>
													<input id="id_imie" type="text" name="imie" placeholder="Imie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->imie;?>
" />
												<?php }?>
												<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->imie))) {?>
													<input id="id_imie" type="text" name="imie" placeholder="Imie" />
												<?php }?>
												</div>
												<div class="col-6 col-12-mobilep">
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->nazwisko))) {?>
														<input id="id_nazwisko" type="text"  name="nazwisko" placeholder="Nazwisko" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->nazwisko;?>
" />
													<?php }?>
													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->nazwisko))) {?>
														<input id="id_nazwisko" type="text"  name="nazwisko" placeholder="Nazwisko" />
													<?php }?>
												</div>
											
												<div class="col-6 col-12-mobilep">
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->nr_pr_jazdy))) {?>
														<input id="id_nr_pr_jazdy" type="text"  name="nr_pr_jazdy"  placeholder="Numer prawa jazdy" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->nr_pr_jazdy;?>
" />
													<?php }?>
													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->nr_pr_jazdy))) {?>
														<input id="id_nr_pr_jazdy" type="text"  name="nr_pr_jazdy"  placeholder="Numer prawa jazdy" />
													<?php }?>

												</div>

                                                <div class="col-6 col-12-mobilep">
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->nr_tel))) {?>
														<input id="id_nr_tel" type="text"  name="nr_tel"  placeholder="Numer telefonu" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->nr_tel;?>
" />
													<?php }?>
													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->nr_tel))) {?>
														<input id="id_nr_tel" type="text"  name="nr_tel"  placeholder="Numer telefonu" />
													<?php }?>
												</div>

                                                <div class="col-6 col-12-mobilep">
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->data_ur))) {?>
													Data urodzenia:   <input id="id_data_ur" type="date"  name="data_ur" 
                                                    value="<?php echo $_smarty_tpl->tpl_vars['form']->value->data_ur;?>
" max="2022-05-07" min="1920-01-01" />
													<?php }?>

													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->data_ur))) {?>
													Data urodzenia:   <input id="id_data_ur" type="date"  name="data_ur" 
                                                    value="2022-05-07" max="2022-05-07" min="1920-01-01" />
													<?php }?>
												</div>
											
												<div class="col-12">
													<ul class="actions">
														<li><input type="submit" class="button" value="Zapisz zmiany" /></li>
                                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personEdit" class="button alt">Powrót</a> </li>
													</ul>
												</div>
											</div>
										</form>
                                    
								</article>

						</div>
					</div>
				</section>

<?php
}
}
/* {/block 'content'} */
}
