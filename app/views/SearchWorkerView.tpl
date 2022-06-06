{extends file="main_admin.tpl"}

{block name=end}Wszelkie prawa zastrzeżone!{/block}

{block name=menu}

	<li><a href="{$conf->action_url}SearchUser">Użytkownicy</a></li>
    <li><a href="{$conf->action_url}SearchRent">Wypożyczenia</a></li>
    <li><a href="{$conf->action_url}SearchCar">Samochody</a></li>
    <li class="current"><a href="{$conf->action_url}SearchWorker">Pracownicy</a></li>
     
{/block}

{block name=content}

<section class="wrapper style1">
					<div class="container">
						<div id="content">

								<article>
									<header>
										<h2>Tabela pracownicy</h2>
										
									</header>

									<section class="col-6 col-12-narrower">
										
										<form action="{$conf->action_url}SearchWorker" method="post" id="place">
											<div class="row gtr-50">
												<div class="col-6 col-12-mobilep">
													{if !isset($form->surname_search)}
												    	<input id="id_surname_search" type="text" name="surname_search" placeholder="Nazwisko"/>
													{/if}
													{if isset($form->surname_search)}
														<input id="id_surname_search" type="text" name="surname_search" placeholder="Nazwisko" value="{$form->surname_search}"/>
													{/if}
												
                                                <br>
                                                <b>Placówka</b>
                                                <div class="box">
                                                    {if !isset($form->place_search)}
                                                        <select name="place_search" id="id_place_search" form="place">
                                                        <option value="1"> Dowolna </option>
                                                        <option value="2">Dąbrowa Górnicza, ul.Sienkiewicza 2 </option>
                                                        <option value="3">Sosnowiec, ul.Krzywa 5</option>
                                                        <option value="4">Katowice, ul.Piłsudskiego 22</option>
                                                        <option value="5">Warszawa, ul.Złota 13</option>
                                                        <option value="6">Poznań, ul.Korzenna 2</option>
                                                        </select>
                                                    {/if}

                                                    {if isset($form->place_search)}       
                                                        <select name="place_search" id="id_place_search" form="place"> 

                                                            {if $form->place_search == 1}
                                                                <option value="1" selected > Dowolna </option>
                                                            {/if}
                                                            {if $form->place_search != 1}
                                                                <option value="1" > Dowolna </option>
                                                            {/if}

                                                            {if $form->place_search == 2}
                                                                <option value="2" selected >Dąbrowa Górnicza, ul.Sienkiewicza 2 </option>
                                                            {/if}
                                                            {if $form->place_search != 2}
                                                                <option value="2" >Dąbrowa Górnicza, ul.Sienkiewicza 2 </option>
                                                            {/if}   

                                                            {if $form->place_search == 3}
                                                                <option value="3" selected>Sosnowiec, ul.Krzywa 5</option>    
                                                            {/if}
                                                            {if $form->place_search != 3}
                                                                <option value="3">Sosnowiec, ul.Krzywa 5</option>    
                                                            {/if}

                                                            {if $form->place_search == 4}
                                                                <option value="4" selected>Katowice, ul.Piłsudskiego 22</option>
                                                            {/if}
                                                            {if $form->place_search != 4}
                                                                <option value="4">Katowice, ul.Piłsudskiego 22</option>
                                                            {/if}

                                                            {if $form->place_search == 5}
                                                                <option value="5" selected>Warszawa, ul.Złota 13</option>
                                                            {/if}
                                                            {if $form->place_search != 5}
                                                                <option value="5">Warszawa, ul.Złota 13</option>
                                                            {/if}

                                                            {if $form->place_search == 6}
                                                                <option value="6" selected>Poznań, ul.Korzenna 2</option>
                                                            {/if}
                                                            {if $form->place_search != 6}
                                                                <option value="6">Poznań, ul.Korzenna 2</option>
                                                            {/if}
                                                
                                                        </select>
                                                    {/if}


                                                </div></br>
                                            </div>

											
												<div class="col-12">
													<ul class="actions">
														<li><input type="submit" class="button alt" value="Filtruj" /></li>
                                                        <li><a href="{$conf->action_url}AddWorker" class="button">+ Dodaj pracownika</a></li>
													</ul>
												</div>
											</div>
										</form>

                                        <br>

                                        {if $msgs->getMessages()}										
										
										{foreach $msgs->getMessages() as $msg}
										
		
														{if $msg->isInfo()}
															<ul class="infos">
															<li>{$msg->text}</li>
															</ul>
														{/if}

														{if $msg->isError()}
															<ol class="errors">
																<li>{$msg->text}</li>
															</ol>
														{/if}
											
											</br>

										{/foreach}
										
										{/if}

										

                                        <table class="pure-table pure-table-bordered">

										<thead>
											<tr> 
												<td>
                                                    <p> ID </p>
												</td> 

                                                <td>
                                                    <p> Miejsce pracy </p>
												</td> 

                                                <td>
                                                    <p> Imie </p>
												</td> 

                                                <td>
                                                    <p> Nazwisko </p>
												</td> 

                                                <td>
                                                    <p> Data urodzenia </p>
												</td> 

                                                <td>
                                                    <p> Miasto </p>
												</td> 

                                                <td>
                                                    <p> Ulica </p>
												</td> 

                                                <td>
                                                    <p> Numer domu </p>
												</td> 

                                                <td>
                                                    <p> Kod pocztowy </p>
												</td> 

                                                <td>
                                                    <p> Telefon </p>
												</td> 

                                                <td>
                                                    <p> NIP </p>
												</td>

                                                <td>
                                                    <p> Data zatrudnienia </p>
												</td>

                                                <td>
                                                    <p> Aktywny </p>
												</td>

                                                <td>
                                                    <p> Opcje </p>
												</td>
											</tr>
										</thead>

                                        <tbody>

                                            {foreach $records as $value}
                                                <tr>
                                                    <td>{$value['id_pracownika']}</td>
                                                    <td>{$value['placowka_id_placowki']}</td>
                                                    <td>{$value['imie']}</td>
                                                    <td>{$value['nazwisko']}</td>
                                                    <td>{$value['data_ur']}</td>
                                                    <td>{$value['miasto']}</td>
                                                    <td>{$value['ulica']}</td>
                                                    <td>{$value['nr_domu_miesz']}</td>
                                                    <td>{$value['kod_pocz']}</td>
                                                    <td>{$value['nr_tel']} </td>
                                                    <td>{$value['nip']} </td>
                                                    <td>{$value['data_zatrud']} </td>
                                                    <td>{$value['czy_aktywny']} </td>
                                                    <td><a href="{url action='EditWorker' id=$value["id_pracownika"]}" class="button">Edytuj</a> </td>
                                                </tr> 
                                            {/foreach} 
                                       </tbody>

                                    </table>

									</section>
	
								</article>

						</div>
					</div>
				</section>

{/block}