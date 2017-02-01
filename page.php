<?php get_header(); ?>

            <div class="main-content">

              <?php while ( have_posts() ) : the_post(); ?>
              
                <h1><?php the_title(); ?></h1>

                <?php 
                //pro cleny a podstranky
                if($post->ID == 41 || $post->post_parent == 41) {
                	if ( is_user_logged_in() ) {
                		the_content(); 
                	} else { ?>
                		
						<p>Obsah této stránky je pouze pro registrované a přihlášené uživatele.</p>
							<p><a href="<?php echo wp_login_url(); ?>"><strong>Přihlašte se prosím zde</strong></a></p>
				
                	<?php }
                } else {
                	the_content(); 
                }
					
     
                ?>

                
              <?php endwhile; ?>

            </div>

          

<?php get_footer(); ?>