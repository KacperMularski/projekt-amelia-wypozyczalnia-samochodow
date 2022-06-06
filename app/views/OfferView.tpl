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
										<h2>Samochody z naszej oferty</h2>
                                        <b>Strona: {$offset}</b>

                                        {if $previous_page > 0}
                                    <a href="{$conf->action_url}offer_page/{$previous_page}"  class="button alt"><i class="fa-solid fa-angle-left"></i></a>
                                    {/if}

                                    {if ! $previous_page > 0}
                                    <a href="" class="button alt"><i class="fa-solid fa-angle-left"></i></a>
                                    {/if}

                                    {if $isNextPage}
                                    <a href="{$conf->action_url}offer_page/{$next_page}" class="button alt"><i class="fa-solid fa-angle-right"></i></a>   
                                    {/if}  

                                    {if !$isNextPage}
                                    <a href="" class="button alt"><i class="fa-solid fa-angle-right"></i></a>   
                                    {/if} 
                                    
									</header>

                                    <br>
                                    {if isset($vehicle)}    
                                        {foreach $vehicle as $value}

                                        <a href =""><div class="imgBorder">
                                        <img src="{$conf->app_root}/car_image/{$value["img"]}" alt="błąd" />
                                        
                                        <ul>
                                        <h1>{$value["marka"]} {$value["model"]}</h1>
                                        <li><i class="fa-solid fa-rocket"></i> {$value["poj_silnika"]}cm<sup>3</sup> </li>
                                        <li><i class="fa-solid fa-gas-pump"></i> {$value["rodz_paliwa"]} </li>
                                        <li><i class="fa-solid fa-gears"></i> {$value["skrzynia"]} </li>
                                        <li><i class="fa-solid fa-people-group"></i> Miejsca: {$value["liczba_miejsc"]} </li>
                                        <h2> Cena za dobę: {$value["cena_doba"]}zł </h2>

                                        </ul>
                                        
                                        </div></a>
                                        <br>
                    
                                        {/foreach}
                                    {/if}
                                    
                                </article>

                        </div>
                    </div>
    </section>

{/block}