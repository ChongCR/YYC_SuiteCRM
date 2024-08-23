<?php
$listViewDefs ['Leads'] = 
array (
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'orderBy' => 'name',
    'default' => true,
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'salutation',
    ),
  ),
  'EMAIL1' => 
  array (
    'width' => '16%',
    'label' => 'LBL_LIST_EMAIL_ADDRESS',
    'sortable' => false,
    'customCode' => '{$EMAIL1_LINK}',
    'default' => true,
  ),
  'PHONE_NUMBER_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_PHONE_NUMBER',
    'width' => '10%',
  ),
  'COMPANY_NAME_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_COMPANY_NAME',
    'width' => '10%',
  ),
  'UTM_CAMPAIGN_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_UTM_CAMPAIGN',
    'width' => '10%',
  ),
  'UTM_CONTENT_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_UTM_CONTENT',
    'width' => '10%',
  ),
  'UTM_MEDIUM_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_UTM_MEDIUM',
    'width' => '10%',
  ),
  'UTM_SCORE_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_UTM_SCORE',
    'width' => '10%',
  ),
  'UTM_TERM_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_UTM_TERM',
    'width' => '10%',
  ),
  'VAT_NUMBER_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_VAT_NUMBER',
    'width' => '10%',
  ),
);
;
?>
