<?php
/* Smarty version 4.1.0, created on 2022-05-26 21:04:46
  from 'C:\xampp\htdocs\amelia\app\views\RentView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628fcf4e597070_06311231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a88495884436599893f709820300ebed29dc25a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\RentView.tpl',
      1 => 1653591882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628fcf4e597070_06311231 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_476295826628fcf4e56b794_58635626', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1570884159628fcf4e56c107_87287070', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_456893358628fcf4e573413_05805978', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_476295826628fcf4e56b794_58635626 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_476295826628fcf4e56b794_58635626',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_1570884159628fcf4e56c107_87287070 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_1570884159628fcf4e56c107_87287070',
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
class Block_456893358628fcf4e573413_05805978 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_456893358628fcf4e573413_05805978',
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
                                        <div class="window"> 

                                            <div class="window-text">
                                                <b> Rezerwacje:    <i class="fa-solid fa-square-phone"></i> 675-875-674  
                                                <i class="fa-solid fa-square-envelope"></i>  kontakt@racingcars.pl
                                                </b> 
                                            </div>

                                        </div>
									
                                    
									</header>
                                    </br></br>

                                    

									

									<!--<span class="image featured"><img src="images/banner.jpg" alt="" /></span>-->

									
								</article>




						</div>

                        <div class="row gtr-200">
							<div class="col-4 col-12-narrower">
								<div id="sidebar">

									<!-- Sidebar -->

										<section>
                                            <div class="form-border">
                                                <h3>Wybierz miejsce rezerwacji</h3>

                                                

                                                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
rentSearch" method="post" id="place">

                                                <b>Miejsce rezerwacji</b>

                                                <div class="box">
                                                    <?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->placowka))) {?>
                                                        <select name="placowka" id="id_places" form="place">
                                                        <option value="none" selected disabled hidden selected>Wybierz miasto</option>
                                                        <option value="1">Dąbrowa Górnicza, ul.Sienkiewicza 2 </option>
                                                        <option value="2">Sosnowiec, ul.Krzywa 5</option>
                                                        <option value="3">Katowice, ul.Piłsudskiego 22</option>
                                                        <option value="4">Warszawa, ul.Złota 13</option>
                                                        <option value="5">Poznań, ul.Korzenna 2</option>
                                                        </select>
                                                    <?php }?>

                                                    <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->placowka))) {?>       
                                                        <select name="placowka" id="id_places" form="place"> 
                                                            <?php if ($_smarty_tpl->tpl_vars['form']->value->placowka == 1) {?>
                                                                <option value="1" selected >Dąbrowa Górnicza, ul.Sienkiewicza 2 </option>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['form']->value->placowka != 1) {?>
                                                                <option value="1" >Dąbrowa Górnicza, ul.Sienkiewicza 2 </option>
                                                            <?php }?>   

                                                            <?php if ($_smarty_tpl->tpl_vars['form']->value->placowka == 2) {?>
                                                                <option value="2" selected>Sosnowiec, ul.Krzywa 5</option>    
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['form']->value->placowka != 2) {?>
                                                                <option value="2">Sosnowiec, ul.Krzywa 5</option>    
                                                            <?php }?>

                                                            <?php if ($_smarty_tpl->tpl_vars['form']->value->placowka == 3) {?>
                                                                <option value="3" selected>Katowice, ul.Piłsudskiego 22</option>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['form']->value->placowka != 3) {?>
                                                                <option value="3">Katowice, ul.Piłsudskiego 22</option>
                                                            <?php }?>

                                                            <?php if ($_smarty_tpl->tpl_vars['form']->value->placowka == 4) {?>
                                                                <option value="4" selected>Warszawa, ul.Złota 13</option>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['form']->value->placowka != 4) {?>
                                                                <option value="4">Warszawa, ul.Złota 13</option>
                                                            <?php }?>

                                                            <?php if ($_smarty_tpl->tpl_vars['form']->value->placowka == 5) {?>
                                                                <option value="5" selected>Poznań, ul.Korzenna 2</option>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['form']->value->placowka != 5) {?>
                                                                <option value="5">Poznań, ul.Korzenna 2</option>
                                                            <?php }?>
                                                
                                                        </select>
                                                    <?php }?>


                                                </div></br>
                                                
                                                
                                                <b>Data odbioru:</b>
                                                <div class="row gtr-50">

                                                <?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->data_wyp))) {?>
                                                    <div class="col-6 col-12-mobilep">
                                                        <input id="id_data_wyp" type="date"  name="data_wyp"  />	
                                                    </div>
                                                <?php }?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->data_wyp))) {?>
                                                    <div class="col-6 col-12-mobilep">
                                                        <input id="id_data_wyp" type="date"  name="data_wyp" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->data_wyp;?>
" />	
                                                    </div>
                                                <?php }?>

                                                </div></br>
                                                <b>Data zwrotu:</b>
                                                <div class="row gtr-50">
                                                <?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->data_zw))) {?>
                                                    <div class="col-6 col-12-mobilep">
                                                        <input id="id_data_wyp" type="date"  name="data_zw"  />	
                                                    </div>
                                                <?php }?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->data_zw))) {?>
                                                    <div class="col-6 col-12-mobilep">
                                                        <input id="id_data_wyp" type="date"  name="data_zw" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->data_zw;?>
"/>	
                                                    </div>
                                                <?php }?>

                                                </div></br> 

                                                <div class="row gtr-50">
                        
                                                    <div class="col-12">
                                                        <ul class="actions">
                                                            <li><input type="submit" class="button" value="Wyszukaj samochód" /></li>
                                                            
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div><br>


										<div class="form-border">

                                            <h3>Filtry</h3>

                                            

                                                <b> Cena </b> </br>
                                                        <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->cena)) && $_smarty_tpl->tpl_vars['form']->value->cena == "rosnaco") {?>
                                                        <label class="radio-button">  Rosnąco 
                                                            <input type="radio" checked="checked" name="cena" value="rosnaco">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="radio-button"> Malejąco 
                                                            <input type="radio" name="cena" value="malejaco">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <?php }?>

                                                        <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->cena)) && $_smarty_tpl->tpl_vars['form']->value->cena == "malejaco") {?>
                                                        <label class="radio-button">  Rosnąco 
                                                            <input type="radio" name="cena" value="rosnaco">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="radio-button"> Malejąco 
                                                            <input type="radio" name="cena" value="malejaco" checked="checked">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <?php }?>

                                                        <?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->cena))) {?>
                                                        <label class="radio-button">  Rosnąco 
                                                            <input type="radio" checked="checked" name="cena" value="rosnaco">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        
                                                        <label class="radio-button"> Malejąco 
                                                            <input type="radio" name="cena" value="malejaco">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <?php }?>
                                                        <br>

                                                <b> Skrzynia biegów </b> <br> 
                                                

                                                    <?php if ((isset($_smarty_tpl->tpl_vars['checkbox1']->value)) && $_smarty_tpl->tpl_vars['checkbox1']->value == 1) {?>
                                                        <label class="check-box">Manualna
                                                        <input type="checkbox" checked="checked" name="skrzynia[]" value="manual">
                                                        <span class="checkmark_two"></span>
                                                        </label>

                                                        <label class="check-box">Automatyczna
                                                        <input type="checkbox" name="skrzynia[]" value="automat">
                                                        <span class="checkmark_two"></span>
                                                        </label><br>
                                                    <?php }?>

                                                    <?php if ((isset($_smarty_tpl->tpl_vars['checkbox1']->value)) && $_smarty_tpl->tpl_vars['checkbox1']->value == 2) {?>
                                                        <label class="check-box">Manualna
                                                        <input type="checkbox" checked="checked" name="skrzynia[]" value="manual">
                                                        <span class="checkmark_two"></span>
                                                        </label>

                                                        <label class="check-box">Automatyczna
                                                        <input type="checkbox" checked="checked" name="skrzynia[]" value="automat">
                                                        <span class="checkmark_two"></span>
                                                        </label><br>
                                                    <?php }?>

                                                    <?php if ((isset($_smarty_tpl->tpl_vars['checkbox1']->value)) && $_smarty_tpl->tpl_vars['checkbox1']->value == 3) {?>
                                                        <label class="check-box">Manualna
                                                        <input type="checkbox" name="skrzynia[]" value="manual">
                                                        <span class="checkmark_two"></span>
                                                        </label>

                                                        <label class="check-box">Automatyczna
                                                        <input type="checkbox" checked="checked" name="skrzynia[]" value="automat">
                                                        <span class="checkmark_two"></span>
                                                        </label><br>
                                                    <?php }?>

                                                    <?php if (!(isset($_smarty_tpl->tpl_vars['checkbox1']->value)) && !(isset($_smarty_tpl->tpl_vars['skrzynia']->value))) {?>
                                                        <label class="check-box">Manualna
                                                        <input type="checkbox"  name="skrzynia[]"  value="manual">
                                                        <span class="checkmark_two"></span>
                                                        </label>

                                                        <label class="check-box">Automatyczna
                                                        <input type="checkbox"  name="skrzynia[]" value="automat">
                                                        <span class="checkmark_two"></span>
                                                        </label><br>
                                                    <?php }?>

                                                <b> Rodzaj paliwa </b> <br> 

                                                <?php if ((isset($_smarty_tpl->tpl_vars['checkbox2']->value)) && $_smarty_tpl->tpl_vars['checkbox2']->value == 1) {?>
                                                        <label class="check-box">Benzyna
                                                        <input type="checkbox" checked="checked" name="paliwo[]" value="benzyna">
                                                        <span class="checkmark_two"></span>
                                                        </label>

                                                        <label class="check-box">Diesel
                                                        <input type="checkbox"  name="paliwo[]" value="diesel">
                                                        <span class="checkmark_two"></span>
                                                        </label><br>
                                                <?php }?>

                                                <?php if ((isset($_smarty_tpl->tpl_vars['checkbox2']->value)) && $_smarty_tpl->tpl_vars['checkbox2']->value == 2) {?>
                                                        <label class="check-box">Benzyna
                                                        <input type="checkbox" checked="checked" name="paliwo[]" value="benzyna">
                                                        <span class="checkmark_two"></span>
                                                        </label>

                                                        <label class="check-box">Diesel
                                                        <input type="checkbox" checked="checked" name="paliwo[]" value="diesel">
                                                        <span class="checkmark_two"></span>
                                                        </label><br>
                                                <?php }?>

                                                <?php if ((isset($_smarty_tpl->tpl_vars['checkbox2']->value)) && $_smarty_tpl->tpl_vars['checkbox2']->value == 3) {?>
                                                        <label class="check-box">Benzyna
                                                        <input type="checkbox" name="paliwo[]" value="benzyna">
                                                        <span class="checkmark_two"></span>
                                                        </label>

                                                        <label class="check-box">Diesel
                                                        <input type="checkbox" checked="checked" name="paliwo[]" value="diesel">
                                                        <span class="checkmark_two"></span>
                                                        </label><br>
                                                <?php }?>

                                                <?php if (!(isset($_smarty_tpl->tpl_vars['checkbox2']->value)) && !(isset($_smarty_tpl->tpl_vars['skrzynia']->value))) {?>
                                                        <label class="check-box">Benzyna
                                                        <input type="checkbox" name="paliwo[]" value="benzyna">
                                                        <span class="checkmark_two"></span>
                                                        </label>

                                                        <label class="check-box">Diesel
                                                        <input type="checkbox" name="paliwo[]" value="diesel">
                                                        <span class="checkmark_two"></span>
                                                        </label><br>
                                                <?php }?>
                                            </form>	
                                        </div>
										</section>

								</div>
							</div>

							<div class="col-8  col-12-narrower imp-narrower">
								<div id="content">

									<!-- Content -->

										<article>
											<header>
                                            <?php if (!(isset($_smarty_tpl->tpl_vars['vehicle']->value))) {?>   
												<h2>Wypełnij dane rezerwacji</h2>
                                            <?php }?>

                                            <?php if ((isset($_smarty_tpl->tpl_vars['vehicle']->value))) {?>   
												<h2>Liczba wyników: <?php echo $_smarty_tpl->tpl_vars['vehicles_count']->value;?>
</h2>
                                            <?php }?>



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


                                    <?php if ((isset($_smarty_tpl->tpl_vars['vehicle']->value))) {?>    
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vehicle']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>

                                        <a href ="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'rentCar','pojazd'=>$_smarty_tpl->tpl_vars['value']->value['id_pojazdu'],'placowka'=>$_smarty_tpl->tpl_vars['form']->value->placowka),$_smarty_tpl ) );?>
">
                                        <div class="imgBorder">
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
						
											</header>


                                        </article>

											

								</div>
							</div>
						</div>


					</div>
				</section>

<?php
}
}
/* {/block 'content'} */
}
