{extends file="main_admin.tpl"}

{block name=end}Wszelkie prawa zastrzeżone!{/block}

{block name=menu}

	<li class="current"><a href="{$conf->action_url}SearchUser">Użytkownicy</a></li>
    <li><a href="{$conf->action_url}SearchRent">Wypożyczenia</a></li>
    <li><a href="{$conf->action_url}SearchCar">Samochody</a></li>
    <li><a href="{$conf->action_url}adminPracownicyPage">Pracownicy</a></li>
     
{/block}

{block name=content}

<section class="wrapper style1">
					<div class="container">
						<div id="content">

								<article>
									<header>
										<h2>Tabela użytkownicy</h2>
										
									</header>

									<section class="col-6 col-12-narrower">
										
										<form action="{$conf->action_url}SearchUser" method="post">
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
													{if !isset($form->login_search)}
												    	<input id="id_login" type="text" name="login_search" placeholder="Login"/>
													{/if}
													{if isset($form->login_search)}
														<input id="id_login" type="text" name="login_search" placeholder="Login" value="{$form->login_search}"/>
													{/if}
												</div>
											
												<div class="col-12">
													<ul class="actions">
														<li><input type="submit" class="button alt" value="Filtruj" /></li>
													</ul>

                                                    <ul class="actions">
														<li><a href="{$conf->action_url}AddUser" class="button">+ Dodaj osobę</a></li>
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
                                                    <p>Imie </p>
												</td> 

                                                <td>
                                                    <p> Nazwisko </p>
												</td> 

                                                <td>
                                                    <p> Data urodzenia </p>
												</td> 

                                                <td>
                                                    <p> Prawo jazdy </p>
												</td> 

                                                <td>
                                                    <p> Telefon </p>
												</td> 

                                                <td>
                                                    <p> Login </p>
												</td> 

                                                <td>
                                                    <p> Email </p>
												</td> 

                                                <td>
                                                    <p> Rola </p>
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
                                                    <td>{$value['id_osoby']}</td>
                                                    <td>{$value['imie']}</td>
                                                    <td>{$value['nazwisko']}</td>
                                                    <td>{$value['data_ur']}</td>
                                                    <td>{$value['nr_pr_jazdy']}</td>
                                                    <td>{$value['nr_tel']}</td>
                                                    <td>{$value['login']}</td>
                                                    <td>{$value['email']}</td>
                                                    <td>{$value['rola']}</td>
                                                    <td>{$value['czy_aktywny']} </td>
                                                    <td><a href="{url action='EditUser' id=$value["id_osoby"]}" class="button">Edytuj</a> </td>
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