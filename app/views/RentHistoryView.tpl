{extends file="main.tpl"}

{block name=end}Wszelkie prawa zastrzeżone!{/block}

{block name=menu}


    <li><a href="{$conf->action_url}">Strona główna</a></li>
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

{/block}

{block name=content}

<section class="wrapper style1">
					<div class="container">
						<div id="content">

							<!-- Content -->

								<article>
									<header>
										<h2> Historia wypożyczeń </h2>

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

                                    <table class="pure-table pure-table-bordered">

										<thead>
											<tr> 
												<td>
                                                    <p> Marka </p>
												</td> 

                                                <td>
                                                    <p> Model </p>
												</td> 

                                                <td>
                                                    <p> Data wypożyczenia </p>
												</td> 

                                                <td>
                                                    <p> Data zwrotu </p>
												</td> 

                                                <td>
                                                    <p> Wartość </p>
												</td> 
											</tr>
										</thead>

                                        <tbody>

                                            {foreach $form->tab_wypozyczenie as $value}
                                                <tr>
                                                    <td>{$value['marka']}</td>
                                                    <td>{$value['model']}</td>
                                                    <td>{$value['data_wyp']}</td>
                                                    <td>{$value['data_zw']}</td>
                                                    <td>{$value['wart_wyp']} zł </td>
                                                </tr> 
                                            {/foreach} 
                                       </tbody>

                                    </table>
									

									

									
								</article>

						</div>
					</div>
				</section>

{/block}