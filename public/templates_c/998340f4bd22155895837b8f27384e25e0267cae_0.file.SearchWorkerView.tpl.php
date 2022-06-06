<?php
/* Smarty version 4.1.0, created on 2022-06-06 13:08:06
  from 'C:\xampp\htdocs\amelia\app\views\SearchWorkerView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629de016d15236_96014825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '998340f4bd22155895837b8f27384e25e0267cae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\SearchWorkerView.tpl',
      1 => 1654511953,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629de016d15236_96014825 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_862116970629de016cf2d94_78582790', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66662372629de016cf3706_03671625', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1668294440629de016cf7fc4_58314884', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_admin.tpl");
}
/* {block 'end'} */
class Block_862116970629de016cf2d94_78582790 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_862116970629de016cf2d94_78582790',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_66662372629de016cf3706_03671625 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_66662372629de016cf3706_03671625',
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
class Block_1668294440629de016cf7fc4_58314884 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1668294440629de016cf7fc4_58314884',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section class="wrapper style1">
					<div class="container">
						<div id="content">

								<article>
									<header>
										<h2>Tabela pracownicy</h2>
										
									</header>

									<section class="col-6 col-12-narrower">
										
										<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
SearchWorker" method="post" id="place">
											<div class="row gtr-50">
												<div class="col-6 col-12-mobilep">
													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->surname_search))) {?>
												    	<input id="id_surname_search" type="text" name="surname_search" placeholder="Nazwisko"/>
													<?php }?>
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->surname_search))) {?>
														<input id="id_surname_search" type="text" name="surname_search" placeholder="Nazwisko" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->surname_search;?>
"/>
													<?php }?>
												
                                                <br>
                                                <b>Placówka</b>
                                                <div class="box">
                                                    <?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->place_search))) {?>
                                                        <select name="place_search" id="id_place_search" form="place">
                                                        <option value="1"> Dowolna </option>
                                                        <option value="2">Dąbrowa Górnicza, ul.Sienkiewicza 2 </option>
                                                        <option value="3">Sosnowiec, ul.Krzywa 5</option>
                                                        <option value="4">Katowice, ul.Piłsudskiego 22</option>
                                                        <option value="5">Warszawa, ul.Złota 13</option>
                                                        <option value="6">Poznań, ul.Korzenna 2</option>
                                                        </select>
                                                    <?php }?>

                                                    <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->place_search))) {?>       
                                                        <select name="place_search" id="id_place_search" form="place"> 

                                                            <?php if ($_smarty_tpl->tpl_vars['form']->value->place_search == 1) {?>
                                                                <option value="1" selected > Dowolna </option>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['form']->value->place_search != 1) {?>
                                                                <option value="1" > Dowolna </option>
                                                            <?php }?>

                                                            <?php if ($_smarty_tpl->tpl_vars['form']->value->place_search == 2) {?>
                                                                <option value="2" selected >Dąbrowa Górnicza, ul.Sienkiewicza 2 </option>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['form']->value->place_search != 2) {?>
                                                                <option value="2" >Dąbrowa Górnicza, ul.Sienkiewicza 2 </option>
                                                            <?php }?>   

                                                            <?php if ($_smarty_tpl->tpl_vars['form']->value->place_search == 3) {?>
                                                                <option value="3" selected>Sosnowiec, ul.Krzywa 5</option>    
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['form']->value->place_search != 3) {?>
                                                                <option value="3">Sosnowiec, ul.Krzywa 5</option>    
                                                            <?php }?>

                                                            <?php if ($_smarty_tpl->tpl_vars['form']->value->place_search == 4) {?>
                                                                <option value="4" selected>Katowice, ul.Piłsudskiego 22</option>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['form']->value->place_search != 4) {?>
                                                                <option value="4">Katowice, ul.Piłsudskiego 22</option>
                                                            <?php }?>

                                                            <?php if ($_smarty_tpl->tpl_vars['form']->value->place_search == 5) {?>
                                                                <option value="5" selected>Warszawa, ul.Złota 13</option>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['form']->value->place_search != 5) {?>
                                                                <option value="5">Warszawa, ul.Złota 13</option>
                                                            <?php }?>

                                                            <?php if ($_smarty_tpl->tpl_vars['form']->value->place_search == 6) {?>
                                                                <option value="6" selected>Poznań, ul.Korzenna 2</option>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['form']->value->place_search != 6) {?>
                                                                <option value="6">Poznań, ul.Korzenna 2</option>
                                                            <?php }?>
                                                
                                                        </select>
                                                    <?php }?>


                                                </div></br>
                                            </div>

											
												<div class="col-12">
													<ul class="actions">
														<li><input type="submit" class="button alt" value="Filtruj" /></li>
                                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
AddWorker" class="button">+ Dodaj pracownika</a></li>
													</ul>
												</div>
											</div>
										</form>

                                        <br>

                                        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->getMessages()) {?>										
										
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
										
		
														<?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>
															<ul class="infos">
															<li><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
															</ul>
														<?php }?>

														<?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>
															<ol class="errors">
																<li><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
															</ol>
														<?php }?>
											
											</br>

										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										
										<?php }?>

										

                                        <table class="pure-table pure-table-bordered">

										<thead>
											<tr> 
												<td>
                                                    <p> ID </p>
												</td> 

                                                <td>
                                                    <p> Miejsce pracy </p>
												</td> 

                                                <td>
                                                    <p> Imie </p>
												</td> 

                                                <td>
                                                    <p> Nazwisko </p>
												</td> 

                                                <td>
                                                    <p> Data urodzenia </p>
												</td> 

                                                <td>
                                                    <p> Miasto </p>
												</td> 

                                                <td>
                                                    <p> Ulica </p>
												</td> 

                                                <td>
                                                    <p> Numer domu </p>
												</td> 

                                                <td>
                                                    <p> Kod pocztowy </p>
												</td> 

                                                <td>
                                                    <p> Telefon </p>
												</td> 

                                                <td>
                                                    <p> NIP </p>
												</td>

                                                <td>
                                                    <p> Data zatrudnienia </p>
												</td>

                                                <td>
                                                    <p> Aktywny </p>
												</td>

                                                <td>
                                                    <p> Opcje </p>
												</td>
											</tr>
										</thead>

                                        <tbody>

                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                                <tr>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['id_pracownika'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['placowka_id_placowki'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['imie'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['nazwisko'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['data_ur'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['miasto'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['ulica'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['nr_domu_miesz'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['kod_pocz'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['nr_tel'];?>
 </td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['nip'];?>
 </td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['data_zatrud'];?>
 </td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['czy_aktywny'];?>
 </td>
                                                    <td><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'EditWorker','id'=>$_smarty_tpl->tpl_vars['value']->value["id_pracownika"]),$_smarty_tpl ) );?>
" class="button">Edytuj</a> </td>
                                                </tr> 
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                                       </tbody>

                                    </table>

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
