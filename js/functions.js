$(function () {

	kokakolako.setRatio();

	if ( ( $(".sidebar ul").children() ).length <= 0) {
		$(".sidebar").css("display","none");
	}
	
	$(".footer-links div a img").tooltip();

});

kokakolako = {
	setRatio: function (width, height) {
		width = $(".youtubeFrame").width();
		height = width / 1.78;
		$(".youtubeFrame").css("height", height);
	},
	mailto: function () {
		window.location.href = "mailto://niklas.koehler@live.de";
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