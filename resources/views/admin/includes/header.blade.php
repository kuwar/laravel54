<div class="topbar">
    <div class="topbar-left">
        <div class="logo">
            <h1><a href="#"><img src="{{URL::to('admin/coco/assets/img/logo.png')}}" alt="Logo"></a></h1>
        </div>
        <button class="button-menu-mobile open-left">
            <i class="fa fa-bars"></i>
        </button>
    </div>
    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-collapse2">
                <ul class="nav navbar-nav hidden-xs">
                    <li class="language_bar dropdown hidden-xs">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">English (US) <i
                                    class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#">German</a></li>
                            <li><a href="#">French</a></li>
                            <li><a href="#">Italian</a></li>
                            <li><a href="#">Spanish</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right top-navbar">
                    <li class="dropdown iconify hide-phone"><a href="#" onclick="javascript:toggle_fullscreen()"><i
                                    class="icon-resize-full-2"></i></a></li>
                    <li class="dropdown topbar-profile">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                                    class="rounded-image topbar-profile-image"><img
                                        src="{{URL::to('admin/coco/images/users/user-35.jpg')}}"></span>
                            Jane <strong>Doe</strong> <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">My Profile</a></li>
                            <li><a href="#">Change Password</a></li>
                            <li><a href="#">Account Setting</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-help-2"></i> Help</a></li>
                            <li><a href="lockscreen.html"><i class="icon-lock-1"></i> Lock me</a></li>
                            <li><a class="md-trigger" data-modal="logout-modal"><i class="icon-logout-1"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>