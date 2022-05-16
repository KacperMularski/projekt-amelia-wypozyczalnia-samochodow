{extends file="main.tpl"}

{block name=end}Wszelkie prawa zastrzeżone!{/block}

{block name=menu}


    <li><a href="{$conf->action_url}">Strona główna</a></li>
    <li><a href="right-sidebar.html">Wypożycz</a></li>
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
    <li><a href="{$conf->action_url}contact_page">Kontakt</a></li>
    
    



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
                                        <h1>BMW 330i M SPORT</h1>
                                        <ul>
                                        <li>Silnik: 4500cm<sup>3</sup> </li>
                                        <li>Paliwo: Benzyna </li>
                                        <li>Skrzynia: automatyczna </li>
                                        <li>Liczba miejsc: 5 </li>
                                        </ul>
                                        <h2> Cena za dobę: 1200zł </h2>
                                    </div></a>

                                    </br>

                                    <a href ="#"><div class="imgBorder">
                                        <img src="images/mustang.png" alt="" />
                                        <h1>FORD Mustang</h1>
                                        <ul>
                                        <li>Silnik: 5000cm<sup>3</sup> </li>
                                        <li>Paliwo: Benzyna </li>
                                        <li>Skrzynia: manualna </li>
                                        <li>Liczba miejsc: 4 </li>
                                        </ul>
                                        <h2> Cena za dobę: 1000zł </h2>
                                    </div></a>
                                    
                                    
                                   

                                </article>

                        </div>
                    </div>
    </section>

{/block}