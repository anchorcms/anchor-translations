<?php

return array(

	'extend' => 'Expandir',

	'fields' => 'Campos personalizados',
	'fields_desc' => 'Criar campos adicionais',

	'variables' => 'Variáveis do site',
	'variables_desc' => 'Criar metadados adicionais',

	'create_field' => 'Criar um novo campo',
	'editing_custom_field' => 'A editar campo &ldquo;%s&rdquo;',
	'nofields_desc' => 'Nenhum campo ainda',

	'create_variable' => 'Criar nova variável',
	'editing_variable' => 'A editar variável &ldquo;%s&rdquo;',
	'novars_desc' => 'Nenhuma variável ainda',

	// form fields
	'type' => 'Tipo',
	'type_explain' => 'Tipo de conteúdo onde quer adicionar este campo.',

	'field' => 'Campo',
	'field_explain' => 'Tipo de campo Html',

	'key' => 'Chave única',
	'key_explain' => 'Chave única para este campo',
	'key_missing' => 'Insira uma chave única',
	'key_exists' => 'Esta chave já está a ser usada',

	'label' => 'Etiqueta',
	'label_explain' => 'Nome legível para ser lido junto a este campo',
	'label_missing' => 'Adicione uma etiqueta',

	'attribute_type' => 'Extensões',
	'attribute_type_explain' => 'Lista de tipos de ficheiro permitidos, separados por vírgulas.<br>Deixar vazio para permitir todos.',

	// images
	'attributes_size_width' => 'Largura máxima da imagem',
	'attributes_size_width_explain' => 'As imagens serão redimensionadas<br>se forem maiores que a largura máxima',

	'attributes_size_height' => 'Altura máxima da imagem',
	'attributes_size_height_explain' => 'As imagens serão redimensionadas<br>se forem maiores que a altura máxima',

	// custom vars
	'name' => 'Nome',
	'name_explain' => 'Nome único',
	'name_missing' => 'Inserir um nome único.',
	'name_exists' => 'Este nome já está a ser usado',

	'value' => 'Valor',
	'value_explain' => 'Dados que pretende armazenar (até 64kb)',
	'value_code_snipet' => 'Fragmento para colocar no modelo de página:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'A sua variável foi criada',
	'variable_updated' => 'A sua variável foi actualizada',
	'variable_deleted' => 'A sua variável foi eliminada',

	'field_created' => 'O seu campo foi criado',
	'field_updated' => 'O seu campo foi actualizado',
	'field_deleted' => 'O seu campo foi eliminado'

);
