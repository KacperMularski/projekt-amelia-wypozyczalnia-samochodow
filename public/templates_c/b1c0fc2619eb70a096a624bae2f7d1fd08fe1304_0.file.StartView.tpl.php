<?php
/* Smarty version 4.1.0, created on 2022-06-05 12:52:45
  from 'C:\xampp\htdocs\amelia\app\views\StartView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629c8afd6bced3_31452621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1c0fc2619eb70a096a624bae2f7d1fd08fe1304' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\StartView.tpl',
      1 => 1654426363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629c8afd6bced3_31452621 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1663983045629c8afd6b33b6_84348007', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_330322759629c8afd6b3d32_74507545', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1595805105629c8afd6bc0a9_69315921', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_1663983045629c8afd6b33b6_84348007 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_1663983045629c8afd6b33b6_84348007',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_330322759629c8afd6b3d32_74507545 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_330322759629c8afd6b3d32_74507545',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
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
SearchUser">Panel Administratora</a></b>
		</li>	
	<?php }?>
    
<?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_1595805105629c8afd6bc0a9_69315921 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1595805105629c8afd6bc0a9_69315921',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<section id="banner">
    <header>
        
    </header>
</section>


<section class="wrapper style1">
    <div class="container">
        <div class="row gtr-200">
            <section class="col-4 col-12-narrower">
                <div class="box highlight">
                    <i class="icon solid major fa-paper-plane"></i>
                    <h3>BRAK LIMITU KILOMETRÓW</h3>
                </div>
            </section>
            <section class="col-4 col-12-narrower">
                <div class="box highlight">
                    <i class="icon solid major fa-pencil-alt"></i>
                    <h3>NAJTAŃSZY WYNAJEM W KRAJU</h3>  
                </div>
            </section>
            <section class="col-4 col-12-narrower">
                <div class="box highlight">
                    <i class="icon solid major fa-wrench"></i>
                    <h3>OFERUJEMY TYLKO NAJSZYBSZE SAMOCHODY</h3>
                </div>
            </section>
        </div>
    </div>
</section>

<section class="wrapper style2">
    <div class="container">
        <header class="major">
            <h2>Wypożyczalnia samochodów RacingCars to świetny wybór</h2>
            <p>Przekonaj się sam!</p>
            
        </header>
        
    </div>
</section> 

<section class="wrapper style1">
    <div class="container">
        <div class="row">
            <section class="col-6 col-12-narrower">
                <div class="box post">
                    <a href="#" class="image left"><img src="images/toyota-yaris-gr-01.PNG" alt="" /></a>
                    <div class="inner">
                        <h3>Poszukujesz sprawdzonego pojazdu? Przejrzyj naszą ofertę!</h3>
                        <p>Nasze samochody pozyskujemy tylko od zaufanych dostawców.</p>
                    </div>
                </div>
            </section>
            <section class="col-6 col-12-narrower">
                <div class="box post">
                    <a href="#" class="image left"><img src="images/bmw-02.jpg" alt="" /></a>
                    <div class="inner">
                        <h3>Auta premium w RacingCars</h3>
                        <p>Zapoznaj się z szeroką gamą samochodów klasy PREMIUM!</p>
                    </div>
                </div>
            </section>
        </div>
        <div class="row">
            <section class="col-6 col-12-narrower">
                <div class="box post">
                    <a href="#" class="image left"><img src="images/wynajem-03.jpg" alt="" /></a>
                    <div class="inner">
                        <h3>Wynajem samochodu w RacingCars</h3>
                        <p>Nasi klienci mają możliwość złożenia zamówienia online, łącznie z opłaceniem rezerwacji.
                        Oferujemy także rezerwacje drogą telefoniczną lub w jednej z naszych placówek.
                        </p>
                    </div>
                </div>
            </section>
            <section class="col-6 col-12-narrower">
                <div class="box post">
                    <a href="#" class="image left"><img src="images/low-price-04.PNG" alt="" /></a>
                    <div class="inner">
                        <h3>Gwarancja najniższej ceny</h3>
                        <p>Oferujemy atrakcyjne warunki najmu za najniższą cenę.
                        Nie dość, że oferujemy niskie ceny, 
                        to każde auto otrzymasz wraz z ubezpieczeniem AC, OC, NW.
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<section id="cta" class="wrapper style3">
					<div class="container">
						<header>
							<h2>Oferujemy rezerwacje samochodu online!</h2>
							<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
rent_page" class="button">Sprawdź</a>
						</header>
					</div>
				</section>

<?php
}
}
/* {/block 'content'} */
}
