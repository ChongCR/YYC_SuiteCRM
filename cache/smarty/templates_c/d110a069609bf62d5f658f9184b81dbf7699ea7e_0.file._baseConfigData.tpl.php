<?php
/* Smarty version 4.3.1, created on 2024-08-20 09:53:42
  from 'C:\laragon\www\SuiteCRM-7.14.5\modules\Emails\templates\_baseConfigData.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66c467a65e8369_42707574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd110a069609bf62d5f658f9184b81dbf7699ea7e' => 
    array (
      0 => 'C:\\laragon\\www\\SuiteCRM-7.14.5\\modules\\Emails\\templates\\_baseConfigData.tpl',
      1 => 1723532450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c467a65e8369_42707574 (Smarty_Internal_Template $_smarty_tpl) {
?>
SUGAR.email2.composeLayout.charsets = <?php echo $_smarty_tpl->tpl_vars['emailCharsets']->value;?>
;
SUGAR.default_inbound_accnt_id = '<?php echo $_smarty_tpl->tpl_vars['defaultOutID']->value;?>
';
if(!SUGAR.email2.userPrefs) {
    var userPrefs = SUGAR.email2.userPrefs = <?php echo $_smarty_tpl->tpl_vars['userPrefs']->value;?>
;
}
SUGAR.email2.signatures = <?php echo $_smarty_tpl->tpl_vars['defaultSignature']->value;?>
;
<?php echo $_smarty_tpl->tpl_vars['tinyMCE']->value;?>

linkBeans = <?php echo $_smarty_tpl->tpl_vars['linkBeans']->value;?>
;
<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>

<?php }
}
