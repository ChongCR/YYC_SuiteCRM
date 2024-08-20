<?php
/* Smarty version 4.3.1, created on 2024-08-20 10:17:06
  from 'C:\laragon\www\SuiteCRM-7.14.5\include\SugarEmailAddress\templates\forDuplicatesView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66c46d227402d9_01248424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72928b1d97ad91669ac466902171b266bc30b136' => 
    array (
      0 => 'C:\\laragon\\www\\SuiteCRM-7.14.5\\include\\SugarEmailAddress\\templates\\forDuplicatesView.tpl',
      1 => 1723532450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c46d227402d9_01248424 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\SuiteCRM-7.14.5\\include\\Smarty\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
?>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['moduleDir']->value;?>
_email_widget_id" value="<?php echo $_smarty_tpl->tpl_vars['email_widget_id']->value;?>
">
<input type="hidden" name="emailAddressWidget" value="<?php echo $_smarty_tpl->tpl_vars['emailAddressWidget']->value;?>
">
<?php echo smarty_function_counter(array('assign'=>"count",'start'=>-1,'print'=>false),$_smarty_tpl);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['emails']->value, 'email');
$_smarty_tpl->tpl_vars['email']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['email']->value) {
$_smarty_tpl->tpl_vars['email']->do_else = false;
?>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['moduleDir']->value;
echo $_smarty_tpl->tpl_vars['email_widget_id']->value;?>
emailAddress<?php echo smarty_function_counter(array('print'=>true),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo smarty_function_counter(array('assign'=>"count",'start'=>-1,'print'=>false),$_smarty_tpl);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['verified']->value, 'email');
$_smarty_tpl->tpl_vars['email']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['email']->value) {
$_smarty_tpl->tpl_vars['email']->do_else = false;
?>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['moduleDir']->value;
echo $_smarty_tpl->tpl_vars['email_widget_id']->value;?>
emailAddressVerifiedValue<?php echo smarty_function_counter(array('print'=>true),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ((isset($_smarty_tpl->tpl_vars['primary']->value))) {?>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['moduleDir']->value;
echo $_smarty_tpl->tpl_vars['email_widget_id']->value;?>
emailAddressPrimaryFlag" value="<?php echo $_smarty_tpl->tpl_vars['primary']->value;?>
">
<?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['optOut']->value, 'email');
$_smarty_tpl->tpl_vars['email']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['email']->value) {
$_smarty_tpl->tpl_vars['email']->do_else = false;
?>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['moduleDir']->value;
echo $_smarty_tpl->tpl_vars['email_widget_id']->value;?>
emailAddressOptOutFlag[]" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invalid']->value, 'email');
$_smarty_tpl->tpl_vars['email']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['email']->value) {
$_smarty_tpl->tpl_vars['email']->do_else = false;
?>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['moduleDir']->value;
echo $_smarty_tpl->tpl_vars['email_widget_id']->value;?>
emailAddressInvalidFlag[]" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['replyTo']->value, 'email');
$_smarty_tpl->tpl_vars['email']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['email']->value) {
$_smarty_tpl->tpl_vars['email']->do_else = false;
?>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['moduleDir']->value;
echo $_smarty_tpl->tpl_vars['email_widget_id']->value;?>
emailAddressReplyToFlag[]" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['delete']->value, 'email');
$_smarty_tpl->tpl_vars['email']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['email']->value) {
$_smarty_tpl->tpl_vars['email']->do_else = false;
?>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['moduleDir']->value;
echo $_smarty_tpl->tpl_vars['email_widget_id']->value;?>
emailAddressDeleteFlag[]" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<input type="hidden" name="useEmailWidget" value="true">
<?php }
}
