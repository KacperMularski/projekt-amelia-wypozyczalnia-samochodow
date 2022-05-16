{extends file="main.tpl"}

{block name=end}Wszelkie prawa zastrzeżone!{/block}

{block name=menu}


    <li><a href="{$conf->action_url}">Strona główna</a></li>
    <li><a href="right-sidebar.html">Wypożycz</a></li>
    <li><a href="{$conf->action_url}offer_page">Oferta</a></li>
    <li><a href="#">Rejestracja</a></li>
    <li><a href="{$conf->action_url}contact_page">Kontakt</a></li>
    
    



{/block}

{block name=content}

<section class="wrapper style1">
					<div class="container">
						<div id="content">

							<!-- Content -->

								<article>
									<header>
										<h2>Edytuj hasło</h2> </br>
										
									</header>

                                    

                                    <section class="col-6 col-12-narrower">
										
										<form action="{$conf->action_url}savePasswordChange" method="post">
											<div class="row gtr-50">
												<div class="col-6 col-12-mobilep">
													<input id="id_old_pass" type="password"  name="old_pass" placeholder="Wprowadź obecne hasło" />	
												</div>
                                            </div> </br>
                                            <div class="row gtr-50">

                                                <div class="col-6 col-12-mobilep">
													<input id="id_new_pass" type="password"  name="new_pass" placeholder="Wprowadź nowe hasło" />	
												</div>
                                            </div> </br>
                                            <div class="row gtr-50">

                                                <div class="col-6 col-12-mobilep">
													<input id="id_new_pass_repeat" type="password"  name="new_pass_repeat" placeholder="Wprowadź ponownie nowe hasło" />	
												</div>
                                            </div></br>
												
												<div class="col-12">
													<ul class="actions">
														<li><input type="submit" class="button" value="Zmień hasło" /></li>
                                                        <li><a href="{$conf->action_url}personEdit" class="button alt">Powrót</a> </li>
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
                                    

									

									<!--<span class="image featured"><img src="images/banner.jpg" alt="" /></span>-->

									
								</article>

						</div>
					</div>
				</section>

{/block}