@extends("admin.layout.main")
@section("content")
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h1 class="box-title" ><B>营销机会</B></h1>
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
                                    <form class="form-horizontal"  id="editForm" action="/admin/opp/add" method="post">
                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">销售机会名</span>
                                            <div class="col-sm-6">
                                                <input id="Opportunity_Name" name="Opportunity_Name" class="form-control" type="text" placeholder="销售机会名">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">客户名</span>
                                            <div class="col-sm-6">
                                                <input id="Account_Name" name="Account_Name" class="form-control" type="text" placeholder="客户名">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">联系人</span>
                                            <div class="col-sm-6">
                                                <input id="Contact_Name" name="Contact_Name" class="form-control" type="text" placeholder="联系人">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">金额</span>
                                            <div class="col-sm-6">
                                                <input id="Amount" name="Amount" class="form-control" type="text" placeholder="金额">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">类型</span>
                                            <div class="col-sm-6">


                                                <select id="select"  name="Type"  style="width: 260px; height: 30px; overflow-y:auto" >
                                                    <option value="请选择">请选择</option>
                                                    <option value="网络销售">网络销售</option>
                                                    <option value="线下销售">线下销售</option>
                                                    <option value="其他">其他</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">预期结束日期</span>
                                            <div class="col-sm-6">
                                                <input id="Expected_Close_Date" name="Expected_Close_Date" class="form-control" type="date" placeholder="预期结束日期">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">销售阶段</span>
                                            <div class="col-sm-6">
                                                <input id="Sales_Stage" name="Sales_Stage" class="form-control" type="text" placeholder="销售阶段">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">预测金额</span>
                                            <div class="col-sm-6">
                                                <input id="Probability" name="Probability" class="form-control" type="text" placeholder="预测金额">
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
                                <th>销售机会名</th>
                                <th>客户名</th>
                                <th>联系人名</th>
                                <th>销售阶段</th>
                                <th>预期结束日期</th>
                                <th>金额</th>
                                <th>负责人</th>
                                <th>操作选项</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($opps as $opp)
                                <tr>
                                    <td>{{$opp->Opportunity_Name}}</td>
                                    <td>{{$opp->Account_Name}}</td>
                                    <td>{{$opp->Contact_Name}}</td>
                                    <td>{{$opp->Sales_Stage}}</td>
                                    <td>{{$opp->Expected_Close_Date}}</td>
                                    <td>{{$opp->Amount}}</td>
                                    <td>{{$opp->Manager}}</td>
                                    <td>
                                        <a href="/admin/opp/read/{{ $opp->id }}" style="color: black;"><span class="glyphicon glyphicon-pencil" STYLE="margin-left: 10px; cursor:pointer"/></a>
                                        <a href="/admin/opp/del/{{ $opp->id }}" style="color: black;"><span class="glyphicon glyphicon-trash" STYLE="margin-left: 10px; cursor:pointer"/></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$opps->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection