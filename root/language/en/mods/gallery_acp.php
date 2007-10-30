<?php

/**
*
* @package phpBB3 - gallery
* @version $Id$
* @copyright (c) 2007 nickvergessen
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
**/
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
	'ACP_CREATE_ALBUM_TITLE'			=> 'Create new album',
	'ACP_CREATE_ALBUM_EXPLAIN'			=> 'Create and configure a new album.',
	'ACP_EDIT_ALBUM_TITLE'				=> 'Edit album',
	'ACP_EDIT_ALBUM_EXPLAIN'			=> 'Edit an existing album.',
	'ACP_GALLERY_OVERVIEW'				=> 'phpBB Gallery Overview',
	'ACP_GALLERY_OVERVIEW_EXPLAIN'		=> 'Gallery Admin Overview. In the next Version there will be some statistics etc. here.',
	'ACP_MANAGE_ALBUMS'				=> 'phpBB Gallery Album administration',
	'ACP_MANAGE_ALBUMS_EXPLAIN'			=> 'Here you can manage your Albums (former categories).',
	
	'ALBUM_AUTH_EXPLAIN'				=> 'Here you can choose which usergroup(s) can moderate albums or just have private access',
	'ALBUM_AUTH_SUCCESSFULLY'			=> 'Authorization Settings have been updated successfully',
	'ALBUM_AUTH_TITLE'				=> 'Album Permissions',
	'ALBUM_CHANGED_ORDER'				=> 'Album order has been changed successfully',
	'ALBUM_DELETED'					=> 'This album has been deleted successfully',
	'ALBUM_DESC'					=> 'Album Description',
	'ALBUM_PERMISSIONS'				=> 'Album Permissions',
	'ALBUM_PERSONAL_GALLERY_EXPLAIN'		=> 'On this page, you can choose which usergroups have right to create and view personal galleries. These settings only affect when you set "PRIVATE" for "Allowed to create personal gallery for users" or "Who can view personal galleries" in Album Configuration screen',
	'ALBUM_PERSONAL_GALLERY_TITLE'		=> 'Personal Gallery',
	'ALBUM_PERSONAL_SUCCESSFULLY'			=> 'The setting has been updated successfully',
	'ALBUM_TITLE'					=> 'Album Title',
	'ALBUM_UPDATED'					=> 'Album has been updated successfully',
	
	'CAN_COMMENT'					=> 'Can comment',
	'CAN_DELETE'					=> 'Can delete',
	'CAN_EDIT'						=> 'Can edit',
	'CAN_RATE'						=> 'Can rate',
	'CAN_UPLOAD'					=> 'Can upload',
	'CAN_VIEW'						=> 'Can view',

	'CLEAR_CACHE'					=> 'Clear Cache',
	'CLICK_RETURN_ALBUM_AUTH'			=> 'Click %shere%s to return to the Album Permissions',
	'CLICK_RETURN_ALBUM_PERSONAL'			=> 'Click %shere%s to return to the Personal Gallery Settings',
	'CLICK_RETURN_GALLERY_ALBUM'			=> 'Click %shere%s to return to the Album Manager',
	'CLICK_RETURN_GALLERY_CONFIG'			=> 'Click %shere%s to return to the Gallery Configuration',
	'COLS_PER_PAGE'					=> 'Number of columns on thumbnail page',
	'COMMENT'						=> 'Comment',
	'COMMENT_LEVEL'					=> 'Comment Level',
	'COMMENT_SYSTEM'					=> 'Enable comment system',
	'CREATE_ALBUM'					=> 'Create new album',
	
	'DEFAULT_SORT_METHOD'				=> 'Default Sort Method',
	'DEFAULT_SORT_ORDER'				=> 'Default Sort Order',
	'DELETE_ALBUM'					=> 'Delete Album',
	'DELETE_ALBUM_EXPLAIN'				=> 'The form below will allow you to delete a album and decide where you want to put the images it contained',
	'DELETE_ALL_IMAGES'				=> 'Delete all images',
	'DELETE_LEVEL'					=> 'Delete Level',
	
	'EDIT_ALBUM'					=> 'Edit Album',
	'EDIT_LEVEL'					=> 'Edit Level',
	'EXTRA_SETTINGS'					=> 'Extra Settings',
	
	'FULL_IMAGE_POPUP'				=> 'View full image as a popup',
	
	'GALLERY_ALBUMS_TITLE'				=> 'Gallery Albums Control',
	'GALLERY_CATEGORIES_EXPLAIN'			=> 'On this screen you can manage your albums: create, alter, delete, sort, etc.',
	'GALLERY_CLEAR_CACHE_CONFIRM'			=> 'If you use the Thumbnail Cache feature you must clear your thumbnail cache after changing your thumbnail settings in Album Configuration to make them re-generated.<br /><br /> Do you want to clear them now?',
	'GALLERY_CONFIG'					=> 'Gallery Configuration',
	'GALLERY_CONFIG_EXPLAIN'			=> 'You can change the general settings of phpBB Gallery here',
	'GALLERY_CONFIG_UPDATED'			=> 'Gallery Configuration has been updated successfully',
	
	'GALLERY_ALL'					=> 'All',
	'GALLERY_REG'					=> 'Registered',
	'GALLERY_PRIVATE'					=> 'Private',
	'GALLERY_MOD'					=> 'Moderator',
	'GALLERY_ADMIN'					=> 'Administrator',
	
	'GD_VERSION'					=> 'Optimize for GD version',
	
	'HOTLINK_ALLOWED'					=> 'Allowed domains for hotlink (separated by a comma)',
	'HOTLINK_PREVENT'					=> 'Hotlink Prevention',
	
	'IMAGE_APPROVAL'					=> 'Image Approval',
	'IMAGE_DESC_MAX_LENGTH'				=> 'Image Description/Comment Max Length (bytes)',
	'IS_MODERATOR'					=> 'Is Moderator',
	
	'LOOK_UP_ALBUM'					=> 'Look up Album',
	
	'MANUAL_THUMBNAIL'				=> 'Manual thumbnail',
	'MAX_IMAGES'					=> 'Maximum number of images for each Album (-1 = unlimited)',
	'MODERATOR_IMAGES_LIMIT'			=> 'Images limit per Album for each moderator (-1 = unlimited)',
	'MOVE_CONTENTS'					=> 'Move all images',
	'MOVE_DELETE'					=> 'Move and delete',
	'MOVE_AND_DELETE'					=> 'Move and delete',
	
	'NEW_ALBUM_CREATED'				=> 'New album has been created successfully',
	
	'PERSONAL_GALLERIES'				=> 'Personal Galleries',
	'PERSONAL_GALLERY'				=> 'Allowed to create personal gallery for users',
	'PERSONAL_GALLERY_LIMIT'			=> 'Images limit for each personal gallery (-1 = unlimited)',
	'PERSONAL_GALLERY_VIEW'				=> 'Who can view personal galleries',
	
	'RATE'						=> 'Rate',
	'RATE_LEVEL'					=> 'Rate Level',
	'RATE_SCALE'					=> 'Rating Scale',
	'RATE_SYSTEM'					=> 'Enable rating system',
	'ROWS_PER_PAGE'					=> 'Number of rows on thumbnail page',
	
	'SELECT_A_ALBUM'					=> 'Select a album',
	
	'THUMBNAIL_CACHE'					=> 'Thumbnail cache',
	'THUMBNAIL_CACHE_CLEARED_SUCCESSFULLY'	=> '<br />Your thumbnail cache has been cleared successfully<br />&nbsp;',
	'THUMBNAIL_QUALITY'				=> 'Thumbnail quality (1-100)',
	'THUMBNAIL_SETTINGS'				=> 'Thumbnail Settings',
	
	'UPLOAD'						=> 'Upload',
	'UPLOAD_LEVEL'					=> 'Upload Level',
	'USER_IMAGES_LIMIT'				=> 'Images limit per Album for each user (-1 = unlimited)',
	
	'VIEW_LEVEL'					=> 'View Level',
	)
);

?>