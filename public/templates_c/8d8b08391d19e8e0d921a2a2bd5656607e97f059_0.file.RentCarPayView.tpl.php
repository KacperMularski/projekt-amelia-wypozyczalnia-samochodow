<?php
/* Smarty version 4.1.0, created on 2022-06-05 15:44:10
  from 'C:\xampp\htdocs\amelia\app\views\RentCarPayView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629cb32a9c78c1_93065032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d8b08391d19e8e0d921a2a2bd5656607e97f059' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\RentCarPayView.tpl',
      1 => 1654426336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629cb32a9c78c1_93065032 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1516585481629cb32a9b2978_49365442', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_419251734629cb32a9b32b0_37198602', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1069850935629cb32a9bb738_26120502', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_1516585481629cb32a9b2978_49365442 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_1516585481629cb32a9b2978_49365442',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_419251734629cb32a9b32b0_37198602 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_419251734629cb32a9b32b0_37198602',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
">Strona główna</a></li>
    <li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
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
class Block_1069850935629cb32a9bb738_26120502 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1069850935629cb32a9bb738_26120502',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section class="wrapper style1">
					<div class="container">
						<div id="content">

								<article>
									<header>

                                        <u><h2 class="rentCarInfo"> Szczegóły rezerwacji  </h2></u><br>
                                    
									</header>

										<?php if ($_smarty_tpl->tpl_vars['msgs']->value->getMessages()) {?>
										        <h3> Błędy: </h3>
                                                <ol class="errors">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                                                    <li>
                                                        <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>
                                                        <?php }?>
                                                        <?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>

                                                        </br>
                                                    </li>

                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										        </ol>
										        <?php }?>
							
                                    
                                        <h3 class="rentCarInfo"> Data wypożyczenia: <i>  <?php echo $_smarty_tpl->tpl_vars['data_wyp']->value;?>
</i> </h3>
                                            
                                        <h3 class="rentCarInfo"> Data zwrotu: <i>  <?php echo $_smarty_tpl->tpl_vars['data_zw']->value;?>
</i>  </h3>
                                            
                            
                                    
                                        <div class="imgBorder">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/car_image/<?php echo $_smarty_tpl->tpl_vars['vehicle']->value["img"];?>
" alt="" />
                                        
                                        <ul>
                                        <h1><?php echo $_smarty_tpl->tpl_vars['vehicle']->value["marka"];?>
 <?php echo $_smarty_tpl->tpl_vars['vehicle']->value["model"];?>
</h1>
                                        <li><i class="fa-solid fa-rocket"></i> <?php echo $_smarty_tpl->tpl_vars['vehicle']->value["poj_silnika"];?>
cm<sup>3</sup> </li>
                                        <li><i class="fa-solid fa-gas-pump"></i> <?php echo $_smarty_tpl->tpl_vars['vehicle']->value["rodz_paliwa"];?>
 </li>
                                        <li><i class="fa-solid fa-gears"></i> <?php echo $_smarty_tpl->tpl_vars['vehicle']->value["skrzynia"];?>
 </li>
                                        <li><i class="fa-solid fa-people-group"></i> Miejsca: <?php echo $_smarty_tpl->tpl_vars['vehicle']->value["liczba_miejsc"];?>
 </li>
                                        <h2> Cena <?php echo $_smarty_tpl->tpl_vars['vehicle']->value["cena_doba"];?>
zł </h2>

                                        </ul>
                                        
                                        </div>
                                        <br>
                                        
                                       
                                    
                                        <h3> Wartość rezerwacji:</h3> </h2><h3><i><?php echo $_smarty_tpl->tpl_vars['daysValue']->value;?>
 x <?php echo $_smarty_tpl->tpl_vars['vehicle']->value["cena_doba"];?>
zł </i> </h3>
                                        <hr style="height: 2px; background: gray; border: 0px;"> 
                                        <h3>Do zapłacenia: <i> <?php echo $_smarty_tpl->tpl_vars['rentValue']->value;?>
 zł </i></h3>
                                        <hr style="height: 2px; background: gray; border: 0px;"> 
                                        
                                        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
rentPay" method="post" id="pay">

                                                    
                                                    <b>Wybierz formę płatności</b><br>
                                                    <div class="box">
                                                        
                                                            <select name="platnosc" id="id_platnosc" form="pay">
                                                                <option value="Przelew">Przelew</option>
                                                                <option value="PayU">PayU</option>
                                                                <option value="Blik">Blik</option>
                                                                <option value="PayPal">PayPal</option>
                                                            </select>
                                                        
                                                    </div>
                                                    <br>

                                                    <div class="row gtr-50">
                            
                                                        <div class="col-12">
                                                            <ul class="actions">
                                                                <li><input type="submit" class="button" value="Zapłać" /></li>
                                                                
                                                            </ul>
                                                        </div>

                                                    </div>
                                        </form>
                
                                </article>

                            </div>                       
                        </div>
</section>

<?php
}
}
/* {/block 'content'} */
}
