<?php get_header(); ?>                                        

<!-- The main loop -->
<div class="main">
	<?php if ( have_posts() ): while ( have_posts() ) : the_post();?>
		<article class="article">
			<?php if ( is_user_logged_in() ) { ?>
				<?php edit_post_link('<i class="icon-pencil"></i>', '<button class="button" type="button" >', '</button>'); ?>
			<?php } ?>
			<h1 class="postTitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<?php if(has_post_thumbnail()) { the_post_thumbnail(array('class' => 'thumbnail')); } ?>
			<div class="post">
				<?php the_excerpt() ?>
				<a class="lisa-btn" href="<?php the_permalink() ?>"><p>Weiterlesen</p></a>
			</div>
	    </article>
	<?php endwhile ?>
	<?php else:	?>
		<article class="article" id="searchResult">
			<h1><?php wp_title( "" )?></h1>
			<p><?php _e( "Ihre Eingabe konnte leider keine Treffer erzielen." ); ?></p>
		</article>
	<?php endif; ?>
</div>

<section class="sidebar">

	<!-- Social-Media Integration -->
	<section class="social">
		<div>
			<div class="facebook">
				<a href="http://www.facebook.com/sharer.php?u=http://kokakolako.de" onclick="window.open('https://www.facebook.com/sharer.php?u=http://kokakolako.de', 'facebook', 'toolbar=no, width=650, height=450'); return false;">
					<div></div>
				</a>
			</div>
			<div class="twitter">
				<a href="http://twitter.com/share?url=http://kokakolako.de" onclick="window.open('https://twitter.com/share?url=http://kokakolako.de', 'twitter', 'toolbar=no, width=650, height=450'); return false;">
					<div></div>
				</a>
			</div>
			<div class="googleplus">
				<a href="https://plus.google.com/share?url=http://kokakolako.de" onclick="window.open('https://plus.google.com/share?url=http://kokakolako.de', 'plusone', 'toolbar=no, width=650, height=450'); return false;">
					<div></div>
				</a>
			</div>
		</div>
	</section>

	<!-- About the author -->
	<section class="about">
		<div>
			<h2>Über mich</h2>
			<img src="http://kokakolako.de/wp-content/themes/kokakolako/img/profile2.jpg" alt="Profilfoto von Niklas Köhler" />
			<p>
				Mein Name ist Niklas Köhler. Ich bin Schüler 
				und blogge nebenbei unter dem Namen kokakolako.
				Einige große Leidenschaften von mir sind Webdesign,
				Programmieren und Freie Software.
				Meine Themen reichen daher von Themen 
				wie Webdesign und Linux und Themen, die mir sonst so in den
				Sinn kommen.
			</p>
		</div>
	</section>

</section>
<?php get_footer(); ?>