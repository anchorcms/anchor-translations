<?php

return array(

	'extend' => 'Επέκταση',

	'fields' => 'Προσαρμοσμένα πεδία',
	'fields_desc' => 'Δημιουργία επιπλέον πεδίων',

	'variables' => 'Μεταβλητές Σελίδας',
	'variables_desc' => 'Δημιουργία επιπλέον μεταδεδομένων',

	'create_field' => ' Δημιουργήστε ένα νέο πεδίο',
	'editing_custom_field' => 'Επεξεργασία πεδίου &ldquo;%s&rdquo;',
	'nofields_desc' => 'Δεν υπάρχουν ακόμη πεδία',

	'create_variable' => 'Δημιουργήστε μια νέα μεταβλητή',
	'editing_variable' => ' Επεξεργασία μεταβλητής &ldquo;%s&rdquo;',
	'novars_desc' => 'Δεν υπάρχουν ακόμη μεταβλητές',

	// form fields
	'type' => 'Είδος',
	'type_explain' => 'Το είδος του περιεχομένου που θέλετε να προσθέσετε αυτό το πεδίο.',

	'field' => 'Πεδίο',
	'field_explain' => 'Html input type',

	'key' => 'Μοναδικό κλειδί',
	'key_explain' => 'Το μοναδικό κλειδί για το πεδίο σας',
	'key_missing' => 'Παρακαλώ εισάγετε ένα μοναδικό κλειδί',
	'key_exists' => 'Το κλειδί χρησιμοποιείται ήδη',

	'label' => 'Ετικέτα',
	'label_explain' => 'Ανθρώπινα αναγνώσιμο όνομα για το πεδίο σας',
	'label_missing' => 'Παρακαλώ εισάγετε μια ετικέτα',

	'attribute_type' => 'Τύποι αρχείων',
	'attribute_type_explain' => 'Λίστα χωρισμένη με κόμματα των αποδεκτών τύπων αρχείων, αφήστε τη κενή για αποδοχή όλων.',

	// images
	'attributes_size_width' => 'Μέγιστο πλάτος εικόνας',
	'attributes_size_width_explain' => 'Το μέγεθος των εικόνων θα αλάξει αν είναι μεγαλύτερο από το μέγιστο επιτρεπόμενο',

	'attributes_size_height' => 'Μέγιστο ύψος εικόνας',
	'attributes_size_height_explain' => 'Το μέγεθος των εικόνων θα αλάξει αν είναι μεγαλύτερο από το μέγιστο επιτρεπόμενο',

	// custom vars
	'name' => 'Όνομα',
	'name_explain' => 'Ένα μοναδικό όνομα',
	'name_missing' => 'Παρακαλώ εισάγετε ένα μοναδικό όνομα',
	'name_exists' => 'Το όνομα είναι ήδη σε χρήση',

	'value' => 'Αξία',
	'value_explain' => 'Τα δεδομένα που θέλετε να αποθηκεύσετε (έως 64kb)',
	'value_code_snipet' => 'Κομμάτι κώδικα για να εισάγετε στο template:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'Η μεταβλητή σας δημιουργήθηκε',
	'variable_updated' => 'Η μεταβλητή σας ενημερώθηκε',
	'variable_deleted' => 'Η μεταβλητή σας διαγράφηκε',

	'field_created' => 'Το πεδίο σας δημιουργήθηκε',
	'field_updated' => 'Το πεδίο σας ενημερώθηκε',
	'field_deleted' => 'Το πεδίο σας διαγράφηκε'

);