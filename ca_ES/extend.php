<?php

return array(

	'extend' => 'Ampliar',

	'fields' => 'Camps personalitzats',
	'fields_desc' => 'Crea camps adicionals',

	'pagetypes' => 'Tipus de p&agrave;gines del blog',
	'pagetypes_desc' => 'Crea diferents tipus de p&agrave;gines',

	'variables' => 'Variables del blog',
	'variables_desc' => 'Crea variables addicionals',

	'create_field' => 'Crea un nou camp',
	'editing_custom_field' => 'Editant el camp &ldquo;%s&rdquo;',
	'nofields_desc' => 'Encara no hi han camps',

	'create_variable' => 'Crae una nova variable',
	'editing_variable' => 'Editant la variable &ldquo;%s&rdquo;',
	'novars_desc' => 'Encara no hi han variables',

	'create_pagetype' => 'Crea un nou tipus de p&agrave;gina',
	'editing_pagetype' => 'Editat el tipus &ldquo;%s&rdquo;',

	// form fields
	'type' => 'Tipus',
	'type_explain' => 'El tipus de contingut al que asignes les p&agrave;gines.',
	'notypes_desc' => 'Encara no hi ha han tipus de p&agrave;gines',

	'pagetype' => 'Tipus de p&agrave;gina',
	'pagetype_explain' => 'El tipus de p&agrave;gina al que vols asignar aquest contingut.',

	'field' => 'Camp',
	'field_explain' => 'Input de tipus HTML',

	'key' => 'Clau &uacute;nica',
	'key_explain' => 'La clau &uacute;nica per al teu camp',
	'key_missing' => 'Si us plau introdueix una clau &uacute;nica',
	'key_exists' => 'La clau ja est&agrave; en &uacute;s',

	'label' => 'Etiqueta',
	'label_explain' => 'Nom llegible per humans per al teu camp',
	'label_missing' => 'Si us plau introdueix una etiqueta',

	'attribute_type' => 'Tipus de camps',
	'attribute_type_explain' => 'Una llista de tipus d&apos;arxiu admesos separats per comes, buit per a acceptar tot.',

	// images
	'attributes_size_width' => 'Amplada m&aacute;xima de les imatge',
	'attributes_size_width_explain' => 'Les imatges ser&aacute;n redimensionades si son m&eacute;s grans que la amplada m&aacute;xima',

	'attributes_size_height' => 'Al&ccedil;ada m&aacute;xima de les imatge',
	'attributes_size_height_explain' => 'Les imatges ser&aacute;n redimensionades si son m&eacute;s grans que la al&ccedil;ada m&aacute;xima',

	// custom vars
	'name' => 'Nom',
	'name_explain' => 'Un nom &uacute;nic',
	'name_missing' => 'Si us plau introdueix un nom &uacute;nic',
	'name_exists' => 'El nom ja est&agrave; en &uacute;s',

	'value' => 'Valor',
	'value_explain' => 'Les dades que vols emmagatzemar (fins a 64kb)',
	'value_code_snipet' => 'Snippet que vols introdu&iuml;r a la teva plantilla:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'La variable s&apos;ha creat',
	'variable_updated' => 'La variable s&apos;ha actualitzat',
	'variable_deleted' => 'La variable s&apos;ha eliminat',

	'pagetype_created' => 'El tipus de p&agrave;gina s&apos;ha creat',
	'pagetype_updated' => 'El tipus de p&agrave;gina s&apos;ha actualitzat',
	'pagetype_deleted' => 'El tipus de p&agrave;gina s&apos;ha eliminat',

	'field_created' => 'El teu camp s&apos;ha creat',
	'field_updated' => 'El teu camp s&apos;ha actualitzat',
	'field_deleted' => 'El teu camp s&apos;ha eliminat'

);
