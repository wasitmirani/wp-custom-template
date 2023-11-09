<?php get_header(); ?>



<?php
// Get the current page ID
$page_id = get_the_ID();

// Get the slug of the current page
$page_slug = get_post_field('post_name', $page_id);

// Switch based on the page slug
switch ($page_slug) {
    case 'services':
        // Load services.php file
        get_template_part('services');
        break;
    case 'contact':
        // Load contact.php file
        get_template_part('contact');
        break;
    // Add more cases for other pages as needed
    default:
        // Load the default template file
        get_template_part('404');
        break;
}
?>
   
<?php get_footer(); ?>