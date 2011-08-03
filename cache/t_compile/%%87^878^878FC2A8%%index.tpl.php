<?php /* Smarty version 2.6.26, created on 2011-07-30 22:26:36
         compiled from about/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'about/index.tpl', 16, false),array('function', 'url', 'about/index.tpl', 19, false),array('function', 'call_hook', 'about/index.tpl', 25, false),array('block', 'iterate', 'about/index.tpl', 22, false),array('modifier', 'escape', 'about/index.tpl', 23, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "about.aboutTheJournal"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>

<div id="aboutPeople">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.people"), $this);?>
</h3>
<ul class="plain">
	<?php if (! ( empty ( $this->_tpl_vars['journalSettings']['mailingAddress'] ) && empty ( $this->_tpl_vars['journalSettings']['contactName'] ) && empty ( $this->_tpl_vars['journalSettings']['contactAffiliation'] ) && empty ( $this->_tpl_vars['journalSettings']['contactMailingAddress'] ) && empty ( $this->_tpl_vars['journalSettings']['contactPhone'] ) && empty ( $this->_tpl_vars['journalSettings']['contactFax'] ) && empty ( $this->_tpl_vars['journalSettings']['contactEmail'] ) && empty ( $this->_tpl_vars['journalSettings']['supportName'] ) && empty ( $this->_tpl_vars['journalSettings']['supportPhone'] ) && empty ( $this->_tpl_vars['journalSettings']['supportEmail'] ) )): ?>
		<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'contact'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.contact"), $this);?>
</a></li>
	<?php endif; ?>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialTeam'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.editorialTeam"), $this);?>
</a></li>
	<?php $this->_tag_stack[] = array('iterate', array('from' => 'peopleGroups','item' => 'peopleGroup')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'displayMembership','path' => $this->_tpl_vars['peopleGroup']->getId()), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['peopleGroup']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></li>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::About::Index::People"), $this);?>

</ul>
</div>
<div id="aboutPolicies">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.policies"), $this);?>
</h3>
<ul class="plain">
	<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('focusScopeDesc') != ''): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'focusAndScope'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.focusAndScope"), $this);?>
</a></li><?php endif; ?>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'sectionPolicies'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.sectionPolicies"), $this);?>
</a></li>
	<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('reviewPolicy') != ''): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'peerReviewProcess'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.peerReviewProcess"), $this);?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('pubFreqPolicy') != ''): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'publicationFrequency'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.publicationFrequency"), $this);?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['currentJournal']->getSetting('publishingMode') == @PUBLISHING_MODE_OPEN && $this->_tpl_vars['currentJournal']->getLocalizedSetting('openAccessPolicy') != ''): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'openAccessPolicy'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.openAccessPolicy"), $this);?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['journalSettings']['enableLockss'] && $this->_tpl_vars['currentJournal']->getLocalizedSetting('lockssLicense') != ''): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'archiving'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.archiving"), $this);?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['paymentConfigured'] && $this->_tpl_vars['journalSettings']['journalPaymentsEnabled'] && $this->_tpl_vars['journalSettings']['membershipFeeEnabled'] && $this->_tpl_vars['journalSettings']['membershipFee'] > 0): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'memberships'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.memberships"), $this);?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['currentJournal']->getSetting('publishingMode') == @PUBLISHING_MODE_SUBSCRIPTION): ?>
		<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'subscriptions'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.subscriptions"), $this);?>
</a></li>
		<?php if (! empty ( $this->_tpl_vars['journalSettings']['enableAuthorSelfArchive'] )): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'authorSelfArchivePolicy'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.authorSelfArchive"), $this);?>
</a></li><?php endif; ?>
		<?php if (! empty ( $this->_tpl_vars['journalSettings']['enableDelayedOpenAccess'] )): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'delayedOpenAccessPolicy'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.delayedOpenAccess"), $this);?>
</a></li><?php endif; ?>
	<?php endif; ?>	<?php $_from = $this->_tpl_vars['customAboutItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['customAboutItem']):
?>
		<?php if ($this->_tpl_vars['customAboutItem']['title'] != ''): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => "custom-".($this->_tpl_vars['key'])), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['customAboutItem']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></li><?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::About::Index::Policies"), $this);?>

</ul>
</div>
<div id="aboutSubmissions">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.submissions"), $this);?>
</h3>
<ul class="plain">
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissions','anchor' => 'onlineSubmissions'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.onlineSubmissions"), $this);?>
</a></li>
	<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('authorGuidelines') != ''): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissions','anchor' => 'authorGuidelines'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.authorGuidelines"), $this);?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('copyrightNotice') != ''): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissions','anchor' => 'copyrightNotice'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.copyrightNotice"), $this);?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('privacyStatement') != ''): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissions','anchor' => 'privacyStatement'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.privacyStatement"), $this);?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['currentJournal']->getSetting('journalPaymentsEnabled') && ( $this->_tpl_vars['currentJournal']->getSetting('submissionFeeEnabled') || $this->_tpl_vars['currentJournal']->getSetting('fastTrackFeeEnabled') || $this->_tpl_vars['currentJournal']->getSetting('publicationFeeEnabled') )): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissions','anchor' => 'authorFees'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.authorFees"), $this);?>
</a></li><?php endif; ?>
	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::About::Index::Submissions"), $this);?>

</ul>
</div>
<div id="aboutOther">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.other"), $this);?>
</h3>
<ul class="plain">
	<?php if (! ( $this->_tpl_vars['currentJournal']->getSetting('publisherInstitution') == '' && $this->_tpl_vars['currentJournal']->getLocalizedSetting('publisherNote') == '' && $this->_tpl_vars['currentJournal']->getLocalizedSetting('contributorNote') == '' && empty ( $this->_tpl_vars['journalSettings']['contributors'] ) && $this->_tpl_vars['currentJournal']->getLocalizedSetting('sponsorNote') == '' && empty ( $this->_tpl_vars['journalSettings']['sponsors'] ) )): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'journalSponsorship'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.journalSponsorship"), $this);?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('history') != ''): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'history'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.history"), $this);?>
</a></li><?php endif; ?>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'siteMap'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.siteMap"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'aboutThisPublishingSystem'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.aboutThisPublishingSystem"), $this);?>
</a></li>
	<?php if ($this->_tpl_vars['publicStatisticsEnabled']): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'statistics'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.statistics"), $this);?>
</a></li><?php endif; ?>
	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::About::Index::Other"), $this);?>

</ul>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
