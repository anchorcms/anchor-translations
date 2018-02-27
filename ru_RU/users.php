<?php

return array(

    'users' => 'Пользователи',

    'create_user' => 'Создать пользователя',
    'add_user' => 'Добавить пользователя',
    'editing_user' => 'Редактировать %s&rsquo;s Профиль',
    'remembered' => 'Я знаю свой пароль',
    'forgotten_password' => 'Забыли пароль?',

    // roles
    'administrator' => 'Админи',
    'administrator_explain' => '',

    'editor' => 'Редактор',
    'editor_explain' => '',

    'user' => 'Пользователь',
    'user_explain' => '',

    // form fields
    'real_name' => 'Настоящее имя',
    'real_name_explain' => '',

    'bio' => 'О себе',
    'bio_explain' => '',

    'status' => 'Статус',
    'status_explain' => '',

    'role' => 'Роль',
    'role_explain' => '',

    'username' => 'Имя пользователя(username)',
    'username_explain' => '',
    'username_missing' => 'Пожалуйста, введите имя пользователя, минимум %s символов',

    'password' => 'Пароль',
    'password_explain' => '',
    'password_too_short' => 'Пароль должен содержать минимум %s символов',

    'new_password' => 'Новый Пароль',

    'email' => 'Email',
    'email_explain' => '',
    'email_missing' => 'Пожалуйста, введите корректный Email',
    'email_not_found' => 'Профиль не найден.',

    // messages
    'updated' => 'Профиль обновлен.',
    'created' => 'Профиль создан.',
    'deleted' => 'Профиль удален.',
    'delete_error' => 'Вы не можете удалить Ваш профиль',
    'login_error' => 'Неверное имя пользователя или пароль.',
    'logout_notice' => 'Вы вышли из системы.',
    'recovery_sent' => 'Мы отправили вам электронное письмо для подтверждения смены пароля.',
    'recovery_expired' => 'Истек срок действия токена для восстановления пароля, повторите попытку..',
    'password_reset' => 'Ваш новый пароль установлен. Войдите прямо сейчас!!',

    // password recovery email
    'recovery_subject' => 'Восстановление пароля',
    'recovery_message' => 'Вы запросили сброс пароля.' .
        'Чтобы продолжить, перейдите по ссылке ниже.' . PHP_EOL . '%s',

);
