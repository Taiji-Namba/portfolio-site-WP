<?php
  function my_scripts() {
    wp_enqueue_style( 'my-style', get_template_directory_uri().'/style.css');
    wp_enqueue_script( 'my-script', get_template_directory_uri() . '/main.js', array( 'jquery' ), '1.0.0', true );
  }
  add_action( 'wp_enqueue_scripts', 'my_scripts' );
