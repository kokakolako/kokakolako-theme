<!DOCTYPE html> 
<html> 
	<head> 
	<title>Page Title</title>    
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
	
    </head> 

<body> 

<?php $myQuery = new WP_Query('showposts=3'); while ($myQuery->have_posts()) : $myQuery->the_post();?>
            <div class="article">
                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                <p><a href="<?php the_permalink() ?>"><?php the_excerpt(); ?></a></p>
            </div>
<?php endwhile; wp_reset_query(); ?>

</body>
</html>