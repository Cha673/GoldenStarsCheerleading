<?php
    //ADD IMAGE SIZE
    add_image_size('background',1400,800,['center','center']);
    add_image_size('logo',400,400,['center','center']);
    add_image_size('logo_header',250,85,['center','center']);
    add_image_size('arrow',72,36,['center','center']);
    add_image_size('logo_socialmedia',86,86,['center','center']);
    add_image_size('logo_footer',180,180,['center','center']);
    add_image_size('logo_i',27,27,['center','center']);
    add_image_size('stars1',392,387,['center','center']);
    add_image_size('stars2',157,155,['center','center']);
    add_image_size('glitters',1232,722,['center','center']);
  

    wp_enqueue_style('style',get_template_directory_uri() .'/style/style.css');


    add_action('wp_enqueue_scripts', 'load_scripts_and_style');


function load_scripts_and_style()
{
  $template_directory_uri = get_template_directory_uri();
  wp_enqueue_style('theme-style', $template_directory_uri . '/style.css', [], filemtime(get_template_directory() . '/style.css'));

  if (file_exists(get_template_directory() . '/dist/main.css')) {
    wp_enqueue_style('styles-bundle', $template_directory_uri . '/dist/main.css', [], filemtime(get_template_directory() . '/dist/main.css'));
  }
  
  if (file_exists(get_template_directory() . '/dist/main.js')) {
    wp_enqueue_script('js-bundle', $template_directory_uri . '/dist/main.js', [], filemtime(get_template_directory() . '/dist/main.js'), true);
  }
  
  wp_localize_script('js-bundle', 'WP', array(
    'root' => esc_url_raw(rest_url()),
    'nonce' => wp_create_nonce(),
    'base' => get_site_url(),
    'publicPath' => $template_directory_uri . "/dist/",
  ));
}
    

add_action('acf/init', function () {
  acf_add_options_page();
});


?>