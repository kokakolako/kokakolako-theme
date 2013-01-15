<?php get_header(); ?>

<div class="content">

  <div class="singlePage">
    <?php if (have_posts()): while (have_posts()) : the_post();?>
    <?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,'full', true); ?>
      <article class="article">
        
        <?php the_date('d.m.Y', '<div class="date">', '</div>'); ?>
        <h1 class="postTitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
        <div class="singleMeta">
          <?php the_category( ' ' )?>
        </div>
        <div class="post">
          <?php the_content(__('(mehr...)')); ?>
        </div>

        <!-- Social-Media Integration -->
        <div class="social">
          <div>
            <h2>Wenn dir der Artikel gefallen hat, dann teile ihn doch mit deinen Freunden</h2>            
            <div class="facebook">
              <a onclick="window.open('https://www.facebook.com/sharer.php?u=<?php the_permalink() ?>', 'facebook', 'toolbar=no, width=650, height=450'); return false;" href="http://www.facebook.com/sharer.php?u=<?php the_permalink() ?>" id="facebook">
                <div></div>
              </a>
            </div>            
            <div class="twitter">
              <a onclick="window.open('https://twitter.com/share?url=<?php the_permalink() ?>', 'twitter', 'toolbar=no, width=650, height=450'); return false;" href="http://twitter.com/share?url=<?php the_permalink() ?>">
                <div></div>
              </a>
            </div>            
            <div class="googleplus">
              <a onclick="window.open('https://plus.google.com/share?url=<?php the_permalink() ?>, 'plusone', 'toolbar=no, width=650, height=450'" href="https://plus.google.com/share?url=<?php the_permalink() ?>">
                <div></div>
              </a>
            </div>
          </div>
        </div>

      </article>

      <div class="about">
      <div>
        <h2>Über den Autor</h2>
        <div class="stack">
          <div class="portfolio-link">
            <a href="#">Zu meinem Portfolio</a>
          </div>    
          <img src="http://kokakolako.de/wp-content/themes/kokakolako/img/profile2.jpg">          
        </div>
        <p>
          Mein Name ist Niklas Köhler. Ich bin Schüler 
          und blogge nebenbei unter dem Namen kokakolako.
          Einige große Leidenschaften von mir sind Webdesign,
          Programmieren und Freie Software.
          Meine Themen reichen daher von Themen 
          wie Webdesign und Linux, bishin zu anderen Themen wie zum Beispiel Historik.
        </p>
      </div>
    </div>

    <?php comments_template( '', true ); ?>
    <?php endwhile ?>
    <?php else: ?>
      <article class="article" id="searchResult"><h1><?php wp_title('')?></h1><p><?php _e('Ihre Eingabe konnte leider keine Treffer erzielen.'); ?></p></article>
    <?php endif; ?>
  </div>

</div>

<?php get_footer(); ?>