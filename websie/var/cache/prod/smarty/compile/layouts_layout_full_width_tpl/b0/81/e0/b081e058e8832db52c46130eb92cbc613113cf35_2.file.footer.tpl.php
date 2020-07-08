<?php
/* Smarty version 3.1.33, created on 2020-06-23 11:43:42
  from '/home/inspireu/prestashop.inspireui.com/themes/classic/templates/checkout/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef2232e4de550_21772739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b081e058e8832db52c46130eb92cbc613113cf35' => 
    array (
      0 => '/home/inspireu/prestashop.inspireui.com/themes/classic/templates/checkout/_partials/footer.tpl',
      1 => 1587089146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef2232e4de550_21772739 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2078917295ef2232e4d98f0_86556577', 'footer');
?>

<?php }
/* {block 'footer'} */
class Block_2078917295ef2232e4d98f0_86556577 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_2078917295ef2232e4d98f0_86556577',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="text-sm-center">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

</div>
<?php
}
}
/* {/block 'footer'} */
}
