<?php /* Template Name: custom_Portfolio5 */ ?>
<?php get_header(); ?>

            <div class="portfolio-item-wrapper">
                <div class="full-page-width center-relative">
                    <script>
                        var slider_speed = "2000";
                        var slider_auto = "false";
                        var slider_items = "2";
                        var slider_gap = "50";
                    </script>
                    <div id="slider" class="image-slider-wrapper relative swiper-container">
                        <div class="swiper-wrapper image-slider slider">
                            <div class="swiper-slide">
                                <img src="<?php bloginfo('template_url'); ?>/images/port_five/1300-650-wp_portfolio_slide_otg_a.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php bloginfo('template_url'); ?>/images/port_five/1300-650-wp_portfolio_slide_otg_b.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php bloginfo('template_url'); ?>/images/port_five/1300-650-wp_portfolio_slide_otg_c.jpg" alt="">
                            </div>
                        </div>                        
                    </div>                    
                    <div class="swiper-scrollbar swiper-scrollbar-slider"></div>                        
                </div>

                <div class="center-text content-650 center-relative">
                    <h1>Shorts On-The-Go</h1>
                    <br>
                    <div class="medium-text">
                        
                    </div>
                    <br>

                    <p>

                    </p>
                </div>

                <div class="nav-links">
                    <div class="content-1170 center-relative">
                        <div class="nav-previous"> 
                            <a href="custom_Portfolio4.php" rel="prev">Kitchener Blues Festival</a>
                            <div class="arrow-holder">←</div>
                            <div class="clear"></div>                                
                        </div>
                        <div class="nav-next"> 
                            <a href="custom_Portfolio1.php" rel="next"></a>
                            <div class="arrow-holder">→</div>
                            <div class="clear"></div>                               
                        </div>                            
                    </div>                        
                </div>
            </div> 

<?php get_footer(); ?>
