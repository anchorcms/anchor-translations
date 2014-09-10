<?php

return array(

	'extend' => 'Bővítmény',

	'fields' => 'Egyedi mezők',
	'fields_desc' => 'Új egyedi mező',

	'variables' => 'Honlap változók',
	'variables_desc' => 'Create additional metadata',

	'create_field' => 'Új mező',
	'editing_custom_field' => '&ldquo;%s&rdquo; mező szerkesztés',
	'nofields_desc' => 'Nincsenek mezők',

	'create_variable' => 'Új változó',
	'editing_variable' => '&ldquo;%s&rdquo; változó szerkesztés',
	'novars_desc' => 'Nincsenek változók',

	// form fields
	'type' => 'Típus',
	'type_explain' => 'A tartalom típusa',

	'field' => 'Mező',
	'field_explain' => 'Html bemenet típus',

	'key' => 'Egyedi kulcs',
	'key_explain' => 'A mező egyedi kulcsa',
	'key_missing' => 'Adjuk meg az egyedi kulcsot',
	'key_exists' => 'A kulcs már használatban van',

	'label' => 'Címke',
	'label_explain' => 'Human readable name for your field',
	'label_missing' => 'Adjuk meg a címkét',

	'attribute_type' => 'Fájl típusok',
	'attribute_type_explain' => 'Elfogadott fájltípusok lista. Vesszővel elválasztva.',

	// images
	'attributes_size_width' => 'Kép max szélesség',
	'attributes_size_width_explain' => 'A kép átméretezésre kerül ha nagyobb mint a maximum méret.',

	'attributes_size_height' => 'Kép max magasság',
	'attributes_size_height_explain' => 'A kép átméretezésre kerül ha nagyobb mint a maximum méret.',

	// custom vars
	'name' => 'Név',
	'name_explain' => 'Egyedi név',
	'name_missing' => 'Adjuk meg az egyedi nevet',
	'name_exists' => 'Ez a név már használatban van.',

	'value' => 'Érték',
	'value_explain' => 'The data you want to store (up to 64kb)',
	'value_code_snipet' => 'Snippet to insert into your template:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'A változó létrehozásra került.',
	'variable_updated' => 'A változó frissítésre került.',
	'variable_deleted' => 'A változó törlésre került.',

	'field_created' => 'A mező létrehozásra került.',
	'field_updated' => 'A mező frissítésre került.',
	'field_deleted' => 'A mező törlésre került.'

);
