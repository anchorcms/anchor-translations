<?php

return array(

    'extend' => 'Rozšíření',

    'fields' => 'Vlastní pole',
    'fields_desc' => 'Přidání dalších polí k&#160;záznamům.',
    
    'pagetypes' => 'Typy stránek',
    'pagetypes_desc' => 'Vytvářejte různé typy stránek.',

    'variables' => 'Proměnné webu',
    'variables_desc' => 'Přidání vlastních proměnných (předdefinovaných textů).',

    'create_field' => 'Vytvořit nové pole',
    'editing_custom_field' => 'Upravujete pole &#187;%s&#171;',
    'nofields_desc' => 'Nemáte žádná vlastní pole.',

    'create_variable' => 'Vytvořit novou proměnnou',
    'editing_variable' => 'Upravujete proměnnou &#187;%s&#171;',
    'novars_desc' => 'Nemáte žádné vlastní proměnné',
    
    'create_pagetype' => 'Vytvořit nový typ stránky',
    'editing_pagetype' => 'Editing page type &#187;%s&#171;',

    // form fields
    'type' => 'Typ obsahu',
    'type_explain' => 'Typ obsahu, ke kterému chcete přiřadit toto pole.',
    'notypes_desc' => 'Zatím nejsou vytvořeny žádné typy stránek.',

    'pagetype' => 'Typ stránky',
    'pagetype_explain' => 'The type of page you want to add this field to.',

    'field' => 'Pole',
    'field_explain' => 'HTML typ pole',

    'key' => 'Unikátní klíč',
    'key_explain' => 'Unikátní klíč pro vaše pole',
    'key_missing' => 'Zadejte prosím unikátní klíč',
    'key_exists' => 'Tento klíč už existuje',

    'label' => 'Nadpis',
    'label_explain' => 'Nadpis pole, který vidí uživatel',
    'label_missing' => 'Zadejte prosím text nadpisu',

    'attribute_type' => 'Typy souborů',
    'attribute_type_explain' => 'Seznam podporovaných typů souborů, odděleých čárkami. Pokud chcete povolit vše, nechte pole prázdné.',

    // images
    'attributes_size_width' => 'Maximální šířka obrázku',
    'attributes_size_width_explain' => 'Větší obrázky budou oříznuty',

    'attributes_size_height' => 'Maximální výška obrázku',
    'attributes_size_height_explain' => 'Větší obrázky budou oříznuty',

    // custom vars
    'name' => 'Název',
    'name_explain' => 'Unikátní název',
    'name_missing' => 'Zadejte prosím unikátní název',
    'name_exists' => 'Proměnná s&#160;tímto názvem již existuje',

    'value' => 'Hodnota',
    'value_explain' => 'Obsah proměnné (max. 64&#160;Kb)',
    'value_code_snipet' => 'Kód pro vložení do šablony:<br>
            <code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

    // messages
    'variable_created' => 'Proměnná byla uložena',
    'variable_updated' => 'Proměnná byla aktualizována',
    'variable_deleted' => 'Proměnná byla smazána',
    
    'pagetype_created' => 'Typ stránky byl vytvořen',
    'pagetype_updated' => 'Typ stránky byl aktualizován',
    'pagetype_deleted' => 'Typ stránky byl smazán',

    'field_created' => 'Pole bylo vytvořeno',
    'field_updated' => 'Pole bylo aktualizováno',
    'field_deleted' => 'Pole bylo smazáno'

);
