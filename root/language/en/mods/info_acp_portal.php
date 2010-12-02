<?php
/**
*
* @package Board3 Portal v2
* @version $Id$
* @copyright (c) Board3 Group ( www.board3.de )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	// Portal Modules
	'ACP_PORTAL_MODULES'			=> 'Portal Modules',
	'ACP_PORTAL_MODULES_EXP'		=> 'You can manage your portal modules here. If you turn off all modules, please also disable the Portal.',
	
	'MODULE_POS_TOP'				=> 'Top',
	'MODULE_POS_LEFT'				=> 'Left column',
	'MODULE_POS_RIGHT'				=> 'Right column',
	'MODULE_POS_CENTER'				=> 'Center column',
	'MODULE_POS_BOTTOM'				=> 'Bottom',
	'ADD_MODULE'					=> 'Add module',
	'CHOOSE_MODULE'					=> 'Choose module',
	'CHOOSE_MODULE_EXP'				=> 'Choose a module from the drop-down list',
	'SUCCESS_ADD'					=> 'The module was added successfully.',
	'SUCCESS_DELETE'				=> 'The module was removed successfully.',
	'NO_MODULES'					=> 'No modules have been detected.',
	
	'MODULE_OPTIONS'			=> 'Module options',
	'MODULE_NAME'				=> 'Module name',
	'MODULE_NAME_EXP'			=> 'Enter the name of the Module that should be displayed in the Module configuration.',
	'MODULE_IMAGE'				=> 'Module image',
	'MODULE_IMAGE_EXP'			=> 'Enter the filename of the module image. Images need to be in styles/*yourstyle*/theme/images/portal/',
	'MODULE_PERMISSIONS'		=> 'Module permissions',
	'MODULE_PERMISSIONS_EXP'	=> 'Select the groups that should be authorized to view the module. If you want all users to be able to view the module, don’t select anything.<br />Select/Deselect multiple groups by holding <samp>CTRL</samp> and clicking.',

	// general
	'ACP_PORTAL'							=> 'Portal',
	'ACP_PORTAL_GENERAL_INFO'				=> 'General settings',
	'ACP_PORTAL_CONFIG_INFO'				=> 'General settings',
	'ACP_PORTAL_GENERAL_TITLE'				=> 'Portal Administration',
	'ACP_PORTAL_GENERAL_TITLE_EXP'			=> 'Thank you for choosing Board3 Portal! This is where you can manage your portal page. The options below let you customize the various general settings.',
	'PORTAL_ENABLE'							=> 'Enable Portal',
	'PORTAL_ENABLE_EXP'						=> 'Turns the whole portal on or off',
	'PORTAL_LEFT_COLUMN'					=> 'Enable left column',
	'PORTAL_LEFT_COLUMN_EXP'				=> 'Switch to no if you wish to turn off the left column',
	'PORTAL_RIGHT_COLUMN'					=> 'Enable right column',
	'PORTAL_RIGHT_COLUMN_EXP'				=> 'Switch to no if you wish to turn off the right column',
	'PORTAL_VERSION_CHECK'					=> 'Versioncheck on Portal',
	'PORTAL_FORUM_INDEX'					=> 'Forum Index (Forum list)',
	'PORTAL_FORUM_INDEX_EXP'				=> 'Display this block on the portal.',
	'ACP_PORTAL_COLUMN_WIDTH_SETTINGS'		=> 'Left and right column width settings',
	'PORTAL_LEFT_COLUMN_WIDTH'				=> 'Width of the left column',
	'PORTAL_LEFT_COLUMN_WIDTH_EXP'			=> 'Change the width of the left column in pixels; recommended value is 180',
	'PORTAL_RIGHT_COLUMN_WIDTH'				=> 'Width of the right column',
	'PORTAL_RIGHT_COLUMN_WIDTH_EXP'			=> 'Change the width of the right column in pixels; recommended value is 180',
	
	// Install
	'PORTAL_BASIC_INSTALL'			=> 'Adding basic set of modules',
	'PORTAL_BASIC_UNINSTALL'		=> 'Removing modules from database',
	
	// Logs
	'LOG_PORTAL_CONFIG'			=> '<strong>Altered Portal settings</strong><br />&raquo; %s',
	
	/**
	* A copy of Handyman` s MOD version check, to view it on the portal overview
	*/
	'ANNOUNCEMENT_TOPIC'	=> 'Release Ankündigung',
	'CURRENT_VERSION'		=> 'Derzeitige Version',
	'DOWNLOAD_LATEST'		=> 'Neueste Version herunterladen',
	'LATEST_VERSION'		=> 'Neueste Version',
	'NO_INFO'					=> 'Der Server konnte nicht erreicht werden',
	'NOT_UP_TO_DATE'			=> '%s ist nicht aktuell',
	'RELEASE_ANNOUNCEMENT'	=> 'Ankündigungsthema',
	'UP_TO_DATE'			=> '%s ist aktuell',
	'VERSION_CHECK'			=> 'MOD Version Check',
	
	// Adding the permissions
	'acl_a_manage_portal'		=> array('lang' => 'Can alter Portal settings', 'cat' => 'misc'),
	'acl_u_view_portal'			=> array('lang' => 'Can view the Portal', 'cat' => 'misc'),
));
?>