<?php
/* Smarty version 4.1.0, created on 2022-05-14 16:17:40
  from 'C:\xampp\htdocs\amelia\app\views\StartView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627fba04a3b0a8_06423939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1c0fc2619eb70a096a624bae2f7d1fd08fe1304' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\StartView.tpl',
      1 => 1652537767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627fba04a3b0a8_06423939 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1445099041627fba04a32eb0_53142940', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1366404012627fba04a33819_96533789', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1952554339627fba04a3aab2_93737643', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_1445099041627fba04a32eb0_53142940 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_1445099041627fba04a32eb0_53142940',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_1366404012627fba04a33819_96533789 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_1366404012627fba04a33819_96533789',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
">Strona główna</a></li>
    <li><a href="right-sidebar.html">Wypożycz</a></li>
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
    
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
contact_page">Kontakt</a></li>
 
    


<?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_1952554339627fba04a3aab2_93737643 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1952554339627fba04a3aab2_93737643',
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
                    <h3>Bezkonkurencyjne ceny</h3>
                    <p>######</p>
                </div>
            </section>
            <section class="col-4 col-12-narrower">
                <div class="box highlight">
                    <i class="icon solid major fa-pencil-alt"></i>
                    <h3>Also Important</h3>
                    <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                </div>
            </section>
            <section class="col-4 col-12-narrower">
                <div class="box highlight">
                    <i class="icon solid major fa-wrench"></i>
                    <h3>Probably Important</h3>
                    <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                </div>
            </section>
        </div>
    </div>
</section>

<!-- Gigantic Heading 
<section class="wrapper style2">
    <div class="container">
        <header class="major">
            <h2>A gigantic heading you can use for whatever</h2>
            <p>With a much smaller subtitle hanging out just below it</p>
        </header>
    </div>
</section> -->

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

<?php
}
}
/* {/block 'content'} */
}
