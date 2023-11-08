<?php
function add_css()
{
   wp_register_style('fontawesome', get_template_directory_uri() . '/assets/css/plugins/fontawesome-6.css', false,'1.1','all');
   wp_enqueue_style( 'fontawesome');

   wp_register_style('swiper', get_template_directory_uri() . '/assets/css/plugins/swiper.min.css', false,'1.1','all');
   wp_enqueue_style( 'swiper');

   wp_register_style('magnific', get_template_directory_uri() . '/assets/css/vendor/magnific-popup.css', false,'1.1','all');
   wp_enqueue_style( 'magnific');

   wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/vendor/bootstrap.min.css', false,'1.1','all');
   wp_enqueue_style( 'bootstrap');

   wp_register_style('metismenu', get_template_directory_uri() . '/assets/css/vendor/metismenu.css', false,'1.1','all');
   wp_enqueue_style( 'metismenu');
   
   wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css', false,'1.1','all');
   wp_enqueue_style( 'style');
   

}
add_action('wp_enqueue_scripts', 'add_css');







function add_script()

{

   wp_register_script('jquery-script', get_template_directory_uri() . '/assets/js/vendor/jquery.min.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'jquery-script');

   wp_register_script('waw', get_template_directory_uri() . '/assets/js/vendor/waw.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'waw');

   wp_register_script('gsap', get_template_directory_uri() . '/assets/js/vendor/gsap.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'gsap');

   wp_register_script('metismenu', get_template_directory_uri() . '/assets/js/vendor/metismenu.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'metismenu');

   wp_register_script('scrolltiger', get_template_directory_uri() . '/assets/js/plugins/scrolltiger.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'scrolltiger');

   wp_register_script('scrolltoplugin', get_template_directory_uri() . '/assets/js/plugins/scrolltoplugin.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'scrolltoplugin');

   wp_register_script('smoothscroll', get_template_directory_uri() . '/assets/js/plugins/smoothscroll.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'smoothscroll');

   wp_register_script('splittext', get_template_directory_uri() . '/assets/js/plugins/splittext.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'splittext');

   wp_register_script('magnifying-popup', get_template_directory_uri() . '/assets/js/vendor/magnifying-popup.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'magnifying-popup');

   wp_register_script('swiper', get_template_directory_uri() . '/assets/js/plugins/swiper.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'swiper');


   wp_register_script('counterup', get_template_directory_uri() . '/assets/js/plugins/counterup.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'counterup');

   wp_register_script('waypoint', get_template_directory_uri() . '/assets/js/vendor/waypoint.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'waypoint');

   wp_register_script('chroma', get_template_directory_uri() . '/assets/js/vendor/chroma.min.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'chroma');

   wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/plugins/bootstrap.min.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'bootstrap');

   wp_register_script('contact', get_template_directory_uri() . '/assets/js/plugins/contact.form.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'contact');

   wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'main');


}
add_action('wp_enqueue_scripts', 'add_script');


add_theme_support( 'menus' );