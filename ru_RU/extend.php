<?php

return array(

	'extend' => 'Настройки',

	'fields' => 'Дополнительные поля',
	'fields_desc' => 'Дополнительные поля в записях и страницах',

	'variables' => 'Глобальные переменные',
	'variables_desc' => 'Можно использовать в шаблоне блога',

	'create_field' => 'Создать поле',
	'editing_custom_field' => 'Редактирование &ldquo;%s&rdquo;',
	'nofields_desc' => 'Здесь пусто',

	'create_variable' => 'Создать переменную',
	'editing_variable' => 'Редактироввание &ldquo;%s&rdquo;',
	'novars_desc' => 'Здесь пусто',

	// form fields
	'type' => 'Тип',
	'type_explain' => 'Тип контента, где поле будет активно',

	'field' => 'Поле',
	'field_explain' => 'Оператор html',

	'key' => 'Ключ',
	'key_explain' => 'Уникальное обозначение поля',
	'key_missing' => 'Пожалуйста, придумайте какой-нибудь ключ',
	'key_exists' => 'Указанный ключ уже существует',

	'label' => 'Название',
	'label_explain' => 'Название для поля',
	'label_missing' => 'Пожалуйста, введите название',

	'attribute_type' => 'Типы',
	'attribute_type_explain' => 'Через запятую',

	// images
	'attributes_size_width' => 'Ширина',
	'attributes_size_width_explain' => 'Максимальная ширина картинки',

	'attributes_size_height' => 'Высота',
	'attributes_size_height_explain' => 'Максимальная высота картинки',

	// custom vars
	'name' => 'Имя',
	'name_explain' => 'Должно быть уникальным',
	'name_missing' => 'Пожалуйста, подумайте название переменной',
	'name_exists' => 'Указанное имя уже занято',

	'value' => 'Содержимое',
	'value_explain' => 'Значение переменной',
	'value_code_snipet' => 'Код для вставки в шаблон:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'Переменная успешно добавлена',
	'variable_updated' => 'Настройки сохранены',
	'variable_deleted' => 'Переменная удалена',

	'field_created' => 'Поле успешно создано',
	'field_updated' => 'Настройки сохранены',
	'field_deleted' => 'Поле удалено'

);
