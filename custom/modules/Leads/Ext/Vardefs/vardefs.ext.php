<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2024-08-22 06:14:13
$dictionary["Lead"]["fields"]["st1_team_leads_1"] = array (
  'name' => 'st1_team_leads_1',
  'type' => 'link',
  'relationship' => 'st1_team_leads_1',
  'source' => 'non-db',
  'module' => 'ST1_Team',
  'bean_name' => 'ST1_Team',
  'vname' => 'LBL_ST1_TEAM_LEADS_1_FROM_ST1_TEAM_TITLE',
  'id_name' => 'st1_team_leads_1st1_team_ida',
);
$dictionary["Lead"]["fields"]["st1_team_leads_1_name"] = array (
  'name' => 'st1_team_leads_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ST1_TEAM_LEADS_1_FROM_ST1_TEAM_TITLE',
  'save' => true,
  'id_name' => 'st1_team_leads_1st1_team_ida',
  'link' => 'st1_team_leads_1',
  'table' => 'st1_team',
  'module' => 'ST1_Team',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Lead"]["fields"]["st1_team_leads_1st1_team_ida"] = array (
  'name' => 'st1_team_leads_1st1_team_ida',
  'type' => 'link',
  'relationship' => 'st1_team_leads_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ST1_TEAM_LEADS_1_FROM_LEADS_TITLE',
);


 // created: 2024-08-20 09:43:54
$dictionary['Lead']['fields']['additional_info_c']['inline_edit']='1';
$dictionary['Lead']['fields']['additional_info_c']['labelValue']='Additional Info';

 

 // created: 2024-08-22 04:20:01
$dictionary['Lead']['fields']['assigned_to_team_member_c']['inline_edit']='1';
$dictionary['Lead']['fields']['assigned_to_team_member_c']['labelValue']='Assigned to team member:';

 

 // created: 2024-08-20 09:40:48
$dictionary['Lead']['fields']['company_name_c']['inline_edit']='1';
$dictionary['Lead']['fields']['company_name_c']['labelValue']='Company Name';

 

 // created: 2024-08-22 02:53:11
$dictionary['Lead']['fields']['email1']['required']=true;
$dictionary['Lead']['fields']['email1']['inline_edit']='';
$dictionary['Lead']['fields']['email1']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['email1']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['email1']['merge_filter']='disabled';

 

 // created: 2024-08-20 09:12:08
$dictionary['Lead']['fields']['full_name_c']['inline_edit']='1';
$dictionary['Lead']['fields']['full_name_c']['labelValue']='Full Name';

 

 // created: 2024-08-19 08:18:48
$dictionary['Lead']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2024-08-19 08:18:48
$dictionary['Lead']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2024-08-19 08:18:48
$dictionary['Lead']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2024-08-19 08:18:48
$dictionary['Lead']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

 // created: 2024-08-20 09:39:54
$dictionary['Lead']['fields']['phone_c']['inline_edit']='1';
$dictionary['Lead']['fields']['phone_c']['labelValue']='Phone';

 

 // created: 2024-08-20 09:40:22
$dictionary['Lead']['fields']['phone_number_c']['inline_edit']='1';
$dictionary['Lead']['fields']['phone_number_c']['labelValue']='Phone Number';

 

 // created: 2024-08-22 04:18:31
$dictionary['Lead']['fields']['st1_team_id_c']['inline_edit']=1;

 

 // created: 2024-08-20 09:42:23
$dictionary['Lead']['fields']['utc_campaign_c']['inline_edit']='1';
$dictionary['Lead']['fields']['utc_campaign_c']['labelValue']='UTM Campaign';

 

 // created: 2024-08-22 02:51:50
$dictionary['Lead']['fields']['utm_campaign_c']['inline_edit']='';
$dictionary['Lead']['fields']['utm_campaign_c']['labelValue']='UTM Campaign';

 

 // created: 2024-08-22 02:51:41
$dictionary['Lead']['fields']['utm_content_c']['inline_edit']='';
$dictionary['Lead']['fields']['utm_content_c']['labelValue']='UTM Content';

 

 // created: 2024-08-22 02:51:31
$dictionary['Lead']['fields']['utm_medium_c']['inline_edit']='';
$dictionary['Lead']['fields']['utm_medium_c']['labelValue']='UTM Medium';

 

 // created: 2024-08-22 02:51:22
$dictionary['Lead']['fields']['utm_score_c']['inline_edit']='';
$dictionary['Lead']['fields']['utm_score_c']['labelValue']='UTM Score';

 

 // created: 2024-08-22 02:51:12
$dictionary['Lead']['fields']['utm_term_c']['inline_edit']='';
$dictionary['Lead']['fields']['utm_term_c']['labelValue']='UTM Term';

 

 // created: 2024-08-22 02:51:03
$dictionary['Lead']['fields']['vat_number_c']['inline_edit']='';
$dictionary['Lead']['fields']['vat_number_c']['labelValue']='VAT Number';

 
?>