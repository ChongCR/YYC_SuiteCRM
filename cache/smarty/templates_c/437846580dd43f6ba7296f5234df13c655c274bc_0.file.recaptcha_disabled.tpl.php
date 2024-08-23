<?php
/* Smarty version 4.3.1, created on 2024-08-23 02:13:22
  from 'C:\laragon\www\SuiteCRM-7.14.5\include\utils\recaptcha_disabled.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66c7f0425c3667_94182339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '437846580dd43f6ba7296f5234df13c655c274bc' => 
    array (
      0 => 'C:\\laragon\\www\\SuiteCRM-7.14.5\\include\\utils\\recaptcha_disabled.tpl',
      1 => 1723532450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c7f0425c3667_94182339 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

  /**
   * Login Screen Validation
   */
  function validateAndSubmit() {
      generatepwd();
    }

  /**
   * Password reset screen validation
   */
  function validateCaptchaAndSubmit() {
      document.getElementById('username_password').value = document.getElementById('new_password').value;
      document.getElementById('ChangePasswordForm').submit();
    }
<?php echo '</script'; ?>
>
<?php }
}
