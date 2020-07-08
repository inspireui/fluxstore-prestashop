<?php
/* Smarty version 3.1.33, created on 2020-06-12 05:14:29
  from '/home/inspireu/prestashop.inspireui.com/admininspireui/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee3477517fb84_40795388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65da377d59b92719cec4c8a09fc7675f5edd9c57' => 
    array (
      0 => '/home/inspireu/prestashop.inspireui.com/admininspireui/themes/default/template/content.tpl',
      1 => 1587089146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee3477517fb84_40795388 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
