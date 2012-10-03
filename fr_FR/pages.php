<?php defined('IN_CMS') or die('No direct access allowed.');

return array(

	'pages' => 'Pages',
	'create_page' => 'Cr&eacute;er une nouvelle page',
	'no_pages' => 'Aucune page pour le moment. Pourquoi ne pas en publier une&nbsp;?',
	'add_page' => 'Ajouter une page',
	'editing' => '&Eacute;dition de',
	'editing_explain' => 'Quelques liens utiles.',
	'view_page' => 'Voir cette page sur votre site',

	'name' => 'Nom',
	'name_explain' => 'Le nom de votre page. Celui-ci sera affich&eacute; dans la navigation.',
	'title' => 'Titre',
	'title_explain' => 'Le titre de votre page, Celui-ci sera affich&eacute; dans la balise <code>&lt;title&gt;</code>.',
	'slug' => 'Alias',
	'slug_explain' => 'L&rsquo;alias de votre page (<code>' . $_SERVER['HTTP_HOST'] . '/<span id="output">alias</span></code>).',
	'content' => 'Contenu',
	'content_explain' => 'Your page\'s content. Accepts valid HTML.',
	'status' => 'Statut',
	'status_explain' => 'Voulez-vous que votre page soit visible (publi&eacute;e), en attente (brouillon), ou cach&eacute;e (archiv&eacute;e)&nbsp;?',

	'draft' => 'Brouillon',
	'archived' => 'Archiv&eacute;e',
	'published' => 'Publi&eacute;e',

	'create' => 'Cr&eacute;er',
	'delete' => 'Supprimer',
	'save' => 'Enregistrer',
	'return_pages' => 'Retours aux pages',

	'missing_name' => 'Veuillez entrer un nom',
	'missing_title' => 'Merci d&rsquo;indiquer un titre',
	'duplicate_slug' => 'Une page avec cet alias existe d&eacute;j&agrave;, veuillez fournir un autre alias.',
	'page_success_created' => 'Votre nouvelle page a &eacute;t&eacute; ajout&eacute;e',
	'page_success_updated' => 'Votre nouvelle page a &eacute;t&eacute; mise &agrave; jour',
	'page_success_delete' => 'Votre nouvelle page a &eacute;t&eacute; supprim&eacute;e',
	'page_error_delete' => 'D&eacute;sol&eacute;, il est impossible de supprimer la page d&rsquo;accueil ou la page de listing des articles.'

);