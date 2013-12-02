<?php

return array(

	'extend' => '拡張',

	'fields' => 'カスタム フィールド',
	'fields_desc' => '追加のフィールドを作成',

	'variables' => 'サイト内変数',
	'variables_desc' => '追加のメタデータを作成',

	'create_field' => '新規フィールドの作成',
	'editing_custom_field' => ' &ldquo;%s&rdquo; フィールドの編集',
	'nofields_desc' => 'まだフィールドがありません。',

	'create_variable' => '新規サイト内変数の作成',
	'editing_variable' => '変数 &ldquo;%s&rdquo; の編集',
	'novars_desc' => 'まだ変数がありません。',

	// form fields
	'type' => 'タイプ',
	'type_explain' => 'フィールドに追加するコンテンツの種類を入力します。',

	'field' => 'フィールド',
	'field_explain' => 'Html input type',

	'key' => '固有のキー',
	'key_explain' => 'フィールドに使用する固有のキーです。',
	'key_missing' => '固有のキーを入力してください。',
	'key_exists' => '入力されたキーは既に使用されています。',

	'label' => 'ラベル',
	'label_explain' => '分かりやすい名前を付けてください。',
	'label_missing' => 'ラベルを入力してください。',

	'attribute_type' => 'ファイル タイプ',
	'attribute_type_explain' => '許可するファイルタイプをカンマ区切りで入力します。空欄で全て許可します。',

	// images
	'attributes_size_width' => '画像の最大横サイズ',
	'attributes_size_width_explain' => '最大横サイズよりも大きな画像は自動的にリサイズされます。',

	'attributes_size_height' => '画像の最大縦サイズ',
	'attributes_size_height_explain' => '最大縦サイズよりも大きな画像は自動的にリサイズされます。',

	// custom vars
	'name' => '名前',
	'name_explain' => '固有の名前',
	'name_missing' => '重複しない固有の名前を入力してください。',
	'name_exists' => '入力された名前は既に使用されています。',

	'value' => '値',
	'value_explain' => '保存したいデータを入力してください (最大 64kb)。',
	'value_code_snipet' => 'テンプレートに挿入するコード:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'サイト内変数を作成しました。',
	'variable_updated' => 'サイト内変数を更新しました。',
	'variable_deleted' => 'サイト内変数を削除しました。',

	'field_created' => 'フィールドを作成しました。',
	'field_updated' => 'フィールドを更新しました。',
	'field_deleted' => 'フィールドを削除しました。'

);