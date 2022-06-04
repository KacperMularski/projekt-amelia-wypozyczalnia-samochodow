{extends file="main.tpl"}

{block name=end}Wszelkie prawa zastrzeżone!{/block}

{block name=menu}


    <li><a href="{$conf->action_url}">Strona główna</a></li>
    <li><a href="{$conf->action_url}rent_page">Wypożycz</a></li>
    <li><a href="{$conf->action_url}offer_page">Oferta</a></li>
	<li class="current">
        <a href="#">Rejestracja</a>
        <ul>
            
            <li><a href="{$conf->action_url}register_page">Zarejestruj</a></li>

        </ul>
    </li>

	{if \core\RoleUtils::inRole("admin")}
		<li><b><a href="{$conf->action_url}adminUzytkownicyPage">Panel Administratora</a></b>
		</li>	
	{/if}

{/block}

{block name=content}

<section class="wrapper style1">
					<div class="container">
						<div id="content">
								<article>
									<header>
										<h2>Logowanie</h2>
										
									</header>

									<section class="col-6 col-12-narrower">
										
										<form action="{$conf->action_url}login" method="post">
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
													<input id="id_pass" type="password"  name="password" placeholder="Hasło" />
												</div>
											
												<div class="col-12">
													<ul class="actions">
														<li><input type="submit" class="button alt" value="Zaloguj" /></li>
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