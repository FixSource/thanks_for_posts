<?php
/**
*
* Thanks For Posts extension for the phpBB Forum Software package.
*
* @copyright (c) 2013 phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'CLEAR_LIST_THANKS'			=> 'Clear Thanks List',
	'CLEAR_LIST_THANKS_CONFIRM'	=> 'Do you really want to clear the user`s Thanks List?',
	'CLEAR_LIST_THANKS_GIVE'	=> 'List of thanks issued by the user was cleared.',
	'CLEAR_LIST_THANKS_POST'	=> 'List of thanks in the message was cleared.',
	'CLEAR_LIST_THANKS_RECEIVE'	=> 'List of thanks obtained by the user was cleared.',

	'DISABLE_REMOVE_THANKS'		=> 'Deleting thanks has been disabled by the administrator',

	'GIVEN'						=> 'נתן&nbsp;תודה',
	'GLOBAL_INCORRECT_THANKS'	=> 'You cannot give thanks for a Global Announcement that has no reference to a particular forum.',
	'GRATITUDES'				=> 'רשימת תודה',

	'INCORRECT_THANKS'			=> 'Invalid thank',

	'JUMP_TO_FORUM'				=> 'עבור לפורום',
	'JUMP_TO_TOPIC'				=> 'עבור לנושא',

	'FOR_MESSAGE'				=> 'עבור להודעה',
	'FURTHER_THANKS'     	    => array(
		1 => ' ועוד משתמש אחד',
		2 => ' ועוד %d משתמשים',
	),

	'NO_VIEW_USERS_THANKS'		=> 'You are not authorised to view the Thanks List.',

	'NOTIFICATION_THANKS_GIVE'	=> array(
		1 => '<strong>קיבל תודה</strong> מאת %1$s עבור ההודעה:',
		2 => '<strong>קיבלת תודות</strong> מאת %1$s עבור ההודעה:',
	),
	'NOTIFICATION_THANKS_REMOVE'=> array(
		1 => '<strong>הוסרה תודה</strong> מאת %1$s עבור ההודעה:',
		2 => '<strong>הוסרו תודות</strong> מאת %1$s עבור ההודעה:',
	),
	'NOTIFICATION_TYPE_THANKS_GIVE'		=> 'Someone thanks you for a post',
	'NOTIFICATION_TYPE_THANKS_REMOVE'	=> 'Someone removed thanks for your post',

	'RECEIVED'					=> 'קיבל&nbsp;תודה',
	'REMOVE_THANKS'				=> 'הסר את התודה שלך: ',
	'REMOVE_THANKS_CONFIRM'		=> 'האם אתה בטוח שברצונך להסיר את התודה שלך?',
	'REMOVE_THANKS_SHORT'		=> 'הסר תודה',
	'REPUT'						=> 'דירוג',
	'REPUT_TOPLIST'				=> 'רשימת %d התודות המומלצות ביותר',
	'RATING_LOGIN_EXPLAIN'		=> 'You are not authorised to view the toplist.',
	'RATING_NO_VIEW_TOPLIST'	=> 'You are not authorised to view the toplist.',
	'RATING_VIEW_TOPLIST_NO'	=> 'Toplist is empty or disabled by administrator',
	'RATING_FORUM'				=> 'פורום',
	'RATING_POST'				=> 'הודעה',
	'RATING_TOP_FORUM'			=> 'דירוג פורומים',
	'RATING_TOP_POST'			=> 'דירוג הודעות',
	'RATING_TOP_TOPIC'			=> 'דירוג נושאים',
	'RATING_TOPIC'				=> 'נושא',

	'THANK'						=> 'זמן',
	'THANK_FROM'				=> 'מאת',
	'THANK_TEXT_1'				=> 'משתמשים אלו מודים למחבר ',
	'THANK_TEXT_2'				=> ' עבור ההודעה: ',
	'THANK_TEXT_2PL'			=> ' for the post (total %d):',
	'THANK_POST'				=> 'תגיד תודה למחבר של ההודעה: ',
	'THANK_POST_SHORT'			=> 'Thanks',
	'THANKS'					=> array(
		1	=> 'פעם %d בלבד',
		2	=> 'ב- %d פעמים',
	),
	'THANKS_BACK'				=> 'חזור',
	'THANKS_INFO_GIVE'			=> 'יש לך רק להודות על ההודעה.',
	'THANKS_INFO_REMOVE'		=> 'יש לך רק הסרה של התודה שלך.',
	'THANKS_LIST'				=> 'הצג/סגור רשימה',
	'THANKS_PM_MES_GIVE'		=> 'has thanked you for the post',
	'THANKS_PM_MES_REMOVE'		=> 'has removed thank for the post',
	'THANKS_PM_SUBJECT_GIVE'	=> 'תודה על ההודעה',
	'THANKS_PM_SUBJECT_REMOVE'	=> 'הוסרה תודה מההודעה',
	'THANKS_USER'				=> 'רשימת תודה',
	'TOPLIST'					=> 'רשימת הודעות מומלצות',
));
