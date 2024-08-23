<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class LeadCreationHook
{
    function setFirstNameFromFullName($bean, $event, $arguments)
    {
        $bean->first_name = $bean->full_name_c;
    }

    function createRelatedRecords($bean, $event, $arguments)
    {
        global $db;

        // Check if a campaign with the same name already exists
        $existingCampaign = BeanFactory::getBean('Campaigns');
        $existingCampaign->retrieve_by_string_fields(array('name' => $bean->utm_campaign_c));

        if (empty($existingCampaign->id)) {
            // Create Campaign record
            $campaign = BeanFactory::newBean('Campaigns');
            $campaign->name = $bean->utm_campaign_c;
            $campaign->date_entered = date('Y-m-d H:i:s');
            $campaign->date_modified = date('Y-m-d H:i:s');
            $campaign->save();
        }

        // Retrieve the id from email_addresses where email_address equals email1
        $email1 = $db->quote($bean->email1);
        $sql = "SELECT id FROM email_addresses WHERE email_address = '$email1'";
        $result = $db->query($sql);
        $email_address_id = $db->fetchByAssoc($result)['id'] ?? null;

        // Retrieve the bean_id from email_addr_bean_rel where email_address_id equals the id from email_addresses for Contacts
        $bean_id = null;
        if ($email_address_id) {
            $sql = "SELECT bean_id FROM email_addr_bean_rel WHERE email_address_id = '$email_address_id' AND bean_module = 'Contacts'";
            $result = $db->query($sql);
            $bean_id = $db->fetchByAssoc($result)['bean_id'] ?? null;
        }

        // Check if the contact exists and is not deleted
        $existingContactId = null;
        if ($bean_id) {
            $sql = "SELECT id, deleted FROM contacts WHERE id = '$bean_id'";
            $result = $db->query($sql);
            $row = $db->fetchByAssoc($result);
            $existingContactId = $row['id'] ?? null;
            $deleted = $row['deleted'] ?? null;

            if ($existingContactId && $deleted == 0) {
                // Update the contact record
                $existingContact = BeanFactory::getBean('Contacts', $existingContactId);
                $existingContact->first_name = $bean->full_name_c;
                $existingContact->full_name_c = $bean->full_name_c;
                $existingContact->phone_number_c = $bean->phone_number_c;
                $existingContact->company_name_c = $bean->company_name_c;
                $existingContact->save();
            } else {
                // Create a new contact record
                $contact = BeanFactory::newBean('Contacts');
                $contact->first_name = $bean->full_name_c;
                $contact->full_name_c = $bean->full_name_c;
                $contact->phone_number_c = $bean->phone_number_c;
                $contact->email1 = $bean->email1;
                $contact->company_name_c = $bean->company_name_c;
                $contact->save();
            }
        } else {
            // Create a new contact record
            $contact = BeanFactory::newBean('Contacts');
            $contact->first_name = $bean->full_name_c;
            $contact->full_name_c = $bean->full_name_c;
            $contact->phone_number_c = $bean->phone_number_c;
            $contact->email1 = $bean->email1;
            $contact->company_name_c = $bean->company_name_c;
            $contact->save();
        }
    }
}