<?php
function my_acf_add_local_field_groups() {
  for($i = 1; $i < 10; $i++) {
    $photos_fields = array(
        array(
        'key' => 'text_photo_' . $i,
        'label' => 'Photo' . $i,
        'name' => 'photo_' . $i,
        'type' => 'text',
        'wrapper' => array(
          'width' => '45',
          'class' => '',
          'id' => '',
        ),
      ),
    );

  }
	acf_add_local_field_group(array(
		'key' => 'group_biens',
    'title' => 'Détails du bien',
    'style' => 'seamless',
    'hide_on_screen' => array('the_content'),
		'fields' => array (
      array(
        'key' => 'tab_informations_generales',
        'label' => 'Informations générales',
        'name' => '',
        'type' => 'tab',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'placement' => 'left',
        'endpoint' => 0,
      ),
			array (
				'key' => 'text_reference_bien',
				'label' => 'Référence du bien',
				'name' => 'reference_bien',
        'type' => 'text',
        'wrapper' => array(
          'width' => '45',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
				'key' => 'text_type_annonce',
				'label' => 'Type d\'annonce',
				'name' => 'type_annonce',
        'type' => 'text',
        'wrapper' => array(
          'width' => '45',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
				'key' => 'text_type_bien',
				'label' => 'Type de bien',
				'name' => 'type_bien',
        'type' => 'text',
        'wrapper' => array(
          'width' => '30',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
				'key' => 'text_prix',
				'label' => 'Prix / Loyer / Prix de cession',
				'name' => 'prix',
        'type' => 'text',
        'wrapper' => array(
          'width' => '37.5',
          'class' => '',
          'id' => '',
        ),
        'append' => '€'
      ),
      array (
				'key' => 'text_charges',
				'label' => 'Charges',
				'name' => 'charges',
        'type' => 'text',
        'conditional_logic' => array(
          array(
            array(
              'field' => 'text_type_bien',
              'operator' => '==',
              'value' => 'appartement',
            ),
          ),
        ),
        'wrapper' => array(
          'width' => '22.5',
          'class' => '',
          'id' => '',
        ),
        'append' => '€'
      ),
      array (
				'key' => 'text_adresse',
				'label' => 'Adresse',
				'name' => 'adresse',
        'type' => 'text',
        'wrapper' => array(
          'width' => '90',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
				'key' => 'text_code_postal',
				'label' => 'Code postal',
				'name' => 'code_postal',
        'type' => 'text',
        'wrapper' => array(
          'width' => '40',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
				'key' => 'text_ville',
				'label' => 'Ville',
				'name' => 'ville',
        'type' => 'text',
        'wrapper' => array(
          'width' => '50',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
				'key' => 'text_description',
				'label' => 'Description',
				'name' => 'description',
        'type' => 'wysiwyg',
        'wrapper' => array(
          'width' => '100',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
				'key' => 'text_if_vv',
				'label' => '',
				'name' => 'if_vv',
        'type' => 'text',
        'wrapper' => array(
          'width' => '1',
          'class' => '',
          'id' => '',
        ),
      ),
      array(
        'key' => 'tab_informations_complementaires',
        'label' => 'Informations complémentaires',
        'name' => '',
        'type' => 'tab',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'placement' => 'left',
        'endpoint' => 0,
      ),
      array (
				'key' => 'text_surface',
				'label' => 'Surface',
				'name' => 'surface',
        'type' => 'text',
        'wrapper' => array(
          'width' => '20',
          'class' => '',
          'id' => '',
        ),
        'append' => 'm²'
      ),
      array (
				'key' => 'text_pieces',
				'label' => 'Nb de pièces',
				'name' => 'pieces',
        'type' => 'text',
        'wrapper' => array(
          'width' => '20',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
				'key' => 'text_chambres',
				'label' => 'Nb de chambres',
				'name' => 'chambres',
        'type' => 'text',
        'wrapper' => array(
          'width' => '25',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
				'key' => 'text_chambres',
				'label' => 'Nb de chambres',
				'name' => 'chambres',
        'type' => 'text',
        'wrapper' => array(
          'width' => '25',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
				'key' => 'text_meuble',
				'label' => 'Meublé ?',
				'name' => 'meuble',
        'type' => 'text',
        'conditional_logic' => array(
          array(
            array(
              'field' => 'text_type_bien',
              'operator' => '==',
              'value' => 'appartement',
            ),
          ),
        ),
        'wrapper' => array(
          'width' => '25',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
				'key' => 'text_conso_energie',
				'label' => 'Conso énergie',
				'name' => 'conso_energie',
        'type' => 'text',
        'wrapper' => array(
          'width' => '20',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
				'key' => 'text_emissions_ges',
				'label' => 'Émissions GES',
				'name' => 'emissions_ges',
        'type' => 'text',
        'wrapper' => array(
          'width' => '20',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
				'key' => 'text_etage',
				'label' => 'Etage',
				'name' => 'etage',
        'type' => 'text',
        'conditional_logic' => array(
          array(
            array(
              'field' => 'text_type_bien',
              'operator' => '==',
              'value' => 'appartement',
            ),
          ),
        ),
        'wrapper' => array(
          'width' => '15',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
				'key' => 'text_nb_etages',
				'label' => 'NB étages',
				'name' => 'nb_etages',
        'type' => 'text',
        'wrapper' => array(
          'width' => '20',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
				'key' => 'text_annee_construction',
				'label' => 'Année de construction',
				'name' => 'annee_construction',
        'type' => 'text',
        'wrapper' => array(
          'width' => '30',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
				'key' => 'text_refait_neuf',
				'label' => 'Refait à neuf ?',
				'name' => 'refait_neuf',
        'type' => 'text',
        'wrapper' => array(
          'width' => '25',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
				'key' => 'text_nb_salles_de_bain',
				'label' => 'NB de salles de bain',
				'name' => 'nb_salles_de_bain',
        'type' => 'text',
        'wrapper' => array(
          'width' => '30',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
				'key' => 'text_nb_salles_deau',
				'label' => 'NB de salles d\'eau',
				'name' => 'nb_salles_deau',
        'type' => 'text',
        'wrapper' => array(
          'width' => '25',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
				'key' => 'text_nb_wc',
				'label' => 'NB de WC',
				'name' => 'nb_wc',
        'type' => 'text',
        'wrapper' => array(
          'width' => '15',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
				'key' => 'text_wc_separes',
				'label' => 'WC séparés ?',
				'name' => 'wc_separes',
        'type' => 'text',
        'wrapper' => array(
          'width' => '20',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
				'key' => 'text_type_chauffage',
				'label' => 'Type de chauffage',
				'name' => 'type_chauffage',
        'type' => 'text',
        'wrapper' => array(
          'width' => '30',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
				'key' => 'text_type_cuisine',
				'label' => 'Type de cuisine',
				'name' => 'type_cuisine',
        'type' => 'text',
        'wrapper' => array(
          'width' => '30',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
				'key' => 'text_orientation',
				'label' => 'Orientation',
				'name' => 'orientation',
        'type' => 'text',
        'wrapper' => array(
          'width' => '30',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
				'key' => 'text_nb_balcons',
				'label' => 'NB de balcons',
				'name' => 'nb_balcons',
        'type' => 'text',
        'wrapper' => array(
          'width' => '30',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
				'key' => 'text_ascenseur',
				'label' => 'Ascenseur',
				'name' => 'ascenseur',
        'type' => 'text',
        'wrapper' => array(
          'width' => '20',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
				'key' => 'text_cave',
				'label' => 'Cave ?',
				'name' => 'cave',
        'type' => 'text',
        'wrapper' => array(
          'width' => '15',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
				'key' => 'text_parkings',
				'label' => 'NB de parkings',
				'name' => 'parkings',
        'type' => 'text',
        'wrapper' => array(
          'width' => '25',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
				'key' => 'text_surface_balcon',
				'label' => 'Surface de balcon',
				'name' => 'surface_balcon',
        'type' => 'text',
        'wrapper' => array(
          'width' => '30',
          'class' => '',
          'id' => '',
        ),
        'append' => 'm²'
      ),
      array (
				'key' => 'text_digicode',
				'label' => 'Digicode',
				'name' => 'digicode',
        'type' => 'text',
        'conditional_logic' => array(
          array(
            array(
              'field' => 'text_type_bien',
              'operator' => '==',
              'value' => 'appartement',
            ),
          ),
        ),
        'wrapper' => array(
          'width' => '15',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
				'key' => 'text_interphone',
				'label' => 'Interphone',
				'name' => 'interphone',
        'type' => 'text',
        'conditional_logic' => array(
          array(
            array(
              'field' => 'text_type_bien',
              'operator' => '==',
              'value' => 'appartement',
            ),
          ),
        ),
        'wrapper' => array(
          'width' => '20',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
				'key' => 'text_gardien',
				'label' => 'Gardien ?',
				'name' => 'gardien',
        'type' => 'text',
        'conditional_logic' => array(
          array(
            array(
              'field' => 'text_type_bien',
              'operator' => '==',
              'value' => 'appartement',
            ),
          ),
        ),
        'wrapper' => array(
          'width' => '25',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
				'key' => 'text_terrasse',
				'label' => 'Terasse ?',
				'name' => 'terrasse',
        'type' => 'text',
        'wrapper' => array(
          'width' => '25',
          'class' => '',
          'id' => '',
        ),
      ),
      array(
        'key' => 'tab_vv',
        'label' => 'Visite virtuelle',
        'name' => '',
        'type' => 'tab',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => array(
          array(
            array(
              'field' => 'text_if_vv',
              'operator' => '==',
              'value' => 'OUI',
            ),
          ),
        ),
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'placement' => 'left',
        'endpoint' => 0,
      ),
      array (
				'key' => 'text_lien_vv',
				'label' => 'Lien vers la visite virtuelle',
				'name' => 'lien_vv',
        'type' => 'text',
        'wrapper' => array(
          'width' => '90',
          'class' => '',
          'id' => '',
        ),
      ),
      array(
        'key' => 'tab_photos',
        'label' => 'Photos',
        'name' => '',
        'type' => 'tab',
        'instructions' => '',
        'required' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'placement' => 'left',
        'endpoint' => 0,
      ),
      array(
        'key' => 'text_photo_1',
        'label' => 'Photo 1',
        'name' => 'photo_1',
        'type' => 'text',
        'wrapper' => array(
          'width' => '45',
          'class' => '',
          'id' => '',
        ),
      ),
      array(
        'key' => 'text_photo_2',
        'label' => 'Photo 2',
        'name' => 'photo_2',
        'type' => 'text',
        'wrapper' => array(
          'width' => '45',
          'class' => '',
          'id' => '',
        ),
      ),
      array(
        'key' => 'text_photo_3',
        'label' => 'Photo 3',
        'name' => 'photo_3',
        'type' => 'text',
        'wrapper' => array(
          'width' => '45',
          'class' => '',
          'id' => '',
        ),
      ),
      array(
        'key' => 'text_photo_4',
        'label' => 'Photo 4',
        'name' => 'photo_4',
        'type' => 'text',
        'wrapper' => array(
          'width' => '45',
          'class' => '',
          'id' => '',
        ),
      ),
      array(
        'key' => 'text_photo_5',
        'label' => 'Photo 5',
        'name' => 'photo_5',
        'type' => 'text',
        'wrapper' => array(
          'width' => '45',
          'class' => '',
          'id' => '',
        ),
      ),
      array(
        'key' => 'text_photo_6',
        'label' => 'Photo 6',
        'name' => 'photo_6',
        'type' => 'text',
        'wrapper' => array(
          'width' => '45',
          'class' => '',
          'id' => '',
        ),
      ),
      array(
        'key' => 'text_photo_7',
        'label' => 'Photo 7',
        'name' => 'photo_7',
        'type' => 'text',
        'wrapper' => array(
          'width' => '45',
          'class' => '',
          'id' => '',
        ),
      ),
      array(
        'key' => 'text_photo_8',
        'label' => 'Photo 8',
        'name' => 'photo_8',
        'type' => 'text',
        'wrapper' => array(
          'width' => '45',
          'class' => '',
          'id' => '',
        ),
      ),
      array(
        'key' => 'text_photo_9',
        'label' => 'Photo 9',
        'name' => 'photo_9',
        'type' => 'text',
        'wrapper' => array(
          'width' => '45',
          'class' => '',
          'id' => '',
        ),
      ),
      array(
        'key' => 'tab_fiche_contact',
        'label' => 'Fiche contact',
        'name' => '',
        'type' => 'tab',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'placement' => 'left',
        'endpoint' => 0,
      ),
      array(
        'key' => 'text_contact_telephone',
        'label' => 'Téléphone du contact',
        'name' => 'contact_telephone',
        'type' => 'text',
        'wrapper' => array(
          'width' => '45',
          'class' => '',
          'id' => '',
        ),
      ),
      array(
        'key' => 'text_contact_nom',
        'label' => 'Nom du contact',
        'name' => 'contact_nom',
        'type' => 'text',
        'wrapper' => array(
          'width' => '45',
          'class' => '',
          'id' => '',
        ),
      ),
      array(
        'key' => 'text_contact_mail',
        'label' => 'Mail du contact',
        'name' => 'contact_mail',
        'type' => 'text',
        'wrapper' => array(
          'width' => '45',
          'class' => '',
          'id' => '',
        ),
      ),
    ),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'biens',
				),
			),
		),
	));
}

add_action('acf/init', 'my_acf_add_local_field_groups');