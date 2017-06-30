<?php
/*
 *Plugin Name: udaya plugin
 *Plugin URI: udayanagi.wordpress.com
 *Description: This is my entry to wordpress core
 *version: 1.0
 *Autor: Udaya Kumara K
 */


  register_activation_hook('__FILE__','udaya_ast_activation');

  function udaya_ast_activation(){


  }

  register_deactivation_hook('__FILE__','udaya_ast_deactivation');
?>