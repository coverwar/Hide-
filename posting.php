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
	'HIDE' => 'Hide',
	'HIDE_HELPLINE' => 'Utilizzo: [hide]testo[/hide] o [hide inline=1]testo[/hide]',
	'HIDDEN_CONTENT' => 'Contenuto non disponibile per gli ospiti',
	'HIDDEN_CONTENT_EXPLAIN' => 'Devi essere un membro registrato per visualizzare questo argomento. '
]);
