{extends file="main.tpl"}

{block name=end}Wszelkie prawa zastrzeżone!{/block}

{block name=menu}


    <li class="current"><a href="{$conf->action_url}">Strona główna</a></li>
    <li><a href="{$conf->action_url}rent_page">Wypożycz</a></li>
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

    {if \core\RoleUtils::inRole("admin")}
		<li><b><a href="{$conf->action_url}SearchUser">Panel Administratora</a></b>
		</li>	
	{/if}
    
{/block}

{block name=content}


<section id="banner">
    <header>
        
    </header>
</section>


<section class="wrapper style1">
    <div class="container">
        <div class="row gtr-200">
            <section class="col-4 col-12-narrower">
                <div class="box highlight">
                    <i class="icon solid major fa-paper-plane"></i>
                    <h3>BRAK LIMITU KILOMETRÓW</h3>
                </div>
            </section>
            <section class="col-4 col-12-narrower">
                <div class="box highlight">
                    <i class="icon solid major fa-pencil-alt"></i>
                    <h3>NAJTAŃSZY WYNAJEM W KRAJU</h3>  
                </div>
            </section>
            <section class="col-4 col-12-narrower">
                <div class="box highlight">
                    <i class="icon solid major fa-wrench"></i>
                    <h3>OFERUJEMY TYLKO NAJSZYBSZE SAMOCHODY</h3>
                </div>
            </section>
        </div>
    </div>
</section>

<section class="wrapper style2">
    <div class="container">
        <header class="major">
            <h2>Wypożyczalnia samochodów RacingCars to świetny wybór</h2>
            <p>Przekonaj się sam!</p>
            
        </header>
        
    </div>
</section> 

<section class="wrapper style1">
    <div class="container">
        <div class="row">
            <section class="col-6 col-12-narrower">
                <div class="box post">
                    <a href="#" class="image left"><img src="images/toyota-yaris-gr-01.PNG" alt="" /></a>
                    <div class="inner">
                        <h3>Poszukujesz sprawdzonego pojazdu? Przejrzyj naszą ofertę!</h3>
                        <p>Nasze samochody pozyskujemy tylko od zaufanych dostawców.</p>
                    </div>
                </div>
            </section>
            <section class="col-6 col-12-narrower">
                <div class="box post">
                    <a href="#" class="image left"><img src="images/bmw-02.jpg" alt="" /></a>
                    <div class="inner">
                        <h3>Auta premium w RacingCars</h3>
                        <p>Zapoznaj się z szeroką gamą samochodów klasy PREMIUM!</p>
                    </div>
                </div>
            </section>
        </div>
        <div class="row">
            <section class="col-6 col-12-narrower">
                <div class="box post">
                    <a href="#" class="image left"><img src="images/wynajem-03.jpg" alt="" /></a>
                    <div class="inner">
                        <h3>Wynajem samochodu w RacingCars</h3>
                        <p>Nasi klienci mają możliwość złożenia zamówienia online, łącznie z opłaceniem rezerwacji.
                        Oferujemy także rezerwacje drogą telefoniczną lub w jednej z naszych placówek.
                        </p>
                    </div>
                </div>
            </section>
            <section class="col-6 col-12-narrower">
                <div class="box post">
                    <a href="#" class="image left"><img src="images/low-price-04.PNG" alt="" /></a>
                    <div class="inner">
                        <h3>Gwarancja najniższej ceny</h3>
                        <p>Oferujemy atrakcyjne warunki najmu za najniższą cenę.
                        Nie dość, że oferujemy niskie ceny, 
                        to każde auto otrzymasz wraz z ubezpieczeniem AC, OC, NW.
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<section id="cta" class="wrapper style3">
					<div class="container">
						<header>
							<h2>Oferujemy rezerwacje samochodu online!</h2>
							<a href="{$conf->action_url}rent_page" class="button">Sprawdź</a>
						</header>
					</div>
				</section>

{/block}