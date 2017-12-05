$(function(){
    $(".verifys").live("click",function(){
        $(this).attr('src',verifysurl+"&V="+Math.random());
    })
})
