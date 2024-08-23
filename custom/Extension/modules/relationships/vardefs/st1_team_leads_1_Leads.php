<?php
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
