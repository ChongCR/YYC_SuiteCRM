<?php


$viewdefs ['Leads'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          'SEND_CONFIRM_OPT_IN_EMAIL' => 
          array (
            'customCode' => '<input type="submit" class="button hidden" disabled="disabled" title="{$APP.LBL_SEND_CONFIRM_OPT_IN_EMAIL}" onclick="this.form.return_module.value=\'Leads\'; this.form.return_action.value=\'Leads\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'sendConfirmOptInEmail\'; this.form.module.value=\'Leads\'; this.form.module_tab.value=\'Leads\';" name="send_confirm_opt_in_email" value="{$APP.LBL_SEND_CONFIRM_OPT_IN_EMAIL}"/>',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$APP.LBL_SEND_CONFIRM_OPT_IN_EMAIL}',
              'htmlOptions' => 
              array (
                'class' => 'button hidden',
                'id' => 'send_confirm_opt_in_email',
                'title' => '{$APP.LBL_SEND_CONFIRM_OPT_IN_EMAIL}',
                'onclick' => 'this.form.return_module.value=\'Leads\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'sendConfirmOptInEmail\'; this.form.module.value=\'Leads\'; this.form.module_tab.value=\'Leads\';',
                'name' => 'send_confirm_opt_in_email',
                'disabled' => true,
              ),
            ),
          ),
            0 => 'EDIT',
            2 => 'DELETE',
            array (
                'customCode' => '<input type="button" class="button" onClick="showPopup();" value="Create Account">',
            ),

        ),
        'headerTpl' => 'modules/Leads/tpls/DetailViewHeader.tpl',
      ),
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Leads/Lead.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_CONTACT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'LBL_CONTACT_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'full_name_c',
            'label' => 'LBL_FULL_NAME',
          ),
          1 => 
          array (
            'name' => 'utm_score_c',
            'label' => 'LBL_UTM_SCORE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'phone_c',
            'label' => 'LBL_PHONE',
          ),
          1 => 
          array (
            'name' => 'utm_medium_c',
            'label' => 'LBL_UTM_MEDIUM',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'phone_number_c',
            'label' => 'LBL_PHONE_NUMBER',
          ),
          1 => 
          array (
            'name' => 'utm_campaign_c',
            'label' => 'LBL_UTM_CAMPAIGN',
          ),
        ),
        3 => 
        array (
          0 => '',
          1 => '',
        ),
        4 => 
        array (
          0 => 'email1',
          1 => 
          array (
            'name' => 'utm_term_c',
            'label' => 'LBL_UTM_TERM',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'company_name_c',
            'label' => 'LBL_COMPANY_NAME',
          ),
          1 => 
          array (
            'name' => 'utm_content_c',
            'label' => 'LBL_UTM_CONTENT',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'vat_number_c',
            'label' => 'LBL_VAT_NUMBER',
          ),
          1 => '',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'st1_team_leads_1_name',
          ),
        ),
      ),
    ),
  ),
);
;
?>
