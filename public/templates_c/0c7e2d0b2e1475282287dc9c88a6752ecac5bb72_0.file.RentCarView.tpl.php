<?php
/* Smarty version 4.1.0, created on 2022-05-26 21:18:26
  from 'C:\xampp\htdocs\amelia\app\views\RentCarView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628fd282efa3b6_16273776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c7e2d0b2e1475282287dc9c88a6752ecac5bb72' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\RentCarView.tpl',
      1 => 1653592705,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628fd282efa3b6_16273776 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1512351036628fd282ee9c52_58911620', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160533326628fd282eea793_70675132', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1181545683628fd282ef26b2_82132025', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_1512351036628fd282ee9c52_58911620 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_1512351036628fd282ee9c52_58911620',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_160533326628fd282eea793_70675132 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_160533326628fd282eea793_70675132',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
">Strona główna</a></li>
    <li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
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
class Block_1181545683628fd282ef26b2_82132025 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1181545683628fd282ef26b2_82132025',
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
                                    
                                    id_pojazdu: <?php echo $_smarty_tpl->tpl_vars['id_pojazdu']->value;?>
 
                                    <br>
                                    id_usera: <?php echo \core\SessionUtils::load("user_id",true);?>

                                    <br>
                                    id_placowki: <?php echo $_smarty_tpl->tpl_vars['placowka']->value;?>

                                    <br>
                                    data_wyp: <?php echo $_smarty_tpl->tpl_vars['data_wyp']->value;?>

                                    <br>
                                    data_zw: <?php echo $_smarty_tpl->tpl_vars['data_zw']->value;?>

                    
									

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
