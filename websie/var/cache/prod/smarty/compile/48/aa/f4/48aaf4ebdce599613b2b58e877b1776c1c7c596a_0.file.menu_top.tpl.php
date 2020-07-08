<?php
/* Smarty version 3.1.33, created on 2020-06-20 04:01:31
  from '/home/inspireu/prestashop.inspireui.com/modules/ps_mbo/views/templates/admin/include/menu_top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eedc25b949616_87791649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48aaf4ebdce599613b2b58e877b1776c1c7c596a' => 
    array (
      0 => '/home/inspireu/prestashop.inspireui.com/modules/ps_mbo/views/templates/admin/include/menu_top.tpl',
      1 => 1587501172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./dropdown_categories.tpl' => 1,
  ),
),false)) {
function content_5eedc25b949616_87791649 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="module-top-menu">
    <div class="row">
        <div class="col-md-8">
			<div class="input-group" id="search-input-group">
                <input type="text" id="module-search-bar" class="form-control" style="display: none;">
                <div class="input-group-btn">
                    <button class="btn btn-primary float-right search-button" id="module-search-button">
                        <i class="material-icons">search</i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-4 module-menu-item">
			<?php $_smarty_tpl->_subTemplateRender("file:./dropdown_categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </div>
</div>

<hr class="top-menu-separator"/>

<div class="module-sorting-menu">
    <div class="row">
        <div class="col-lg-6">
            <div class="module-sorting-search-wording">
                <span id="selected_modules" class="module-search-result-wording"><span v-html="visibleModules()"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%nbModules% modules and services selected for you','d'=>'Admin.Modules.Feature','sprintf'=>array('%nbModules%'=>'')),$_smarty_tpl ) );?>
</span>
                <span class="help-box" data-toggle="popover"
                    data-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Selection','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>
"
                    data-content="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customize your store with this selection of modules recommended for your shop, based on your country, language and version of PrestaShop. It includes the most popular modules from our Addons marketplace, and free partner modules.','d'=>'Admin.Modules.Help'),$_smarty_tpl ) );?>
">
                </span>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="module-sorting module-sorting-author float-right">
                <select id="sort_module" class="custom-select sort-component">
                  <option value="" disabled selected>- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sort by','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
 -</option>
                  <option value="displayName"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</option>
                  <option value="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Increasing Price','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>
</option>
                  <option value="price-desc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Decreasing Price','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>
</option>
                  <option value="scoring-desc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Popularity','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>
</option>
                </select>
            </div>
        </div>
    </div>
</div>
<?php }
}
