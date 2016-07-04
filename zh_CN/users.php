<?php

return array(

	'users' => '用户',

	'create_user' => '新建用户',
	'add_user' => '添加新用户',
	'editing_user' => '编辑用户 %s&rsquo;s Profile',
	'remembered' => '我记得密码',
	'forgotten_password' => '忘记密码了？',

	// roles
	'administrator' => '管理员',
	'administrator_explain' => '',

	'editor' => '编辑',
	'editor_explain' => '',

	'user' => '用户',
	'user_explain' => '',

	// form fields
	'real_name' => '真实姓名',
	'real_name_explain' => '',

	'bio' => '简介',
	'bio_explain' => '',

	'status' => '状态',
	'status_explain' => '',

	'role' => '角色',
	'role_explain' => '',

	'username' => '用户名',
	'username_explain' => '',
	'username_missing' => '请输入一个不短于 %s 个字符的用户名',

	'password' => '密码',
	'password_explain' => '',
	'password_too_short' => '请输入一个不短于 %s 个字符的密码',

	'new_password' => '新密码',

	'email' => 'Email地址',
	'email_explain' => '',
	'email_missing' => '请输入一个有效的Email地址',
	'email_not_found' => '找不到个人资料',

	// messages
	'updated' => '用户资料已更新.',
	'created' => '用户资料已新建.',
	'deleted' => '用户资料已删除.',
	'delete_error' => '您不能删除自己的个人资料',
	'login_error' => '用户名或密码错误',
	'logout_notice' => '您已注销',
	'recovery_sent' => '已向您发送了一封邮件来确认密码重置',
	'recovery_expired' => '密码重置令牌已过期，请重试',
	'password_reset' => '新密码已设置，可以登录啦！',

	// password recovery email
	'recovery_subject' => '密码重置',
	'recovery_message' => '您要求重置密码。' .
		'若要继续，请点击此链接' . PHP_EOL . '%s',

);