@extends("admin.layout.main")
@section("content")
    <style type="text/css">
        .content{
            padding:150px;
        }
    </style>
    <section class="content">
                <form class="form-horizontal"  id="editForm" action="/admin/pc/updt/{{$read->id}}}" method="post">
                            <div class="form-group">
                                <span class="col-sm-2 control-label">潜在客户名</span>
                                <div class="col-xs-3">
                                    <input id="PC_Name" name="PC_Name" class="form-control" type="text" placeholder="潜在客户名" value="{{ $read->PC_Name }}">
                                </div>
                                <span class="col-sm-2 control-label">行业</span>
                                <div class="col-xs-3">
                                    <select id="select"  name="Industry"  style="width: 260px; height: 30px">
                                        <option value="{{ $read->Industry }}">请选择</option>
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
                                <span class="col-sm-2 control-label">常用电话</span>
                                <div class="col-xs-3">
                                    <input id="Primary_Phone" name="Primary_Phone" class="form-control" type="text" placeholder="常用电话" value="{{ $read->Primary_Phone }}">
                                </div>
                                <span class="col-sm-2 control-label">地址</span>
                                <div class="col-xs-3">
                                    <input id="city" name="city" class="form-control" type="text" placeholder="地址" value="{{ $read->city }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-sm-2 control-label">邮箱</span>
                                <div class="col-xs-3">
                                    <input id="Email" name="Email" class="form-control" type="text" placeholder="邮箱" value="{{ $read->Email }}">
                                </div>
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
                            <a href="/admin/potentialcustomer"><span class="btn btn-default btn-small" data-dismiss="modal" style="margin-left:10px;">取消</span></a>
                        </div>
                    </div>
                </form>
</section>
@endsection
