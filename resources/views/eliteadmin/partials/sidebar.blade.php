<!-- Left navbar-header -->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            {{--<li class="sidebar-search hidden-sm hidden-md hidden-lg">--}}
                {{--<!-- input-group -->--}}
                {{--<div class="input-group custom-search-form">--}}
                    {{--<input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">--}}
            {{--<button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>--}}
            {{--</span> </div>--}}
                {{--<!-- /input-group -->--}}
            {{--</li>--}}
            <li class="user-pro">
                <!-- Sidebar user panel (optional) -->
                <a href="#" class="waves-effect"><img src="{{ Admin::user()->avatar }}" class="img-circle" alt="User Image"> <span class="hide-menu"> <p>{{ Admin::user()->name }}</p><span class="fa arrow"></span></span>
                </a>
                <ul class="nav nav-second-level">
                    <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                    <li><a href="javascript:void(0)"><i class="ti-wallet"></i> My Balance</a></li>
                    <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                    <li><a href="javascript:void(0)"><i class="ti-settings"></i> {{ trans('admin.settings') }}</a></li>
                    <li><a href="{{ admin_base_path('auth/logout') }}"><i class="fa fa-power-off"></i> {{ trans('admin.logout') }}</a></li>
                </ul>
            </li>
            <li class="nav-small-cap m-t-10">{{ trans('admin.menu') }}</li>
            @each('admin::partials.menu', Admin::menu(), 'item')
        </ul>
    </div>
</div>
<!-- Left navbar-header end -->