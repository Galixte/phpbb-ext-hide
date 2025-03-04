<?php

/**
 * Hide extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * @license GPL-2.0-only
 */

/**
 * @ignore
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
 * @ignore
 */
if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'HIDE_HELPLINE' => 'Usage: [hide]text[/hide] or [hide inline=1]text[/hide]',
	'HIDDEN_CONTENT' => 'Hidden content',
	'HIDDEN_CONTENT_EXPLAIN' => 'Exclusive content for logged in users.'
]);
