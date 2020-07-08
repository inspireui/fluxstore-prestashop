<?php
/* Smarty version 3.1.33, created on 2020-06-22 22:14:05
  from '/home/inspireu/prestashop.inspireui.com/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef1656d1aaca7_97636965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fedb0481fb9c94546fce9f4e4bba0307135df4f5' => 
    array (
      0 => '/home/inspireu/prestashop.inspireui.com/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1587089146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef1656d1aaca7_97636965 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
