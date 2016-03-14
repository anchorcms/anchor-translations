<?php

return array(

	'extend' => 'Erweiterungen',
	'extend_explain' => 'Erweiter deine Seite',

	'fields' => 'Benutzerdefinierte Felder',
	'fields_desc' => 'Erstelle zusätzliche Felder',

	'pagetypes' => 'Seitentypen',
    'pagetypes_desc' => 'Erstelle verschiedene Seitentypen',

	'variables' => 'Seitenvariablen',
	'variables_desc' => 'Erstelle zusätzliche Metadaten',

	'create_field' => 'Erstelle ein neues Feld',
	'editing_custom_field' => 'Bearbeite das &ldquo;%s&rdquo; Feld',
	'nofields_desc' => 'Noch keine Felder',

	'create_variable' => 'Erstelle eine neue Variable',
	'editing_variable' => 'Bearbeite die &ldquo;%s&rdquo; Variable',
	'novars_desc' => 'Noch keine Variablen',

	'create_pagetype' => 'Erstelle einen neuen Seitentyp',
    'editing_pagetype' => 'Bearbeite Seitentyp &ldquo;%s&rdquo;',

	// form fields
	'type' => 'Typ',
	'type_explain' => 'Der Inhaltstyp zu dem du das Feld hinzufügen möchtest.',
	'notypes_desc' => 'Keine Seitentypen bisher',

	'pagetype' => 'Seitentyp',
    'pagetype_explain' => 'Der Typ der Seite zu dem du dieses Feld hinzufügen willst.',

	'field' => 'Feld',
	'field_explain' => 'HTML-Typ des Inputfeldes',

	'key' => 'Schlüssel',
	'key_explain' => 'Einzigartiger Schlüssel für dieses Feld',
	'key_missing' => 'Bitte gib einen Schlüssel ein',
	'key_exists' => 'Der Schlüssel ist schon in Benutzung',

	'label' => 'Feldname',
	'label_explain' => 'Angezeigter Feldname',
	'label_missing' => 'Bitte einen Feldnamen eingeben',

	'attribute_type' => 'Dateitypen',
	'attribute_type_explain' => 'Komma-separierte Liste aller erlaubter Dateitypen: Feld leer lassen um alle zu erlauben.',

	// images
	'attributes_size_width' => 'Maximale Bildbreite',
	'attributes_size_width_explain' => 'Bilder werden angepasst, wenn sie die maximale Bildbreite überschreiten',

	'attributes_size_height' => 'Maximale Bildhöhe',
	'attributes_size_height_explain' => 'Bilder werden angepasst, wenn sie die maximale Bildhöhe überschreiten',

	// custom vars
	'name' => 'Name',
	'name_explain' => 'Ein einzigartiger Name',
	'name_missing' => 'Bitte einen einzigartigen Name angeben',
	'name_exists' => 'Der Name ist leider schon in Benutzung',

	'value' => 'Wert',
	'value_explain' => 'Die Daten die Du speichern willst (bis zu 64KB)',
	'value_code_snipet' => 'Snippet, welches in dein Template eingefügt werden soll:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'Deine Variable wurde erstellt',
	'variable_updated' => 'Deine Variable wurde geändert',
	'variable_deleted' => 'Deine Variable wurde gelöscht',

	'pagetype_created' => 'Dein Seitentyp wurde erstellt',
    'pagetype_updated' => 'Dein Seitentyp wurde geändert',
    'pagetype_deleted' => 'Dein Seitentyp wurde gelöscht',

	'field_created' => 'Dein Feld wurde erstellt',
	'field_updated' => 'Dein Feld wurde geändert',
	'field_deleted' => 'Dein Feld wurde gelöscht'

);
