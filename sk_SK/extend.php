<?php

return array(

	'extend' => 'Rozšírenia',

	'fields' => 'Vlastné polia',
	'fields_desc' => 'Vytvoriť vlastné polia pre formuláre',

	'variables' => 'Premenné prostredia',
	'variables_desc' => 'Vytvoriť dodatočné globálne premenné',

	'create_field' => 'Vytvoriť nové pole',
	'editing_custom_field' => 'Upraviť pole &ldquo;%s&rdquo;',
	'nofields_desc' => 'Žiadne polia',

	'create_variable' => 'Vytvori novú premennú',
	'editing_variable' => 'Upraviť premennú &ldquo;%s&rdquo;',
	'novars_desc' => 'Žiadne premenné',

	// form fields
	'type' => 'Typ',
	'type_explain' => 'Typ obsahu, ktorému chcete pridať vlastné pole.',

	'field' => 'Typ poľa',
	'field_explain' => 'Typ vlastného poľa',

	'key' => 'Kľúč',
	'key_explain' => 'Unikátny názov pre Vaše pole',
	'key_missing' => 'Prosím, zadajte unikátny kľúč',
	'key_exists' => 'Tento kľúč sa už používa',

	'label' => 'Názov poľa',
	'label_explain' => 'Názov, ktorý sa zobrazí pri políčku',
	'label_missing' => 'Prosím, zadajte názov poľa',

	'attribute_type' => 'Typy súborov',
	'attribute_type_explain' => 'Typy súborov, ktoré budú akceptované. Pre viac typov súborov, oddeľte prípony čiarkami. Pre akceptovanie všetkých súborov nechajtre toto pole prázdne.',

	// images
	'attributes_size_width' => 'Maximálna šírka obrázka',
	'attributes_size_width_explain' => 'Obrázky, ktoré budú širššie ako táto hodnota budú zmenšené.',

	'attributes_size_height' => 'Maximálna výška obrázka',
	'attributes_size_height_explain' => 'Obrázky, ktoré budú vzššie ako táto hodnota budú zmenšené.',

	// custom vars
	'name' => 'Meno',
	'name_explain' => 'Unikátny názov',
	'name_missing' => 'Prosím, zadajte unikátne meno',
	'name_exists' => 'Toto meno sa už používa',

	'value' => 'Hodnota',
	'value_explain' => 'Dáta, ktoré chcete uložiť (maximálne 64kb)',
	'value_code_snipet' => 'Kód, ktorým premennú vložíte do šablony:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'Premenná bola vytvorená',
	'variable_updated' => 'Premenná bola upravená',
	'variable_deleted' => 'Premenná bola vymazaná',

	'field_created' => 'Pole bolo vytvorené',
	'field_updated' => 'Pole bolo upravené',
	'field_deleted' => 'Pole bolo vymazané'

);
