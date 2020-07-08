<?php
/* Smarty version 3.1.33, created on 2020-07-02 06:15:41
  from '/home/inspireu/prestashop.inspireui.com/admininspireui/themes/default/template/controllers/carrier_wizard/summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efdb3cd7ec2e7_73517853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d04c5e8f1e8769b459d6b93386b5b7bc162a8c8' => 
    array (
      0 => '/home/inspireu/prestashop.inspireui.com/admininspireui/themes/default/template/controllers/carrier_wizard/summary.tpl',
      1 => 1587089146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efdb3cd7ec2e7_73517853 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	var summary_translation_undefined = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[undefined]','js'=>1),$_smarty_tpl ) );?>
';
	var summary_translation_meta_informations = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This carrier is %1$s and the transit time is %2$s.','js'=>1,'d'=>'Admin.Shipping.Feature'),$_smarty_tpl ) );?>
';
	var summary_translation_free = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'free','js'=>1,'d'=>'Admin.Shipping.Feature'),$_smarty_tpl ) );?>
';
	var summary_translation_paid = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'not free','js'=>1,'d'=>'Admin.Shipping.Feature'),$_smarty_tpl ) );?>
';
	var summary_translation_range = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This carrier can deliver orders from %1$s to %2$s.','js'=>1,'d'=>'Admin.Shipping.Feature'),$_smarty_tpl ) );?>
';
	var summary_translation_range_limit =  '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If the order is out of range, the behavior is to %3$s.','js'=>1,'d'=>'Admin.Shipping.Feature'),$_smarty_tpl ) );?>
';
	var summary_translation_shipping_cost = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The shipping cost is calculated %1$s and the tax rule %2$s will be applied.','js'=>1,'d'=>'Admin.Shipping.Feature'),$_smarty_tpl ) );?>
';
	var summary_translation_price = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'according to the price','js'=>1,'d'=>'Admin.Shipping.Feature'),$_smarty_tpl ) );?>
';
	var summary_translation_weight = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'according to the weight','js'=>1,'d'=>'Admin.Shipping.Feature'),$_smarty_tpl ) );?>
';
<?php echo '</script'; ?>
>

<div class="defaultForm">
	<div class="panel">
		<div class="panel-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier name:','d'=>'Admin.Shipping.Feature'),$_smarty_tpl ) );?>
 <strong id="summary_name"></strong></div>
		<div class="panel-body">
			<p id="summary_meta_informations"></p>
			<p id="summary_shipping_cost"></p>
			<p id="summary_range"></p>
			<div>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This carrier will be proposed for those delivery zones:','d'=>'Admin.Shipping.Feature'),$_smarty_tpl ) );?>

				<ul id="summary_zones"></ul>
			</div>
			<div>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'And it will be proposed for those client groups:','d'=>'Admin.Shipping.Feature'),$_smarty_tpl ) );?>

				<ul id="summary_groups"></ul>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['is_multishop']->value) {?>
			<div>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Finally, this carrier will be proposed in those shops:','d'=>'Admin.Shipping.Feature'),$_smarty_tpl ) );?>

				<ul id="summary_shops"></ul>
			</div>
			<?php }?>
		</div>
	</div>
	<?php echo $_smarty_tpl->tpl_vars['active_form']->value;?>

</div>
<?php }
}
