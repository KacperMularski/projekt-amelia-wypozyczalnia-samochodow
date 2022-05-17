<?php
/* Smarty version 4.1.0, created on 2022-05-17 13:19:57
  from 'C:\xampp\htdocs\amelia\app\views\OfferView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628384dd63bbe6_85165952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2da90d652a6428ebb73722c21129e84e046d804a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\OfferView.tpl',
      1 => 1652786396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628384dd63bbe6_85165952 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1471698462628384dd632bf1_22298692', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91138653628384dd633717_46676923', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53492690628384dd63b2e9_83870538', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_1471698462628384dd632bf1_22298692 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_1471698462628384dd632bf1_22298692',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_91138653628384dd633717_46676923 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_91138653628384dd633717_46676923',
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
class Block_53492690628384dd63b2e9_83870538 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_53492690628384dd63b2e9_83870538',
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
