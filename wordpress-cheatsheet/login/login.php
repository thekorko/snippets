<?php
/*
*
* Outputs the Wordpress login form
* https://quartex.net/en
* https://developer.wordpress.org/reference/functions/wp_login_form/
*
*/
$arguments = array(
  'echo' => true,
  'redirect' => get_permalink( get_the_ID() ),
  'remember' => true,
  'value_remember' => true,
);

wp_login_form( $arguments );
?>
