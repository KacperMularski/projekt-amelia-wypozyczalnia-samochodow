{extends file="main.tpl"}

{block name=end}Wszelkie prawa zastrzeżone!{/block}

{block name=menu}


    <li><a href="{$conf->action_url}">Strona główna</a></li>
    <li><a href="{$conf->action_url}rent_page">Wypożycz</a></li>
    <li><a href="{$conf->action_url}offer_page">Oferta</a></li>
    <li><a href="#">Rejestracja</a></li>

	{if \core\RoleUtils::inRole("admin")}
		<li><b><a href="{$conf->action_url}adminUzytkownicyPage">Panel Administratora</a></b>
		</li>	
	{/if}

{/block}

{block name=content}

<section class="wrapper style1">
					<div class="container">
						<div id="content">

								<article>
									<header>
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
										
									</header>
									
								</article>

						</div>
					</div>
</section>

{/block}