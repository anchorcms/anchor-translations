<?php

return array(

	'extend' => 'توسيع',
	'extend_explain' => 'وسع موقعك الالكتروني',

	'fields' => 'حقل مخصص',
	'fields_desc' => 'انشئ حقل اختياري',

	'variables' => 'متغيرات الموقع الالكتروني',
	'variables_desc' => 'انشاء بيانات تعريفية اضافية',

	'create_field' => 'انشئ حقل جديد',
	'editing_custom_field' => 'عدل حقل &ldquo;%s&rdquo;',
	'nofields_desc' => 'لا يوجد حقول حتى الان',

	'create_variable' => 'انشئ متغيرات جديدة',
	'editing_variable' => 'عدل متغير &ldquo;%s&rdquo;',
	'novars_desc' => 'لا يوجد متغيرات حتى الان',

	// form fields
	'type' => 'نوع',
	'type_explain' => 'نوع المحتوى الذي تريد اضافه لهذا الحقل',

	'field' => 'حقل',
	'field_explain' => 'ادخال من نوع HTML',

	'key' => 'مفتاح مخصص',
	'key_explain' => 'مفتاح مخصص للحقل الخاص بك',
	'key_missing' => 'رجاءا ادخل مفتاح مخصص',
	'key_exists' => 'المفتاح مستخدم مسبقا',

	'label' => 'عنوان تعريفي',
	'label_explain' => 'اسم مقروء للحقل الخاص بك',
	'label_missing' => 'قم بادخال عنوان تعريفي رجاءا',

	'attribute_type' => 'نوع الحقل',
	'attribute_type_explain' => 'قائمة بانواع الملفات المقبولة مفصولة بفواصل , فارغة لقبول الكل',

	// images
	'attributes_size_width' => 'Iاقصى عرض للصورة',
	'attributes_size_width_explain' => 'سيتم تغيير حجم الصورة اذا كانت اكبر من اقصى حجم مسموح به',

	'attributes_size_height' => 'اقصى ارتفاع للصورة',
	'attributes_size_height_explain' => 'سيتم تغيير حجم الصورة اذا كانت اكبر من اقصى حجم مسموح به',

	// custom vars
	'name' => 'الاسم',
	'name_explain' => 'اسم مخصص',
	'name_missing' => 'رجاءا ادخل اسم مخصص',
	'name_exists' => 'الاسم مستخدم مسبقا',

	'value' => 'القيمة',
	'value_explain' => 'البيانات التي تريد خزنها (حتى 64kb)',
	'value_code_snipet' => 'مقتطفات لادراجها في القالب الخاص بك:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'تم انشاء المتغير الخاص بك',
	'variable_updated' => 'تم تحديث المتغير الخاص بك',
	'variable_deleted' => 'تم حذف المتغير الخاص بك',

	'field_created' => 'تم انشاء الحقل الخاص بك',
	'field_updated' => 'تم تحديث الحقل الخاص بك',
	'field_deleted' => 'تم حذف الحقل الخاص بك'

);
