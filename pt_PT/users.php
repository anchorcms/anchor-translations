<?php

return [

    'users' => 'Utilizadores',

    'create_user' => 'Criar um novo utilizador',
    'add_user' => 'Adicionar novo utilizador',
    'editing_user' => 'A editar o perfil de %s',
    'remembered' => 'Eu sei a minha Palavra Passe',
    'forgotten_password' => 'Esqueceu a sua Palavra Passe?',

    // roles
    'administrator' => 'Administrador',
    'administrator_explain' => '',

    'editor' => 'Editor',
    'editor_explain' => '',

    'user' => 'Utilizador Comum',
    'user_explain' => '',

    // form fields
    'real_name' => 'Nome Real',
    'real_name_explain' => '',

    'bio' => 'Biografia',
    'bio_explain' => '',

    'status' => 'Estado',
    'status_explain' => '',

    'role' => 'Papel',
    'role_explain' => '',

    'username' => 'Nome Utilizador',
    'username_explain' => '',
    'username_missing' => 'Coloque um Nome de Utilizador, tem de ter no mínimo %s caracteres',

    'password' => 'Palavra Passe',
    'password_explain' => '',
    'password_too_short' => 'A Palavra Passe tem de ter no mínimo %s caracteres',

    'new_password' => 'Nova Palavra Passe',

    'email' => 'Email',
    'email_explain' => '',
    'email_missing' => 'Coloque um email válido',
    'email_not_found' => 'Perfil não encontrado.',

    // messages
    'updated' => 'Perfil actualizado.',
    'created' => 'Perfil criado.',
    'deleted' => 'Perfil eliminado.',
    'delete_error' => 'Não é possível aliminar o seu próprio perfil',
    'login_error' => 'O Nome de Utilizador ou a Palavra Passe estão incorrectos.',
    'logout_notice' => 'A sua sessão terminou.',
    'recovery_sent' => 'Foi enviado um email a confirmar a sua alteração de Palavra Passe.',
    'recovery_expired' => 'O ficha da redefinição da Palavra Passe expirou, por favor tente de novo.',
    'password_reset' => 'A nova Palavra Passe foi definida. Vá e entre já!',

    // password recovery email
    'recovery_subject' => 'A Palavra Passe foi redefinida',
    'recovery_message' => 'Você pediu para redefinir a Palavra Passe.' .
        'Para continuar carregue na ligação abaixo.' . PHP_EOL . '%s',

];
