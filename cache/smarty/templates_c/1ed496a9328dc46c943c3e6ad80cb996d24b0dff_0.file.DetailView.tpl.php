<?php
/* Smarty version 4.3.1, created on 2024-08-22 09:55:58
  from 'C:\laragon\www\SuiteCRM-7.14.5\cache\themes\SuiteP\modules\Leads\DetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66c70b2e5fa7d3_31725101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ed496a9328dc46c943c3e6ad80cb996d24b0dff' => 
    array (
      0 => 'C:\\laragon\\www\\SuiteCRM-7.14.5\\cache\\themes\\SuiteP\\modules\\Leads\\DetailView.tpl',
      1 => 1724320558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c70b2e5fa7d3_31725101 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\SuiteCRM-7.14.5\\include\\Smarty\\plugins\\function.sugar_include.php','function'=>'smarty_function_sugar_include',),1=>array('file'=>'C:\\laragon\\www\\SuiteCRM-7.14.5\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),2=>array('file'=>'C:\\laragon\\www\\SuiteCRM-7.14.5\\include\\Smarty\\plugins\\modifier.strip_semicolon.php','function'=>'smarty_modifier_strip_semicolon',),3=>array('file'=>'C:\\laragon\\www\\SuiteCRM-7.14.5\\include\\Smarty\\plugins\\function.counter.php','function'=>'smarty_function_counter',),4=>array('file'=>'C:\\laragon\\www\\SuiteCRM-7.14.5\\include\\Smarty\\plugins\\function.sugar_ajax_url.php','function'=>'smarty_function_sugar_ajax_url',),));
?>


<?php $_smarty_tpl->_assignInScope('preForm', "<table width='100%' border='1' cellspacing='0' cellpadding='0' class='converted_account'><tr><td><table width='100%'><tr><td>");
$_smarty_tpl->_assignInScope('displayPreform', false);
if ((isset($_smarty_tpl->tpl_vars['bean']->value->contact_id)) && !empty($_smarty_tpl->tpl_vars['bean']->value->contact_id)) {
$_smarty_tpl->_assignInScope('displayPreform', true);
$_smarty_tpl->_assignInScope('preForm', ($_smarty_tpl->tpl_vars['preForm']->value).($_smarty_tpl->tpl_vars['MOD']->value['LBL_CONVERTED_CONTACT']));
$_smarty_tpl->_assignInScope('preForm', ($_smarty_tpl->tpl_vars['preForm']->value).("&nbsp;<a href='index.php?module=Contacts&action=DetailView&record="));
$_smarty_tpl->_assignInScope('preForm', ($_smarty_tpl->tpl_vars['preForm']->value).($_smarty_tpl->tpl_vars['bean']->value->contact_id));
$_smarty_tpl->_assignInScope('preForm', ($_smarty_tpl->tpl_vars['preForm']->value).("'>"));
$_smarty_tpl->_assignInScope('preForm', ($_smarty_tpl->tpl_vars['preForm']->value).($_smarty_tpl->tpl_vars['bean']->value->contact_name));
$_smarty_tpl->_assignInScope('preForm', ($_smarty_tpl->tpl_vars['preForm']->value).("</a>"));
}
$_smarty_tpl->_assignInScope('preForm', ($_smarty_tpl->tpl_vars['preForm']->value).("</td><td>"));
if (($_smarty_tpl->tpl_vars['bean']->value->converted == '1') && (isset($_smarty_tpl->tpl_vars['bean']->value->account_id)) && !empty($_smarty_tpl->tpl_vars['bean']->value->account_id)) {
$_smarty_tpl->_assignInScope('displayPreform', true);
$_smarty_tpl->_assignInScope('preForm', ($_smarty_tpl->tpl_vars['preForm']->value).($_smarty_tpl->tpl_vars['MOD']->value['LBL_CONVERTED_ACCOUNT']));
$_smarty_tpl->_assignInScope('preForm', ($_smarty_tpl->tpl_vars['preForm']->value).("&nbsp;<a href='index.php?module=Accounts&action=DetailView&record="));
$_smarty_tpl->_assignInScope('preForm', ($_smarty_tpl->tpl_vars['preForm']->value).($_smarty_tpl->tpl_vars['bean']->value->account_id));
$_smarty_tpl->_assignInScope('preForm', ($_smarty_tpl->tpl_vars['preForm']->value).("'>"));
$_smarty_tpl->_assignInScope('preForm', ($_smarty_tpl->tpl_vars['preForm']->value).($_smarty_tpl->tpl_vars['bean']->value->account_name));
$_smarty_tpl->_assignInScope('preForm', ($_smarty_tpl->tpl_vars['preForm']->value).("</a>"));
}
$_smarty_tpl->_assignInScope('preForm', ($_smarty_tpl->tpl_vars['preForm']->value).("</td><td>"));
if ((isset($_smarty_tpl->tpl_vars['bean']->value->opportunity_id)) && !empty($_smarty_tpl->tpl_vars['bean']->value->opportunity_id)) {
$_smarty_tpl->_assignInScope('displayPreform', true);
$_smarty_tpl->_assignInScope('preForm', ($_smarty_tpl->tpl_vars['preForm']->value).($_smarty_tpl->tpl_vars['MOD']->value['LBL_CONVERTED_OPP']));
$_smarty_tpl->_assignInScope('preForm', ($_smarty_tpl->tpl_vars['preForm']->value).("&nbsp;<a href='index.php?module=Opportunities&action=DetailView&record="));
$_smarty_tpl->_assignInScope('preForm', ($_smarty_tpl->tpl_vars['preForm']->value).($_smarty_tpl->tpl_vars['bean']->value->opportunity_id));
$_smarty_tpl->_assignInScope('preForm', ($_smarty_tpl->tpl_vars['preForm']->value).("'>"));
$_smarty_tpl->_assignInScope('preForm', ($_smarty_tpl->tpl_vars['preForm']->value).($_smarty_tpl->tpl_vars['bean']->value->opportunity_name));
$_smarty_tpl->_assignInScope('preForm', ($_smarty_tpl->tpl_vars['preForm']->value).("</a>"));
}
$_smarty_tpl->_assignInScope('preForm', ($_smarty_tpl->tpl_vars['preForm']->value).("</td></tr></table></td></tr></table>"));
if ($_smarty_tpl->tpl_vars['displayPreform']->value) {
echo $_smarty_tpl->tpl_vars['preForm']->value;?>

<br>
<?php }?>

<?php echo '<script'; ?>
 language="javascript">
    
    SUGAR.util.doWhen(function () {
        return $("#contentTable").length == 0;
    }, SUGAR.themes.actionMenu);
    
<?php echo '</script'; ?>
>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<form action="index.php" method="post" name="DetailView" id="formDetailView">
<input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
">
<input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="sugar_body_only">
<?php if (!$_smarty_tpl->tpl_vars['config']->value['enable_action_menu']) {?>
<div class="buttons">
<?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("edit")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_KEY'];?>
" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Leads'; _form.return_action.value='DetailView'; _form.return_id.value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_LABEL'];?>
"><?php }?> 
<?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("delete")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_KEY'];?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Leads'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('<?php echo $_smarty_tpl->tpl_vars['APP']->value['NTC_DELETE_CONFIRMATION'];?>
')) SUGAR.ajaxUI.submitForm(_form); return false;" type="submit" name="Delete" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
" id="delete_button"><?php }?> 
<input class="button hidden" id="send_confirm_opt_in_email" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEND_CONFIRM_OPT_IN_EMAIL'];?>
" onclick="var _form = document.getElementById('formDetailView');_form.return_module.value='Leads'; _form.return_action.value='DetailView'; _form.return_id.value='<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
'; _form.action.value='sendConfirmOptInEmail'; _form.module.value='Leads'; _form.module_tab.value='Leads';_form.submit();" name="send_confirm_opt_in_email" disabled="1" type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEND_CONFIRM_OPT_IN_EMAIL'];?>
"/>
<input type="button" class="button" onClick="showPopup();" value="Create Account"/>
<?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("detail")) {
if (!empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']) && $_smarty_tpl->tpl_vars['isAuditEnabled']->value) {?><input id="btn_view_change_log" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
&module_name=Leads", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
"><?php }
}?>
</div>
<?php }?>
</form>
</div>
</td>
<td align="right" width="20%" class="buttons"><?php echo $_smarty_tpl->tpl_vars['ADMIN_EDIT']->value;?>

</td>
</tr>
</table>
<?php echo smarty_function_sugar_include(array('include'=>$_smarty_tpl->tpl_vars['includes']->value),$_smarty_tpl);?>

<div class="detail-view">
<div class="mobile-pagination"><?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>
</div>

<ul class="nav nav-tabs">

<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] && $_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] != false) {?>
<li role="presentation" class="active">
<a id="tab0" data-toggle="tab" class="hidden-xs">
<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CONTACT_INFORMATION','module'=>'Leads'),$_smarty_tpl);?>

</a>
<a id="xstab0" href="#" class="visible-xs first-tab dropdown-toggle" data-toggle="dropdown">
<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CONTACT_INFORMATION','module'=>'Leads'),$_smarty_tpl);?>

</a>
</li>
<?php }
if ($_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] && $_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] != false) {?>
<li id="tab-actions" class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">ACTIONS<span class="suitepicon suitepicon-action-caret"></span></a>
<ul class="dropdown-menu">
<li><?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("edit")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_KEY'];?>
" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Leads'; _form.return_action.value='DetailView'; _form.return_id.value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_LABEL'];?>
"><?php }?> </li>
<li><?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("delete")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_KEY'];?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Leads'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('<?php echo $_smarty_tpl->tpl_vars['APP']->value['NTC_DELETE_CONFIRMATION'];?>
')) SUGAR.ajaxUI.submitForm(_form); return false;" type="submit" name="Delete" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
" id="delete_button"><?php }?> </li>
<li><input class="button hidden" id="send_confirm_opt_in_email" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEND_CONFIRM_OPT_IN_EMAIL'];?>
" onclick="var _form = document.getElementById('formDetailView');_form.return_module.value='Leads'; _form.return_action.value='DetailView'; _form.return_id.value='<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
'; _form.action.value='sendConfirmOptInEmail'; _form.module.value='Leads'; _form.module_tab.value='Leads';_form.submit();" name="send_confirm_opt_in_email" disabled="1" type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEND_CONFIRM_OPT_IN_EMAIL'];?>
"/></li>
<li><input type="button" class="button" onClick="showPopup();" value="Create Account"/></li>
<li><?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("detail")) {
if (!empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']) && $_smarty_tpl->tpl_vars['isAuditEnabled']->value) {?><input id="btn_view_change_log" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
&module_name=Leads", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
"><?php }
}?></li>
</ul>
</li>
<li class="tab-inline-pagination">
<?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

</li>
<?php }?>
</ul>
<div class="clearfix"></div>

<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] && $_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] != false) {?>

<div class="tab-content">
<?php } else { ?>

<div class="tab-content" style="padding: 0; border: 0;">
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] && $_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] != false) {?>
<div class="tab-pane-NOBOOTSTRAPTOGGLER active fade in" id='tab-content-0'>





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="full_name_c">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_FULL_NAME','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="full_name_c" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['full_name_c']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['full_name_c']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['full_name_c']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['full_name_c']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['full_name_c']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['full_name_c']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="utm_score_c">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_UTM_SCORE','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field" type="varchar" field="utm_score_c" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['utm_score_c']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['utm_score_c']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['utm_score_c']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['utm_score_c']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['utm_score_c']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['utm_score_c']['value'];?>
</span>
<?php }?>

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="phone_c">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_PHONE','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="phone_c" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['phone_c']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['phone_c']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_c']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_c']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_c']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_c']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="utm_medium_c">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_UTM_MEDIUM','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field" type="varchar" field="utm_medium_c" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['utm_medium_c']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['utm_medium_c']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['utm_medium_c']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['utm_medium_c']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['utm_medium_c']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['utm_medium_c']['value'];?>
</span>
<?php }?>

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="phone_number_c">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_PHONE_NUMBER','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="phone_number_c" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['phone_number_c']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['phone_number_c']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_number_c']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_number_c']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_number_c']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_number_c']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="utm_campaign_c">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_UTM_CAMPAIGN','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field" type="varchar" field="utm_campaign_c" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['utm_campaign_c']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['utm_campaign_c']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['utm_campaign_c']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['utm_campaign_c']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['utm_campaign_c']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['utm_campaign_c']['value'];?>
</span>
<?php }?>

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="">
</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="">
</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="email1">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL_ADDRESS','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field" type="varchar" field="email1" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['email1']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<span id='email1_span'>
<?php echo $_smarty_tpl->tpl_vars['fields']->value['email1']['value'];?>

</span>
<?php }?>

</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="utm_term_c">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_UTM_TERM','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field" type="varchar" field="utm_term_c" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['utm_term_c']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['utm_term_c']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['utm_term_c']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['utm_term_c']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['utm_term_c']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['utm_term_c']['value'];?>
</span>
<?php }?>

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="company_name_c">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_COMPANY_NAME','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="company_name_c" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['company_name_c']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['company_name_c']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['company_name_c']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['company_name_c']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['company_name_c']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['company_name_c']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="utm_content_c">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_UTM_CONTENT','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field" type="varchar" field="utm_content_c" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['utm_content_c']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['utm_content_c']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['utm_content_c']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['utm_content_c']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['utm_content_c']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['utm_content_c']['value'];?>
</span>
<?php }?>

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="vat_number_c">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_VAT_NUMBER','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field" type="varchar" field="vat_number_c" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['vat_number_c']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['vat_number_c']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['vat_number_c']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['vat_number_c']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['vat_number_c']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['vat_number_c']['value'];?>
</span>
<?php }?>

</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="">
</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="st1_team_leads_1_name">


<div class="col-xs-12 col-sm-2 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ST1_TEAM_LEADS_1_FROM_ST1_TEAM_TITLE','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field inlineEdit" type="relate" field="st1_team_leads_1_name" colspan='3'>

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['st1_team_leads_1_name']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['st1_team_leads_1st1_team_ida']['value'])) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "detail_url", null);?>index.php?module=ST1_Team&action=DetailView&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['st1_team_leads_1st1_team_ida']['value'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
<a href="<?php echo smarty_function_sugar_ajax_url(array('url'=>$_smarty_tpl->tpl_vars['detail_url']->value),$_smarty_tpl);?>
"><?php }?>
<span id="st1_team_leads_1st1_team_ida" class="sugar_field" data-id-value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['st1_team_leads_1st1_team_ida']['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['st1_team_leads_1_name']['value'];?>
</span>
<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['st1_team_leads_1st1_team_ida']['value'])) {?></a><?php }
}?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>

</div>
<?php } else { ?>

<div class="tab-pane-NOBOOTSTRAPTOGGLER panel-collapse"></div>
<?php }?>
</div>

<div class="panel-content">
<div>&nbsp;</div>





<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] && $_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] != false) {?>

<?php } else { ?>

<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse" href="#top-panel--1" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CONTACT_INFORMATION','module'=>'Leads'),$_smarty_tpl);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="top-panel--1" data-id="LBL_CONTACT_INFORMATION">
<div class="tab-content">
<!-- TAB CONTENT -->





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="full_name_c">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_FULL_NAME','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="full_name_c" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['full_name_c']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['full_name_c']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['full_name_c']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['full_name_c']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['full_name_c']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['full_name_c']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="utm_score_c">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_UTM_SCORE','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field" type="varchar" field="utm_score_c" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['utm_score_c']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['utm_score_c']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['utm_score_c']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['utm_score_c']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['utm_score_c']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['utm_score_c']['value'];?>
</span>
<?php }?>

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="phone_c">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_PHONE','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="phone_c" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['phone_c']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['phone_c']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_c']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_c']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_c']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_c']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="utm_medium_c">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_UTM_MEDIUM','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field" type="varchar" field="utm_medium_c" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['utm_medium_c']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['utm_medium_c']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['utm_medium_c']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['utm_medium_c']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['utm_medium_c']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['utm_medium_c']['value'];?>
</span>
<?php }?>

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="phone_number_c">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_PHONE_NUMBER','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="phone_number_c" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['phone_number_c']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['phone_number_c']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_number_c']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_number_c']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_number_c']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_number_c']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="utm_campaign_c">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_UTM_CAMPAIGN','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field" type="varchar" field="utm_campaign_c" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['utm_campaign_c']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['utm_campaign_c']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['utm_campaign_c']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['utm_campaign_c']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['utm_campaign_c']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['utm_campaign_c']['value'];?>
</span>
<?php }?>

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="">
</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="">
</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="email1">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL_ADDRESS','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field" type="varchar" field="email1" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['email1']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<span id='email1_span'>
<?php echo $_smarty_tpl->tpl_vars['fields']->value['email1']['value'];?>

</span>
<?php }?>

</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="utm_term_c">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_UTM_TERM','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field" type="varchar" field="utm_term_c" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['utm_term_c']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['utm_term_c']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['utm_term_c']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['utm_term_c']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['utm_term_c']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['utm_term_c']['value'];?>
</span>
<?php }?>

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="company_name_c">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_COMPANY_NAME','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="company_name_c" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['company_name_c']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['company_name_c']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['company_name_c']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['company_name_c']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['company_name_c']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['company_name_c']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="utm_content_c">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_UTM_CONTENT','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field" type="varchar" field="utm_content_c" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['utm_content_c']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['utm_content_c']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['utm_content_c']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['utm_content_c']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['utm_content_c']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['utm_content_c']['value'];?>
</span>
<?php }?>

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="vat_number_c">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_VAT_NUMBER','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field" type="varchar" field="vat_number_c" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['vat_number_c']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['vat_number_c']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['vat_number_c']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['vat_number_c']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['vat_number_c']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['vat_number_c']['value'];?>
</span>
<?php }?>

</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="">
</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="st1_team_leads_1_name">


<div class="col-xs-12 col-sm-2 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ST1_TEAM_LEADS_1_FROM_ST1_TEAM_TITLE','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field inlineEdit" type="relate" field="st1_team_leads_1_name" colspan='3'>

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['st1_team_leads_1_name']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['st1_team_leads_1st1_team_ida']['value'])) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "detail_url", null);?>index.php?module=ST1_Team&action=DetailView&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['st1_team_leads_1st1_team_ida']['value'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
<a href="<?php echo smarty_function_sugar_ajax_url(array('url'=>$_smarty_tpl->tpl_vars['detail_url']->value),$_smarty_tpl);?>
"><?php }?>
<span id="st1_team_leads_1st1_team_ida" class="sugar_field" data-id-value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['st1_team_leads_1st1_team_ida']['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['st1_team_leads_1_name']['value'];?>
</span>
<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['st1_team_leads_1st1_team_ida']['value'])) {?></a><?php }
}?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>

</div>
</div>
</div>
<?php }?>
</div>
</div>

</form>
<?php echo '<script'; ?>
>SUGAR.util.doWhen("document.getElementById('form') != null",
        function(){SUGAR.util.buildAccessKeyLabels();});
<?php echo '</script'; ?>
>            <?php echo '<script'; ?>
 type="text/javascript" src="include/InlineEditing/inlineEditing.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="modules/Favorites/favorites.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">

                    let selectTabDetailView = function(tab) {
                        $('#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').hide();
                        $('#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').eq(tab).show().addClass('active').addClass('in');
                        $('#content div.detail-view div.panel-content div.panel.panel').hide();
                        $('#content div.panel-content div.panel.tab-panel-' + tab).show();
                    };

                    var selectTabOnError = function(tab) {
                        selectTabDetailView(tab);
                        $('#content ul.nav.nav-tabs > li').removeClass('active');
                        $('#content ul.nav.nav-tabs > li a').css('color', '');

                        $('#content ul.nav.nav-tabs > li').eq(tab).find('a').first().css('color', 'red');
                        $('#content ul.nav.nav-tabs > li').eq(tab).addClass('active');

                    };

                    var selectTabOnErrorInputHandle = function(inputHandle) {
                        var tab = $(inputHandle).closest('.tab-pane-NOBOOTSTRAPTOGGLER').attr('id').match(/^detailpanel_(.*)$/)[1];
                        selectTabOnError(tab);
                    };


                    $(function(){
                        $('#content ul.nav.nav-tabs > li > a[data-toggle="tab"]').click(function(e){
                            if(typeof $(this).parent().find('a').first().attr('id') != 'undefined') {
                                var tab = parseInt($(this).parent().find('a').first().attr('id').match(/^tab(?<number>(.)*)$/)[1]);
                                selectTabDetailView(tab);
                            }
                        });
                    });

                <?php echo '</script'; ?>
>
<?php }
}
