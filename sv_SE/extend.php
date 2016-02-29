<?php

return array(

	'extend' => 'Ut&ouml;ka',

	'fields' => 'Egna f&auml;lt',
	'fields_desc' => 'Skapa fler f&auml;lt',

	'variables' => 'Webbplatsvariabler',
	'variables_desc' => 'L&auml;gg till mer metadata',

	'create_field' => 'Skapa ett nytt f&auml;lt',
	'editing_custom_field' => '&Auml;ndrar f&auml;ltet &ldquo;%s&rdquo;',
	'nofields_desc' => 'Inga f&auml;lt &auml;n',

	'create_variable' => 'Skapa en ny variabel',
	'editing_variable' => '&Auml;ndrar variabeln &ldquo;%s&rdquo;',
	'novars_desc' => 'Inga variabler &auml;n',

	// form fields
	'type' => 'Typ',
	'type_explain' => 'Typen av inneh&aring;ll du vill l&auml;gga till detta f&auml;ltet.',

	'field' => 'F&auml;lt',
	'field_explain' => 'Text/HTML/media',

	'key' => 'Unik nyckel',
	'key_explain' => 'Den unika nyckeln f&ouml;r ditt f&auml;lt',
	'key_missing' => 'Ange en unik nyckel',
	'key_exists' => 'Nyckeln anv&auml;nds redan',

	'label' => 'Etikett',
	'label_explain' => 'L&auml;sbart namn f&ouml;r ditt f&auml;lt',
	'label_missing' => 'Gl&ouml;m inte att l&auml;gga till en etikett',

	'attribute_type' => 'Filtyper',
	'attribute_type_explain' => 'Kommaseparerad lista &ouml;ver till&aring;tna filtyper. Om listan &auml;r tom till&aring;ts alla.',

	// images
	'attributes_size_width' => 'Bildens maxbredd',
	'attributes_size_width_explain' => 'Bilden kommer att f&ouml;rminskas om den &auml;r bredare &auml;n maxbredden.',

	'attributes_size_height' => 'Bildens maxh&ouml;jd',
	'attributes_size_height_explain' => 'Bilden kommer att f&ouml;rminskas om den &auml;r bredare &auml;n maxh&ouml;jden.',

	// custom vars
	'name' => 'Namn',
	'name_explain' => 'Ett unikt namn.',
	'name_missing' => 'Ange ett unikt namn',
	'name_exists' => 'Namnet anv&auml;nds redan',

	'value' => 'V&auml;rde',
	'value_explain' => 'Datan du vill lagra (max 64kb).',
	'value_code_snipet' => 'Kodavsnitt att placera i ditt tema:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'Din variabel har skapats',
	'variable_updated' => 'Din variabel har uppdaterats',
	'variable_deleted' => 'Din variabel har tagits bort',

	'field_created' => 'Ditt f&auml;lt har skapats',
	'field_updated' => 'Ditt f&auml;lt har uppdaterats',
	'field_deleted' => 'Ditt f&auml;lt har tagits bort'

);