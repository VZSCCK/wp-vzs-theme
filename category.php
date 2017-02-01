<?php get_header(); ?>

            <div class="main-content">              
              
                <h1><?php echo single_cat_title('', true); ?></h1>

                  <?php 
                  //aktuality
                  if($cat != 3) { 
                  ?>
                  <ul class="news-list">
                  <?php while ( have_posts() ) : the_post(); ?>
                	<li>
		                <a href="<?php the_permalink(); ?>" class="news-list-link">
		                  <strong class="title"><?php the_title(); ?></strong>
		                  <span class="perex"><?php custom_length_excerpt(10); ?></span>
		                </a>
		              </li>
                  <?php endwhile; ?>
                  </ul>
                  <?php } ?>

                  <?php 
                  //fotogalerie
                  if($cat == 3) { 
                  ?>
                  <ul class="gallery-list">
                    <?php 
                    $args = array( 
                    'cat' => 3, 
                    'orderby' => 'title', 
                    'order' => 'desc',
                    'showposts' => -1 
                    ) ;

                    $the_query = new WP_Query( $args );

                    ?>
                    <?php if( $the_query->have_posts() ):  ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <li class="item">
                      <a href="<?php echo get_permalink( $post->ID ); ?>">
                        <span class="item-img"><?php the_post_thumbnail('gallery'); ?></span>
                        <strong class="item-title"><?php the_title(); ?></strong>
                      </a>
                    </li>
                  <?php endwhile; ?>
                    <?php endif; ?>

                    <?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>
                  </ul>
                  <?php } ?>
        
                
            </div>

          

<?php get_footer(); ?>