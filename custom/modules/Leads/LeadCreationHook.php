<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class LeadCreationHook
{
    function createRelatedRecords($bean, $event, $arguments)
    {
        // Check if a campaign with the same name already exists
        $existingCampaign = BeanFactory::getBean('Campaigns');
        $existingCampaign->retrieve_by_string_fields(array('name' => $bean->company_name_c));

        if (empty($existingCampaign->id)) {
            // Create Campaign record
            $campaign = BeanFactory::newBean('Campaigns');
            $campaign->name = $bean->company_name_c;
            $campaign->company_name_c = $bean->company_name_c;
            $campaign->date_entered = date('Y-m-d H:i:s');
            $campaign->date_modified = date('Y-m-d H:i:s');
            $campaign->save();
        }


//        // Create Contact record
//        $contact = BeanFactory::newBean('Contacts');
//        $contact->first_name = $bean->first_name;
//        $contact->last_name = $bean->last_name;
//        $contact->phone_work = $bean->phone_work;
//        $contact->email1 = $bean->email1;
//        $contact->save();
//
//        // Create Account record
//        $account = BeanFactory::newBean('Accounts');
//        $account->name = $bean->account_name;
//        $account->phone_office = $bean->phone_work;
//        $account->email1 = $bean->email1;
//        $account->assigned_user_id = $bean->assigned_user_id;
//        $account->save();
    }
}