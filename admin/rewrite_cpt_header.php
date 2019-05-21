<?php
function rewrite_cpt_header(){

if( !isset($_GET['post_type']) || $_GET['post_type'] != 'biens' ){
    return;
} else {
    ?>
    <div class="wrap">
    <h1 class="wp-heading-inline show" style="display:inline-block;">Biens</h1>
    <a href="<?php echo admin_url('post-new.php?post_type=biens'); ?>" class="page-title-action show">Ajouter un bien</a>
    <form  method="POST" id="update-property">
      <input type="hidden" name="property_title" value="property_title" />
      <input type="hidden" name="type" value="creation" />
      <button type="submit" class="page-title-action show" >Importer depuis netty</button>
      <?php if(isset($_POST['property_title'])) : labdnetty_action(); endif; ?>
    </form>
    </div>

    <style scoped>
    .wp-heading-inline:not(.show),
    .page-title-action:not(.show) { display:none !important;}
    #update-property { display:inline-block; width:50% }
    </style>
    <?php
  }
}
add_action('admin_notices','rewrite_cpt_header');