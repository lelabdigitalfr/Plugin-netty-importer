<?php
function labdnetty_action() {
  do_action( 'labdnetty_action' );
}
add_action( 'labdnetty_action', 'import_netty_biens' );
function import_netty_biens() {
  // Unzip file
  $to = ABSPATH . PLUGINDIR . '/netty-importer/annonces';
  $file = $to . '/easyvente.zip';
  $title_of_biens_added = array();
  $title_of_biens_exists = array();
  require_once ( ABSPATH . '/wp-admin/includes/file.php' );
  WP_Filesystem();
  if(file_exists($file)) {
    $unzipfile = unzip_file( $file, $to);
  } else {
    echo '<div class="notice notice-success is-dismissible">
    <p>L\'archive n\'est pas disponible</p>
    </div>';
  }
  if ( !empty($unzipfile) && is_wp_error( $unzipfile ) ) {
    echo '<div class="notice notice-success is-dismissible">
    <p>Problème lors de la récupération de l\'archive</p>
    </div>';
  } else if (($handle = fopen("/" . ABSPATH . PLUGINDIR . "/netty-importer/annonces/Annonces.csv", "r")) !== FALSE) { // Read CSV
    $row = 0;
    $delimiter = ';';
    while (($data = fgetcsv($handle, 10000, $delimiter)) !== FALSE) {
      $num = count($data);
      $data = array_map('utf8_encode', $data);
      $row++;
      for($c = 0; $c < $num; $c++) {
        $data[$c] = str_replace('!', '', $data[$c]);
        if($data[$c] == '') {
          $data[$c] = 'N/A';
        }
      }
      array_unshift($data, $row);
      switch($data[33]) { // Type de chauffage
        case '128':
        $chauffage = 'radiateur';
        break;
        case '256':
        $chauffage = 'sol';
        break;
        case '384':
        $chauffage = 'mixte';
        break;
        case '512' :
        $chauffage = 'gaz';
        break;
        case '640' :
        $chauffage = 'gaz radiateur';
        break;
        case '768' :
        $chauffage = 'gaz sol';
        break;
        case '896' :
        $chauffage = 'gaz mixte';
        break;
        case '1024' :
        $chauffage = 'fuel';
        break;
        case '1152' :
        $chauffage = 'fuel radiateur';
        break;
        case '1280' :
        $chauffage = 'fuel sol';
        break;
        case '1408' :
        $chauffage = 'fuel mixte';
        break;
        case '2048' :
        $chauffage = 'électrique';
        break;
        case '2176' :
        $chauffage = 'électrique radiateur';
        break;
        case '2304' :
        $chauffage = 'électrique sol';
        break;
        case '2432' :
        $chauffage = 'électrique mixte';
        break;
        case '4096' :
        $chauffage = 'collectif';
        break;
        case '4224' :
        $chauffage = 'collectif radiateur';
        break;
        case '4352' :
        $chauffage = 'collectif sol';
        break;
        case '4480' :
        $chauffage = 'collectif mixte';
        break;
        case '4608' :
        $chauffage = 'collectif gaz';
        break;
        case '4736' :
        $chauffage = 'collectif gaz radiateur';
        break;
        case '4864' :
        $chauffage = 'collectif gaz sol';
        break;
        case '4992' :
        $chauffage = 'collectif gaz mixte';
        break;
        case '5120' :
        $chauffage = 'collectif fuel';
        break;
        case '5248' :
        $chauffage = 'collectif fuel radiateur';
        break;
        case '5376' :
        $chauffage = 'collectif fuel sol';
        break;
        case '5504' :
        $chauffage = 'collectif fuel mixte';
        break;
        case '6144' :
        $chauffage = 'collectif électrique';
        break;
        case '6272' :
        $chauffage = 'collectif électrique radiateur';
        break;
        case '6400' :
        $chauffage = 'collectif électrique sol';
        break;
        case '6528' :
        $chauffage = 'collectif électrique mixte';
        break;
        case '8192' :
        $chauffage = 'individuel';
        break;
        case '8320' :
        $chauffage = 'individuel radiateur';
        break;
        case '8448' :
        $chauffage = 'individuel sol';
        break;
        case '8576' :
        $chauffage = 'individuel mixte';
        break;
        case '8704' : 
        $chauffage = 'individuel gaz';
        break;
        case '8832' : 
        $chauffage = 'individuel gaz radiateur';
        break;
        case '8960' : 
        $chauffage = 'individuel gaz sol';
        break;
        case '9088' : 
        $chauffage = 'individuel gaz mixte';
        break;
        case '9216' : 
        $chauffage = 'individuel fuel';
        break;
        case '9344' : 
        $chauffage = 'individuel fuel radiateur';
        break;
        case '9472' : 
        $chauffage = 'individuel fuel sol';
        break;
        case '9600' : 
        $chauffage = 'individuel fuel mixte';
        break;
        case '10240' : 
        $chauffage ='individuel électrique';
        break;
        case '10368' : 
        $chauffage = 'individuel électrique radiateur';
        break;
        case '10496' : 
        $chauffage = 'individuel électrique sol';
        break;
        case '10624' : 
        $chauffage = 'individuel électrique mixte';
        break;
        case '16384' : 
        $chauffage = 'climatisation réversible';
        break;
        case '2048' : 
        $chauffage = 'climatisation réversible centrale';
        break;
        case '2457' : 
        $chauffage = 'climatisation réversible individuelle';
        break;
      }

      switch($data[34]) { // Type de cuisine
        case '1' :
        $cuisine = 'aucune';
        break;
        case '2' :
        $cuisine = 'américaine';
        break;
        case '3' :
        $cuisine = 'séparée';
        break;
        case '4' :
        $cuisine = 'industrielle';
        break;
        case '5' :
        $cuisine = 'coin cuisine';
        break;
        case '6' :
        $cuisine = 'américaine équipée';
        break;
        case '7' :
        $cuisine = 'séparée équipée';
        break;
        case '8' :
        $cuisine = 'coin cuisine équipé';
        break;
        case '9' :
        $cuisine = 'équipée';
        break;
      }

      $orientation = array();
      ($data[35] == 'OUI') ? array_unshift($orientation, 'SUD') : '' ;
      ($data[38] == 'OUI') ? array_unshift($orientation, 'NORD') : '' ;
      ($data[36] == 'OUI') ? array_push($orientation, 'EST') : '' ;
      ($data[37] == 'OUI') ? array_push($orientation, 'OUEST') : '' ;
      $combine_orientation = '';
      if(!empty($orientation)) {
        $tots = count($orientation);
        if($tots <= 1) {
          $combine_orientation = $orientation[0];
        } else {
          $combine_orientation = $orientation[0] . '-' . $orientation[1];
        }
      } else {
        $combine_orientation = 'N/A';
      }

      if($data[104] != '') {
        $if_vv = 'OUI';
      } else {
        $if_vv = 'NON';
      }

      //Tableau de data
      $postarr = array(
        'post_title' => $data[20],
        'post_type' => 'biens',
        'post_content' => '',
        'post_status' => 'publish',
        'comment_status' => 'closed',
        'tax_input' => array(
          'ville' => $data[6],
          'disponibilite' => 'Disponible'
        ),
        'meta_input' => array(
          'reference_bien'           => $data[2],
          'type_annonce'             => $data[3],
          'type_bien'                => $data[4],
          'code_postal'              => $data[5],
          'ville'                    => $data[6],
          'if_vv'                    => $if_vv,
          'pays'                     => $data[7],
          'adresse'                  => $data[8],
          'prix'                     => $data[11],
          'surface'                  => $data[16],
          'surface_du_terrain'       => $data[17],
          'pieces'                   => $data[18],
          'chambres'                 => $data[19],
          'description'              => $data[21],
          'charges'                  => $data[23],
          'etage'                    => $data[24],
          'nb_etages'                => $data[25],
          'meuble'                   => $data[26],
          'annee_construction'       => $data[27],
          'refait_neuf'              => $data[28],
          'nb_salles_de_bain'        => $data[29],
          'nb_salles_deau'           => $data[30],
          'nb_wc'                    => $data[31],
          'wc_separes'               => $data[32],
          'type_chauffage'           => $chauffage,
          'type_cuisine'             => $cuisine,
          'orientation'              => $combine_orientation,
          'nb_balcons'               => $data[39],
          'surface_balcon'           => $data[40],
          'ascenseur'                => $data[41],
          'cave'                     => $data[42],
          'parkings'                 => $data[43],
          'digicode'                 => $data[45],
          'interphone'               => $data[46],
          'gardien'                  => $data[47],
          'terrasse'                 => $data[48],
          'photo_1'                  => $data[85],
          'photo_2'                  => $data[86],
          'photo_3'                  => $data[87],
          'photo_4'                  => $data[88],
          'photo_5'                  => $data[89],
          'photo_6'                  => $data[90],
          'photo_7'                  => $data[91],
          'photo_8'                  => $data[92],
          'photo_9'                  => $data[93],
          'contact_telephone'        => $data[105],
          'contact_nom'              => $data[106],
          'contact_mail'             => $data[107],
          'lien_vv'                  => $data[104],
          'conso_energie'            => $data[176],
          'emissions_ges'            => $data[178],
          'surface_du_sejour'        => $data[216]
        ),
      );

      $page = get_page_by_title($data[20], OBJECT, 'biens');
      if(!$page) {
        wp_insert_post($postarr);
        $added = '<div class="notice notice-success is-dismissible">
        <p>Vous avez ajouter ' . $row . ' bien <a href="javascript:location.reload();">Recharger les biens</a> </p>
        </div>';

      } else {
        // Mettre à jour si la page existe dans les deux sources
        $id = $page->ID;
        $arrID = array(
          'ID' => $page->ID,
          'taxt_input' => array(
            'ville' => $data[6],
          )
        );
        $newArr = array_merge($arrID, $postarr);
        wp_update_post($newArr);
        $modified = '<div class="notice notice-success is-dismissible">
              <p>Vous avez mis à jour ' . $row . ' biens <a href="javascript:location.reload();">Recharger les biens</a> </p>
              </div>';
      }

        $slug = sanitize_html_class($data[20]);
        $title = $data[20];
        $title_of_biens_added[$slug] = $title;

    }
    // Récupérer la liste de tous les posts
    $args =  array(
      'post_type' => 'biens',
      'numberposts' => -1,
      'orderby' => 'name'
    );
    $allbiens = get_posts($args);
    // Envoyer une liste de titres des biens existants dans un tableau
    foreach($allbiens as $bien) {
      $slug = sanitize_html_class($bien->post_title);
      $title = $bien->post_title;
      $title_of_biens_exists[$slug] = $title;
    }
    // Comparer nos deux tableaux pour extraire les posts existants dans la BDD mais plus dans la source
    $difference = array_diff_key($title_of_biens_exists, $title_of_biens_added);

    // À chaque différence passer le bien en indisponible
    foreach($difference as $post_title) {
      $post_ref = get_page_by_title($post_title, OBJECT, 'biens');
      $post_array = array(
        'ID' => $post_ref->ID,
        'tax_input' => array(
          'disponibilite' => 'Indisponible'
        )
      );
      wp_update_post($post_array);
    }


    if(!empty($added)) {
      echo $added;
    }
    if(!empty($modified)) {
      echo $modified;
    }
  }
}