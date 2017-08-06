@extends("admin.layout.main")
@section("content")
    <style type="text/css">
        .content{
            padding:150px;
        }
    </style>
    <section class="content">
                <form class="form-horizontal"  id="editForm" action="/admin/contacts/updt/{{$read->id}}}" method="post">
                    <div class="form-group">
                        <span class="col-sm-2 control-label">联系人姓名</span>
                        <div class="col-xs-3">
                            <input id="Contact_Name" name="Contact_Name" class="col-xs-4 form-control " type="text" placeholder="联系人姓名" value="{{$read->Contact_Name}}">
                        </div>
                        <span class="col-sm-2 control-label">移动电话</span>
                        <div class="col-xs-3 ">
                            <input id="Mobile_Phone" name="Mobile_Phone" class="form-control" type="text" placeholder="移动电话" value="{{$read->Mobile_Phone}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <span class="col-sm-2 control-label">家庭电话</span>
                        <div class="col-xs-3">
                            <input id="Home_Phone" name="Home_Phone" class="form-control" type="text" placeholder="家庭电话" value="{{$read->Home_Phone}}">
                        </div>
                        <span class="col-sm-2 control-label">工作电话</span>
                        <div class="col-xs-3">
                            <input id="Office_Phone" name="Office_Phone" class="form-control" type="text" placeholder="工作电话" value="{{$read->Office_Phone}}">
                        </div>
                    </div>


                    <div class="form-group">
                        <span class="col-sm-2 control-label">家庭地址</span>
                        <div class="col-xs-3">
                            <input id="city" name="city" class="form-control" type="text" placeholder="家庭地址" value="{{$read->city}}">

                        </div>
                        <span class="col-sm-2 control-label">助理电话</span>
                        <div class="col-xs-3">
                            <input id="Asst_Phone" name="Asst_Phone" class="form-control" type="text" placeholder="助理电话" value="{{$read->Asst_Phone}}">
                        </div>
                    </div>


                    <div class="form-group">
                        <span class="col-sm-2 control-label">助理名字</span>
                        <div class="col-xs-3">
                            <input id="Asst_Name" name="Asst_Name" class="form-control" type="text" placeholder="助理姓名" value="{{$read->Asst_Name}}">
                        </div>
                        <span class="col-sm-2 control-label">性别</span>
                        <div class="col-xs-3">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="Sex" id="Sex"
                                           value="男" checked> 男
                                </label>
                                <label>
                                    <input type="radio" name="Sex" id="Sex"
                                           value="女">
                                    女
                                </label>
                            </div>
                        </div>

                    </div>


                    <div class="form-group">
                        <span class="col-sm-2 control-label">工作部门</span>
                        <div class="col-xs-3">
                            <input id="Department" name="Department" class="form-control" type="text" placeholder="工作部门" value="{{$read->Department}}">
                        </div>
                        <span class="col-sm-2 control-label">职位</span>
                        <div class="col-xs-3">
                            <input id="Designation" name="Designation" class="form-control" type="text" placeholder="职位" value="{{$read->Designation}}">
                        </div>
                    </div>


                    <div class="form-group">
                        <span class="col-sm-2 control-label">电子邮箱</span>
                        <div class="col-xs-3">
                            <input id="Email" name="Email" class="form-control" type="text" placeholder="电子邮箱" value="{{$read->Email}}">
                        </div>

                        <span class="col-sm-2 control-label">生日日期</span>
                        <div class="col-xs-3">
                            <input id="Birth" name="Birth" class="form-control" type="date" placeholder="生日日期" value="{{$read->Birth}}">

                        </div>
                    </div>

                    <div class="form-group">
                        <span class="col-sm-2 control-label">工作单位</span>
                        <div class="col-xs-3">
                            <input id="Company" name="Company" class="form-control" type="text" placeholder="工作单位" value="{{$read->Company}}">
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
                            <a href="/admin/contact"><span class="btn btn-default btn-small" data-dismiss="modal" style="margin-left:10px;">取消</span></a>
                        </div>
                    </div>
                </form>
</section>
@endsection
