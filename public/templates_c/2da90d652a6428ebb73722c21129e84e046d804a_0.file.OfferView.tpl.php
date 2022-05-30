<?php
/* Smarty version 4.1.0, created on 2022-05-29 15:47:51
  from 'C:\xampp\htdocs\amelia\app\views\OfferView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62937987afe8b2_38767902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2da90d652a6428ebb73722c21129e84e046d804a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\OfferView.tpl',
      1 => 1653585229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62937987afe8b2_38767902 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152697573762937987aec763_22385060', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173858266662937987aed0b2_55012328', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45237482462937987af4828_92272206', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_152697573762937987aec763_22385060 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_152697573762937987aec763_22385060',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_173858266662937987aed0b2_55012328 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_173858266662937987aed0b2_55012328',
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
class Block_45237482462937987af4828_92272206 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_45237482462937987af4828_92272206',
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
