<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>

            <div class="main-content">
              
              <?php while ( have_posts() ) : the_post(); ?>
              <?php the_content(); ?>
              <?php endwhile; ?>

              <div class="about">
                <?php the_field('text_onas'); ?>
                <a href="<?php echo get_permalink(10); ?>" class="more-link">Více o nás <i class="fa fa-angle-right"></i></a>
              </div>

            </div>

            <?php get_template_part('include/infoboxes'); ?>

<?php get_footer(); ?>