<?php /* Template Name: custom_Portfolio3 */ ?>
<?php get_header(); ?>

            <div class="portfolio-item-wrapper">
                <div class="portfolio-content center-relative content-1170">

                <!--hero caro img -->
                <div class="full-page-width center-relative top-70">
                    <script>
                        var slider_speed = "2000";
                        var slider_auto = "false";
                        var slider_items = "2";
                        var slider_gap = "0";
                    </script>
                    <div id="slider" class="image-slider-wrapper relative swiper-container">
                        <div class="swiper-wrapper image-slider slider">
                            <div class="swiper-slide">
                                <img src="<?php bloginfo('template_url'); ?>/images/port_three/1300-650-wp_portfolio_slide_otg_a.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php bloginfo('template_url'); ?>/images/port_three/1300-650-wp_portfolio_slide_otg_d.jpg" alt="">
                            </div>
                        </div>                        
                    </div>                    
                    <div class="swiper-scrollbar swiper-scrollbar-slider"></div>
                </div>
                <!--hero caro img ends-->
                
                <!--project description-->
                <div class="center-text content-650 center-relative">
                    <h1>OTG Shorts On-The-Go</h1>
                    <br>
                    <div class="medium-text">
                        Stay breezy in the blazing heat of summer. Look smart enoguh to get away from being too casual on certain occasions. OTG Shorts aim to offer comfortable made-to-measure garment whenever life calls for an advanture.
                    </div>
                    <br>
                    <p></p>
                </div>
                <!--project description ends-->

                <!--img product-->
                <div class=" one margin-0 animate"> 
                    <img src="<?php bloginfo('template_url'); ?>/images/port_three/1300-650-wp_portfolio_slide_otg_d.jpg" alt="">
                </div>
                <div class="clear"></div>
                <br>

                <!--img mobile-->
                <div class="one last margin-0 animate"> 
                    <img src="<?php bloginfo('template_url'); ?>/images/port_three/1300-650-wp_portfolio_slide_otg_b.jpg" alt="">
                </div>
                <div class="clear"></div>
                <br>
                
                <!--img web-->
                <div class="one last margin-0 animate"> 
                    <img src="<?php bloginfo('template_url'); ?>/images/port_three/1300-650-wp_portfolio_slide_otg_c.jpg" alt="">
                </div>
                <div class="clear"></div>
                <br>                     
                </div>
                

                <div class="nav-links">
                    <div class="content-1170 center-relative">
                        <div class="nav-previous"> 
                            <a href="portfolio-two" rel="prev">Thesis Labs Motorcycle Gear</a>
                            <div class="arrow-holder">←</div>
                            <div class="clear"></div>                                
                        </div>
                        <div class="nav-next"> 
                            <a href="portfolio-four" rel="next">Kitchener Blues Festival</a>
                            <div class="arrow-holder">→</div>
                            <div class="clear"></div>                               
                        </div>                            
                    </div>                        
                </div>
            </div> 

<?php get_footer(); ?>
