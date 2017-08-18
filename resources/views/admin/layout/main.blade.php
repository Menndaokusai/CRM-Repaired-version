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
    <script type="text/javascript" src="/js/sidebar.js"></script>
</body>
</html>
