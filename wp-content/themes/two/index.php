<?php get_header(); ?>

            <div id="content" class="site-content">                
                <div class="section-wrapper">

                    <h1 class="entry-title page-title block content-1170 center-relative">
                        Well, whatever the reason, we're glad you stopped by. <br>
                        We are pixel-pushers from Vancouver, have yourself a gander.
                        <!--<?php bloginfo('description') ?>-->
                    </h1> 

                    <!--
                    <img class="title-logo center-relative block" src="wp-content/themes/portfolio/images/divider_01.png" alt="">
                    -->
                    
                    <div class="full-page-width center-relative">
                        <div id="portfolio-wrapper">
                            <ul class="grid" id="portfolio-grid">                                    
                                <li class="grid-sizer"></li>

                                <!--og
                                <li class="grid-item element-item p_two_third">
                                    <a class="item-link" href="wp-content/themes/portfolio/portfolio-1.html">
                                        <img src="wp-content/themes/portfolio/images/portfolio_item_01.jpg" alt="" />

                                        <div class="portfolio-text-holder">
                                            <p class="portfolio-title">
                                                Monochromatic
                                            </p>
                                            <p class="portfolio-desc">
                                                BRANDING
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                -->
                                <li class="grid-item element-item p_one_third">
                                    <a class="item-link" href="<?php bloginfo('template_url'); ?>/portfolio-one">
                                        <img src="<?php bloginfo('template_url'); ?>/images/portfolio_item_02.png" alt="" />

                                        <div class="portfolio-text-holder">
                                            <p class="portfolio-title">
                                                Ophelias Bouquet
                                            </p>
                                            <p class="portfolio-desc">
                                                Web/Print Package
                                            </p>
                                        </div>
                                    </a>    
                                </li>

                                <li class="grid-item element-item p_one_third">
                                    <a class="item-link" href="<?php bloginfo('template_url'); ?>/portfolio-two">
                                        <img src="<?php bloginfo('template_url'); ?>/images/650-650_portfolio_thumb_thesis_labs.jpg" alt="" />
                                        <div class="portfolio-text-holder">
                                            <p class="portfolio-title">
                                                Thesis Labs Motorcycle Gear
                                            </p>
                                            <p class="portfolio-desc">
                                                Identity/Art Direction
                                            </p>
                                        </div>
                                    </a>
                                </li>

                                <li class="grid-item element-item p_one_third">
                                    <a class="item-link" href="<?php bloginfo('template_url'); ?>/portfolio-three">
                                        <img src="<?php bloginfo('template_url'); ?>/images/650-650_portfolio_thumb_otg_shorts.jpg" alt="" />
                                        <div class="portfolio-text-holder">
                                            <p class="portfolio-title">
                                                Shorts On-The-Go
                                            </p>
                                            <p class="portfolio-desc">
                                                Identity/Ecommerce
                                            </p>
                                        </div>
                                    </a>
                                </li>

                                <li class="grid-item element-item p_one_third">
                                    <a class="item-link" href="<?php bloginfo('template_url'); ?>/portfolio-four">
                                        <img src="<?php bloginfo('template_url'); ?>/images/650-_650_portfolio_thumb_kitchener.jpg" alt="" />
                                        <div class="portfolio-text-holder">
                                            <p class="portfolio-title">
                                                Kitchener Blues Festival
                                            </p>
                                            <p class="portfolio-desc">
                                                ha
                                            </p>
                                        </div>
                                    </a>
                                </li>

                                <li class="grid-item element-item p_one_third">
                                    <a class="item-link" href="<?php bloginfo('template_url'); ?>/portfolio-five">
                                        <img src="<?php bloginfo('template_url'); ?>/images/" alt="" />
                                        <div class="portfolio-text-holder">
                                            <p class="portfolio-title">
                                            </p>
                                            <p class="portfolio-desc">
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <!--
                                <li class="grid-item element-item p_one_third">
                                    <a class="item-link" href="<?php bloginfo('template_url'); ?>/portfolio-six">
                                        <img src="<?php bloginfo('template_url'); ?>/images/portfolio_item_06.jpg" alt="" />
                                        <div class="portfolio-text-holder">
                                            <p class="portfolio-title">
                                                Various Prints
                                            </p>
                                            <p class="portfolio-desc">
                                                Editorial
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                -->

                                <li class="grid-item element-item p_two_third">
                                    <a class="item-link" href="<?php bloginfo('template_url'); ?>/portfolio-7">
                                        <img src="<?php bloginfo('template_url'); ?>/images/portfolio_item_07.jpg" alt="" />
                                        <div class="portfolio-text-holder">
                                            <p class="portfolio-title">
                                            Assorted Prints
                                            </p>
                                            <p class="portfolio-desc">
                                                
                                            </p>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                            <div class="clear"></div>                                    
                        </div>

                        <div class="block center-relative center-text more-posts-portfolio-holder">
                            <p class="more-posts-portfolio">LOAD MORE</p>                                                            
                        </div>
                    </div>

                    <div class="content-1170 center-relative top-70">
                        <div class="one_half"> 
                            <strong>The story</strong>
                            <br> 
                            With a warning label this big, you know they gotta be fun. Bring me the forms I need to fill out to have her taken away. 
                            I decline the title of iron cook and accept the lesser title of zinc saucier.
                        </div>

                        <div class="one_half last"> 
                            <strong>Dreams</strong>
                            <br> 
                            You probably haven’t heard of them before they sold out scenester literally readymade. Trust fund Thundercats flexitarian, 
                            aesthetic Tumblr banjo freegan semiotics biodiesel master cleanse.
                        </div>
                        <div class="clear"></div>
                    </div>           
                </div>                                                           
            </div>

		<?php while(have_posts()) : the_post(); ?>
		<?php endwhile; ?>

<?php get_footer(); ?>