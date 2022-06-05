{extends file="main_admin.tpl"}

{block name=end}Wszelkie prawa zastrzeżone!{/block}

{block name=menu}

	<li><a href="{$conf->action_url}SearchUser">Użytkownicy</a></li>
    <li class="current"><a href="{$conf->action_url}SearchRent">Wypożyczenia</a></li>
    <li><a href="{$conf->action_url}SearchCar">Samochody</a></li>
    <li><a href="{$conf->action_url}adminPracownicyPage">Pracownicy</a></li>
     
{/block}

{block name=content}

<section class="wrapper style1">
					<div class="container">
						<div id="content">

								<article>
									<header>
										<h2>Tabela wypożyczenia</h2>
										
									</header>

									<section class="col-6 col-12-narrower">
										
										<form action="{$conf->action_url}SearchRent" method="post">
											<div class="row gtr-50">
												<div class="col-6 col-12-mobilep">
													{if !isset($form->surname_search)}
												    	<input id="id_surname_search" type="text" name="surname_search" placeholder="Nazwisko"/>
													{/if}
													{if isset($form->surname_search)}
														<input id="id_surname_search" type="text" name="surname_search" placeholder="Nazwisko" value="{$form->surname_search}"/>
													{/if}
												</div>

                                                
												<div class="col-6 col-12-mobilep">
													{if !isset($form->mark_search)}
												    	<input id="id_mark_search" type="text" name="mark_search" placeholder="Marka"/>
													{/if}
													{if isset($form->mark_search)}
														<input id="id_mark_search" type="text" name="mark_search" placeholder="Model" value="{$form->mark_search}"/>
													{/if}
												</div>

                                                <div class="col-6 col-12-mobilep">
													{if !isset($form->model_search)}
												    	<input id="id_model_search" type="text" name="model_search" placeholder="Model"/>
													{/if}
													{if isset($form->model_search)}
														<input id="id_model_search" type="text" name="model_search" placeholder="Model" value="{$form->model_search}"/>
													{/if}
												<br>
                                                <b> Wartość wypożyczenia</b> </br>
                                                        {if isset($form->price_sort) && $form->price_sort == "rosnaco"}
                                                        <label class="radio-button">  Rosnąco 
                                                            <input type="radio" checked="checked" name="price_sort" value="rosnaco">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="radio-button"> Malejąco 
                                                            <input type="radio" name="price_sort" value="malejaco">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        {/if}

                                                        {if isset($form->price_sort) && $form->price_sort == "malejaco"}
                                                        <label class="radio-button">  Rosnąco 
                                                            <input type="radio" name="price_sort" value="rosnaco">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="radio-button"> Malejąco 
                                                            <input type="radio" name="price_sort" value="malejaco" checked="checked">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        {/if}

                                                        {if !isset($form->price_sort)}
                                                        <label class="radio-button">  Rosnąco 
                                                            <input type="radio" checked="checked" name="price_sort" value="rosnaco">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        
                                                        <label class="radio-button"> Malejąco 
                                                            <input type="radio" name="price_sort" value="malejaco">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        {/if}
                                                        <br>
                                                </div>
												<div class="col-12">
													<ul class="actions">
														<li><input type="submit" class="button alt" value="Filtruj" /></li>
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
                                                    <p>Marka </p>
												</td> 

                                                <td>
                                                    <p> Model </p>
												</td> 

                                                <td>
                                                    <p> Imie </p>
												</td> 

                                                <td>
                                                    <p> Nazwisko </p>
												</td> 

                                                <td>
                                                    <p> Wartość </p>
												</td> 

                                                <td>
                                                    <p> Data wypożyczenia </p>
												</td> 

                                                <td>
                                                    <p> Data zwrotu </p>
												</td> 
												
												<td>
                                                    <p> Miasto</p>
												</td> 
											</tr>
										</thead>

                                        <tbody>

                                            {foreach $records as $value}
                                                <tr>
                                                    <td>{$value['id_wypozyczenia']}</td>
                                                    <td>{$value['marka']}</td>
                                                    <td>{$value['model']}</td>
                                                    <td>{$value['imie']}</td>
                                                    <td>{$value['nazwisko']}</td>
                                                    <td>{$value['wart_wyp']} zł</td>
                                                    <td>{$value['data_wyp']}</td>
                                                    <td>{$value['data_zw']}</td>
													<td>{$value['miasto']}</td>
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