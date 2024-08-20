<?php
/* Smarty version 4.3.1, created on 2024-08-20 09:53:42
  from 'C:\laragon\www\SuiteCRM-7.14.5\modules\Emails\templates\addressSearch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66c467a6df39c9_41392322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec40af7210791196bc5fc96d95a8afe1f781e66a' => 
    array (
      0 => 'C:\\laragon\\www\\SuiteCRM-7.14.5\\modules\\Emails\\templates\\addressSearch.tpl',
      1 => 1723532450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c467a6df39c9_41392322 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\SuiteCRM-7.14.5\\include\\Smarty\\plugins\\function.sugar_getimage.php','function'=>'smarty_function_sugar_getimage',),1=>array('file'=>'C:\\laragon\\www\\SuiteCRM-7.14.5\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),));
?>
<form id="searchForm" method="get" action="#">
    <table id="searchTable" border="0" cellpadding="0" cellspacing="0" width="670">
		<tr id="peopleTableSearchRow">
			<td scope="row" nowrap="NOWRAP">
			     <div id="rollover">
			     <?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_SEARCH_FOR'];?>
:
			         <a href="#" class="rollover"><img border="0" alt=$mod_strings.LBL_HELP src="index.php?entryPoint=getImage&amp;imageName=helpInline.png">
	                        <div><span class="rollover"><?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_ADDRESS_BOOK_SEARCH_HELP'];?>
</span></div>
	                 </a>

		      	<input id="input_searchField" name="input_searchField" type="text" value="">
		      	</div>
			    &nbsp;&nbsp; <?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_LIST_RELATED_TO'];?>
: &nbsp;
			    <select name="person" id="input_searchPerson">
			         <?php echo $_smarty_tpl->tpl_vars['listOfPersons']->value;?>

			    </select>
			    &nbsp;
			    <a href="javascript:void(0);">
                    <?php echo smarty_function_sugar_getimage(array('name'=>"id-ff-select",'ext'=>".gif",'alt'=>$_smarty_tpl->tpl_vars['mod_strings']->value['LBL_EMAIL_SELECTOR_SELECT'],'other_attributes'=>'align="absmiddle" border="0" onclick="SUGAR.email2.addressBook.searchContacts();" '),$_smarty_tpl);?>

                </a>
                <a href="javascript:void(0);">
                    <?php echo smarty_function_sugar_getimage(array('name'=>"id-ff-clear",'ext'=>".gif",'alt'=>$_smarty_tpl->tpl_vars['mod_strings']->value['LBL_EMAIL_SELECTOR_CLEAR'],'other_attributes'=>'align="absmiddle" border="0" onclick="SUGAR.email2.addressBook.clearAddressBookSearch();" '),$_smarty_tpl);?>

                </a>
			</td>
        </tr>
        <tr id="peopleTableSearchRow">
            <td scope="row" nowrap="NOWRAP" colspan="2" id="relatedBeanColumn">
		      <?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_FILTER_BY_RELATED_BEAN'];?>
<span id="relatedBeanInfo"></span>
		   	  <input name="hasRelatedBean" id="hasRelatedBean" type="checkbox"/>
            </td>

        </tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr id="peopleTableSearchRow">
            <td id="searchSubmit" scope="row" nowrap="NOWRAP">
                <button onclick="SUGAR.email2.addressBook.insertContactToResultTable(null,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL_ADDRESS_BOOK_ADD_TO'),$_smarty_tpl);?>
')">
                    <?php echo smarty_function_sugar_translate(array('label'=>"LBL_ADD_TO_ADDR",'module'=>"Emails"),$_smarty_tpl);?>
 <b><?php echo smarty_function_sugar_translate(array('label'=>"LBL_EMAIL_ADDRESS_BOOK_ADD_TO"),$_smarty_tpl);?>
</b>
                </button>
                <button onclick="SUGAR.email2.addressBook.insertContactToResultTable(null,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL_ADDRESS_BOOK_ADD_CC'),$_smarty_tpl);?>
')">
                    <?php echo smarty_function_sugar_translate(array('label'=>"LBL_ADD_TO_ADDR",'module'=>"Emails"),$_smarty_tpl);?>
 <b><?php echo smarty_function_sugar_translate(array('label'=>"LBL_EMAIL_ADDRESS_BOOK_ADD_CC"),$_smarty_tpl);?>
</b>
                </button>
                <button onclick="SUGAR.email2.addressBook.insertContactToResultTable(null,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC'),$_smarty_tpl);?>
')">
                    <?php echo smarty_function_sugar_translate(array('label'=>"LBL_ADD_TO_ADDR",'module'=>"Emails"),$_smarty_tpl);?>
 <b><?php echo smarty_function_sugar_translate(array('label'=>"LBL_EMAIL_ADDRESS_BOOK_ADD_BCC"),$_smarty_tpl);?>
</b>
                </button>
            </td>
        </tr>

    </table>
</form><?php }
}
