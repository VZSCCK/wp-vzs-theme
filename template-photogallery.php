<?php /* Template Name: Fotogalerie */ ?>
<?php get_header(); ?>

            <div class="main-content">

              <?php while ( have_posts() ) : the_post(); ?>
              
                <h1><?php the_title(); ?></h1>
                
                <ul class="gallery-list">
                <?php
                //$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_title', 'sort_order' => 'asc' ) );
                $args = array( 
                  'child_of' => $post->ID, 
                  'orderby' => 'title', 
                  'order' => 'asc' 
                  ) ;

                $the_query = new WP_Query( $args );

               if( $the_query->have_posts() ): 
                ?>
                  
                    <li class="item">
                      <a href="<?php the_permalink(); ?>">
                        <span class="item-img"><?php the_post_thumbnail('gallery'); ?></span>
                        <strong class="item-title"><?php the_title(); ?></strong>
                      </a>
                    </li>
                  
                <?php
                } 
              ?>
                
             <?php endif; ?>

            <?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>
              </ul>

            </div>

          

<?php get_footer(); ?>