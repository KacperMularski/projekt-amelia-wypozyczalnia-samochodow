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
										
									</header>
                                    
                                    id_pojazdu: {$id_pojazdu} 
                                    <br>
                                    id_usera: {\core\SessionUtils::load("user_id", true)}
                                    <br>
                                    id_placowki: {$placowka}
                                    <br>
                                    data_wyp: {$data_wyp}
                                    <br>
                                    data_zw: {$data_zw}
                    
									

									<!--<span class="image featured"><img src="images/banner.jpg" alt="" /></span>-->

									
								</article>

						</div>
					</div>
				</section>

{/block}