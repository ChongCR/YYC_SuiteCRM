<?php
// created: 2024-08-22 06:14:13
$dictionary["st1_team_leads_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'st1_team_leads_1' => 
    array (
      'lhs_module' => 'ST1_Team',
      'lhs_table' => 'st1_team',
      'lhs_key' => 'id',
      'rhs_module' => 'Leads',
      'rhs_table' => 'leads',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'st1_team_leads_1_c',
      'join_key_lhs' => 'st1_team_leads_1st1_team_ida',
      'join_key_rhs' => 'st1_team_leads_1leads_idb',
    ),
  ),
  'table' => 'st1_team_leads_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'st1_team_leads_1st1_team_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'st1_team_leads_1leads_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'st1_team_leads_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'st1_team_leads_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'st1_team_leads_1st1_team_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'st1_team_leads_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'st1_team_leads_1leads_idb',
      ),
    ),
  ),
);