<?php

return array(

	'extend' => 'Rozšíření',

	'fields' => 'Vlastní pole',
	'fields_desc' => 'Přidání dalších polí',

	'variables' => 'Proměnné',
	'variables_desc' => 'Přidání vlastních metadat',

	'create_field' => 'Vytvořit nové pole',
	'editing_custom_field' => 'Upravujete pole &ldquo;%s&rdquo;',
	'nofields_desc' => 'Nemáte žádná vlastní pole',

	'create_variable' => 'Vytvořit novou proměnnou',
	'editing_variable' => 'Upravujete proměnnou &ldquo;%s&rdquo;',
	'novars_desc' => 'Nemáte žádné vlastní proměnné',

	// form fields
	'type' => 'Typ obsahu',
	'type_explain' => 'Typ obsahu, ke kterému chcete přiřadit toto pole.',

	'field' => 'Pole',
	'field_explain' => 'HTML typ pole',

	'key' => 'Unikátní klíč',
	'key_explain' => 'Unikátní klíč pro vaše pole',
	'key_missing' => 'Zadejte prosím unikátní klíč',
	'key_exists' => 'Tento klíč už existuje',

	'label' => 'Nadpis',
	'label_explain' => 'Nadpis pole, který vidí uživatel',
	'label_missing' => 'Zadejte prosím text nadpisu',

	'attribute_type' => 'Typy souborů',
	'attribute_type_explain' => 'Seznam podporovaných typů souborů, odděleých čárkami. Pokud chcete povolit vše, nechte pole prázdné.',

	// images
	'attributes_size_width' => 'Maximální šířka obrázku',
	'attributes_size_width_explain' => 'Větší obrázky budou oříznuty',

	'attributes_size_height' => 'Maximální výška obrázku',
	'attributes_size_height_explain' => 'Větší obrázky budou oříznuty',

	// custom vars
	'name' => 'Název',
	'name_explain' => 'Unikátní název',
	'name_missing' => 'Zadejte prosím unikátní název',
	'name_exists' => 'Proměnná s tímto názvem již existuje',

	'value' => 'Hodnota',
	'value_explain' => 'Obsah proměnné (max. 64Kb)',
	'value_code_snipet' => 'Kód pro vložení do šablony:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'Proměnná byla uložena',
	'variable_updated' => 'Proměnná byla aktualizována',
	'variable_deleted' => 'Proměnná byla smazána',

	'field_created' => 'Pole bylo vytvořeno',
	'field_updated' => 'Pole bylo aktualizováno',
	'field_deleted' => 'Pole bylo smazáno'

);
