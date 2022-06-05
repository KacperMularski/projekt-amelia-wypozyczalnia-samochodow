<?php
/* Smarty version 4.1.0, created on 2022-06-05 14:15:12
  from 'C:\xampp\htdocs\amelia\app\views\SearchRentView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629c9e50e22e96_62530242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b74e6358d5578678ed3275ded6690f48c8547a70' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\SearchRentView.tpl',
      1 => 1654430085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629c9e50e22e96_62530242 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_819805873629c9e50e06506_87910691', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_452514619629c9e50e06f12_53590430', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_328115965629c9e50e0b8e9_14673380', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_admin.tpl");
}
/* {block 'end'} */
class Block_819805873629c9e50e06506_87910691 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_819805873629c9e50e06506_87910691',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_452514619629c9e50e06f12_53590430 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_452514619629c9e50e06f12_53590430',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
SearchUser">Użytkownicy</a></li>
    <li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
SearchRent">Wypożyczenia</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
SearchCar">Samochody</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
adminPracownicyPage">Pracownicy</a></li>
     
<?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_328115965629c9e50e0b8e9_14673380 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_328115965629c9e50e0b8e9_14673380',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section class="wrapper style1">
					<div class="container">
						<div id="content">

								<article>
									<header>
										<h2>Tabela wypożyczenia</h2>
										
									</header>

									<section class="col-6 col-12-narrower">
										
										<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
SearchRent" method="post">
											<div class="row gtr-50">
												<div class="col-6 col-12-mobilep">
													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->surname_search))) {?>
												    	<input id="id_surname_search" type="text" name="surname_search" placeholder="Nazwisko"/>
													<?php }?>
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->surname_search))) {?>
														<input id="id_surname_search" type="text" name="surname_search" placeholder="Nazwisko" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->surname_search;?>
"/>
													<?php }?>
												</div>

                                                
												<div class="col-6 col-12-mobilep">
													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->mark_search))) {?>
												    	<input id="id_mark_search" type="text" name="mark_search" placeholder="Marka"/>
													<?php }?>
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->mark_search))) {?>
														<input id="id_mark_search" type="text" name="mark_search" placeholder="Model" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->mark_search;?>
"/>
													<?php }?>
												</div>

                                                <div class="col-6 col-12-mobilep">
													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->model_search))) {?>
												    	<input id="id_model_search" type="text" name="model_search" placeholder="Model"/>
													<?php }?>
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->model_search))) {?>
														<input id="id_model_search" type="text" name="model_search" placeholder="Model" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->model_search;?>
"/>
													<?php }?>
												<br>
                                                <b> Wartość wypożyczenia</b> </br>
                                                        <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->price_sort)) && $_smarty_tpl->tpl_vars['form']->value->price_sort == "rosnaco") {?>
                                                        <label class="radio-button">  Rosnąco 
                                                            <input type="radio" checked="checked" name="price_sort" value="rosnaco">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="radio-button"> Malejąco 
                                                            <input type="radio" name="price_sort" value="malejaco">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <?php }?>

                                                        <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->price_sort)) && $_smarty_tpl->tpl_vars['form']->value->price_sort == "malejaco") {?>
                                                        <label class="radio-button">  Rosnąco 
                                                            <input type="radio" name="price_sort" value="rosnaco">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="radio-button"> Malejąco 
                                                            <input type="radio" name="price_sort" value="malejaco" checked="checked">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <?php }?>

                                                        <?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->price_sort))) {?>
                                                        <label class="radio-button">  Rosnąco 
                                                            <input type="radio" checked="checked" name="price_sort" value="rosnaco">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        
                                                        <label class="radio-button"> Malejąco 
                                                            <input type="radio" name="price_sort" value="malejaco">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <?php }?>
                                                        <br>
                                                </div>
												<div class="col-12">
													<ul class="actions">
														<li><input type="submit" class="button alt" value="Filtruj" /></li>
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
                                                    <p>Marka </p>
												</td> 

                                                <td>
                                                    <p> Model </p>
												</td> 

                                                <td>
                                                    <p> Imie </p>
												</td> 

                                                <td>
                                                    <p> Nazwisko </p>
												</td> 

                                                <td>
                                                    <p> Wartość </p>
												</td> 

                                                <td>
                                                    <p> Data wypożyczenia </p>
												</td> 

                                                <td>
                                                    <p> Data zwrotu </p>
												</td> 
												
												<td>
                                                    <p> Miasto</p>
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
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['id_wypozyczenia'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['marka'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['model'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['imie'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['nazwisko'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['wart_wyp'];?>
 zł</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['data_wyp'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['data_zw'];?>
</td>
													<td><?php echo $_smarty_tpl->tpl_vars['value']->value['miasto'];?>
</td>
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
