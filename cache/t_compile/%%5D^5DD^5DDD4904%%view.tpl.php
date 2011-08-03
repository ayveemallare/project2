<?php /* Smarty version 2.6.26, created on 2011-07-31 18:00:59
         compiled from issue/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'issue/view.tpl', 14, false),array('function', 'url', 'issue/view.tpl', 26, false),array('modifier', 'to_array', 'issue/view.tpl', 26, false),array('modifier', 'assign', 'issue/view.tpl', 26, false),array('modifier', 'escape', 'issue/view.tpl', 34, false),array('modifier', 'strip_unsafe_html', 'issue/view.tpl', 35, false),array('modifier', 'nl2br', 'issue/view.tpl', 35, false),)), $this); ?>
<?php if ($this->_tpl_vars['subscriptionRequired'] && $this->_tpl_vars['showGalleyLinks'] && $this->_tpl_vars['showToc']): ?>
	<div id="accessKey">
		<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_open_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoOpen.altText"), $this);?>
" />
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reader.openAccess"), $this);?>
&nbsp;
		<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_restricted_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoRestricted.altText"), $this);?>
" />
		<?php if ($this->_tpl_vars['purchaseArticleEnabled']): ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reader.subscriptionOrFeeAccess"), $this);?>

		<?php else: ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reader.subscriptionAccess"), $this);?>

		<?php endif; ?>
	</div>
<?php endif; ?>
<?php if (! $this->_tpl_vars['showToc'] && $this->_tpl_vars['issue']): ?>
	<?php if ($this->_tpl_vars['issueId']): ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['issueId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, 'showToc') : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, 'showToc'))), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'currentUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'currentUrl'));?>

	<?php else: ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'current','path' => 'showToc'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'currentUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'currentUrl'));?>

	<?php endif; ?>
	<ul class="menu">
		<li><a href="<?php echo $this->_tpl_vars['currentUrl']; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.toc"), $this);?>
</a></li>
	</ul>
	<br />
	<?php if ($this->_tpl_vars['coverPagePath']): ?><div id="issueCoverImage"><a href="<?php echo $this->_tpl_vars['currentUrl']; ?>
"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['coverPagePath'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getFileName($this->_tpl_vars['locale']))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php if ($this->_tpl_vars['coverPageAltText'] != ''): ?> alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['coverPageAltText'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php else: ?> alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.coverPage.altText"), $this);?>
"<?php endif; ?><?php if ($this->_tpl_vars['width']): ?> width="<?php echo ((is_array($_tmp=$this->_tpl_vars['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php endif; ?><?php if ($this->_tpl_vars['height']): ?> height="<?php echo ((is_array($_tmp=$this->_tpl_vars['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php endif; ?>/></a></div><?php endif; ?>
	<div id="issueCoverDescription"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['issue']->getLocalizedCoverPageDescription())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>
<?php elseif ($this->_tpl_vars['issue']): ?>
	<div id="issueDescription"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['issue']->getLocalizedDescription())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>
	<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.toc"), $this);?>
</h3>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "issue/issue.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "current.noCurrentIssueDesc"), $this);?>

<?php endif; ?>

