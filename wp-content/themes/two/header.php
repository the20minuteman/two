<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <title><?php bloginfo('title'); ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />    
        <link href='http://fonts.googleapis.com/css?family=Work%20Sans:400,500,700,900%7CPT%20Serif%7CRoboto:700' rel='stylesheet' type='text/css'>		
        <link rel="stylesheet" type="text/css"  href='<?php bloginfo('template_url'); ?>/style.css' />

        <!--[if lt IE 9]>
                <script src="js/html5shiv.js"></script>            
                <script src="js/respond.min.js"></script>                   
        <![endif]-->         
        <?php wp_head() ?>
    </head>

    <body>

        <div class="site-wrapper">                  
            <div class="doc-loader"></div>  

            <header class="header-holder">
                <div class="menu-wrapper center-relative relative">

                    <div class="header-logo">
                        <a href="<?php bloginfo('template_url'); ?>/index.html"> 
                            <img src="http://localhost/test/wp-content/uploads/2020/06/interslice-logo-02.gif" alt="Interslice">
                        </a>
                    </div>

                    <div class="toggle-holder">
                        <div id="toggle">
                            <div class="first-menu-line"></div>
                            <div class="second-menu-line"></div>
                            <div class="third-menu-line"></div>                               
                        </div>                            
                    </div>

                    <div class="menu-holder">
                        <nav id="header-main-menu">

							<?php wp_nav_menu(); ?>

							<!--og
                            <ul class="main-menu sm sm-clean">
                                <li class="menu-item-has-children">
                                    <a href="index.html">
                                        Home
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="wp-content/themes/portfolio/home-box.html">Home + Box</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="wp-content/themes/portfolio/service.html">Service</a>
                                </li>
                                <li>
                                    <a href="wp-content/themes/portfolio/about.html">About</a>
                                </li>
                                <li>
                                    <a href="wp-content/themes/portfolio/team.html">Team</a>
                                </li>
                                <li>
                                    <a href="wp-content/themes/portfolio/blog.html">Blog</a>
                                </li>
                                <li>
                                    <a href="wp-content/themes/portfolio/contact.html">Contact</a>
                                </li>
                            </ul>
                        -->
                        </nav>
                    </div>
                    <div class="clear"></div>                        
                </div>
            </header>
