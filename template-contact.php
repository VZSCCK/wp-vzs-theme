<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>

            <div class="main-content">

              <?php while ( have_posts() ) : the_post(); ?>
              
                <h1><?php the_title(); ?></h1>

                <div class="cols cols-2 border-bottom">

                  <?php

                  // check if the repeater field has rows of data
                  if( have_rows('rada_1') ):

                    // loop through the rows of data
                      while ( have_rows('rada_1') ) : the_row();
                    ?>

                    <div class="col">
                      <h4><?php the_sub_field('nadpis'); ?></h4>
                      <?php the_sub_field('text'); ?>
                      
                    </div>
                          
                    <?php
                      endwhile;

                  endif;

                  ?>


                  
                </div>

                <div class="cols cols-3">

                  <?php

                  // check if the repeater field has rows of data
                  if( have_rows('rada_2') ):

                    // loop through the rows of data
                      while ( have_rows('rada_2') ) : the_row();
                    ?>

                    <div class="col">
                    <h4><?php the_sub_field('nadpis_2'); ?></h4>
                    <p>
                      <strong><?php the_sub_field('jmeno'); ?></strong><br>
                      mobil: <?php the_sub_field('mobil'); ?><br>
                      email: <a href="mailto:<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a>
                    </p>
                  </div>
                          
                    <?php
                      endwhile;

                  endif;

                  ?>
                  
                  
                </div>

                <div id="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2565.060779765585!2d14.396261815828337!3d49.991469928210336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470b96d7ad4336af%3A0xe38d1e5bfd85fa2f!2sLahovsk%C3%A1+25%2C+159+00+Praha-Zbraslav-Lahovice!5e0!3m2!1scs!2scz!4v1484130397181" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

                
              <?php endwhile; ?>

            </div>

          

<?php get_footer(); ?>