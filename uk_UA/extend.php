<?php

return array(

	'extend' => 'Доповнення',

	'fields' => 'Додаткові поля',
	'fields_desc' => 'Створити додаткове поле',

	'variables' => 'Глобальні змінні',
	'variables_desc' => 'Створити додаткові налаштування',

	'create_field' => 'Створити нове поле',
	'editing_custom_field' => 'Редагування поля &ldquo;%s&rdquo;',
	'nofields_desc' => 'Ще немає жодного поля',

	'create_variable' => 'Створити нову змінну',
	'editing_variable' => 'Відредагувати змінну &ldquo;%s&rdquo;',
	'novars_desc' => 'Ще немає змінних',

	// form fields
	'type' => 'Тип',
	'type_explain' => 'Тип контенту, для якого буде додано це поле.',

	'field' => 'Поле',
	'field_explain' => 'Вихідний тип поля',

	'key' => 'Ключ',
	'key_explain' => 'Унікальний ключ для вашого поля',
	'key_missing' => 'Будь ласка, введіть унікальний ключ',
	'key_exists' => 'Заданий ключ вже використовується',

	'label' => 'Назва',
	'label_explain' => 'Назва для поля',
	'label_missing' => 'Будь ласка, введіть назву поля',

	'attribute_type' => 'Типи файлів',
	'attribute_type_explain' => 'Розділяйте список типів прийнятих файлів комами. Залишіть поле порожнім, щоб прийняти всі типи файлів.',

	// images
	'attributes_size_width' => 'Макс. ширина зображення',
	'attributes_size_width_explain' => 'Зображення буде відмасштабоване, якщо воно більше за максимальний розмір',

	'attributes_size_height' => 'Макс. висота зображення',
	'attributes_size_height_explain' => 'Зображення буде відмасштабоване, якщо воно більше за максимальний розмір',

	// custom vars
	'name' => 'Ім’я',
	'name_explain' => 'Унікальне ім’я',
	'name_missing' => 'Будь ласка, введіть ім’я',
	'name_exists' => 'Зазначене ім’я вже зайнято',

	'value' => 'Вміст',
	'value_explain' => 'Дані, які ви хочете зберегти (до 64кб)',
	'value_code_snipet' => 'Код, для додавання у ваш шаблон:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'Ваша змінна була створена',
	'variable_updated' => 'Ваша змінна була оновлена',
	'variable_deleted' => 'Ваша змінна була видалена',

	'field_created' => 'Ваше поле було створено',
	'field_updated' => 'Ваше поле було оновлено',
	'field_deleted' => 'Ваше поле було видалено'

);
