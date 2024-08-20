<?php
/* Smarty version 4.3.1, created on 2024-08-20 10:17:06
  from 'C:\laragon\www\SuiteCRM-7.14.5\modules\Leads\tpls\ShowDuplicates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66c46d229b72e2_52132727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23df9eac0cabb10259b16a791fdd51f837fa31ff' => 
    array (
      0 => 'C:\\laragon\\www\\SuiteCRM-7.14.5\\modules\\Leads\\tpls\\ShowDuplicates.tpl',
      1 => 1723532450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c46d229b72e2_52132727 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['TITLE']->value;?>

<p>
<form action='index.php' method='post' name='Save'>
<input type="hidden" name="module" value="Leads">
<input type="hidden" name="return_module" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_MODULE']->value;?>
">
<input type="hidden" name="return_action" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_ACTION']->value;?>
">
<input type="hidden" name="return_id" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_ID']->value;?>
">
<input type="hidden" name="inbound_email_id" value="<?php echo $_smarty_tpl->tpl_vars['INBOUND_EMAIL_ID']->value;?>
">
<input type="hidden" name="start" value="<?php echo $_smarty_tpl->tpl_vars['START']->value;?>
">
<input type="hidden" name="dup_checked" value="true">
<input type="hidden" name="action" value="">
<?php echo $_smarty_tpl->tpl_vars['INPUT_FIELDS']->value;?>

<table cellpadding="0" cellspacing="0" width="100%" border="0" >
<tr>
<td>
<table cellpadding="0" cellspacing="0" width="100%" border="0" >
<tr>
<td  valign='top' align='left'><?php echo $_smarty_tpl->tpl_vars['FORMBODY']->value;
echo $_smarty_tpl->tpl_vars['FORMFOOTER']->value;
echo $_smarty_tpl->tpl_vars['POSTFORM']->value;?>
</td>
</tr>
</table>
</td>
</tr>
</table>
<p>
<?php }
}
