<?php add_theme_support("menus") ?>

<?php
function _4w4_modifie_requete_principal( $query ) {
if ( $query->is_home() && $query->is_main_query() && ! is_admin() ) {
  $query->set( 'category_name', 'Populaire' );
  $query->set( 'orderby', 'title' );
  $query->set( 'order', 'ASC' );
  }
 }
 add_action( 'pre_get_posts', '_4w4_modifie_requete_principal' );

 ?>