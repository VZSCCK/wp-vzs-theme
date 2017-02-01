<?php get_header(); ?>

            <div class="main-content">

              <?php while ( have_posts() ) : the_post(); ?>
              
                <h1><?php the_title(); ?></h1>

                <?php 

				$images = get_field('galerie');

				if( $images ) { ?>
				    <ul class="gallery">
				        <?php foreach( $images as $image ): ?>
				            <li>
				                <a href="<?php echo $image['url']; ?>">
				                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
				                </a>		                
				            </li>
				        <?php endforeach; ?>
				    </ul>
				<?php } else { ?>

				<?php the_content(); ?>

				<?php } ?>

                
              <?php endwhile; ?>

            </div>

          

<?php get_footer(); ?>