<?php
/* Smarty version 4.1.0, created on 2022-06-06 17:29:11
  from 'C:\xampp\htdocs\amelia\app\views\OfferView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629e1d47f057e7_38895086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2da90d652a6428ebb73722c21129e84e046d804a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\OfferView.tpl',
      1 => 1654529350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629e1d47f057e7_38895086 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81199877629e1d47ef0617_04835368', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1929414772629e1d47ef0f63_48261947', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1571171526629e1d47ef93f6_97610112', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_81199877629e1d47ef0617_04835368 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_81199877629e1d47ef0617_04835368',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_1929414772629e1d47ef0f63_48261947 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_1929414772629e1d47ef0f63_48261947',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
">Strona główna</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
rent_page">Wypożycz</a></li>
    <li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
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
SearchUser">Panel Administratora</a></b>
		</li>	
	<?php }?>
    
<?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_1571171526629e1d47ef93f6_97610112 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1571171526629e1d47ef93f6_97610112',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


   <section class="wrapper style1">
					<div class="container">
						<div id="content">
								<article>
									<header>
										<h2>Samochody z naszej oferty</h2>
                                        <b>Strona: <?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
</b>

                                        <?php if ($_smarty_tpl->tpl_vars['previous_page']->value > 0) {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
offer_page/<?php echo $_smarty_tpl->tpl_vars['previous_page']->value;?>
"  class="button alt"><i class="fa-solid fa-angle-left"></i></a>
                                    <?php }?>

                                    <?php if (!$_smarty_tpl->tpl_vars['previous_page']->value > 0) {?>
                                    <a href="" class="button alt"><i class="fa-solid fa-angle-left"></i></a>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['isNextPage']->value) {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
offer_page/<?php echo $_smarty_tpl->tpl_vars['next_page']->value;?>
" class="button alt"><i class="fa-solid fa-angle-right"></i></a>   
                                    <?php }?>  

                                    <?php if (!$_smarty_tpl->tpl_vars['isNextPage']->value) {?>
                                    <a href="" class="button alt"><i class="fa-solid fa-angle-right"></i></a>   
                                    <?php }?> 
                                    
									</header>

                                    <br>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['vehicle']->value))) {?>    
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vehicle']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>

                                        <a href =""><div class="imgBorder">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/car_image/<?php echo $_smarty_tpl->tpl_vars['value']->value["img"];?>
" alt="błąd" />
                                        
                                        <ul>
                                        <h1><?php echo $_smarty_tpl->tpl_vars['value']->value["marka"];?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value["model"];?>
</h1>
                                        <li><i class="fa-solid fa-rocket"></i> <?php echo $_smarty_tpl->tpl_vars['value']->value["poj_silnika"];?>
cm<sup>3</sup> </li>
                                        <li><i class="fa-solid fa-gas-pump"></i> <?php echo $_smarty_tpl->tpl_vars['value']->value["rodz_paliwa"];?>
 </li>
                                        <li><i class="fa-solid fa-gears"></i> <?php echo $_smarty_tpl->tpl_vars['value']->value["skrzynia"];?>
 </li>
                                        <li><i class="fa-solid fa-people-group"></i> Miejsca: <?php echo $_smarty_tpl->tpl_vars['value']->value["liczba_miejsc"];?>
 </li>
                                        <h2> Cena za dobę: <?php echo $_smarty_tpl->tpl_vars['value']->value["cena_doba"];?>
zł </h2>

                                        </ul>
                                        
                                        </div></a>
                                        <br>
                    
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                    
                                </article>

                        </div>
                    </div>
    </section>

<?php
}
}
/* {/block 'content'} */
}
