







jq(function () {

    var t = ad_n  = 0;

    var  ad_count = jq("#play_list_text>ul>li").size();

    t = setInterval(showadAutobanner, 5000);



   



    jq("#play_list>li:eq(0)").addClass("ac");

    jq("#play_list_text li").eq(ad_n).addClass("hover");



    jq("#play_list_text li").click(function () {

        var i = jq(this).attr("code") - 1

        ad_n = i;

        if (i >= ad_count) return;



        jq("#play_list_text li>img").attr("src", "/Home/images/ipoint2.png");

        jq(this).find("img").attr("src", "/Home/images/ipoint1.png");



        jq("#play_list>li.ac").animate({

            opacity: "0.2"

        }, 500, "linear", function () {

            jq(this).removeClass().css("z-index", "0");

            jq("#play_list>li").eq(ad_n).css("z-index", "1").animate({ opacity: "1" }, 500).addClass("ac");

        });



    });



    jq("#play_list_text li").hover(function () { clearInterval(t) },

        function () {

            t = setInterval(showadAutobanner, 5000);

        });







    function showadAutobanner() {

        ad_n = ad_n >= (ad_count - 1) ? 0 : ad_n + 1;

        jq("#play_list_text li").eq(ad_n).trigger('click');

    }

})









jq(function () { 



    if (jq("#marketad").length > 0) {

        function marketad() {

            var _heightbg = jq(document).height();

            var _width = jq(window).width();

            var _height = jq(window).height();



            var left = (_width - 754) / 2;

            var top = (_height - 459) / 2;



            jq("#marketadbg").css({ "opacity": "0.4", "height": _heightbg + "px" }).show();

            jq("#marketad").css({ "width": "704px", left: left + "px", top: top + "px" }).show();



        }

        marketad();

        jq("#marketad .close").click(function () {

            jq("#marketad").remove();

            jq("#marketadbg").remove();

        });



        jq(window).resize(function () {

            marketad();

        });

    }



})









