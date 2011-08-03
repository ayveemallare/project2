<?php /* Smarty version 2.6.26, created on 2011-07-31 20:48:00
         compiled from notification/maillistSettings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'notification/maillistSettings.tpl', 15, false),array('function', 'url', 'notification/maillistSettings.tpl', 26, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "notification.mailList"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<p><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "notification.unsubscribeDescription"), $this);?>
</span></p>
<br />

<?php if ($this->_tpl_vars['error']): ?>
	<p><span class="formError"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => ($this->_tpl_vars['error'])), $this);?>
</span></p>
<?php endif; ?>

<?php if ($this->_tpl_vars['success']): ?>
	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => ($this->_tpl_vars['success'])), $this);?>
</p>
<?php endif; ?>

<form id="notificationSettings" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'unsubscribeMailList'), $this);?>
">
<table class="data" width="100%">
	<tr valign="top">
		<td class="label" width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "email.email"), $this);?>
</td>
		<td class="value" width="45%"><input type="text" name="email" size="30" maxlength="90" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label" width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.password"), $this);?>
</td>
		<td class="value" width="45%"><input type="text" name="password" size="30" maxlength="90" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="5%">&nbsp;</td>
		<td><p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.submit"), $this);?>
" class="button defaultButton" /></p></td>
	</tr>
</table>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
