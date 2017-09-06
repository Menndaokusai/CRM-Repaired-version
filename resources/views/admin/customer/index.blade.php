<link rel="stylesheet" href="/custom/uimaker/easyui.css">
<link rel="stylesheet" type="text/css" href="/custom/uimaker/icon.css">
<div class="container">
       <table id="dg" class="easyui-datagrid" style="width:100%;height:529px" title="客户列表" data-options="
                rownumbers:true,
                singleSelect:true,
                autoRowHeight:false,
                pagination:true,
                fitColumns:true,
                striped:true,
                checkOnSelect:false,
                selectOnCheck:false,
                collapsible:true,
                toolbar:'#tb',
                pageSize:10">


       </table>
      <div id="tb" style="padding:0 30px;">
        <div class="conditions">
            <div id="toolbar">
                <a href="javascript:void(0)" class="easyui-linkbutton" iconcls="icon-add" onclick="newUser()" plain="true">添加</a>
                <a href="javascript:void(0)" class="easyui-linkbutton" iconcls="icon-edit" onclick="editUser()" plain="true">修改</a>
                <a href="javascript:void(0)" class="easyui-linkbutton" iconcls="icon-remove" onclick="destroyUser()" plain="true">删除</a>
            </div>
        </div>
      </div>
    @include('admin.customer.popup')

</div>
    <script type="text/javascript" src="/custom/jquery.min.js"></script>
    <script type="text/javascript" src="/custom/jquery.easyui.min.js"></script>
    <script type="text/javascript" src="/custom/easyui-lang-zh_CN.js"></script>
    <script type="text/javascript" src="/js/table.js"></script>
