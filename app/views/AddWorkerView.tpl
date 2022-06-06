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
										<h2>Dodawanie nowego pracownika</h2>
										
									</header>

									<section class="col-6 col-12-narrower">
										
										<form action="{$conf->action_url}saveAddWorker" method="post">
											<div class="row gtr-50">
												<div class="col-6 col-12-mobilep">
													{if !isset($form->placowka)}
												    	<input id="id_placowka" type="text" name="placowka" placeholder="Placówka (ID)"/>
													{/if}
													{if isset($form->placowka)}
														<input id="id_placowka" type="text" name="placowka" placeholder="Placówka (ID)" value="{$form->placowka}"/>
													{/if}
												</div>

												<div class="col-6 col-12-mobilep">
												{if isset($form->imie)}
													<input id="id_imie" type="text" name="imie" placeholder="Imie" value="{$form->imie}" />
												{/if}
												{if !isset($form->imie)}
													<input id="id_imie" type="text" name="imie" placeholder="Imie" />
												{/if}
												</div>
												<div class="col-6 col-12-mobilep">
													{if isset($form->nazwisko)}
														<input id="id_nazwisko" type="text"  name="nazwisko" placeholder="Nazwisko" value="{$form->nazwisko}" />
													{/if}
													{if !isset($form->nazwisko)}
														<input id="id_nazwisko" type="text"  name="nazwisko" placeholder="Nazwisko" />
													{/if}
												</div>
											
												<div class="col-6 col-12-mobilep">
													{if isset($form->miasto)}
														<input id="id_miasto" type="text"  name="miasto"  placeholder="Miasto" value="{$form->miasto}" />
													{/if}
													{if !isset($form->miasto)}
														<input id="id_miasto" type="text"  name="miasto"  placeholder="Miasto" />
													{/if}

												</div>

                                                <div class="col-6 col-12-mobilep">
													{if isset($form->ulica)}
														<input id="id_ulica" type="text"  name="ulica"  placeholder="Ulica" value="{$form->ulica}" />
													{/if}
													{if !isset($form->ulica)}
														<input id="id_ulica" type="text"  name="ulica"  placeholder="Ulica" />
													{/if}

												</div>

                                                <div class="col-6 col-12-mobilep">
													{if isset($form->nr_domu_miesz)}
														<input id="id_nr_domu_miesz" type="text"  name="nr_domu_miesz"  placeholder="Nr domu/mieszkania" value="{$form->nr_domu_miesz}" />
													{/if}
													{if !isset($form->nr_domu_miesz)}
														<input id="id_nr_domu_miesz" type="text"  name="nr_domu_miesz"  placeholder="Nr domu/mieszkania" />
													{/if}

												</div>

                                                 <div class="col-6 col-12-mobilep">
													{if isset($form->kod_pocz)}
														<input id="id_kod_pocz" type="text"  name="kod_pocz"  placeholder="Kod pocztowy" value="{$form->kod_pocz}" />
													{/if}
													{if !isset($form->kod_pocz)}
														<input id="id_kod_pocz" type="text"  name="kod_pocz"  placeholder="Kod pocztowy" />
													{/if}
												</div>

                                                <div class="col-6 col-12-mobilep">
													{if isset($form->nr_tel)}
														<input id="id_nr_tel" type="text"  name="nr_tel"  placeholder="Numer telefonu" value="{$form->nr_tel}" />
													{/if}
													{if !isset($form->nr_tel)}
														<input id="id_nr_tel" type="text"  name="nr_tel"  placeholder="Numer telefonu" />
													{/if}
												</div>

                                                <div class="col-6 col-12-mobilep">
													{if isset($form->nip)}
														<input id="id_nip" type="text"  name="nip"  placeholder="NIP" value="{$form->nip}" />
													{/if}
													{if !isset($form->nip)}
														<input id="id_nip" type="text"  name="nip"  placeholder="NIP" />
													{/if}

												<br>
													{if isset($form->data_zatrud)}
													Data zatrudnienia:	<input id="id_data_zatrud" type="date"  name="data_zatrud" placeholder="Data_urodzenia" value="{$form->data_zatrud}" />
													{/if}
													{if !isset($form->data_zatrud)}
													Data zatrudnienia:	<input id="id_data_zatrud" type="date"  name="data_zatrud" placeholder="Data_urodzenia" />
													{/if}

                                                    
                                                </div>

                                                <div class="col-6 col-12-mobilep">                                                     
													{if isset($form->data_ur)}
													Data urodzenia:  	<input id="id_data_ur" type="date"  name="data_ur" value="{$form->data_ur}" />
													{/if}
													{if !isset($form->data_ur)}
													Data urodzenia:	  <input id="id_data_ur" type="date"  name="data_ur"  />
													{/if}
												</div>
                                                
												<div class="col-12">
												<br><ul class="actions">
														<li><input type="submit" class="button" value="Zapisz zmiany" /></li>
                                                        <li><a href="{$conf->action_url}SearchWorker" class="button alt">Powrót</a> </li>
													</ul>
												</div>
											</div>
										</form>

										
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

									</section>
									
								</article>

						</div>
					</div>
				</section>

{/block}