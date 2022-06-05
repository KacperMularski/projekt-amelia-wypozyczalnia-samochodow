<?php
/* Smarty version 4.1.0, created on 2022-06-05 21:16:43
  from 'C:\xampp\htdocs\amelia\app\views\EditCarView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629d011bdc22a5_65948884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1942837f21c28748522a4034594b4a110e5651a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\EditCarView.tpl',
      1 => 1654454857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629d011bdc22a5_65948884 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1239296521629d011bd9b906_66264380', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_804808877629d011bd9c6c0_95658140', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114517627629d011bda0cf1_26096197', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_admin.tpl");
}
/* {block 'end'} */
class Block_1239296521629d011bd9b906_66264380 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_1239296521629d011bd9b906_66264380',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_804808877629d011bd9c6c0_95658140 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_804808877629d011bd9c6c0_95658140',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
SearchUser">Użytkownicy</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
SearchRent">Wypożyczenia</a></li>
    <li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
SearchCar">Samochody</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
SearchWorker">Pracownicy</a></li>
     
<?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_114517627629d011bda0cf1_26096197 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_114517627629d011bda0cf1_26096197',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section class="wrapper style1">
					<div class="container">
						<div id="content">

								<article>
									<header>
										<h2>Edytuj pojazd</h2> </br>

										
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
										
										<form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'saveEditCar','id'=>$_smarty_tpl->tpl_vars['form']->value->id),$_smarty_tpl ) );?>
" method="post">
											<div class="row gtr-50">
												<div class="col-6 col-12-mobilep">
													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->marka))) {?>
												    	<input id="id_marka" type="text" name="marka" placeholder="Marka"/>
													<?php }?>
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->marka))) {?>
														<input id="id_marka" type="text" name="marka" placeholder="Marka" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->marka;?>
"/>
													<?php }?>
												</div>
												
												<div class="col-6 col-12-mobilep">
												<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->model))) {?>
													<input id="id_model" type="text" name="model" placeholder="Model" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->model;?>
" />
												<?php }?>
												<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->model))) {?>
													<input id="id_model" type="text" name="model" placeholder="Model" />
												<?php }?>
												</div>

												<div class="col-6 col-12-mobilep">
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->miasto))) {?>
														<input id="id_miasto" type="text"  name="miasto" placeholder="ID Placówki" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->miasto;?>
" />
													<?php }?>
													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->miasto))) {?>
														<input id="id_miasto" type="text"  name="miasto" placeholder="ID Placówki" />
													<?php }?>
												</div>
											
												<div class="col-6 col-12-mobilep">
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->rok))) {?>
														<input id="id_rok" type="text"  name="rok"  placeholder="Rok produkcji" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->rok;?>
" />
													<?php }?>
													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->rok))) {?>
														<input id="id_rok" type="text"  name="rok"  placeholder="Rok produkcji" />
													<?php }?>

												</div>

                                                <div class="col-6 col-12-mobilep">
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->silnik))) {?>
														<input id="id_silnik" type="text"  name="silnik"  placeholder="Pojemność silnika" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->silnik;?>
" />
													<?php }?>
													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->silnik))) {?>
														<input id="id_silnik" type="text"  name="silnik"  placeholder="Pojemność silnika" />
													<?php }?>
												</div>

                                                <div class="col-6 col-12-mobilep">
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->paliwo))) {?>
														<input id="id_paliwo" type="text"  name="paliwo"  placeholder="Rodzaj paliwa" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->paliwo;?>
" />
													<?php }?>
													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->paliwo))) {?>
														<input id="id_paliwo" type="text"  name="paliwo"  placeholder="Rodzaj paliwa" />
													<?php }?>
												</div>

                                                <div class="col-6 col-12-mobilep">
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->wypozyczony))) {?>
														<input id="id_wypozyczony" type="text"  name="wypozyczony"  placeholder="Czy wypożyczony" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->wypozyczony;?>
" />
													<?php }?>
													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->wypozyczony))) {?>
														<input id="id_wypozyczony" type="text"  name="wypozyczony"  placeholder="Czy wypożyczony" />
													<?php }?>
												</div>

                                                <div class="col-6 col-12-mobilep">
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->cena))) {?>
														<input id="id_cena" type="text"  name="cena"  placeholder="Cena za dobę" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->cena;?>
" />
													<?php }?>
													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->cena))) {?>
														<input id="id_cena" type="text"  name="cena"  placeholder="Cena za dobę" />
													<?php }?>
												</div>

                                                <div class="col-6 col-12-mobilep">
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->miejsca))) {?>
														<input id="id_miejsca" type="text"  name="miejsca"  placeholder="Ilość miejsc" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->miejsca;?>
" />
													<?php }?>
													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->miejsca))) {?>
														<input id="id_miejsca" type="text"  name="miejsca"  placeholder="Ilość miejsc" />
													<?php }?>
												</div>

                                                <div class="col-6 col-12-mobilep">
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->skrzynia))) {?>
														<input id="id_skrzynia" type="text"  name="skrzynia"  placeholder="Skrzynia biegów" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->skrzynia;?>
" />
													<?php }?>
													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->skrzynia))) {?>
														<input id="id_skrzynia" type="text"  name="skrzynia"  placeholder="Skrzynia biegów" />
													<?php }?>
												</div>

                                                <div class="col-6 col-12-mobilep">
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->img))) {?>
														<input id="id_img" type="text"  name="img"  placeholder="Obrazek" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->img;?>
" />
													<?php }?>
													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->img))) {?>
														<input id="id_img" type="text"  name="img"  placeholder="Obrazek" />
													<?php }?>
												</div>

                                                <div class="col-6 col-12-mobilep">
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->aktywny))) {?>
														<input id="id_aktywny" type="text"  name="aktywny"  placeholder="Aktywny" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->aktywny;?>
" />
													<?php }?>
													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->aktywny))) {?>
														<input id="id_aktywny" type="text"  name="aktywny"  placeholder="Aktywny" />
													<?php }?>
												</div>

                                                

												<div class="col-12">
													<ul class="actions">
														<li><input type="submit" class="button" value="Zapisz zmiany" /></li>
                                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
SearchCar" class="button alt">Powrót</a> </li>
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
