@extends('Home.base.parent')
@section('content')
<div class="bannerbg">
    <div class="bannerbig">
        <ul id="play_list">
            <li >
                <center>
                    <a href="/home/goods/26">
                        <img src="images/1490691620.jpg" height='350px' width='100%' />
                    </a>
                </center>
                    </li>
                        <li>
                <center>
                    <a href="/home/goods/27">
                        <img src="images/1490691646.jpg" height='350px' width='100%' />
                    </a>
                </center>
                    </li>

                    <li>
                <center>
                    <a href="/home/goods/28">
                        <img src="images/1490691673.jpg" height='350px' width='100%'/>
                    </a>
                </center>
                    </li>
            </ul>
    </div>

    <div id="play_list_text">
        <ul>
            <li code="1">
                <img src="images/ipoint1.png">
            </li>
                <li code="2">
                <img src="images/ipoint2.png">
            </li>
                <li code="3">
                <img src="images/ipoint2.png">
            </li>
        </ul>
    </div>
</div>

<!-- 绿茶专区 -->
        <div class="u-floor">

            <div class="floor">

                <div class="product-title"><img src="images/product_title_01.png"></div>

                <div class="floor-left"  style="margin:0 105px 0;">

                    <div class="floor-top">

                        <div class="list">

                            <div>
                                <ul class="list1">

                                    <li><strong>品类：</strong></li>

                                    <li>

                                        <a href="/lvcha/xihulongjing.html" title="西湖龙井,西湖龙井茶,西湖龙井价格,西湖龙井礼盒" target="_blank">西湖龙井</a>

                                        <a href="/lvcha/huangshanmaofeng.html" title="黄山毛峰,黄山毛峰茶,黄山毛峰价格,黄山毛峰礼盒" target="_blank">黄山毛峰</a>

                                        <a href="/lvcha/biluochun.html" title="碧螺春,碧螺春茶,碧螺春价格,碧螺春礼盒" target="_blank">碧螺春</a>

                                    </li>

                                    <li>

                                        <a href="/lvcha/taipinghoukui.html" title="太平猴魁,太平猴魁茶,太平猴魁价格,太平猴魁礼盒" target="_blank">太平猴魁</a>

                                        <a href="/lvcha/liuanguapian.html" title="六安瓜片,六安瓜片茶,六安瓜片价格,六安瓜片礼盒" target="_blank">六安瓜片</a>

                                        <a href="/lvcha/anjibaicha.html" title="安吉白茶,安吉白茶茶,安吉白茶价格,安吉白茶礼盒" target="_blank">安吉白茶</a>

                                    </li>

                                    <li>

                                        <a href="/lvcha/kaihualongding.html" title="开化龙顶,开化龙顶茶,开化龙顶价格,开化龙顶礼盒" target="_blank">开化龙顶</a>

                                        <a href="/lvcha/taquanyunwu.html" title="塔泉云雾,塔泉云雾茶,塔泉云雾价格,塔泉云雾礼盒" target="_blank">塔泉云雾</a>

                                        <a href="/lvcha/ketancuiya.html" title="柯坦翠芽,柯坦翠芽茶,柯坦翠芽价格,柯坦翠芽礼盒" target="_blank">柯坦翠芽</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        
                        <div class="focus-map">
                            <a href="/home/goods" target="_blank">
                            <img src="images/focus_map_01.jpg" widtd='700px'></a>
                        </div>

                    </div>

                    <div class="floor-bottom">
                        <ul>
                            @foreach($tid8 as $ob)
                                <li >
                                    <a href="/home/goods/{{ $ob->id }}">
                                        <div class="product1-pic">
                                            <img src="/Admin/good/img/{{ $ob->picname }}"  width="220" height="220">
                                        </div>
                                        <div class="product1-text">
                                    {{ $ob->name }}
                               </div>

                                        <div class="sale">

                                            <div class="sale-right">会员价：<span>¥{{ $ob->price }}</span></div>
                                        </div>

                                    </a>
                                </li>
                            @endforeach
                         </ul>
                    </div>

                </div>
                    <!-- 每周热销排行 -->

            </div>

        </div>
<!-- 乌龙茶 -->
       <div class="u-floor u-floor1">

            <div class="floor">
                <div style="clear:both;"></div>
                <div class="product-title"><img src="images/product_title_02.png"></div>

                <div class="floor-left">

                    <div class="floor-top">

                        <div class="list">

                            <div>

                                <ul class="list1">

                                    <li><strong>品类：</strong></li>

                                    <li>

                                        <a href="/wulongcha/tieguanyin.html" title="铁观音,铁观音茶,铁观音价格,铁观音礼盒" target="_blank">铁观音</a>

                                        <a href="/wulongcha/gaoshancha.html" title="台湾高山茶,台湾高山茶茶,台湾高山茶价格,台湾高山茶礼盒" target="_blank">台湾高山茶</a>

                                        <a href="/wulongcha/dahongpao.html" title="大红袍,大红袍茶,大红袍价格,大红袍礼盒" target="_blank">大红袍</a>

                                    </li>

                                    <li>

                                        <a href="/wulongcha/fenghuangdancong.html" title="凤凰单枞,凤凰单枞茶,凤凰单枞价格,凤凰单枞礼盒" target="_blank">凤凰单枞</a>

                                    </li>

                                </ul>

                                <ul class="list1">

                                    <li><strong>品牌：</strong></li>

                                    <li>

                                        <a href="/products/41-18-0-0-1-0-x-month_buy_num-desc.html">八马</a>

                                        <a href="/products/41-9-0-0-1-0-x-month_buy_num-desc.html" class="red">千叶</a>

                                        <a href="/products/41-19-0-0-1-0-x-month_buy_num-desc.html">武夷星</a>

                                        <br />

                                        <a href="/products/41-51-0-0-1-0-x-month_buy_num-desc.html">乌岽山</a>

                                        <a href="/products/41-64-0-0-1-0-x-month_buy_num-desc.html">马峰山</a>

                                        <a href="/products/41-65-0-0-1-0-x-month_buy_num-desc.html">馥春</a>

                                    </li>

                                </ul>



                                <ul class="list1" style="padding-top:25px;">

                                    <li><strong>价位：</strong></li>

                                    <li>

                                        <a href="/products/41-0-0-200-1-0-x-month_buy_num-desc.html">200元以下</a>

                                        <a href="/products/41-0-200-500-1-0-x-month_buy_num-desc.html">200-500元</a>

                                        <a href="/products/41-0-500-800-1-0-x-month_buy_num-desc.html">500元以上</a>



                                    </li>

                                </ul>

                            </div>

                        </div>

                        <div class="focus-map"><a href="http://www.maichawang.com/goods-102302.html" target="_blank"><img src="images/focus_map_02.jpg"></a></div>

                    </div>

                    <div class="floor-bottom">

                        <ul>

                                                        <li >

                            <a href="/goods-102274.html">

                                <div class="product1-pic">

                                    <img src="images/gg_41781.jpg!237" alt="宋品 台湾高山茶 一级冻顶乌龙茶罐装150克" width="220" height="220">

                                </div>

                                <div class="product1-text">

                                    宋品 台湾高山茶 一级冻顶乌龙茶罐装150克                                </div>

                                <div class="sale">



                                    <div class="sale-right">会员价：<span>¥88</span></div>

                                </div>



                            </a>

                            </li>

                                                        <li >

                            <a href="/goods-100421.html">

                                <div class="product1-pic">

                                    <img src="images/gg_30647.jpg!237" alt="八马 乌龙茶 特级安溪铁观音 抢新天涵（半斤）" width="220" height="220">

                                </div>

                                <div class="product1-text">

                                    八马 乌龙茶 特级安溪铁观音 抢新天涵（半斤）                                </div>

                                <div class="sale">



                                    <div class="sale-right">会员价：<span>¥220</span></div>

                                </div>



                            </a>

                            </li>

                                                        <li >

                            <a href="/goods-102275.html">

                                <div class="product1-pic">

                                    <img src="images/gg_42117.jpg!237" alt="【新品】宋品 一级冻顶乌龙300克礼盒" width="220" height="220">

                                </div>

                                <div class="product1-text">

                                    【新品】宋品 一级冻顶乌龙300克礼盒                                </div>

                                <div class="sale">



                                    <div class="sale-right">会员价：<span>¥188</span></div>

                                </div>

>

                            </a>

                            </li>

                                                        <li  style="border:none;" >

                            <a href="/goods-100185.html">

                                <div class="product1-pic">

                                    <img src="images/gg_26158.jpg!237" alt="千叶 台湾高山茶 特级罐装冻顶乌龙茶（3两）" width="220" height="220">

                                </div>

                                <div class="product1-text">

                                    千叶 台湾高山茶 特级罐装冻顶乌龙茶（3两）                                </div>

                                <div class="sale">



                                    <div class="sale-right">会员价：<span>¥198</span></div>

                                </div>



                            </a>

                            </li>

                                                    </ul>

                    </div>

                </div>


                <!-- 每周热销排行 -->


            </div>

        </div>

    </div>
    <!-- 黑茶 -->
        <div class="u-floor">

        <div class="floor">
                            <div style="clear:both;"></div>
            <div class="product-title"><img src="images/product_title_03.png"></div>

            <div class="floor-left">

                <div class="floor-top">

                    <div class="list">

                        <div>

                            <ul class="list1">

                                <li><strong>品类：</strong></li>

                                <li>

                                    <a href="/heicha/puercha.html" title="普洱茶,普洱茶茶,普洱茶价格,普洱茶礼盒" target="_blank">普洱茶</a>

                                    <a href="/heicha/anhuaheicha.html" title="安化黑茶,安化黑茶茶,安化黑茶价格,安化黑茶礼盒" target="_blank">安化黑茶</a>

                                </li>

                            </ul>

                            <ul class="list1">

                                <li><strong>品牌：</strong></li>

                                <li>

                                    <a href="/products/43-46-0-0-1-0-x-month_buy_num-desc.html">中茶</a>

                                    <a href="/products/43-66-0-0-1-0-x-month_buy_num-desc.html">高马二溪</a>

                                    <a href="/products/43-43-0-0-1-0-x-month_buy_num-desc.html">白沙溪</a>

                                </li>

                            </ul>



                            <ul class="list1" style="padding-top:25px;">

                                <li><strong>品种/工艺</strong></li>

                                <li>

                                    <a href="/products/43-0-0-0-1-621-x-month_buy_num-desc.html">茯砖</a>

                                    <a href="/products/43-0-0-0-1-623-x-month_buy_num-desc.html">天尖</a>

                                    <a href="/products/43-0-0-0-1-622-x-month_buy_num-desc.html">花卷</a>

                                    <a href="/products/43-0-0-0-1-627-x-month_buy_num-desc.html">生茶</a><br />

                                    <a href="/products/43-0-0-0-1-628-x-month_buy_num-desc.html">熟茶</a>



                                </li>

                            </ul>

                        </div>

                    </div>

                    <div class="focus-map"><a href="http://www.maichawang.com/goods-101185.html" target="_blank"><img src="images/focus_map_03.jpg"></a></div>

                </div>

                <div class="floor-bottom">

                    <ul>

                                                <li >

                        <a href="/goods-101009.html">

                            <div class="product1-pic">

                                <img src="images/gg_1591.jpg!237" alt="大益牌 云南普洱七子饼熟茶7262（357克）" width="220" height="220">

                            </div>

                            <div class="product1-text">

                                大益牌 云南普洱七子饼熟茶7262（357克）                            </div>

                            <div class="sale">



                                <div class="sale-right">会员价：<span>¥150</span></div>

                            </div>



                        </a>

                        </li>

                                                <li >

                        <a href="/goods-101059.html">

                            <div class="product1-pic">

                                <img src="images/gg_44437.jpg!237" alt="中茶牌 特级安化黑茶 篓装天尖 收藏送礼（4斤）" width="220" height="220">

                            </div>

                            <div class="product1-text">

                                中茶牌 特级安化黑茶 篓装天尖 收藏送礼（4斤）                            </div>

                            <div class="sale">



                                <div class="sale-right">会员价：<span>¥480</span></div>

                            </div>



                        </a>

                        </li>

                                                <li >

                        <a href="/goods-100978.html">

                            <div class="product1-pic">

                                <img src="images/gg_18529.jpg!237" alt="白沙溪牌 安化黑茶天茯茶 金花普冒（2斤）" width="220" height="220">

                            </div>

                            <div class="product1-text">

                                白沙溪牌 安化黑茶天茯茶 金花普冒（2斤）                            </div>

                            <div class="sale">



                                <div class="sale-right">会员价：<span>¥199</span></div>

                            </div>



                        </a>

                        </li>

                                                <li  style="border:none;" >

                        <a href="/goods-101563.html">

                            <div class="product1-pic">

                                <img src="images/gg_14268.jpg!237" alt="七彩云南 庆沣祥 茉莉花香青饼 （100g）" width="220" height="220">

                            </div>

                            <div class="product1-text">

                                七彩云南 庆沣祥 茉莉花香青饼 （100g）                            </div>

                            <div class="sale">



                                <div class="sale-right">会员价：<span>¥118</span></div>

                            </div>



                        </a>

                        </li>

                                            </ul>

                </div>

            </div>
            <!-- 黑茶每周热销产品 -->


        </div>

    </div>

    </div>
<!-- 红茶 -->
    <div class="u-floor u-floor1">

        <div class="floor">
                            <div style="clear:both;"></div>
            <div class="product-title"><img src="images/product_title_04.png"></div>

            <div class="floor-left">

                <div class="floor-top">

                    <div class="list">

                        <div>

                            <ul class="list1">

                                <li><strong>品类：</strong></li>

                                <li>

                                    <a href="/hongcha/qimenhongcha.html" title="祁门红茶,祁门红茶茶,祁门红茶价格,祁门红茶礼盒" target="_blank">祁门红茶</a>

                                    <a href="/hongcha/assam.html" title="阿萨姆红茶,阿萨姆红茶茶,阿萨姆红茶价格,阿萨姆红茶礼盒" target="_blank">阿萨姆红茶</a>

                                    <a href="/hongcha/darjeeling.html" title="大吉岭红茶,大吉岭红茶茶,大吉岭红茶价格,大吉岭红茶礼盒" target="_blank">大吉岭红茶</a>

                                </li>

                                <li>

                                    <a href="/hongcha/dianhong.html" title="云南滇红,云南滇红茶,云南滇红价格,云南滇红礼盒" target="_blank">云南滇红</a>

                                    <a href="/hongcha/bojuehongcha.html" title="伯爵红茶,伯爵红茶茶,伯爵红茶价格,伯爵红茶礼盒" target="_blank">伯爵红茶</a>

                                    <a href="/hongcha/chuanhonggongfu.html" title="川红工夫,川红工夫茶,川红工夫价格,川红工夫礼盒" target="_blank">川红工夫</a>

                                </li>

                                <li>

                                    <a href="/hongcha/zhengshanxiaozhong.html" title="正山小种,正山小种茶,正山小种价格,正山小种礼盒" target="_blank">正山小种</a>

                                    <a href="/hongcha/tanyanggongfu.html" title="坦洋工夫,坦洋工夫茶,坦洋工夫价格,坦洋工夫礼盒" target="_blank">坦洋工夫</a>

                                </li>

                            </ul>

                            <ul class="list1">

                                <li><strong>品牌：</strong></li>

                                <li>

                                    <a href="/products/42-38-0-0-1-0-x-month_buy_num-desc.html" class="red">正山堂</a>

                                    <a href="/products/42-22-0-0-1-0-x-month_buy_num-desc.html">谢裕大</a>

                                    <a href="/products/42-13-0-0-1-0-x-month_buy_num-desc.html">谷仓 </a><br />

                                    <a href="/products/42-49-0-0-1-0-x-month_buy_num-desc.html">天品国香</a>

                                    <a href="/products/42-19-0-0-1-0-x-month_buy_num-desc.html">武夷星</a>

                                    <a href="/products/42-44-0-0-1-0-x-month_buy_num-desc.html">龙潭</a>

                                </li>

                            </ul>



                            <ul class="list1" style="padding-top:25px;">

                                <li><strong>价位：</strong></li>

                                <li>

                                    <a href="/products/42-0-0-200-1-0-x-month_buy_num-desc.html">200元以下</a>

                                    <a href="/products/42-0-200-500-1-0-x-month_buy_num-desc.html">200-500元</a>

                                    <a href="/products/42-0-500-800-1-0-x-month_buy_num-desc.html">500元以上</a>



                                </li>

                            </ul>

                        </div>

                    </div>

                    <div class="focus-map"><a href="http://www.maichawang.com/goods-100479.html" target="_blank"><img src="images/focus_map_04.jpg"></a></div>

                </div>

                <div class="floor-bottom">

                    <ul>

                                                <li >

                        <a href="/goods-102070.html">

                            <div class="product1-pic">

                                <img src="images/gg_42866.jpg!237" alt="【买一赠一】宋品 红茶 一级单听金骏眉茶叶 100克" width="220" height="220">

                            </div>

                            <div class="product1-text">

                                【买一赠一】宋品 红茶 一级单听金骏眉茶叶 100克                            </div>

                            <div class="sale">



                                <div class="sale-right">会员价：<span>¥138</span></div>

                            </div>



                        </a>

                        </li>

                                                <li >

                        <a href="/goods-100807.html">

                            <div class="product1-pic">

                                <img src="images/gg_27071.jpg!237" alt="谷仓 特级云南滇红工夫红茶 滇红金芽 100克" width="220" height="220">

                            </div>

                            <div class="product1-text">

                                谷仓 特级云南滇红工夫红茶 滇红金芽 100克                            </div>

                            <div class="sale">



                                <div class="sale-right">会员价：<span>¥168</span></div>

                            </div>



                        </a>

                        </li>

                                                <li >

                        <a href="/goods-102280.html">

                            <div class="product1-pic">

                                <img src="images/gg_41878.jpg!237" alt="宋品红茶 一级祁门红茶单听200克" width="220" height="220">

                            </div>

                            <div class="product1-text">

                                宋品红茶 一级祁门红茶单听200克                            </div>

                            <div class="sale">



                                <div class="sale-right">会员价：<span>¥68</span></div>

                            </div>



                        </a>

                        </li>

                                                <li  style="border:none;" >

                        <a href="/goods-100271.html">

                            <div class="product1-pic">

                                <img src="images/gg_21164.jpg!237" alt="谷仓 红茶 特级毫芽A 祁门红茶精美方罐装 （3两）" width="220" height="220">

                            </div>

                            <div class="product1-text">

                                谷仓 红茶 特级毫芽A 祁门红茶精美方罐装 （3两）                            </div>

                            <div class="sale">



                                <div class="sale-right">会员价：<span>¥238</span></div>

                            </div>



                        </a>

                        </li>

                     </ul>

                </div>

            </div>

            <!-- 红茶热销排行榜 -->
    </div>
    </div>
    <!-- 白茶 -->
        <div class="u-floor">

        <div class="floor">
                        <div style="clear:both;"></div>
            <div class="product-title"><img src="images/product_title_05.png"></div>

            <div class="floor-left">

                <div class="floor-top">

                    <div class="list">

                        <div>

                            <ul class="list1">

                                <li><strong>品类：</strong></li>

                                <li>

                                    <a href="/baicha/shoumeibaicha.html" title="寿眉白茶,寿眉白茶茶,寿眉白茶价格,寿眉白茶礼盒" target="_blank">寿眉白茶</a>

                                    <a href="/baicha/gongyibaicha.html" title="工艺白茶,工艺白茶茶,工艺白茶价格,工艺白茶礼盒" target="_blank">工艺白茶</a>

                                    <a href="/baicha/baihaoyinzhen.html" title="白毫银针,白毫银针茶,白毫银针价格,白毫银针礼盒" target="_blank">白毫银针</a>

                                </li>

                                <li>

                                    <a href="/baicha/baimudan.html" title="白牡丹,白牡丹茶,白牡丹价格,白牡丹礼盒" target="_blank">白牡丹</a>

                                    <a href="/baicha/tailaoyinzhen.html" title="太姥银针,太姥银针茶,太姥银针价格,太姥银针礼盒" target="_blank">太姥银针</a>

                                </li>

                            </ul>

                            <ul class="list1">

                                <li><strong>品牌：</strong></li>

                                <li>

                                    <a href="/products/44-10-0-0-1-0-x-month_buy_num-desc.html">绿雪芽</a>

                                    <a href="/products/44-49-0-0-1-0-x-month_buy_num-desc.html" class="red">品品香</a>

                                    <a href="/products/44-14-0-0-1-0-x-month_buy_num-desc.html">宋品</a>

                                </li>

                            </ul>



                            <ul class="list1" style="padding-top:25px;">

                                <li><strong>价位：</strong></li>

                                <li>

                                    <a href="/products/44-0-0-200-1-0-x-month_buy_num-desc.html">200元以下</a>

                                    <a href="/products/44-0-200-500-1-0-x-month_buy_num-desc.html">200-500元</a>

                                    <a href="/products/44-0-500-800-1-0-x-month_buy_num-desc.html">500元以上</a>



                                </li>

                            </ul>

                        </div>

                    </div>

                    <div class="focus-map"><a href="http://www.maichawang.com/goods-100166.html" target="_blank"><img src="images/focus_map_05.jpg"></a></div>

                </div>

                <div class="floor-bottom">

                    <ul>
                        <li >
                            <a href="/goods-100166.html">

                            <div class="product1-pic">

                                <img src="images/gg_31126.jpg!237" alt="绿雪芽牌白茶 特级青花圆顶罐装白毫银针茶叶 （1两半）" width="220" height="220">

                            </div>

                            <div class="product1-text">

                                绿雪芽牌白茶 特级青花圆顶罐装白毫银针茶叶 （1两半）                            </div>

                            <div class="sale">



                                <div class="sale-right">会员价：<span>¥300</span></div>

                            </div>

           

                            </a>

                        </li>

                        <li >

                        <a href="/goods-102272.html">

                            <div class="product1-pic">

                                <img src="images/gg_40649.jpg!237" alt="天霁牌　福鼎白茶 五年陈藏老白茶罐装（35克）" width="220" height="220">

                            </div>

                            <div class="product1-text">

                                天霁牌　福鼎白茶 五年陈藏老白茶罐装（35克）                            </div>

                            <div class="sale">



                                <div class="sale-right">会员价：<span>¥90</span></div>

                            </div>

                    

                        </a>

                        </li>

                                                <li >

                        <a href="/goods-102268.html">

                            <div class="product1-pic">

                                <img src="images/gg_40593.jpg!237" alt="天霁牌　福鼎白茶 贡眉罐装（35克）" width="220" height="220">

                            </div>

                            <div class="product1-text">

                                天霁牌　福鼎白茶 贡眉罐装（35克）                            </div>

                            <div class="sale">



                                <div class="sale-right">会员价：<span>¥39</span></div>

                            </div>

                  

                        </a>

                        </li>

                                                <li  style="border:none;" >

                        <a href="/goods-102265.html">

                            <div class="product1-pic">

                                <img src="images/gg_40542.jpg!237" alt="天霁牌　福鼎白茶 牡丹王茶砖（500克）" width="220" height="220">

                            </div>

                            <div class="product1-text">

                                天霁牌　福鼎白茶 牡丹王茶砖（500克）                            </div>

                            <div class="sale">



                                <div class="sale-right">会员价：<span>¥585</span></div>

                            </div>

           

                        </a>

                        </li>

                                            </ul>

                </div>

            </div>
                <!-- 红茶每周热销 -->


        </div>

    </div>

    </div>
    <!-- 花茶 -->
        <div class="u-floor u-floor1">

        <div class="floor">
                            <div style="clear:both;"></div>
            <div class="product-title"><img src="images/product_title_06.png"></div>

            <div class="floor-left">

                <div class="floor-top">

                    <div class="list">

                        <div>

                            <ul class="list1">

                                <li><strong>品类：</strong></li>

                                <li>

                                    <a href="/huacha/huacaocha.html" title="花草茶,花草茶茶,花草茶价格,花草茶礼盒" target="_blank">花草茶</a>

                                    <a href="/huacha/gongyihuacha.html" title="工艺花茶,工艺花茶茶,工艺花茶价格,工艺花茶礼盒" target="_blank">工艺花茶</a>

                                    <a href="/baojiancha/kuqiaocha.html" title="苦荞茶,苦荞茶茶,苦荞茶价格,苦荞茶礼盒" target="_blank">苦荞茶</a>

                                </li>

                                <li>

                                    <a href="/huacha/kunlunxueju.html" title="昆仑雪菊,昆仑雪菊茶,昆仑雪菊价格,昆仑雪菊礼盒" target="_blank">昆仑雪菊</a>

                                    <a href="/.html" title="黑枸杞,黑枸杞茶,黑枸杞价格,黑枸杞礼盒" target="_blank">黑枸杞</a>

                                </li>

                            </ul>

                            <ul class="list1">

                                <li><strong>品牌：</strong></li>

                                <li>

                                    <a href="/products/73-25-0-0-1-0-x-month_buy_num-desc.html">鑫基</a>

                                    <a href="/products/73-59-0-0-1-0-x-month_buy_num-desc.html">绿颐</a>

                                    <a href="/products/73-55-0-0-1-0-x-month_buy_num-desc.html" class="red">云菊</a>

                                </li>

                            </ul>



                            <ul class="list1" style="padding-top:25px;">

                                <li><strong>价位：</strong></li>

                                <li>

                                    <a href="/products/73-0-0-200-1-0-x-month_buy_num-desc.html">200元以下</a>

                                    <a href="/products/73-0-200-500-1-0-x-month_buy_num-desc.html">200-500元</a>

                                    <a href="/products/73-0-500-800-1-0-x-month_buy_num-desc.html">500元以上</a>



                                </li>

                            </ul>

                        </div>

                    </div>

                    <div class="focus-map"><a href="http://www.maichawang.com/goods-101545.html" target="_blank"><img src="images/focus_map_06.jpg"></a></div>

                </div>

                <div class="floor-bottom">

                    <ul>

                                                <li >

                        <a href="/goods-101539.html">

                            <div class="product1-pic">

                                <img src="images/gg_41724.jpg!237" alt="云菊牌 新疆方形单罐高寒雪菊茶（12克）" width="220" height="220">

                            </div>

                            <div class="product1-text">

                                云菊牌 新疆方形单罐高寒雪菊茶（12克）                            </div>

                            <div class="sale">



                                <div class="sale-right">会员价：<span>¥130</span></div>

                            </div>

      

                        </a>

                        </li>

                                                <li >

                        <a href="/goods-102314.html">

                            <div class="product1-pic">

                                <img src="images/gg_42914.jpg!237" alt="宋品雪菊 新疆昆仑雪菊 单罐40g" width="220" height="220">

                            </div>

                            <div class="product1-text">

                                宋品雪菊 新疆昆仑雪菊 单罐40g                            </div>

                            <div class="sale">



                                <div class="sale-right">会员价：<span>¥49</span></div>

                            </div>

                

                        </a>

                        </li>

                                                <li >

                        <a href="/goods-101545.html">

                            <div class="product1-pic">

                                <img src="images/gg_41730.jpg!237" alt="云菊牌 新疆昆仑雪菊礼盒装（36克）" width="220" height="220">

                            </div>

                            <div class="product1-text">

                                云菊牌 新疆昆仑雪菊礼盒装（36克）                            </div>

                            <div class="sale">



                                <div class="sale-right">会员价：<span>¥390</span></div>

                            </div>

               

                        </a>

                        </li>

                                                <li  style="border:none;" >

                        <a href="/goods-101543.html">

                            <div class="product1-pic">

                                <img src="images/gg_41728.jpg!237" alt="云菊牌 新疆正品礼盒装昆仑雪菊（96克）" width="220" height="220">

                            </div>

                            <div class="product1-text">

                                云菊牌 新疆正品礼盒装昆仑雪菊（96克）                            </div>

                            <div class="sale">



                                <div class="sale-right">会员价：<span>¥960</span></div>

                            </div>

                       

                        </a>

                        </li>

                                            </ul>

                </div>

            </div>

<!-- 花茶每周热销 -->
        </div>

    </div>

    </div>


@endsection
