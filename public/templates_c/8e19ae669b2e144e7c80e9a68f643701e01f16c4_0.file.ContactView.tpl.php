<?php
/* Smarty version 4.1.0, created on 2022-05-14 17:39:58
  from 'C:\xampp\htdocs\amelia\app\views\ContactView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627fcd4e5668c7_31378068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e19ae669b2e144e7c80e9a68f643701e01f16c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\ContactView.tpl',
      1 => 1652537788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627fcd4e5668c7_31378068 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_523309568627fcd4e55ea64_54896956', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_667633973627fcd4e55f3d0_37741567', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1700702295627fcd4e566350_02550917', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_523309568627fcd4e55ea64_54896956 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_523309568627fcd4e55ea64_54896956',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_667633973627fcd4e55f3d0_37741567 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_667633973627fcd4e55f3d0_37741567',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
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
    <li class="current"><a href="#">Kontakt</a></li>
    
    



<?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_1700702295627fcd4e566350_02550917 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1700702295627fcd4e566350_02550917',
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
										<h1>Strona w budowie!</h1> </br>
                                        
										
									</header>

									

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
