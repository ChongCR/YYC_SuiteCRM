<?php
/* Smarty version 4.3.1, created on 2024-08-20 09:39:20
  from 'C:\laragon\www\SuiteCRM-7.14.5\modules\DynamicFields\templates\Fields\Forms\url.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66c46448f18669_39296748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a9768d5f46014fc2caf839222a803a4f5aa2ecd' => 
    array (
      0 => 'C:\\laragon\\www\\SuiteCRM-7.14.5\\modules\\DynamicFields\\templates\\Fields\\Forms\\url.tpl',
      1 => 1723532450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/DynamicFields/templates/Fields/Forms/coreTop.tpl' => 1,
    'file:modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl' => 1,
  ),
),false)) {
function content_66c46448f18669_39296748 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\SuiteCRM-7.14.5\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),1=>array('file'=>'C:\\laragon\\www\\SuiteCRM-7.14.5\\include\\Smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
$_smarty_tpl->_subTemplateRender("file:modules/DynamicFields/templates/Fields/Forms/coreTop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<input type=hidden id='ext3' name='ext3' value='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['gen'];?>
'>
<tr>
	<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"LBL_GENERATE_URL"),$_smarty_tpl);?>
:</td>
	<td>
	<?php if ($_smarty_tpl->tpl_vars['hideLevel']->value < 5) {?>
		<input type='checkbox' id='gencheck' <?php if ($_smarty_tpl->tpl_vars['vardef']->value['gen']) {?>checked=true<?php }?> name='genCheck' value="0" onclick="
			if(this.checked) {
				 YAHOO.util.Dom.setStyle('fieldListHelper', 'display', '');
                 YAHOO.util.Dom.get('ext3').value = 1;
			} else {
				YAHOO.util.Dom.setStyle('fieldListHelper', 'display', 'none');
                YAHOO.util.Dom.get('ext3').value = 0;
			}">
	<?php } else { ?>
		<input type='checkbox' name='ext3' <?php if ($_smarty_tpl->tpl_vars['vardef']->value['gen']) {?>checked=true<?php }?> disabled>
	<?php }?>
	</td>
</tr>
<tr id='fieldListHelper' <?php if (!$_smarty_tpl->tpl_vars['vardef']->value['gen']) {?>style="display:none"<?php }?>>
	<td></td>
	<td><?php echo smarty_function_html_options(array('name'=>"flo",'id'=>"fieldListOptions",'options'=>$_smarty_tpl->tpl_vars['fieldOpts']->value),$_smarty_tpl);?>

		<input type='button' class='button' value="<?php echo smarty_function_sugar_translate(array('module'=>'DynamicFields','label'=>'LBL_INSERT_FIELD'),$_smarty_tpl);?>
" onclick="
			YAHOO.util.Dom.get('default').value += '{' + YAHOO.util.Dom.get('fieldListOptions').value + '}'
		"></td> 
</tr>
<tr>
	<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_DEFAULT_VALUE"),$_smarty_tpl);?>
:</td>
	<td>
	<?php if ($_smarty_tpl->tpl_vars['hideLevel']->value < 5) {?>
		<input type='text' name='default' id='default' value='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['default'];?>
' maxlength='<?php echo (($tmp = $_smarty_tpl->tpl_vars['vardef']->value['len'] ?? null)===null||$tmp==='' ? 50 ?? null : $tmp);?>
'>
	<?php } else { ?>
		<input type='hidden' id='default' name='default' value='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['default'];?>
'><?php echo $_smarty_tpl->tpl_vars['vardef']->value['default'];?>

	<?php }?>
	</td>
</tr>
<tr>
	<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_MAX_SIZE"),$_smarty_tpl);?>
:</td>
	<td>
	<?php if ($_smarty_tpl->tpl_vars['hideLevel']->value < 5) {?>
		<input type='text' name='len' value='<?php echo (($tmp = $_smarty_tpl->tpl_vars['vardef']->value['len'] ?? null)===null||$tmp==='' ? 255 ?? null : $tmp);?>
' onchange="forceRange(this,1,255);changeMaxLength(document.getElementById('default'),this.value);">
		
		<?php echo '<script'; ?>
>
		function forceRange(field, min, max){
			field.value = parseInt(field.value);
			if(field.value == 'NaN')field.value = max;
			if(field.value > max) field.value = max;
			if(field.value < min) field.value = min;
		}
		function changeMaxLength(field, length){
			field.maxLength = parseInt(length);
			field.value = field.value.substr(0, field.maxLength);
		}
		<?php echo '</script'; ?>
>
		
	<?php } else { ?>
		<input type='hidden' name='len' value='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['len'];?>
'><?php echo $_smarty_tpl->tpl_vars['vardef']->value['len'];?>

	<?php }?>
	</td>
</tr>
<tr>
	<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"LBL_LINK_TARGET"),$_smarty_tpl);?>
:</td>
	<td>
	<?php if ($_smarty_tpl->tpl_vars['hideLevel']->value < 5) {?>
		<select name='ext4' id='ext4'>
            <?php echo $_smarty_tpl->tpl_vars['TARGET_OPTIONS']->value;?>

        </select>
	<?php } else { ?>
		<select name='extdis' id='extdis' disabled>
            <option value='<?php echo $_smarty_tpl->tpl_vars['LINK_TARGET']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['LINK_TARGET_LABEL']->value;?>
</option>
        </select>
        <input type='hidden' name='ext4' value='<?php echo $_smarty_tpl->tpl_vars['LINK_TARGET']->value;?>
'>
	<?php }?>
	</td>
</tr>

<?php $_smarty_tpl->_subTemplateRender("file:modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
