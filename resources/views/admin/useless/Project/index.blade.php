@extends("admin.layout.main")
@section("content")
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h1 class="box-title" ><B>项目任务</B></h1>
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
                                    <form class="form-horizontal"  id="editForm" action="/admin/projects/add" method="post">
                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">项目名</span>
                                            <div class="col-sm-6">
                                                <input id="Project_Name" name="Project_Name" class="form-control" type="text" placeholder="项目名">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">类型</span>
                                            <div class="col-sm-6">
                                                <input id="Type" name="Type" class="form-control" type="text" placeholder="类型">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">状态</span>
                                            <div class="col-sm-6">
                                                 <select id="select"  name="Status"  style="width: 260px; height: 30px; overflow-y:auto" >
                                                    <option value="请选择">请选择</option>
                                                    <option value="正在进行">正在进行</option>
                                                    <option value="等待开始">等待开始</option>
                                                    <option value="已完成">已完成</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">开始日期</span>
                                            <div class="col-sm-6">
                                                <input id="Start_Date" name="Start_Date" class="form-control" type="date" placeholder="开始日期">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">目标结束日期</span>
                                            <div class="col-sm-6">
                                                <input id="Target_End_Date" name="Target_End_Date" class="form-control" type="date" placeholder="目标结束日期">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">实际结束日期</span>
                                            <div class="col-sm-6">
                                                <input id="Actual_End_Date" name="Actual_End_Date" class="form-control" type="date" placeholder="实际结束日期">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">项目预算</span>
                                            <div class="col-sm-6">
                                                <input id="Target_Budget" name="Target_Budget" class="form-control" type="text" placeholder="项目预算">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">项目地址</span>
                                            <div class="col-sm-6">
                                                <input id="Project_Url" name="Project_Url" class="form-control" type="text" placeholder="项目地址">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">优先级</span>
                                            <div class="col-sm-6">
                                                <select id="select" name="Priority"   style="width: 260px; height: 30px; overflow-y:auto" >
                                                    <option value="请选择">请选择</option>
                                                    <option value="一等">一等</option>
                                                    <option value="二等">二等</option>
                                                    <option value="三等">三等</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">项目进度</span>
                                            <div class="col-sm-6">
                                                <input id="Progress" name="Progress" class="form-control" type="text" placeholder="项目进度">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">负责人</span>
                                            <div class="col-sm-6">
                                                <input id="Manager" name="Manager" class="form-control" type="text">
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
                                <th>项目名</th>
                                <th>开始日期</th>
                                <th>预计结束日期</th>
                                <th>实际结束日期</th>
                                <th>项目预算</th>
                                <th>项目进度</th>
                                <th>状态</th>
                                <th>负责人</th>
                                <th>操作选项</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($projects as $project)
                                <tr>
                                    <td>{{$project->Project_Name}}</td>
                                    <td>{{$project->Start_Date}}</td>
                                    <td>{{$project->Target_End_Date}}</td>
                                    <td>{{$project->Actual_End_Date}}</td>
                                    <td>{{$project->Target_Budget}}</td>
                                    <td>{{$project->Progress}}</td>
                                    <td>{{$project->Status}}</td>
                                    <td>{{$project->Manager}}</td>
                                    <td>
                                        <a href="/admin/projects/read/{{ $project->id }}" style="color: black;"><span class="glyphicon glyphicon-pencil"  STYLE="margin-left: 10px; cursor:pointer"/></a>
                                        <a href="/admin/projects/del/{{ $project->id }}" style="color: black;"><span class="glyphicon glyphicon-trash" STYLE="margin-left: 10px; cursor:pointer"/></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$projects->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection