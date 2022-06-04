{extends file="main_admin.tpl"}

{block name=end}Wszelkie prawa zastrzeżone!{/block}

{block name=menu}

    <li class="current"><a href="{$conf->action_url}adminUzytkownicyPage">Użytkownicy</a></li>
    <li><a href="{$conf->action_url}adminWypozyczeniaPage">Wypożyczenia</a></li>
    <li><a href="{$conf->action_url}adminSamochodyPage">Samochody</a></li>
    <li><a href="{$conf->action_url}adminPracownicyPage">Pracownicy</a></li>
    
{/block}

{block name=content}

<section class="wrapper style1">
					<div class="container">
						<div id="content">

								<article>
									<header>
										<h2>Dodawanie nowego użytkownika</h2>
										
									</header>

									<section class="col-6 col-12-narrower">
										
										<form action="{$conf->action_url}saveAddUzytkownicy" method="post">
											<div class="row gtr-50">
												<div class="col-6 col-12-mobilep">
													{if !isset($form->login)}
												    	<input id="id_login" type="text" name="login" placeholder="Login"/>
													{/if}
													{if isset($form->login)}
														<input id="id_login" type="text" name="login" placeholder="Login" value="{$form->login}"/>
													{/if}
												</div>

												<div class="col-6 col-12-mobilep">
													{if !isset($form->email)}
														<input id="id_email" type="email"  name="email" placeholder="Email" />
													{/if}
													{if isset($form->email)}
														<input id="id_email" type="email"  name="email" placeholder="Email" value="{$form->email}" />
													{/if}
												</div>
											
											
												<div class="col-6 col-12-mobilep">
													<input id="id_pass" type="password"  name="pass" placeholder="Hasło" />
												</div>
											
											
												<div class="col-6 col-12-mobilep">
													<input id="id_pass_repeat" type="password"  name="pass_repeat"  placeholder="Powtórz hasło" />
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
													{if isset($form->nr_pr_jazdy)}
														<input id="id_nr_pr_jazdy" type="text"  name="nr_pr_jazdy"  placeholder="Numer prawa jazdy" value="{$form->nr_pr_jazdy}" />
													{/if}
													{if !isset($form->nr_pr_jazdy)}
														<input id="id_nr_pr_jazdy" type="text"  name="nr_pr_jazdy"  placeholder="Numer prawa jazdy" />
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
													{if isset($form->rola)}
														<input id="id_rola" type="text"  name="rola"  placeholder="Rola" value="{$form->rola}" />
													{/if}
													{if !isset($form->rola)}
														<input id="id_rola" type="text"  name="rola"  placeholder="Rola" />
													{/if}
												</div>

                                                <div class="col-6 col-12-mobilep">
													{if isset($form->data_ur) }
													Data urodzenia:   <input id="id_data_ur" type="date"  name="data_ur" 
                                                    value="{$form->data_ur}" max="2022-05-07" min="1920-01-01" />
													{/if}

													{if !isset($form->data_ur) }
													Data urodzenia:   <input id="id_data_ur" type="date"  name="data_ur" 
                                                    value="2022-05-07" max="2022-05-07" min="1920-01-01" />
													{/if}
												</div>
											
												<div class="col-12">
													<ul class="actions">
														<li><input type="submit" class="button" value="Dodaj" /></li>
                                                        <li><a href="{$conf->action_url}adminUzytkownicyPage" class="button alt">Powrót</a> </li>
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