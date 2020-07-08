<?php
/* Smarty version 3.1.33, created on 2020-06-12 05:20:23
  from '/home/inspireu/prestashop.inspireui.com/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee348d7323299_64742937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c54e3998652c770045421a9880105a9c59e1621c' => 
    array (
      0 => '/home/inspireu/prestashop.inspireui.com/themes/classic/templates/index.tpl',
      1 => 1587089146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee348d7323299_64742937 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1518790055ee348d7320418_46123433', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_21100793945ee348d7320b23_64525105 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_17083523075ee348d7321ad0_52493527 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_20026288325ee348d7321511_04891677 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17083523075ee348d7321ad0_52493527', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1518790055ee348d7320418_46123433 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1518790055ee348d7320418_46123433',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_21100793945ee348d7320b23_64525105',
  ),
  'page_content' => 
  array (
    0 => 'Block_20026288325ee348d7321511_04891677',
  ),
  'hook_home' => 
  array (
    0 => 'Block_17083523075ee348d7321ad0_52493527',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21100793945ee348d7320b23_64525105', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20026288325ee348d7321511_04891677', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
