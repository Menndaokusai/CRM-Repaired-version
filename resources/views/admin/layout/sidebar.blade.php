<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{\Auth::guard("web")->user()->name}}</p>
                <i class="fa fa-circle text-success"></i> Online
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header" style="color: #578aa0;">MAIN NAVIGATION</li>
            <li class="treeview active">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>权限管理</span>
                    <span class="pull-right-container"></span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/users"><i class="fa fa-circle-o"></i> 用户管理</a></li>
                </ul>
            </li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>市场营销</span>
                    <span class="pull-right-container"></span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/campaign"><i class="fa fa-circle-o"></i> 营销活动</a></li>
                    <li><a href="/admin/potentialcustomer"><i class="fa fa-circle-o"></i> 潜在客户</a></li>
                </ul>
            </li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>销售管理</span>
                    <span class="pull-right-container"></span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/customer"><i class="fa fa-circle-o"></i> 客户</a></li>
                    <li><a href="/admin/contact"><i class="fa fa-circle-o"></i> 联系人</a></li>
                    <li><a href="/admin/opportunity"><i class="fa fa-circle-o"></i> 销售机会</a></li>
                </ul>
            </li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>售后服务</span>
                    <span class="pull-right-container"></span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/ticket"><i class="fa fa-circle-o"></i> 问题单</a></li>
                    <li><a href="/admin/servicecontract"><i class="fa fa-circle-o"></i> 服务合同</a></li>
                    <li><a href="/admin/project"><i class="fa fa-circle-o"></i> 项目任务</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>