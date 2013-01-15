<?php

  /**
  *@desc A single blog post See page.php is for a page layout.
  */

  get_header();
  

  if (have_posts()) : while (have_posts()) : the_post();
  ?>
  <div class="main">
    <div class="postWrapper" id="post-<?php the_ID(); ?>">
  <?php the_date('d.m.Y', '<h2 class="date">', '</h2>'); ?>
      <h1 class="postTitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
      <div class="post"><?php the_content(__('(more...)')); ?></div>
      <div id="socialshareprivacy"></div>
      <p class="postMeta"><b>Kategorie(n): </b><?php the_category('-') . comments_popup_link(__('Kommentare (0)'), __('Kommentare (1)'), __('Kommentare (%)')) . edit_post_link(__('Edit')); ?></p>
    </div>

	<?php

  comments_template();
  endwhile; else: ?>

		<p>Ihre Eingabe konnte leider keine Treffer erzielen.</p>

<?php endif; ?>  
  </div>

<script>
    $(document).ready(function($){
      if($('#socialshareprivacy').length > 0){
        $('#socialshareprivacy').socialSharePrivacy(); 
      }
    });
</script>

<ol class="bcn">
  <?php if ( function_exists('yoast_breadcrumb') ) {
    yoast_breadcrumb('<li id="breadcrumbs">','</li>');
  } ?>
</ol>
</div>

<div class="articleSideContainer">
<!-- Secondary Loop -->
  <?php $myQuery = new WP_Query('showposts=6&offset=4'); while ($myQuery->have_posts()) : $myQuery->the_post();?>
    <div class="article">
      <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
      <p><a href="<?php the_permalink() ?>"><?php the_excerpt(); ?></a></p> 
    </div>
  <?php endwhile; wp_reset_query();  ?><div id="footer"><?php wp_footer(); ?></div>
</div>
</div>

</body>
</html>