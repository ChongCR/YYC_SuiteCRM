<?php
/* Smarty version 4.3.1, created on 2024-08-20 09:53:42
  from 'C:\laragon\www\SuiteCRM-7.14.5\modules\Emails\templates\overlay.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66c467a66b2b37_10118059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2fc649be3aaebaa44c639fa27de3162bc808a13' => 
    array (
      0 => 'C:\\laragon\\www\\SuiteCRM-7.14.5\\modules\\Emails\\templates\\overlay.tpl',
      1 => 1723532450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c467a66b2b37_10118059 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="SUGAR.email2.e2overlay" style="visibility:hidden; position:absolute; top:0px; background-color:#fff;">
	<div class="ydlg-hd" id="overlayTitle"></div>
	<div class="ydlg-bd" id="overlayBody"></div>
</div>

<!-- add file for attachment dialog //-->
<div id="addFileDialog" class="yui-hidden">
	<div class="ydlg-bd">
		<div id="addFileDialogContent" class="ylayout-inactive-content">
			<!--  -->
			<form id="uploadAttachment" name="uploadAttachment" method='POST' action="index.php" enctype='multipart/form-data'>
				<input type="hidden" name="to_pdf" value="true">
				<input type="hidden" name="module" value="Emails">
				<input type="hidden" name="action" value="EmailUIAjax">
				<input type="hidden" name="emailUIAction" value="uploadAttachment">
				<input type='file' name='email_attachment' id='email_attachment' size='30' />&nbsp;
				<input type="button" onclick="SUGAR.email2.composeLayout.uploadAttachment();" class="button" value="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_ATTACH_FILE_TO_EMAIL'];?>
" />
			</form>
		</div>
	</div>
</div>
<?php }
}
