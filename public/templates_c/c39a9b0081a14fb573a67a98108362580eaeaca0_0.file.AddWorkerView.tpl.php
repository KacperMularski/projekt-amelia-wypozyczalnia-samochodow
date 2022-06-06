<?php
/* Smarty version 4.1.0, created on 2022-06-06 20:16:20
  from 'C:\xampp\htdocs\amelia\app\views\AddWorkerView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629e4474966dd7_21163650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c39a9b0081a14fb573a67a98108362580eaeaca0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\AddWorkerView.tpl',
      1 => 1654516525,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629e4474966dd7_21163650 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1888634387629e4474942da2_84143139', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1581885163629e4474943709_63728170', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_436624766629e4474947c57_78338977', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_admin.tpl");
}
/* {block 'end'} */
class Block_1888634387629e4474942da2_84143139 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_1888634387629e4474942da2_84143139',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_1581885163629e4474943709_63728170 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_1581885163629e4474943709_63728170',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
SearchUser">Użytkownicy</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
SearchRent">Wypożyczenia</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
SearchCar">Samochody</a></li>
    <li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
SearchWorker">Pracownicy</a></li>
    
<?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_436624766629e4474947c57_78338977 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_436624766629e4474947c57_78338977',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section class="wrapper style1">
					<div class="container">
						<div id="content">

								<article>
									<header>
										<h2>Dodawanie nowego pracownika</h2>
										
									</header>

									<section class="col-6 col-12-narrower">
										
										<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
saveAddWorker" method="post">
											<div class="row gtr-50">
												<div class="col-6 col-12-mobilep">
													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->placowka))) {?>
												    	<input id="id_placowka" type="text" name="placowka" placeholder="Placówka (ID)"/>
													<?php }?>
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->placowka))) {?>
														<input id="id_placowka" type="text" name="placowka" placeholder="Placówka (ID)" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->placowka;?>
"/>
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
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->miasto))) {?>
														<input id="id_miasto" type="text"  name="miasto"  placeholder="Miasto" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->miasto;?>
" />
													<?php }?>
													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->miasto))) {?>
														<input id="id_miasto" type="text"  name="miasto"  placeholder="Miasto" />
													<?php }?>

												</div>

                                                <div class="col-6 col-12-mobilep">
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->ulica))) {?>
														<input id="id_ulica" type="text"  name="ulica"  placeholder="Ulica" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->ulica;?>
" />
													<?php }?>
													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->ulica))) {?>
														<input id="id_ulica" type="text"  name="ulica"  placeholder="Ulica" />
													<?php }?>

												</div>

                                                <div class="col-6 col-12-mobilep">
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->nr_domu_miesz))) {?>
														<input id="id_nr_domu_miesz" type="text"  name="nr_domu_miesz"  placeholder="Nr domu/mieszkania" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->nr_domu_miesz;?>
" />
													<?php }?>
													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->nr_domu_miesz))) {?>
														<input id="id_nr_domu_miesz" type="text"  name="nr_domu_miesz"  placeholder="Nr domu/mieszkania" />
													<?php }?>

												</div>

                                                 <div class="col-6 col-12-mobilep">
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->kod_pocz))) {?>
														<input id="id_kod_pocz" type="text"  name="kod_pocz"  placeholder="Kod pocztowy" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kod_pocz;?>
" />
													<?php }?>
													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->kod_pocz))) {?>
														<input id="id_kod_pocz" type="text"  name="kod_pocz"  placeholder="Kod pocztowy" />
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
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->nip))) {?>
														<input id="id_nip" type="text"  name="nip"  placeholder="NIP" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->nip;?>
" />
													<?php }?>
													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->nip))) {?>
														<input id="id_nip" type="text"  name="nip"  placeholder="NIP" />
													<?php }?>

												<br>
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->data_zatrud))) {?>
													Data zatrudnienia:	<input id="id_data_zatrud" type="date"  name="data_zatrud" placeholder="Data_urodzenia" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->data_zatrud;?>
" />
													<?php }?>
													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->data_zatrud))) {?>
													Data zatrudnienia:	<input id="id_data_zatrud" type="date"  name="data_zatrud" placeholder="Data_urodzenia" />
													<?php }?>

                                                    
                                                </div>

                                                <div class="col-6 col-12-mobilep">                                                     
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->data_ur))) {?>
													Data urodzenia:  	<input id="id_data_ur" type="date"  name="data_ur" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->data_ur;?>
" />
													<?php }?>
													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->data_ur))) {?>
													Data urodzenia:	  <input id="id_data_ur" type="date"  name="data_ur"  />
													<?php }?>
												</div>
                                                
												<div class="col-12">
												<br><ul class="actions">
														<li><input type="submit" class="button" value="Zapisz zmiany" /></li>
                                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
SearchWorker" class="button alt">Powrót</a> </li>
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
