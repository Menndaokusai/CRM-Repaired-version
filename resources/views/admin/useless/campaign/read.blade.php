@extends("admin.layout.main")
@section("content")
    <style type="text/css">
        .content{
            padding:150px;
        }
    </style>
    <section class="content">
    <form class="form-horizontal"  id="editForm" action="/admin/campaigns/updt/{{ $read->id }}" method="post">
    <div class="form-group">
        <span class="col-sm-2 control-label">营销活动名</span>
        <div class="col-xs-3">
            <input id="Campaign_Name" name="Campaign_Name" class="form-control" type="text" placeholder="营销活动名" value="{{ $read->Campaign_Name }}">
        </div>
        <span class="col-sm-2 control-label">状态</span>
        <div class="col-xs-3">
            <select id="select" name="Status"   style="width: 260px; height: 30px; overflow-y:auto" >
                <option value="{{ $read->Campaign_Name }}">请选择</option>
                <option value="营销中">营销中</option>
                <option value="待定中">待定中</option>
                <option value="已结束">已结束</option>
                <option value="其他">其他</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <span class="col-sm-2 control-label">类型</span>
        <div class="col-xs-3">
            <select id="select" name="Type"  style="width: 260px; height: 30px; overflow-y:auto" >
                <option value="{{ $read->Type }}">请选择</option>
                <option value="互动型活动">互动型活动</option>
                <option value="猎奇型活动">猎奇型活动</option>
                <option value="体验型活动">体验型活动</option>
                <option value="认同型活动">认同型活动</option>
                <option value="隐私型活动">隐私型活动</option>
            </select>
        </div>
        <span class="col-sm-2 control-label">预期结束日期</span>
        <div class="col-xs-3">
            <input id="Expected_Close_Date" name="Expected_Close_Date" class="form-control" type="date" placeholder="预期结束日期" value="{{ $read->Expected_Close_Date }}">
        </div>
    </div>

    <div class="form-group">
        <span class="col-sm-2 control-label">主办方</span>
        <div class="col-xs-3">
            <input id="Sponsor" name="Sponsor" class="form-control" type="text" placeholder="主办方" value="{{ $read->Sponsor }}">

        </div>
        <span class="col-sm-2 control-label">目标受众</span>
        <div class="col-xs-3">
            <input id="Target_Audience" name="Target_Audience" class="form-control" type="text" placeholder="目标受众" value="{{ $read->Target_Audience }}">
        </div>
    </div>

    <div class="form-group">
        <span class="col-sm-2 control-label">规模</span>
        <div class="col-xs-3">
            <input id="Target_Size" name="Target_Size" class="form-control" type="text" placeholder="规模" value="{{ $read->Target_Size }}">
        </div>
        <span class="col-sm-2 control-label">寄送数量</span>
        <div class="col-xs-3">
            <input id="Num_Sent" name="Num_Sent" class="form-control" type="text" placeholder="寄送数量" value="{{ $read->Num_Sent }}">
        </div>
    </div>

    <div class="form-group">
        <span class="col-sm-2 control-label">预算成本</span>
        <div class="col-xs-3">
            <input id="Budget_Cost" name="Budget_Cost" class="form-control" type="text" placeholder="预算成本" value="{{ $read->Budget_Cost }}">
        </div>
        <span class="col-sm-2 control-label">实际成本</span>
        <div class="col-xs-3">
            <input id="Actual_Cost" name="Actual_Cost" class="form-control" type="text" placeholder="实际成本" value="{{ $read->Actual_Cost }}">
        </div>
    </div>

    <div class="form-group">
        <span class="col-sm-2 control-label">预期响应</span>
        <div class="col-xs-3">
            <input id="Expected_Response" name="Expected_Response" class="form-control" type="text" placeholder="预期响应" value="{{ $read->Expected_Response }}">
        </div>
        <span class="col-sm-2 control-label">预期收益</span>
        <div class="col-xs-3">
            <input id="Expected_Revenue" name="Expected_Revenue" class="form-control" type="text" placeholder="预期收益" value="{{ $read->Expected_Revenue }}">
        </div>
    </div>

    <div class="form-group">
        <span class="col-sm-2 control-label">预期销售数量</span>
        <div class="col-xs-3">
            <input id="Expected_Sales_Count" name="Expected_Sales_Count" class="form-control" type="text" placeholder="预期销售数量" value="{{ $read->Expected_Sales_Count }}">
        </div>
        <span class="col-sm-2 control-label">实际销售数量</span>
        <div class="col-xs-3">
            <input id="Actual_Sales_Count" name="Actual_Sales_Count" class="form-control" type="text" placeholder="实际销售数量" value="{{ $read->Actual_Sales_Count }}">
        </div>
    </div>

    <div class="form-group">
        <span class="col-sm-2 control-label">预期响应数量</span>
        <div class="col-xs-3">
            <input id="Expected_Response_Count" name="Expected_Response_Count" class="form-control" type="text" placeholder="预期响应数量" value="{{ $read->Expected_Response_Count }}">
        </div>
        <span class="col-sm-2 control-label">实际响应数量</span>
        <div class="col-xs-3">
            <input id="Actual_Response_Count" name="Actual_Response_Count" class="form-control" type="text" placeholder="实际响应数量" value="{{ $read->Actual_Response_Count }}">
        </div>
    </div>

    <div class="form-group">
        <span class="col-sm-2 control-label">预期投资回报率</span>
        <div class="col-xs-3">
            <input id="Expected_ROI" name="Expected_ROI" class="form-control" type="text" placeholder="预期投资回报率" value="{{ $read->Expected_ROI }}">
        </div>
        <span class="col-sm-2 control-label">实际投资回报率</span>
        <div class="col-xs-3">
            <input id="Actual_ROI" name="Actual_ROI" class="form-control" type="text" placeholder="实际投资回报率" value="{{ $read->Actual_ROI }}">
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
            <a href="/admin/campaign"><span class="btn btn-default btn-small" data-dismiss="modal" style="margin-left:10px;">取消</span></a>
        </div>
    </div>
</form>
    </section>
@endsection