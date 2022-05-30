<?php
/* Smarty version 4.1.0, created on 2022-05-29 15:27:09
  from 'C:\xampp\htdocs\amelia\app\views\StartView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629374ad63ff34_37170933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1c0fc2619eb70a096a624bae2f7d1fd08fe1304' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\StartView.tpl',
      1 => 1653830825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629374ad63ff34_37170933 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1405491150629374ad637930_75984622', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_652082640629374ad638282_03541391', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1074963471629374ad63f354_02572048', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_1405491150629374ad637930_75984622 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_1405491150629374ad637930_75984622',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_652082640629374ad638282_03541391 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_652082640629374ad638282_03541391',
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
    
<?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_1074963471629374ad63f354_02572048 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1074963471629374ad63f354_02572048',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Banner -->
<section id="banner">
    <header>
        <!--<h2>Arcana: <em>A responsive site template freebie by-->
        <!--<a href="#" class="button">Learn More</a>-->
    </header>
</section>

<!-- Highlights -->
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


<!-- Posts -->
<section class="wrapper style1">
    <div class="container">
        <div class="row">
            <section class="col-6 col-12-narrower">
                <div class="box post">
                    <a href="#" class="image left"><img src="images/pic01.jpg" alt="" /></a>
                    <div class="inner">
                        <h3>The First Thing</h3>
                        <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                    </div>
                </div>
            </section>
            <section class="col-6 col-12-narrower">
                <div class="box post">
                    <a href="#" class="image left"><img src="images/pic02.jpg" alt="" /></a>
                    <div class="inner">
                        <h3>The Second Thing</h3>
                        <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                    </div>
                </div>
            </section>
        </div>
        <div class="row">
            <section class="col-6 col-12-narrower">
                <div class="box post">
                    <a href="#" class="image left"><img src="images/pic03.jpg" alt="" /></a>
                    <div class="inner">
                        <h3>The Third Thing</h3>
                        <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                    </div>
                </div>
            </section>
            <section class="col-6 col-12-narrower">
                <div class="box post">
                    <a href="#" class="image left"><img src="images/pic04.jpg" alt="" /></a>
                    <div class="inner">
                        <h3>The Fourth Thing</h3>
                        <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
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
