<!-- Main Header -->
<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">
        <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>

        <ul class="nav navbar-top-links navbar-left hidden-xs">
            <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
            <li>
                <form role="search" class="app-search hidden-xs">
                    <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
            </li>
        </ul>
        <ul class="nav navbar-top-links navbar-right pull-right">
            <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
                    <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                <ul class="dropdown-menu mailbox animated bounceInDown">
                    <li>
                        <div class="drop-title">You have 4 new messages</div>
                    </li>
                    <li>
                        <div class="message-center">
                            <a href="#">
                                <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                <div class="mail-contnet">
                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                            </a>
                            <a href="#">
                                <div class="user-img"> <img src="../plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                <div class="mail-contnet">
                                    <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                            </a>
                            <a href="#">
                                <div class="user-img"> <img src="../plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                <div class="mail-contnet">
                                    <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                            </a>
                            <a href="#">
                                <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                <div class="mail-contnet">
                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                    </li>
                </ul>
                <!-- /.dropdown-messages -->
            </li>
            <!-- /.dropdown -->
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="{{ Admin::user()->avatar }}" class="img-circle" width="36" alt="User Image"><b class="hidden-xs">{{ Admin::user()->name }}</b> </a>
                <ul class="dropdown-menu dropdown-user animated flipInY">
                    <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                    <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{ admin_base_path('auth/setting') }}"><i class="ti-settings"></i> {{ trans('admin.settings') }}</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{ admin_base_path('auth/logout') }}"><i class="fa fa-power-off"></i> {{ trans('admin.logout') }}</a></li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- .Megamenu -->
            <li class="mega-dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><span class="hidden-xs">Menu</span> <i class="icon-options-vertical"></i></a>
                <ul class="dropdown-menu mega-dropdown-menu animated bounceInDown">
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Portfolios</li>
                            <li><a href="">LFIF Portfolio</a></li>
                            <li><a href="">LFIF2 Portfolio</a></li>
                            <li><a href="">Account Summary</a></li>
                            <li><a href="">Intermidate Transfer</a></li>
                            <li><a href="">Certificate</a></li>
                            <li><a href="">Asset Allocation</a></li>
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Fund Management</li>
                            <li><a href="">Deposit Fund</a></li>
                            <li><a href="">Withdraw Fund</a></li>
                        </ul>
                        <ul>
                            <li class="dropdown-header">Statements</li>
                            <li><a href="">Purchase Contract</a></li>
                            <li><a href="">Sell Contract</a></li>
                            <li><a href="">Cash Contract</a></li>
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Orders</li>
                            <li><a href="">View Order</a></li>
                            <li><a href="">Submit Order</a></li>
                            <li><a href="">WatchList</a></li>
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Reports</li>
                            <li> <a href="">Client Statement</a> </li>
                            <li><a href="">Trade History</a></li>
                        </ul>
                        <ul>
                            <li class="dropdown-header">Support</li>
                            <li> <a href="">FAQ</a> </li>
                            <li><a href="">Help</a></li>
                        </ul>
                    </li>
                    <li class="col-sm-12 m-t-40 demo-box">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="white-box text-center bg-purple"><a href="" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Make Deposit</a></div>
                            </div>
                            <div class="col-sm-2">
                                <div class="white-box text-center bg-success"><a href="" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Make Withdrawal</a></div>
                            </div>
                            <div class="col-sm-2">
                                <div class="white-box text-center bg-info"><a href="" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Register Funds</a></div>
                            </div>

                            <div class="col-sm-2">
                                <div class="white-box text-center bg-danger"><a href="" target="_blank" class="text-white"><i class="linea-icon linea-ecommerce fa-fw" data-icon="d"></i><br/>Register a Trade</a></div>
                            </div>
                            <div class="col-sm-2">
                                <div class="white-box text-center bg-inverse"><a href="" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Need Help?</a></div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <!-- /.Megamenu -->
            {{--<li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>--}}
            <!-- /.dropdown -->
        </ul>
        <div class="top-left-part"><a class="logo" href="{{ admin_base_path('/') }}" class="logo">
                <b>{!! config('admin.logo', config('admin.name')) !!}</b>
                <span class="hidden-xs">{!! config('admin.logo-mini', config('admin.name')) !!}</span></a>

        </div>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
</nav>
