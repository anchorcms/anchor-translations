<?php

return array(

	'users' => 'Użytkownicy',

	'create_user' => 'Dodaj nowego użytkownika',
	'add_user' => 'Dodaj nowego użytkownika',
	'editing_user' => 'Edytujesz profil &ldquo;%s&rdquo',
	'remembered' => 'Znam swoje hasło',
	'forgotten_password' => 'Zapomniałeś hasła?',

	// roles
	'administrator' => 'Administrator',
	'administrator_explain' => '',

	'editor' => 'Edytor',
	'editor_explain' => '',

	'user' => 'Użytkownik',
	'user_explain' => '',

	// form fields
	'real_name' => 'Imię i nazwisko',
	'real_name_explain' => '',

	'bio' => 'Opis',
	'bio_explain' => '',

	'status' => 'Status',
	'status_explain' => '',

	'role' => 'Rola',
	'role_explain' => '',

	'username' => 'Login',
	'username_explain' => '',
	'username_missing' => 'Podaj login, musi zawierać przynajmniej %s znaków',

	'password' => 'Hasło',
	'password_explain' => '',
	'password_too_short' => 'Hasło mi zawierać przynajmniej %s znaków',

	'new_password' => 'Nowe hasło',

	'email' => 'Email',
	'email_explain' => '',
	'email_missing' => 'Podaj poprawny adres email',
	'email_not_found' => 'Nie znaleziono adresu email',

	// messages
	'updated' => 'Profil uzytkownia został zaktualizowany',
	'created' => 'Profil uzytkownia został zapisany',
	'deleted' => 'Profil uzytkownia został usunięty',
	'delete_error' => 'Nie możesz usunąć własnego proilu',
	'login_error' => 'Niepoprawny login lub hasło',
	'logout_notice' => 'Wylogowano pomyślnie',
	'recovery_sent' => 'Został wysłany email w celu potwierdzenia zmiany hasła.',
	'recovery_expired' => 'Odzyskanie hasła wygasło, spróbuj ponowwnie.',
	'password_reset' => 'Twoje nowe hasło zostało zapisane. Możesz się już zalogować.',

	// password recovery email
	'recovery_subject' => 'Resetuj hasło',
	'recovery_message' => 'Zgłosiłeś reset Twojego hasła.' .
		'Aby kontynuować wejdź na link.' . PHP_EOL . '%s',

);