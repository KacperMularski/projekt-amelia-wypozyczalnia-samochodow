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
                    <!-- <p> stopka </p> -->
                    </div>

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

	</body>
</html>