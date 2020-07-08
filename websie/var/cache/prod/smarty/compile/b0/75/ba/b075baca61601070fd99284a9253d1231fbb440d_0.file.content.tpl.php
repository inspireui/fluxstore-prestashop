<?php
/* Smarty version 3.1.33, created on 2020-06-12 05:23:21
  from '/home/inspireu/prestashop.inspireui.com/admininspireui/themes/default/template/controllers/login/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee349892595d0_98659267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b075baca61601070fd99284a9253d1231fbb440d' => 
    array (
      0 => '/home/inspireu/prestashop.inspireui.com/admininspireui/themes/default/template/controllers/login/content.tpl',
      1 => 1587089146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee349892595d0_98659267 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/inspireu/prestashop.inspireui.com/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div id="login-panel">
	<div id="login-header">
		<h1 class="text-center">
			<img id="logo" src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
prestashop@2x.png" width="123px" height="24px" alt="PrestaShop" />
		</h1>
		<div class="text-center"><?php echo $_smarty_tpl->tpl_vars['ps_version']->value;?>
</div>
		<div id="error" class="hide alert alert-danger">
		<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)) {?>
			<h4>
				<?php if (isset($_smarty_tpl->tpl_vars['nbErrors']->value) && $_smarty_tpl->tpl_vars['nbErrors']->value > 1) {?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %d errors.','sprintf'=>array($_smarty_tpl->tpl_vars['nbErrors']->value),'d'=>'Admin.Notifications.Error'),$_smarty_tpl ) );?>

				<?php } else { ?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is %d error.','sprintf'=>array($_smarty_tpl->tpl_vars['nbErrors']->value),'d'=>'Admin.Notifications.Error'),$_smarty_tpl ) );?>

				<?php }?>
			</h4>
			<ol>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
				<li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ol>
		<?php }?>
		</div>

		<?php if (isset($_smarty_tpl->tpl_vars['warningSslMessage']->value)) {?>
		<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['warningSslMessage']->value;?>
</div>
		<?php }?>
	</div>
	<div id="shop-img"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
preston-login@2x.png" alt="<?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
" width="69.5px" height="118.5px" /></div>
	<div class="flip-container">
		<div class="flipper">
			<div class="front front_login panel" <?php if (isset($_smarty_tpl->tpl_vars['reset_token']->value) && isset($_smarty_tpl->tpl_vars['id_employee']->value)) {?>style="display:none;"<?php }?>>
				<h4 id="shop_name"><?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
</h4>
				<?php if (!isset($_smarty_tpl->tpl_vars['wrong_folder_name']->value) && !isset($_smarty_tpl->tpl_vars['wrong_install_name']->value)) {?>
				<form action="#" id="login_form" method="post">
					<input type="hidden" name="redirect" id="redirect" value="<?php echo $_smarty_tpl->tpl_vars['redirect']->value;?>
"/>
					<div class="form-group">
						<label class="control-label" for="email"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email address','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</label>
						<input name="email" type="email" id="email" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['email']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['email']->value,'html','UTF-8' ));
}?>" autofocus="autofocus" tabindex="1" placeholder="&#xf0e0 test@example.com" />
					</div>
					<div class="form-group">
						<label class="control-label" for="passwd">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password','d'=>'Admin.Global'),$_smarty_tpl ) );?>

						</label>
						<input name="passwd" type="password" id="passwd" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['password']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['password']->value,'html','UTF-8' ));
}?>" tabindex="2" placeholder="&#xf084 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password'),$_smarty_tpl ) );?>
" />
					</div>
					<div class="form-group row-padding-top">
						<button id="submit_login" name="submitLogin" type="submit" tabindex="4" class="btn btn-primary btn-lg btn-block ladda-button" data-style="slide-up" data-spinner-color="white" >
							<span class="ladda-label">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in','d'=>'Admin.Login.Feature'),$_smarty_tpl ) );?>

							</span>
						</button>
					</div>
					<div class="form-group">
						<div id="remind-me" class="checkbox pull-left">
							<label for="stay_logged_in">
								<input name="stay_logged_in" type="checkbox" id="stay_logged_in" value="1"	tabindex="3"/>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Stay logged in','d'=>'Admin.Login.Feature'),$_smarty_tpl ) );?>

							</label>
						</div>
						<a href="#" class="show-forgot-password pull-right" >
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I forgot my password','d'=>'Admin.Login.Feature'),$_smarty_tpl ) );?>

						</a>
					</div>
				</form>
			</div>
			<?php if (isset($_smarty_tpl->tpl_vars['reset_token']->value) && isset($_smarty_tpl->tpl_vars['id_employee']->value)) {?>
			<div class="front front_reset panel">
				<form action="#" id="reset_password_form" method="post">
					<h4 id="reset_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset your password','d'=>'Admin.Login.Feature'),$_smarty_tpl ) );?>
</h4>
					<div class="form-group">
						<label class="control-label" for="reset_passwd">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New password','d'=>'Admin.Login.Feature'),$_smarty_tpl ) );?>

						</label>
						<input name="reset_passwd" type="password" id="reset_passwd" class="form-control" value="" tabindex="1" placeholder="&#xf084 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password','d'=>'Admin.Global'),$_smarty_tpl ) );?>
" />
					</div>
					<div class="form-group">
						<label class="control-label" for="reset_confirm">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Confirm new password','d'=>'Admin.Login.Feature'),$_smarty_tpl ) );?>

						</label>
						<input name="reset_confirm" type="password" id="reset_confirm" class="form-control" value="" tabindex="2" placeholder="&#xf084 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Confirm password','d'=>'Admin.Login.Feature'),$_smarty_tpl ) );?>
" />
					</div>
					<div class="panel-footer">
						<button class="btn btn-primary btn-default pull-right" name="submitLogin" type="submit" tabindex="3">
							<i class="icon-ok text-success"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset password','d'=>'Admin.Login.Feature'),$_smarty_tpl ) );?>

						</button>
					</div>
					<input type="hidden" name="reset_token" id="reset_token" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['reset_token']->value,'html','UTF-8' ));?>
" />
					<input type="hidden" name="id_employee" id="id_employee" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_employee']->value,'html','UTF-8' ));?>
" />
					<input type="hidden" name="reset_email" id="reset_email" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['reset_email']->value,'html','UTF-8' ));?>
" />
				</form>
			</div>
			<div class="back back_reset">
				<h4 id="reset_confirm_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your password has been successfully changed.'),$_smarty_tpl ) );?>
<br/><br/><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You will be redirected to the login page in a few seconds.','d'=>'Admin.Login.Notification'),$_smarty_tpl ) );?>
</h4>
			</div>
			<?php }?>

			<div class="back panel">
				<h4 id="forgot_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</h4>
				<form action="#" id="forgot_password_form" method="post">
					<div class="form-group">
						<label class="control-label" for="email_forgot">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email address','d'=>'Admin.Global'),$_smarty_tpl ) );?>

						</label>
						<input type="text" name="email_forgot" id="email_forgot" class="form-control" autofocus="autofocus" tabindex="5" placeholder="&#xf0e0 test@example.com" />
					</div>
					<div class="panel-footer">
						<button type="button" href="#" class="btn btn-default show-login-form" tabindex="7">
							<i class="icon-caret-left"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

						</button>
						<button class="btn btn-primary btn-default pull-right" name="submitLogin" type="submit" tabindex="6">
							<i class="icon-ok text-success"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send reset link','d'=>'Admin.Login.Feature'),$_smarty_tpl ) );?>

						</button>
					</div>
				</form>
			</div>

			<div class="front forgot_confirm" style="display: none">
				<h4 id="forgot_confirm_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please, check your mailbox.','d'=>'Admin.Login.Notification'),$_smarty_tpl ) );?>
<br/><br/><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'A link to reset your password has been sent to you.','d'=>'Admin.Login.Notification'),$_smarty_tpl ) );?>
</h4>
			</div>
		</div>
		<?php } else { ?>
		<div class="alert alert-danger">
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For security reasons, you cannot connect to the back office until you have:','d'=>'Admin.Login.Notification'),$_smarty_tpl ) );?>
</p>
			<ul>
				<?php if (isset($_smarty_tpl->tpl_vars['wrong_install_name']->value) && $_smarty_tpl->tpl_vars['wrong_install_name']->value == true) {?>
					<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'deleted the /install folder','d'=>'Admin.Login.Notification'),$_smarty_tpl ) );?>
</li>
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['wrong_folder_name']->value) && $_smarty_tpl->tpl_vars['wrong_folder_name']->value == true) {?>
					<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'renamed the /admin folder (e.g. %s)','sprintf'=>array($_smarty_tpl->tpl_vars['randomNb']->value),'d'=>'Admin.Login.Notification'),$_smarty_tpl ) );?>
</li>
				<?php }?>
			</ul>
			<p>
				<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['adminUrl']->value,'html','UTF-8' ));?>
">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please then access this page by the new URL (e.g. %s)','sprintf'=>array($_smarty_tpl->tpl_vars['adminUrl']->value),'d'=>'Admin.Login.Notification'),$_smarty_tpl ) );?>

				</a>
			</p>
		</div>
		<?php }?>
	</div>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayAdminLogin"),$_smarty_tpl ) );?>

	<div id="login-footer">
		<p class="text-center text-muted">
			<a href="http://www.prestashop.com/" onclick="return !window.open(this.href);">
				&copy; PrestaShop&#8482; 2007-<?php echo smarty_modifier_date_format(time(),"%Y");?>
 - All rights reserved
			</a>
		</p>
		<p class="text-center">
			<a class="link-social link-twitter _blank" href="https://twitter.com/PrestaShop" title="Twitter">
				<i class="icon-twitter"></i>
			</a>
			<a class="link-social link-facebook _blank" href="https://www.facebook.com/prestashop" title="Facebook">
				<i class="icon-facebook"></i>
			</a>
			<a class="link-social link-github _blank" href="https://www.prestashop.com/github" title="Github">
				<i class="icon-github"></i>
			</a>
			<a class="link-social link-google _blank" href="https://plus.google.com/+prestashop/" title="Google">
				<i class="icon-google-plus"></i>
			</a>
		</p>
	</div>
</div>
<?php }
}
