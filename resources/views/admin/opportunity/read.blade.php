@extends("admin.layout.main")
@section("content")
    <style type="text/css">
        .content{
            padding:150px;
        }
    </style>
    <section class="content">
                <form class="form-horizontal"  id="editForm" action="/admin/opp/updt/{{$read->id}}}" method="post">
                    <div class="form-group">
                        <span class="col-sm-2 control-label">销售机会名</span>
                        <div class="col-xs-3">
                            <input id="Opportunity_Name" name="Opportunity_Name" class="form-control" type="text" placeholder="销售机会名" value="{{ $read->Opportunity_Name}}">
                        </div>
                        <span class="col-sm-2 control-label">客户名</span>
                        <div class="col-xs-3">
                            <input id="Account_Name" name="Account_Name" class="form-control" type="text" placeholder="客户名" value="{{ $read->Account_Name}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <span class="col-sm-2 control-label">联系人</span>
                        <div class="col-xs-3">
                            <input id="Contact_Name" name="Contact_Name" class="form-control" type="text" placeholder="联系人" value="{{ $read->Contact_Name}}">
                        </div>
                        <span class="col-sm-2 control-label">金额</span>
                        <div class="col-xs-3">
                            <input id="Amount" name="Amount" class="form-control" type="text" placeholder="金额" value="{{ $read->Amount}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <span class="col-sm-2 control-label">类型</span>
                        <div class="col-xs-3">
                            <select id="select"  name="Type"  style="width: 260px; height: 30px; overflow-y:auto"  >
                                <option value="{{ $read->Type}}">请选择</option>
                                <option value="网络销售">网络销售</option>
                                <option value="线下销售">线下销售</option>
                                <option value="其他">其他</option>
                            </select>
                        </div>
                        <span class="col-sm-2 control-label">预期结束日期</span>
                        <div class="col-xs-3">
                            <input id="Expected_Close_Date" name="Expected_Close_Date" class="form-control" type="date" placeholder="预期结束日期" value="{{ $read->Expected_Close_Date}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <span class="col-sm-2 control-label">销售阶段</span>
                        <div class="col-xs-3">
                            <input id="Sales_Stage" name="Sales_Stage" class="form-control" type="text" placeholder="销售阶段" value="{{ $read->Sales_Stage}}">
                        </div>
                        <span class="col-sm-2 control-label">预测金额</span>
                        <div class="col-xs-3">
                            <input id="Probability" name="Probability" class="form-control" type="text" placeholder="预测金额" value="{{ $read->Probability}}">
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
                            <a href="/admin/opportunity"><span class="btn btn-default btn-small" data-dismiss="modal" style="margin-left:10px;">取消</span></a>
                        </div>
                    </div>
                </form>
    </section>
@endsection
