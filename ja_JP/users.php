<?php

return array(

	'users' => 'ユーザー',

	'create_user' => '新規ユーザーの追加',
	'add_user' => 'ユーザーの追加',
	'editing_user' => '%s のプロフィールを編集中',
	'remembered' => 'パスワードを思い出しました',
	'forgotten_password' => 'パスワードを忘れましたか?',

	// roles
	'administrator' => '管理人',
	'administrator_explain' => '',

	'editor' => '編集者',
	'editor_explain' => '',

	'user' => 'ユーザー',
	'user_explain' => '',

	// form fields
	'real_name' => '表示名',
	'real_name_explain' => '',

	'bio' => '自己紹介',
	'bio_explain' => '',

	'status' => 'ステータス',
	'status_explain' => '',

	'role' => '種類',
	'role_explain' => '',

	'username' => 'ユーザー名',
	'username_explain' => '',
	'username_missing' => 'ユーザー名は %s 文字以上で入力してください。',

	'password' => 'パスワード',
	'password_explain' => '',
	'password_too_short' => 'パスワードは %s 文字以上で入力してください。',

	'new_password' => '新しいパスワード',

	'email' => 'メールアドレス',
	'email_explain' => '',
	'email_missing' => '正しいメールアドレスを入力してください。',
	'email_not_found' => 'プロフィールが見つかりませんでした。',

	// messages
	'updated' => 'プロフィールが更新されました。',
	'created' => 'プロフィールが作成されました。',
	'deleted' => 'プロフィールが削除されました。',
	'delete_error' => '自分のプロフィールは削除できません。',
	'login_error' => 'ユーザー名かパスワードが間違っています。',
	'logout_notice' => 'ログアウトしました。',
	'recovery_sent' => 'パスワード変更の確認メールを送信しました。',
	'recovery_expired' => 'パスワード復旧トークンの期限が切れています。もう一度やり直してください。',
	'password_reset' => '新しいパスワードが設定されました。ログインしてみてください!',

	// password recovery email
	'recovery_subject' => 'パスワードのリセット',
	'recovery_message' => 'パスワードのリセットが要求されました。' .
		'以下のリンクから次に進んでください。' . PHP_EOL . '%s',

);