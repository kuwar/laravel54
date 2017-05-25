<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <div class="clearfix"></div>
        <!--- Profile -->
        <div class="profile-info">
            <div class="col-xs-4">
                <a href="profile.html" class="rounded-image profile-image"><img
                            src="{{URL::to('admin/coco/images/users/user-100.jpg')}}"></a>
            </div>
            <div class="col-xs-8">
                <div class="profile-text">Welcome <b>{{ Auth::user()->name }}</b></div>
                <div class="profile-buttons">
                    <a class="md-trigger" data-modal="logout-modal" title="Sign Out"><i
                                class="fa fa-power-off text-red-1"></i></a>
                </div>
            </div>
        </div>
        <!--- Divider -->
        <div class="clearfix"></div>
        <hr class="divider"/>
        <div class="clearfix"></div>
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li class=''><a href="{{url('admin/dashboard')}}"
                                class="{{ Request::segment(2) == 'dashboard' ? 'active' : '' }}"><i
                                class='icon-home-3'></i><span>Dashboard </span></a></li>
                {{--Users--}}
                <li class='has_sub'><a href='javascript:void(0);'><i class='icon-user-3'></i><span>Users</span>
                        <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                        <li><a href="{{url('admin/users')}}"
                               class="{{ (Request::segment(2) == 'users' && Request::segment(3) == '') ? 'active' : '' }}"><span>List users</span></a>
                        </li>
                        <li>
                            <a href={{url('admin/users/create')}} class="{{ (Request::segment(2) == 'users' && Request::segment(3) == 'create') ? 'active' : '' }}"><span>Create user</span></a>
                        </li>
                    </ul>
                </li>
                <li class='has_sub'><a href='javascript:void(0);'><i
                                class='icon-feather'></i><span>UI Elements</span> <span class="pull-right"><i
                                    class="fa fa-angle-down"></i></span></a>
                    <ul>
                        <li><a href='alerts.html'><span>Alerts</span></a></li>
                        <li><a href='buttons.html'><span>Buttons</span></a></li>
                        <li><a href='calendar.html'><span>Calendar</span></a></li>
                        <li><a href='grid.html'><span>Grid</span></a></li>
                        <li><a href='icons.html'><span>Icons</span></a></li>
                        <li><a href='modals.html'><span>Modals</span></a></li>
                        <li><a href='nested-list.html'><span>Nested List</span></a></li>
                        <li><a href='notifications.html'><span>Notifications</span></a></li>
                        <li><a href='portlets.html'><span>Portlets</span></a></li>
                        <li><a href='progress-bars.html'><span>Progress Bars</span></a></li>
                        <li><a href='tabs-accordions.html'><span>Tabs & Accordions</span></a></li>
                        <li><a href='typography.html'><span>Typography</span></a></li>
                    </ul>
                </li>
                <li class='has_sub'><a href='javascript:void(0);'><i class='icon-pencil-3'></i><span>Forms</span>
                        <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                        <li><a href='forms.html'><span>Form Elements</span></a></li>
                        <li><a href='advanced-forms.html'><span>Advanced Forms</span></a></li>
                        <li><a href='form-wizard.html'><span>Form Wizard</span></a></li>
                        <li><a href='form-validation.html'><span>Form Validation</span></a></li>
                        <li><a href='form-uploads.html'><span>File Uploads</span></a></li>
                    </ul>
                </li>
                <li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-table'></i><span>Tables</span>
                        <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                        <li><a href='tables.html'><span>Basic Tables</span></a></li>
                        <li><a href='datatables.html'><span>Datatables</span></a></li>
                    </ul>
                </li>
                <li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-map-marker'></i><span>Maps</span>
                        <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                        <li><a href='google-maps.html'><span>Google Maps</span></a></li>
                        <li><a href='vector-maps.html'><span>Vector Maps</span></a></li>
                    </ul>
                </li>
                <li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-envelope'></i><span>Email</span>
                        <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                        <li><a href='inbox.html'><span>Inbox</span></a></li>
                        <li><a href='read-message.html'><span>View Email</span></a></li>
                        <li><a href='new-message.html'><span>New Message</span></a></li>
                    </ul>
                </li>
                <li class='has_sub'><a href='javascript:void(0);'><i class='icon-chart-line'></i><span>Charts</span>
                        <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                        <li><a href='sparkline-charts.html'><span>Sparkline Charts</span></a></li>
                        <li><a href='morris-charts.html'><span>Morris Charts</span></a></li>
                        <li><a href='rickshaw-charts.html'><span>Rickshaw Charts</span></a></li>
                        <li><a href='other-charts.html'><span>Other Charts</span></a></li>
                    </ul>
                </li>
                <li class='has_sub'><a href='javascript:void(0);'><i class='icon-megaphone'></i><span>Extras</span>
                        <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                        <li><a href='blank.html'><span>Blank Page</span></a></li>
                        <li><a href='login.html'><span>Login</span></a></li>
                        <li><a href='register.html'><span>Register</span></a></li>
                        <li><a href='lockscreen.html'><span>Lock Screen</span></a></li>
                        <li><a href='404.html'><span>404 Error</span></a></li>
                        <li><a href='500.html'><span>500 Error</span></a></li>
                        <li><a href='profile.html'><span>User Profile</span></a></li>
                        <li><a href='invoice.html'><span>Invoice</span></a></li>
                        <li><a href='gallery.html'><span>Gallery</span></a></li>
                        <li><a href='maintenance.html'><span>Maintenance</span></a></li>
                        <li class='has_sub'><a href='javascript:void(0);'><span>3 Level menu</span> <span
                                        class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                            <ul>
                                <li><a href='javascript:void(0);'><span>Sub Item</span></a></li>
                            </ul>
                        </li>
                        <li class='has_sub'><a href='javascript:void(0);'><span>4 Level Menu</span> <span
                                        class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                            <ul>
                                <li class='has_sub'><a href='javascript:void(0);'><span>Sub Item - level 3</span>
                                        <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                                    <ul>
                                        <li><a href='javascript:void(0);'><span>Sub Item - level 4</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class='has_sub'><a href='javascript:void(0);'><span>Submenu with icons</span> <span
                                        class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                            <ul>
                                <li><a href='javascript:void(0);'><i
                                                class='fa fa-camera'></i><span>Item with icon</span></a></li>
                                <li><a href='javascript:void(0);'><i
                                                class='entypo entypo-users'></i><span>Another Item</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        <div class="clearfix"></div>
        <br><br><br>
    </div>
    <div class="left-footer">

    </div>
</div>