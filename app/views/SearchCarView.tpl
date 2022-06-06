{extends file="main_admin.tpl"}

{block name=end}Wszelkie prawa zastrzeżone!{/block}

{block name=menu}

	<li><a href="{$conf->action_url}SearchUser">Użytkownicy</a></li>
    <li><a href="{$conf->action_url}SearchRent">Wypożyczenia</a></li>
    <li class="current"><a href="{$conf->action_url}SearchCar">Samochody</a></li>
    <li><a href="{$conf->action_url}SearchWorker">Pracownicy</a></li>
     
{/block}

{block name=content}

<section class="wrapper style1">
					<div class="container">
						<div id="content">

								<article>
									<header>
										<h2>Tabela samochody</h2>
										
									</header>

									<section class="col-6 col-12-narrower">
										
										<form action="{$conf->action_url}SearchCar" method="post">
											<div class="row gtr-50">
												<div class="col-6 col-12-mobilep">
													{if !isset($form->mark_search)}
												    	<input id="id_mark_search" type="text" name="mark_search" placeholder="Marka"/>
													{/if}
													{if isset($form->mark_search)}
														<input id="id_mark_search" type="text" name="mark_search" placeholder="Marka" value="{$form->mark_search}"/>
													{/if}

                                                <br>
                                                <b> Cena za dobę </b> </br>
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

                                                
												<div class="col-6 col-12-mobilep">
													{if !isset($form->model_search)}
												    	<input id="id_model_search" type="text" name="model_search" placeholder="Model"/>
													{/if}
													{if isset($form->model_search)}
														<input id="id_model_search" type="text" name="model_search" placeholder="Model" value="{$form->model_search}"/>
													{/if}
                                                <br>
                                                <b> Wypożyczony </b> </br>
                                                        {if isset($form->rented_search) && $form->rented_search == "tak"}
                                                        <label class="radio-button">  Tak
                                                            <input type="radio" checked="checked" name="rented_search" value="tak">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="radio-button"> Nie 
                                                            <input type="radio" name="rented_search" value="nie">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="radio-button"> Dowolne 
                                                            <input type="radio" name="rented_search" value="">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        {/if}

                                                        {if isset($form->rented_search) && $form->rented_search == "nie"}
                                                        <label class="radio-button">  Tak 
                                                            <input type="radio" name="rented_search" value="tak">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="radio-button"> Nie 
                                                            <input type="radio" name="rented_search" value="nie" checked="checked">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="radio-button"> Dowolne 
                                                            <input type="radio" name="rented_search" value="" >
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        {/if}

                                                        {if isset($form->rented_search) && $form->rented_search == ""}
                                                        <label class="radio-button">  Tak 
                                                            <input type="radio" name="rented_search" value="rosnaco">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="radio-button"> Nie 
                                                            <input type="radio" name="rented_search" value="nie" >
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="radio-button"> Dowolne 
                                                            <input type="radio" name="rented_search" value="" checked="checked">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        {/if}
                                                        
                                                        {if !isset($form->rented_search)}
                                                        <label class="radio-button">  Tak 
                                                            <input type="radio" name="rented_search" value="tak">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        
                                                        <label class="radio-button"> Nie 
                                                            <input type="radio" name="rented_search" value="nie">
                                                            <span class="checkmark"></span>
                                                        </label>

                                                        <label class="radio-button"> Dowolne
                                                            <input type="radio" name="rented_search" checked="checked" value="">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        {/if}
                                                        
												</div>

												<div class="col-12">
													<ul class="actions">
														<li><input type="submit" class="button alt" value="Filtruj" /></li>
														<li><a href="{$conf->action_url}AddCar" class="button">+ Dodaj pojazd</a></li>
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
                                                    <p> Miasto </p>
												</td> 

                                                <td>
                                                    <p> Rok </p>
												</td> 

                                                <td>
                                                    <p> Silnik </p>
												</td> 

                                                <td>
                                                    <p> Paliwo </p>
												</td> 

                                                <td>
                                                    <p> Wypożyczony </p>
												</td> 
												
												<td>
                                                    <p> Cena </p>
												</td> 

                                                <td>
                                                    <p> Miejsca </p>
												</td>

                                                <td>
                                                    <p> Skrzynia </p>
												</td>

                                                <td>
                                                    <p> IMG </p>
												</td>

                                                <td>
                                                    <p> Opcje </p>
												</td>
											</tr>
										</thead>

                                        <tbody>

                                            {foreach $car_records as $value}
                                                <tr>
                                                    <td>{$value['id_pojazdu']}</td>
                                                    <td>{$value['marka']}</td>
                                                    <td>{$value['model']}</td>
                                                    <td>{$value['miasto']}</td>
                                                    <td>{$value['rok_prod']}</td>
                                                    <td>{$value['poj_silnika']}</td>
                                                    <td>{$value['rodz_paliwa']}</td>
                                                    <td>{$value['czy_wypoz']}</td>
													<td>{$value['cena_doba']} zł</td>
                                                    <td>{$value['liczba_miejsc']}</td>
                                                    <td>{$value['skrzynia']}</td>
                                                    <td>{$value['img']}</td>
                                                    <td><a href="{url action='EditCar' id=$value["id_pojazdu"]}" class="button">Edytuj</a> </td>
                                                </tr> 
                                            {/foreach} 
                                       </tbody>

                                    </table>

                                    <b>Strona: {$offset}</b>

                                        {if $previous_page > 0}
                                    <a href="{$conf->action_url}SearchCar/{$previous_page}"  class="button alt"><i class="fa-solid fa-angle-left"></i></a>
                                    {/if}

                                    {if ! $previous_page > 0}
                                    <a href="" class="button alt"><i class="fa-solid fa-angle-left"></i></a>
                                    {/if}

                                    {if $isNextPage}
                                    <a href="{$conf->action_url}SearchCar/{$next_page}" class="button alt"><i class="fa-solid fa-angle-right"></i></a>   
                                    {/if}  

                                    {if !$isNextPage}
                                    <a href="" class="button alt"><i class="fa-solid fa-angle-right"></i></a>   
                                    {/if} 

									</section>
	
								</article>

						</div>
					</div>
				</section>

{/block}