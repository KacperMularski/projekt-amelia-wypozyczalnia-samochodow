<?php
/* Smarty version 4.1.0, created on 2022-06-06 13:10:00
  from 'C:\xampp\htdocs\amelia\app\views\AddUserView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629de088408bf3_73103737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bccfada1fd899d20100feb1d1ce3dc3b34593271' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\AddUserView.tpl',
      1 => 1654505939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629de088408bf3_73103737 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_808316670629de0883ec069_52639529', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_986797293629de0883eca13_80255028', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_867618007629de0883f1041_90467983', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_admin.tpl");
}
/* {block 'end'} */
class Block_808316670629de0883ec069_52639529 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_808316670629de0883ec069_52639529',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_986797293629de0883eca13_80255028 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_986797293629de0883eca13_80255028',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
SearchUser">Użytkownicy</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
SearchRent">Wypożyczenia</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
SearchCar">Samochody</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
SearchWorker">Pracownicy</a></li>
    
<?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_867618007629de0883f1041_90467983 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_867618007629de0883f1041_90467983',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section class="wrapper style1">
					<div class="container">
						<div id="content">

								<article>
									<header>
										<h2>Dodawanie nowego użytkownika</h2>
										
									</header>

									<section class="col-6 col-12-narrower">
										
										<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
saveAddUser" method="post">
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
													<input id="id_pass" type="password"  name="pass" placeholder="Hasło" />
												</div>
											
											
												<div class="col-6 col-12-mobilep">
													<input id="id_pass_repeat" type="password"  name="pass_repeat"  placeholder="Powtórz hasło" />
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
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->rola))) {?>
														<input id="id_rola" type="text"  name="rola"  placeholder="Rola" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->rola;?>
" />
													<?php }?>
													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->rola))) {?>
														<input id="id_rola" type="text"  name="rola"  placeholder="Rola" />
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
														<li><input type="submit" class="button" value="Dodaj" /></li>
                                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
SearchUser" class="button alt">Powrót</a> </li>
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
									
								</article>

						</div>
					</div>
				</section>

<?php
}
}
/* {/block 'content'} */
}
