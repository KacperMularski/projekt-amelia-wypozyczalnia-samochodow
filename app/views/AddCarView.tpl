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
										<h2>Dodaj nowy pojazd</h2> </br>

										
									</header>

                                    <section class="col-6 col-12-narrower">
										
										<form action="{$conf->action_url}saveAddCar" method="post">
											<div class="row gtr-50">
												<div class="col-6 col-12-mobilep">
													{if !isset($form->marka)}
												    	<input id="id_marka" type="text" name="marka" placeholder="Marka"/>
													{/if}
													{if isset($form->marka)}
														<input id="id_marka" type="text" name="marka" placeholder="Marka" value="{$form->marka}"/>
													{/if}
												</div>
												
												<div class="col-6 col-12-mobilep">
												{if isset($form->model)}
													<input id="id_model" type="text" name="model" placeholder="Model" value="{$form->model}" />
												{/if}
												{if !isset($form->model)}
													<input id="id_model" type="text" name="model" placeholder="Model" />
												{/if}
												</div>

												<div class="col-6 col-12-mobilep">
													{if isset($form->miasto)}
														<input id="id_miasto" type="text"  name="miasto" placeholder="ID Placówki" value="{$form->miasto}" />
													{/if}
													{if !isset($form->miasto)}
														<input id="id_miasto" type="text"  name="miasto" placeholder="ID Placówki" />
													{/if}
												</div>
											
												<div class="col-6 col-12-mobilep">
													{if isset($form->rok)}
														<input id="id_rok" type="text"  name="rok"  placeholder="Rok produkcji" value="{$form->rok}" />
													{/if}
													{if !isset($form->rok)}
														<input id="id_rok" type="text"  name="rok"  placeholder="Rok produkcji" />
													{/if}

												</div>

                                                <div class="col-6 col-12-mobilep">
													{if isset($form->silnik)}
														<input id="id_silnik" type="text"  name="silnik"  placeholder="Pojemność silnika" value="{$form->silnik}" />
													{/if}
													{if !isset($form->silnik)}
														<input id="id_silnik" type="text"  name="silnik"  placeholder="Pojemność silnika" />
													{/if}
												</div>

                                                <div class="col-6 col-12-mobilep">
													{if isset($form->paliwo)}
														<input id="id_paliwo" type="text"  name="paliwo"  placeholder="Rodzaj paliwa" value="{$form->paliwo}" />
													{/if}
													{if !isset($form->paliwo)}
														<input id="id_paliwo" type="text"  name="paliwo"  placeholder="Rodzaj paliwa" />
													{/if}
												</div> 

                                                <div class="col-6 col-12-mobilep">
													{if isset($form->cena)}
														<input id="id_cena" type="text"  name="cena"  placeholder="Cena za dobę" value="{$form->cena}" />
													{/if}
													{if !isset($form->cena)}
														<input id="id_cena" type="text"  name="cena"  placeholder="Cena za dobę" />
													{/if}
												</div>

                                                <div class="col-6 col-12-mobilep">
													{if isset($form->miejsca)}
														<input id="id_miejsca" type="text"  name="miejsca"  placeholder="Ilość miejsc" value="{$form->miejsca}" />
													{/if}
													{if !isset($form->miejsca)}
														<input id="id_miejsca" type="text"  name="miejsca"  placeholder="Ilość miejsc" />
													{/if}
												</div>

                                                <div class="col-6 col-12-mobilep">
													{if isset($form->skrzynia)}
														<input id="id_skrzynia" type="text"  name="skrzynia"  placeholder="Skrzynia biegów" value="{$form->skrzynia}" />
													{/if}
													{if !isset($form->skrzynia)}
														<input id="id_skrzynia" type="text"  name="skrzynia"  placeholder="Skrzynia biegów" />
													{/if}
												</div>

                                                <div class="col-6 col-12-mobilep">
													{if isset($form->img)}
														<input id="id_img" type="text"  name="img"  placeholder="Obrazek" value="{$form->img}" />
													{/if}
													{if !isset($form->img)}
														<input id="id_img" type="text"  name="img"  placeholder="Obrazek" />
													{/if}
												</div>  

												<div class="col-12">
													<ul class="actions">
														<li><input type="submit" class="button" value="Zapisz zmiany" /></li>
                                                        <li><a href="{$conf->action_url}SearchCar" class="button alt">Powrót</a> </li>
													</ul>
												</div>
											</div>
										</form>
                                        <br>
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
									
								</article>

						</div>
					</div>
				</section>

{/block}