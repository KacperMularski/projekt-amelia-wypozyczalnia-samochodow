<?php
/* Smarty version 4.1.0, created on 2022-05-15 13:10:00
  from 'C:\xampp\htdocs\amelia\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6280df887639f5_31063021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '756505db9e99c2294aeecdde781de1896741adbd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\templates\\main.tpl',
      1 => 1652612995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6280df887639f5_31063021 (Smarty_Internal_Template $_smarty_tpl) {
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
" id="logo"> <em>Wypożyczalnia samochodów</em> RacingCars</a></h1>
						

                <nav id="nav">
                    <!-- menu -->

					<ul>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_769769756280df88757ef0_92506209', 'menu');
?>


					<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
    				<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Wyloguj</a></li>
    				<?php }?>
					     
					<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) == 0) {?>
					<li><b>Użytkownik: niezalogowany</b></li>
					<?php }?>

					

					<?php if (\core\RoleUtils::inRole("user")) {?>
					<li><b><u><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personEdit">Użytkownik: 
					<?php echo \core\SessionUtils::load("user_login",true);?>

					</u></a></b></li>
					<?php }?>

					<?php if (\core\RoleUtils::inRole("admin")) {?>
					<li><b><u><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personEdit">Użytkownik: Administrator</u></a></b>
					</li>	
					<?php }?>
					
					
					 
					
					
					</ul>
					

                </nav>

                </div>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4656652646280df887606a9_23344847', 'content');
?>


                <!-- Footer -->
				<div id="footer">
					<div class="container">
                    <!-- <p> stopka </p> -->
                    </div>

                <div class="copyright">
							<ul class="menu">
								<li>&copy; <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18286956526280df88760de5_49152474', 'end');
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

	</body>
</html><?php }
/* {block 'menu'} */
class Block_769769756280df88757ef0_92506209 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_769769756280df88757ef0_92506209',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna zawartość menu... <?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_4656652646280df887606a9_23344847 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4656652646280df887606a9_23344847',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna zawartość strony... <?php
}
}
/* {/block 'content'} */
/* {block 'end'} */
class Block_18286956526280df88760de5_49152474 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_18286956526280df88760de5_49152474',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna stopka... <?php
}
}
/* {/block 'end'} */
}
