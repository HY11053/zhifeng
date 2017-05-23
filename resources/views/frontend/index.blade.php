@extends('frontend.frontend')
@section('big_con')
    <div class="big_con">
        <!------banner------>
        <div class="ban clearfix">
            <!----导航列表---->
            <div class="banfl fl">
                <div class="banfls">
                    <div class="banfls_top1">投资行业</div>
                    <div class="banfls_btm">
                        <span><a href="/{{\App\AdminModel\Arctype::where('id',5)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',5)->value('typename')}}</a></span>
                        <span><a href="/{{\App\AdminModel\Arctype::where('id',6)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',6)->value('typename')}}</a></span>
                        <span><a href="/{{\App\AdminModel\Arctype::where('id',7)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',7)->value('typename')}}</a></span>
                        <span><a href="/{{\App\AdminModel\Arctype::where('id',8)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',8)->value('typename')}}</a></span>
                    </div>
                    <div class="banfls_top2 clearfix">投资金额</div>
                    <div class="banfls_btm"> <span><a href="#">1万以下</a></span> <span><a href="#">1~5万元</a></span> <span><a href="#">5~10万元</a></span> <span><a href="#">10~20万元</a></span> <span><a href="#">20~50万元</a></span> <span><a href="#">50~100万元</a></span> </div>
                    <div class="banfls_top3 clearfix">热门城市</div>
                    <div class="banfls_btm"> <span><a href="#">北京</a></span> <span><a href="#">上海</a></span> <span><a href="#">天津</a></span> <span><a href="#">重庆</a></span> <span><a href="#">石家庄</a></span> <span><a href="#">太原</a></span> <span><a href="#">南京</a></span> <span><a href="#">苏州</a></span> <span><a href="#">合肥</a></span> <span><a href="#">厦门</a></span> <span><a href="#">济南</a></span> <span><a href="#">青岛</a></span> <span><a href="#">郑州</a></span> <span><a href="#">武汉</a></span> <span><a href="#">长沙</a></span> </div>
                    <div class="banfls_top4 clearfix">客户属性</div>
                    <div class="banfls_btm"> <span><a href="#">中小学生</a></span> <span><a href="#">公司白领</a></span> <span><a href="#">中老年人</a></span> <span><a href="#">工薪阶级</a></span> <span><a href="#">孕妇</a></span> <span><a href="#">大学</a></span> </div>
                </div>
            </div>
            <!----导航列表 end---->
            <!----banner---->
            <div class="w1920">
                <!-- 幻灯片 Start -->
                <div class="flicker-example" data-block-text="false">
                    <ul>
                        <li data-background="/reception/img/banner3.jpg">
                        </li>
                        <li data-background="/reception/img/banner2.jpg">
                        </li>
                    </ul>
                </div>
                <script type="text/javascript" src="/reception/js/flickerplate.min.js"></script>
                <script>
                    $(document).ready(function(){
                        $('.flicker-example').flicker();
                    });
                </script>
                <div class="w1920_btm">
                    <ul>
                        <li><a href="#"><img src="/reception/img/10.jpg" /></a><span><i><a href="#">酒窝甜品</a></i></span></li>
                        <li><a href="#"><img src="/reception/img/8.jpg" /></a><span><i><a href="#">酒窝甜品</a></i></span></li>
                        <li><a href="#"><img src="/reception/img/7.jpg" /></a><span><i><a href="#">酒窝甜品</a></i></span></li>
                        <li><a href="#"><img src="/reception/img/true.jpg" /></a><span><i><a href="#">酒窝甜品</a></i></span></li>

                    </ul>
                </div>

            </div>
            <!----banner end---->
            <!----热门项目排行---->
            <script type="text/javascript">
                function showmusic(val)
                {
                    for(var k=1;k<=3;k++)
                    {
                        document.getElementById("s"+k).className="";
                    }
                    document.getElementById("s"+val).className="styles";
                    for(var i=1;i<=3;i++)
                    {
                        document.getElementById("m"+i).style.display="none";
                    }
                    document.getElementById("m"+val).style.display="block";
                }
            </script>

            <div class="ranking fr">
                <div id="main">
                    <div id="naver">
                        <ul>
                            <li class="styles" onmouseover="showmusic(1)" id="s1">热门排行</li>
                            <li onmouseover="showmusic(2)" id="s2">加盟费排行</li>
                            <li onmouseover="showmusic(3)" id="s3">口碑排行</li>
                        </ul>
                    </div>
                    <div id="music">
                        <ul id="m1">
                            <li>
                                <div class="red fl">1</div>
                                <div class="apel fl"><a href="#">展腾投资集团</a></div>
                                <div class="apels fl">加盟人气</div>
                                <div class="apels fl">2705085</div>
                            </li>
                            <li>
                                <div class="red fl">2</div>
                                <div class="apel fl"><a href="#">廖排骨</a></div>
                                <div class="apels fl">加盟人气</div>
                                <div class="apels fl">2705085</div>
                            </li>
                            <li>
                                <div class="red fl">3</div>
                                <div class="apel fl"><a href="#">东时便当</a></div>
                                <div class="apels fl">加盟人气</div>
                                <div class="apels fl">2705085</div>
                            </li>
                            <li>
                                <div class="hui fl">4</div>
                                <div class="apel fl"><a href="#">小心鸡</a></div>
                                <div class="apels fl">加盟人气</div>
                                <div class="apels fl">2705085</div>
                            </li>
                            <li>
                                <div class="hui fl">5</div>
                                <div class="apel fl"><a href="#">火炉岛</a></div>
                                <div class="apels fl">加盟人气</div>
                                <div class="apels fl">2705085</div>
                            </li>
                            <li>
                                <div class="hui fl">6</div>
                                <div class="apel fl"><a href="#">玛玛洛可少儿英语</a></div>
                                <div class="apels fl">加盟人气</div>
                                <div class="apels fl">2705085</div>
                            </li>
                            <li>
                                <div class="hui fl">7</div>
                                <div class="apel fl"><a href="#">野马汽车</a></div>
                                <div class="apels fl">加盟人气</div>
                                <div class="apels fl">2705085</div>
                            </li>
                            <li>
                                <div class="hui fl">8</div>
                                <div class="apel fl"><a href="#">巴比酷肉蟹煲</a></div>
                                <div class="apels fl">加盟人气</div>
                                <div class="apels fl">2705085</div>
                            </li>
                            <li>
                                <div class="hui fl">9</div>
                                <div class="apel fl"><a href="#">千叶珠宝</a></div>
                                <div class="apels fl">加盟人气</div>
                                <div class="apels fl">2705085</div>
                            </li>
                            <li>
                                <div class="hui fl">10</div>
                                <div class="apel fl"><a href="#">能力风暴机器人</a></div>
                                <div class="apels fl">加盟人气</div>
                                <div class="apels fl">2705085</div>
                            </li>
                        </ul>
                        <ul id="m2">
                            <li>
                                <div class="red fl">1</div>
                                <div class="apel fl"><a href="#">展腾投资集团</a></div>
                                <div class="apels fl">投资费用</div>
                                <div class="apels fl">2705085</div>
                            </li>
                            <li>
                                <div class="red fl">2</div>
                                <div class="apel fl"><a href="#">廖排骨</a></div>
                                <div class="apels fl">投资费用</div>
                                <div class="apels fl">2705085</div>
                            </li>
                            <li>
                                <div class="red fl">3</div>
                                <div class="apel fl"><a href="#">东时便当</a></div>
                                <div class="apels fl">投资费用</div>
                                <div class="apels fl">2705085</div>
                            </li>
                            <li>
                                <div class="hui fl">4</div>
                                <div class="apel fl"><a href="#">小心鸡</a></div>
                                <div class="apels fl">投资费用</div>
                                <div class="apels fl">2705085</div>
                            </li>
                            <li>
                                <div class="hui fl">5</div>
                                <div class="apel fl"><a href="#">火炉岛</a></div>
                                <div class="apels fl">投资费用</div>
                                <div class="apels fl">2705085</div>
                            </li>
                            <li>
                                <div class="hui fl">6</div>
                                <div class="apel fl"><a href="#">玛玛洛可少儿英语</a></div>
                                <div class="apels fl">投资费用</div>
                                <div class="apels fl">2705085</div>
                            </li>
                            <li>
                                <div class="hui fl">7</div>
                                <div class="apel fl"><a href="#">野马汽车</a></div>
                                <div class="apels fl">投资费用</div>
                                <div class="apels fl">2705085</div>
                            </li>
                            <li>
                                <div class="hui fl">8</div>
                                <div class="apel fl"><a href="#">巴比酷肉蟹煲</a></div>
                                <div class="apels fl">投资费用</div>
                                <div class="apels fl">2705085</div>
                            </li>
                            <li>
                                <div class="hui fl">9</div>
                                <div class="apel fl"><a href="#">千叶珠宝</a></div>
                                <div class="apels fl">投资费用</div>
                                <div class="apels fl">2705085</div>
                            </li>
                            <li>
                                <div class="hui fl">10</div>
                                <div class="apel fl"><a href="#">能力风暴机器人</a></div>
                                <div class="apels fl">投资费用</div>
                                <div class="apels fl">2705085</div>
                            </li>
                        </ul>

                        <ul id="m3">
                            <li>
                                <div class="red fl">1</div>
                                <div class="apel fl"><a href="#">展腾投资集团</a></div>
                                <div class="apels fl">好评率</div>
                                <div class="apels fl">2705085</div>
                            </li>
                            <li>
                                <div class="red fl">2</div>
                                <div class="apel fl"><a href="#">廖排骨</a></div>
                                <div class="apels fl">好评率</div>
                                <div class="apels fl">2705085</div>
                            </li>
                            <li>
                                <div class="red fl">3</div>
                                <div class="apel fl"><a href="#">东时便当</a></div>
                                <div class="apels fl">好评率</div>
                                <div class="apels fl">2705085</div>
                            </li>
                            <li>
                                <div class="hui fl">4</div>
                                <div class="apel fl"><a href="#">小心鸡</a></div>
                                <div class="apels fl">好评率</div>
                                <div class="apels fl">2705085</div>
                            </li>
                            <li>
                                <div class="hui fl">5</div>
                                <div class="apel fl"><a href="#">火炉岛</a></div>
                                <div class="apels fl">好评率</div>
                                <div class="apels fl">2705085</div>
                            </li>
                            <li>
                                <div class="hui fl">6</div>
                                <div class="apel fl"><a href="#">玛玛洛可少儿英语</a></div>
                                <div class="apels fl">好评率</div>
                                <div class="apels fl">2705085</div>
                            </li>
                            <li>
                                <div class="hui fl">7</div>
                                <div class="apel fl"><a href="#">野马汽车</a></div>
                                <div class="apels fl">好评率</div>
                                <div class="apels fl">2705085</div>
                            </li>
                            <li>
                                <div class="hui fl">8</div>
                                <div class="apel fl"><a href="#">巴比酷肉蟹煲</a></div>
                                <div class="apels fl">好评率</div>
                                <div class="apels fl">2705085</div>
                            </li>
                            <li>
                                <div class="hui fl">9</div>
                                <div class="apel fl"><a href="#">千叶珠宝</a></div>
                                <div class="apels fl">好评率</div>
                                <div class="apels fl">2705085</div>
                            </li>
                            <li>
                                <div class="hui fl">10</div>
                                <div class="apel fl"><a href="#">能力风暴机器人</a></div>
                                <div class="apels fl">好评率</div>
                                <div class="apels fl">2705085</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!----热门项目排行 end---->
        </div>
        <!------over------>
        <!----零食店加盟---->
        <div class="w1200">
            <div class="tits"><span><i>零食店</i>加盟</span></div>
            <div class="w1250">
                <!----上一排---->
                @foreach($lingshibrands as $lingshibrand)
                <div class="join fl">
                    <div class="join_top"><a href="/{{$lingshibrand->arctype->real_path}}/{{$lingshibrand->id}}.shtml"><img src="{{$lingshibrand->litpic}}" /></a><span><i><a href="/{{$lingshibrand->arctype->real_path}}/{{$lingshibrand->id}}.shtml">{{$lingshibrand->article->brandname}}</a></i></span></div>
                    <div class="join_con">
                        <ul>
                            <li>全国门店：{{$lingshibrand->article->brandnum}}家</li>
                            <li>加盟好评率：<i>{{rand(95,99)}}%</i></li>
                            <li>投资金额：<i>{{$lingshibrand->article->brandpay}}</i></li>
                            <li><input type="checkbox" />对比</li>
                        </ul>
                    </div>
                    <div class="join_btm clearfix">
                        <span class="fl"> <input type="button" value="查看详情" /> </span>
                        <font class="fr">
                            <input type="button" value="查看详情" />
                        </font>
                    </div>
                </div>
            @endforeach

            </div>
        </div>
        <!----零食店加盟 end---->
        <!----进口零食加盟---->
        <div class="w1200">
            <div class="tits"><span><i>进口零食</i>加盟</span></div>
            <div class="w1250">
                <!----上一排---->
                @foreach($jinkoubrands as $jinkoubrand)
                <div class="join fl">
                    <div class="join_top"><a href="/{{$jinkoubrand->arctype->real_path}}/{{$jinkoubrand->id}}.shtml"><img src="{{$jinkoubrand->litpic}}" /></a><span><i><a href="/{{$jinkoubrand->arctype->real_path}}/{{$jinkoubrand->id}}.shtml">{{$jinkoubrand->article->brandname}}</a></i></span></div>
                    <div class="join_con">
                        <ul>
                            <li>全国门店：{{$jinkoubrand->article->brandnum}}家</li>
                            <li>加盟好评率：<i>{{rand(92,97)}}%</i></li>
                            <li>投资金额：<i>{{$jinkoubrand->article->brandpay}}</i></li>
                            <li><input type="checkbox" />对比</li>
                        </ul>
                    </div>
                    <div class="join_btm clearfix">
                        <span class="fl">
                        <input type="button" value="查看详情" />
                        </span>
                        <font class="fr">
                            <input type="button" value="查看详情" />
                        </font>
                    </div>
                </div>
                    @endforeach

            </div>
        </div>
        <!----干果炒货加盟 end---->
        <!----干果炒货加盟---->
        <div class="w1200">
            <div class="tits"><span><i>干果炒货</i>加盟</span></div>
            <div class="w1250">
                <!----上一排---->
                @foreach($ganguobrands as $ganguobrand)
                    <div class="join fl">
                        <div class="join_top"><a href="/{{$ganguobrand->arctype->real_path}}/{{$ganguobrand->id}}.shtml"><img src="{{$ganguobrand->litpic}}" /></a><span><i><a href="/{{$ganguobrand->arctype->real_path}}/{{$ganguobrand->id}}.shtml">{{$ganguobrand->article->brandname}}</a></i></span></div>
                        <div class="join_con">
                            <ul>
                                <li>全国门店：{{$ganguobrand->article->brandnum}}家</li>
                                <li>加盟好评率：<i>{{rand(92,97)}}%</i></li>
                                <li>投资金额：<i>{{$ganguobrand->article->brandpay}}</i></li>
                                <li><input type="checkbox" />对比</li>
                            </ul>
                        </div>
                        <div class="join_btm clearfix">
                        <span class="fl">
                        <input type="button" value="查看详情" />
                        </span>
                            <font class="fr">
                                <input type="button" value="查看详情" />
                            </font>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!----进口零食加盟 end---->
        <!----新闻内容---->
        <div class="w1200">
            <div class="jourfl fl">
                <div class="jourfls">
                    <div class="jourfls_top">
                        <div class="jourfls_topfl fl"><a href="#"><img src="/reception/img/12.jpg" /></a></div>
                        <div class="jourfls_topfr fr"> <i><a href="#">开店速度超过汉堡王，这个中式汉</a></i> <span><a href="#">在国内，中式快餐很多，但是却没有一个快餐品牌能一统天下，更别说在国际上和麦当劳、肯德基交锋。让人意外的是，有一家中式快餐店，现...</a></span> </div>
                    </div>
                    <div class="jourfls_btm">
                        <ul>
                            <li> <span class="fl"><a href="#">经营餐饮加盟店之前我们有哪些经营餐饮加盟店之前我们有哪些经营餐饮加盟店之前我们有哪些</a></span> <i class="fr">2017-11-02</i> </li>
                            <li> <span class="fl"><a href="#">收服这只现场注馅儿的闪电泡芙，治愈生活</a></span> <i class="fr">2017-11-02</i> </li>
                            <li> <span class="fl"><a href="#">川渝双骄，健康美味，一个家喻户晓的好品牌</a></span> <i class="fr">2017-11-02</i> </li>
                            <li> <span class="fl"><a href="#">七公主：卷出美妙好滋味</a></span> <i class="fr">2017-11-02</i> </li>
                            <li> <span class="fl"><a href="#">成都正宗冒菜培训哪家好？</a></span> <i class="fr">2017-11-02</i> </li>
                            <li> <span class="fl"><a href="#">成都正宗冒菜培训哪家好？</a></span> <i class="fr">2017-11-02</i> </li>
                        </ul>
                    </div>
                </div>
                <div class="jourfls">
                    <div class="jourfls_top">
                        <div class="jourfls_topfl fl"><a href="#"><img src="/reception/img/true.jpg" /></a></div>
                        <div class="jourfls_topfr fr"> <i><a href="#">开店速度超过汉堡王，这个中式汉</a></i> <span><a href="#">在国内，中式快餐很多，但是却没有一个快餐品牌能一统天下，更别说在国际上和麦当劳、肯德基交锋。让人意外的是，有一家中式快餐店，现...</a></span> </div>
                    </div>
                    <div class="jourfls_btm">
                        <ul>
                            <li> <span class="fl"><a href="#">冒菜店生意不好怎么办？新客进店很难？</a></span> <i class="fr">2017-11-02</i> </li>
                            <li> <span class="fl"><a href="#">自助早餐连锁加盟店</a></span> <i class="fr">2017-11-02</i> </li>
                            <li> <span class="fl"><a href="#">三生三世遇蜜逗，十里桃花处处香</a></span> <i class="fr">2017-11-02</i> </li>
                            <li> <span class="fl"><a href="#">韩国纸上烤肉加盟多少钱</a></span> <i class="fr">2017-11-02</i> </li>
                            <li> <span class="fl"><a href="#">醉品告诉你如何鉴别冻顶乌龙</a></span> <i class="fr">2017-11-02</i> </li>
                            <li> <span class="fl"><a href="#">汤姆之家汉堡，层层把关，打造美味新事业</a></span> <i class="fr">2017-11-02</i> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="jourcon fl">
                <div class="jourcons">
                    <div class="jourcons_top"><a href="#">热烈祝贺荆门李姐浪漫季节加盟店</a></div>
                    <div class="jourcons_btm">
                        <ul>
                            <li><a href="#">成都正宗冒菜培训哪家好？</a></li>
                            <li><a href="#">营养早餐连锁加盟店</a></li>
                            <li><a href="#">朝天门火锅签约入驻四川西昌</a></li>
                            <li><a href="#">三生三世遇蜜逗，十里桃花处处香</a></li>
                            <li><a href="#">七公主：卷出美妙好滋味</a></li>
                            <li><a href="#">加盟谁的咖啡 四大优势引领财富</a></li>
                        </ul>
                    </div>
                </div>
                <div class="jourcons">
                    <div class="jourcons_top"><a href="#">江苏冒菜加盟项目赚钱吗？</a></div>
                    <div class="jourcons_btm">
                        <ul>
                            <li><a href="#">宴和饺子手擀面的加盟优势有哪些</a></li>
                            <li><a href="#">恭喜陕西汉台张总成功签约重庆八旺火锅串串</a></li>
                            <li><a href="#">朝天门火锅签约入驻新疆新源县</a></li>
                            <li><a href="#">八旺--火锅串串加盟门店租赁要慎重</a></li>
                            <li><a href="#">七公主九味卷加盟 虚位以待您的光临</a></li>
                            <li><a href="#">谁的咖啡 一个创造财富的商机</a></li>
                        </ul>
                    </div>
                </div>
                <div class="jourcons">
                    <div class="jourcons_top"><a href="#">比比味鸡排 香飘十里 日赚上万</a></div>
                    <div class="jourcons_btm">
                        <ul>
                            <li><a href="#">重庆火锅走向世界！热烈祝贺苏大姐老火锅纽</a></li>
                            <li><a href="#">最赚钱的行业,最有前景的十大行业</a></li>
                            <li><a href="#">冒菜加盟品牌哪个更赚钱？</a></li>
                            <li><a href="#">炊二哥火锅加盟优势</a></li>
                            <li><a href="#">饺子馆渐渐流行起了复古风，怀旧风</a></li>
                            <li><a href="#">早市卖什么赚钱</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="jourfr fr">
                <div class="jourfrs">
                    <div class="tit"><i>进口零食加盟</i></div>
                    <div class="jourfrs_top">
                        <div class="jourfrs_topfl fl"><a href="#"><img src="/reception/img/true1.jpg" /></a></div>
                        <div class="jourfrs_topfr fr"> <i><a href="#">闺秘：夏季家居服还是棉质的好</a></i> <span><a href="#">天气越来越热了，待在家里自然想要轻快、凉爽些，所以夏季家居服是不是该走起了呢？家居服的款式多...</a></span> </div>
                    </div>
                    <div class="jourfls_btm">
                        <ul>
                            <li> <span class="fl"><a href="#">加盟莎茵屋牛排杯 成功更靠谱</a></span> <i class="fr">2017-11-02</i> </li>
                            <li> <span class="fl"><a href="#">相约致爱丽丝，品时尚鲜饮，创财富事业！</a></span> <i class="fr">2017-11-02</i> </li>
                            <li> <span class="fl"><a href="#">朝天门火锅︱用美食让你的生命多点色彩</a></span> <i class="fr">2017-11-02</i> </li>
                            <li> <span class="fl"><a href="#">开一家冒菜加盟店要注意哪些问题？</a></span> <i class="fr">2017-11-02</i> </li>
                        </ul>
                    </div>
                </div>
                <div class="jourfrer">
                    <div class="tit"><i>进口零食加盟</i></div>
                    <div class="jourfrer_top"><a href="#"><img src="/reception/img/12.jpg" /></a><span><i><a href="#">莎斯莱思时尚蜕变|给我一点</a></i></span></div>
                    <div class="jourfls_btm">
                        <ul>
                            <li> <span class="fl"><a href="#">加盟莎茵屋牛排杯 成功更靠谱</a></span> <i class="fr">2017-11-02</i> </li>
                            <li> <span class="fl"><a href="#">相约致爱丽丝，品时尚鲜饮，创财富事业！</a></span> <i class="fr">2017-11-02</i> </li>
                            <li> <span class="fl"><a href="#">朝天门火锅︱用美食让你的生命多点色彩</a></span> <i class="fr">2017-11-02</i> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!----新闻内容 end---->

    </div>
    @section('flink')
        <div id="linkfrend">
            <div class="fixed" id="youqinglink" style="height:75px;">
                <ul>
                    <li id="title_index">友情链接:</li>
                    @foreach($flinks as $flink)
                        <li><a href="{{$flink->wenurl}}">{{$flink->webname}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    @stop

    <!-- 友情链接结束-->
@stop