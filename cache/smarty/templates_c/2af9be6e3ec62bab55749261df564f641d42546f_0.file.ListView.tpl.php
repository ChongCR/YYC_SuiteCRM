<?php
/* Smarty version 4.3.1, created on 2024-08-20 10:13:54
  from 'C:\laragon\www\SuiteCRM-7.14.5\include\SugarFields\Fields\Phone\ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66c46c628d0906_12230488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2af9be6e3ec62bab55749261df564f641d42546f' => 
    array (
      0 => 'C:\\laragon\\www\\SuiteCRM-7.14.5\\include\\SugarFields\\Fields\\Phone\\ListView.tpl',
      1 => 1723532450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c46c628d0906_12230488 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\SuiteCRM-7.14.5\\include\\Smarty\\plugins\\function.sugar_fetch.php','function'=>'smarty_function_sugar_fetch',),1=>array('file'=>'C:\\laragon\\www\\SuiteCRM-7.14.5\\include\\Smarty\\plugins\\function.sugar_phone.php','function'=>'smarty_function_sugar_phone',),));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'getPhone', 'phone', null);
echo smarty_function_sugar_fetch(array('object'=>$_smarty_tpl->tpl_vars['parentFieldArray']->value,'key'=>$_smarty_tpl->tpl_vars['col']->value),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php echo smarty_function_sugar_phone(array('value'=>$_smarty_tpl->tpl_vars['phone']->value,'usa_format'=>$_smarty_tpl->tpl_vars['usa_format']->value),$_smarty_tpl);
}
}
