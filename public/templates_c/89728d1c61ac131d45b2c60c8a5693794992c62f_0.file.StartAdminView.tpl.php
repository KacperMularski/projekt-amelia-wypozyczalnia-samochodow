<?php
/* Smarty version 4.1.0, created on 2022-06-01 17:50:52
  from 'C:\xampp\htdocs\amelia\app\views\StartAdminView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62978adcf35e73_84675311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89728d1c61ac131d45b2c60c8a5693794992c62f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\StartAdminView.tpl',
      1 => 1654098651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62978adcf35e73_84675311 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25403747262978adcf31658_47276729', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30764443562978adcf31fa2_90664321', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71993075462978adcf35282_81607981', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_25403747262978adcf31658_47276729 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_25403747262978adcf31658_47276729',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_30764443562978adcf31fa2_90664321 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_30764443562978adcf31fa2_90664321',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
">Strona główna</a></li>
    <li><a href="">Wypożyczenia</a></li>
    <li><a href="">Użytkownicy</a></li>
    <li><a href="">Samochody</a></li>
    <li><a href="">Pracownicy</a></li>
    

    
    
<?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_71993075462978adcf35282_81607981 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_71993075462978adcf35282_81607981',
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
