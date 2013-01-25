<?php
	
// Add RSS links to <head> section
automatic_feed_links();

// Prevent replacement of comment count (DISQUS)
remove_filter('comments_number', 'dsq_comments_text');
remove_filter('get_comments_number', 'dsq_comments_number');
remove_action('loop_end', 'dsq_loop_end');

// Remove rel attribute from the category list
function remove_category_list_rel($output)
{
  $output = str_replace(' rel="category tag"', '', $output);
  return $output;
}
add_filter('wp_list_categories', 'remove_category_list_rel');
add_filter('the_category', 'remove_category_list_rel');
	
// Load jQuery
if ( !is_admin() ) {
wp_deregister_script( "jquery" );
wp_register_script( "jquery", ( "http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js" ), false );
wp_enqueue_script( "jquery" );
}

add_theme_support('post-thumbnails');
set_post_thumbnail_size(200, 200);

// Ändern der Länge der Textauszüge
function new_excerpt_length( $length ) {
     return 80;
}
add_filter( "excerpt_length", "new_excerpt_length" );

// The Excerpt [...]
function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Registrierung der Sidebar + Anpassungen
if ( function_exists( "register_sidebar" ) )
register_sidebar( array(
	"before_widget" => '<li id="%1$s" class="widget %2$s">',
	"after_widget" => "</li>",
	"before_title" => '<span class="title">',
	"after_title" => "</span>",
) );


// ----------------------------------------------------------------------------------------------------
// -------------------------------------------Short-Codes-Sammlung-------------------------------------
// ----------------------------------------------------------------------------------------------------


// SHORT-CODE		[recent-posts]
// ATTRIBUTE		posts="Anzahl der anzuzeigenden Posts"
// BESCHREIBUNG		Die letzten Artikel in einer Liste und mit einer h3-Überschrift ausgeben
function recent_posts ( $atts, $content = null ) {
   extract( shortcode_atts(array(
      'posts' => 1,
   ), $atts));

   $return_string = "<h3>".$content."</h3>";
   $return_string .= "<ul>";
   query_posts(array( "orderby" => "date", "order" => "DESC" , "showposts" => $posts ));
   if ( have_posts() ) :
      while ( have_posts() ) : the_post();
         $return_string .= '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
      endwhile;
   endif;
   $return_string .= "</ul>";

   wp_reset_query();
   return $return_string;
}

// SHORT-CODE		[picture]
// ATTRIBUTE		src="bild.png"; alt="Beschriftung"; title="Titel"; caption="Beschreibung";
// BESCHREIBUNG		Bilder mit Alt/Title Beschreibung + Beschriftung einbinden
function picture_function( $atts ) {
	$src = ( $atts["src"] );
	$alt = ( $atts["alt"] );
	$title = ( $atts["title"] );
	$caption = ( $atts["caption"] );
	$license = ( $atts["license"] );
	$author = ( $atts["author"] );
	$generate_picture = '
	<div class="picture-wrapper">
		<div class="picture">
			<img src="'.$src.'" title="'.$caption.'" alt="'.$alt.'" data-caption="'.$caption.'" />
		</div>
	</div>
	';
	return $generate_picture;
}

//SHORT-CODE		[youtube]
//ATTRIBUTE		src="Youtube-ID des Videos"
//BESCHREIBUNG		YouTube-Videos W3C-Konform einbinden + Überdeckung von Top-Bar
function youtube_function( $atts ) {
	$src = ( $atts["src"] );
	$make_youtube = '
	<iframe class="youtubeFrame" src="http://www.youtube.com/embed/'.$src.'?wmode=opaque" frameborder="0" allowfullscreen=""></iframe>
	';
	return $make_youtube;
}

// Registriere Short-Codes
function register_shortcodes() {
	add_shortcode( "recent_posts", "recent_posts_function" );
	add_shortcode( "picture", "picture_function" );
	add_shortcode( "youtube", "youtube_function" );
}

// Initialisierung der Shortcode-Registrierung
add_action( "init", "register_shortcodes" );

?>