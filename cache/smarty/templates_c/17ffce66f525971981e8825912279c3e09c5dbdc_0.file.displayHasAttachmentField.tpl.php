<?php
/* Smarty version 4.3.1, created on 2024-08-22 08:58:26
  from 'C:\laragon\www\SuiteCRM-7.14.5\modules\Emails\templates\displayHasAttachmentField.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66c6fdb2ecadf0_47907827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17ffce66f525971981e8825912279c3e09c5dbdc' => 
    array (
      0 => 'C:\\laragon\\www\\SuiteCRM-7.14.5\\modules\\Emails\\templates\\displayHasAttachmentField.tpl',
      1 => 1723532450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c6fdb2ecadf0_47907827 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\SuiteCRM-7.14.5\\include\\Smarty\\plugins\\function.sugar_getimagepath.php','function'=>'smarty_function_sugar_getimagepath',),));
?>

<div class="email-has-attachement">
    <?php if ($_smarty_tpl->tpl_vars['bean']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['bean']->value['has_attachment']) {?>
            <div class="email-has-attachment"><span class="glyphicon"><img src="<?php echo smarty_function_sugar_getimagepath(array('directory'=>'','file_name'=>'attachment-indicator','file_extension'=>"svg",'file'=>'attachment-indicator.svg'),$_smarty_tpl);?>
"/></span></div>
        <?php }?>

    <?php }?>
</div><?php }
}
