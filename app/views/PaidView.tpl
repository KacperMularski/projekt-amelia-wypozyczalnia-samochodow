{extends file="main.tpl"}

{block name=end}Wszelkie prawa zastrzeżone!{/block}

{block name=menu}


    <li><a href="{$conf->action_url}">Strona główna</a></li>
    <li><a href="{$conf->action_url}rent_page">Wypożycz</a></li>
    <li><a href="{$conf->action_url}offer_page">Oferta</a></li>
    <li class="current"><a href="#">Rejestracja</a></li>

{/block}

{block name=content}

<section class="wrapper style1">
					<div class="container">
						<div id="content">

							<!-- Content -->

								<article>
									<header>

									
                                    {$form->platnosc } <br>
                                    {$form->id_pojazdu } <br>
                                    {$form->placowka } <br>
                                    {$form->rentValue } <br>
                                    {$form->data_wyp } <br>
                                    {$form->data_zw }
										
									</header>

									

									<!--<span class="image featured"><img src="images/banner.jpg" alt="" /></span>-->

									
								</article>

						</div>
					</div>
				</section>

{/block}