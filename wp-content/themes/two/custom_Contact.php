<?php /* Template Name: custom_Contact */ ?>
<?php get_header(); ?>

            <div id="content" class="site-content">
                <div class="section-wrapper">
                    <h1 class="entry-title page-title block content-1170 center-relative"> 
                        Let's do some <br> 
                        amazing <b>work</b> together
                    </h1> 

                    <img class="title-logo center-relative block" src="images/divider_01.png" alt="">

                    <div class="content-wrapper block content-1170 center-relative">
                        <div class="one_half">
                            <p>
                                <strong>Contact</strong>
                            </p>
                            <p>
                                We choose to go to the moon in this decade and do the other things, not because they are easy.
                            </p>
                            <br>
                            <p>
                                Because they are hard, because that goal will serve to organize and measure the best of our energies and skills, 
                                because that challenge is one that we are willing to accept, one we are unwilling to postpone and one.
                            </p>
                            <br>
                            <p class="contact-info">
                                <span>Address:</span> New York, NY, United States <br> 
                                <span>Phone:</span> +1 234-567-890 <br> 
                                <span>Hours:</span> 6:00 am – 2:00 am <br>
                            </p>
                        </div>

                        <div class="one_half last">
                            <div class="contact-form">
                                <!--
                                <p>
                                    <input id="name" type="text" name="your-name" placeholder="YOUR NAME">
                                </p>
                                <p>
                                    <input id="contact-email" type="email" name="your-email" placeholder="EMAIL ADDRESS">
                                </p>                                    
                                <p>
                                    <input id="subject" type="text" name="your-subject" placeholder="SUBJECT">
                                </p>
                                <p>
                                    <textarea id="message" name="your-message" placeholder="MESSAGE..."></textarea>
                                </p>
                                <p class="contact-submit-holder">
                                    <input type="submit" value="SEND">
                                </p> 
                                -->
                                <?php include 'wp-content/themes/portfolio/php/contactForm.php'; ?>

                            </div>    
                        </div>

                        <div class="clear"></div>
                        
                        <p class="top-50">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4274.290564544589!2d-75.2952832049782!3d40.753669641460846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2srs!4v1444506658649" width="600" height="450" allowfullscreen="allowfullscreen"></iframe>
                        </p>                        
                    </div>                        
                </div>           
            </div> 

<?php get_footer(); ?>
