<?php
/* Smarty version 4.1.0, created on 2022-06-06 18:36:41
  from 'C:\xampp\htdocs\amelia\app\views\SearchUserView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629e2d19d671b8_72133341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16c6ceeb4626cdeaa72b685c8a3f2089350b2b98' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\SearchUserView.tpl',
      1 => 1654533399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629e2d19d671b8_72133341 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_987478781629e2d19d4a874_14653769', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1378381589629e2d19d4b4e9_60596673', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64936722629e2d19d4fca3_39094753', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_admin.tpl");
}
/* {block 'end'} */
class Block_987478781629e2d19d4a874_14653769 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_987478781629e2d19d4a874_14653769',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_1378381589629e2d19d4b4e9_60596673 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_1378381589629e2d19d4b4e9_60596673',
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
class Block_64936722629e2d19d4fca3_39094753 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_64936722629e2d19d4fca3_39094753',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section class="wrapper style1">
					<div class="container">
						<div id="content">

								<article>
									<header>
										<h2>Tabela użytkownicy</h2>
										
									</header>

									<section class="col-6 col-12-narrower">
										
										<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
SearchUser" method="post">
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
													<?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->login_search))) {?>
												    	<input id="id_login" type="text" name="login_search" placeholder="Login"/>
													<?php }?>
													<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->login_search))) {?>
														<input id="id_login" type="text" name="login_search" placeholder="Login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login_search;?>
"/>
													<?php }?>
												</div>
											
												<div class="col-12">
													<ul class="actions">
														<li><input type="submit" class="button alt" value="Filtruj" />
														<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
AddUser" class="button">+ Dodaj osobę</a></li>
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
                                                    <p>Imie </p>
												</td> 

                                                <td>
                                                    <p> Nazwisko </p>
												</td> 

                                                <td>
                                                    <p> Data urodzenia </p>
												</td> 

                                                <td>
                                                    <p> Prawo jazdy </p>
												</td> 

                                                <td>
                                                    <p> Telefon </p>
												</td> 

                                                <td>
                                                    <p> Login </p>
												</td> 

                                                <td>
                                                    <p> Email </p>
												</td> 

                                                <td>
                                                    <p> Rola </p>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users_records']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                                <tr>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['id_osoby'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['imie'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['nazwisko'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['data_ur'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['nr_pr_jazdy'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['nr_tel'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['login'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['email'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['rola'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['czy_aktywny'];?>
 </td>
                                                    <td><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'EditUser','id'=>$_smarty_tpl->tpl_vars['value']->value["id_osoby"]),$_smarty_tpl ) );?>
" class="button">Edytuj</a> </td>
                                                </tr> 
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                                       </tbody>

                                    </table>

									<b>Strona: <?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
</b>

                                        <?php if ($_smarty_tpl->tpl_vars['previous_page']->value > 0) {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
SearchUser/<?php echo $_smarty_tpl->tpl_vars['previous_page']->value;?>
"  class="button alt"><i class="fa-solid fa-angle-left"></i></a>
                                    <?php }?>

                                    <?php if (!$_smarty_tpl->tpl_vars['previous_page']->value > 0) {?>
                                    <a href="" class="button alt"><i class="fa-solid fa-angle-left"></i></a>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['isNextPage']->value) {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
SearchUser/<?php echo $_smarty_tpl->tpl_vars['next_page']->value;?>
" class="button alt"><i class="fa-solid fa-angle-right"></i></a>   
                                    <?php }?>  

                                    <?php if (!$_smarty_tpl->tpl_vars['isNextPage']->value) {?>
                                    <a href="" class="button alt"><i class="fa-solid fa-angle-right"></i></a>   
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
