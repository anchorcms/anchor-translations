<?php

return array(

	'extend' => '확장',

	'fields' => '커스텀 필드',
	'fields_desc' => '추가 필드 만들기',

	'variables' => '사이트 변수',
	'variables_desc' => '추가적인 메타데이터 만들기',

	'create_field' => '새 필드 만들기',
	'editing_custom_field' => '필드 &ldquo;%s&rdquo; 수정중',
	'nofields_desc' => '아직 필드가 없습니다',

	'create_variable' => '새 변수 만들기',
	'editing_variable' => '변수 &ldquo;%s&rdquo; 수정중',
	'novars_desc' => '아직 변수가 없습니다',

	// form fields
	'type' => '종류',
	'type_explain' => '이 필드에 추가하고자 하는 컨텐츠의 종류입니다.',

	'field' => '필드',
	'field_explain' => 'Html 입력 종류',

	'key' => '고유 키',
	'key_explain' => '필드의 고유 키입니다',
	'key_missing' => '고유 키를 입력 해주세요',
	'key_exists' => '키가 이미 사용되고 있습니다',

	'label' => '라벨',
	'label_explain' => '사람이 읽을 필드의 이름입니다',
	'label_missing' => '라벨을 입력 해주세요',

	'attribute_type' => '파일 종류',
	'attribute_type_explain' => '반점으로 허용할 파일 목록을 구분합니다. 공란으로 모두 허용합니다.',

	// images
	'attributes_size_width' => '이미지 최대 너비',
	'attributes_size_width_explain' => '이미지가 최대 크기보다 더 클 경우 크기가 조절됩니다',

	'attributes_size_height' => '이미지 최대 높이 ',
	'attributes_size_height_explain' => '이미지가 최대 크기보다 더 클 경우 크기가 조절됩니다',

	// custom vars
	'name' => '이름',
	'name_explain' => '고유한 이름입니다',
	'name_missing' => '고유한 이름을 입력 해주세요',
	'name_exists' => '이름이 이미 사용중입니다',

	'value' => '값',
	'value_explain' => '저장하길 원하는 데이터 (64kb 까지)',
	'value_code_snipet' => '템플릿에 삽입할 스니펫:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => '변수가 생성되었습니다',
	'variable_updated' => '변수가 갱신되었습니다',
	'variable_deleted' => '변수가 제거되었습니다',

	'field_created' => '필드가 생성되었습니다',
	'field_updated' => '필드가 갱신되었습니다',
	'field_deleted' => '필드가 제거되었습니다'

);
