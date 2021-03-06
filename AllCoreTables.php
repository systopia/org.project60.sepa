<?php

/*
  +--------------------------------------------------------------------+
  | CiviCRM version 4.3                                                |
  +--------------------------------------------------------------------+
  | Copyright CiviCRM LLC (c) 2004-2013                                |
  +--------------------------------------------------------------------+
  | This file is a part of CiviCRM.                                    |
  |                                                                    |
  | CiviCRM is free software; you can copy, modify, and distribute it  |
  | under the terms of the GNU Affero General Public License           |
  | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
  |                                                                    |
  | CiviCRM is distributed in the hope that it will be useful, but     |
  | WITHOUT ANY WARRANTY; without even the implied warranty of         |
  | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
  | See the GNU Affero General Public License for more details.        |
  |                                                                    |
  | You should have received a copy of the GNU Affero General Public   |
  | License and the CiviCRM Licensing Exception along                  |
  | with this program; if not, contact CiviCRM LLC                     |
  | at info[AT]civicrm[DOT]org. If you have questions about the        |
  | GNU Affero General Public License or the licensing of CiviCRM,     |
  | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
  +--------------------------------------------------------------------+
 */

/**
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2013
 * $Id$
 *
 */
class CRM_Core_DAO_AllCoreTables {

  static $tables = null;
  static $daoToClass = null;

  static function tables() {
    if (self::$tables === null) {
      self::init();
    }
    return self::$tables;
  }

  static function daoToClass() {
    if (self::$daoToClass === null) {
      self::init();
    }
    return self::$daoToClass;
  }

  //--- added for new register_dao hook
  static public function registerDAO($daoName, $className, $tableName) {
    self::$daoToClass[$daoName] = $className;
    self::$tables[$tableName] = $className;
  }

  static function init() {
    self::$tables = array(
        'civicrm_address_format' => 'CRM_Core_DAO_AddressFormat',
        'civicrm_extension' => 'CRM_Core_DAO_Extension',
        'civicrm_file' => 'CRM_Core_DAO_File',
        'civicrm_location_type' => 'CRM_Core_DAO_LocationType',
        'civicrm_mail_settings' => 'CRM_Core_DAO_MailSettings',
        'civicrm_managed' => 'CRM_Core_DAO_Managed',
        'civicrm_mapping' => 'CRM_Core_DAO_Mapping',
        'civicrm_option_group' => 'CRM_Core_DAO_OptionGroup',
        'civicrm_preferences_date' => 'CRM_Core_DAO_PreferencesDate',
        'civicrm_worldregion' => 'CRM_Core_DAO_Worldregion',
        'civicrm_component' => 'CRM_Core_DAO_Component',
        'civicrm_persistent' => 'CRM_Core_DAO_Persistent',
        'civicrm_prevnext_cache' => 'CRM_Core_DAO_PrevNextCache',
        'civicrm_action_mapping' => 'CRM_Core_DAO_ActionMapping',
        'civicrm_acl' => 'CRM_ACL_DAO_ACL',
        'civicrm_acl_entity_role' => 'CRM_ACL_DAO_EntityRole',
        'civicrm_contact' => 'CRM_Contact_DAO_Contact',
        'civicrm_acl_contact_cache' => 'CRM_Contact_DAO_ACLContactCache',
        'civicrm_relationship_type' => 'CRM_Contact_DAO_RelationshipType',
        'civicrm_saved_search' => 'CRM_Contact_DAO_SavedSearch',
        'civicrm_contact_type' => 'CRM_Contact_DAO_ContactType',
        'civicrm_batch' => 'CRM_Batch_DAO_Batch',
        'civicrm_entity_batch' => 'CRM_Batch_DAO_EntityBatch',
        'civicrm_mailing_component' => 'CRM_Mailing_DAO_Component',
        'civicrm_mailing_bounce_type' => 'CRM_Mailing_DAO_BounceType',
        'civicrm_mailing_bounce_pattern' => 'CRM_Mailing_DAO_BouncePattern',
        'civicrm_premiums' => 'CRM_Contribute_DAO_Premium',
        'civicrm_currency' => 'CRM_Financial_DAO_Currency',
        'civicrm_financial_account' => 'CRM_Financial_DAO_FinancialAccount',
        'civicrm_payment_processor_type' => 'CRM_Financial_DAO_PaymentProcessorType',
        'civicrm_financial_type' => 'CRM_Financial_DAO_FinancialType',
        'civicrm_entity_financial_account' => 'CRM_Financial_DAO_EntityFinancialAccount',
        'civicrm_financial_item' => 'CRM_Financial_DAO_FinancialItem',
        'civicrm_sms_provider' => 'CRM_SMS_DAO_Provider',
        'civicrm_membership_status' => 'CRM_Member_DAO_MembershipStatus',
        'civicrm_campaign' => 'CRM_Campaign_DAO_Campaign',
        'civicrm_campaign_group' => 'CRM_Campaign_DAO_CampaignGroup',
        'civicrm_survey' => 'CRM_Campaign_DAO_Survey',
        'civicrm_participant_status_type' => 'CRM_Event_DAO_ParticipantStatusType',
        'civicrm_event_carts' => 'CRM_Event_Cart_DAO_Cart',
        'civicrm_dedupe_rule_group' => 'CRM_Dedupe_DAO_RuleGroup',
        'civicrm_dedupe_rule' => 'CRM_Dedupe_DAO_Rule',
        'civicrm_dedupe_exception' => 'CRM_Dedupe_DAO_Exception',
        'civicrm_case' => 'CRM_Case_DAO_Case',
        'civicrm_case_contact' => 'CRM_Case_DAO_CaseContact',
        'civicrm_grant' => 'CRM_Grant_DAO_Grant',
        'civicrm_tell_friend' => 'CRM_Friend_DAO_Friend',
        'civicrm_pledge_block' => 'CRM_Pledge_DAO_PledgeBlock',
        'civicrm_queue_item' => 'CRM_Queue_DAO_QueueItem',
        'civicrm_pcp' => 'CRM_PCP_DAO_PCP',
        'civicrm_cache' => 'CRM_Core_DAO_Cache',
        'civicrm_country' => 'CRM_Core_DAO_Country',
        'civicrm_custom_group' => 'CRM_Core_DAO_CustomGroup',
        'civicrm_custom_field' => 'CRM_Core_DAO_CustomField',
        'civicrm_domain' => 'CRM_Core_DAO_Domain',
        'civicrm_email' => 'CRM_Core_DAO_Email',
        'civicrm_entity_file' => 'CRM_Core_DAO_EntityFile',
        'civicrm_im' => 'CRM_Core_DAO_IM',
        'civicrm_job' => 'CRM_Core_DAO_Job',
        'civicrm_job_log' => 'CRM_Core_DAO_JobLog',
        'civicrm_log' => 'CRM_Core_DAO_Log',
        'civicrm_mapping_field' => 'CRM_Core_DAO_MappingField',
        'civicrm_menu' => 'CRM_Core_DAO_Menu',
        'civicrm_navigation' => 'CRM_Core_DAO_Navigation',
        'civicrm_note' => 'CRM_Core_DAO_Note',
        'civicrm_option_value' => 'CRM_Core_DAO_OptionValue',
        'civicrm_phone' => 'CRM_Core_DAO_Phone',
        'civicrm_state_province' => 'CRM_Core_DAO_StateProvince',
        'civicrm_tag' => 'CRM_Core_DAO_Tag',
        'civicrm_uf_match' => 'CRM_Core_DAO_UFMatch',
        'civicrm_timezone' => 'CRM_Core_DAO_Timezone',
        'civicrm_openid' => 'CRM_Core_DAO_OpenID',
        'civicrm_website' => 'CRM_Core_DAO_Website',
        'civicrm_setting' => 'CRM_Core_DAO_Setting',
        'civicrm_acl_cache' => 'CRM_ACL_DAO_Cache',
        'civicrm_group' => 'CRM_Contact_DAO_Group',
        'civicrm_subscription_history' => 'CRM_Contact_DAO_SubscriptionHistory',
        'civicrm_group_contact_cache' => 'CRM_Contact_DAO_GroupContactCache',
        'civicrm_group_nesting' => 'CRM_Contact_DAO_GroupNesting',
        'civicrm_group_organization' => 'CRM_Contact_DAO_GroupOrganization',
        'civicrm_relationship' => 'CRM_Contact_DAO_Relationship',
        'civicrm_mailing_event_subscribe' => 'CRM_Mailing_Event_DAO_Subscribe',
        'civicrm_mailing_event_confirm' => 'CRM_Mailing_Event_DAO_Confirm',
        'civicrm_contribution_page' => 'CRM_Contribute_DAO_ContributionPage',
        'civicrm_product' => 'CRM_Contribute_DAO_Product',
        'civicrm_premiums_product' => 'CRM_Contribute_DAO_PremiumsProduct',
        'civicrm_contribution_widget' => 'CRM_Contribute_DAO_Widget',
        'civicrm_payment_processor' => 'CRM_Financial_DAO_PaymentProcessor',
        'civicrm_membership_type' => 'CRM_Member_DAO_MembershipType',
        'civicrm_membership_block' => 'CRM_Member_DAO_MembershipBlock',
        'civicrm_activity' => 'CRM_Activity_DAO_Activity',
        'civicrm_activity_contact' => 'CRM_Activity_DAO_ActivityContact',
        'civicrm_case_activity' => 'CRM_Case_DAO_CaseActivity',
        'civicrm_pledge' => 'CRM_Pledge_DAO_Pledge',
        'civicrm_report_instance' => 'CRM_Report_DAO_Instance',
        'civicrm_price_set' => 'CRM_Price_DAO_Set',
        'civicrm_price_set_entity' => 'CRM_Price_DAO_SetEntity',
        'civicrm_county' => 'CRM_Core_DAO_County',
        'civicrm_dashboard' => 'CRM_Core_DAO_Dashboard',
        'civicrm_discount' => 'CRM_Core_DAO_Discount',
        'civicrm_entity_tag' => 'CRM_Core_DAO_EntityTag',
        'civicrm_msg_template' => 'CRM_Core_DAO_MessageTemplates',
        'civicrm_uf_group' => 'CRM_Core_DAO_UFGroup',
        'civicrm_uf_field' => 'CRM_Core_DAO_UFField',
        'civicrm_uf_join' => 'CRM_Core_DAO_UFJoin',
        'civicrm_action_schedule' => 'CRM_Core_DAO_ActionSchedule',
        'civicrm_action_log' => 'CRM_Core_DAO_ActionLog',
        'civicrm_dashboard_contact' => 'CRM_Contact_DAO_DashboardContact',
        'civicrm_mailing' => 'CRM_Mailing_DAO_Mailing',
        'civicrm_mailing_group' => 'CRM_Mailing_DAO_MailingGroup',
        'civicrm_mailing_trackable_url' => 'CRM_Mailing_DAO_TrackableURL',
        'civicrm_mailing_job' => 'CRM_Mailing_DAO_Job',
        'civicrm_mailing_recipients' => 'CRM_Mailing_DAO_Recipients',
        'civicrm_mailing_spool' => 'CRM_Mailing_DAO_Spool',
        'civicrm_mailing_event_queue' => 'CRM_Mailing_Event_DAO_Queue',
        'civicrm_mailing_event_bounce' => 'CRM_Mailing_Event_DAO_Bounce',
        'civicrm_mailing_event_delivered' => 'CRM_Mailing_Event_DAO_Delivered',
        'civicrm_mailing_event_forward' => 'CRM_Mailing_Event_DAO_Forward',
        'civicrm_mailing_event_opened' => 'CRM_Mailing_Event_DAO_Opened',
        'civicrm_mailing_event_reply' => 'CRM_Mailing_Event_DAO_Reply',
        'civicrm_mailing_event_trackable_url_open' => 'CRM_Mailing_Event_DAO_TrackableURLOpen',
        'civicrm_mailing_event_unsubscribe' => 'CRM_Mailing_Event_DAO_Unsubscribe',
        'civicrm_contribution_recur' => 'CRM_Contribute_DAO_ContributionRecur',
        'civicrm_financial_trxn' => 'CRM_Financial_DAO_FinancialTrxn',
        'civicrm_official_receipt' => 'CRM_Financial_DAO_OfficialReceipt',
        'civicrm_membership' => 'CRM_Member_DAO_Membership',
        'civicrm_membership_log' => 'CRM_Member_DAO_MembershipLog',
        'civicrm_price_field' => 'CRM_Price_DAO_Field',
        'civicrm_price_field_value' => 'CRM_Price_DAO_FieldValue',
        'civicrm_line_item' => 'CRM_Price_DAO_LineItem',
        'civicrm_pcp_block' => 'CRM_PCP_DAO_PCPBlock',
        'civicrm_address' => 'CRM_Core_DAO_Address',
        'civicrm_loc_block' => 'CRM_Core_DAO_LocBlock',
        'civicrm_group_contact' => 'CRM_Contact_DAO_GroupContact',
        'civicrm_contribution' => 'CRM_Contribute_DAO_Contribution',
        'civicrm_contribution_product' => 'CRM_Contribute_DAO_ContributionProduct',
        'civicrm_contribution_soft' => 'CRM_Contribute_DAO_ContributionSoft',
        'civicrm_entity_financial_trxn' => 'CRM_Financial_DAO_EntityFinancialTrxn',
        'civicrm_membership_payment' => 'CRM_Member_DAO_MembershipPayment',
        'civicrm_event' => 'CRM_Event_DAO_Event',
        'civicrm_participant' => 'CRM_Event_DAO_Participant',
        'civicrm_participant_payment' => 'CRM_Event_DAO_ParticipantPayment',
        'civicrm_events_in_carts' => 'CRM_Event_Cart_DAO_EventInCart',
        'civicrm_pledge_payment' => 'CRM_Pledge_DAO_PledgePayment',
    );
    self::$daoToClass = array(
        'AddressFormat' => 'CRM_Core_DAO_AddressFormat',
        'Extension' => 'CRM_Core_DAO_Extension',
        'File' => 'CRM_Core_DAO_File',
        'LocationType' => 'CRM_Core_DAO_LocationType',
        'MailSettings' => 'CRM_Core_DAO_MailSettings',
        'Managed' => 'CRM_Core_DAO_Managed',
        'Mapping' => 'CRM_Core_DAO_Mapping',
        'OptionGroup' => 'CRM_Core_DAO_OptionGroup',
        'PreferencesDate' => 'CRM_Core_DAO_PreferencesDate',
        'Worldregion' => 'CRM_Core_DAO_Worldregion',
        'Component' => 'CRM_Core_DAO_Component',
        'Persistent' => 'CRM_Core_DAO_Persistent',
        'PrevNextCache' => 'CRM_Core_DAO_PrevNextCache',
        'ActionMapping' => 'CRM_Core_DAO_ActionMapping',
        'ACL' => 'CRM_ACL_DAO_ACL',
        'EntityRole' => 'CRM_ACL_DAO_EntityRole',
        'Contact' => 'CRM_Contact_DAO_Contact',
        'ACLContactCache' => 'CRM_Contact_DAO_ACLContactCache',
        'RelationshipType' => 'CRM_Contact_DAO_RelationshipType',
        'SavedSearch' => 'CRM_Contact_DAO_SavedSearch',
        'ContactType' => 'CRM_Contact_DAO_ContactType',
        'Batch' => 'CRM_Batch_DAO_Batch',
        'EntityBatch' => 'CRM_Batch_DAO_EntityBatch',
        'Component' => 'CRM_Mailing_DAO_Component',
        'BounceType' => 'CRM_Mailing_DAO_BounceType',
        'BouncePattern' => 'CRM_Mailing_DAO_BouncePattern',
        'Premium' => 'CRM_Contribute_DAO_Premium',
        'Currency' => 'CRM_Financial_DAO_Currency',
        'FinancialAccount' => 'CRM_Financial_DAO_FinancialAccount',
        'PaymentProcessorType' => 'CRM_Financial_DAO_PaymentProcessorType',
        'FinancialType' => 'CRM_Financial_DAO_FinancialType',
        'EntityFinancialAccount' => 'CRM_Financial_DAO_EntityFinancialAccount',
        'FinancialItem' => 'CRM_Financial_DAO_FinancialItem',
        'Provider' => 'CRM_SMS_DAO_Provider',
        'MembershipStatus' => 'CRM_Member_DAO_MembershipStatus',
        'Campaign' => 'CRM_Campaign_DAO_Campaign',
        'CampaignGroup' => 'CRM_Campaign_DAO_CampaignGroup',
        'Survey' => 'CRM_Campaign_DAO_Survey',
        'ParticipantStatusType' => 'CRM_Event_DAO_ParticipantStatusType',
        'Cart' => 'CRM_Event_Cart_DAO_Cart',
        'RuleGroup' => 'CRM_Dedupe_DAO_RuleGroup',
        'Rule' => 'CRM_Dedupe_DAO_Rule',
        'Exception' => 'CRM_Dedupe_DAO_Exception',
        'Case' => 'CRM_Case_DAO_Case',
        'CaseContact' => 'CRM_Case_DAO_CaseContact',
        'Grant' => 'CRM_Grant_DAO_Grant',
        'Friend' => 'CRM_Friend_DAO_Friend',
        'PledgeBlock' => 'CRM_Pledge_DAO_PledgeBlock',
        'QueueItem' => 'CRM_Queue_DAO_QueueItem',
        'PCP' => 'CRM_PCP_DAO_PCP',
        'Cache' => 'CRM_Core_DAO_Cache',
        'Country' => 'CRM_Core_DAO_Country',
        'CustomGroup' => 'CRM_Core_DAO_CustomGroup',
        'CustomField' => 'CRM_Core_DAO_CustomField',
        'Domain' => 'CRM_Core_DAO_Domain',
        'Email' => 'CRM_Core_DAO_Email',
        'EntityFile' => 'CRM_Core_DAO_EntityFile',
        'IM' => 'CRM_Core_DAO_IM',
        'Job' => 'CRM_Core_DAO_Job',
        'JobLog' => 'CRM_Core_DAO_JobLog',
        'Log' => 'CRM_Core_DAO_Log',
        'MappingField' => 'CRM_Core_DAO_MappingField',
        'Menu' => 'CRM_Core_DAO_Menu',
        'Navigation' => 'CRM_Core_DAO_Navigation',
        'Note' => 'CRM_Core_DAO_Note',
        'OptionValue' => 'CRM_Core_DAO_OptionValue',
        'Phone' => 'CRM_Core_DAO_Phone',
        'StateProvince' => 'CRM_Core_DAO_StateProvince',
        'Tag' => 'CRM_Core_DAO_Tag',
        'UFMatch' => 'CRM_Core_DAO_UFMatch',
        'Timezone' => 'CRM_Core_DAO_Timezone',
        'OpenID' => 'CRM_Core_DAO_OpenID',
        'Website' => 'CRM_Core_DAO_Website',
        'Setting' => 'CRM_Core_DAO_Setting',
        'Cache' => 'CRM_ACL_DAO_Cache',
        'Group' => 'CRM_Contact_DAO_Group',
        'SubscriptionHistory' => 'CRM_Contact_DAO_SubscriptionHistory',
        'GroupContactCache' => 'CRM_Contact_DAO_GroupContactCache',
        'GroupNesting' => 'CRM_Contact_DAO_GroupNesting',
        'GroupOrganization' => 'CRM_Contact_DAO_GroupOrganization',
        'Relationship' => 'CRM_Contact_DAO_Relationship',
        'Subscribe' => 'CRM_Mailing_Event_DAO_Subscribe',
        'Confirm' => 'CRM_Mailing_Event_DAO_Confirm',
        'ContributionPage' => 'CRM_Contribute_DAO_ContributionPage',
        'Product' => 'CRM_Contribute_DAO_Product',
        'PremiumsProduct' => 'CRM_Contribute_DAO_PremiumsProduct',
        'Widget' => 'CRM_Contribute_DAO_Widget',
        'PaymentProcessor' => 'CRM_Financial_DAO_PaymentProcessor',
        'MembershipType' => 'CRM_Member_DAO_MembershipType',
        'MembershipBlock' => 'CRM_Member_DAO_MembershipBlock',
        'Activity' => 'CRM_Activity_DAO_Activity',
        'ActivityContact' => 'CRM_Activity_DAO_ActivityContact',
        'CaseActivity' => 'CRM_Case_DAO_CaseActivity',
        'Pledge' => 'CRM_Pledge_DAO_Pledge',
        'Instance' => 'CRM_Report_DAO_Instance',
        'Set' => 'CRM_Price_DAO_Set',
        'SetEntity' => 'CRM_Price_DAO_SetEntity',
        'County' => 'CRM_Core_DAO_County',
        'Dashboard' => 'CRM_Core_DAO_Dashboard',
        'Discount' => 'CRM_Core_DAO_Discount',
        'EntityTag' => 'CRM_Core_DAO_EntityTag',
        'MessageTemplates' => 'CRM_Core_DAO_MessageTemplates',
        'UFGroup' => 'CRM_Core_DAO_UFGroup',
        'UFField' => 'CRM_Core_DAO_UFField',
        'UFJoin' => 'CRM_Core_DAO_UFJoin',
        'ActionSchedule' => 'CRM_Core_DAO_ActionSchedule',
        'ActionLog' => 'CRM_Core_DAO_ActionLog',
        'DashboardContact' => 'CRM_Contact_DAO_DashboardContact',
        'Mailing' => 'CRM_Mailing_DAO_Mailing',
        'MailingGroup' => 'CRM_Mailing_DAO_MailingGroup',
        'TrackableURL' => 'CRM_Mailing_DAO_TrackableURL',
        'Job' => 'CRM_Mailing_DAO_Job',
        'Recipients' => 'CRM_Mailing_DAO_Recipients',
        'Spool' => 'CRM_Mailing_DAO_Spool',
        'Queue' => 'CRM_Mailing_Event_DAO_Queue',
        'Bounce' => 'CRM_Mailing_Event_DAO_Bounce',
        'Delivered' => 'CRM_Mailing_Event_DAO_Delivered',
        'Forward' => 'CRM_Mailing_Event_DAO_Forward',
        'Opened' => 'CRM_Mailing_Event_DAO_Opened',
        'Reply' => 'CRM_Mailing_Event_DAO_Reply',
        'TrackableURLOpen' => 'CRM_Mailing_Event_DAO_TrackableURLOpen',
        'Unsubscribe' => 'CRM_Mailing_Event_DAO_Unsubscribe',
        'ContributionRecur' => 'CRM_Contribute_DAO_ContributionRecur',
        'FinancialTrxn' => 'CRM_Financial_DAO_FinancialTrxn',
        'OfficialReceipt' => 'CRM_Financial_DAO_OfficialReceipt',
        'Membership' => 'CRM_Member_DAO_Membership',
        'MembershipLog' => 'CRM_Member_DAO_MembershipLog',
        'Field' => 'CRM_Price_DAO_Field',
        'FieldValue' => 'CRM_Price_DAO_FieldValue',
        'LineItem' => 'CRM_Price_DAO_LineItem',
        'PCPBlock' => 'CRM_PCP_DAO_PCPBlock',
        'Address' => 'CRM_Core_DAO_Address',
        'LocBlock' => 'CRM_Core_DAO_LocBlock',
        'GroupContact' => 'CRM_Contact_DAO_GroupContact',
        'Contribution' => 'CRM_Contribute_DAO_Contribution',
        'ContributionProduct' => 'CRM_Contribute_DAO_ContributionProduct',
        'ContributionSoft' => 'CRM_Contribute_DAO_ContributionSoft',
        'EntityFinancialTrxn' => 'CRM_Financial_DAO_EntityFinancialTrxn',
        'MembershipPayment' => 'CRM_Member_DAO_MembershipPayment',
        'Event' => 'CRM_Event_DAO_Event',
        'Participant' => 'CRM_Event_DAO_Participant',
        'ParticipantPayment' => 'CRM_Event_DAO_ParticipantPayment',
        'EventInCart' => 'CRM_Event_Cart_DAO_EventInCart',
        'PledgePayment' => 'CRM_Pledge_DAO_PledgePayment',
    );
    self::applyHook();
  }

  static public function getCoreTables() {
    return self::tables();
  }

  static public function isCoreTable($tableName) {
    return FALSE !== array_search($tableName, self::tables());
  }

  static public function getClasses() {
    return array_values(self::daoToClass());
  }

  static public function getClassForTable($tableName) {
    return CRM_Utils_Array::value($tableName, self::tables());
  }

  static public function getFullName($daoName) {
    return CRM_Utils_Array::value($daoName, self::daoToClass());
  }

  static public function getBriefName($className) {
    return CRM_Utils_Array::value($className, array_flip(self::daoToClass()));
  }

  static public function applyHook() {
    $entityTypes = array();
    CRM_Utils_Hook::entityTypes($entityTypes);
    foreach ($entityTypes as $entityType) {
      self::registerDAO($entityType['name'], $entityType['class'], $entityType['table']);
    }
  }

}
