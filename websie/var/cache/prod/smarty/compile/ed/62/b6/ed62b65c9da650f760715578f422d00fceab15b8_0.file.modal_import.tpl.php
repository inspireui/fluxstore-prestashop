<?php
/* Smarty version 3.1.33, created on 2020-06-20 04:01:31
  from '/home/inspireu/prestashop.inspireui.com/modules/ps_mbo/views/templates/admin/include/modal_import.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eedc25b968698_48947574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed62b65c9da650f760715578f422d00fceab15b8' => 
    array (
      0 => '/home/inspireu/prestashop.inspireui.com/modules/ps_mbo/views/templates/admin/include/modal_import.tpl',
      1 => 1587501172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eedc25b968698_48947574 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="module-modal-import" class="modal modal-vcenter fade" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title module-modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload a module','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>
</h4>
                <button id="module-modal-import-closing-cross" type="button" class="close">&times;</button>
            </div>
            <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="#" class="dropzone" id="importDropzone">
                                <div class="module-import-start">
                                    <i class="module-import-start-icon material-icons">cloud_upload</i><br/>
                                    <p class=module-import-start-main-text>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Drop your module archive here or','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>

										<a href="#" class="module-import-start-select-manual"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'select file','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>
</a>
                                    </p>
                                    <p class=module-import-start-footer-text>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please upload one file at a time, .zip or tarball format (.tar, .tar.gz or .tgz).','d'=>'Admin.Modules.Help'),$_smarty_tpl ) );?>

										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your module will be installed right after that.','d'=>'Admin.Modules.Help'),$_smarty_tpl ) );?>

                                    </p>
                                </div>
                                <div class='module-import-processing'>
                                    <!-- Loader -->
                                    <div class="spinner"></div>
                                    <p class=module-import-processing-main-text>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Installing module...','d'=>'Admin.Modules.Notification'),$_smarty_tpl ) );?>

									</p>
                                    <p class=module-import-processing-footer-text>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'It will close as soon as the module is installed. It won\'t be long!','d'=>'Admin.Modules.Notification'),$_smarty_tpl ) );?>

                                    </p>
                                </div>
                                <div class='module-import-success'>
                                    <i class="module-import-success-icon material-icons">done</i><br/>
                                    <p class='module-import-success-msg'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Module installed!','d'=>'Admin.Modules.Notification'),$_smarty_tpl ) );?>
</p>
                                    <p class="module-import-success-details"></p>
                                    <a class="module-import-success-configure btn btn-primary-reverse btn-outline-primary light-button" href='#'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</a>
                                </div>
                                <div class='module-import-failure'>
                                    <i class="module-import-failure-icon material-icons">error</i><br/>
                                    <p class='module-import-failure-msg'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Oops... Upload failed.','d'=>'Admin.Modules.Notification'),$_smarty_tpl ) );?>
</p>
                                    <a href="#" class="module-import-failure-details-action"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'What happened?','d'=>'Admin.Modules.Help'),$_smarty_tpl ) );?>
</a>
                                    <div class='module-import-failure-details'></div>
                                    <a class="module-import-failure-retry btn btn-tertiary" href='#'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Try again','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</a>
                                </div>
                                <div class='module-import-confirm'>
                                </div>
								<input type="file" multiple="multiple" class="dz-hidden-input" accept=".zip, .tar" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;">
                            </form>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<?php }
}
