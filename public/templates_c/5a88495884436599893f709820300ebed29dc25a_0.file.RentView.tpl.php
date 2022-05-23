<?php
/* Smarty version 4.1.0, created on 2022-05-23 20:44:25
  from 'C:\xampp\htdocs\amelia\app\views\RentView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628bd60991ea69_57029889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a88495884436599893f709820300ebed29dc25a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\RentView.tpl',
      1 => 1653331463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628bd60991ea69_57029889 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73399175628bd6098fd735_01232353', 'end');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1467795833628bd6098fe0c4_99187190', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1797481977628bd6099054c6_76292580', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'end'} */
class Block_73399175628bd6098fd735_01232353 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_73399175628bd6098fd735_01232353',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wszelkie prawa zastrzeżone!<?php
}
}
/* {/block 'end'} */
/* {block 'menu'} */
class Block_1467795833628bd6098fe0c4_99187190 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_1467795833628bd6098fe0c4_99187190',
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
class Block_1797481977628bd6099054c6_76292580 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1797481977628bd6099054c6_76292580',
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
                                                <h3>Wybierz miejsce i datę rezerwacji</h3>

                                                

                                                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
rentSearch" method="post" id="place">

                                                <b>Miejsce rezerwacji</b>

                                                <div class="box">
                                                    <?php if (!(isset($_smarty_tpl->tpl_vars['form']->value->placowka))) {?>
                                                        <select name="placowka" id="id_places" form="place">
                                                        <option value="none" selected disabled hidden selected>Wybierz miasto</option>
                                                        <option value="1">Dąbrowa Górnicza, ul.Sienkiewicza 2 </option>
                                                        <option value="2">Sosnowiec</option>
                                                        <option value="3">Chorzów</option>
                                                        <option value="4">Katowice</option>
                                                        <option value="5">Warszawa</option>
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
                                                                <option value="2" selected>Sosnowiec</option>    
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['form']->value->placowka != 2) {?>
                                                                <option value="2">Sosnowiec</option>    
                                                            <?php }?>

                                                            <?php if ($_smarty_tpl->tpl_vars['form']->value->placowka == 3) {?>
                                                                <option value="3" selected>Chorzów</option>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['form']->value->placowka != 3) {?>
                                                                <option value="3">Chorzów</option>
                                                            <?php }?>

                                                            <?php if ($_smarty_tpl->tpl_vars['form']->value->placowka == 4) {?>
                                                                <option value="4" selected>Katowice</option>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['form']->value->placowka != 4) {?>
                                                                <option value="4">Katowice</option>
                                                            <?php }?>

                                                            <?php if ($_smarty_tpl->tpl_vars['form']->value->placowka == 5) {?>
                                                                <option value="5" selected>Warszawa</option>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['form']->value->placowka != 5) {?>
                                                                <option value="5">Warszawa</option>
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

                                                        <label class="check-box">Manualna
                                                        <input type="checkbox" checked="checked" name="skrzynia[]" value="manual">
                                                        <span class="checkmark_two"></span>
                                                        </label>

                                                        <label class="check-box">Automatyczna
                                                        <input type="checkbox" checked="checked" name="skrzynia[]" value="automat">
                                                        <span class="checkmark_two"></span>
                                                        </label><br>

                                                <b> Rodzaj paliwa </b> <br> 

                                                        <label class="check-box">Benzyna
                                                        <input type="checkbox" checked="checked" name="paliwo[]" value="benzyna">
                                                        <span class="checkmark_two"></span>
                                                        </label>

                                                        <label class="check-box">Diesel
                                                        <input type="checkbox" checked="checked" name="paliwo[]" value="diesel">
                                                        <span class="checkmark_two"></span>
                                                        </label><br>
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
												<h2>Wypełnij dane rezerwacji</h2>

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

											</br></li>

										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</ol>
										<?php }?>

                                        <!-- 
                                        <?php echo $_smarty_tpl->tpl_vars['form']->value->placowka;?>

                                        <?php echo $_smarty_tpl->tpl_vars['form']->value->data_wyp;?>

                                        <?php echo $_smarty_tpl->tpl_vars['form']->value->data_zw;?>

                                        <?php echo $_smarty_tpl->tpl_vars['form']->value->cena;?>

                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form']->value->skrzynia, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                                <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
 <br/>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                        
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form']->value->paliwo, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                                <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
 <br/>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        -->
						
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
