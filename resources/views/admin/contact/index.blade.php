@extends("admin.layout.main")
@section("content")
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h1 class="box-title" ><B>联系人</B></h1>
                        <a><span class="glyphicon glyphicon-plus" data-toggle="modal" data-target="#myModal" STYLE="margin-left: 10px; cursor:pointer"/></a>
                    </div>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel"><b>新增</b></h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal"  id="editForm" action="/admin/contacts/add" method="post">
                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">联系人姓名</span>
                                            <div class="col-sm-6">
                                                <input id="Contact_Name" name="Contact_Name" class="form-control" type="text" placeholder="联系人姓名">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">移动电话</span>
                                            <div class="col-sm-6">
                                                <input id="Mobile_Phone" name="Mobile_Phone" class="form-control" type="text" placeholder="移动电话">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">家庭电话</span>
                                            <div class="col-sm-6">
                                                <input id="Home_Phone" name="Home_Phone" class="form-control" type="text" placeholder="家庭电话">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">工作电话</span>
                                            <div class="col-sm-6">
                                                <input id="Office_Phone" name="Office_Phone" class="form-control" type="text" placeholder="工作的话">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">家庭地址</span>
                                            <div class="col-sm-6">
                                                <input id="city" name="city" class="form-control" type="text" placeholder="家庭地址">

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">助理电话</span>
                                            <div class="col-sm-6">
                                                <input id="Asst_Phone" name="Asst_Phone" class="form-control" type="text" placeholder="助理电话">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">助理名字</span>
                                            <div class="col-sm-6">
                                                <input id="Asst_Name" name="Asst_Name" class="form-control" type="text" placeholder="助理姓名">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">性别</span>
                                            <div class="col-sm-6">
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
                                            <span class="col-sm-4 control-label">工作部门</span>
                                            <div class="col-sm-6">
                                                <input id="Department" name="Department" class="form-control" type="text">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">职位</span>
                                            <div class="col-sm-6">
                                                <input id="Designation" name="Designation" class="form-control" type="text">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">电子邮箱</span>
                                            <div class="col-sm-6">
                                                <input id="Email" name="Email" class="form-control" type="text">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">工作单位</span>
                                            <div class="col-sm-6">
                                                <input id="Company" name="Company" class="form-control" type="text">
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">负责人</span>
                                            <div class="col-sm-6">
                                                <input id="Manager" name="Manager" class="form-control" type="text">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">生日日期</span>
                                            <div class="col-sm-6">
                                                <input id="Birth" name="Birth" class="form-control" type="date">

                                            </div>
                                        </div>

                                        {{ csrf_field() }}

                                        <div class="form-group">
                                            <div class="col-sm-8 col-sm-offset-4">
                                                <button class="btn btn-primary btn-lg" type="submit">提交</button>

                                                <button class="btn btn-default btn-lg" data-dismiss="modal" style="margin-left:30px">取消</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>联系人名</th>
                                <th>移动电话</th>
                                <th>家庭电话</th>
                                <th>办公电话</th>
                                <th>操作选项</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td>{{$contact->Contact_Name}}</td>
                                    <td>{{$contact->Mobile_Phone}}</td>
                                    <td>{{$contact->Home_Phone}}</td>
                                    <td>{{$contact->Office_Phone}}</td>
                                    <td>
                                        <a href="/admin/contacts/read/{{ $contact->id }}" style="color: black;"><span class="glyphicon glyphicon-pencil" STYLE="margin-left: 10px; cursor:pointer"/></a>
                                        <a href="/admin/contacts/del/{{ $contact->id }}" style="color: black;"><span class="glyphicon glyphicon-trash" STYLE="margin-left: 10px; cursor:pointer"/></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$contacts->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection