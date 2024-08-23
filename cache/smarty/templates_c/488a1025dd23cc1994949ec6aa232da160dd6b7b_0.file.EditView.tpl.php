<?php
/* Smarty version 4.3.1, created on 2024-08-22 08:59:18
  from 'C:\laragon\www\SuiteCRM-7.14.5\cache\themes\SuiteP\modules\Leads\EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66c6fde6edfdd6_23753428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '488a1025dd23cc1994949ec6aa232da160dd6b7b' => 
    array (
      0 => 'C:\\laragon\\www\\SuiteCRM-7.14.5\\cache\\themes\\SuiteP\\modules\\Leads\\EditView.tpl',
      1 => 1724317158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c6fde6edfdd6_23753428 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\SuiteCRM-7.14.5\\include\\Smarty\\plugins\\modifier.escape.php','function'=>'smarty_modifier_escape',),1=>array('file'=>'C:\\laragon\\www\\SuiteCRM-7.14.5\\include\\Smarty\\plugins\\function.sugar_include.php','function'=>'smarty_function_sugar_include',),2=>array('file'=>'C:\\laragon\\www\\SuiteCRM-7.14.5\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),3=>array('file'=>'C:\\laragon\\www\\SuiteCRM-7.14.5\\include\\Smarty\\plugins\\block.minify.php','function'=>'smarty_block_minify',),4=>array('file'=>'C:\\laragon\\www\\SuiteCRM-7.14.5\\include\\Smarty\\plugins\\modifier.strip_semicolon.php','function'=>'smarty_modifier_strip_semicolon',),5=>array('file'=>'C:\\laragon\\www\\SuiteCRM-7.14.5\\include\\Smarty\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
?>


<?php echo '<script'; ?>
>
    
    $(document).ready(function(){
	    $("ul.clickMenu").each(function(index, node){
	        $(node).sugarActionMenu();
	    });

        if($('.edit-view-pagination').children().length == 0) $('.saveAndContinue').remove();
    });
    
<?php echo '</script'; ?>
>
<div class="clear"></div>
<form action="index.php" method="POST" name="<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['enctype']->value;?>
>
<div class="edit-view-pagination-mobile-container">
<div class="edit-view-pagination edit-view-mobile-pagination">
<?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

</div>
</div>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
">
<?php if ((isset($_REQUEST['isDuplicate'])) && $_REQUEST['isDuplicate'] == "true") {?>
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
">
<?php } else { ?>
<input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
">
<?php }?>
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="<?php echo $_REQUEST['return_module'];?>
">
<input type="hidden" name="return_action" value="<?php echo $_REQUEST['return_action'];?>
">
<input type="hidden" name="return_id" value="<?php echo $_REQUEST['return_id'];?>
">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
<?php if ((!empty($_REQUEST['return_module']) || !empty($_REQUEST['relate_to'])) && !((isset($_REQUEST['isDuplicate'])) && $_REQUEST['isDuplicate'] == "true")) {?>
<input type="hidden" name="relate_to" value="<?php if ($_REQUEST['return_relationship']) {
echo $_REQUEST['return_relationship'];
} elseif ($_REQUEST['relate_to'] && empty($_REQUEST['from_dcmenu'])) {
echo $_REQUEST['relate_to'];
} elseif (empty($_smarty_tpl->tpl_vars['isDCForm']->value) && empty($_REQUEST['from_dcmenu'])) {
echo $_REQUEST['return_module'];
}?>">
<input type="hidden" name="relate_id" value="<?php echo $_REQUEST['return_id'];?>
">
<?php }?>
<input type="hidden" name="offset" value="<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
">
<?php $_smarty_tpl->_assignInScope('place', "_HEADER");?> <!-- to be used for id for buttons with custom code in def files-->
<input type="hidden" name="prospect_id" value="<?php if ((isset($_REQUEST['prospect_id']))) {
echo $_REQUEST['prospect_id'];
} else {
echo $_smarty_tpl->tpl_vars['bean']->value->prospect_id;
}?>">   
<input type="hidden" name="account_id" value="<?php if ((isset($_REQUEST['account_id']))) {
echo $_REQUEST['account_id'];
} else {
echo $_smarty_tpl->tpl_vars['bean']->value->account_id;
}?>">   
<input type="hidden" name="contact_id" value="<?php if ((isset($_REQUEST['contact_id']))) {
echo $_REQUEST['contact_id'];
} else {
echo $_smarty_tpl->tpl_vars['bean']->value->contact_id;
}?>">   
<input type="hidden" name="opportunity_id" value="<?php if ((isset($_REQUEST['opportunity_id']))) {
echo $_REQUEST['opportunity_id'];
} else {
echo $_smarty_tpl->tpl_vars['bean']->value->opportunity_id;
}?>">   
<div class="buttons">
<?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("save")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_KEY'];?>
" class="button primary" onclick="var _form = document.getElementById('EditView'); <?php if ($_smarty_tpl->tpl_vars['isDuplicate']->value) {?>_form.return_id.value=''; <?php }?>_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
" id="SAVE"><?php }?> 
<?php if (!empty($_REQUEST['return_action']) && ($_REQUEST['return_action'] == "DetailView" && !empty($_REQUEST['return_id']))) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
&record=<?php echo smarty_modifier_escape($_REQUEST['return_id'],"url");?>
'); return false;" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" type="button" id="CANCEL"> <?php } elseif (!empty($_REQUEST['return_action']) && ($_REQUEST['return_action'] == "DetailView" && !empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']))) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php } elseif (!empty($_REQUEST['return_action']) && ($_REQUEST['return_action'] == "DetailView" && empty($_smarty_tpl->tpl_vars['fields']->value['id']['value'])) && empty($_REQUEST['return_id'])) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php } elseif (!empty($_REQUEST['return_action']) && !empty($_REQUEST['return_module'])) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=<?php echo $_REQUEST['return_action'];?>
&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php } elseif (empty($_REQUEST['return_action']) || empty($_REQUEST['return_id']) && !empty($_smarty_tpl->tpl_vars['fields']->value['id']['value'])) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Leads'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php } else { ?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
&record=<?php echo smarty_modifier_escape($_REQUEST['return_id'],"url");?>
'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php }
if ($_smarty_tpl->tpl_vars['showVCRControl']->value) {?>
<button type="button" id="save_and_continue" class="button saveAndContinue" title="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_SAVE_AND_CONTINUE'];?>
" onClick="SUGAR.saveAndContinue(this);">
<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_AND_CONTINUE'];?>

</button>
<?php }
if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("detail")) {
if (!empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']) && $_smarty_tpl->tpl_vars['isAuditEnabled']->value) {?><input id="btn_view_change_log" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
&module_name=Leads", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
"><?php }
}?>
</div>
</td>
<td align='right' class="edit-view-pagination-desktop-container">
<div class="edit-view-pagination edit-view-pagination-desktop">
<?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

</div>
</td>
</tr>
</table>
<?php echo smarty_function_sugar_include(array('include'=>$_smarty_tpl->tpl_vars['includes']->value),$_smarty_tpl);?>

<div id="EditView_tabs">

<ul class="nav nav-tabs">
</ul>
<div class="clearfix"></div>
<div class="tab-content" style="padding: 0; border: 0;">

<div class="tab-pane panel-collapse">&nbsp;</div>
</div>

<div class="panel-content">
<div>&nbsp;</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CONTACT_INFORMATION','module'=>'Leads'),$_smarty_tpl);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="LBL_CONTACT_INFORMATION">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="full_name_c">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_FULL_NAME">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_FULL_NAME','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="full_name_c"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['full_name_c']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['full_name_c']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['full_name_c']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['full_name_c']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['full_name_c']['name'];?>
' size='30'
maxlength='255'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="utm_score_c">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_UTM_SCORE">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_UTM_SCORE','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="utm_score_c"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['utm_score_c']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['utm_score_c']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['utm_score_c']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['utm_score_c']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['utm_score_c']['name'];?>
' size='30'
maxlength='255'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="phone_c">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_PHONE">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_PHONE','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="phone_c"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['phone_c']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_c']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_c']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_c']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_c']['name'];?>
' size='30'
maxlength='255'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="utm_medium_c">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_UTM_MEDIUM">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_UTM_MEDIUM','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="utm_medium_c"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['utm_medium_c']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['utm_medium_c']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['utm_medium_c']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['utm_medium_c']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['utm_medium_c']['name'];?>
' size='30'
maxlength='255'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="phone_number_c">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_PHONE_NUMBER">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_PHONE_NUMBER','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="phone_number_c"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['phone_number_c']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_number_c']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_number_c']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_number_c']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_number_c']['name'];?>
' size='30'
maxlength='255'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="utm_campaign_c">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_UTM_CAMPAIGN">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_UTM_CAMPAIGN','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="utm_campaign_c"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['utm_campaign_c']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['utm_campaign_c']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['utm_campaign_c']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['utm_campaign_c']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['utm_campaign_c']['name'];?>
' size='30'
maxlength='255'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="email1">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_EMAIL_ADDRESS">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL_ADDRESS','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="email1"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<span id='email1_span'>
<?php echo $_smarty_tpl->tpl_vars['fields']->value['email1']['value'];?>

</span>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="utm_term_c">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_UTM_TERM">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_UTM_TERM','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="utm_term_c"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['utm_term_c']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['utm_term_c']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['utm_term_c']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['utm_term_c']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['utm_term_c']['name'];?>
' size='30'
maxlength='255'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="company_name_c">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMPANY_NAME">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_COMPANY_NAME','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="company_name_c"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['company_name_c']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['company_name_c']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['company_name_c']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['company_name_c']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['company_name_c']['name'];?>
' size='30'
maxlength='255'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="utm_content_c">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_UTM_CONTENT">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_UTM_CONTENT','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="utm_content_c"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['utm_content_c']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['utm_content_c']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['utm_content_c']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['utm_content_c']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['utm_content_c']['name'];?>
' size='30'
maxlength='255'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="vat_number_c">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_VAT_NUMBER">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_VAT_NUMBER','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="vat_number_c"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['vat_number_c']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['vat_number_c']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['vat_number_c']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['vat_number_c']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['vat_number_c']['name'];?>
' size='30'
maxlength='255'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="">
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="st1_team_leads_1_name">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_ST1_TEAM_LEADS_1_FROM_ST1_TEAM_TITLE">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ST1_TEAM_LEADS_1_FROM_ST1_TEAM_TITLE','module'=>'Leads'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="st1_team_leads_1_name" colspan='3' >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['st1_team_leads_1_name']['name'];?>
" class="sqsEnabled" tabindex="0" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['st1_team_leads_1_name']['name'];?>
" size="" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['st1_team_leads_1_name']['value'];?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['st1_team_leads_1_name']['id_name'];?>
" 
id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['st1_team_leads_1_name']['id_name'];?>
" 
value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['st1_team_leads_1st1_team_ida']['value'];?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $_smarty_tpl->tpl_vars['fields']->value['st1_team_leads_1_name']['name'];?>
" id="btn_<?php echo $_smarty_tpl->tpl_vars['fields']->value['st1_team_leads_1_name']['name'];?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_SELECT_BUTTON_TITLE"),$_smarty_tpl);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_SELECT_BUTTON_LABEL"),$_smarty_tpl);?>
"
onclick='open_popup(
"<?php echo $_smarty_tpl->tpl_vars['fields']->value['st1_team_leads_1_name']['module'];?>
", 
600, 
400, 
"", 
true, 
false, 
{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"st1_team_leads_1st1_team_ida","name":"st1_team_leads_1_name"}}, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_<?php echo $_smarty_tpl->tpl_vars['fields']->value['st1_team_leads_1_name']['name'];?>
" id="btn_clr_<?php echo $_smarty_tpl->tpl_vars['fields']->value['st1_team_leads_1_name']['name'];?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_CLEAR_RELATE_TITLE"),$_smarty_tpl);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $_smarty_tpl->tpl_vars['fields']->value['st1_team_leads_1_name']['name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['fields']->value['st1_team_leads_1_name']['id_name'];?>
');"  value="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_CLEAR_RELATE_LABEL"),$_smarty_tpl);?>
" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<?php echo '<script'; ?>
 type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['fields']->value['st1_team_leads_1_name']['name'];?>
']) != 'undefined'",
		enableQS
);
<?php echo '</script'; ?>
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php echo '<script'; ?>
 language="javascript">
    var _form_id = '<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
';
    
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == '') ? 'EditView' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
    
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_assignInScope('place', "_FOOTER");?> <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
<?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("save")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_KEY'];?>
" class="button primary" onclick="var _form = document.getElementById('EditView'); <?php if ($_smarty_tpl->tpl_vars['isDuplicate']->value) {?>_form.return_id.value=''; <?php }?>_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
" id="SAVE"><?php }?> 
<?php if (!empty($_REQUEST['return_action']) && ($_REQUEST['return_action'] == "DetailView" && !empty($_REQUEST['return_id']))) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
&record=<?php echo smarty_modifier_escape($_REQUEST['return_id'],"url");?>
'); return false;" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" type="button" id="CANCEL"> <?php } elseif (!empty($_REQUEST['return_action']) && ($_REQUEST['return_action'] == "DetailView" && !empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']))) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php } elseif (!empty($_REQUEST['return_action']) && ($_REQUEST['return_action'] == "DetailView" && empty($_smarty_tpl->tpl_vars['fields']->value['id']['value'])) && empty($_REQUEST['return_id'])) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php } elseif (!empty($_REQUEST['return_action']) && !empty($_REQUEST['return_module'])) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=<?php echo $_REQUEST['return_action'];?>
&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php } elseif (empty($_REQUEST['return_action']) || empty($_REQUEST['return_id']) && !empty($_smarty_tpl->tpl_vars['fields']->value['id']['value'])) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Leads'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php } else { ?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
&record=<?php echo smarty_modifier_escape($_REQUEST['return_id'],"url");?>
'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php }
if ($_smarty_tpl->tpl_vars['showVCRControl']->value) {?>
<button type="button" id="save_and_continue" class="button saveAndContinue" title="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_SAVE_AND_CONTINUE'];?>
" onClick="SUGAR.saveAndContinue(this);">
<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_AND_CONTINUE'];?>

</button>
<?php }
if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("detail")) {
if (!empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']) && $_smarty_tpl->tpl_vars['isAuditEnabled']->value) {?><input id="btn_view_change_log" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
&module_name=Leads", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
"><?php }
}?>
</div>
</form>
<?php echo $_smarty_tpl->tpl_vars['set_focus_block']->value;?>

<!-- Begin Meta-Data Javascript -->
<?php echo '<script'; ?>
 type="text/javascript" language="Javascript">function copyAddressRight(form)  { form.alt_address_street.value = form.primary_address_street.value;form.alt_address_city.value = form.primary_address_city.value;form.alt_address_state.value = form.primary_address_state.value;form.alt_address_postalcode.value = form.primary_address_postalcode.value;form.alt_address_country.value = form.primary_address_country.value;return true; } function copyAddressLeft(form)  { form.primary_address_street.value =form.alt_address_street.value;form.primary_address_city.value = form.alt_address_city.value;form.primary_address_state.value = form.alt_address_state.value;form.primary_address_postalcode.value =form.alt_address_postalcode.value;form.primary_address_country.value = form.alt_address_country.value;return true; } <?php echo '</script'; ?>
>
<!-- End Meta-Data Javascript -->
<?php echo '<script'; ?>
>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){SUGAR.util.buildAccessKeyLabels();});
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
YAHOO.util.Event.onContentReady("EditView",
    function () { initEditView(document.forms.EditView) });
//window.setTimeout(, 100);
window.onbeforeunload = function () { return onUnloadEditView(); };
// bug 55468 -- IE is too aggressive with onUnload event
if ($.browser.msie) {
$(document).ready(function() {
    $(".collapseLink,.expandLink").click(function (e) { e.preventDefault(); });
  });
}
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">

    var selectTab = function(tab) {
        $('#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').hide();
        $('#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').eq(tab).show().addClass('active').addClass('in');
        $('#EditView_tabs div.panel-content div.panel').hide();
        $('#EditView_tabs div.panel-content div.panel.tab-panel-' + tab).show()
    };

    var selectTabOnError = function(tab) {
        selectTab(tab);
        $('#EditView_tabs ul.nav.nav-tabs li').removeClass('active');
        $('#EditView_tabs ul.nav.nav-tabs li a').css('color', '');

        $('#EditView_tabs ul.nav.nav-tabs li').eq(tab).find('a').first().css('color', 'red');
        $('#EditView_tabs ul.nav.nav-tabs li').eq(tab).addClass('active');

    };

    var selectTabOnErrorInputHandle = function(inputHandle) {
        var tab = $(inputHandle).closest('.tab-pane-NOBOOTSTRAPTOGGLER').attr('id').match(/^tab-content-(.*)$/)[1];
        selectTabOnError(tab);
    };


    $(function(){
        $('#EditView_tabs ul.nav.nav-tabs li > a[data-toggle="tab"]').click(function(e){
            if(typeof $(this).parent().find('a').first().attr('id') != 'undefined') {
                var tab = parseInt($(this).parent().find('a').first().attr('id').match(/^tab(?<number>(.)*)$/)[1]);
                selectTab(tab);
            }
        });

        $('a[data-toggle="collapse-edit"]').click(function(e){
            if($(this).hasClass('collapsed')) {
              // Expand panel
                // Change style of .panel-header
                $(this).removeClass('collapsed');
                // Expand .panel-body
                $(this).parents('.panel').find('.panel-body').removeClass('in').addClass('in');
            } else {
              // Collapse panel
                // Change style of .panel-header
                $(this).addClass('collapsed');
                // Collapse .panel-body
                $(this).parents('.panel').find('.panel-body').removeClass('in').removeClass('in');
            }
        });
    });

    <?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
addForm('EditView');addToValidate('EditView', 'name', 'name', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Date Created' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Date Modified' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MODIFIED','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MODIFIED_NAME','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CREATED','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'created_by_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CREATED','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'description', 'text', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DESCRIPTION','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'deleted', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DELETED','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'assigned_user_id', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO_ID','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'assigned_user_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO_NAME','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'salutation', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SALUTATION','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'first_name', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_FIRST_NAME','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'last_name', 'varchar', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LAST_NAME','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'full_name', 'fullname', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'title', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TITLE','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'photo', 'image', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PHOTO','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'department', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DEPARTMENT','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'do_not_call', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DO_NOT_CALL','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'phone_home', 'phone', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_HOME_PHONE','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'email', 'email', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ANY_EMAIL','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'phone_mobile', 'phone', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MOBILE_PHONE','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'phone_work', 'phone', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_OFFICE_PHONE','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'phone_other', 'phone', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_OTHER_PHONE','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'phone_fax', 'phone', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_FAX_PHONE','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'email1', 'varchar', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL_ADDRESS','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'email2', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_OTHER_EMAIL_ADDRESS','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'invalid_email', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_INVALID_EMAIL','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'email_opt_out', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL_OPT_OUT','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'lawful_basis', 'multienum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LAWFUL_BASIS','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'date_reviewed', 'date', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DATE_REVIEWED','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'lawful_basis_source', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LAWFUL_BASIS_SOURCE','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'primary_address_street', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PRIMARY_ADDRESS_STREET','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'primary_address_street_2', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PRIMARY_ADDRESS_STREET_2','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'primary_address_street_3', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PRIMARY_ADDRESS_STREET_3','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'primary_address_city', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PRIMARY_ADDRESS_CITY','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'primary_address_state', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PRIMARY_ADDRESS_STATE','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'primary_address_postalcode', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PRIMARY_ADDRESS_POSTALCODE','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'primary_address_country', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PRIMARY_ADDRESS_COUNTRY','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'alt_address_street', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_ADDRESS_STREET','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'alt_address_street_2', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_ADDRESS_STREET_2','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'alt_address_street_3', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_ADDRESS_STREET_3','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'alt_address_city', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_ADDRESS_CITY','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'alt_address_state', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_ADDRESS_STATE','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'alt_address_postalcode', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_ADDRESS_POSTALCODE','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'alt_address_country', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_ADDRESS_COUNTRY','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'assistant', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSISTANT','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'assistant_phone', 'phone', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSISTANT_PHONE','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'email_addresses_non_primary', 'email', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL_NON_PRIMARY','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'converted', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CONVERTED','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'refered_by', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_REFERED_BY','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'lead_source', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LEAD_SOURCE','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'lead_source_description', 'text', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LEAD_SOURCE_DESCRIPTION','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'status', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_STATUS','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'status_description', 'text', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_STATUS_DESCRIPTION','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'reports_to_id', 'id', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_REPORTS_TO_ID','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'report_to_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_REPORTS_TO','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'account_name', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ACCOUNT_NAME','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'account_description', 'text', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ACCOUNT_DESCRIPTION','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'contact_id', 'id', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CONTACT_ID','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'account_id', 'id', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ACCOUNT_ID','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'opportunity_id', 'id', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_OPPORTUNITY_ID','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'opportunity_name', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_OPPORTUNITY_NAME','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'opportunity_amount', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_OPPORTUNITY_AMOUNT','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'campaign_id', 'id', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CAMPAIGN_ID','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'campaign_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CAMPAIGN','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'c_accept_status_fields', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LIST_ACCEPT_STATUS','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'm_accept_status_fields', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LIST_ACCEPT_STATUS','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'accept_status_id', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LIST_ACCEPT_STATUS','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'accept_status_name', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LIST_ACCEPT_STATUS','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'webtolead_email1', 'email', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL_ADDRESS','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'webtolead_email2', 'email', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_OTHER_EMAIL_ADDRESS','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'webtolead_email_opt_out', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL_OPT_OUT','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'webtolead_invalid_email', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_INVALID_EMAIL','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'birthdate', 'date', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BIRTHDATE','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'portal_name', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PORTAL_NAME','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'portal_app', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PORTAL_APP','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'website', 'url', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_WEBSITE','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'e_invite_status_fields', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CONT_INVITE_STATUS','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'event_status_name', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LIST_INVITE_STATUS_EVENT','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'event_invite_id', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LIST_INVITE_STATUS','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'e_accept_status_fields', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CONT_ACCEPT_STATUS','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'event_accept_status', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LIST_ACCEPT_STATUS_EVENT','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'event_status_id', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LIST_ACCEPT_STATUS','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'st1_team_leads_1_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ST1_TEAM_LEADS_1_FROM_ST1_TEAM_TITLE','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'additional_info_c', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ADDITIONAL_INFO','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'assigned_to_team_member_c', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO_TEAM_MEMBER','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'company_name_c', 'varchar', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_COMPANY_NAME','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'full_name_c', 'varchar', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_FULL_NAME','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'jjwg_maps_address_c', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_JJWG_MAPS_ADDRESS','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'jjwg_maps_geocode_status_c', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_JJWG_MAPS_GEOCODE_STATUS','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'jjwg_maps_lat_c', 'float', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_JJWG_MAPS_LAT','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'jjwg_maps_lng_c', 'float', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_JJWG_MAPS_LNG','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'phone_c', 'varchar', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PHONE','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'phone_number_c', 'varchar', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PHONE_NUMBER','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'st1_team_id_c', 'id', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO_TEAM_MEMBER_ST1_TEAM_ID','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'utm_campaign_c', 'varchar', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_UTM_CAMPAIGN','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'utm_content_c', 'varchar', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_UTM_CONTENT','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'utm_medium_c', 'varchar', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_UTM_MEDIUM','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'utm_score_c', 'varchar', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_UTM_SCORE','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'utm_term_c', 'varchar', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_UTM_TERM','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'vat_number_c', 'varchar', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_VAT_NUMBER','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'<?php echo smarty_function_sugar_translate(array('label'=>'ERR_SQS_NO_MATCH_FIELD','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
: <?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
', 'assigned_user_id' );
addToValidateBinaryDependency('EditView', 'st1_team_leads_1_name', 'alpha', false,'<?php echo smarty_function_sugar_translate(array('label'=>'ERR_SQS_NO_MATCH_FIELD','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
: <?php echo smarty_function_sugar_translate(array('label'=>'LBL_ST1_TEAM_LEADS_1_FROM_ST1_TEAM_TITLE','module'=>'Leads','for_js'=>true),$_smarty_tpl);?>
', 'st1_team_leads_1st1_team_ida' );
<?php echo '</script'; ?>
><?php echo '<script'; ?>
 language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_st1_team_leads_1_name']={"form":"EditView","method":"query","modules":["ST1_Team"],"group":"or","field_list":["name","id"],"populate_list":["st1_team_leads_1_name","st1_team_leads_1st1_team_ida"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};<?php echo '</script'; ?>
>
<?php }
}
