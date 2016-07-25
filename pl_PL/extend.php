<?php

return array(
	// TODO: zbyt techniczne słownictwo

	'extend' => 'Rozszerz',

	'fields' => 'Własne pola',
	'fields_desc' => 'Utwórz dodatkowe pola formularza',

	'pagetypes' => 'Typy stron',
	'pagetypes_desc' => 'Utwórz dodatkowy typ strony',

	'variables' => 'Zmienne strony',
	'variables_desc' => 'Utwórz dodatkowe metadane',

	'create_field' => 'Utwórz nowe pole',
	'editing_custom_field' => 'Edytujesz pole &ldquo;%s&rdquo;',
	'nofields_desc' => 'Brak pól',

	'create_variable' => 'Utwórz nową zmienną',
	'editing_variable' => 'Edytujesz zmienną &ldquo;%s&rdquo;',
	'novars_desc' => 'Brak zmiennych',

	'create_pagetype' => 'Utwórz nowy typ strony',
	'editing_pagetype' => 'Edytujesz typ strony &ldquo;%s&rdquo;',
	'notypes_desc' => 'Brak typów stron',

	// form fields
	'type' => 'Przeznaczenie',
	'type_explain' => 'Wybierz dla jakich elementów ma być przypisane pole',

	'pagetype' => 'Page Type',
	'pagetype_explain' => 'Na stronach z jakim typem ma zostać dodane to pole.',

	'field' => 'Pole',
	'field_explain' => 'Typ pola formularza',

	'key' => 'Unikalna nazwa',
	'key_explain' => 'Unikalna nazwa pola',
	'key_missing' => 'Podaj unikalną nazwę',
	'key_exists' => 'Podana unikalna nazwa już istnieje',

	'label' => 'Etykieta',
	'label_explain' => 'Nazwa etykiety dla tego pola',
	'label_missing' => 'Podaj nazwę etykiety',

	'attribute_type' => 'Typy plików',
	'attribute_type_explain' => 'Podaj rozszerzenia plików jakie mają być dozwolone lub pozostaw puste dla wszystkich typów',

	// images
	'attributes_size_width' => 'Szerokość obrazka',
	'attributes_size_width_explain' => 'Maksymalna szerokość obrazka, jeśli będzie on szerszy to jego rozmiar dostanie dopasowany',

	'attributes_size_height' => 'Wysokość obrazka',
	'attributes_size_height_explain' => 'Maksymalna wysokość obrazka, jeśli będzie on wyższy to jego rozmiar dostanie dopasowany',

	// custom vars
	'name' => 'Nazwa',
	'name_explain' => 'Unikalna nazwa',
	'name_missing' => 'Podaj unikalną nazwę zmiennej',
	'name_exists' => 'Podana nazwa już jest używana',

	'value' => 'Wartość',
	'value_explain' => 'Przypisz wartość do zmiennej, maksylamnie 64kb',
	'value_code_snipet' => 'Kod do wykorzytania w szablonie:<br>
		<code>' . ('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'Zmienna została zapisana',
	'variable_updated' => 'Zmienna została zaktualizowana',
	'variable_deleted' => 'Zmienna została usunięta',

	'pagetype_created' => 'Typ strony został zapisany',
	'pagetype_updated' => 'Typ strony został zaktualizowany',
	'pagetype_deleted' => 'Typ strony został usunięty',

	'field_created' => 'Pole zostało zapisane',
	'field_updated' => 'Pole zostało zaktualizowane',
	'field_deleted' => 'Pole zostało usunięte'

);
