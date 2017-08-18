<link href="css/base.css" rel="stylesheet">
<link rel="stylesheet" href="/custom/uimaker/easyui.css">
<link rel="stylesheet" type="text/css" href="/custom/uimaker/icon.css">
<link rel="stylesheet" href="css/providers1.css">
<div class="container">
       <table id="dg" style="width:100%;height:529px" title="全体供应商列表" data-options="
                rownumbers:true,
                singleSelect:false,
                autoRowHeight:false,
                pagination:true,
                fitColumns:true,
                striped:true,
                checkOnSelect:false,
                selectOnCheck:false,
                collapsible:true,
                toolbar:'#tb',
                pageSize:10">
            <thead>
                <tr>
                    <th field="code" width="110">供应商编码</th>
                    <th field="name" width="226">供应商名称</th>
                    <th field="level" width="112">等级</th>
                    <th field="provide" width="170">主供品类</th>
                    <th field="full" width="130">资料是否完善</th>
                    <th field="issubmit" width="136">调查表格是否提交</th>
                    <th field="status" width="120">审核状态</th>
                    <th field="note" width="105">备注</th>
                </tr>
            </thead>
        </table>
      <div id="tb" style="padding:0 30px;">
        <div class="conditions">
            <span class="con-span">供应商编码: </span><input class="easyui-textbox" type="text" name="code" style="width:166px;height:35px;line-height:35px;"></input>
            <span class="con-span">供应商名称: </span><input class="easyui-textbox" type="text" name="name" style="width:166px;height:35px;line-height:35px;"></input>
            <a href="#" class="easyui-linkbutton" iconCls="icon-search" data-options="selected:true">查询</a>
            <a href="#" class="easyui-linkbutton" iconCls="icon-reload">重置</a>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="/custom/jquery.min.js"></script>
    <script type="text/javascript" src="/custom/jquery.easyui.min.js"></script>
    <script type="text/javascript" src="/custom/easyui-lang-zh_CN.js"></script>
    <script type="text/javascript" src="/js/table.js"></script>
