<?php
/* Smarty version 4.3.1, created on 2024-08-22 09:00:20
  from 'C:\laragon\www\SuiteCRM-7.14.5\modules\DynamicFields\templates\Fields\Forms\bool.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66c6fe24806097_47962799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0549567614596b1b7b9268a1400c85fcde8cb277' => 
    array (
      0 => 'C:\\laragon\\www\\SuiteCRM-7.14.5\\modules\\DynamicFields\\templates\\Fields\\Forms\\bool.tpl',
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
function content_66c6fe24806097_47962799 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\SuiteCRM-7.14.5\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),));
?>


<?php $_smarty_tpl->_subTemplateRender("file:modules/DynamicFields/templates/Fields/Forms/coreTop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<tr><td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_DEFAULT_VALUE"),$_smarty_tpl);?>
:</td><td><input type='checkbox' id='default' name='default' value=1 <?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['default'])) {?>checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['hideLevel']->value > 5) {?>disabled<?php }?> /><?php if ($_smarty_tpl->tpl_vars['hideLevel']->value > 5) {?><input type='hidden' name='default' value='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['default'];?>
'><?php }?></td></tr>
<?php $_smarty_tpl->_subTemplateRender("file:modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
