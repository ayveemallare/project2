<?php /* Smarty version 2.6.26, created on 2011-07-31 18:00:59
         compiled from issue/viewPage.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'issue/viewPage.tpl', 13, false),array('modifier', 'assign', 'issue/viewPage.tpl', 13, false),)), $this); ?>
<?php echo ''; ?><?php if ($this->_tpl_vars['issue'] && ! $this->_tpl_vars['issue']->getPublished()): ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.preview"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'previewText') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'previewText'));?><?php echo ''; ?><?php $this->assign('pageTitleTranslated', ($this->_tpl_vars['issueHeadingTitle'])." ".($this->_tpl_vars['previewText'])); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('pageTitleTranslated', $this->_tpl_vars['issueHeadingTitle']); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['issue'] && $this->_tpl_vars['issue']->getShowTitle() && $this->_tpl_vars['issue']->getLocalizedTitle() && ( $this->_tpl_vars['issueHeadingTitle'] != $this->_tpl_vars['issue']->getLocalizedTitle() )): ?><?php echo ''; ?><?php echo ''; ?><?php $this->assign('pageSubtitleTranslated', $this->_tpl_vars['issue']->getLocalizedTitle()); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "issue/view.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
