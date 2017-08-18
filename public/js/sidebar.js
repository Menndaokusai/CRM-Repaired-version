function addTab(title, name){
    if ($('#pf-page').tabs('exists', title)){
        $('#pf-page').tabs('select', title);
    } else {
        var content = '<iframe name="'+name+'" class="page-iframe" frameborder="no" border="no" height="100%" width="100%" scrolling="auto"></iframe>';
        $('#pf-page').tabs('add',{
            title:title,
            content:content,
            closable:true
        });
    }
}

$('.easyui-tabs1').tabs({
    tabHeight: 44,
    onSelect:function(title,index){
        var currentTab = $('.easyui-tabs1').tabs("getSelected");
        if(currentTab.find("iframe") && currentTab.find("iframe").size()){
            currentTab.find("iframe").attr("src",currentTab.find("iframe").attr("src"));
        }
    }
})

$(window).resize(function(){
    $('.tabs-panels').height($("#pf-page").height()-46);
    $('.panel-body').height($("#pf-page").height()-76)
}).resize();

var page = 0,
    pages = ($('.pf-nav').height() / 70) - 1;

if(pages === 0){
    $('.pf-nav-prev,.pf-nav-next').hide();
}
$(document).on('click', '.pf-nav-prev,.pf-nav-next', function(){


    if($(this).hasClass('disabled')) return;
    if($(this).hasClass('pf-nav-next')){
        page++;
        $('.pf-nav').stop().animate({'margin-top': -70*page}, 200);
        if(page == pages){
            $(this).addClass('disabled');
            $('.pf-nav-prev').removeClass('disabled');
        }else{
            $('.pf-nav-prev').removeClass('disabled');
        }

    }else{
        page--;
        $('.pf-nav').stop().animate({'margin-top': -70*page}, 200);
        if(page == 0){
            $(this).addClass('disabled');
            $('.pf-nav-next').removeClass('disabled');
        }else{
            $('.pf-nav-next').removeClass('disabled');
        }

    }
});