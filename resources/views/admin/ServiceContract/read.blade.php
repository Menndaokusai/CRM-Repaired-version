@extends("admin.layout.main")
@section("content")
    <style type="text/css">
        .content{
            padding:150px;
        }
    </style>
    <section class="content">
                <form class="form-horizontal"  id="editForm" action="/admin/sc/updt/{{$read->id}}}" method="post">
                        <div class="form-group">
                            <span class="col-sm-2 control-label">主题</span>
                            <div class="col-xs-3">
                                <input id="Subject" name="Subject" class="form-control" type="text" placeholder="主题" value="{{ $read->Subject }}">
                            </div>
                            <span class="col-sm-2 control-label">状态</span>
                            <div class="col-xs-3">
                                <select id="select" name="Status"  style="width: 260px; height: 30px; overflow-y:auto" >
                                    <option value="{{ $read->Status }}">请选择</option>
                                    <option value="进行中">进行中</option>
                                    <option value="正在签约">正在签约</option>
                                    <option value="其他">其他</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-sm-2 control-label">类型</span>
                            <div class="col-xs-3">
                                <select id="select" name="Type"  style="width: 260px; height: 30px; overflow-y:auto" >
                                    <option value="{{ $read->Type }}">请选择</option>
                                    <option value="买卖合同">买卖合同</option>
                                    <option value="租赁合同">租赁合同</option>
                                    <option value="其他">其他</option>
                                </select>
                            </div>
                            <span class="col-sm-2 control-label">开始日期</span>
                            <div class="col-xs-3">
                                <input id="Start_Date" name="Start_Date" class="form-control" type="date" placeholder="开始日期" value="{{ $read->Start_Date }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-sm-2 control-label">结束日期</span>
                            <div class="col-xs-3">
                                <input id="End_Date" name="End_Date" class="form-control" type="date" placeholder="结束日期" value="{{ $read->End_Date }}">
                            </div>
                            <span class="col-sm-2 control-label">跟踪单位</span>
                            <div class="col-xs-3">
                                <input id="Tracking_Unit" name="Tracking_Unit" class="form-control" type="text" placeholder="跟踪单位" value="{{ $read->Tracking_Unit }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-sm-2 control-label">单位总数</span>
                            <div class="col-xs-3">
                                <input id="Total_Units" name="Total_Units" class="form-control" type="text" placeholder="单位总数" value="{{ $read->Total_Units }}">
                            </div>
                            <span class="col-sm-2 control-label">已使用单位</span>
                            <div class="col-xs-3">
                                <input id="Used_Units" name="Used_Units" class="form-control" type="text" placeholder="已使用单位" value="{{ $read->Used_Units }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-sm-2 control-label">相关方</span>
                            <div class="col-xs-3">
                                <input id="Related" name="Related" class="form-control" type="text" placeholder="相关方" value="{{ $read->Related }}">
                            </div>
                            <span class="col-sm-2 control-label">优先级</span>
                            <div class="col-xs-3">
                                <select id="select" name="Priority"   style="width: 260px; height: 30px; overflow-y:auto" >
                                    <option value="{{ $read->Priority }}">请选择</option>
                                    <option value="一等">一等</option>
                                    <option value="二等">二等</option>
                                    <option value="三等">三等</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
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
                            <a href="/admin/servicecontract"><span class="btn btn-default btn-small" data-dismiss="modal" style="margin-left:10px;">取消</span></a>
                        </div>
                    </div>
                </form>
</section>
@endsection
