<?php

return array(

	'extend' => 'Laajenna',

	'fields' => 'Omat tietokentät',
	'fields_desc' => 'Luo omia tietokenttiä',

	'variables' => 'Sivuston asetukset',
	'variables_desc' => 'Lisää omaa metadataa',

	'create_field' => 'Luo uusi kenttä',
	'editing_custom_field' => 'Muokataan kenttää &ldquo;%s&rdquo;',
	'nofields_desc' => 'Ei kenttiä',

	'create_variable' => 'Luo uusi muuttuja',
	'editing_variable' => 'Muokataan muuttujaa &ldquo;%s&rdquo;',
	'novars_desc' => 'Ei muuttujia',

	// form fields
	'type' => 'Tyyppi',
	'type_explain' => 'Minkä tyyppistä tietoa haluat lisätä kenttään.',

	'field' => 'Kenttätyyppi',
	'field_explain' => 'HTML-koodin syöttötapa',

	'key' => 'Yksilöllinen avain',
	'key_explain' => 'Yksilöllinen avain kentälle',
	'key_missing' => 'Syötä yksilöllinen avain',
	'key_exists' => 'Annettu avain on jo käytössä',

	'label' => 'Otsikko',
	'label_explain' => 'Kuvaava otsikko kentälle',
	'label_missing' => 'Syötä otsikko',

	'attribute_type' => 'Tiedostotyypit',
	'attribute_type_explain' => 'Erottele tyypit pilkulla, jätä tyhjäksi hyväksyäksesi kaikki.',

	// images
	'attributes_size_width' => 'Kuvan maksimileveys',
	'attributes_size_width_explain' => 'Kuvien koko muunnettaan jos ne ovat tätä suurempia',

	'attributes_size_height' => 'Kuvan maksimikorkeus',
	'attributes_size_height_explain' => 'Kuvien koko muunnettaan jos ne ovat tätä suurempia',

	// custom vars
	'name' => 'Nimi',
	'name_explain' => 'Yksilöllinen nimi',
	'name_missing' => 'Syötä yksilöllinen nimi',
	'name_exists' => 'Nimi on jo käytössä.',

	'value' => 'Sisältö',
	'value_explain' => 'Sisältö muuttujalle (korkeintaan 64 kB)',
	'value_code_snipet' => 'Koodinpätkä sivumallineeseen lisäämistä varten:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'Muuttuja luotu',
	'variable_updated' => 'Muuttuja päivitetty',
	'variable_deleted' => 'Muuttuja poistettu',

	'field_created' => 'Kenttä luotu',
	'field_updated' => 'Kenttä päivitetty',
	'field_deleted' => 'Kenttä poistettu'

);