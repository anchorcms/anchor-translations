<?php

return array(

    'extend' => 'Настройки',

    'fields' => 'Свои поля',
    'fields_desc' => 'Создать дополнительное поле',

    'pagetypes' => 'Типы страниц сайта',
    'pagetypes_desc' => 'Создать другие типы страниц',

    'variables' => 'Переменные сайта',
    'variables_desc' => 'Создать дополнительные метаданные',

    'create_field' => 'Создать новое поле',
    'editing_custom_field' => 'Редактировать поле &ldquo;%s&rdquo;',
    'nofields_desc' => 'Полей нет',

    'create_variable' => 'Создать новую переменную',
    'editing_variable' => 'Редактировать переменную &ldquo;%s&rdquo;',
    'novars_desc' => 'Переменных нет',

    'create_pagetype' => 'Создать новый тип страниц',
    'editing_pagetype' => 'Редактировать тип страницы &ldquo;%s&rdquo;',

    // form fields
    'type' => 'Тип',
    'type_explain' => 'Тип контента, который Вы хотите добавить к этому полю.',
    'notypes_desc' => 'Типы страниц не созданы',

    'pagetype' => 'Тип Страницы',
    'pagetype_explain' => 'Тип страницы, который Вы хотите добавить к этому полю.',

    'field' => 'Поле',
    'field_explain' => 'Html input type (тип input в HTML)',

    'key' => 'Уникальный Ключ(Key)',
    'key_explain' => 'Уникальный ключ для Вашего поля',
    'key_missing' => 'Пожалуйста, введите уникальный ключ',
    'key_exists' => 'Такой ключ уже существует',

    'label' => 'Название поля(Label)',
    'label_explain' => 'Человеко-читаемое название для Вашего поля',
    'label_missing' => 'Пожалуйста, введите название',

    'attribute_type' => 'Типы файлов',
    'attribute_type_explain' => 'Список допустимых типов файлов, разделенных запятыми, если пусто, то допустимы все.',

    // images
    'attributes_size_width' => 'Максимальная Ширина Изображения',
    'attributes_size_width_explain' => 'Размер Изображений измениться, если исходная ширина больше, чем заданная Максимальная Ширина',

    'attributes_size_height' => 'Максимальная Выссота Изображения',
    'attributes_size_height_explain' => 'Размер Изображений измениться, если исходная высота больше, чем заданная Максимальная Высота',

    // custom vars
    'name' => 'Имя',
    'name_explain' => 'Уникальное имя',
    'name_missing' => 'Пожалуйста, введите уникальное имя',
    'name_exists' => 'Это имя уже используется',

    'value' => 'Значение',
    'value_explain' => 'Данные, которые Вы хотите сохранить (до 64kb)',
    'value_code_snipet' => 'Фрагмент(сниппет) для вставки в Ваш шаблон:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

    // messages
    'variable_created' => 'Переменная создана',
    'variable_updated' => 'Переменная обновлена',
    'variable_deleted' => 'Переменная удалена',

    'pagetype_created' => 'Тип страницы создан',
    'pagetype_updated' => 'Тип страницы обновлен',
    'pagetype_deleted' => 'Тип страницы удален',

    'field_created' => 'Поле создано',
    'field_updated' => 'Поле обновлено',
    'field_deleted' => 'Поле удалено'

);
