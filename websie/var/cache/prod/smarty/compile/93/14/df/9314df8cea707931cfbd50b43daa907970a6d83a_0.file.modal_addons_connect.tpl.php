<?php
/* Smarty version 3.1.33, created on 2020-06-20 04:01:31
  from '/home/inspireu/prestashop.inspireui.com/modules/ps_mbo/views/templates/admin/include/modal_addons_connect.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eedc25b9f8963_20686680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9314df8cea707931cfbd50b43daa907970a6d83a' => 
    array (
      0 => '/home/inspireu/prestashop.inspireui.com/modules/ps_mbo/views/templates/admin/include/modal_addons_connect.tpl',
      1 => 1587501172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eedc25b9f8963_20686680 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<?php if ($_smarty_tpl->tpl_vars['addons_connect']->value['connected'] === false) {?>
	<div id="module-modal-addons-connect" class="modal  modal-vcenter fade" role="dialog">
	  <div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
			  <h4 class="modal-title module-modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Connect to Addons marketplace','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>
</h4>
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
		   				<div class="row">
					<div class="col-md-12">
						<p>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Link your shop to your Addons account to automatically receive important updates for the modules you purchased. Don\'t have an account yet?','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>

							<a href="https://addons.prestashop.com/authentication.php" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign up now','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>
</a>
						</p>
												<form id="addons-connect-form"  action="<?php echo $_smarty_tpl->tpl_vars['addons_connect']->value['login_url'];?>
" method="POST">
							<div class="form-group">
							  <label for="module-addons-connect-email"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email address','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</label>
							  <input name="username_addons" type="email" class="form-control" id="module-addons-connect-email" placeholder="Email">
							</div>
							<div class="form-group">
							  <label for="module-addons-connect-password"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</label>
							  <input name="password_addons" type="password" class="form-control" id="module-addons-connect-password" placeholder="Password">
							</div>
							<div class="checkbox">
							  <label>
								<input name="addons_remember_me" type="checkbox"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remember me','d'=>'Admin.Global'),$_smarty_tpl ) );?>

							  </label>
							</div>
							<button type="submit" class="btn btn-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Let\'s go!','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</button>
							<div id="addons_login_btn" class="spinner" style="display:none;"></div>
						</form>
						<p>
							<a href="https://addons.prestashop.com/password.php" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</a>
						</p>
					</div>
			  </div>
			  </div>
		</div>
	  </div>
	</div>
<?php } else { ?>
	<div id="module-modal-addons-logout" class="modal  modal-vcenter fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h4 class="modal-title module-modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Confirm logout','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>
</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<p>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You are about to log out your Addons account. You might miss important updates of Addons you\'ve bought.','d'=>'Admin.Modules.Notification'),$_smarty_tpl ) );?>

							</p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default uppercase" data-dismiss="modal" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
">
										<a class="btn btn-primary uppercase" href="<?php echo $_smarty_tpl->tpl_vars['addons_connect']->value['logout_url'];?>
" id="module-modal-addons-logout-ack"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes, log out','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>
</a>
				</div>
			</div>
		</div>
	</div>
<?php }
}
}
