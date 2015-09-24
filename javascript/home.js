function hoverDiv(img, div) {
    $(img).hover(function () {
        $(div).finish();
        $(div).css('display', 'block');
        $(div).animate({
            opacity: 0.8,
            paddingTop: "28px",
            height: "71px"
        }, 200, function () {
            if ($(div).is(':hover')) {
                $(div).animate({
                    opacity: 1
                }, 0);
            }
        });
    }, function () {
        if (!$(div).is(':hover')) {
            $(div).finish();
            $(div).animate({
                opacity: 0.0,
                paddingTop: "0px",
                height: "0px"
            }, 200, function () {
                $(div).css("display","none");
            });
        } else {
            $(div).animate({
                opacity: 1
            }, 200, function () {
                // Animation complete.
            });
            $(div).mouseleave(function () {
                if (!$(img).is(':hover')) {
                    $(div).animate({
                        opacity: 0.0,
                        paddingTop: "0px",
                        height: "0px"
                    }, 200, function () {
                        $(div).css("display","none");
                    });
                }
            });
        }
    });
}