<?php
$viewdefs ['Campaigns'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'javascript' => '<script type="text/javascript" src="include/javascript/popup_parent_helper.js?v=igGzALk_bn-xeyTYyoHxog"></script>
<script type="text/javascript">
function type_change() {ldelim}
	type = document.getElementsByName(\'campaign_type\');
	if(type[0].value==\'NewsLetter\') {ldelim}
		document.getElementById(\'freq_label\').style.display = \'\';
		document.getElementById(\'freq_field\').style.display = \'\';
	 {rdelim} else {ldelim}
		document.getElementById(\'freq_label\').style.display = \'none\';
		document.getElementById(\'freq_field\').style.display = \'none\';
	 {rdelim}
 {rdelim}
type_change();

function ConvertItems(id)  {ldelim}
	var items = new Array();

	//get the items that are to be converted
	expected_revenue = document.getElementById(\'expected_revenue\');
	budget = document.getElementById(\'budget\');
	actual_cost = document.getElementById(\'actual_cost\');
	expected_cost = document.getElementById(\'expected_cost\');

	//unformat the values of the items to be converted
	expected_revenue.value = unformatNumber(expected_revenue.value, num_grp_sep, dec_sep);
	expected_cost.value = unformatNumber(expected_cost.value, num_grp_sep, dec_sep);
	budget.value = unformatNumber(budget.value, num_grp_sep, dec_sep);
	actual_cost.value = unformatNumber(actual_cost.value, num_grp_sep, dec_sep);

	//add the items to an array
	items[items.length] = expected_revenue;
	items[items.length] = budget;
	items[items.length] = expected_cost;
	items[items.length] = actual_cost;

	//call function that will convert currency
	ConvertRate(id, items);

	//Add formatting back to items
	expected_revenue.value = formatNumber(expected_revenue.value, num_grp_sep, dec_sep);
	expected_cost.value = formatNumber(expected_cost.value, num_grp_sep, dec_sep);
	budget.value = formatNumber(budget.value, num_grp_sep, dec_sep);
	actual_cost.value = formatNumber(actual_cost.value, num_grp_sep, dec_sep);
 {rdelim}
</script>',
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_CAMPAIGN_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_campaign_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
;
?>
