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

                                        <u><h2 class="rentCarInfo"> Szczegóły rezerwacji  </h2></u><br>
                                    
									</header>

										{if $msgs->getMessages()}
										        <h3> Błędy: </h3>
                                                <ol class="errors">
                                                    {foreach $msgs->getMessages() as $msg}
                                                    <li>
                                                        {if $msg->isError()}
                                                        {/if}
                                                        {$msg->text}
                                                        </br>
                                                    </li>

                                                    {/foreach}
										        </ol>
										        {/if}
										

                                    
                                    
                                    <h3 class="rentCarInfo"> Data wypożyczenia: <i>  {$data_wyp}</i> </h3>
                                    
                                    <h3 class="rentCarInfo"> Data zwrotu: <i>  {$data_zw}</i>  </h3>
                                    
                    
                                    
                                        <div class="imgBorder">
                                        <img src="{$conf->app_root}/car_image/{$vehicle["img"]}" alt="" />
                                        
                                        <ul>
                                        <h1>{$vehicle["marka"]} {$vehicle["model"]}</h1>
                                        <li><i class="fa-solid fa-rocket"></i> {$vehicle["poj_silnika"]}cm<sup>3</sup> </li>
                                        <li><i class="fa-solid fa-gas-pump"></i> {$vehicle["rodz_paliwa"]} </li>
                                        <li><i class="fa-solid fa-gears"></i> {$vehicle["skrzynia"]} </li>
                                        <li><i class="fa-solid fa-people-group"></i> Miejsca: {$vehicle["liczba_miejsc"]} </li>
                                        <h2> Cena {$vehicle["cena_doba"]}zł </h2>

                                        </ul>
                                        
                                        </div>
                                        <br>
                                        
                                       
                                    
                                    <h3> Wartość rezerwacji:</h3> </h2><h3><i>{$daysValue} x {$vehicle["cena_doba"]}zł </i> </h3>
                                    <hr style="height: 2px; background: gray; border: 0px;"> 
                                    <h3>Do zapłacenia: <i> {$rentValue} zł </i></h3>
                                    <hr style="height: 2px; background: gray; border: 0px;"> 
                                    
                                    <form action="{$conf->action_url}rentPay" method="post" id="pay">

                                                
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
                                    id_pojazdu:{$vehicle["id_pojazdu"]} 
                                    <br>
                                    id_usera: {\core\SessionUtils::load("user_id", true)}
                                    <br>
                                    id_placowki: {$placowka}
                                    <br>
                                    data_wyp: {$data_wyp}
                                    <br>
                                    data_zw: {$data_zw}
                                    <br>
                                    wartosc rezerwacji: {$rentValue} <br>
                                    {date("Y-m-d")}
                                    -->
                                    
                                    
                                    
                                    
                                    
							</article>

                                


						</div>                       
					</div>
</section>

{/block}

