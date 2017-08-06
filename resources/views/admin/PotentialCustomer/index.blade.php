@extends("admin.layout.main")
@section("content")
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h1 class="box-title" ><B>潜在客户</B></h1>
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
                                    <form class="form-horizontal"  id="editForm" action="/admin/pc/add" method="post">
                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">潜在客户名</span>
                                            <div class="col-sm-6">
                                                <input id="PC_Name" name="PC_Name" class="form-control" type="text" placeholder="潜在客户名">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">行业</span>
                                            <div class="col-sm-6">
                                                <select id="select"  name="Industry"  style="width: 260px; height: 30px" >
                                                    <option value="请选择">请选择</option>
                                                    <option value="农、林、牧、渔业">农、林、牧、渔业</option>
                                                    <option value="煤炭开采和洗选业">煤炭开采和洗选业</option>
                                                    <option value="石油和天然气开采业">石油和天然气开采业</option>
                                                    <option value="其他采矿业">其他采矿业</option>
                                                    <option value="农副食品加工业">农副食品加工业</option>
                                                    <option value="]纺织业">]纺织业</option>
                                                    <option value="木材加工及木、竹、藤、棕、草制品业">木材加工及木、竹、藤、棕、草制品业</option>
                                                    <option value="家具制造业">家具制造业</option>
                                                    <option value="造纸及纸制品业">造纸及纸制品业</option>
                                                    <option value="印刷业和记录媒介的复制">印刷业和记录媒介的复制</option>
                                                    <option value="文教体育用品制造业">文教体育用品制造业</option>
                                                    <option value="化学原料及化学制品制造业">化学原料及化学制品制造业</option>
                                                    <option value="化学纤维制造业">化学纤维制造业</option>
                                                    <option value="橡胶制品业">橡胶制品业</option>
                                                    <option value="通用设备制造业">通用设备制造业</option>
                                                    <option value="通信设备、计算机及其他电子设备制造业">通信设备、计算机及其他电子设备制造业</option>
                                                    <option value="废弃资源和废旧材料回收加工业">废弃资源和废旧材料回收加工业</option>
                                                    <option value="电力、热力的生产和供应业">电力、热力的生产和供应业</option>
                                                    <option value="城市公共交通业">城市公共交通业</option>
                                                    <option value="水上运输业">水上运输业</option>
                                                    <option value="航空运输业">航空运输业</option>
                                                    <option value="装卸搬运和其他运输服务业">装卸搬运和其他运输服务业</option>
                                                    <option value="电信和其他信息传输服务业">电信和其他信息传输服务业</option>
                                                    <option value="计算机服务业">计算机服务业</option>
                                                    <option value="软件业">软件业</option>
                                                    <option value="租赁和商务服务业">租赁和商务服务业</option>
                                                    <option value="商务服务业">商务服务业</option>
                                                    <option value="其他服务业">其他服务业</option>
                                                    <option value="教育">教育</option>
                                                    <option value="新闻出版业">新闻出版业</option>
                                                    <option value="文化艺术业">文化艺术业</option>
                                                    <option value="国家机构">国家机构</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">常用电话</span>
                                            <div class="col-sm-6">
                                                <input id="Primary_Phone" name="Primary_Phone" class="form-control" type="text" placeholder="常用电话">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">地址</span>
                                            <div class="col-sm-6">
                                                <input id="city" name="city" class="form-control" type="text" placeholder="地址">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-sm-4 control-label">邮箱</span>
                                            <div class="col-sm-6">
                                                <input id="Email" name="Email" class="form-control" type="text" placeholder="邮箱">
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
                                <th>潜在客户名</th>
                                <th>常用电话</th>
                                <th>行业</th>
                                <th>负责人</th>
                                <th>操作选项</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pcs as $pc)
                                <tr>
                                    <td>{{$pc->PC_Name}}</td>
                                    <td>{{$pc->Primary_Phone}}</td>
                                    <td>{{$pc->Industry}}</td>
                                    <td>{{$pc->Manager}}</td>
                                    <td>
                                        <a href="/admin/pc/read/{{ $pc->id }}" style="color: black;"><span class="glyphicon glyphicon-pencil" STYLE="margin-left: 10px; cursor:pointer"/></a>
                                        <a href="/admin/pc/del/{{ $pc->id }}" style="color: black;"><span class="glyphicon glyphicon-trash" STYLE="margin-left: 10px; cursor:pointer"/></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$pcs->links()}}
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection