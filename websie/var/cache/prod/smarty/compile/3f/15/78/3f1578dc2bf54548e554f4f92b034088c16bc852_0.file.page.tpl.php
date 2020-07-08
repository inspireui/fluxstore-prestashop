<?php
/* Smarty version 3.1.33, created on 2020-06-20 04:01:31
  from '/home/inspireu/prestashop.inspireui.com/modules/ps_mbo/views/templates/admin/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eedc25b9376a0_96295992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f1578dc2bf54548e554f4f92b034088c16bc852' => 
    array (
      0 => '/home/inspireu/prestashop.inspireui.com/modules/ps_mbo/views/templates/admin/page.tpl',
      1 => 1587501172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./include/menu_top.tpl' => 1,
    'file:./include/action_menu.tpl' => 1,
    'file:./include/modal_import.tpl' => 1,
    'file:./include/modal_confirm_prestatrust.tpl' => 1,
  ),
),false)) {
function content_5eedc25b9376a0_96295992 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  var admin_module_ajax_url_psmbo = '<?php echo $_smarty_tpl->tpl_vars['admin_module_ajax_url_psmbo']->value;?>
';
  $('#product_form_open_help').attr('href', $('#toolbar-nav li a.btn-help').attr('href'));
  $('#toolbar-nav li a.btn-help').hide();
<?php echo '</script'; ?>
>

<?php if (isset($_smarty_tpl->tpl_vars['filterCategoryTab']->value)) {?>
    <?php echo '<script'; ?>
>
      var filterCategoryTab = '<?php echo $_smarty_tpl->tpl_vars['filterCategoryTab']->value;?>
';
    <?php echo '</script'; ?>
>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['javascript_urls']->value)) {?>
    <?php echo '<script'; ?>
>
      var mboJavascriptUrls = <?php echo $_smarty_tpl->tpl_vars['javascript_urls']->value;?>
;
    <?php echo '</script'; ?>
>
<?php }?>

<div id="psmbo" class="row justify-content-center">

    <div class="col-lg-10 module-catalog-page">
        <?php $_smarty_tpl->_subTemplateRender("file:./include/menu_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div id="modules-list-container-all" class="row modules-list">

            <div class="col-sm-12 text-center">
                <button class="btn-primary-reverse onclick unbind spinner hide"></button>
            </div>

            <div
              v-for="module in modules"
              v-show="module.attributes.visible"
              class="module-item module-item-grid col-md-12 col-lg-6 col-xl-3"
              v-bind:data-id="module.attributes.id"
              v-bind:data-name="module.attributes.displayName"
              v-bind:data-scoring="module.attributes.avgRate"
              v-bind:data-logo="module.attributes.img"
              v-bind:data-author="module.attributes.author"
              v-bind:data-version="module.attributes.version"
              v-bind:data-description="module.attributes.description"
              v-bind:data-tech-name="module.attributes.name"
              v-bind:data-child-categories="module.attributes.categoryName"
              v-bind:data-categories="module.attributes.categoryParentId"
              v-bind:data-type="module.attributes.product_type"
            >
                <div class="module-item-wrapper-grid">
                    <div class="module-item-heading-grid">
                        <div class="module-logo-thumb-grid">
                            <img v-bind:src="module.attributes.img" v-bind:alt="module.attributes.displayName"/>
                        </div>
                        <h3
                          class="text-ellipsis module-name-grid"
                          data-toggle="pstooltip"
                          data-placement="top"
                          v-bind:title="module.attributes.displayName"
                        >
                            <span v-if="module.attributes.displayName">
                                [[ module.attributes.displayName ]]
                            </span>
                            <span v-else> [[ module.attributes.name ]]</span>

                            <span v-if="module.attributes.prestatrust">
                                <img v-bind:src="module.attributes.prestatrust.pico">
                            </span>

                        </h3>
                        <div v-if="module.attributes.product_type === 'service'" class="text-ellipsis small-text module-version-author-grid">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Service by'),$_smarty_tpl ) );?>
 <b>[[ module.attributes.author ]]</b>
                        </div>
                        <div v-else class="text-ellipsis small-text module-version-author-grid">
                            v[[ module.attributes.version ]] - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'by'),$_smarty_tpl ) );?>
 <b>[[ module.attributes.author ]]</b>
                        </div>
                    </div>
                    <div class="module-quick-description-grid small no-padding mb-0">
                        <div class="module-quick-description-text">
                            [[ module.attributes.description ]]
                            <span v-if="module.attributes.description.length > 0 && module.attributes.description.length < module.attributes.fullDescription.length">
                                ...
                            </span>
                        </div>
                        <div class="module-read-more-grid">
                            <a v-if="module.attributes.id != '0'" v-bind:href="getHref(module.attributes.name)" class="fancybox-quick-view url" v-bind:data-module-name="module.attributes.name">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read More','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>

                            </a>
                        </div>
                    </div>

                    <div class="module-container module-quick-action-grid clearfix">
                        <div class="badges-container">
                            <div v-for="badge in module.attributes.badges">
                                <img v-bind:src="badge.img" v-bind:alt="badge.label"/>
                                <span>[[ badge.label ]]</span>
                            </div>
                        </div>
                        <hr v-if="module.attributes.badges" />
                        <div v-if="module.attributes.nbRates > 0" class="float-left" v-bind:class="getAvgRateClass(module.attributes.avgRate)">
                            ([[ module.attributes.nbRates ]])
                        </div>

                        <div class="float-right module-price">
                            <span v-if="module.attributes.price === 0" class="pt-2" >
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free'),$_smarty_tpl ) );?>

                            </span>
                            <span v-else>
                                [[ module.attributes.price ]] <?php echo $_smarty_tpl->tpl_vars['currency_symbol']->value;?>

                            </span>
                        </div>

                        <?php if (isset($_smarty_tpl->tpl_vars['requireBulkActions']->value) && $_smarty_tpl->tpl_vars['requireBulkActions']->value == true) {?>
                            <div class="float-right module-checkbox-bulk-grid">
                                <input type="checkbox" v-bind:data-name="module.attributes.displayName" v-bind:data-tech-name="module.attributes.name" />
                            </div>
                        <?php }?>

                        <?php $_smarty_tpl->_subTemplateRender("file:./include/action_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                </div>
            </div>


            <div id="see-results-addons" class="module-item module-item-grid col-md-12 col-lg-6 col-xl-3 hidden">
                <div class="module-item-wrapper-grid">
                    <div class="module-item-heading-grid" style="height: 350px;">
                        <div style="line-height: 220px;">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['bo_img']->value;?>
preston.png?1.7.0" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Exit to PrestaShop Addons Marketplace'),$_smarty_tpl ) );?>
">
                        </div>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'See all results for your search on'),$_smarty_tpl ) );?>
<br>
                        <a class="url" href="#" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PrestaShop Addons Marketplace'),$_smarty_tpl ) );?>
</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <input type="hidden" id="install_url" value="<?php echo isset($_smarty_tpl->tpl_vars['install_url']->value) ? $_smarty_tpl->tpl_vars['install_url']->value : '';?>
" >
    <input type="hidden" id="module_controller_token" value="<?php echo isset($_smarty_tpl->tpl_vars['module_controller_token']->value) ? $_smarty_tpl->tpl_vars['module_controller_token']->value : '';?>
" >
    <input type="hidden" id="notification_count_url" value="<?php echo isset($_smarty_tpl->tpl_vars['notification_count_url']->value) ? $_smarty_tpl->tpl_vars['notification_count_url']->value : '';?>
" >

    <?php $_smarty_tpl->_subTemplateRender("file:./include/modal_import.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:./include/modal_confirm_prestatrust.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>


<div id="fancyBox">

</div>
<?php }
}
