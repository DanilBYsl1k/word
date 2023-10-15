<?php 
  function strategy_assets() {

    wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/styles/style.css' );
    wp_enqueue_style( 'header', get_template_directory_uri() . '/assets/styles/header.css' );
    wp_enqueue_style( 'footer', get_template_directory_uri() . '/assets/styles/footer.css' );
    wp_enqueue_style( 'variables', get_template_directory_uri() . '/assets/styles/variables.css' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/styles/main.css' );
    wp_enqueue_style( 'font', get_template_directory_uri() . '/assets/styles/font.css' );

    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js' );
    
  }
  
  add_action('wp_enqueue_scripts', 'strategy_assets');

  // show_admin_bar(false); 
?> 

