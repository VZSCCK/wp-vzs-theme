<div class="sidebar">
          
          <div class="sidemenu">
            <?php wp_nav_menu(array('menu_class'=>'sidemenu-list', 'container' => '', 'theme_location'=>'header'));?>
          </div>

          <div class="news">
            <h3><i class="fa fa-list-alt"></i> Poslední aktuality</h3>
            <ul class="news-list">
            
            <?php 

            query_posts('cat=1&orderby=date&order=desc&showposts=2');
            
            while ( have_posts() ) : the_post(); ?>
              <li>
                <a href="<?php the_permalink(); ?>" class="news-list-link">
                  <strong class="title"><?php the_title(); ?></strong>
                  <span class="perex"><?php custom_length_excerpt(10); ?></span>
                </a>
              </li>
            <?php endwhile; wp_reset_query(); ?>
              
            </ul>
            <div class="text-center"><a href="<?php echo get_category_link(1); ?>" class="all">Všechny aktuality</a></div>
            <div class="fcb text-center"><a href="https://www.facebook.com/VZSCCK" target="_blank" class="fcb-link"><img src="<?php echo BASE_URL; ?>/images/fcb.png" alt="Facebook VSZ"></a></div>
          </div>

<?php
          if($post->ID == 18 || $post->post_parent == 18) ;
             else { ?>
                    <a target="_blank" href="https://www.zachrankaapp.cz" class="banner"><img src="<?php echo BASE_URL; ?>/images/banner4.gif" alt="Aplikace ZACHRANKA"></a>
                    <a target="_blank" href="https://www.ceskatelevize.cz" class="banner"><img src="<?php echo BASE_URL; ?>/images/bannerct.png" alt="Česká televize"></a>
                    <a target="_blank" href="http://bit.ly/Podporuji-Vodní-Záchrannou-Službu" class="banner"><img src="<?php echo BASE_URL; ?>/images/banner2.jpg" alt="GIVT - klikni a pomáhej"></a>

                    <div id="calendar">
                              <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=2&amp;bgcolor=%23ffffff&amp;ctz=Europe%2FPrague&amp;src=dnpzLmN6X3I3ZmdrdjBldjl0cm1nZW4zcjBpYzF2dWw0QGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&amp;src=Y19namlqc3NiYWtwZWRpbTExZ2RpYTcxbDJwMEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;src=aG9zdEB2enMuY3o&amp;src=Y3MuY3plY2gjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23009688&amp;color=%23F6BF26&amp;color=%237CB342&amp;color=%23E67C73&amp;showTitle=0&amp;showDate=1&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0" height="300" style="border: 1px solid #eee;"></iframe>   
                              <div class="text-center"><a href="<?php echo get_permalink(39); ?>">Zobrazit celý kalendář</a></div>
                    </div>
          <?php } ?> 
        </div>


