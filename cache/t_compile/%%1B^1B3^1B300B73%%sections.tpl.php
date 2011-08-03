<?php /* Smarty version 2.6.26, created on 2011-07-31 19:08:54
         compiled from manager/sections/sections.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manager/sections/sections.tpl', 30, false),array('function', 'url', 'manager/sections/sections.tpl', 42, false),array('function', 'page_info', 'manager/sections/sections.tpl', 58, false),array('function', 'page_links', 'manager/sections/sections.tpl', 59, false),array('block', 'iterate', 'manager/sections/sections.tpl', 37, false),array('modifier', 'escape', 'manager/sections/sections.tpl', 39, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "section.sections"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<script type="text/javascript">
<?php echo '
$(document).ready(function() { setupTableDND("#dragTable", "moveSection"); });
'; ?>

</script>

<br/>

<div id="sections">
<table width="100%" class="listing" id="dragTable">
	<tr>
		<td class="headseparator" colspan="3">&nbsp;</td>
	</tr>
	<tr class="heading" valign="bottom">
		<td width="60%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "section.title"), $this);?>
</td>
		<td width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "section.abbreviation"), $this);?>
</td>
		<td width="15%" align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<tr>
		<td class="headseparator" colspan="3">&nbsp;</td>
	</tr>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'sections','item' => 'section','name' => 'sections')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<tr valign="top" id="section-<?php echo $this->_tpl_vars['section']->getId(); ?>
" class="data">
		<td class="drag"><?php echo ((is_array($_tmp=$this->_tpl_vars['section']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		<td class="drag"><?php echo ((is_array($_tmp=$this->_tpl_vars['section']->getLocalizedAbbrev())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		<td align="right" class="nowrap">
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editSection','path' => $this->_tpl_vars['section']->getId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a>&nbsp;|&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'deleteSection','path' => $this->_tpl_vars['section']->getId()), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.sections.confirmDelete"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a>&nbsp;|&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'moveSection','d' => 'u','id' => $this->_tpl_vars['section']->getId()), $this);?>
">&uarr;</a>&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'moveSection','d' => 'd','id' => $this->_tpl_vars['section']->getId()), $this);?>
">&darr;</a>
		</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<tr>
		<td colspan="3" class="endseparator">&nbsp;</td>
	</tr>
<?php if ($this->_tpl_vars['sections']->wasEmpty()): ?>
	<tr>
		<td colspan="3" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.sections.noneCreated"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="3" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['sections']), $this);?>
</td>
		<td colspan="2" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'sections','name' => 'sections','iterator' => $this->_tpl_vars['sections']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>
<a class="action" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'createSection'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.sections.create"), $this);?>
</a>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
