
    <title>宣猿派</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>data/asset/css/home.css">
    <style>
        .hidden{ display: none;}
        .more a{
            color: #282525;
        }
        .list-box{
            width: 100%;
            overflow-x: hidden;
        }
    </style>
</head>
<body class="home" style="height: 100%" data-pinterest-extension-installed="cr1.39.1">

<div href="" class="head-title">

    <div class="s-city">
        <p class="sec">
            <i class="iconfont">&#xe645;</i>
            <span class="sec-city">北京</span>
        <ul class="city">
            <li><a href="javascript:void(0)">北京</a></li>
            <li><a href="javascript:void(0)">上海</a></li>
            <li><a href="javascript:void(0)">全部</a></li>
        </ul>
    </div>
    <a href="pos-screening.html" class="search-pos">
        <span>职位搜索</span><i class="iconfont">&#xe617;</i>
    </a>
</div>
<ul class="pos hid">
    <p class="hot">热门职位</p>
    <li><a href="javascript:void(0)">PHP</a></li>
    <li><a href="javascript:void(0)">JAVA</a></li>
    <li><a href="javascript:void(0)">JS</a></li>
    <li><a href="javascript:void(0)">前端工程师</a></li>
    <li><a href="javascript:void(0)">PHP</a></li>
    <li><a href="javascript:void(0)">JAVA</a></li>
    <li><a href="javascript:void(0)">全部</a></li>
    <p class="hot pos-select">职位</p>

    <li><a href="javascript:void(0)">PHP</a></li>
    <li><a href="javascript:void(0)">JAVA</a></li>
    <li><a href="javascript:void(0)">JS</a></li>
    <li><a href="javascript:void(0)">前端工程师</a></li>
    <li><a href="javascript:void(0)">PHP</a></li>
    <li><a href="javascript:void(0)">JAVA</a></li>
    <li><a href="javascript:void(0)">全部</a></li>
</ul>
<div class="header-space"></div>
<!--代码部分begin-->
<div class="lanren">
    <div class="hidden">
        <?php echo $str;?>
    </div>
    <div class="list-box"></div>
    <div class="more"><a href="javascript:;" onClick="lanren.loadMore();">点击查看更多职位</a></div>
    <div class="nav-bar flexBox">
        <div class="flexBox-item1">
            <a href="index.html" style="color: #27ae60;"><i class="iconfont">&#xe64a;</i><span>职位</span></a>
        </div>
        <div class="flexBox-item1">
            <a href="main.html"><i class="iconfont">&#xe64b;</i><span>我</span></a>
        </div>
    </div>
</div>
<script src="http://www.lanrenzhijia.com/ajaxjs/jquery.min.js"></script>
<script>
    $(document).ready(function(){
//        $('.test-lazyload').picLazyLoad({
//            threshold: 100,
//        });
        var title = $('.screen');
        title.each(function(){
            if($(this).find('span').html() == '全部'){
                $(this).addClass('current');
            }
        })
        $(".interset-head span").each(function(){
//                alert(1)
            var head = $(this).find("img").size();
            if(head==0){
                $(this).parent().hide()
            }
        })

    })
    $(document).on('touchstart',function(ev){
        ev = window.event || event;
        var startH = ev.touches[0].clientY;
        $(document).on('touchmove',function(ev){
            ev = window.event || event;
            var moveH = ev.touches[0].clientY;
            if(moveH>startH){
                $(".head-title").show();
                $(".header-space").show();
            }else{
                $(".head-title").hide();
                $(".header-space").hide();
            }
        });
    });
    var head = $(".interset-head span");
    head.find('img').each(function(){
        if($(this).index()>8){
            $(this).hide();
        }
    })
    var count = 0;
    var head = $(".head-list");
    head.find('li').each(function(){
        if($(this).index()>5){
            $(this).hide();
        }
    })
    //职位选择
    $(".c-title").click(function(){
        $("ul.city").css("display", "none");

        var flag = $("ul.pos").css("display");
        if (flag == "none") {
            $("ul.pos").css("display", "block");
        }

        else {
            $("ul.pos").css("display", "none");
        }
//
        $(".home .pos").css("zIndex","9999");
        $(".home .s-city .city").css("zIndex","-1");

        return false;
    })
    $(".screening").click(function(){
        $(".cross").toggle();
        $(".vertical").toggle();
        changeClass("job","arrow-down","arrow-up");
//            $("ul.pos").toggle();
        var flag = $("ul.pos").css("display");
        if (flag == "none") {
            $("ul.pos").css("display", "block");
            $("ul.city").css("display", "none");
        }

        else {
            $("ul.pos").css("display", "none");
        }
        $(".home .pos").css("zIndex","9999");
        $(".home .s-city .city").css("zIndex","-1");
        return false;

    })
    $(".pos a").click(function(){
        $(this).parents("ul").toggle();
        changeClass("job","arrow-down","arrow-up");
        $(".header-lable").val($(this).text());
        $(".cross").show();
        $(".vertical").hide();
        $("ul.city").css("display", "none");
    })

    //地理位置选择
    $(".sec").click(function(){
        var flag = $("ul.city").css("display");
        if (flag == "none") {
            $("ul.city").css("display", "block");
            $("ul.pos").css("display", "none");
            $(".cross").show();
            $(".vertical").hide();
        }

        else {
            $("ul.city").css("display", "none");

        }
//
        $(".home .pos").css("zIndex","-1");
        $(".home .s-city .city").css("zIndex","9999");


    })
    $(".city li").click(function(){
        $(".sec-city").text($(this).text());
        $("ul.city").toggle();
        changeClass("place","arrow-down","arrow-up");
    })




    var _content = []; //临时存储li循环内容
    var lanren = {
        _default:3, //默认显示图片个数
        _loading:3,  //每次点击按钮后加载的个数
        init:function(){
            var lis = $(".lanren .hidden .position-box");
            $(".lanren ul.list").html("");
            for(var n=0;n<lanren._default;n++){
                lis.eq(n).appendTo(".lanren .list-box");
            }
            $(".lanren ul.list img").each(function(){
                $(this).attr('src',$(this).attr('realSrc'));
            })
            for(var i=lanren._default;i<lis.length;i++){
                _content.push(lis.eq(i));
            }
            $(".lanren .hidden").html("");
        },
        loadMore:function(){
            var mLis = $(".lanren .list-box .position-box").length;
            for(var i =0;i<lanren._loading;i++){
                var target = _content.shift();
                if(!target){
                    $('.lanren .more').html("<p>亲，没有新职位啦！</p>");
                    break;
                }
                $(".lanren .list-box").append(target);
                $(".lanren .list-box .position-box").eq(mLis+i).each(function(){
                    $(this).attr('src',$(this).attr('realSrc'));
                });
            }
        }
    }
    lanren.init();
</script>
<!--代码部分end-->
</body>
</html>