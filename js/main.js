// Activating the animation of the news bar
var totalWidth = 0;

$(".news-holder .news .new").each(function() {
    var oneWidth = $(this).outerWidth();
    totalWidth += oneWidth;
});

function newsBar() {
    var news = $(".news-holder .news") ,
        actualWidth = totalWidth + ($(window).width() - (news.offset().left + news.outerWidth())) ,
        newsSpeed   = (actualWidth / /* Here goes your speed with pixels */100) * 1000;

    $(".news-holder .news").animate({
        "right": -totalWidth
    }, newsSpeed, "linear", function () {
        $(".news-holder .news").css("right", "100%");
        newsBar();
    });

}
newsBar();

$(".news-holder").on("mouseenter", function() {
    var that = $(this).find(".news").stop(true);
});

$(".news-holder").on("mouseleave", function() {
    newsBar();
});