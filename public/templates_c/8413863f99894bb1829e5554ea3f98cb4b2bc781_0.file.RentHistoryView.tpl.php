<?php
/* Smarty version 4.1.0, created on 2022-05-31 11:24:20
  from 'C:\xampp\htdocs\amelia\app\views\RentHistoryView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6295dec4032835_81595378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8413863f99894bb1829e5554ea3f98cb4b2bc781' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\RentHistoryView.tpl',
      1 => 1653988880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6295dec4032835_81595378 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8865964366295dec401eb24_67623355', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19549291686295dec401f6b0_15453960', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8330970916295dec4028a73_55985222', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_8865964366295dec401eb24_67623355 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_8865964366295dec401eb24_67623355',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_19549291686295dec401f6b0_15453960 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_19549291686295dec401f6b0_15453960',
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

<?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_8330970916295dec4028a73_55985222 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8330970916295dec4028a73_55985222',
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
