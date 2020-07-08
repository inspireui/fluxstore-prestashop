<?php
/* Smarty version 3.1.33, created on 2020-06-20 04:01:31
  from '/home/inspireu/prestashop.inspireui.com/modules/ps_mbo/views/templates/admin/include/modal_confirm_prestatrust.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eedc25b974949_31449291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a2d270e6eaa7b33e775c42d125aa657455ffa29' => 
    array (
      0 => '/home/inspireu/prestashop.inspireui.com/modules/ps_mbo/views/templates/admin/include/modal_confirm_prestatrust.tpl',
      1 => 1587501172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eedc25b974949_31449291 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="modal-prestatrust" class="modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Module verification','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>
</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-2 text-sm-center">
              <img id="pstrust-img" src="" alt=""/>
            </div>
            <div class="col-md-10">
              <dl class="row">
                <dt class="col-sm-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Module','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</dt>
                <dd class="col-sm-9">
                    <strong id="pstrust-name"></strong>
                </dd>
                <dt class="col-sm-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Author','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>
</dt>
                <dd class="col-sm-9" id="pstrust-author"></dd>
                <dt class="col-sm-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</dt>
                <dd class="col-sm-9"><strong><span class="text-info" id="pstrust-label"></span></strong></dd>
              </dl>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info" id="pstrust-message" role="alert">
                    <p class="alert-text"></p>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <div id="pstrust-btn-property-ok">
            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to modules list','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>
</button>
            <button type="submit" class="btn btn-primary pstrust-install"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed with the installation','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>
</button>
        </div>
        <div id="pstrust-btn-property-nok">
            <button type="submit" class="btn btn-outline-secondary pstrust-install"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed with the installation','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>
</button>
            <a href="" class="btn btn-primary" id="pstrust-buy" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Buy module','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>
</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }
}
