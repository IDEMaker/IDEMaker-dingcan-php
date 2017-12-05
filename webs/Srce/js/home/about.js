(function($){
    $("#tousu-commit").click(function(event) {
        commitAdvice();
    });

    $("#hotel-commit").click(function(event) {
        commitHotel();
    });
})(jQuery);


//投诉或建议
function commitAdvice(){
    var tousuTxt=$("#tousu-txt").val();
    var username=my_GetValue('userId');
    if(tousuTxt==""||tousuTxt.length<=0){
        showAlert("不能为空");
        return;
    } 
    if(!username){
        showAlert("请先登录");
        return;
    }
    var postUrl="?m=home&c=Aboutc&a=comSu";
    $.post(postUrl,  
        {advice:tousuTxt,
         username:username},
        function(data,status,xhr) {     
           if(status=="success"){  
                $res= $.parseJSON(data); 
                if($res.code=="0"){   
                    showAlert("提交成功","?m=home&c=Accountc&a=about&p=tousujianyi");
                    // window.location.reload();
                } 
           }else{
                showAlert("服务器异常");
           }
       }); 
}

//提交餐馆
function commitHotel(){ 
    var hotelName=$("#hotelName").val();
    var hotelPhone=$("#hotelPhone").val();
    var hotelLocation=$("#hotelLocation").val();
    var hotelIntroduction=$("#hotelIntroduction").val();
    var username=my_GetValue('userId');
    if(hotelName==""||hotelName.length<=0){
        showAlert("名称不能为空");
        return;
    } 
    if(hotelPhone==""||hotelPhone.length<=0){
        showAlert("联系方式不能为空");
        return;
    } 
    if(!username){
        showAlert("请先登录");
        return;
    }
    var postUrl="?m=home&c=Aboutc&a=shopApply";
    $.post(postUrl,  
        {hotelName:hotelName,
         hotelPhone:hotelPhone,
         hotelLocation:hotelLocation,
         hotelIntroduction:hotelIntroduction,
         username:username},
        function(data,status,xhr) {     
           if(status=="success"){  
                $res= $.parseJSON(data); 
                if($res.code=="0"){   
                    showAlert("提交成功","?m=home&c=Accountc&a=about&p=shangjiaruzhu");
                 //   window.location.reload();
                }else if($res.code==1)
                {
                     showAlert($res.msg);
                }

           }else{
                showAlert("服务器异常");
           }
       }); 
}