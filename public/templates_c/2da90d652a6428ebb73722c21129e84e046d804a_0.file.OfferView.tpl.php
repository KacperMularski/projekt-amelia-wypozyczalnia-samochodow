<?php
/* Smarty version 4.1.0, created on 2022-05-15 12:39:34
  from 'C:\xampp\htdocs\amelia\app\views\OfferView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6280d866f1c4e7_77317040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2da90d652a6428ebb73722c21129e84e046d804a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\OfferView.tpl',
      1 => 1652611173,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6280d866f1c4e7_77317040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15323625836280d866f144a6_17002186', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9968488576280d866f14e00_88235517', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1411645036280d866f1bf49_48505389', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_15323625836280d866f144a6_17002186 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_15323625836280d866f144a6_17002186',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_9968488576280d866f14e00_88235517 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_9968488576280d866f14e00_88235517',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
">Strona główna</a></li>
    <li><a href="right-sidebar.html">Wypożycz</a></li>
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
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
contact_page">Kontakt</a></li>
    
    



<?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_1411645036280d866f1bf49_48505389 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1411645036280d866f1bf49_48505389',
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
                                        <h1>BMW 330i M SPORT</h1>
                                        <ul>
                                        <li>Silnik: 4500cm<sup>3</sup> </li>
                                        <li>Paliwo: Benzyna </li>
                                        <li>Skrzynia: automatyczna </li>
                                        <li>Liczba miejsc: 5 </li>
                                        </ul>
                                        <h2> Cena za dobę: 1200zł </h2>
                                    </div></a>

                                    </br>

                                    <a href ="#"><div class="imgBorder">
                                        <img src="images/mustang.png" alt="" />
                                        <h1>FORD Mustang</h1>
                                        <ul>
                                        <li>Silnik: 5000cm<sup>3</sup> </li>
                                        <li>Paliwo: Benzyna </li>
                                        <li>Skrzynia: manualna </li>
                                        <li>Liczba miejsc: 4 </li>
                                        </ul>
                                        <h2> Cena za dobę: 1000zł </h2>
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
