<?php
/* Smarty version 4.1.0, created on 2022-05-30 12:02:05
  from 'C:\xampp\htdocs\amelia\app\views\RentCarPayView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6294961dd99181_22776774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d8b08391d19e8e0d921a2a2bd5656607e97f059' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\RentCarPayView.tpl',
      1 => 1653840912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6294961dd99181_22776774 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13816810216294961dd82412_08337291', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18746803456294961dd82d74_97568268', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15071942486294961dd8a802_69718495', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_13816810216294961dd82412_08337291 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_13816810216294961dd82412_08337291',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_18746803456294961dd82d74_97568268 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_18746803456294961dd82d74_97568268',
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

<?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_15071942486294961dd8a802_69718495 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15071942486294961dd8a802_69718495',
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

                                    <!--
                                    id_pojazdu:<?php echo $_smarty_tpl->tpl_vars['vehicle']->value["id_pojazdu"];?>
 
                                    <br>
                                    id_usera: <?php echo \core\SessionUtils::load("user_id",true);?>

                                    <br>
                                    id_placowki: <?php echo $_smarty_tpl->tpl_vars['placowka']->value;?>

                                    <br>
                                    data_wyp: <?php echo $_smarty_tpl->tpl_vars['data_wyp']->value;?>

                                    <br>
                                    data_zw: <?php echo $_smarty_tpl->tpl_vars['data_zw']->value;?>

                                    <br>
                                    wartosc rezerwacji: <?php echo $_smarty_tpl->tpl_vars['rentValue']->value;?>
 <br>
                                    <?php echo date("Y-m-d");?>

                                    -->
                                    
                                    
                                    
                                    
                                    
							</article>

                                


						</div>                       
					</div>
</section>

<?php
}
}
/* {/block 'content'} */
}
