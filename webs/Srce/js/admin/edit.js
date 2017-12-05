$(function(){
    //修改资料选项卡
    $('#sel-edit li').click( function () {
        var index = $(this).index();
        $(this).addClass('edit-cur').siblings().removeClass('edit-cur');
        $('.form').hide().eq(index).show();
    } );
    //城市联动
    var province = '';
    $.each(city, function (i, k) {
        province += '<option value="' + k.name + '" index="' + i + '">' + k.name + '</option>';
    });
    $('select[name=province]').append(province).change(function () {
        var option = '';
        if ($(this).val() == '') {
            option += '<option value="">请选择</option>';
        } else {
            var index = $(':selected', this).attr('index');
            var data = city[index].child;
            for (var i = 0; i < data.length; i++) {
                option += '<option value="' + data[i] + '">' + data[i] + '</option>';
            }
        }
        
        $('select[name=city]').html(option);
    });
});