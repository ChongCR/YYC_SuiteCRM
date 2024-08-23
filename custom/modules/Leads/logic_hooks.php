<?php
$hook_version = 1;
$hook_array = Array();

$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(1, 'Leads push feed', 'modules/Leads/SugarFeeds/LeadFeed.php','LeadFeed', 'pushFeed');
$hook_array['before_save'][] = Array(77, 'updateGeocodeInfo', 'modules/Leads/LeadsJjwg_MapsLogicHook.php','LeadsJjwg_MapsLogicHook', 'updateGeocodeInfo');
$hook_array['before_save'][] = Array(100, 'Set first_name from full_name_c', 'custom/modules/Leads/LeadCreationHook.php', 'LeadCreationHook', 'setFirstNameFromFullName');
$hook_array['before_save'][] = Array(101, 'Create related records', 'custom/modules/Leads/LeadCreationHook.php', 'LeadCreationHook', 'createRelatedRecords');

$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(77, 'updateRelatedMeetingsGeocodeInfo', 'modules/Leads/LeadsJjwg_MapsLogicHook.php','LeadsJjwg_MapsLogicHook', 'updateRelatedMeetingsGeocodeInfo');
$hook_array['after_save'][] = Array(1, 'Create related records in Campaign, Contact, and Account modules', 'custom/modules/Leads/LeadCreationHook.php', 'LeadCreationHook', 'createRelatedRecords');
?>