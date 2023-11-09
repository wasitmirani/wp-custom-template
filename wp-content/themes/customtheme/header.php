
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <!-- Template Css  -->
    <?php wp_head(); ?>
</head>
<body class="index-two">

    <!-- header style two start -->
    <header class="header-style-two header--sticky">
        <div class="header-wrapper-main">
            <a href="<?php home_url() ?>" class="logo">
               <h2 class="text-primary"><?php bloginfo( 'name' ); ?></h2> 
                <!-- <img src="<?php echo get_template_directory_uri(); ?> /assets/images/logo/03.svg" alt="logo"> -->
            </a>
            <div class="header-right">
                <div class="nav-area-center">
                    <nav class="navigation">
                        <!-- <ul class="parent-ul">
                            <li><a href="index.html">Home</a></li>
                           
                            
                            <li><a href="contact.html">Contact</a></li>
                        </ul> -->

                        <?php wp_nav_menu( array( 'menu_class' => 'parent-ul', 'container' => 'ul', )); ?>

                    </nav>
                </div>
                <a href="#" class="rts-btn btn-border">Contact <i class="fa-regular fa-arrow-right"></i></a>
                <div class="action-area">
                    <div id="search" class="search">
                        <i class="fa-light fa-magnifying-glass"></i>
                    </div>
                    <div class="menu-icon" id="menu-btn">
                        <svg width="16" height="14" viewbox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 1.34375C0 0.886719 0.351562 0.5 0.84375 0.5H14.9062C15.3633 0.5 15.75 0.886719 15.75 1.34375C15.75 1.83594 15.3633 2.1875 14.9062 2.1875H0.84375C0.351562 2.1875 0 1.83594 0 1.34375ZM0 6.96875C0 6.51172 0.351562 6.125 0.84375 6.125H10.4062C10.8633 6.125 11.25 6.51172 11.25 6.96875C11.25 7.46094 10.8633 7.8125 10.4062 7.8125H0.84375C0.351562 7.8125 0 7.46094 0 6.96875ZM5.90625 13.4375H0.84375C0.351562 13.4375 0 13.0859 0 12.5938C0 12.1367 0.351562 11.75 0.84375 11.75H5.90625C6.36328 11.75 6.75 12.1367 6.75 12.5938C6.75 13.0859 6.36328 13.4375 5.90625 13.4375Z" fill="#30373E"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header style two end -->


    <?php 
    $page_id = get_the_ID();
    $page_name = get_the_title();
    $page_name=empty($page_name) ? '404' : $page_name;
    
    $page_url = empty($page_id) ? '/'  :  get_permalink( $page_id);
 
 
    ?>
    
<?php   
$page_id = get_the_ID();

if($page_id !=1 )
{


?>

    <div class="breadcrumb-area-bg bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bread-crumb-area-inner">
                        <div class="breadcrumb-top">
                            <a href="/">Home</a> /
                            <a class="active" href="<?php echo$page_url ?> "><?php echo $page_name ?></a>
        
                        </div>
                        <div class="bottom-title">
                            <h1 class="title"><?php echo $page_name ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

