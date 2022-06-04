<?php
/* Smarty version 4.1.0, created on 2022-06-04 13:30:33
  from 'C:\xampp\htdocs\amelia\app\views\OfferView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629b4259a8f356_23470206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2da90d652a6428ebb73722c21129e84e046d804a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\OfferView.tpl',
      1 => 1654342026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629b4259a8f356_23470206 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_945299337629b4259a7c084_66428739', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1848839567629b4259a7c9e4_33331881', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1393093617629b4259a84e31_89291122', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_945299337629b4259a7c084_66428739 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_945299337629b4259a7c084_66428739',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_1848839567629b4259a7c9e4_33331881 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_1848839567629b4259a7c9e4_33331881',
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
adminUzytkownicyPage">Panel Administratora</a></b>
		</li>	
	<?php }?>
    
<?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_1393093617629b4259a84e31_89291122 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1393093617629b4259a84e31_89291122',
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
										<h2>Samochody z naszej oferty</h2>

                                        <?php if ((isset($_smarty_tpl->tpl_vars['vehicle']->value))) {?>   
											<h2>Liczba wyników: <?php echo $_smarty_tpl->tpl_vars['vehicles_count']->value;?>
 </h2>
                                        <?php }?>

									</header>

                                    <?php if ((isset($_smarty_tpl->tpl_vars['vehicle']->value))) {?>    
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vehicle']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>

                                        <a href =""><div class="imgBorder">
                                        <img src="car_image/<?php echo $_smarty_tpl->tpl_vars['value']->value["img"];?>
" alt="" />
                                        
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
