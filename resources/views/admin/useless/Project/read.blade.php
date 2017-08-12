@extends("admin.layout.main")
@section("content")
    <style type="text/css">
        .content{
            padding:150px;
        }
    </style>
    <section class="content">
                <form class="form-horizontal"  id="editForm" action="/admin/projects/updt/{{$read->id}}}" method="post">
                     <div class="form-group">
                            <span class="col-sm-2 control-label">项目名</span>
                            <div class="col-xs-3">
                                <input id="Project_Name" name="Project_Name" class="form-control" type="text" placeholder="项目名" value="{{ $read->Project_Name}}">
                            </div>
                            <span class="col-sm-2 control-label">类型</span>
                            <div class="col-xs-3">
                                <input id="Type" name="Type" class="form-control" type="text" placeholder="类型" value="{{ $read->Type}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-sm-2 control-label">状态</span>
                            <div class="col-xs-3">
                                <select id="select"  name="Status"  style="width: 260px; height: 30px; overflow-y:auto">
                                    <option value="{{ $read->Status}}">请选择</option>
                                    <option value="正在进行">正在进行</option>
                                    <option value="等待开始">等待开始</option>
                                    <option value="已完成">已完成</option>
                                </select>
                            </div>
                            <span class="col-sm-2 control-label">开始日期</span>
                            <div class="col-xs-3">
                                <input id="Start_Date" name="Start_Date" class="form-control" type="date" placeholder="开始日期" value="{{ $read->Start_Date}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-sm-2 control-label">目标结束日期</span>
                            <div class="col-xs-3">
                                <input id="Target_End_Date" name="Target_End_Date" class="form-control" type="date" placeholder="目标结束日期" value="{{ $read->Target_End_Date}}">
                            </div>
                            <span class="col-sm-2 control-label">实际结束日期</span>
                            <div class="col-xs-3">
                                <input id="Actual_End_Date" name="Actual_End_Date" class="form-control" type="date" placeholder="实际结束日期" value="{{ $read->Actual_End_Date}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-sm-2 control-label">项目预算</span>
                            <div class="col-xs-3">
                                <input id="Target_Budget" name="Target_Budget" class="form-control" type="text" placeholder="项目预算" value="{{ $read->Target_Budget}}">
                            </div>
                            <span class="col-sm-2 control-label">项目地址</span>
                            <div class="col-xs-3">
                                <input id="Project_Url" name="Project_Url" class="form-control" type="text" placeholder="项目地址" value="{{ $read->Project_Url}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-sm-2 control-label">优先级</span>
                            <div class="col-xs-3">
                                <select id="select" name="Priority"   style="width: 260px; height: 30px; overflow-y:auto" >
                                    <option value="{{ $read->Priority}}">请选择</option>
                                    <option value="一等">一等</option>
                                    <option value="二等">二等</option>
                                    <option value="三等">三等</option>
                                </select>
                            </div>
                            <span class="col-sm-2 control-label">项目进度</span>
                            <div class="col-xs-3">
                                <input id="Progress" name="Progress" class="form-control" type="text" placeholder="项目进度" value="{{ $read->Progress}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-sm-2 control-label">负责人</span>
                            <div class="col-xs-3">
                                <input id="Manager" name="Manager" class="form-control" type="text" placeholder="负责人" value="{{ $read->Manager}}">
                            </div>
                        </div>


                    {{ method_field("PUT")}}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-5">
                            <button class="btn btn-primary btn-small" type="submit">提交</button>
                            <a href="/admin/project"><span class="btn btn-default btn-small" data-dismiss="modal" style="margin-left:10px;">取消</span></a>
                        </div>
                    </div>
                </form>
</section>
@endsection
