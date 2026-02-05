<?php
/**
 * The template for displaying archive.
 *
 * @package    Boilerplate
 * @subpackage Boilerplate/templates
 */

defined('WPINC') or die("No direct access"); // Exit if accessed directly

get_header(); ?>

<div id="primary" <?php post_class('site-content archive boilerplate'); ?>>
    This is the Boilerplate archive
    hallo
    <?php 
    echo '<pre>';
    print_r(get_config());
    echo '</pre>';
    ?>
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post(); ?>

            <article class="post">
                <h1><a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a></h1>
                <?php the_excerpt(); ?>
            </article>

            <?php
        endwhile;
    endif; ?>

    <?php wp_link_pages(); ?>

    <?php build_pagination(); ?>
</div>

<?php get_footer();