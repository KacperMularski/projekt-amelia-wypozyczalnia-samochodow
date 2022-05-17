<!DOCTYPE HTML>

<html>
	<head>
		<title>RacingCars</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		
		<link rel="stylesheet" href="https://unpkg.com/purecss@2.1.0/build/pure-min.css" integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous">
		<link rel="stylesheet" href="{$conf->app_root}/assets/css/main.css" />
		<link rel="stylesheet" href="{$conf->app_root}/assets/css/main_extra.css" />
		
		
	</head>
	<body class="is-preload">
	
		<div id="page-wrapper">
		
			<!-- Header -->
				<div id="header">
				

					<!-- Logo -->
					
						<h1><a href="{$conf->app_root}" id="logo"> <em>Wypożyczalnia samochodów</em> RacingCars</a></h1>
						

                <nav id="nav">
                    <!-- menu -->

					<ul>
                        {block name=menu} Domyślna zawartość menu... {/block}

					{if count($conf->roles)>0}
    				<li><a href="{$conf->action_url}logout">Wyloguj</a></li>
    				{/if}
					     
					{if count($conf->roles)==0}
					<li><b>Użytkownik: niezalogowany</b></li>
					{/if}

					

					{if \core\RoleUtils::inRole("user")}
					<li><b><u><a href="{$conf->action_url}personEdit">Użytkownik: 
					{\core\SessionUtils::load("user_login", true)}
					</u></a></b></li>
					{/if}

					{if \core\RoleUtils::inRole("admin")}
					<li><b><u><a href="{$conf->action_url}personEdit">Użytkownik: Administrator</u></a></b>
					</li>	
					{/if}
										
					</ul>
					

                </nav>

                </div>

                {block name=content} Domyślna zawartość strony... {/block}

                <!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">
							<section class="col-3 col-6-narrower col-12-mobilep">
								<h3>Kontakt</h3>
								<h5>Racing Cars Polska Sp. z o.o.</h5>
								<p>41-300 Dąbrowa Górnicza </br>
								ul. Sokolska 52 </br></br>
								<b><a href="mailto: kontakt@racingcars.pl">kontakt@racingcars.pl</a></b></p>
								<h5> Rezerwacje telefonicznie </h5>
								<p><i class="fa-solid fa-square-phone"></i>   675 875 674</p>
		
							</section>

							<section class="col-3 col-6-narrower col-12-mobilep">
								<h3>Linki</h3>
								
	
								<ul class="links">

								<li><a href="#">Strona główna</a></li>
								<li><a href="#">Wypożycz</a></li>
								<li><a href="#">Rejestracja</a></li>
								<li><a href="#">Logowanie</a></li>
									
								</ul>
							</section>

							<section class="col-6 col-12-narrower">
								<h3>Chcesz zadać pytanie?</h3>
								<form>
									<div class="row gtr-50">
										<div class="col-6 col-12-mobilep">
											<input type="text" name="imie" id="id_imie" placeholder="Imie" />
										</div>
										<div class="col-6 col-12-mobilep">
											<input type="email" name="email" id="id_email" placeholder="Email" />
										</div>
										<div class="col-12">
											<textarea name="message" id="id_wiadomość" placeholder="Wiadomość" rows="5"></textarea>
										</div>
										<div class="col-12">
											<ul class="actions">
												<li><input type="submit" class="button alt" value="Wyślij wiadomość" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>

						</div>
					</div>

					<!-- Icons -->
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
							<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
							<li><a href="#" class="icon brands fa-google-plus-g"><span class="label">Google+</span></a></li>
						</ul> 

                <div class="copyright">
							<ul class="menu">
								<li>&copy; {block name=end} Domyślna stopka... {/block}</li><li>Designed by: KM</li>
							</ul>
						</div>

                </div>



        </div>

		<!-- Scripts -->
			<script src="{$conf->app_url}/assets/js/jquery.min.js"></script>
			<script src="{$conf->app_url}/assets/js/jquery.dropotron.min.js"></script>
			<script src="{$conf->app_url}/assets/js/browser.min.js"></script>
			<script src="{$conf->app_url}/assets/js/breakpoints.min.js"></script>
			<script src="{$conf->app_url}/assets/js/util.js"></script>
			<script src="{$conf->app_url}/assets/js/main.js"></script>

			<script src="https://kit.fontawesome.com/b46649fce3.js" crossorigin="anonymous"></script>
			

	</body>
</html>