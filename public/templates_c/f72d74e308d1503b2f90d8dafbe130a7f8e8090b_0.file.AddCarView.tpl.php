<?php
/* Smarty version 4.1.0, created on 2022-06-06 10:47:16
  from 'C:\xampp\htdocs\amelia\app\views\AddCarView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629dbf1486c3e1_89064921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f72d74e308d1503b2f90d8dafbe130a7f8e8090b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\AddCarView.tpl',
      1 => 1654459445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629dbf1486c3e1_89064921 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_951868103629dbf14707f40_41092198', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_487881604629dbf14709202_68809926', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23234486629dbf1476ecc7_83198124', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_admin.tpl");
}
/* {block 'end'} */
class Block_951868103629dbf14707f40_41092198 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_951868103629dbf14707f40_41092198',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_487881604629dbf14709202_68809926 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_487881604629dbf14709202_68809926',
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
class Block_23234486629dbf1476ecc7_83198124 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_23234486629dbf1476ecc7_83198124',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section class="wrapper style1">
					<div class="container">
						<div id="content">

								<article>
									<header>
										<h2>Dodaj nowy pojazd</h2> </br>

										
									</header>

                                    <section class="col-6 col-12-narrower">
										
										<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
saveAddCar" method="post">
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

												<div class="col-12">
													<ul class="actions">
														<li><input type="submit" class="button" value="Zapisz zmiany" /></li>
                                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
SearchCar" class="button alt">Powrót</a> </li>
													</ul>
												</div>
											</div>
										</form>
                                        <br>
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
									
								</article>

						</div>
					</div>
				</section>

<?php
}
}
/* {/block 'content'} */
}
