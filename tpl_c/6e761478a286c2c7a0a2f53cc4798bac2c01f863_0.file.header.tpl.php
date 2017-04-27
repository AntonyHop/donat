<?php
/* Smarty version 3.1.32-dev-1, created on 2017-04-27 11:14:23
  from "/home/antony/sites/web/tpl/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-1',
  'unifunc' => 'content_5901a85f5aebd1_90242303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e761478a286c2c7a0a2f53cc4798bac2c01f863' => 
    array (
      0 => '/home/antony/sites/web/tpl/header.tpl',
      1 => 1493280860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5901a85f5aebd1_90242303 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<link rel="stylesheet" href="/tpl/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<header class="col-md-12">
		<div class="logo col-md-5">
			<h1>Лотарея DonAt</h1>
			<p>Выиграть может каждый!</p>
		</div>
		
			<ul class="main_menu col-md-7">

				<li><a href="/login">Вход</a></li>
				<li><a href="/news">Новости</a></li>
				<li><a href="/about">О проэкте</a></li>
				<li><a href="/">Главная</a></li>
				
			</ul>
		
		
	</header>
	<div class="clear"></div>

	
<?php }
}
