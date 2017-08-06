@extends("admin.layout.main")
@section("content")
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h1 class="box-title" ><B>服务合同</B></h1>
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
                                    <form class="form-horizontal"  id="editForm" action="/admin/sc/add" method="post">
                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">主题</span>
                                            <div class="col-sm-6">
                                                <input id="Subject" name="Subject" class="form-control" type="text" placeholder="主题">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">状态</span>
                                            <div class="col-sm-6">
                                                <select id="select" name="Status"  style="width: 260px; height: 30px; overflow-y:auto" >
                                                    <option value="请选择">请选择</option>
                                                    <option value="进行中">进行中</option>
                                                    <option value="正在签约">正在签约</option>
                                                    <option value="其他">其他</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">类型</span>
                                            <div class="col-sm-6">

                                                <select id="select" name="Type"  style="width: 260px; height: 30px; overflow-y:auto" >
                                                    <option value="请选择">请选择</option>
                                                    <option value="买卖合同">买卖合同</option>
                                                    <option value="租赁合同">租赁合同</option>
                                                    <option value="其他">其他</option>
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
                                            <span class="col-sm-4 control-label">结束日期</span>
                                            <div class="col-sm-6">
                                                <input id="End_Date" name="End_Date" class="form-control" type="date" placeholder="结束日期">

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">跟踪单位</span>
                                            <div class="col-sm-6">
                                                <input id="Tracking_Unit" name="Tracking_Unit" class="form-control" type="text" placeholder="跟踪单位">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">单位总数</span>
                                            <div class="col-sm-6">
                                                <input id="Total_Units" name="Total_Units" class="form-control" type="text" placeholder="单位总数">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">已使用单位</span>
                                            <div class="col-sm-6">
                                                <input id="Used_Units" name="Used_Units" class="form-control" type="text" placeholder="已使用单位">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">相关方</span>
                                            <div class="col-sm-6">
                                                <input id="Related" name="Related" class="form-control" type="text" placeholder="相关方">
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
                                <th>主题</th>
                                <th>相关方</th>
                                <th>负责人</th>
                                <th>开始日期</th>
                                <th>结束日期</th>
                                <th>状态</th>
                                <th>操作选项</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($scs as $sc)
                                <tr>
                                    <td>{{$sc->Subject}}</td>
                                    <td>{{$sc->Related}}</td>
                                    <td>{{$sc->Manager}}</td>
                                    <td>{{$sc->Start_Date}}</td>
                                    <td>{{$sc->End_Date}}</td>
                                    <td>{{$sc->Status}}</td>
                                    <td>
                                        <a href="/admin/sc/read/{{ $sc->id }}" style="color: black;"><span class="glyphicon glyphicon-pencil" STYLE="margin-left: 10px; cursor:pointer"/></a>
                                        <a href="/admin/sc/del/{{ $sc->id }}" style="color: black;"><span class="glyphicon glyphicon-trash" STYLE="margin-left: 10px; cursor:pointer"/></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$scs->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection