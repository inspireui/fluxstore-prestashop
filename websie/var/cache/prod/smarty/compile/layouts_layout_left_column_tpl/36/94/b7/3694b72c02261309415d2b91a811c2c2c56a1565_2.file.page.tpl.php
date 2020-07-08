<?php
/* Smarty version 3.1.33, created on 2020-06-23 09:30:20
  from '/home/inspireu/prestashop.inspireui.com/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef203ec3ef3e2_77446891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3694b72c02261309415d2b91a811c2c2c56a1565' => 
    array (
      0 => '/home/inspireu/prestashop.inspireui.com/themes/classic/templates/page.tpl',
      1 => 1587089146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef203ec3ef3e2_77446891 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18663383565ef203ec3e5f98_93829453', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_21257891865ef203ec3e6e40_29314231 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_5308795185ef203ec3e6626_91411454 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21257891865ef203ec3e6e40_29314231', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_15082962835ef203ec3ec599_19823540 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_390822415ef203ec3ed0e8_27227006 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_8876367845ef203ec3ebce3_63297310 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15082962835ef203ec3ec599_19823540', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_390822415ef203ec3ed0e8_27227006', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1915368395ef203ec3ee429_01499576 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_17577006175ef203ec3ede76_82742501 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1915368395ef203ec3ee429_01499576', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_18663383565ef203ec3e5f98_93829453 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18663383565ef203ec3e5f98_93829453',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_5308795185ef203ec3e6626_91411454',
  ),
  'page_title' => 
  array (
    0 => 'Block_21257891865ef203ec3e6e40_29314231',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_8876367845ef203ec3ebce3_63297310',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_15082962835ef203ec3ec599_19823540',
  ),
  'page_content' => 
  array (
    0 => 'Block_390822415ef203ec3ed0e8_27227006',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_17577006175ef203ec3ede76_82742501',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1915368395ef203ec3ee429_01499576',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5308795185ef203ec3e6626_91411454', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8876367845ef203ec3ebce3_63297310', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17577006175ef203ec3ede76_82742501', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
