<?php
/* Smarty version 4.1.0, created on 2022-05-16 17:13:54
  from 'C:\xampp\htdocs\amelia\app\views\PersonEditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62826a32860100_35145231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '139b97d3feaf5978ec14c5d4233718a121ad4d01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\PersonEditView.tpl',
      1 => 1652714033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62826a32860100_35145231 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157768639762826a3284faf6_58067056', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135905035562826a32850500_54073799', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49334284662826a32854671_99829070', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_157768639762826a3284faf6_58067056 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_157768639762826a3284faf6_58067056',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_135905035562826a32850500_54073799 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_135905035562826a32850500_54073799',
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
class Block_49334284662826a32854671_99829070 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_49334284662826a32854671_99829070',
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
										<h2>Dane konta</h2> </br>
										
									</header>

                                    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->getMessages()) {?>										
										<ol class="infos">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
										<li>
		
														<?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>
														
														<?php }?>
											<?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>

											</br></li>

										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</ol>
										<?php }?>

                                    <table class="pure-table pure-table-bordered">

										<thead>
											<tr> 
												<td colspan="3" align="center">
													<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
editForm" class="button">Edytuj</a> 
													<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
passwordChange" class="button">Zmień hasło</a>
													<a href="#" class="button">Wypożyczenia</a>
												</td> 
											</tr>
										</thead>

                                        <tbody>
                                            <tr><td><h3>Login:</h3></td> <td><b><?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
</b></td></tr>  
                                            <tr class="pure-table-odd"><td><h3>E-mail:</h3></td> <td><b><?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
</b></td></tr>
                                            <tr><td><h3>Imie:</h3></td><td> <b><?php echo $_smarty_tpl->tpl_vars['form']->value->imie;?>
</b></td></tr>
                                            <tr class="pure-table-odd"><td><h3>Nazwisko:</h3></td><td> <b><?php echo $_smarty_tpl->tpl_vars['form']->value->nazwisko;?>
</b></td></tr>
                                            <tr><td><h3>Data urodzenia:</h3></td><td>  <b><?php echo $_smarty_tpl->tpl_vars['form']->value->data_ur;?>
</b></td></tr>
                                            <tr class="pure-table-odd"><td><h3>Numer prawa jazdy:</h3></td><td>  <b><?php echo $_smarty_tpl->tpl_vars['form']->value->nr_pr_jazdy;?>
</b></td></tr>
                                            <tr><td><h3>Numer telefonu:</h3></td><td><b><?php echo $_smarty_tpl->tpl_vars['form']->value->nr_tel;?>
</b></td></tr>
                                       </tbody>

                                    </table>
                                    

									

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
