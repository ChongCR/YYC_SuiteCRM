<?php
/* Smarty version 4.3.1, created on 2024-08-22 08:59:16
  from 'C:\laragon\www\SuiteCRM-7.14.5\include\SugarFields\Fields\Base\ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66c6fde4954990_93066729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26dce378416d9ba60d6e06fb7e5b2d6d39d53bde' => 
    array (
      0 => 'C:\\laragon\\www\\SuiteCRM-7.14.5\\include\\SugarFields\\Fields\\Base\\ListView.tpl',
      1 => 1723532450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c6fde4954990_93066729 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\SuiteCRM-7.14.5\\include\\Smarty\\plugins\\function.sugar_fetch.php','function'=>'smarty_function_sugar_fetch',),));
?>

<?php echo smarty_function_sugar_fetch(array('object'=>$_smarty_tpl->tpl_vars['parentFieldArray']->value,'key'=>$_smarty_tpl->tpl_vars['col']->value),$_smarty_tpl);?>

<?php }
}
