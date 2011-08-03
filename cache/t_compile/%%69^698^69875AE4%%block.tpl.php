<?php /* Smarty version 2.6.26, created on 2011-07-31 19:13:04
         compiled from file:/Applications/MAMP/htdocs/ojs/plugins/blocks/user/block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/Applications/MAMP/htdocs/ojs/plugins/blocks/user/block.tpl', 13, false),array('function', 'url', 'file:/Applications/MAMP/htdocs/ojs/plugins/blocks/user/block.tpl', 21, false),array('modifier', 'escape', 'file:/Applications/MAMP/htdocs/ojs/plugins/blocks/user/block.tpl', 18, false),)), $this); ?>
<div class="block" id="sidebarUser">
	<?php if (! $this->_tpl_vars['implicitAuth']): ?>
		<span class="blockTitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.user"), $this);?>
</span>
	<?php endif; ?>
	
	<?php if ($this->_tpl_vars['isUserLoggedIn']): ?>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.user.loggedInAs"), $this);?>
<br />
		<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['loggedInUsername'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</strong>
		<ul>
			<?php if ($this->_tpl_vars['hasOtherJournals']): ?>
				<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => 'index','page' => 'user'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.user.myJournals"), $this);?>
</a></li>
			<?php endif; ?>
			<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'profile'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.user.myProfile"), $this);?>
</a></li>
			<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login','op' => 'signOut'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.user.logout"), $this);?>
</a></li>
			<?php if ($this->_tpl_vars['userSession']->getSessionVar('signedInAs')): ?>
				<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login','op' => 'signOutAsUser'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.user.signOutAsUser"), $this);?>
</a></li>
			<?php endif; ?>
		</ul>
	<?php else: ?>
		<?php if ($this->_tpl_vars['implicitAuth']): ?>	
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login','op' => 'implicitAuthLogin'), $this);?>
">Journals Login</a>		
		<?php else: ?>
			<form method="post" action="<?php echo $this->_tpl_vars['userBlockLoginUrl']; ?>
">
				<table>
					<tr>
						<td><label for="sidebar-username"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.username"), $this);?>
</label></td>
					</tr>
					<tr>
						<td><input type="text" id="sidebar-username" name="username" value="" size="12" maxlength="32" class="textField" /></td>
					</tr>
					<tr>
						<td><label for="sidebar-password"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.password"), $this);?>
</label></td>
					</tr>
					<tr> 
						<td><input type="password" id="sidebar-password" name="password" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['password'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="12" maxlength="32" class="textField" /></td>
					</tr>
			
					<tr>
						<td colspan="2"><input type="checkbox" id="remember" name="remember" value="1" /> <label for="remember"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.user.rememberMe"), $this);?>
</label></td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login"), $this);?>
" class="button" /></td>
					</tr>
				</table>
			</form>
		<?php endif; ?>
	<?php endif; ?>
</div>