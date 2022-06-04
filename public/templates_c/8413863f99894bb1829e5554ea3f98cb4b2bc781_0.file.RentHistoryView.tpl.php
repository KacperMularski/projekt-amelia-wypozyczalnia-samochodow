<?php
/* Smarty version 4.1.0, created on 2022-06-02 11:49:51
  from 'C:\xampp\htdocs\amelia\app\views\RentHistoryView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629887bf4eb341_24512171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8413863f99894bb1829e5554ea3f98cb4b2bc781' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\RentHistoryView.tpl',
      1 => 1654100749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629887bf4eb341_24512171 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_622658087629887bf4d8f91_11422407', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38446605629887bf4d9905_48571220', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1273498303629887bf4e1ae7_79107366', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_622658087629887bf4d8f91_11422407 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_622658087629887bf4d8f91_11422407',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_38446605629887bf4d9905_48571220 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_38446605629887bf4d9905_48571220',
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
    <li>
        <a href="#">Rejestracja</a>
        <ul>
			<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) == 0) {?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login_page">Zaloguj</a></li>
			<?php }?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
register_page">Zarejestruj</a></li>

        </ul>
    </li>

    <?php if (\core\RoleUtils::inRole("admin")) {?>
		<li><b><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
adminWypozyczeniaPage">Panel Administratora</a></b>
		</li>	
	<?php }?>

<?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_1273498303629887bf4e1ae7_79107366 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1273498303629887bf4e1ae7_79107366',
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
										<h2> Historia wypożyczeń </h2>

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

                                                    </br>
                                                </li>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										    </ol>
										<?php }?>

									</header>

                                    <table class="pure-table pure-table-bordered">

										<thead>
											<tr> 
												<td>
                                                    <p> Marka </p>
												</td> 

                                                <td>
                                                    <p> Model </p>
												</td> 

                                                <td>
                                                    <p> Data wypożyczenia </p>
												</td> 

                                                <td>
                                                    <p> Data zwrotu </p>
												</td> 

                                                <td>
                                                    <p> Wartość </p>
												</td> 
											</tr>
										</thead>

                                        <tbody>

                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form']->value->tab_wypozyczenie, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                                <tr>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['marka'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['model'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['data_wyp'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['data_zw'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['wart_wyp'];?>
 zł </td>
                                                </tr> 
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                                       </tbody>

                                    </table>
									

									

									
								</article>

						</div>
					</div>
				</section>

<?php
}
}
/* {/block 'content'} */
}
