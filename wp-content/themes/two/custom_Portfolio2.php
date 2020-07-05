<?php /* Template Name: custom_Portfolio2 */ ?>
<?php get_header(); ?>

            <div class="portfolio-item-wrapper">
                <div class="full-page-width center-relative">
                    <script>
                        var slider_speed = "2000";
                        var slider_auto = "true";
                        var slider_items = "1";
                        var slider_gap = "450";
                    </script>
                    <div id="slider" class="image-slider-wrapper relative swiper-container">
                        <div class="swiper-wrapper image-slider slider">
                            <div class="swiper-slide">
                                <img src="<?php bloginfo('template_url'); ?>/images/port_two/1300-650-wp_portfolio_slide_thesis_e.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php bloginfo('template_url'); ?>/images/port_two/1300-650-wp_portfolio_slide_thesis_f.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php bloginfo('template_url'); ?>/images/port_two/1300-650-wp_portfolio_slide_thesis_a.jpg" alt="">
                            </div>

                        </div>                        
                    </div>                    
                    <div class="swiper-scrollbar swiper-scrollbar-slider"></div>                        
                </div>

                <div class="center-text content-650 center-relative">
                    <h1>Thesis Labs Motorcycle Gear</h1>
                    <br>
                    <div class="medium-text">
                        Thesis Labs: Series Zero. The first in a series of stylistically minimal CE-Rated and Armoured motorcycle gear. Dual purpose Kangaroo leather jackets that can be worn as both fashion garments and protective equipment. Thesis explores the medium between sophistication and adrenaline.
                    </div>
                    <br>
                    <div class="one_half margin-0 animate">
                        <img src="<?php bloginfo('template_url'); ?>/images/port_two/1170-620-wp_portfolio_content_thesis_a.jpg" alt="">
                    </div>
                    <div class="one_half margin-0 animate">
                        <img src="<?php bloginfo('template_url'); ?>/images/port_two/1170-620-wp_portfolio_content_thesis_b.jpg" alt="">
                    </div>
                    <div class="clear"></div>
                    <br>
                    <p>
                        Thesis Labs exist to challenge the aesthetic paradigm of motorcycle protective apparel. Our design is user-centric, ergonomic in function and visually proportioned for the human form. Series Zero provides the highest level of protective technology adapted to the language of contemporary fashion. Safety gear doesn't have to look or feel like safety gear.
                    </p>
                    <br>
                    <div class="one margin-0 animate">
                        <img src="<?php bloginfo('template_url'); ?>/images/port_two/1300-650-wp_portfolio_slide_thesis_g.jpg" alt="">
                    </div>
                    <div class="clear"></div>
                    <br>
                </div>

                <div class="nav-links">
                    <div class="content-1170 center-relative">
                        <div class="nav-previous"> 
                            <a href="<?php bloginfo('template_url'); ?>/portfolio-one" rel="prev">Ophelia's Bouquet</a>
                            <div class="arrow-holder">←</div>
                            <div class="clear"></div>                                
                        </div>
                        <div class="nav-next"> 
                            <a href="<?php bloginfo('template_url'); ?>/portfolio-three" rel="next">OTG Shorts On-The-Go</a>
                            <div class="arrow-holder">→</div>
                            <div class="clear"></div>                               
                        </div>                            
                    </div>                        
                </div>
            </div> 

<?php get_footer(); ?>
