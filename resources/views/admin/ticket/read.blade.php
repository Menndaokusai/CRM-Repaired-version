@extends("admin.layout.main")
@section("content")
    <style type="text/css">
        .content{
            padding:150px;
        }
    </style>
    <section class="content">
                <form class="form-horizontal"  id="editForm" action="/admin/tickets/updt/{{$read->id}}}" method="post">
                        <div class="form-group">
                            <span class="col-sm-2 control-label">标题</span>
                            <div class="col-xs-3">
                                <input id="Title" name="Title" class="form-control" type="text" placeholder="标题" value="{{ $read->Title }}">
                            </div>
                            <span class="col-sm-2 control-label">客户名</span>
                            <div class="col-xs-3">
                                <input id="Account_Name" name="Account_Name" class="form-control" type="text" placeholder="客户名" value="{{ $read->Account_Name }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-sm-2 control-label">联系人编号</span>
                            <div class="col-xs-3">
                                <input id="Contact_ID" name="Contact_ID" class="form-control" type="text" placeholder="联系人ID" value="{{ $read->Contact_ID }}">
                            </div>
                            <span class="col-sm-2 control-label">状态</span>
                            <div class="col-xs-3">
                                <select id="select" name="Status"  style="width: 260px; height: 30px; overflow-y:auto" >
                                    <option value="{{ $read->Status }}">请选择</option>
                                    <option value="正在解决">正在解决</option>
                                    <option value="等待解决">等待解决</option>
                                    <option value="其他">其他</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-sm-2 control-label">严重程度</span>
                            <div class="col-xs-3">
                                <select id="select"   name="Severity" style="width: 260px; height: 30px; overflow-y:auto" >
                                    <option value="{{ $read->Severity }}">请选择</option>
                                    <option value="轻度">轻度</option>
                                    <option value="重度">重度</option>
                                    <option value="紧急">紧急</option>
                                </select>
                            </div>
                            <span class="col-sm-2 control-label">小时</span>
                            <div class="col-xs-3">
                                <input id="Hours" name="Hours" class="form-control" type="text" placeholder="小时" value="{{ $read->Hours }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-sm-2 control-label">天</span>
                            <div class="col-xs-3">
                                <input id="Days" name="Days" class="form-control" type="text" placeholder="天" value="{{ $read->Days }}">
                            </div>
                            <span class="col-sm-2 control-label">类型</span>
                            <div class="col-xs-3">
                                <input id="Category" name="Category" class="form-control" type="text" placeholder="类型" value="{{ $read->Category }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-sm-2 control-label">优先级</span>
                            <div class="col-xs-3">
                                <select id="select" name="Priority"  style="width: 260px; height: 30px; overflow-y:auto" >
                                    <option value="{{ $read->Priority }}">请选择</option>
                                    <option value="一等">一等</option>
                                    <option value="二等">二等</option>
                                    <option value="三等">三等</option>
                                </select>
                            </div>
                            <span class="col-sm-2 control-label">描述</span>
                            <div class="col-xs-3">
                                <input id="Description" name="Description" class="form-control" type="text" placeholder="描述" value="{{ $read->Description }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-sm-2 control-label">解决方案</span>
                            <div class="col-xs-3">
                                <input id="Solution" name="Solution" class="form-control" type="text" placeholder="解决方案" value="{{ $read->Solution }}">
                            </div>
                            <span class="col-sm-2 control-label">负责人</span>
                            <div class="col-xs-3">
                                <input id="Manager" name="Manager" class="form-control" type="text" placeholder="负责人" value="{{ $read->Manager }}">
                            </div>
                        </div>

                    {{ method_field("PUT")}}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-5">
                            <button class="btn btn-primary btn-small" type="submit">提交</button>
                            <a href="/admin/ticket"><span class="btn btn-default btn-small" data-dismiss="modal" style="margin-left:10px;">取消</span></a>
                        </div>
                    </div>
                </form>
</section>
@endsection
