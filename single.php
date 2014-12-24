<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package AmericanExperience
 * @since American Experience 1.0
 */
 
get_header(); ?>
<div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
        <?php while(have_posts()) : the_post() ?>
        <?php amexp_content_nav('nav-above'); ?>
        <?php
            /* Include the Post-Format-specific template for the content.
            * If you want to overload this in a child theme then include a file
            * called content-___.php (where ___ is the Post Format name) and that will be used instead.
            */
        get_template_part('content', 'single');
        ?>
        <?php amexp_content_nav('nav-below'); ?>
        <?php
        // If comments are open or we have at least one comment, load up the comment template
        if(comments_open() || '0' != get_comments_number())
            comments_template('', true);
        ?>
        <?php endwhile; ?>
    </div><!-- #content .site-content -->
</div><!-- #primary .content-area -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>