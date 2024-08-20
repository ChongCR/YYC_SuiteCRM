<?php
/* Smarty version 4.3.1, created on 2024-08-20 10:23:47
  from 'C:\laragon\www\SuiteCRM-7.14.5\cache\include\InlineEditing\CampaignsEditViewcompany_name_c.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66c46eb3627ac0_20881545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce0e859090c8adf197238f468eb0446393dee31b' => 
    array (
      0 => 'C:\\laragon\\www\\SuiteCRM-7.14.5\\cache\\include\\InlineEditing\\CampaignsEditViewcompany_name_c.tpl',
      1 => 1724149427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c46eb3627ac0_20881545 (Smarty_Internal_Template $_smarty_tpl) {
if (strlen($_smarty_tpl->tpl_vars['fields']->value['company_name_c']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['company_name_c']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['company_name_c']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['company_name_c']['name'];?>
'
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['company_name_c']['name'];?>
' size='30'
    maxlength='255'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''  tabindex='1'      >
<?php }
}
