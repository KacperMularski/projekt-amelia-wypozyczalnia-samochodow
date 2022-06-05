{extends file="main.tpl"}

{block name=end}Wszelkie prawa zastrzeżone!{/block}

{block name=menu}


    <li><a href="{$conf->action_url}">Strona główna</a></li>
    <li><a href="{$conf->action_url}rent_page">Wypożycz</a></li>
    <li><a href="{$conf->action_url}offer_page">Oferta</a></li>
    <li><a href="#">Rejestracja</a></li>

	{if \core\RoleUtils::inRole("admin")}
		<li><b><a href="{$conf->action_url}SearchUser">Panel Administratora</a></b>
		</li>	
	{/if}
    
{/block}

{block name=content}

<section class="wrapper style1">
					<div class="container">
						<div id="content">

								<article>
									<header>
										<h2>Dane konta</h2> </br>
										
									</header>

                                    {if $msgs->getMessages()}										
										<ol class="infos">
										{foreach $msgs->getMessages() as $msg}
										<li>
		
														{if $msg->isInfo()}
														
														{/if}
											{$msg->text}
											</br></li>

										{/foreach}
										</ol>
										{/if}

                                    <table class="pure-table pure-table-bordered">

										<thead>
											<tr> 
												<td colspan="3" align="center">
													<a href="{$conf->action_url}editForm" class="button">Edytuj</a> 
													<a href="{$conf->action_url}passwordChange" class="button">Zmień hasło</a>
													<a href="{$conf->action_url}rentHistory" class="button">Wypożyczenia</a>
												</td> 
											</tr>
										</thead>

                                        <tbody>
                                            <tr><td><h3>Login:</h3></td> <td><b>{$form->login}</b></td></tr>  
                                            <tr class="pure-table-odd"><td><h3>E-mail:</h3></td> <td><b>{$form->email}</b></td></tr>
                                            <tr><td><h3>Imie:</h3></td><td> <b>{$form->imie}</b></td></tr>
                                            <tr class="pure-table-odd"><td><h3>Nazwisko:</h3></td><td> <b>{$form->nazwisko}</b></td></tr>
                                            <tr><td><h3>Data urodzenia:</h3></td><td>  <b>{$form->data_ur}</b></td></tr>
                                            <tr class="pure-table-odd"><td><h3>Numer prawa jazdy:</h3></td><td>  <b>{$form->nr_pr_jazdy}</b></td></tr>
                                            <tr><td><h3>Numer telefonu:</h3></td><td><b>+{$form->nr_tel}</b></td></tr>
                                       </tbody>

                                    </table>
                                    
								</article>

						</div>
					</div>
				</section>

{/block}