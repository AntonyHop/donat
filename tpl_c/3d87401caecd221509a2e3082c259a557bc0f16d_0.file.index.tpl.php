<?php
/* Smarty version 3.1.32-dev-1, created on 2017-04-27 14:57:20
  from "/home/antony/sites/web/tpl/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-1',
  'unifunc' => 'content_5901dca02905c2_21257369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d87401caecd221509a2e3082c259a557bc0f16d' => 
    array (
      0 => '/home/antony/sites/web/tpl/index.tpl',
      1 => 1493286818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5901dca02905c2_21257369 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<article>
	<div class="kon">
		<h2>На кону <?php echo $_smarty_tpl->tpl_vars['win']->value;?>
 грн!</h2><br>
		<div href="#" class="circle">
		<h3>Участвовать!</h3></div>
	</div>
</article>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
