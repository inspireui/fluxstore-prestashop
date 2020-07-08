<?php
/* Smarty version 3.1.33, created on 2020-07-02 06:15:41
  from '/home/inspireu/prestashop.inspireui.com/admininspireui/themes/default/template/controllers/carrier_wizard/helpers/form/form_ranges.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efdb3cd781e68_23954155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bff53880a54ab5f538333f20cccd9fb8bb61368' => 
    array (
      0 => '/home/inspireu/prestashop.inspireui.com/admininspireui/themes/default/template/controllers/carrier_wizard/helpers/form/form_ranges.tpl',
      1 => 1587089146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efdb3cd781e68_23954155 (Smarty_Internal_Template $_smarty_tpl) {
?>		<?php echo '<script'; ?>
>var zones_nbr = <?php echo count($_smarty_tpl->tpl_vars['zones']->value)+3;?>
 ; /*corresponds to the third input text (max, min and all)*/<?php echo '</script'; ?>
>
		<div id="zone_ranges" style="overflow:auto">
			<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ranges','d'=>'Admin.Shipping.Feature'),$_smarty_tpl ) );?>
</h4>
			<table id="zones_table" class="table" style="max-width:100%">
				<tbody>
					<tr class="range_inf">
						<td class="range_type"></td>
						<td class="border_left border_bottom range_sign">&gt;=</td>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ranges']->value, 'range', false, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value => $_smarty_tpl->tpl_vars['range']->value) {
?>
						<td class="border_bottom">
							<div class="input-group fixed-width-md">
								<span class="input-group-addon weight_unit"><?php echo $_smarty_tpl->tpl_vars['PS_WEIGHT_UNIT']->value;?>
</span>
								<span class="input-group-addon price_unit"><?php echo $_smarty_tpl->tpl_vars['currency_sign']->value;?>
</span>
								<input class="form-control" name="range_inf[<?php echo intval($_smarty_tpl->tpl_vars['range']->value['id_range']);?>
]" type="text" value="<?php echo sprintf("%.6f",$_smarty_tpl->tpl_vars['range']->value['delimiter1']);?>
" />
							</div>
						</td>
						<?php
}
} else {
?>
						<td class="border_bottom">
							<div class="input-group fixed-width-md">
								<span class="input-group-addon weight_unit"><?php echo $_smarty_tpl->tpl_vars['PS_WEIGHT_UNIT']->value;?>
</span>
								<span class="input-group-addon price_unit"><?php echo $_smarty_tpl->tpl_vars['currency_sign']->value;?>
</span>
								<input name="form-control range_inf[<?php echo intval($_smarty_tpl->tpl_vars['range']->value['id_range']);?>
]" type="text" />
							</div>
						</td>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tr>
					<tr class="range_sup">
						<td class="range_type"></td>
						<td class="border_left range_sign">&lt;</td>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ranges']->value, 'range', false, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value => $_smarty_tpl->tpl_vars['range']->value) {
?>
						<td class="range_data">
							<div class="input-group fixed-width-md">
								<span class="input-group-addon weight_unit"><?php echo $_smarty_tpl->tpl_vars['PS_WEIGHT_UNIT']->value;?>
</span>
								<span class="input-group-addon price_unit"><?php echo $_smarty_tpl->tpl_vars['currency_sign']->value;?>
</span>
								<input class="form-control" name="range_sup[<?php echo intval($_smarty_tpl->tpl_vars['range']->value['id_range']);?>
]" type="text" <?php if (isset($_smarty_tpl->tpl_vars['form_id']->value) && !$_smarty_tpl->tpl_vars['form_id']->value) {?> value="" <?php } else { ?> value="<?php if (isset($_smarty_tpl->tpl_vars['change_ranges']->value) && $_smarty_tpl->tpl_vars['range']->value['id_range'] == 0) {?> <?php } else {
echo sprintf("%.6f",$_smarty_tpl->tpl_vars['range']->value['delimiter2']);
}?>" <?php }?> autocomplete="off"/>
							</div>
						</td>
						<?php
}
} else {
?>
						<td class="range_data_new">
							<div class="input-group fixed-width-md">
								<span class="input-group-addon weight_unit"><?php echo $_smarty_tpl->tpl_vars['PS_WEIGHT_UNIT']->value;?>
</span>
								<span class="input-group-addon price_unit"><?php echo $_smarty_tpl->tpl_vars['currency_sign']->value;?>
</span>
								<input class="form-control" name="range_sup[<?php echo intval($_smarty_tpl->tpl_vars['range']->value['id_range']);?>
]" type="text" autocomplete="off" />
							</div>
						</td>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tr>
					<tr class="fees_all">
						<td class="border_top border_bottom border_bold">
							<span class="fees_all" <?php if (count($_smarty_tpl->tpl_vars['ranges']->value) == 0) {?>style="display:none" <?php }?>>All</span>
						</td>
						<td style="">
							<input type="checkbox" onclick="checkAllZones(this);" class="form-control">
						</td>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ranges']->value, 'range', false, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value => $_smarty_tpl->tpl_vars['range']->value) {
?>
						<td class="border_top border_bottom <?php if ($_smarty_tpl->tpl_vars['range']->value['id_range'] != 0) {?> validated <?php }?>"  >
							<div class="input-group fixed-width-md">
								<span class="input-group-addon currency_sign" <?php if ($_smarty_tpl->tpl_vars['range']->value['id_range'] == 0) {?> style="display:none" <?php }?>><?php echo $_smarty_tpl->tpl_vars['currency_sign']->value;?>
</span>
								<input class="form-control" type="text" <?php if (isset($_smarty_tpl->tpl_vars['form_id']->value) && !$_smarty_tpl->tpl_vars['form_id']->value) {?> disabled="disabled"<?php }?> <?php if ($_smarty_tpl->tpl_vars['range']->value['id_range'] == 0) {?> style="display:none"<?php }?> autocomplete="off" />
							</div>
						</td>
						<?php
}
} else {
?>
						<td class="border_top border_bottom">
							<div class="input-group fixed-width-md">
								<span class="input-group-addon currency_sign" style="display:none"><?php echo $_smarty_tpl->tpl_vars['currency_sign']->value;?>
</span>
								<input class="form-control" style="display:none" type="text" autocomplete="off" />
							</div>
						</td>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tr>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zones']->value, 'zone', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['zone']->value) {
?>
					<tr class="fees" data-zoneid="<?php echo $_smarty_tpl->tpl_vars['zone']->value['id_zone'];?>
">
						<td>
							<label for="zone_<?php echo $_smarty_tpl->tpl_vars['zone']->value['id_zone'];?>
"><?php echo $_smarty_tpl->tpl_vars['zone']->value['name'];
if (!$_smarty_tpl->tpl_vars['zone']->value['active']) {?> <small>(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'inactive','d'=>'Admin.Shipping.Feature'),$_smarty_tpl ) );?>
)</small><?php }?></label>
						</td>
						<td class="zone">
							<input class="form-control input_zone" id="zone_<?php echo $_smarty_tpl->tpl_vars['zone']->value['id_zone'];?>
" name="zone_<?php echo $_smarty_tpl->tpl_vars['zone']->value['id_zone'];?>
" value="1" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value['zones'][$_smarty_tpl->tpl_vars['zone']->value['id_zone']]) && $_smarty_tpl->tpl_vars['fields_value']->value['zones'][$_smarty_tpl->tpl_vars['zone']->value['id_zone']]) {?> checked="checked"<?php }?>/>
						</td>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ranges']->value, 'range', false, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value => $_smarty_tpl->tpl_vars['range']->value) {
?>
						<td>
							<div class="input-group fixed-width-md">
								<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency_sign']->value;?>
</span>
								<input class="form-control" name="fees[<?php echo intval($_smarty_tpl->tpl_vars['zone']->value['id_zone']);?>
][<?php echo intval($_smarty_tpl->tpl_vars['range']->value['id_range']);?>
]" type="text"
								<?php if (!isset($_smarty_tpl->tpl_vars['fields_value']->value['zones'][$_smarty_tpl->tpl_vars['zone']->value['id_zone']]) || (isset($_smarty_tpl->tpl_vars['fields_value']->value['zones'][$_smarty_tpl->tpl_vars['zone']->value['id_zone']]) && !$_smarty_tpl->tpl_vars['fields_value']->value['zones'][$_smarty_tpl->tpl_vars['zone']->value['id_zone']])) {?> disabled="disabled"<?php }?>

								<?php if (isset($_smarty_tpl->tpl_vars['price_by_range']->value[$_smarty_tpl->tpl_vars['range']->value['id_range']][$_smarty_tpl->tpl_vars['zone']->value['id_zone']]) && $_smarty_tpl->tpl_vars['price_by_range']->value[$_smarty_tpl->tpl_vars['range']->value['id_range']][$_smarty_tpl->tpl_vars['zone']->value['id_zone']] && isset($_smarty_tpl->tpl_vars['fields_value']->value['zones'][$_smarty_tpl->tpl_vars['zone']->value['id_zone']]) && $_smarty_tpl->tpl_vars['fields_value']->value['zones'][$_smarty_tpl->tpl_vars['zone']->value['id_zone']]) {?> value="<?php echo sprintf('%.6f',$_smarty_tpl->tpl_vars['price_by_range']->value[$_smarty_tpl->tpl_vars['range']->value['id_range']][$_smarty_tpl->tpl_vars['zone']->value['id_zone']]);?>
" <?php } else { ?> value="" <?php }?> />
							</div>
						</td>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tr>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<tr class="delete_range">
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ranges']->value, 'range', false, 'r', 'ranges', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value => $_smarty_tpl->tpl_vars['range']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_ranges']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_ranges']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_ranges']->value['index'];
?>
							<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_ranges']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_ranges']->value['first'] : null)) {?>
								<td>&nbsp;</td>
							<?php } else { ?>
								<td>
									<button class="btn btn-default"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</button>
								</td>
							<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tr>
				</tbody>
			</table>
		</div>
<?php }
}
