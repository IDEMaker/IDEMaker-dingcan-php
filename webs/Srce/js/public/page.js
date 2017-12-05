function page(p)
{   var search=$("input[name='search']").val();
    if(search==undefined)
    {
        search="";
    }
    var ajax=new XMLHttpRequest();
    ajax.open('get',pageurl+"&p="+p+"&search="+search);
    ajax.send(null);
    ajax.onreadystatechange=function()
    {
        if(ajax.readyState==4 && ajax.status==200)
        {

//				  document.getElementById('style').className="";
            document.getElementById('show').innerHTML=ajax.responseText;
        }
    }
}
$(function(){
    $("#search").click(function(){
        var search=$("input[name='search']").val();
        $.ajax({
            type:"get",
            url:pageurl+"&p=1"+"&search="+search,
            success:function(res){
                $("#show").html(res);
            }
        })
    })
})
