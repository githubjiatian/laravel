//JQ增强
jQuery.support.placeholder = (function () {
    var i = document.createElement('input');
    return 'placeholder' in i;
})();
//JQ防冲突
var jq = $.noConflict();

//var t = n = count = 0;

//function showAutobanner() {
//    n = n >= (count - 1) ? 0 : n + 1;
//    jq("#play_text li").eq(n).trigger('click');
//}
//正式代码
jq(function () {

    
    jq("#chlidmenu li").mouseover(function () {
        var index1 = jq(this).index(); 
        jq("#chlidmenu li a").removeClass("active1");
        jq(this).find("a").addClass("active1");

        jq("#chlidmenuul>ul").hide();
        jq("#chlidmenuul>ul:eq(" + index1 + ")").show();

    })


    //count = jq("#play_text li").length;
    //var code = jq("#banner .bannerbg").eq(0).find("img").attr("code");
    //jq("#bannerbg").css({ "background-color": code }); 
    //jq("#nav li.hover>div>ul>li").hover(function () {
    //    var p = jq(this).position();
    //    jq(this).css({ "background-color": "#ffffff", "border-right": "solid 1px #fff" });
    //    jq("dl>dd>div", this).css({ "top": p.top, "left": p.left + 202 }).show();
    //}, function () {
    //    jq(this).css({ "background-color": "#fffce7", "border-right": "solid 1px #efdc77" });
    //    jq("dl>dd>div", this).hide();
    //})

    //jq(function () {
    //    jq("#banner>div:not(:first-child)").hide();
    //    jq("#banner .bannerbg").eq(0).show().unbind().click(function () {
    //        location.href = jq(this).attr("code");
    //    });
    //    var t = setInterval("showAutobanner()", 4000);
    //    jq("#play_text li").click(function () {
    //        var i = parseInt(jq(this).html()) - 1
    //        n = i;
    //        if (i >= count) return;
    //        jq("#play_text li").removeClass().addClass("bai").eq(n).removeClass().addClass("fen");

    //        jq("#banner .bannerbg").filter(":visible").fadeOut(500, function () {
    //            jq("#banner .bannerbg").eq(n).fadeIn(500);
    //            var code = jq("#banner .bannerbg").eq(n).find("img").attr("code");
    //            jq("#bannerbg").css({ "background-color": code });  
    //        })

    //    });
    //    jq("#play_text li").hover(function () { clearInterval(t) }, function () { t = setInterval("showAutobanner()", 4000); });
    //});

    //--------------------------------------------LAZYLOAD
    // jq('img[data-original]').lazyload({effect:"fadeIn",threshold:200,failure_limit:100});

    //--------------------------------------------filter_value释义
    jq('#filters a[data-description]').mouseover(function () {
        var filter_value_name = jq(this).html();
        var filter_value_dict = jq(this).attr('data-description');
        if (filter_value_dict.length > 0) {
            console.log(jq(this).offset().left, jq(window).width());
            if (jq(this).offset().left - (jq(window).width() - 990) / 2 > 990 - 400) {
                var left = jq(this).offset().left - 312 + jq(this).width() + 6 + 'px';
            } else {
                var left = jq(this).offset().left + 'px';
            }
            var top = jq(this).offset().top + 21 + 'px';
            jq('#filter_value_dict .filter_value_name').html(filter_value_name + '：');
            jq('#filter_value_dict .filter_value_dict').html(filter_value_dict);
            jq('#filter_value_dict').css({ left: left, top: top }).show();
        }
    }).mouseout(function () {
        jq('#filter_value_dict').hide();
    });

    //--------------------------------------------搜索框关键词占位符
    var ori_keyword = jq('#keyword').attr('value');
    jq('#keyword').val(ori_keyword);
    jq('#keyword').focus(function () {
        if (jq(this).val() == ori_keyword) {
            jq(this).val('');
        }
    }).blur(function () {
        if (jq(this).val() == '') {
            jq(this).val(ori_keyword).css('color', '');
        }
    }).keyup(function () {
        if (jq(this).val().length > 0 && jq(this).val() != ori_keyword) {
            jq(this).css('color', '#333');
        }
    });

    //----------------------------------------------更多登陆面板
    jq('.more_login').live('mouseover', function () {
        var left = jq(this).offset().left;
        var top = jq(this).offset().top + 24;
        jq('.more_login .down').css({ left: left + 'px', top: top + 'px' });
        jq('.more_login .down').show();
    }).live('mouseout', function () {
        jq('.more_login .down').hide();
    });
    //	jq('.more_login').mouseover(function(){
    //		jq(this).show();
    //	}).mouseout(function(){
    //		jq(this).hide();
    //	})

    //---------------------------------------------分类展开JS
    function show_cat_panel() {
        var index = jq(this).index();
        //分类样式
        jq('#allsorts dl:eq(' + index + ')').addClass('active');
        if (index == 0) {
            jq('#allsorts').css('border-top-color', '#e1c636');
        } else {
            if (index == 10) {
                jq('#allsorts').css('border-bottom-color', '#e1c636');
            }
            jq('#allsorts dl:eq(' + (index - 1) + ')').css('border-bottom-color', '#e1c636');
        }
        //分类面板
        var left = jq('#allsorts dl:eq(' + index + ')').offset().left + 200 + 'px';
        if (index < 7) {
            var top = jq('#allsorts dl:eq(' + index + ')').offset().top - 1 + 'px';
        } else {
            var top = jq('#allsorts dl:eq(' + index + ')').offset().top - 1 - (jq('#allsorts .cat_panel').eq(index).height() - 26) + 'px';
        }
        jq('#allsorts .cat_panel').eq(index).css({ left: left, top: top }).show();
    }
    function hide_cat_panel() {
        var index = jq(this).index();
        jq('#allsorts dl:eq(' + index + ')').removeClass('active');
        jq('#allsorts').css({ borderTopColor: '', borderBottomColor: '' });
        jq('#allsorts dl:eq(' + (index - 1) + ')').css('border-bottom-color', '');
        jq('#allsorts .cat_panel').eq(index).hide();
    }
    jq('#allsorts dl').mouseover(show_cat_panel).mouseout(hide_cat_panel);
    jq('#allsorts .cat_panel').mouseenter(show_cat_panel).mouseleave(hide_cat_panel);

    //----------------------------------------------首页焦点图
    jq('#slideshow .links a:first').addClass('active');
    var current = 0;
    var interval;
    function slideTo(num) {
        jq('#slideshow .pics').animate({ scrollTop: (num) * 260 }, 'fast');
        jq('#slideshow .links a').eq(num).addClass('active')
			.siblings().removeClass('active');
        current = num;
    }
    function slideToNext() {
        var next = current + 1;
        next = next > 3 ? 0 : next;
        slideTo(next);
    }
    jq('#slideshow a').live('mouseover', function () {
        clearInterval(interval);
        if (jq(this).has('img').length == 0) {
            slideTo(jq(this).index());
        }
    });
    jq('#slideshow a').live('mouseout', function () {
        interval = setInterval(slideToNext, 5000);
    });
    interval = setInterval(slideToNext, 5000);

    //-----------------------------------------------首页选项卡
    var tabinterval;
    jq('#hot_pro .con ul:gt(0)').hide();
    jq('#hot_pro .top li').mouseover(function () {
        jq(this).addClass('hover').siblings().removeClass('hover');
        var index = jq(this).index();
        jq('#hot_pro .con ul').eq(index).show().siblings().hide();
        jq('body').trigger('scroll');//for lazyload
    });
    function slideToNextTab() {
        var index = jq('#hot_pro .top li.hover').index() + 1;
        index = index == 5 ? 0 : index;
        jq('#hot_pro .top li').eq(index).mouseover().mouseout();
    }
    jq('#hot_pro').mouseover(function () {
        clearInterval(tabinterval);
    }).mouseout(function () {
        tabinterval = setInterval(slideToNextTab, 10000);
    });
    tabinterval = setInterval(slideToNextTab, 10000);

    //----------------------------------------------------评论
    // 先隐藏以保证不会在IE6上莫名其妙的从上部溢出
    jq('#comments .rateit').hide();
    function slideToNextComment() {
        // 渣渣浏览器
        if (jQuery.browser.version == 6.0 || jQuery.browser.version == 7.0) {
            jq('#comments li:lt(2)').css({
                opacity: 0,
                height: 0,
                paddingTop: 0,
                paddingBottom: 0
            }).appendTo(jq('#comments ul')).attr('style', '');
            jq('#comments li:lt(6) .rateit').show();
            jq('#comments li:gt(5) .rateit').hide();
        }
            // 牛叉浏览器
        else {
            jq('#comments li:lt(2)').animate({
                opacity: 0,
                height: 0,
                paddingTop: 0,
                paddingBottom: 0
            }, function () {
                jq(this).appendTo(jq('#comments ul')).attr('style', '');
                jq('#comments li:lt(6) .rateit').show();
                jq('#comments li:gt(5) .rateit').hide();
            });
        }
    }
    jq('#comments li:lt(6) .rateit').show();
    setInterval(slideToNextComment, 3000);

    //------------------------------------------------------头部通用AJAX数据
    jq.getJSON('/block/json_header.php?' + (new Date().getTime()), function (data) {
        jq('#ECS_MEMBERZONE').replaceWith(data.member_info);
        jq('#ECS_CARTINFO').html(data.cart_info);
        // 彩贝条
        if (data.cb_info) {
            jq('#top').before(data.cb_info);
        }

        //弹窗系列
        jq('.popup-register').fancybox({
            type: 'iframe',
            showCloseButton: false,
            padding: 0,
            href: '/flow.php?popup=1&step=reg',
            width: 550,
            scrolling: 'no'
        });
        jq('.popup-login').fancybox({
            type: 'iframe',
            showCloseButton: false,
            padding: 0,
            href: '/flow.php?popup=1&step=login',
            width: 550,
            scrolling: 'no'
        });
        jq('.popup-logout').fancybox({
            type: 'iframe',
            showCloseButton: false,
            padding: 0,
            href: '/user.php?act=logout&popup=1',
            width: 550,
            scrolling: 'no'
        });
        jq('.popup-connect').fancybox({
            type: 'iframe',
            showCloseButton: false,
            padding: 0,
            width: 500,
            height: 500,
            scrolling: 'no'
        });
    });

    //-------------------------------------------------------GA统计数据
    jq('#allsorts a').click(function () {
        var index = jq(this).html();
        _gaq.push(['_trackEvent', 'V31首页', '分类区域', index + ' - ' + jq(this).attr('href')]);
    });
    jq('#slideshow a').click(function () {
        var index = jq(this).index();
        _gaq.push(['_trackEvent', 'V31首页', '焦点图', index + ' - ' + jq(this).attr('href')]);
    });
    jq('#notice a').click(function () {
        var index = jq(this).parent().index();
        _gaq.push(['_trackEvent', 'V31首页', '网站公告', index + ' - ' + jq(this).attr('href')]);
    });
    jq('#brand a').click(function () {
        var index = jq(this).parent().index();
        _gaq.push(['_trackEvent', 'V31首页', '品牌专区', index + ' - ' + jq(this).attr('href')]);
    });
    jq('#tea_type .green_tea .top a').click(function () {
        _gaq.push(['_trackEvent', 'V31首页', '绿茶-链接', jq(this).html()]);
    });
    jq('#tea_type .green_tea .con a').click(function () {
        var index = jq(this).parent().index();
        _gaq.push(['_trackEvent', 'V31首页', '绿茶-商品', index + ' - ' + jq(this).attr('href')]);
    });
    jq('#tea_type .oolong_tea .top a').click(function () {
        _gaq.push(['_trackEvent', 'V31首页', '乌龙-链接', jq(this).html()]);
    });
    jq('#tea_type .oolong_tea .con a').click(function () {
        var index = jq(this).parent().index();
        _gaq.push(['_trackEvent', 'V31首页', '乌龙-商品', index + ' - ' + jq(this).attr('href')]);
    });
    jq('#tea_type .dark_tea .top a').click(function () {
        _gaq.push(['_trackEvent', 'V31首页', '黑茶-链接', jq(this).html()]);
    });
    jq('#tea_type .dark_tea .con a').click(function () {
        var index = jq(this).parent().index();
        _gaq.push(['_trackEvent', 'V31首页', '黑茶-商品', index + ' - ' + jq(this).attr('href')]);
    });
    jq('#tea_type .black_tea .top a').click(function () {
        _gaq.push(['_trackEvent', 'V31首页', '红茶-链接', jq(this).html()]);
    });
    jq('#tea_type .black_tea .con a').click(function () {
        var index = jq(this).parent().index();
        _gaq.push(['_trackEvent', 'V31首页', '红茶-商品', index + ' - ' + jq(this).attr('href')]);
    });
    jq('#tea_type .white_tea .top a').click(function () {
        _gaq.push(['_trackEvent', 'V31首页', '白茶-链接', jq(this).html()]);
    });
    jq('#tea_type .white_tea .con a').click(function () {
        var index = jq(this).parent().index();
        _gaq.push(['_trackEvent', 'V31首页', '白茶-商品', index + ' - ' + jq(this).attr('href')]);
    });
    jq('#tea_type .scented_tea .top a').click(function () {
        _gaq.push(['_trackEvent', 'V31首页', '花茶-链接', jq(this).html()]);
    });
    jq('#tea_type .scented_tea .con a').click(function () {
        var index = jq(this).parent().index();
        _gaq.push(['_trackEvent', 'V31首页', '花茶-商品', index + ' - ' + jq(this).attr('href')]);
    });
    jq('#tea_type .tea_set .top a').click(function () {
        _gaq.push(['_trackEvent', 'V31首页', '茶具-链接', jq(this).html()]);
    });
    jq('#tea_type .tea_set .con a').click(function () {
        var index = jq(this).parent().index();
        _gaq.push(['_trackEvent', 'V31首页', '茶具-商品', index + ' - ' + jq(this).attr('href')]);
    });
    jq('#comments a').click(function () {
        var index = jq(this).parent().index();
        _gaq.push(['_trackEvent', 'V31首页', '评论点击', index + ' - ' + jq(this).attr('href')]);
    });
    jq('#bbs a').click(function () {
        var index = jq(this).parent().index();
        _gaq.push(['_trackEvent', 'V31首页', '论坛点击', index + ' - ' + jq(this).attr('href')]);
    });
    jq('#ques a').click(function () {
        _gaq.push(['_trackEvent', 'V31首页', '常见问题', jq(this).html()]);
    });
    jq('#footer .help a').mouseover(function () {
        _gaq.push(['_trackEvent', 'V31首页', '帮助', jq(this).html()]);
    });
});
//SLIDESHOW
