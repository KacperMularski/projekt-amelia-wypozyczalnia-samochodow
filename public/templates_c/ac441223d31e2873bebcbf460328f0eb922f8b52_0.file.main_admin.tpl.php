<?php
/* Smarty version 4.1.0, created on 2022-06-01 18:14:34
  from 'C:\xampp\htdocs\amelia\app\views\templates\main_admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6297906ae87158_56146243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac441223d31e2873bebcbf460328f0eb922f8b52' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\templates\\main_admin.tpl',
      1 => 1654099416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6297906ae87158_56146243 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>RacingCars</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		
		<link rel="stylesheet" href="https://unpkg.com/purecss@2.1.0/build/pure-min.css" integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/css/main.css" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/css/main_extra.css" />
		
		
	</head>
	<body class="is-preload">
	
		<div id="page-wrapper">
		
			<!-- Header -->
				<div id="header">
				

					<!-- Logo -->
					
						<h1><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
" id="logo"> Panel Administratora</a></h1>

                <nav id="nav">
                    <!-- menu -->

					<ul>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1820824266297906ae7d2c2_42696283', 'menu');
?>



					<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
    				<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Wyloguj</a></li>
    				<?php }?>
					     
					<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) == 0) {?>
					<li><b>U??ytkownik: niezalogowany</b></li>
					<?php }?>

					

					<?php if (\core\RoleUtils::inRole("user")) {?>
					<li><b><u><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personEdit">U??ytkownik: 
					<?php echo \core\SessionUtils::load("user_login",true);?>

					</u></a></b></li>
					<?php }?>

					<?php if (\core\RoleUtils::inRole("admin")) {?>
					<li><b><u><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personEdit">U??ytkownik: Administrator</u></a></b>
					</li>	
					<?php }?>
										
					</ul>
					

                </nav>

                </div>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3624249936297906ae83ee3_58956417', 'content');
?>


                <!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">
							<section class="col-3 col-6-narrower col-12-mobilep">
								<h3>Kontakt</h3>
								<h5>Racing Cars Polska Sp. z o.o.</h5>
								<p>41-300 D??browa G??rnicza </br>
								ul. Sienkiewicza 2 </br></br>
								<b><i class="fa-solid fa-square-envelope"></i> <a href="mailto: kontakt@racingcars.pl">kontakt@racingcars.pl</a></b></p>
								<h5> Rezerwacje telefonicznie </h5>
								<p><i class="fa-solid fa-square-phone"></i>   675 875 674</p>
		
							</section>

							<section class="col-3 col-6-narrower col-12-mobilep">
								<h3>Linki</h3>
								
	
								<ul class="links">

								<li><a href="#">Strona g????wna</a></li>
								<li><a href="#">Wypo??ycz</a></li>
								<li><a href="#">Rejestracja</a></li>
								<li><a href="#">Logowanie</a></li>
									
								</ul>
							</section>

							<section class="col-6 col-12-narrower">
								<h3>Chcesz zada?? pytanie?</h3>
								<form>
									<div class="row gtr-50">
										<div class="col-6 col-12-mobilep">
											<input type="text" name="imie" id="id_imie" placeholder="Imie" />
										</div>
										<div class="col-6 col-12-mobilep">
											<input type="email" name="email" id="id_email" placeholder="Email" />
										</div>
										<div class="col-12">
											<textarea name="message" id="id_wiadomo????" placeholder="Wiadomo????" rows="5"></textarea>
										</div>
										<div class="col-12">
											<ul class="actions">
												<li><input type="submit" class="button alt" value="Wy??lij wiadomo????" /></li>
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
								<li>&copy; <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_817077126297906ae84614_31036753', 'end');
?>
</li><li>Designed by: KM</li>
							</ul>
						</div>

                </div>



        </div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

			<?php echo '<script'; ?>
 src="https://kit.fontawesome.com/b46649fce3.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
			

	</body>
</html><?php }
/* {block 'menu'} */
class Block_1820824266297906ae7d2c2_42696283 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_1820824266297906ae7d2c2_42696283',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domy??lna zawarto???? menu... <?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_3624249936297906ae83ee3_58956417 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3624249936297906ae83ee3_58956417',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domy??lna zawarto???? strony... <?php
}
}
/* {/block 'content'} */
/* {block 'end'} */
class Block_817077126297906ae84614_31036753 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_817077126297906ae84614_31036753',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domy??lna stopka... <?php
}
}
/* {/block 'end'} */
}
