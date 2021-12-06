<?php
/*This code makes all pages private(except the ones you do specify inside the if condition i.e login, register, home, etc), can be used from header.php as long as you are doing it in a simple wordpress page*/
/*by thrkorko*/
global $post;
if (is_page($post->ID)) {
  if (!($post->post_status == 'private') && (!($post->post_name == 'home') || !($post->post_name == 'login') || !($post->post_name == 'register')) && (!is_front_page())) {
    //In this case make this post private
    $my_page = array(
      'ID'           => $post->ID,
      'post_status'	 => 'private'
    );
    //Do the update
    wp_update_post($my_page);
    //Wordpress wp_nav_menu doesn't add private pages automatically to the menu, and menu customization in wp-admin doesn't support private pages by default
    //Check this out: https://stackoverflow.com/questions/30588611/wordpress-how-to-show-links-to-private-pages-in-wp-nav-menu/45542731
  }
}
?>
