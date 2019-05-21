<?php

function list_property_html() {
  ?>
  <h1>Liste des biens en attente</h1>
  <?php
  $row = 0;
  $file = ABSPATH . PLUGINDIR . "/netty-importer/annonces/Annonces.csv";
  $delimiter = ';';
  
  if (($handle = fopen($file, "r")) !== FALSE) {
      
      while (($data = fgetcsv($handle, 1000000, $delimiter)) !== FALSE) {
        $row++;
        $data = array_map('utf8_encode', $data);
        $num = count($data);
        array_unshift($data, $row);
        echo "<h3> $num champs à la ligne $row: </h3>";
        echo '<pre>'; print_r($data); echo '</pre>';
      }
      
  }
}