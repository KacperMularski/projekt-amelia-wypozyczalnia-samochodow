<?php
/* Smarty version 4.1.0, created on 2022-05-23 13:44:43
  from 'C:\xampp\htdocs\amelia\app\views\OfferView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628b73abea8670_42271830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2da90d652a6428ebb73722c21129e84e046d804a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\OfferView.tpl',
      1 => 1653306158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628b73abea8670_42271830 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1608431735628b73abea06b7_92999299', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1279418729628b73abea1029_10850984', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1610973812628b73abea80b9_81484424', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_1608431735628b73abea06b7_92999299 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_1608431735628b73abea06b7_92999299',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_1279418729628b73abea1029_10850984 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_1279418729628b73abea1029_10850984',
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
    
<?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_1610973812628b73abea80b9_81484424 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1610973812628b73abea80b9_81484424',
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
									</header>

                                    <a href ="#"><div class="imgBorder">
                                        <img src="images/bmw_330i_m_sport.png" alt="" />
                                        
                                        <ul>
                                            <h1>BMW 330i M SPORT</h1>
                                            <li><i class="fa-solid fa-rocket"></i> 4500cm<sup>3</sup> </li>
                                            <li><i class="fa-solid fa-gas-pump"></i>  Benzyna </li>
                                            <li><i class="fa-solid fa-gears"></i>  Automatyczna </li>
                                            <li><i class="fa-solid fa-people-group"></i> Pięć miejsc </li>
                                            <h2> Cena za dobę: 1200zł </h2>
                                        </ul>
                                        
                                    </div></a>

                                    </br>

                                    <a href ="#"><div class="imgBorder">
                                        <img src="images/mustang.png" alt="" />
                                        
                                        <ul>
                                        <h1>FORD Mustang</h1>
                                        <li><i class="fa-solid fa-rocket"></i> 5000cm<sup>3</sup> </li>
                                        <li><i class="fa-solid fa-gas-pump"></i> Benzyna </li>
                                        <li><i class="fa-solid fa-gears"></i> Manualna </li>
                                        <li><i class="fa-solid fa-people-group"></i> Cztery miejsca </li>
                                        <h2> Cena za dobę: 1000zł </h2>

                                        </ul>
                                        
                                    </div></a>
                                    
                                    
                                   

                                </article>

                        </div>
                    </div>
    </section>

<?php
}
}
/* {/block 'content'} */
}
