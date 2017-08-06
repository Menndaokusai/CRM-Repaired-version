@extends("admin.layout.main")
@section("content")
    <style type="text/css">
        .content{
            padding:150px;
        }
    </style>
    <section class="content">
                <form class="form-horizontal"  id="editForm" action="/admin/customers/updt/{{$read->id}}}" method="post">
                    <div class="form-group">
                        <span class="col-sm-2 control-label">客户名</span>
                        <div class="col-xs-3">
                            <input id="Customer_Name" name="Customer_Name" class="form-control" type="text" placeholder="客户名" value="{{$read->Customer_Name}}">
                        </div>
                        <span class="col-sm-2 control-label">客户类型</span>
                        <div class="col-xs-3">
                            <select id="select"  name="Customer_Type"  style="width: 260px; height: 30px; overflow-y:auto" >
                                <option value="{{$read->Customer_Type}}">请选择</option>
                                <option value="有限责任公司">有限责任公司</option>
                                <option value="股份制公司">股份制公司</option>
                                <option value="集团公司">集团公司</option>
                                <option value="一人制公司">一人制公司</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <span class="col-sm-2 control-label">常用电话</span>
                        <div class="col-xs-3">
                            <input id="Primary_Phone" name="Primary_Phone" class="form-control" type="text" placeholder="常用电话" value="{{$read->Primary_Phone}}">
                        </div>
                        <span class="col-sm-2 control-label">备用电话</span>
                        <div class="col-xs-3">
                            <input id="Alternate_Phone" name="Alternate_Phone" class="form-control" type="text" placeholder="备用电话" value="{{$read->Alternate_Phone}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <span class="col-sm-2 control-label">地址</span>
                        <div class="col-xs-3">
                            <input id="city" name="city" class="form-control" type="text" placeholder="地址" value="{{$read->city}}">
                        </div>
                        <span class="col-sm-2 control-label">所有人</span>
                        <div class="col-xs-3">
                            <input id="Ownership" name="Ownership" class="form-control" type="text" placeholder="所有人" value="{{$read->Ownership}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <span class="col-sm-2 control-label">邮箱</span>
                        <div class="col-xs-3">
                            <input id="Email" name="Email" class="form-control" type="text" placeholder="邮箱" value="{{$read->Email}}">
                        </div>
                        <span class="col-sm-2 control-label">负责人</span>
                        <div class="col-xs-3">
                            <input id="Manager" name="Manager" class="form-control" type="text" placeholder="负责人" value="{{$read->Manager}}">
                        </div>
                    </div>

                    {{ method_field("PUT")}}
                    {{ csrf_field() }}


                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-5">
                            <button class="btn btn-primary btn-small" type="submit">提交</button>
                            <a href="/admin/customer"><span class="btn btn-default btn-small" data-dismiss="modal" style="margin-left:10px;">取消</span></a>
                        </div>
                    </div>
                </form>
    </section>
@endsection
