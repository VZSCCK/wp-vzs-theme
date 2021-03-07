<?php get_header(); ?>

            <div class="main-content">

              <?php while ( have_posts() ) : the_post(); ?>
              
                <h1><?php the_title(); ?></h1>

                <?php 
                //pro cleny a podstranky
                //if($post->ID == 41 || ($post->post_parent == 41 && $post->ID != 718)) {
		if($post->ID == 41 || (in_array(41, get_ancestors( $post->ID, 'page' )) && $post->ID != 718)) {
                	if ( is_user_logged_in() ) {
                		the_content(); 
                	} else { ?>
                		
						<p>Obsah této stránky je pouze pro registrované a přihlášené uživatele.</p>
							<p><a href="<?php echo wp_login_url(); ?>"><strong>Přihlašte se prosím zde</strong></a></p>
				                        <p><a href="../pro-cleny/zadost">Žádost o přidělení přístupových údajů</a></p>

				
                	<?php }
                } else {
                	the_content(); 
                }
					
     
                ?>

                
              <?php endwhile; ?>

            </div>

          

<?php get_footer(); ?>
