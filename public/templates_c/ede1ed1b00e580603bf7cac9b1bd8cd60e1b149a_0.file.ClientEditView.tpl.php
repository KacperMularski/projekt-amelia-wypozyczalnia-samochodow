<?php
/* Smarty version 4.1.0, created on 2022-05-14 17:46:36
  from 'C:\xampp\htdocs\amelia\app\views\ClientEditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627fcedcbc1b94_35253753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ede1ed1b00e580603bf7cac9b1bd8cd60e1b149a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\ClientEditView.tpl',
      1 => 1652537780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627fcedcbc1b94_35253753 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1280217503627fcedcbba1e9_19239567', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1024310528627fcedcbbabb4_88595257', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1789372170627fcedcbbe6b5_57624517', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_1280217503627fcedcbba1e9_19239567 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_1280217503627fcedcbba1e9_19239567',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_1024310528627fcedcbbabb4_88595257 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_1024310528627fcedcbbabb4_88595257',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
">Strona główna</a></li>
    <li><a href="right-sidebar.html">Wypożycz</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
offer_page">Oferta</a></li>
    <li class="current"><a href="#">Rejestracja</a></li>
    <li><a href="left-sidebar.html">Kontakt</a></li>
    
    



<?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_1789372170627fcedcbbe6b5_57624517 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1789372170627fcedcbbe6b5_57624517',
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
										<h1>Twoje dane</h1> </br>
										
									</header>

                                    <table class="table">
                                    <tr> 
                                    <td><h3>Login</h3> <?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
</td>  
                                    <td><h3>Hasło:</h3> <?php echo $_smarty_tpl->tpl_vars['form']->value->haslo;?>
</td>  
                                    <td><h3>E-mail:</h3> <?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
</td>  
                                    </tr>

                                    <tr>
                                    <td><h3>Imie:</h3> <?php echo $_smarty_tpl->tpl_vars['form']->value->imie;?>
</td>  
                                    <td><h3>Nazwisko:</h3> <?php echo $_smarty_tpl->tpl_vars['form']->value->nazwisko;?>
</td>  
                                    <td><h3>Data urodzenia:</h3> <?php echo $_smarty_tpl->tpl_vars['form']->value->data_ur;?>
</td> 
                                    <td><h3>Numer prawa jazdy:</h3> <?php echo $_smarty_tpl->tpl_vars['form']->value->nr_pr_jazdy;?>
</td> 
                                    <td><h3>Numer telefonu:</h3> <?php echo $_smarty_tpl->tpl_vars['form']->value->nr_tel;?>
</td> 
                                    </tr>
                                        
                                        
                                    
                                    
                                   

                                    </table>
                                    

									

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
