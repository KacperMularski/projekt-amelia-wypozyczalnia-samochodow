{extends file="main.tpl"}

{block name=end}Wszelkie prawa zastrzeżone!{/block}

{block name=menu}


    <li><a href="{$conf->action_url}">Strona główna</a></li>
    <li class="current"><a href="{$conf->action_url}rent_page">Wypożycz</a></li>
    <li><a href="{$conf->action_url}offer_page">Oferta</a></li>
    <li>
        <a href="#">Rejestracja</a>
        <ul>
			{if count($conf->roles)==0}
            <li><a href="{$conf->action_url}login_page">Zaloguj</a></li>
			{/if}
            <li><a href="{$conf->action_url}register_page">Zarejestruj</a></li>

        </ul>
    </li>
    
{/block}

{block name=content}

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

                                                

                                                <form action="{$conf->action_url}rentSearch" method="post" id="place">

                                                <b>Miejsce rezerwacji</b>

                                                <div class="box">
                                                    {if !isset($form->placowka)}
                                                        <select name="placowka" id="id_places" form="place">
                                                        <option value="none" selected disabled hidden selected>Wybierz miasto</option>
                                                        <option value="1">Dąbrowa Górnicza, ul.Sienkiewicza 2 </option>
                                                        <option value="2">Sosnowiec</option>
                                                        <option value="3">Chorzów</option>
                                                        <option value="4">Katowice</option>
                                                        <option value="5">Warszawa</option>
                                                        </select>
                                                    {/if}

                                                    {if isset($form->placowka)}       
                                                        <select name="placowka" id="id_places" form="place"> 
                                                            {if $form->placowka == 1}
                                                                <option value="1" selected >Dąbrowa Górnicza, ul.Sienkiewicza 2 </option>
                                                            {/if}
                                                            {if $form->placowka != 1}
                                                                <option value="1" >Dąbrowa Górnicza, ul.Sienkiewicza 2 </option>
                                                            {/if}   

                                                            {if $form->placowka == 2}
                                                                <option value="2" selected>Sosnowiec</option>    
                                                            {/if}
                                                            {if $form->placowka != 2}
                                                                <option value="2">Sosnowiec</option>    
                                                            {/if}

                                                            {if $form->placowka == 3}
                                                                <option value="3" selected>Chorzów</option>
                                                            {/if}
                                                            {if $form->placowka != 3}
                                                                <option value="3">Chorzów</option>
                                                            {/if}

                                                            {if $form->placowka == 4}
                                                                <option value="4" selected>Katowice</option>
                                                            {/if}
                                                            {if $form->placowka != 4}
                                                                <option value="4">Katowice</option>
                                                            {/if}

                                                            {if $form->placowka == 5}
                                                                <option value="5" selected>Warszawa</option>
                                                            {/if}
                                                            {if $form->placowka != 5}
                                                                <option value="5">Warszawa</option>
                                                            {/if}
                                                
                                                        </select>
                                                    {/if}


                                                </div></br>
                                                <b>Data odbioru:</b>
                                                <div class="row gtr-50">

                                                {if !isset($form->data_wyp)}
                                                    <div class="col-6 col-12-mobilep">
                                                        <input id="id_data_wyp" type="date"  name="data_wyp"  />	
                                                    </div>
                                                {/if}
                                                {if isset($form->data_wyp)}
                                                    <div class="col-6 col-12-mobilep">
                                                        <input id="id_data_wyp" type="date"  name="data_wyp" value="{$form->data_wyp}" />	
                                                    </div>
                                                {/if}

                                                </div></br>
                                                <b>Data zwrotu:</b>
                                                <div class="row gtr-50">
                                                {if !isset($form->data_zw)}
                                                    <div class="col-6 col-12-mobilep">
                                                        <input id="id_data_wyp" type="date"  name="data_zw"  />	
                                                    </div>
                                                {/if}
                                                {if isset($form->data_zw)}
                                                    <div class="col-6 col-12-mobilep">
                                                        <input id="id_data_wyp" type="date"  name="data_zw" value="{$form->data_zw}"/>	
                                                    </div>
                                                {/if}

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
                                                        {if isset($form->cena) && $form->cena == "rosnaco"}
                                                        <label class="radio-button">  Rosnąco 
                                                            <input type="radio" checked="checked" name="cena" value="rosnaco">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="radio-button"> Malejąco 
                                                            <input type="radio" name="cena" value="malejaco">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        {/if}

                                                        {if isset($form->cena) && $form->cena == "malejaco"}
                                                        <label class="radio-button">  Rosnąco 
                                                            <input type="radio" name="cena" value="rosnaco">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="radio-button"> Malejąco 
                                                            <input type="radio" name="cena" value="malejaco" checked="checked">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        {/if}

                                                        {if !isset($form->cena)}
                                                        <label class="radio-button">  Rosnąco 
                                                            <input type="radio" checked="checked" name="cena" value="rosnaco">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        
                                                        <label class="radio-button"> Malejąco 
                                                            <input type="radio" name="cena" value="malejaco">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        {/if}
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

                                                {if $msgs->getMessages()}
										<h3> Błędy: </h3>
										<ol class="errors">
										{foreach $msgs->getMessages() as $msg}
										<li>
		
														{if $msg->isError()}
														
														{/if}
											{$msg->text}
											</br></li>

										{/foreach}
										</ol>
										{/if}

                                        <!-- 
                                        {$form->placowka}
                                        {$form->data_wyp}
                                        {$form->data_zw}
                                        {$form->cena}
                                        {foreach $form->skrzynia as $value}
                                                {$value} <br/>
                                        {/foreach}

                                        
                                        {foreach $form->paliwo as $value}
                                                {$value} <br/>
                                        {/foreach}
                                        -->
						
											</header>


                                        </article>

											

								</div>
							</div>
						</div>


					</div>
				</section>

{/block}