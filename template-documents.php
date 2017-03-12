<?php /* Template Name: Dokumenty */ ?>
<?php get_header(); ?>

            <div class="main-content">

              <?php while ( have_posts() ) : the_post(); ?>
              
                <h1><?php the_title(); ?></h1>

              <?php 
                //pro cleny a podstranky
                if($post->ID == 41 || $post->post_parent == 41) {
                  if ( is_user_logged_in() ) {
                    the_content(); ?>

                    <table class="files" cellpadding="0" cellspacing="0" with="100%">
                  <tr>
                    <th></th>
                    <th>Název souboru</th>
                    <th>Popis</th>
                    <th>Typ</th>
                    <th>Velikost</th>
                    <th></th>
                  </tr>

                  <?php

                  // check if the repeater field has rows of data
                  if( have_rows('soubory') ):

                    // loop through the rows of data
                      while ( have_rows('soubory') ) : the_row();

                      $file = get_sub_field('soubor');
                      $path_info = pathinfo( get_attached_file( $file['ID'] ) );
                      $type = $path_info['extension'];
                      $filesize = filesize( get_attached_file( $file['ID'] ) );
                      $size = size_format($filesize, 2);  
                  ?>
                  <tr>
                    <td><img style="max-width: none;" src="<?php echo $file['icon']; ?>" width="14" alt=""></td>
                    <td><?php echo $file['title']; ?></td>
                    <td><?php echo get_sub_field('popis_souboru'); ?></td>
                    <td><?php echo $type; ?></td>
                    <td><?php echo $size; ?></td>
                    <td><a target="_blank" href="<?php echo $file['url']; ?>">Stáhnout soubor</a></td>
                  </tr>
                 <?php
                 endwhile;

                  endif;

                  ?>
                  
                </table>

                <?php  } else { ?>
                    
                  <p>Obsah této stránky je pouze pro registrované a přihlášené uživatele.</p>
                    <p><a href="<?php echo wp_login_url(); ?>"><strong>Přihlašte se prosím zde</strong></a></p>
                    <p><a href="../pro-cleny/zadost">Žádost o přidělení přístupových údajů</a></p>
    
              
                  <?php }
                } else {
                  the_content(); 

                ?>

                <table class="files" cellpadding="0" cellspacing="0" with="100%">
                  <tr>
                    <th></th>
                    <th>Název souboru</th>
                    <th>Popis</th>
                    <th>Typ</th>
                    <th>Velikost</th>
                    <th></th>
                  </tr>

                  <?php

                  // check if the repeater field has rows of data
                  if( have_rows('soubory') ):

                    // loop through the rows of data
                      while ( have_rows('soubory') ) : the_row();

                      $file = get_sub_field('soubor');
                      $path_info = pathinfo( get_attached_file( $file['ID'] ) );
                      $type = $path_info['extension'];
                      $filesize = filesize( get_attached_file( $file['ID'] ) );
                      $size = size_format($filesize, 2);  
                  ?>
                  <tr>
                    <td><img style="max-width: none;" src="<?php echo $file['icon']; ?>" width="14" alt=""></td>
                    <td><?php echo $file['title']; ?></td>
                    <td><?php echo get_sub_field('popis_souboru'); ?></td>
                    <td><?php echo $type; ?></td>
                    <td><?php echo $size; ?></td>
                    <td><a target="_blank" href="<?php echo $file['url']; ?>">Stáhnout soubor</a></td>
                  </tr>
                 <?php
                 endwhile;

                  endif;

                  ?>
                  
                </table>

                <?php
                }
          
     
                ?>
                
                

            </div>
            <?php endwhile; ?>
          

<?php get_footer(); ?>
