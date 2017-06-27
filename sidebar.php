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

          <a target="_blank" href="http://darcovskasms.cz/projekt-957/bezpeCnE-u-vody-pomozte-nAm-pomAhat.html" class="banner"><img src="<?php echo BASE_URL; ?>/images/banner.jpg" alt="Dárcovská DMS"></a>

          <a target="_blank" href="http://bit.ly/Podporuji-Vodní-Záchrannou-Službu" class="banner"><img src="<?php echo BASE_URL; ?>/images/banner2.jpg" alt="GIVT - klikni a pomáhej"></a>

          <div id="calendar">
            <iframe src="https://www.google.com/calendar/hosted/vzs.cz/embed?showTitle=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=vzs.cz_r7fgkv0ev9trmgen3r0ic1vul4%40group.calendar.google.com&amp;color=%2342104A&amp;src=host%40vzs.cz&amp;color=%23BE6D00&amp;src=info%40vzs.cz&amp;color=%232F6309&amp;src=cs.czech%23holiday%40group.v.calendar.google.com&amp;color=%FFFFFF23&amp;ctz=Europe%2FPrague" height="300" style="border: 1px solid #eee;"></iframe>
            <div class="text-center"><a href="<?php echo get_permalink(39); ?>">Zobrazit celý kalendář</a></div>
          </div>

        </div>
