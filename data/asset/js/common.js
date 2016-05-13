//去空格
function trim(str) {
    var newStr = str.replace(/^\s*$/g,'');
    return newStr;
}
//判断字节
function JHshStrLen(sString){
    var sStr,iCount,i,strTemp ;
    iCount = 0 ;
    sStr = sString.split("");
    for (i = 0 ; i < sStr.length ; i ++)
    {
        strTemp = escape(sStr[i]);
        if (strTemp.indexOf("%u",0) == -1) // 表示是汉字
        {
            iCount = iCount + 1 ;
        }
        else
        {
            iCount = iCount + 2 ;
        }
    }
    return iCount ;
}
//弹框
function tan(str){
    $(".tan").remove();
    $("body").append("<div class='tan tanchu'>"+str+"</div>");
    if(tanTimer){
        clearInterval(tanTimer);
    }
    tanTimer = setTimeout(function(){$(".tan").remove()},2000);
}

//切换类名
function changeClass(x,c1,c2){
    var t = $("."+x);
    if(t.hasClass(c1)){
        t.removeClass(c1);
        t.addClass(c2);
    }else{
        t.removeClass(c2);
        t.addClass(c1);
    }
}

//禁止窗口滚动，显示一屏；
function noScroll(door){
    if(door){
        $("body").attr("ontouchmove","event.preventDefault()");
    }else{
        $("body").removeAttr("ontouchmove");
    }
}