<?php
/**
 * The main template file.
 *
 * This is the most genericf template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>


	<div class="stickyBG">
        <div class="content">
            <h1 class="title2">OUMS</h1>
        </div>
    </div>

        <nav class="sticky">
            <div class="content">
                <div class="clicky"></div>
                <ul class="navItems">

                    <li><a class="whatIsOUMS">What is OUMS?</a></li>
                    <li><a class="whatWeDo">What We Do</a></li>
                    <li><a class="whoWeAre">Who We Are</a></li>
                    <li><a class="contact">Contact</a></li>
                    <li class="socialIcon"><a href="http://www.twitter.com/ohioums" target="_blank"><img src="<?php bloginfo('template_url');?>/images/twittericon.png" alt="Twitter icon" width="25"></a></li>
                    <li class="socialIcon"><a href="https://www.facebook.com/groups/125795230827588/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/facebookicon.png" alt="Facebook icon" width="25"></a></li>
                </ul>
                <div class="mobileNavActivator">

                </div>
            </div>
        </nav>

        <ul class="mobileNavItems">
        			<li class="empty"><h1 class="title3">OUMS</h1></li>
                    <li><a class="whatIsOUMS">What is OUMS?</a></li>
                    <li><a class="whatWeDo">What We Do</a></li>
                    <li><a class="whoWeAre">Who We Are</a></li>
                    <li><a class="contact">Contact</a></li>
                    <li class="socialIcon"><a href="http://www.twitter.com/ohioums" target="_blank"><img src="<?php bloginfo('template_url');?>/images/twittericon.png" alt="Twitter icon" width="25"></a></li>
                    <li class="socialIcon"><a href="https://www.facebook.com/groups/125795230827588/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/facebookicon.png" alt="Facebook icon" width="25"></a></li>
                </ul>







        <div class="headerItems">
            <div class="headerItemsContainer">
                <div class="headerItem leftTextAlign">
                    <a href="https://www.facebook.com/groups/125795230827588/" target="_blank">Join the Facebook Group</a>
                </div><!-- END headerItem -->
                <div class="headerItem">
                    <div class="centerTextAlign">Meetings: Mondays | 7pm | Seigfred 306</div>
                </div><!-- END headerItem -->
                <div class="headerItem rightTextAlign">
                    <a href="http://www.twitter.com/ohioums" target="_blank">Follow on Twitter @ohioums</a>
                </div><!-- END headerItem -->
            </div> <!-- END headerItemsContainer -->
        </div><!-- END headerItems -->

        <?php get_template_part( 'sections/section1' );  // Navigation and Logo (nav_logo.php) ?>

        <?php get_template_part( 'sections/section2' );  // Navigation and Logo (nav_logo.php) ?>

        <?php get_template_part( 'sections/section3' );  // Navigation and Logo (nav_logo.php) ?>

        <?php get_template_part( 'sections/section4' );  // Navigation and Logo (nav_logo.php) ?>

        <?php get_template_part( 'sections/section5' );  // Navigation and Logo (nav_logo.php) ?>



<?php get_footer(); ?>