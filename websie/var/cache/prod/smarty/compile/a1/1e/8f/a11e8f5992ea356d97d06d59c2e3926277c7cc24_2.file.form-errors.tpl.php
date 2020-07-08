<?php
/* Smarty version 3.1.33, created on 2020-06-12 05:20:32
  from '/home/inspireu/prestashop.inspireui.com/themes/classic/templates/_partials/form-errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee348e0e53634_98405417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a11e8f5992ea356d97d06d59c2e3926277c7cc24' => 
    array (
      0 => '/home/inspireu/prestashop.inspireui.com/themes/classic/templates/_partials/form-errors.tpl',
      1 => 1587089146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee348e0e53634_98405417 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9762450865ee348e0e4d374_36553563', 'form_errors');
?>

  </div>
<?php }
}
/* {block 'form_errors'} */
class Block_9762450865ee348e0e4d374_36553563 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_errors' => 
  array (
    0 => 'Block_9762450865ee348e0e4d374_36553563',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
          <li class="alert alert-danger"><?php echo nl2br($_smarty_tpl->tpl_vars['error']->value);?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php
}
}
/* {/block 'form_errors'} */
}
