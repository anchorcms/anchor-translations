<?php defined('IN_CMS') or die('Nincs közvetlen hozzáférés.');

return array(

	'pages' => 'Oldalak',
	'create_page' => 'Új oldal létrehozása',
	'no_pages' => 'Nincs még oldal. Miért nem csinálsz egyet?',
	'add_page' => 'Oldal hozzáadása',
	'editing' => 'Szerkesztés',
	'editing_explain' => 'Néhány hasznos link.',
	'view_page' => 'Az oldal megtekintése a honlapon.',

	'name' => 'Név',
	'name_explain' => 'Az oldal neve. Ez lesz látható a navigációban.',
	'title' => 'Cím',
	'title_explain' => 'Az oldal címe, ami lesz látható a <code>&lt;title&gt;</code>-ben.',
	'slug' => 'Slug',
	'slug_explain' => 'Az oldal linkje (<code>' . $_SERVER['HTTP_HOST'] . '/<span id="output">slug</span></code>).',
	'content' => 'Tartalom',
	'content_explain' => 'Az oldal tartalma. Érvényes HTML kóddal.',
	'status' => 'Státusz',
	'status_explain' => 'Szeretnéd, hogy az oldalad élő (publikus), szerkesztett (piszkozat) vagy rejtett (archivált) legyen?',

	'draft' => 'Piszkozat',
	'archived' => 'Archivált',
	'published' => 'Publikált',

	'create' => 'Létrehoz',
	'delete' => 'Töröl',
	'save' => 'Ment',
	'return_pages' => 'Vissza az oldalakhoz',

	'missing_name' => 'Kérlek add meg a nevet',
	'missing_title' => 'Kérlek add meg a címet',
	'duplicate_slug' => 'Az oldal azonos slug-gal már létezik, kérlek válassz másikat.',
	'page_success_created' => 'Az új oldal hozzáadva',
	'page_success_updated' => 'Az oldal frissítve',
	'page_success_delete' => 'Az oldal törölve',
	'page_error_delete' => 'Sajnos nem törölheted a főoldalt vagy a bejegyzések oldalt.'

);