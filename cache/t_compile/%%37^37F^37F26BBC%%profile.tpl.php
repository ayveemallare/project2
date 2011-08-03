<?php /* Smarty version 2.6.26, created on 2011-07-31 18:01:06
         compiled from user/profile.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'user/profile.tpl', 13, false),array('function', 'fieldLabel', 'user/profile.tpl', 41, false),array('function', 'form_language_chooser', 'user/profile.tpl', 44, false),array('function', 'translate', 'user/profile.tpl', 45, false),array('function', 'html_options_translate', 'user/profile.tpl', 77, false),array('function', 'html_options', 'user/profile.tpl', 117, false),array('modifier', 'assign', 'user/profile.tpl', 13, false),array('modifier', 'escape', 'user/profile.tpl', 25, false),array('modifier', 'date_format', 'user/profile.tpl', 160, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "user.profile.editProfile"); ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'profile'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<?php echo '

<script type="text/javascript">
	$(document).ready(function(){
		$("#interestsTextOnly").hide();
		$("#interests").tagit({
			'; ?>
<?php if ($this->_tpl_vars['existingInterests']): ?><?php echo '
			// This is the list of interests in the system used to populate the autocomplete
			availableTags: ['; ?>
<?php $_from = $this->_tpl_vars['existingInterests']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['existingInterests'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['existingInterests']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['interest']):
        $this->_foreach['existingInterests']['iteration']++;
?>"<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['interest'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
"<?php if (! ($this->_foreach['existingInterests']['iteration'] == $this->_foreach['existingInterests']['total'])): ?>, <?php endif; ?><?php endforeach; endif; unset($_from); ?><?php echo '],'; ?>
<?php endif; ?>
			// This is the list of the user's interests that have already been saved
			<?php if ($this->_tpl_vars['interestsKeywords']): ?><?php echo 'currentTags: ['; ?>
<?php $_from = $this->_tpl_vars['interestsKeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['currentInterests'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['currentInterests']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['interest']):
        $this->_foreach['currentInterests']['iteration']++;
?>"<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['interest'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
"<?php if (! ($this->_foreach['currentInterests']['iteration'] == $this->_foreach['currentInterests']['total'])): ?>, <?php endif; ?><?php endforeach; endif; unset($_from); ?><?php echo ']'; ?>

			<?php else: ?><?php echo 'currentTags: []'; ?>
<?php endif; ?><?php echo '
		});
	});
</script>
'; ?>


<form name="profile" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveProfile'), $this);?>
" enctype="multipart/form-data">

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class="data" width="100%">
<?php if (count ( $this->_tpl_vars['formLocales'] ) > 1): ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'formLocale','required' => 'true','key' => "common.language"), $this);?>
</td>
		<td width="80%" class="value">
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'profile','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'userProfileUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'userProfileUrl'));?>

			<?php echo $this->_plugins['function']['form_language_chooser'][0][0]->smartyFormLanguageChooser(array('form' => 'profile','url' => $this->_tpl_vars['userProfileUrl']), $this);?>

			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.formLanguage.description"), $this);?>
</span>
		</td>
	</tr>
<?php endif; ?>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('suppressId' => 'true','name' => 'username','key' => "user.username"), $this);?>
</td>
	<td width="80%" class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'salutation','key' => "user.salutation"), $this);?>
</td>
	<td class="value"><input type="text" name="salutation" id="salutation" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['salutation'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" maxlength="40" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'firstName','required' => 'true','key' => "user.firstName"), $this);?>
</td>
	<td class="value"><input type="text" name="firstName" id="firstName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['firstName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" maxlength="40" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'middleName','key' => "user.middleName"), $this);?>
</td>
	<td class="value"><input type="text" name="middleName" id="middleName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['middleName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" maxlength="40" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'lastName','required' => 'true','key' => "user.lastName"), $this);?>
</td>
	<td class="value"><input type="text" name="lastName" id="lastName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lastName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" maxlength="90" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'initials','key' => "user.initials"), $this);?>
</td>
	<td class="value"><input type="text" name="initials" id="initials" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['initials'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="5" maxlength="5" class="textField" />&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.initialsExample"), $this);?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'gender','key' => "user.gender"), $this);?>
</td>
	<td class="value">
		<select name="gender" id="gender" size="1" class="selectMenu">
			<?php echo $this->_plugins['function']['html_options_translate'][0][0]->smartyHtmlOptionsTranslate(array('options' => $this->_tpl_vars['genderOptions'],'selected' => $this->_tpl_vars['gender']), $this);?>

		</select>
	</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'affiliation','key' => "user.affiliation"), $this);?>
</td>
	<td class="value">
		<textarea name="affiliation[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="affiliation" rows="5" cols="40" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['affiliation'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea><br/>
		<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.affiliation.description"), $this);?>
</span>
	</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'signature','key' => "user.signature"), $this);?>
</td>
	<td class="value"><textarea name="signature[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="signature" rows="5" cols="40" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['signature'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'email','required' => 'true','key' => "user.email"), $this);?>
</td>
	<td class="value"><input type="text" name="email" id="email" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="30" maxlength="90" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'userUrl','key' => "user.url"), $this);?>
</td>
	<td class="value"><input type="text" name="userUrl" id="userUrl" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['userUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="30" maxlength="90" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'phone','key' => "user.phone"), $this);?>
</td>
	<td class="value"><input type="text" name="phone" id="phone" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['phone'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="15" maxlength="24" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'fax','key' => "user.fax"), $this);?>
</td>
	<td class="value"><input type="text" name="fax" id="fax" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['fax'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="15" maxlength="24" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'mailingAddress','key' => "common.mailingAddress"), $this);?>
</td>
	<td class="value"><textarea name="mailingAddress" id="mailingAddress" rows="3" cols="40" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['mailingAddress'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'country','key' => "common.country"), $this);?>
</td>
	<td class="value">
		<select name="country" id="country" class="selectMenu">
			<option value=""></option>
			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['countries'],'selected' => $this->_tpl_vars['country']), $this);?>

		</select>
	</td>
</tr>

<?php if ($this->_tpl_vars['currentJournal']): ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.roles"), $this);?>
</td>
		<td class="value">
			<?php if ($this->_tpl_vars['allowRegReader']): ?>
				<input type="checkbox" id="readerRole" name="readerRole" <?php if ($this->_tpl_vars['isReader'] || $this->_tpl_vars['readerRole']): ?>checked="checked" <?php endif; ?>/>&nbsp;<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'readerRole','key' => "user.role.reader"), $this);?>
<br/>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['allowRegAuthor']): ?>
				<input type="checkbox" id="authorRole" name="authorRole" <?php if ($this->_tpl_vars['isAuthor'] || $this->_tpl_vars['authorRole']): ?>checked="checked" <?php endif; ?>/>&nbsp;<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'authorRole','key' => "user.role.author"), $this);?>
<br/>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['allowRegReviewer']): ?>
				<input type="checkbox" id="reviewerRole" name="reviewerRole" <?php if ($this->_tpl_vars['isReviewer'] || $this->_tpl_vars['reviewerRole']): ?>checked="checked" <?php endif; ?>/>&nbsp;<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'reviewerRole','key' => "user.role.reviewer"), $this);?>
<br/>
			<?php endif; ?>
		</td>
	</tr>
<?php endif; ?>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'interests','key' => "user.interests"), $this);?>
</td>
	<td class="value">
		<!-- The container which will be processed by tag-it.js as the interests widget -->
		<ul id="interests"><li></li></ul><span class="interestDescription"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('for' => 'interests','key' => "user.interests.description"), $this);?>
</span><br />
		<!-- If Javascript is disabled, this field will be visible -->
		<textarea name="interests" id="interestsTextOnly" rows="5" cols="40" class="textArea">
			<?php $_from = $this->_tpl_vars['interestsKeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['currentInterests'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['currentInterests']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['interest']):
        $this->_foreach['currentInterests']['iteration']++;
?><?php echo ((is_array($_tmp=$this->_tpl_vars['interest'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php if (! ($this->_foreach['currentInterests']['iteration'] == $this->_foreach['currentInterests']['total'])): ?>, <?php endif; ?><?php endforeach; endif; unset($_from); ?>
		</textarea>
	</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'biography','key' => "user.biography"), $this);?>
<br /><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.biography.description"), $this);?>
</td>
	<td class="value"><textarea name="biography[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="biography" rows="5" cols="40" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['biography'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea></td>
</tr>
<tr valign="top">
	<td class="label">
		<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'profileImage','key' => "user.profile.form.profileImage"), $this);?>

	</td>
	<td class="value">
		<input type="file" id="profileImage" name="profileImage" class="uploadField" /> <input type="submit" name="uploadProfileImage" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="button" />
		<?php if ($this->_tpl_vars['profileImage']): ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['profileImage']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['profileImage']['dateUploaded'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>
 <input type="submit" name="deleteProfileImage" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="button" />
			<br />
			<img src="<?php echo $this->_tpl_vars['sitePublicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['profileImage']['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')); ?>
" width="<?php echo ((is_array($_tmp=$this->_tpl_vars['profileImage']['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" height="<?php echo ((is_array($_tmp=$this->_tpl_vars['profileImage']['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" style="border: 0;" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.profile.form.profileImage"), $this);?>
" />
		<?php endif; ?>
	</td>
</tr>
<?php if (count ( $this->_tpl_vars['availableLocales'] ) > 1): ?>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.workingLanguages"), $this);?>
</td>
	<td><?php $_from = $this->_tpl_vars['availableLocales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['localeKey'] => $this->_tpl_vars['localeName']):
?>
		<input type="checkbox" name="userLocales[]" id="userLocales-<?php echo ((is_array($_tmp=$this->_tpl_vars['localeKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['localeKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php if (in_array ( $this->_tpl_vars['localeKey'] , $this->_tpl_vars['userLocales'] )): ?> checked="checked"<?php endif; ?> /> <label for="userLocales-<?php echo ((is_array($_tmp=$this->_tpl_vars['localeKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['localeName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</label><br />
	<?php endforeach; endif; unset($_from); ?></td>
</tr>
<?php endif; ?>

<?php if ($this->_tpl_vars['displayOpenAccessNotification']): ?>
	<?php $this->assign('notFirstJournal', 0); ?>
	<?php $_from = $this->_tpl_vars['journals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['journalOpenAccessNotifications'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['journalOpenAccessNotifications']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['thisJournalId'] => $this->_tpl_vars['thisJournal']):
        $this->_foreach['journalOpenAccessNotifications']['iteration']++;
?>
		<?php $this->assign('thisJournalId', $this->_tpl_vars['thisJournal']->getJournalId()); ?>
		<?php $this->assign('publishingMode', $this->_tpl_vars['thisJournal']->getSetting('publishingMode')); ?>
		<?php $this->assign('enableOpenAccessNotification', $this->_tpl_vars['thisJournal']->getSetting('enableOpenAccessNotification')); ?>
		<?php $this->assign('notificationEnabled', $this->_tpl_vars['user']->getSetting('openAccessNotification',$this->_tpl_vars['thisJournalId'])); ?>
		<?php if (! $this->_tpl_vars['notFirstJournal']): ?>
			<?php $this->assign('notFirstJournal', 1); ?>
			<tr valign="top">
				<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.profile.form.openAccessNotifications"), $this);?>
</td>
				<td class="value">
		<?php endif; ?>

		<?php if ($this->_tpl_vars['publishingMode'] == @PUBLISHING_MODE_SUBSCRIPTION && $this->_tpl_vars['enableOpenAccessNotification']): ?>
			<input type="checkbox" name="openAccessNotify[]" <?php if ($this->_tpl_vars['notificationEnabled']): ?>checked="checked" <?php endif; ?>id="openAccessNotify-<?php echo ((is_array($_tmp=$this->_tpl_vars['thisJournalId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['thisJournalId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" /> <label for="openAccessNotify-<?php echo ((is_array($_tmp=$this->_tpl_vars['thisJournalId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['thisJournal']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</label><br/>
		<?php endif; ?>

		<?php if (($this->_foreach['journalOpenAccessNotifications']['iteration'] == $this->_foreach['journalOpenAccessNotifications']['total'])): ?>
				</td>
			</tr>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

</table>
<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user'), $this);?>
'" /></p>
</form>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
