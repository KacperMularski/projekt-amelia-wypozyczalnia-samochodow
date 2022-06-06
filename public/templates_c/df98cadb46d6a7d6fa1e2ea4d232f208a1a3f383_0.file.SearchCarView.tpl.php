<?php
/* Smarty version 4.1.0, created on 2022-06-06 11:15:31
  from 'C:\xampp\htdocs\amelia\app\views\SearchCarView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629dc5b3136cb3_24869310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df98cadb46d6a7d6fa1e2ea4d232f208a1a3f383' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\SearchCarView.tpl',
      1 => 1654506003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629dc5b3136cb3_24869310 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1260634701629dc5b3113f92_64456206', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2092542663629dc5b3114913_46615114', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1096744176629dc5b3118f52_63032656', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_admin.tpl");
}
/* {block 'end'} */
class Block_1260634701629dc5b3113f92_64456206 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_1260634701629dc5b3113f92_64456206',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_2092542663629dc5b3114913_46615114 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_2092542663629dc5b3114913_46615114',
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
class Block_1096744176629dc5b3118f52_63032656 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1096744176629dc5b3118f52_63032656',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section class="wrapper style1">
					<div class="container">
						<div id="content">

								<article>
									<header>
										<h2>Tabela samochody</h2>
										
									</header>

									<section class="col-6 col-12-narrower">
										
										<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
SearchCar" method="post">
											<div class="row gtr-50">
												<div class="col-6 col-12-mobilep">
													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->mark_search))) {?>
												    	<input id="id_mark_search" type="text" name="mark_search" placeholder="Marka"/>
													<?php }?>
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->mark_search))) {?>
														<input id="id_mark_search" type="text" name="mark_search" placeholder="Marka" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->mark_search;?>
"/>
													<?php }?>

                                                <br>
                                                <b> Cena za dobę </b> </br>
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

                                                
												<div class="col-6 col-12-mobilep">
													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->model_search))) {?>
												    	<input id="id_model_search" type="text" name="model_search" placeholder="Model"/>
													<?php }?>
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->model_search))) {?>
														<input id="id_model_search" type="text" name="model_search" placeholder="Model" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->model_search;?>
"/>
													<?php }?>
                                                <br>
                                                <b> Wypożyczony </b> </br>
                                                        <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->rented_search)) && $_smarty_tpl->tpl_vars['form']->value->rented_search == "tak") {?>
                                                        <label class="radio-button">  Tak
                                                            <input type="radio" checked="checked" name="rented_search" value="tak">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="radio-button"> Nie 
                                                            <input type="radio" name="rented_search" value="nie">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="radio-button"> Dowolne 
                                                            <input type="radio" name="rented_search" value="">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <?php }?>

                                                        <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->rented_search)) && $_smarty_tpl->tpl_vars['form']->value->rented_search == "nie") {?>
                                                        <label class="radio-button">  Tak 
                                                            <input type="radio" name="rented_search" value="tak">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="radio-button"> Nie 
                                                            <input type="radio" name="rented_search" value="nie" checked="checked">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="radio-button"> Dowolne 
                                                            <input type="radio" name="rented_search" value="" >
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <?php }?>

                                                        <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->rented_search)) && $_smarty_tpl->tpl_vars['form']->value->rented_search == '') {?>
                                                        <label class="radio-button">  Tak 
                                                            <input type="radio" name="rented_search" value="rosnaco">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="radio-button"> Nie 
                                                            <input type="radio" name="rented_search" value="nie" >
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="radio-button"> Dowolne 
                                                            <input type="radio" name="rented_search" value="" checked="checked">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <?php }?>
                                                        
                                                        <?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->rented_search))) {?>
                                                        <label class="radio-button">  Tak 
                                                            <input type="radio" name="rented_search" value="tak">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        
                                                        <label class="radio-button"> Nie 
                                                            <input type="radio" name="rented_search" value="nie">
                                                            <span class="checkmark"></span>
                                                        </label>

                                                        <label class="radio-button"> Dowolne
                                                            <input type="radio" name="rented_search" checked="checked" value="">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <?php }?>
                                                        
												</div>

												<div class="col-12">
													<ul class="actions">
														<li><input type="submit" class="button alt" value="Filtruj" /></li>
														<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
AddCar" class="button">+ Dodaj pojazd</a></li>
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
                                                    <p> Miasto </p>
												</td> 

                                                <td>
                                                    <p> Rok </p>
												</td> 

                                                <td>
                                                    <p> Silnik </p>
												</td> 

                                                <td>
                                                    <p> Paliwo </p>
												</td> 

                                                <td>
                                                    <p> Wypożyczony </p>
												</td> 
												
												<td>
                                                    <p> Cena </p>
												</td> 

                                                <td>
                                                    <p> Miejsca </p>
												</td>

                                                <td>
                                                    <p> Skrzynia </p>
												</td>

                                                <td>
                                                    <p> IMG </p>
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
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['id_pojazdu'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['marka'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['model'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['miasto'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['rok_prod'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['poj_silnika'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['rodz_paliwa'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['czy_wypoz'];?>
</td>
													<td><?php echo $_smarty_tpl->tpl_vars['value']->value['cena_doba'];?>
 zł</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['liczba_miejsc'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['skrzynia'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['img'];?>
</td>
                                                    <td><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'EditCar','id'=>$_smarty_tpl->tpl_vars['value']->value["id_pojazdu"]),$_smarty_tpl ) );?>
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
