<?php
/* Smarty version 4.3.1, created on 2024-08-20 09:53:42
  from 'C:\laragon\www\SuiteCRM-7.14.5\modules\Emails\templates\emailSettings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66c467a69090c3_02969244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45a76af171a9d545a7235376e896fc544e1f0347' => 
    array (
      0 => 'C:\\laragon\\www\\SuiteCRM-7.14.5\\modules\\Emails\\templates\\emailSettings.tpl',
      1 => 1723532450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/Emails/templates/emailSettingsGeneral.tpl' => 1,
    'file:modules/Emails/templates/emailSettingsAccounts.tpl' => 1,
  ),
),false)) {
function content_66c467a69090c3_02969244 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="ydlg-bd">
    <div id="tab_general" class="tab-content">
        <?php $_smarty_tpl->_subTemplateRender("file:modules/Emails/templates/emailSettingsGeneral.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <div id="tab_accounts" class="tab-content">
        <?php $_smarty_tpl->_subTemplateRender("file:modules/Emails/templates/emailSettingsAccounts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>


</div><?php }
}
