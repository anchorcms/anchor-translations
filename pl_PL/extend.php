<?php

return array(

	'extend' => 'Zaawansowane',

	'fields' => 'Własne pola',
	'fields_desc' => 'Utwórz dodatkowe pola formularza',

	'variables' => 'Zmienne strony',
	'variables_desc' => 'Utwórz dodatkowe zmienne do wykorzystania w kodzie strony',

	'create_field' => 'Utwórz nowe pole',
	'editing_custom_field' => 'Edytujesz pole &ldquo;%s&rdquo;',
	'nofields_desc' => 'Brak pól',

	'create_variable' => 'Utwórz nową zmienną',
	'editing_variable' => 'Edytujesz zmienną &ldquo;%s&rdquo;',
	'novars_desc' => 'Brak zmiennych',

	// form fields
	'type' => 'Przeznaczenie',
	'type_explain' => 'Wybierz czy pole ma być przeznaczone dla artykułów czy dla stron',

	'field' => 'Pole',
	'field_explain' => 'Typ pola formularza',

	'key' => 'Unikatowa nazwa',
	'key_explain' => 'Uniaktowa nazwa pola',
	'key_missing' => 'Podaj unikatową nazwę',
	'key_exists' => 'Podana unikatowa nazwa już istnieje',

	'label' => 'Etykieta',
	'label_explain' => 'Nazwa etykiety dla tego pola',
	'label_missing' => 'Podaj nazwę etykiety',

	'attribute_type' => 'Typy plików',
	'attribute_type_explain' => 'Podaj rozszerzenia plików jakie mają być dozwolone lub pozostaw puste dla wszystkich typów',

	// images
	'attributes_size_width' => 'Szerokość obrazka',
	'attributes_size_width_explain' => 'Maksymalna szerokość obrazka, jeśli bedize on szerszy to jego rozmiar dostanie dopasowany',

	'attributes_size_height' => 'Wysokość obrazka',
	'attributes_size_height_explain' => 'Maksymalna wysokośc obrazka, jeśli bedize on szerszy to jego rozmiar dostanie dopasowany',

	// custom vars
	'name' => 'Nazwa',
	'name_explain' => 'Unikatowa nazwa zmiennej',
	'name_missing' => 'Podaj unikatową nazwę zmiennej',
	'name_exists' => 'Podana unikatowa nazwa już jest używana',

	'value' => 'Wartość',
	'value_explain' => 'Przypisz wartość do zmiennej, maksylamnie 64kb',
	'value_code_snipet' => 'Kod do wykorzytania w szablonie:<br>
		<code>' . ('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'Zmienna została zapisana',
	'variable_updated' => 'Zmienna została zaktualizowana',
	'variable_deleted' => 'Zmienna została usunięta',

	'field_created' => 'Pole zostało zapisane',
	'field_updated' => 'Pole zostało zaktualizowane',
	'field_deleted' => 'Pole zostało usunięte'

);
