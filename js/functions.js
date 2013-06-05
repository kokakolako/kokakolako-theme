$(document).load().scrollTop();

$(function () {

	kokakolako.setRatio();

	$(".dropdown-toggle").dropdown();

	if ( document.documentElement.clientWidth >= 1000 ) {

		var sidebar = $(".sidebar"),
			main = $(".main");

		sidebar.waypoint({
			offset: 75,
			handler: function(direction) {
				sidebar.toggleClass( "sticky", direction == "down" );
			}
		});

		main.waypoint({
			offset: 61,
			handler: function (direction) {
				if ( direction == "down" ) {
					$(".nav li:nth-child(2)").fadeOut(0);
					$(".navbar-logo").fadeIn(300);
				}
				else if ( direction == "up" ) {
					$(".navbar-logo").fadeOut(0);
					$(".nav li:nth-child(2)").fadeIn(300);
				}
			}
		});

	}

});

/*

Sektionen: 
header + main + footer

*/

kokakolako = {
	setRatio: function(width, height) {
		width = $(".youtubeFrame").width();
		height = width / 1.78;
		$(".youtubeFrame").css("height", height);
	},
	mailto: function () {
		window.location.href = "mailto:niklas.koehler@live.de";
	},
	loadArticle: function(pageNumber) {
		$.ajax({
			url: "<?php bloginfo('wpurl') ?>/wp-admin/admin-ajax.php",  
			type: "POST",
			data: "action=infinite_scroll&page_no=" + pageNumber + "&loop_file=loop",   
			success: function(html) {
				$("#content").append(html); // This will be the div where our content will be loaded  
			}
		});
		return false;
	}
};

$('.picture img').each(function(n) {
	n += 1;
	$(this).wrap('<div class="tint t' + n + '"></div>');
	caption = $(this).attr("data-caption");
	$('<p class="caption">' + caption + '</p></div>').appendTo(".t" + n);
});

$(".tint").click(function () {
	window.location.href = $(this).children().attr("src");
});