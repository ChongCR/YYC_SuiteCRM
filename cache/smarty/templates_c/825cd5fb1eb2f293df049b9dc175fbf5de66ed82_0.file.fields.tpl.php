<?php
/* Smarty version 4.3.1, created on 2024-08-22 09:00:06
  from 'C:\laragon\www\SuiteCRM-7.14.5\modules\ModuleBuilder\tpls\MBModule\fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66c6fe16554497_28664151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '825cd5fb1eb2f293df049b9dc175fbf5de66ed82' => 
    array (
      0 => 'C:\\laragon\\www\\SuiteCRM-7.14.5\\modules\\ModuleBuilder\\tpls\\MBModule\\fields.tpl',
      1 => 1723532450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c6fe16554497_28664151 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\SuiteCRM-7.14.5\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),));
?>


<div id='studiofields'>
<input type='button' name='addfieldbtn' value='<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_BTN_ADDFIELD'];?>
' class='button' onclick='ModuleBuilder.moduleLoadField("");'>&nbsp;
<?php if ($_smarty_tpl->tpl_vars['editLabelsMb']->value == '1') {?>
<input type='button' name='addfieldbtn' value='<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_BTN_EDLABELS'];?>
' class='button' onclick='ModuleBuilder.moduleLoadLabels("mb");'>
<?php } else { ?>
<input type='button' name='addfieldbtn' value='<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_BTN_EDLABELS'];?>
' class='button' onclick='ModuleBuilder.moduleLoadLabels("studio");'>
<?php }?>
</div>

<br>

<div id="field_table"></div>
<?php if ($_smarty_tpl->tpl_vars['studio']->value) {
echo smarty_function_sugar_translate(array('label'=>'LBL_CUSTOM_FIELDS','module'=>'ModuleBuilder'),$_smarty_tpl);?>
</h3><?php }?>

<?php echo '<script'; ?>
 type="text/javascript">

var customFieldsData = <?php echo $_smarty_tpl->tpl_vars['customFieldsData']->value;?>
;


//create sortName function to apply custom sorting for the name column which contains HTML
var sortName = function(a, b, desc)
{
    var comp = YAHOO.util.Sort.compare;
    var aString = a.getData('name').replace(/<[^>]*>/g, "");
    var bString = b.getData('name').replace(/<[^>]*>/g, "");
    return comp(aString, bString, desc);
};

var editFieldFormatter = function(elCell, oRecord, oColumn, oData)
{
  var label = customFieldsData[oData] ? '* ' + oData : oData;
  elCell.innerHTML = "<a class='mbLBLL' href='javascript:void(0)' id='" + oData + "' onclick='ModuleBuilder.moduleLoadField(\"" + oData + "\");'>" + label + "</a>";
};

var labelFormatter = function(elCell, oRecord, oColumn, oData)
{
    if (oData)
        elCell.innerHTML = oData.replace(/\:\s*?$/, '');
};

var myColumnDefs = [
    {key:"name", label:SUGAR.language.get("ModuleBuilder", "LBL_NAME"),sortable:true, resizeable:true, formatter:"editFieldFormatter", width:150, sortOptions:{sortFunction:sortName, defaultDir:YAHOO.widget.DataTable.CLASS_ASC}},
    {key:"label", label:SUGAR.language.get("ModuleBuilder", "LBL_DROPDOWN_ITEM_LABEL"),sortable:true, resizeable:true, formatter:"labelFormatter", width:200},
    {key:"type", label:SUGAR.language.get("ModuleBuilder", "LBL_DATA_TYPE"),sortable:true,resizeable:true, width:125}
];


var myDataSource = new YAHOO.util.DataSource(<?php echo $_smarty_tpl->tpl_vars['fieldsData']->value;?>
);
myDataSource.responseType = YAHOO.util.DataSource.TYPE_JSARRAY;

myDataSource.responseSchema = {fields: ["label","name","type"]};
YAHOO.widget.DataTable.Formatter.editFieldFormatter = editFieldFormatter;
YAHOO.widget.DataTable.Formatter.labelFormatter = labelFormatter;

var fieldsTable = new YAHOO.widget.ScrollingDataTable("field_table", myColumnDefs, myDataSource);

fieldsTable.doBeforeSortColumn = function(column, sortDirection)
{
    var url = 'index.php?module=ModuleBuilder&action=savetablesort&column=' + column.getKey() + '&direction=' + sortDirection;
    
    $.post(
        url
    );
    
    return true;
};


fieldsTable.subscribe("rowMouseoverEvent", fieldsTable.onEventHighlightRow);
fieldsTable.subscribe("rowMouseoutEvent", fieldsTable.onEventUnhighlightRow);
fieldsTable.subscribe("rowClickEvent", function(args) {
    var field = this.getRecord(args.target).getData();
    ModuleBuilder.moduleLoadField(field.name);
});

fieldsTable.render("#field_table");


<?php if (!empty($_smarty_tpl->tpl_vars['sortPreferences']->value)) {?>
pref = <?php echo $_smarty_tpl->tpl_vars['sortPreferences']->value;?>
;
sortDirection = (pref.direction == 'ASC') ? YAHOO.widget.DataTable.CLASS_ASC : YAHOO.widget.DataTable.CLASS_DESC;
fieldsTable.sortColumn(fieldsTable.getColumn(pref.key), sortDirection);
<?php }?>

ModuleBuilder.module = '<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
';
ModuleBuilder.MBpackage = '<?php echo $_smarty_tpl->tpl_vars['package']->value->name;?>
';
ModuleBuilder.helpRegisterByID('studiofields', 'input');
<?php if ($_smarty_tpl->tpl_vars['package']->value->name != 'studio') {?>
ModuleBuilder.helpSetup('fieldsEditor','mbDefault');
<?php } else { ?>
ModuleBuilder.helpSetup('fieldsEditor','default');
<?php }
echo '</script'; ?>
>

<style>

a.mbLBLL {
	text-decoration:none;
	font-weight:normal;
	color:black;
}

#field_table {
    text-align:left;
}

</style><?php }
}
