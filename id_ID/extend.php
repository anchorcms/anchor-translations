<?php

return array(

	'extend' => 'Perluas',

	'fields' => 'Custom Fields',
	'fields_desc' => 'Buat field tambahan',

	'variables' => 'Variabel Situs',
	'variables_desc' => 'Buat metadata tambahan',

	'create_field' => 'Buat field baru',
	'editing_custom_field' => 'Sunting field &ldquo;%s&rdquo;',
	'nofields_desc' => 'Belum ada field',

	'create_variable' => 'Buat variabel baru',
	'editing_variable' => 'Sunting variabel &ldquo;%s&rdquo;',
	'novars_desc' => 'Belum ada variabel',

	// form fields
	'type' => 'Tipe',
	'type_explain' => 'Tipe dari konten yang ingin ditambahkan.',

	'field' => 'Field',
	'field_explain' => 'Tipe masukkan HTML',

	'key' => 'Kunci unik',
	'key_explain' => 'Kunci unik untuk field Anda',
	'key_missing' => 'Silahkan masukkan kunci unik',
	'key_exists' => 'Kunci telah dipakai',

	'label' => 'Label',
	'label_explain' => 'Nama yang dapat dibaca manusia untuk field Anda',
	'label_missing' => 'Silahkan masukkan label',

	'attribute_type' => 'Tipe Berkas',
	'attribute_type_explain' => 'Gunakan koma untuk menerima tipe berkas, kosongkan untuk menerima semuanya.',

	// images
	'attributes_size_width' => 'Maksimal lebar gambar',
	'attributes_size_width_explain' => 'Gambar akan diubah ukuran jika lebih besar dari ukuran maksimal',

	'attributes_size_height' => 'Maksimal tinggi gambar',
	'attributes_size_height_explain' => 'Gambar akan diubah ukuran jika lebih besar dari ukuran maksimal',

	// custom vars
	'name' => 'Nama',
	'name_explain' => 'Nama yang unik',
	'name_missing' => 'Silahkan masukkan nama yang unik',
	'name_exists' => 'Nama telah dipakai',

	'value' => 'Nilai',
	'value_explain' => 'Data yang akan disimpan (sampai dengan 64kb)',
	'value_code_snipet' => 'Potongan untuk disisipkan ke template Anda:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'Variabel Anda telah dibuat',
	'variable_updated' => 'Variabel Anda telah diperbarui',
	'variable_deleted' => 'Variabel Anda telah dihapus',

	'field_created' => 'Field Anda telah dibuat',
	'field_updated' => 'Field Anda telah diperbarui',
	'field_deleted' => 'Field Anda telah dihapus'

);
