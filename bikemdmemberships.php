<?php

require_once 'bikemdmemberships.civix.php';

define('FAMILY_FIELD', 'custom_6');
define('MEMBERSHIP_FORM', 'CRM_Contribute_Form_Contribution_Main');

/**
 * Implementation of hook_civicrm_buildForm
 *
 */
function bikemdmemberships_civicrm_buildForm($formName, &$form) {
    $version = CRM_Utils_System::version();

    if(startsWith($version, "4.5")){
    } else if(startsWith($version, "4.4")){
        bikemdmemberships_version44($formName, $form);
    }
}

function bikemdmemberships_version44($formName, &$form) {
//    var_dump($formName);

   if ($formName==MEMBERSHIP_FORM and 
       $form->elementExists(FAMILY_FIELD)){
         $templatePath = realpath(dirname(__FILE__) . "/templates");
        CRM_Core_Region::instance('page-body')->add(array(
            'template' => "{$templatePath}/memberships44.tpl"
        ));
   }
}


/**
 * Implementation of hook_civicrm_config
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function bikemdmemberships_civicrm_config(&$config) {
  _bikemdmemberships_civix_civicrm_config($config);
}

/**
 * Implementation of hook_civicrm_xmlMenu
 *
 * @param $files array(string)
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function bikemdmemberships_civicrm_xmlMenu(&$files) {
  _bikemdmemberships_civix_civicrm_xmlMenu($files);
}

/**
 * Implementation of hook_civicrm_install
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function bikemdmemberships_civicrm_install() {
  _bikemdmemberships_civix_civicrm_install();
}

/**
 * Implementation of hook_civicrm_uninstall
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function bikemdmemberships_civicrm_uninstall() {
  _bikemdmemberships_civix_civicrm_uninstall();
}

/**
 * Implementation of hook_civicrm_enable
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function bikemdmemberships_civicrm_enable() {
  _bikemdmemberships_civix_civicrm_enable();
}

/**
 * Implementation of hook_civicrm_disable
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function bikemdmemberships_civicrm_disable() {
  _bikemdmemberships_civix_civicrm_disable();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function bikemdmemberships_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _bikemdmemberships_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implementation of hook_civicrm_managed
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function bikemdmemberships_civicrm_managed(&$entities) {
  _bikemdmemberships_civix_civicrm_managed($entities);
}

/**
 * Implementation of hook_civicrm_caseTypes
 *
 * Generate a list of case-types
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function bikemdmemberships_civicrm_caseTypes(&$caseTypes) {
  _bikemdmemberships_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implementation of hook_civicrm_alterSettingsFolders
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function bikemdmemberships_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _bikemdmemberships_civix_civicrm_alterSettingsFolders($metaDataFolders);
}
