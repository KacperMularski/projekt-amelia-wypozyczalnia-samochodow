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
		<li><b><a href="{$conf->action_url}adminUzytkownicyPage">Panel Administratora</a></b>
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
                    <a href="#" class="image left"><img src="images/pic01.jpg" alt="" /></a>
                    <div class="inner">
                        <h3>The First Thing</h3>
                        <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                    </div>
                </div>
            </section>
            <section class="col-6 col-12-narrower">
                <div class="box post">
                    <a href="#" class="image left"><img src="images/pic02.jpg" alt="" /></a>
                    <div class="inner">
                        <h3>The Second Thing</h3>
                        <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                    </div>
                </div>
            </section>
        </div>
        <div class="row">
            <section class="col-6 col-12-narrower">
                <div class="box post">
                    <a href="#" class="image left"><img src="images/pic03.jpg" alt="" /></a>
                    <div class="inner">
                        <h3>The Third Thing</h3>
                        <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                    </div>
                </div>
            </section>
            <section class="col-6 col-12-narrower">
                <div class="box post">
                    <a href="#" class="image left"><img src="images/pic04.jpg" alt="" /></a>
                    <div class="inner">
                        <h3>The Fourth Thing</h3>
                        <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
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