{extends file="main.tpl"}

{block name=end}Wszelkie prawa zastrzeżone!{/block}

{block name=menu}


    <li><a href="{$conf->action_url}">Strona główna</a></li>
    <li><a href="{$conf->action_url}rent_page">Wypożycz</a></li>
    <li class="current"><a href="{$conf->action_url}offer_page">Oferta</a></li>
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
										<h2>Samochody z naszej oferty</h2>
									</header>

                                    <a href ="#"><div class="imgBorder">
                                        <img src="images/bmw_330i_m_sport.png" alt="" />
                                        
                                        <ul>
                                            <h1>BMW 330i M SPORT</h1>
                                            <li><i class="fa-solid fa-rocket"></i> 4500cm<sup>3</sup> </li>
                                            <li><i class="fa-solid fa-gas-pump"></i>  Benzyna </li>
                                            <li><i class="fa-solid fa-gears"></i>  Automatyczna </li>
                                            <li><i class="fa-solid fa-people-group"></i> Pięć miejsc </li>
                                            <h2> Cena za dobę: 1200zł </h2>
                                        </ul>
                                        
                                    </div></a>

                                    </br>

                                    <a href ="#"><div class="imgBorder">
                                        <img src="images/mustang.png" alt="" />
                                        
                                        <ul>
                                        <h1>FORD Mustang</h1>
                                        <li><i class="fa-solid fa-rocket"></i> 5000cm<sup>3</sup> </li>
                                        <li><i class="fa-solid fa-gas-pump"></i> Benzyna </li>
                                        <li><i class="fa-solid fa-gears"></i> Manualna </li>
                                        <li><i class="fa-solid fa-people-group"></i> Cztery miejsca </li>
                                        <h2> Cena za dobę: 1000zł </h2>

                                        </ul>
                                        
                                    </div></a>
                                    
                                    
                                   

                                </article>

                        </div>
                    </div>
    </section>

{/block}