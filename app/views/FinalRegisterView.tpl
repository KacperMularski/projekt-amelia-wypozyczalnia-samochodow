{extends file="main.tpl"}

{block name=end}Wszelkie prawa zastrzeżone!{/block}

{block name=menu}


    <li><a href="{$conf->action_url}">Strona główna</a></li>
    <li><a href="{$conf->action_url}rent_page">Wypożycz</a></li>
    <li><a href="{$conf->action_url}offer_page">Oferta</a></li>
    <li class="current"><a href="#">Rejestracja</a></li>
	
	{if \core\RoleUtils::inRole("admin")}
		<li><b><a href="{$conf->action_url}SearchUser">Panel Administratora</a></b>
		</li>	
	{/if}

{/block}

{block name=content}

<section class="wrapper style1">
					<div class="container">
						<div id="content">
								<article>
									<header>
										<h1>Utworzono pomyślnie konto!</h1> </br>
                                        <h1><ul><li><a href="{$conf->action_url}login_page">Kliknij tutaj aby przejść na stronę logowania</a></li></ul></h1>
										
									</header>
								</article>

						</div>
					</div>
				</section>

{/block}