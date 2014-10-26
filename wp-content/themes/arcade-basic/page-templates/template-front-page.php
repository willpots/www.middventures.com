<?php
/**
 * Template Name: Front Page
 *
 * Description: A front page.
 *
 * @since 1.0.3
 */
get_header(); ?>

  <div class="container">
    <div class="row">
          <div id="primary" <?php bavotasan_primary_attr(); ?>>
            <?php
            if ( have_posts() ) :
              while ( have_posts() ) : the_post();
                get_template_part( 'content', 'noheader' );
              endwhile;

              bavotasan_pagination();
            else :
              get_template_part( 'content', 'none' );
            endif;
            ?>
          </div>
    </div>
  </div>
<?php get_footer(); ?>