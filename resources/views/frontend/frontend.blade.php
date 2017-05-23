<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>index</title>
    <link href="/reception/css/css.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="/reception/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="/reception/js/jquery.flexslider-min.js"></script>
</head>
<body>
<div class="big">
    <!------顶部------>
    <div class="dingbu clearfix">
        <div class="w1200">
            <div class="dingbu_fl fl">您好，欢迎您来到零食加盟网！</div>
            <div class="dingbu_fr fr">
                <ul>
                    <li><a href="#">找项目</a></li>
                    <li><a href="#">网站导航</a></li>
                    <li><a href="#">帮助中心</a></li>
                    <li><a href="/register">注册</a></li>
                    <li><a href="/login">登录</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!------over------>
    <!------header------>
    <div class="w1200">
        <div class="header_logo fl"><a href="/"><img src="/reception/img/logo.png" /></a></div>
        <div class="header_sousuo fl">
            <div class="header_sousuofl fl">
                <input type="text" placeholder="请输入搜索内容" />
            </div>
            <div class="header_sousuofr fr">
                <input type="button" value="搜&nbsp;索" />
            </div>
        </div>
    </div>
    <!------over------>
    <!------nav------>
    <nav>
        <div class="nav1200">
            <ul>
                <li><a href="#">全部品牌分类<img src="/reception/img/more.png" /></a></li>
                <li><a href="/xm/">找项目</a></li>
                <li><a href="#">创业专题</a></li>
                <li><a href="/{{\App\AdminModel\Arctype::where('id',2)->value('real_path')}}/">零食资讯</a></li>
                <li><a href="#">项目点评</a></li>
                <li><a href="/ask/">项目问答</a></li>
                <li><a href="/paihangbang/">排行榜</a></li>
            </ul>
        </div>
    </nav>
    <!------over------>
    @yield('big_con')
    <!----底部 end---->
    <div class="footer">
        <div class="cy_5bu">
            <p></p>
        </div>
@yield('flink')

        <div class="foot">
            <ul>
                <li><a target="_blank" href="#" rel="nofollow">关于我们</a> | <a target="_blank" href="#" rel="nofollow">联系我们</a> | <a href="#" target="_blank">网站地图</a> | <a href="#" target="_blank">友情链接</a> </li>
            </ul>
        </div>

        <!--foot 结束-->

        <div class="copyright_img"> <a rel="nofollow" href="#" target="_blank"><img width="120" height="45" title="营业执照" alt="营业执照" src="/reception/img/businessico.png"></a> <a rel="nofollow" href="#" target="_blank"><img width="120" height="45" title="食品经营-许可证" alt="食品经营-许可证" src="/reception/img/foodico.png"></a> <a rel="nofollow" href="javascript:;" target="_blank"><img width="120" height="45" title="华南2C诚信同盟" alt="华南2C诚信同盟" src="/reception/img/scoba.jpg"></a> <a rel="nofollow" href="javascript:;" target="_blank"><img width="120" height="45" title="诚信电商" alt="诚信电商" src="/reception/img/cxds.jpg"></a> <a target="_blank" href="#" rel="nofollow"><img src="/reception/img/weiquan_1.jpg" width="120" height="45" alt="红盾电子标识" title="红盾电子标识"></a> <a target="_blank" href="#" rel="nofollow"><img src="/reception/img/weiquan_2.jpg" width="120" height="45" alt="消费维权服务站" title="消费维权服务站"></a> </div>
        <!--copyright_img 结束-->

        <div class="divd">
            <div style="margin:0 0 5px 0;"><a target="_blank" href="javascript:;"><img src="/reception/img/bei.png" style=" position:relative; left:-2px; top:5px;"><span>粤公网安备 44010302000159号</span></a><span>&nbsp;苏ICP备17016124号&nbsp;许可证：粤B2-20110008</span> </div>
            <span>Copyright © 中国零食网 2009 - 2015,</span> <span>All Rights Reserved</span><br>
            <span>凡本网注明“lingshi.com”的所有作品，包括文字、图片、程序等，版权均属于中国零食网所有，未经同意，不得用于商业用途。</span> </div>
        <div class="info">本站通用网址：零食网  中国零食网</div>
        <div class="info">全国统一服务电话：400-600-0404</div>
    </div>
    <!--footer-->
</div>
<!----底部 end---->

<script src="/reception/js/jquery.kxbdMarquee.js"></script>
<script>
    (function(){
        $("#marquee1").kxbdMarquee({direction:"left"});
        $("#marquee3").kxbdMarquee({direction:"up"});

    })();
</script>
</body>
</html>
