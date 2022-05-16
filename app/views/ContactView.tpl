{extends file="main.tpl"}

{block name=end}Wszelkie prawa zastrzeżone!{/block}

{block name=menu}


    <li><a href="{$conf->action_url}">Strona główna</a></li>
    <li><a href="right-sidebar.html">Wypożycz</a></li>
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
    <li class="current"><a href="#">Kontakt</a></li>
    
    



{/block}

{block name=content}

<section class="wrapper style1">
					<div class="container">
						<div id="content">

							<!-- Content -->

								<article>
									<header>
										<h1>Strona w budowie!</h1> </br>
                                        
										
									</header>

									

									<!--<span class="image featured"><img src="images/banner.jpg" alt="" /></span>-->

									
								</article>

						</div>
					</div>
				</section>

{/block}