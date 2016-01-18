<?php

return array(

	'extend' => 'Mở rộng',

	'fields' => 'Trường tùy biến',
	'fields_desc' => 'Tạo ra một trường dữ liệu mới',

	'variables' => 'Biến',
	'variables_desc' => 'Tạo ra một dữ liệu cho trang web',

	'create_field' => 'Tạo trường mới',
	'editing_custom_field' => 'Chỉnh sửa trường &ldquo;%s&rdquo;',
	'nofields_desc' => 'Chưa có trường dữ liệu nào',

	'create_variable' => 'Tạo mới biến',
	'editing_variable' => 'Chỉnh sửa biến&ldquo;%s&rdquo;',
	'novars_desc' => 'Chưa có biến nào',

	// form fields
	'type' => 'Kiểu',
	'type_explain' => 'Kiểu nội dung bạn muốn gán cho trường.',

	'field' => 'Trường',
	'field_explain' => 'Kiểu nhập liệu Html',

	'key' => 'Khóa của trường',
	'key_explain' => 'Khóa duy nhất cho trường',
	'key_missing' => 'Vui lòng nhập khóa cho trường',
	'key_exists' => 'Khóa đã tồn tại',

	'label' => 'Nhãn',
	'label_explain' => 'Nhãn cho trường của bạn',
	'label_missing' => 'Vui lòng nhập nhãn',

	'attribute_type' => 'Các kiểu tệp',
	'attribute_type_explain' => 'Các kiểu tệp cách nhau bởi dấu phẩy, để trống nếu chấp nhận tất cả các kiểu.',

	// images
	'attributes_size_width' => 'Chiều dài tối tối đa của ảnh',
	'attributes_size_width_explain' => 'Ảnh sẽ bị thay đổi kích thước nếu có chiểu dài lớn hơn chiều dài tối đa',

	'attributes_size_height' => 'Chiều cao tối đa của ảnh',
	'attributes_size_height_explain' => 'Ảnh sẽ bị thay đổi kích thước nếu có chiều cao lớn hơn chiều cao tối đa',

	// custom vars
	'name' => 'Tên',
	'name_explain' => 'Tên biến',
	'name_missing' => 'Vui lòng nhập tên biến',
	'name_exists' => 'Tên này đã tồn tại',

	'value' => 'Giá trị',
	'value_explain' => 'Dữ liệu bạn muốn lưu (kích thước có thể lên tới 64kb)',
	'value_code_snipet' => 'Mã lệnh sẵn để gắn vào mẫu:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'Biến vừa được tạo',
	'variable_updated' => 'Biến vừa được cập nhật',
	'variable_deleted' => 'Biến vừa bị xóa',

	'field_created' => 'Trường vừa được tạo',
	'field_updated' => 'Trường vừa được cập nhât',
	'field_deleted' => 'Trường vừa bị xóa'

);