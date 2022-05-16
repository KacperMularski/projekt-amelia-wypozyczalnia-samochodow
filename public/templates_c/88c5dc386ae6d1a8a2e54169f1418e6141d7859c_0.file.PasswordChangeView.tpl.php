<?php
/* Smarty version 4.1.0, created on 2022-05-16 18:31:05
  from 'C:\xampp\htdocs\amelia\app\views\PasswordChangeView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62827c495c77c3_78010849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88c5dc386ae6d1a8a2e54169f1418e6141d7859c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\PasswordChangeView.tpl',
      1 => 1652718657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62827c495c77c3_78010849 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83364527162827c495b7c67_60275083', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33616181862827c495b8bc6_04117800', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146677496562827c495bd896_73306098', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_83364527162827c495b7c67_60275083 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_83364527162827c495b7c67_60275083',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_33616181862827c495b8bc6_04117800 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_33616181862827c495b8bc6_04117800',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
">Strona główna</a></li>
    <li><a href="right-sidebar.html">Wypożycz</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
offer_page">Oferta</a></li>
    <li><a href="#">Rejestracja</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
contact_page">Kontakt</a></li>
    
    



<?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_146677496562827c495bd896_73306098 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_146677496562827c495bd896_73306098',
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
