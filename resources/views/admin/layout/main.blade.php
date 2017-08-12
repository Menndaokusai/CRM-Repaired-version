<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>TCS-CRM</title>
<link href="/css/base.css" rel="stylesheet">
<link href="/css/platform.css" rel="stylesheet">
<link rel="stylesheet" href="/custom/uimaker/easyui.css">
</head> 
<body>
    <div class="container">

        @include('admin.layout.header')

        <div id="pf-bd">

            @include('admin.layout.sidebar')

            <div id="pf-page" class="easyui-tabs1" style="width:100%;height:100%;">
                  <div title="首页" style="padding:10px 5px 5px 10px;">
                    <iframe class="page-iframe" frameborder="no" border="no" height="100%" width="100%" scrolling="auto"></iframe>
                  </div>
            </div>
        </div>

        @include('admin.layout.footer')

    </div>

    <script type="text/javascript" src="/custom/jquery.min.js"></script>
    <script type="text/javascript" src="/custom/jquery.easyui.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>

    
    <script type="text/javascript">

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
    });
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
    })
    </script>
</body> 
</html>
