<?php
/* Smarty version 4.3.1, created on 2024-08-22 08:59:58
  from 'C:\laragon\www\SuiteCRM-7.14.5\modules\ModuleBuilder\tpls\assistantJavascript.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66c6fe0e15a0a7_55767729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e8d3a9c8b04c16a69361be397fdbbab84ba4441' => 
    array (
      0 => 'C:\\laragon\\www\\SuiteCRM-7.14.5\\modules\\ModuleBuilder\\tpls\\assistantJavascript.tpl',
      1 => 1723532450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c6fe0e15a0a7_55767729 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

if(typeof(Assistant)!="undefined" && Assistant.mbAssistant){
	//Assistant.mbAssistant.render(document.body);

<?php if ($_smarty_tpl->tpl_vars['userPref']->value) {?>
	Assistant.processUserPref("<?php echo $_smarty_tpl->tpl_vars['userPref']->value;?>
");
<?php }
if ($_smarty_tpl->tpl_vars['assistant']->value['key'] && $_smarty_tpl->tpl_vars['assistant']->value['group']) {?>
	Assistant.mbAssistant.setBody(SUGAR.language.get('ModuleBuilder','assistantHelp').<?php echo $_smarty_tpl->tpl_vars['assistant']->value['group'];?>
.<?php echo $_smarty_tpl->tpl_vars['assistant']->value['key'];?>
);
<?php }?>

	if(Assistant.mbAssistant.visible){
		Assistant.mbAssistant.show();
		}
}

<?php echo '</script'; ?>
><?php }
}
