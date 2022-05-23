<?php
/* Smarty version 4.1.0, created on 2022-05-23 17:37:12
  from 'C:\xampp\htdocs\amelia\app\views\PersonEditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628baa285103f4_84852010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '139b97d3feaf5978ec14c5d4233718a121ad4d01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\PersonEditView.tpl',
      1 => 1653306768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628baa285103f4_84852010 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1351653198628baa284ff7b9_40138817', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1060177001628baa28500156_91603748', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1937262811628baa285042c6_59958922', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_1351653198628baa284ff7b9_40138817 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_1351653198628baa284ff7b9_40138817',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_1060177001628baa28500156_91603748 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_1060177001628baa28500156_91603748',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
">Strona główna</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
rent_page">Wypożycz</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
offer_page">Oferta</a></li>
    <li><a href="#">Rejestracja</a></li>
    
<?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_1937262811628baa285042c6_59958922 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1937262811628baa285042c6_59958922',
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
                                            <tr><td><h3>Numer telefonu:</h3></td><td><b>+<?php echo $_smarty_tpl->tpl_vars['form']->value->nr_tel;?>
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
