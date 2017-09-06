<style type="text/css">
    #fm
    {
        margin: 0;
        padding: 10px 30px;
    }
    .ftitle
    {
        font-size: 14px;
        font-weight: bold;
        padding: 5px 0;
        margin-bottom: 10px;
        border-bottom: 1px solid #ccc;
    }
    .fitem
    {
        margin-bottom: 5px;
    }
    .fitem label
    {
        display: inline-block;
        width: 80px;
    }
</style>
<div id="dlg" class="easyui-dialog" style="width: 400px; height: 380px; padding: 10px 20px;"
     closed="true" buttons="#dlg-buttons">
    <div class="ftitle">
        信息编辑
    </div>
    <form id="fm">
        <div class="fitem">
            <label>
                客户名
            </label>
            <input name="Customer_Name" class="easyui-validatebox" required="true" />
        </div>
        <div class="fitem">
            <label>
                客户类型
            </label>
            <input name="Customer_Type" class="easyui-validatebox"/>
        </div>
        <div class="fitem">
            <label>
                联系电话
            </label>
            <input name="Primary_Phone" class="easyui-validatebox" required="true" />
        </div>
        <div class="fitem">
            <label>
                备用电话
            </label>
            <input name="Alternate_Phone" class="easyui-vlidatebox"/>
        </div>
        <div class="fitem">
            <label>
                省份
            </label>
            <input name="province" class="easyui-vlidatebox" />
        </div>
        <div class="fitem">
            <label>
                城市
            </label>
            <input name="city" class="easyui-vlidatebox" />
        </div>
        <div class="fitem">
            <label>
                详细地址
            </label>
            <input name="detail" class="easyui-vlidatebox" />
        </div>
        <div class="fitem">
            <label>
                所有人
            </label>
            <input name="Ownership" class="easyui-vlidatebox"/>
        </div>
        <div class="fitem">
            <label>
                邮箱
            </label>
            <input name="Email" class="easyui-vlidatebox" />
        </div>
        <div class="fitem">
            <label>
                负责人
            </label>
            <input name="Manager" class="easyui-validatebox" required="true" />
        </div>
        {{ method_field("PUT")}}
        {{ csrf_field() }}
    </form>
</div>
<div id="dlg-buttons">
    <a id="add" href="javascript:void(0)" class="easyui-linkbutton" onclick="saveAdd()" iconcls="icon-save">保存</a>
    <a id="edit" href="javascript:void(0)" class="easyui-linkbutton" onclick="saveEdit()" iconcls="icon-save">保存</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" onclick="javascript:$('#dlg').dialog('close')" iconcls="icon-cancel">取消</a>
</div>
<script type="text/javascript">
    var url;
    function newUser(){
        $('#dlg').dialog('open').dialog('setTitle','新增');
        $('#fm').form('clear');
        $('#edit').hide();
        $('#add').show();
        url = '/admin/customers/add';
    }
    function editUser(){
        var row = $('#dg').datagrid('getSelected');
        if (row){
            $('#dlg').dialog('open').dialog('setTitle','修改');
            $('#fm').form('load',row);
            $('#add').hide();
            $('#edit').show();
            url = '/admin/customers/updt?id=' + row.id;
        }
    }
    function saveEdit() {
        $.ajax({
            cache: true,
            type: "PUT",
            url:url,
            data:$('#fm').serialize(),
            success: function(data) {
                $("#dg").parent().html(data);
            }
        });
    }
    function saveAdd() {
        $("#fm").form("submit", {
            url: url,
            onSubmit: function () {
                return $(this).form("validate");
            }
        });
    }
    function destroyUser() {
        var row = $('#dg').datagrid('getSelected');
        if (row) {
            $.messager.confirm('Confirm', '确定要删除这条记录吗?', function (r) {
                if (r) {
                    $.post('/admin/customers/del', { id: row.id }, function (result) {
                        if (result.success) {
                            $('#dg').datagrid('reload');
                        } else {
                            $.messager.show({
                                title: 'Error',
                                msg: result.errorMsg
                            });
                        }
                    }, 'json');
                }
            });
        }
    }
</script>